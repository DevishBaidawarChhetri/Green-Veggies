<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Get All Users
    protected function getAllUser(){
        $users = User::where('regType', 'buyer')->paginate(6);
        //dd($users);
        return view('layouts.admin.viewAllUsers',[
            'users'=>$users
        ]);
    }

    // Edit Profile
    protected function editProfile($userId){
        $user = User::find($userId);
        return view('layouts.seller.profile.viewProfile', compact('user'));
    }

    // Update Profile
    protected function updateUser(Request $request, $userId){
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'telephone' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:50']
        ]);

        $user = User::find($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->address = $request->address;

        $user->save();
        Session::flash('success-message', 'Profile Updated Successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('viewProfile', $userId);
    }

    // Edit Password Form
    protected function changePasswordForm($userId){
        $user = User::find($userId);
        return view('layouts.seller.profile.changePassword', compact('user'));
    }

    // Update Password
    protected function updatePassword(Request $request, $userId){
        $request->validate([
            'oldPassword' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:6']
        ]);

        $user = User::find($userId);

        if (Hash::check($request->oldPassword, $user->password)){
            if($request->oldPassword === $request->password){
                Session::flash('error-message', 'Old password cannot be your new password, Please try something new!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->route('changePassword', $userId);
            }else{
                $updatedPassword = Hash::make($request->password);
                $user->password = $updatedPassword;
                $user->save();

                Session::flash('success-message', 'Password changed successfully!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('changePassword', $userId);
                // dd($updatedPassword);
            }
        }else{
            Session::flash('error-message', 'Old Password Doesn\'t match!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('changePassword', $userId);
        }
    }
    protected function userSearch(){
        $search_text = $_GET['query'];
        $users = User::where('name', 'LIKE', '%'.$search_text.'%')->get();

        return view('layouts.admin.userSearch', compact('users'));
    }

    //Delete User
    public function deleteUser($userId){
        User::destroy($userId);
        Session::flash('success-message', 'User Deleted Successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('/getAllUsers');
    }
}
