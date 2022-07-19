<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
   
        $users = User::all();

        return view('index', ['users' => $users]);
    }


    public function createUser(){
        return view('CreateUser'); 
     }
     public function store()
     {
         request()->validate([
             'Name' => 'required',
             'Email' => 'required',
             'Phone' => 'required',
         ]);
 
         User::create([
             'Name' => request('Name'),
             'Email' => request('Email'),
             'Phone' => request('Phone'),
         ]);
 
         return redirect('/');
     }

     //function for edting user
    public function editUsers(User $user){
        return view('edit', ['user'=> $user]);
     } 

// function for submitting updated data
     public function submit(User $request, $id)
     {

        // dd(request()->all());
         $request->replicate([
             'Name' => 'required',
             'Email' => 'required',
             'Phone' => 'required',

         ]);
         $user = User::find($id);
         $user->update([
             'Name' => request('name'),
             'Email' => request('email'),
             'Phone' => request('phone'),
         ]);
 
         return redirect('/');
     } 
     public function delete($id)
     {
         User::destroy($id);
         return redirect('/');  
     }
}
