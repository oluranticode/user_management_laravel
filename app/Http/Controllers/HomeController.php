<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adduser;
use Carbon\Carbon;

class HomeController extends Controller
{
    //
    public function Index() {
        return view("home");
    }

    // add user
    public function AddUser(Request $req) {
        $data = new Adduser;

        $data->employee_id = $req->employee_id;
        $data->first_name = $req->first_name;
        $data->last_name = $req->last_name;
        $data->email = $req->email;
        $data->mobile_no = $req->mobile_no;
        $data->username = $req->username;
        $data->password = $req->password;
        $data->confirm_password = $req->confirm_password;
        // $data->select_role = $req->select_role;

        if(isset($_POST['select_role'])){
            $res = $req->select_role;
            if($res == 'super_admin'){
                $data->select_role = 'CEO and Founder';
            }

            if($res == 'admin'){
                $data->select_role = 'Team Lead';
            }

            if($res == 'employee1'){
                $data->select_role = 'App Designer';
            }

            if($res == 'employee2'){
                $data->select_role ='Web Developer';
            }
            if($res == 'hr'){
                $data->select_role ='HR Admin';
            }
        }

        $data->save();
        return redirect()->back();
       
    }

    // fetch all users
    public function GetUsers(){
        $data = AddUser::all();
        return view('home', compact('data'));
       
    }

    // Edit users
    public function EditUser($id){
        //return AddUser::find($id);
        $data = AddUser::find($id);
        return view('edit-user', ['data'=>$data]);
    }
    // Update users
    public function UpdateUser(Request $req){
        //return AddUser::find($req->id);
        $update = AddUser::find($req->id);
        $update->employee_id = $req->employee_id;
        $update->first_name = $req->first_name;
        $update->last_name = $req->last_name;
        $update->email = $req->email;
        $update->mobile_no = $req->mobile_no;
        // $update->select_role = $req->select_role;
        $update->username = $req->username;
        $update->password = $req->password;
        $update->confirm_password = $req->confirm_password;
        if(isset($_POST['select_role'])){
            $res = $req->select_role;
            if($res == 'super_admin'){
                $update->select_role = 'CEO and Founder';
            }

            if($res == 'admin'){
                $update->select_role = 'Team Lead';
            }

            if($res == 'employee1'){
                $update->select_role = 'App Designer';
            }

            if($res == 'employee2'){
                $update->select_role ='Web Developer';
            }
            if($res == 'hr'){
                $update->select_role ='HR Admin';
            }
        }
        $update->save();
        return redirect('/');
    }
    // Delete User
    public function DeleteUser($id){
    //    return AddUser::find($id);
    $data = AddUser::find($id);
    $data->delete();
    return redirect()->back();
    }
}

