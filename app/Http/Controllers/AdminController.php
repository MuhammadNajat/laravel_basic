<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function about()
    {
       return view('about');
    }
    public function layout()
    {
       return view('layout');
      
    }
    public function contact()
    {
       return view('contact');
    }
    public function allContact()
    {
    	$allcontact_info=DB::table('tbl_contact_')
    	   ->get();
    	$manage_contact=view('allContact')
    	->with('all_contact_info',$allcontact_info);
       return view('layout')
       ->with('allContact',$manage_contact);
    }
    public function save_contact(Request $request)
    {
       $data= array();
       $data['firstname']=$request->firstname;
       $data['lastname']=$request->lastname;
       $data['email']=$request->email;

       DB::table('tbl_contact_')->insert($data);
       Session::put('message','Contact Added Successfully');
       return Redirect::to('/contact');

    }
    public function delete_contact($id)
    {
       DB::table('tbl_contact_')
            ->where('id',$id)
            ->delete();
       Session::put('message','Contact Delete Successfully');
       return Redirect::to('/allContact');
    }
    public function edit_contact($id)
    {
       $contact_info=DB::table('tbl_contact_')
            ->where('id',$id)
            ->first();
            //echo "</pre>";
           // print_r($contact_info );

            $manage_contact=view('contact_edit')
                          ->with('all_contact_info',$contact_info);
            return view('layout')
                            ->with('contact_edit',$manage_contact);

          }
     public function contact_update(Request $request,$id)
    {
       $data= array();
       $data['firstname']=$request->firstname;
       $data['lastname']=$request->lastname;
       $data['email']=$request->email;
       DB::table('tbl_contact_')
       ->where('id',$id)
       ->update($data);


       Session::put('message','Contact Update Successfully');
       return Redirect::to('/contact');

    }
}
