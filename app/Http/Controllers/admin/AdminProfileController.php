<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminProfileController extends Controller
{
    
    
    public function Admin_Profile(){

        $admin_auth =  Auth()->guard('admin')->id();

        $adminData = DB::table('admins')->find($admin_auth);

        return view('admin.admin_profile.admin_profile_view',compact('adminData'));

    }

    
    public function Admin_Username(){

        $id =  Auth()->guard('admin')->id();

        $adminData = DB::table('admins')->find($id);

        return view('admin.admin_profile.admin_username',compact('adminData'));


    }

    public function Admin_Photo(){
        
        $id =  Auth()->guard('admin')->id();

        $adminData = DB::table('admins')->find($id);

        return view('admin.admin_profile.admin_photo',compact('adminData'));


    }

    public function Admin_Password(){
        
        $id =  Auth()->guard('admin')->id();

        $adminData = DB::table('admins')->find($id);

        return view('admin.admin_profile.admin_password',compact('adminData'));


    }

    public function Change_Username(Request $request){

        $id =  Auth()->guard('admin')->id();

        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;

        $update = Admin::FindOrFail($id)->update($data);

        $notification = array(
            'message' => 'Admin Username Change Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.profile')->with($notification);

    }

    

    public function Change_Photo(Request $request){

        $id =  Auth()->guard('admin')->id();
        $data = array();
        $data['profile_photo_path'] = $request->file('profile_photo_path');
      
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path'] = $filename;

       $update = DB::table('admins')->where('id',$id)->update($data);

       $notification = array(
        'message' => 'Admin Photo Change Successfully',
        'alert-type' => 'success'
    );



       return redirect()->route('admin.profile')->with($notification);

    }


    public function Change_Password(Request $request){

        $id =  Auth()->guard('admin')->id();
        $validateData = $request->validate([

            'old_password' => 'required',
            'password' => 'required|confirmed'

        ]);

        $hashedPassword = Admin::FindOrFail($id)->password;

        if(Hash::check($request->old_password,$hashedPassword)){

            $admin = Admin::FindOrFail($id);
            $admin->password = Hash::make($request->password);
            $admin->save();

            Auth::logout();
            $notification = array(
                'message' => 'Admin password Change Successfully',
                'alert-type' => 'success'
            );


            return redirect()->route('admin.logout')->with($notification);
        }else{

            return redirect()->back();
        }

        


    }





    public function AllUsers(){
		$users = User::latest()->get();
		return view('backend.user.all_user',compact('users'));
	}



    public function Add_admin(){

        return view('backend.admin_role.add_admin');

    }

    public function store_admin(Request $request){

        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $data['brand'] = $request->brand;
        $data['categories'] = $request->categories;
        $data['products'] = $request->products;
        $data['coupons'] = $request->coupons;
        $data['shipping_area'] = $request->shipping_area;
        $data['orders'] = $request->orders;
        $data['return_order'] = $request->return_order;
        $data['manage_stock'] = $request->manage_stock;
        $data['manage_review'] = $request->manage_review;
        $data['mega_menu'] = $request->mega_menu;
        $data['show_by_category'] = $request->show_by_category;
        $data['show_by_brand'] = $request->show_by_brand;
        $data['slider'] = $request->slider;
        $data['all_reports'] = $request->all_reports;
        $data['manage_blog'] = $request->manage_blog;
        $data['all_users'] = $request->all_users;
        $data['extra_option'] = $request->extra_option;
        $data['manage_admin'] = $request->manage_admin;
        $data['site_setting'] = $request->site_setting;
        $data['seo_setting'] = $request->seo_setting;
        $data['status'] = 1;
        
        $admin = Admin::insert($data);

        $notification = array(
            'message' => 'Admin Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage-admin')->with($notification);

    }



    public function Manage_Admin(){

        $admin_role_data = Admin::latest()->get();

        return view('backend.admin_role.manage_admin',compact('admin_role_data'));

    }

    public function Edit_Admin($id){

        $admin_role_data = Admin::FindOrFail($id);

        return view('backend.admin_role.edit_admin',compact('admin_role_data'));

    }

    public function Update_admin(Request $request){

        $admin_id = $request->id;

        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $data['brand'] = $request->brand;
        $data['categories'] = $request->categories;
        $data['products'] = $request->products;
        $data['coupons'] = $request->coupons;
        $data['shipping_area'] = $request->shipping_area;
        $data['orders'] = $request->orders;
        $data['return_order'] = $request->return_order;
        $data['manage_stock'] = $request->manage_stock;
        $data['manage_review'] = $request->manage_review;
        $data['mega_menu'] = $request->mega_menu;
        $data['show_by_category'] = $request->show_by_category;
        $data['show_by_brand'] = $request->show_by_brand;
        $data['slider'] = $request->slider;
        $data['all_reports'] = $request->all_reports;
        $data['manage_blog'] = $request->manage_blog;
        $data['all_users'] = $request->all_users;
        $data['extra_option'] = $request->extra_option;
        $data['manage_admin'] = $request->manage_admin;
        $data['site_setting'] = $request->site_setting;
        $data['seo_setting'] = $request->seo_setting;
        $data['status'] = 1;

   
        $admin = DB::table('admins')->where('id',$admin_id)->update($data);

        $notification = array(
            'message' => 'Admin Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage-admin')->with($notification);

    }


    public function Delete_Admin($id){

        $photo = Admin::FindOrFail($id);
        $img = $photo->profile_photo_path;
        if($img){
            unlink($img);

            Admin::FindOrFail($id)->delete();

        }else{
            Admin::FindOrFail($id)->delete();

        }
        

        $notification = array(
            'message' => 'Admin Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    public function View_Admin($id){

        $admin_role_data = Admin::FindOrFail($id);

        return view('backend.admin_role.view_admin',compact('admin_role_data'));


    }

    public function AdminInactive($id){
        DB::table('admins')->where('id',$id)->update(['status' => 0]);
        $notification = array(
           'message' => 'Product Inactive',
           'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);
    }


 public function AdminActive($id){
    DB::table('admins')->where('id',$id)->update(['status' => 1]);
        $notification = array(
           'message' => 'Admin Active',
           'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);

    }



}
