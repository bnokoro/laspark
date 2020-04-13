<?php

namespace App\Http\Controllers;

use App\ParksGarden;
use Illuminate\Http\Request;
use App\Http\Requests\ParksGardens\CreateParksGardensRequest;
use App\Http\Requests\ParksGardens\UpdateParksGardensRequest;

class ParksGardensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('parksgardens.index')->with('parksgardens', ParksGarden::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parksgardens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateParksGardensRequest $request)
    {
            ParksGarden::create([
                'price' => $request->price,
                'description' => $request->description,
                'availability' => $request->availability,
                'status'=>$request->status 
            ]);

            session()->flash('success', 'Parks and Gardens created Successfully.');

            return redirect(route('parksgardens.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ParksGarden $parksgarden)
    {
        return view('parksgardens.create')->with('parksgarden', $parksgarden);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParksGardensRequest $request, ParksGarden $parksgarden)
    {
        $parksgarden->update([
            'price' => $request->price,
            'description' => $request->description,
            'availability' => $request->availability,
            'status' => $request->status
        
        ]);

         session()->flash('success', 'Parks and Gardens Updated Successfully.');

         return redirect(route('parksgardens.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParksGarden $parksgarden)
    {
        $parksgarden->delete();

        session()->flash('success', 'Parks and Gardens Deleted Successfully.');

        return redirect(route('parksgardens.index'));
    }
}
