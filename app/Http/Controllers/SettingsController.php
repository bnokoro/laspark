<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{

   public function index()
    {
        return view('admin.settings.settings')->with('setting', Setting::first());
    }

    public function updateHome(Request $request)
    {
        
        // $file_path = $setting->image;
        //  if ($request->image) {
        //     $file_path = FileUploader::uploadBase64File($request->image, $request->extension, 'settings');
        // }

        $request->validate([
            'site_logo' => 'required',
            'home_banner1' => 'required',
            'home_banner2' => 'required',
            'home_heading' => 'required',
            'home_sub_heading' => 'required',
            'home_heading2' => 'required',
            // 'home_content1' => 'required',
            // 'home_content2' => 'required',
            'home_point1' => 'required',
            'home_point2' => 'required',
            'home_point3' => 'required',
            'home_point4' => 'required',
            'home_point5'=> 'required',
            'home_point6'=> 'required',
            'home_point7'=> 'required',
            'home_point8'=> 'required',

         ]);

      
        $setting = Setting::first();
        
        if($setting) {
            
            $setting -> update([

             'site_logo' => $request-> site_logo,
             'home_banner1' => $request-> home_banner1,
             'home_banner2 '=> $request-> home_banner2,
             'home_sub_heading' => $request-> home_sub_heading,
             'home_heading2'=> $request-> home_heading2,
            //  'home_content1' => $request-> home_content1,
            //  'home_content2' => $request-> home_content2,
             'home_point1' => $request-> home_point1,
             'home_point2 '=> $request-> home_point2,
             'home_point3 '=> $request-> home_point3,
             'home_point4 '=> $request-> home_point4,
             'home_point5 '=> $request-> home_point5,
             'home_point6 '=> $request-> home_point6,
             'home_point7 '=> $request-> home_point7,
             'home_point8 '=> $request-> home_point8
            
        ]);
            
        } else {
            Setting::create($request->all());       
        }
       
        return redirect()->back()->with('success', 'Cms Updated');
    
    }



public function updatePageTwo(Request $request)
    {
        
        $file_path = $setting->image;
         if ($request->image) {
            $file_path = FileUploader::uploadBase64File($request->image, $request->extension, 'settings');
        }

        $request->validate([
            'page2_banner' => 'required',
            'page2_heading' => 'required',
            'page3_banner' => 'required',
            'page3_heading'=> 'required',
            'login_background_image' => 'required',
            'footer_image' => 'required'

  ]);

        $setting = Setting::first();

        if ($setting) {
             $setting -> update([
             'page2_banner' => $request-> page2_banner,
             'page2_heaader' => $request-> page2_header,
             'page3_banner '=> $request-> page3_banner,
             'login_background_image' => $file_path,
             'footer_image' =>$file_path
             
        ]);
        }else{
            Setting::create($request->all()); 
        }
       
             
    return redirect()->back()->with('success', 'Cms Updated');
    
    }


    public function updateAboutus(Request $request)
    {
          $request->validate([
            'about_us' => 'required',
            'contact_us' => 'required',
            
               
                
           
        ]);

         $setting = Setting::first();

        if ($setting) {
            $setting -> update([
             'about_us' => $request-> about_us,
             'contact_us' => $request-> contact_us
        ]);
        }else{
            Setting::create($request->all()); 
        }
        return redirect()->back()->with('success', 'Cms Updated');
    
    }

  
    public function updateFaqs(Request $request)
    {
        
      $request->validate([
           
            'faqs' => 'required'
        
            
        ]);

         $setting = Setting::first();

        if ($setting) {
            
        $setting -> update([

             'faqs' => $request-> faqs
            
        ]);
        }else{
            Setting::create($request->all()); 
        }
       
            
     return redirect()->back()->with('success', 'Cms Updated');
    
    }



    public function updateSupport(Request $request)
    {
        // return $request->all();
        $request->validate([
            
            'facebook' =>'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required'

            
        ]);

        $setting = Setting::first();

        if ($setting) {
            $setting -> update([
             
             'facebook' => $request-> facebook,
            'instagram' => $request-> instagram,
             'twitter' => $request-> twitter,
             'linkedin'=> $request-> linkedin
        ]);
        }else{
            Setting::create($request->all()); 
        }
       
    return redirect()->back()->with('success', 'Cms Updated');
    
    }


    
}
