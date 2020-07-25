<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\cr;
use Illuminate\Http\Request;
use App\Users;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();
        return view("admin.users.index", ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        return view("admin.users.edit",["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {  
            $username=$request->username;
            $password=$request->password;
            $name=$request->name;
            $email=$request->email;
            $phone_number=$request->phone_number;
            $role=$request->role;
            $user= Users::find($id);
    
            $user->username=$username;
            $user->password = $password;
            $user->name=$name;
            $user->email=$email;
            $user->phone_number=$phone_number;
            $user->role=$role;
            $user->save();

        return redirect('/admin/users/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();
		return redirect('/admin/users/index');
    }

}
