<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $fillable = [

                'site_logo',
                'home_banner1',
                'home_banner2',
                'home_heading',
                'home_sub_heading',
                'home_heading2',
                'home_point1',
                'home_point2',
                'home_point3',
                'home_point4',
                'home_point5',
                'home_point6',
                'home_point7',
                'home_point8',
                'page2_banner',
                'page2_heading',
                'page3_banner',
                'page3_heading',
                'login_background_image',
                'footer_image',
                'about_us',
                'contact_us',
                'faqs',
                'facebook',
                'instagram',
                'twitter',
                'linkedin'
     ];

           
}
