<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function page404()
    {
        return view('pages.404');
    }

     public function alerts()
     {
        return view('pages.alerts');
     }
     
      public function badge()
      {
        return view('pages.badge');
      } 
     
      public function avatar()
      {
        return view('pages.avatars');
      } 
      
       public function barChart()
       {
        return view('pages.bar_chart');
       }   
       
       public function basic_tables()
       {
        return view('pages.basic_tables');
       }   

       public function buttons()
       {
        return view('pages.buttons');
       }   

       public function blank()
       {
        return view('pages.blank');
       }   
       public function calendar()
       {
        return view('pages.calendar');
       }   

    
       public function form_elements()
       {
        return view('pages.form_elements');
       }   
       
       public function images()
       {
        return view('pages.images');
       }   

       public function lineChart()
       {
        return view('pages.line_chart');
       }   
       
       public function Profile()
       {
        return view('pages.profile');
       }   
       
       public function signin()
       {
        return view('pages.signin');
       }   
       
       public function signup()
       {
        return view('pages.signup');
       }   
       
       public function videos()
       {
        return view('pages.videos');
       }   
       
      
}