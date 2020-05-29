<?php

namespace App\Http\Controllers;



use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Services\CreateServicesRequest;
use App\Http\Requests\Services\UpdateServicesRequest;

class ServicesController extends Controller
{
    
    public function index()
    {
        
        $services = Service::latest()->get();
        $sn = 1;
    
        return view('admin.services.index', compact('services','sn' ));
        // return view('admin.services.index')->with('services', Service::all());
    }

    
    public function create()
    {
        $action = '/admin/services/';
        $service = null;

        return view('admin.services.create', compact('action', 'service'));
    }

    
    public function store(CreateServicesRequest $request)
    {
         $file_path1 = '';
        if ($request->image) {
            $file_path1 = FileUploader::uploadBase64File($request->image, $request->extension, 'services');
        }   


           $file_path2 = '';
        if ($request->icon) {
            $file_path2 = FileUploader::uploadBase64File($request->icon, $request->extension, 'services');
        }   
         Service::create([
           
                'service_name'=>$request->service_name,
                'service_image' => $file_path1,
                'service_icon' =>  $file_path2,
                'description' => $request->description
            ]);

     

             return redirect('/admin/services')->with('success', 'Services Created Successfully.');


    }

  
    public function show($id)
    {
        
    }

   
    public function edit(Service $service)
    {
         $action = '/admin/services/' . $service->id;
        
         return view('admin.services.create', compact('action', 'service'));
        //  return view('admin.services.create')->with('service', $service);
    }

    
    public function update(UpdateServicesRequest $request, Service $service)
    {
    
         $file_path1 = $service->image;
        if ($request->image) {
            $file_path = FileUploader::uploadBase64File($request->image, $request->extension, 'services');
        }  

         $file_path2 = $service->icon;
        if ($request->icon) {
            $file_path = FileUploader::uploadBase64File($request->icon, $request->extension, 'services');
        }  

        $service->update([
           
                'service_name'=>$request->service_name,
                'service_image' => $file_path1,
                'service_icon' =>  $file_path2,
                'description' => $request->description
        
        ]);

        

          return redirect('/admin/services')->with('success', ' Service Updated Successfully!');

    }

   
    public function destroy(Service $service)
    {
       
        $message = $service->service_name  . ' service deleted successfully';
        $service->delete();
       
        
        return redirect()->back()->with('success', $message);
    }
}
