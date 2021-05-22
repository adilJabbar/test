<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FlowDash\Http\Middleware\SetDefaultLayoutForUrls;

class HomeController extends Controller
{
    public function index()
    {
         $services = \DB::table('home_page_services')->get();
        
        return view('user/think',compact('services'));
    }
     public function about()
    {
        return view('user/about');
    }
     public function services()
    {
        return view('user/services');
    }
     public function contact()
    {
        return view('user/contact');
    }
      public function servicesss()
    {
           return view('flowdash::home-page-services');
    }
    public function post_services(Request $request)
    {
        $data = array('title' => $request->get('title'),'description' => $request->get('description') );
        \DB::table('home_page_services')->insert($data);
        return redirect('admin-home-page-service');
      
    }  
    public function admin_home_page_service()
    {
       
        $data = \DB::table('home_page_services')->get();
        return view('flowdash::admin-home-page-service',compact('data'));
      
    } 

    public function edit_admin_home_service($id)
    {
       
        $data = \DB::table('home_page_services')->where('id',$id)->first();
        return view('flowdash::edit_admin-home-service',compact('data'));
      
    } 
     public function update_admin_home_service(Request $request)
    {
        $id = $request->get('id');

         $data = array('title' => $request->get('title'),'description' => $request->get('description') );
        \DB::table('home_page_services')->where('id',$id)->update($data);
           $data = \DB::table('home_page_services')->get();
        return redirect('admin-home-page-service');
      
    }     

    public function delete_admin_home_service($id)
    {  
        \DB::table('home_page_services')->where('id',$id)->delete();
           $data = \DB::table('home_page_services')->get();
       return redirect('admin-home-page-service');
      
    }   
     public function admin_faqs()
    {
        $data = \DB::table('faqs')->get();
        return view('flowdash::faqs',compact('data'));
      
    }
        public function add_faqs()
    {
         return view('flowdash::add-faqs');
      
    }     
     public function post_faqs(Request $request)
    {
           $data = array('question' => $request->get('question'),'answer' => $request->get('answer') );
        \DB::table('faqs')->insert($data);
        return redirect('admin-faqs');
      
    }  
     public function edit_faqs($id)
    {
       
        $data = \DB::table('faqs')->where('id',$id)->first();
        return view('flowdash::edit-faqs',compact('data'));
      
    } 
       public function update_faqs(Request $request)
    {
        $id = $request->get('id');

         $data = array('question' => $request->get('question'),'answer' => $request->get('answer') );

        $d = \DB::table('faqs')->where('id',$id)->update($data);
    
           $data = \DB::table('home_page_services')->get();
        return redirect('admin-faqs');
      
    } 

    public function delete_faq($id)
    {  
        \DB::table('faqs')->where('id',$id)->delete();
        return view('admin-faqs');
      
    }   






    public function  footer_about_us()
    {
        $data = \DB::table('footer_about_us')->get();
        return view('flowdash::footer.about_us',compact('data'));
      
    } 
    public function  edit_footer_about_us($id)
    {
         $data = \DB::table('footer_about_us')->where('id',$id)->first();
        return view('flowdash::footer.edit-footer-about-us',compact('data'));
      
    }

    public function update_footer_about_us(Request $request)
    {
        $id = $request->get('id');

         $data = array('content' => $request->get('content'));

        $d = \DB::table('footer_about_us')->where('id',$id)->update($data);
        return redirect('footer-about-us');
      
    } 






    public function  our_mission()
    {
        $data = \DB::table('our_mission')->get();
        return view('flowdash::about-us.our_mission',compact('data'));
      
    } 
    public function  edit_our_mission()
    {
         $data = \DB::table('our_mission')->first();
        return view('flowdash::about-us.edit_our_mission',compact('data'));
      
    }

    public function update_our_mission(Request $request)
    {
        $id = $request->get('id');

         $data = array('content' => $request->get('content'));

        $d = \DB::table('our_mission')->where('id',$id)->update($data);
        return redirect('edit-our-mission');
      
    } 
    


    public function  our_vision()
    {
        $data = \DB::table('our_vision')->get();
        return view('flowdash::about-us.our_vision',compact('data'));
      
    } 
    public function  edit_our_vision()
    {
         $data = \DB::table('our_vision')->first();
        return view('flowdash::about-us.edit_our_vision',compact('data'));
      
    }

    public function update_our_vision(Request $request)
    {
        $id = $request->get('id');

         $data = array('content' => $request->get('content'));

        $d = \DB::table('our_vision')->where('id',$id)->update($data);
        return redirect('edit-our-vision');
      
    } 



    public function  who_we_are()
    {
        $data = \DB::table('who_we_are')->get();
        return view('flowdash::about-us.who_we_are',compact('data'));
      
    } 
    public function  edit_who_we_are()
    {
         $data = \DB::table('who_we_are')->first();
       
        return view('flowdash::about-us.edit_who_we_are',compact('data'));
      
    }

    public function update_who_we_are(Request $request)
    {
        $id = $request->get('id');

         $data = array('content' => $request->get('content'));

        $d = \DB::table('who_we_are')->where('id',$id)->update($data);
        $data = \DB::table('who_we_are')->where('id',$id)->first();
       
         return redirect('edit-who-we-are');
      
    } 



    //   public function  contact()
    // {
    //     $data = \DB::table('contact')->get();
    //     return view('flowdash::contact.conact',compact('data'));
      
    // } 
    public function  edit_contact()
    {
         $data = \DB::table('contact')->first();
       
        return view('flowdash::contact.edit_contact',compact('data'));
      
    }

    public function update_contact(Request $request)
    {

        $id = $request->get('id');

         $data = array('address' => $request->get('address'),'phone' => $request->get('phone'),'email' => $request->get('email'));

        $d = \DB::table('contact')->where('id',$id)->update($data);
        
        return redirect('edit-contact');
      
    } 
    
    
   

}
