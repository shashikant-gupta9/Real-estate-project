<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRegistrationController extends Controller
{
    public function UserRegList()
    {
        if(session()->get('id')==null)
        {
            return redirect('/admin/login');
        }

        $userdata = DB::table('users')->get();
        return view('admin.list_user_reg')->with(compact('userdata'));
    }

    public function create_user_reg()
    {
        if(session()->get('id')==null)
        {
            return redirect('/admin/login');
        }
        return view('admin.add_edit_user_reg');
    }

    public function userregSave(Request $request)
    {

        if(session()->get('id')==null)
        {
            return redirect('/admin/login');
        }
       
        $data = array(
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'email' => $request->get('email'),
            'contact_no' => $request->get('contact_no'),
            'whatsapp_no' => $request->get('whatsapp_no'),
            'address' => $request->get('address'),
            'pincode' => $request->get('pincode'),
            'state' => $request->get('state'),
            'district' => $request->get('district'),
            'city' => $request->get('city'),
            'password' => $request->get('password'),
           
           
            'created_at' => date('Y-m-d'),
            
        );
        DB::table('users')->insert($data);
        return redirect('admin/user-reg')->with('success','Your have successfully registered!');
    }
}
