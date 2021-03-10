<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.pages.dashboard');
    }
    public function userList(){
        $data['user'] = User::where('status', 1)->latest()->get();
        return view('backend.pages.user.index', $data);
    }
    public function userTypeUpdate($id){
        $user = User::findorfail($id);
        $user->user_type = $user->user_type == 'free' ? 'paid' : 'free'; 
        $save = $user->save();
        if($save){
            session()->flash('level', 'success');
            session()->flash('msg', 'Change Successfully. ');
            return redirect()->back();
        }   
    }
   
}
