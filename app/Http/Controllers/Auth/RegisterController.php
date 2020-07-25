<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\cr;
use Illuminate\Http\Request;

use App\Users;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("auth.register");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = new Users;

        $users->username = $request->username; 
        $users->password = $request->password;
        // $hashPassword = Hash::make($password);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone_number = $request->phone_number;
        $users->role = $request->role;

        // $request->validate([
        //     'username' =>'required|unique:users|max:50',
        //     'password'=>'required',
        //     'name'=>'required',
        //     'email'=>'required|unique:users|max:100',
        //     'phone_number'=>'required|unique:users|max:10',
        //     'role'=>'required',
        // ]);

        $users->save();
        return redirect('/auth/register'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        
        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
