<?php

namespace App\Http\Controllers;

use App\ParksGarden;
use Illuminate\Http\Request;
use App\Http\Requests\ParksGardens\CreateParksGardensRequest;
use App\Http\Requests\ParksGardens\UpdateParksGardensRequest;

class ParksGardensController extends Controller
{
   
    public function index()
    {
        $parksgardens = ParksGarden::latest()->get();
        $sn = 1;

        return view('admin.parksgardens.index', compact('parksgardens','sn' ));
        //  return view('admin.parksgardens.index')->with('parksgardens', ParksGarden::all());
    }

    public function create()
    {
        $action = '/admin/parksgardens/';
        $parksgarden = null;

        return view('admin.parksgardens.create', compact('action', 'parksgarden'));
    }

    public function store(CreateParksGardensRequest $request)
    {
           $file_path = '';
        if ($request->image) {
            $file_path = FileUploader::uploadBase64File($request->image, $request->extension, 'parksgardens');
        }    
        
            ParksGarden::create([
                'park_name' => $request->park_name,
                'price' => $request->price,
                'image' => $file_path,
                'description' => $request->description,
                'availability' => $request->availability,
                'status'=>$request->status, 
                'land_area'=>$request->land_area,
                'toilets'=>$request->toilets, 
                'trees'=>$request->trees,  
                'latitude'=>$request->latitude,  
                'longitude'=>$request->longitude
            ]);

            
        
        return redirect('/admin/parksgardens')->with('success', ' Park Garden created successfully!');

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(ParksGarden $parksgarden)
    {
        $action = '/admin/parksgardens/' . $parksgarden->id;
        
         return view('admin.parksgardens.create', compact('action', 'parksgarden'));
        // return view('admin.parksgardens.create')->with('parksgarden', $parksgarden);
    }

    
    public function update(UpdateParksGardensRequest $request, ParksGarden $parksgarden)
    { 
         $file_path = $parksgarden->image;
        if ($request->image) {
            $file_path = FileUploader::uploadBase64File($request->image, $request->extension, 'parksgardens');
        }  
        
        $parksgarden->update([

            'park_name' => $request->park_name,
            'price' => $request->price,
            'image' => $file_path,
            'description' => $request->description,
            'availability' => $request->availability,
            'status' => $request->status,
            'land_area'=>$request->land_area,
            'toilets'=>$request->toilets, 
            'trees'=>$request->trees, 
            'latitude'=>$request->latitude,  
            'longitude'=>$request->longitude 
        
        ]);
             return redirect('/admin/parksgardens')->with('success', ' Park Garden updated successfully!');

   }

    public function destroy(ParksGarden $parksgarden)
    {
        $message = $parksgarden->park_name  . ' park deleted successfully';
        $parksgarden->delete();
       
        
        return redirect()->back()->with('success', $message);
    }
}
