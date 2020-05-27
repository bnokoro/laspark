<?php

namespace App\Http\Controllers;



use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Services\CreateServicesRequest;
use App\Http\Requests\Services\UpdateServicesRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index')->with('services', Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServicesRequest $request)
    {
         Service::create([
           
                'service'=>$request->service,

                     
                'description' => $request->description
            ]);

            session()->flash('success', 'Services Created Successfully.');

            return redirect(route('admin.services.index'));
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
    public function edit(Service $service)
    {
         return view('admin.services.create')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicesRequest $request, Service $service)
    {
    
        $service->update([
           
                'service'=>$request->service,

                     
                'description' => $request->description
        
        ]);

         session()->flash('success', 'Services Updated Successfully.');

         return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        session()->flash('success', 'Services Deleted Successfully.');

        return redirect(route('admin.services.index'));
    }
}
