<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function menu()
    {
        return view('menu');
    }
    public function crear_cuenta()
    {
        return view('crear_cuenta');
    }
    public function create_user(Request $request)
    {
       $validate = $request->validate(
        [
        'email'=>'required|email|unique:users',
        'user'=>'required|unique:users',
        ]);



        $user = new User();
            $user->name= $request->name;
            $user->first_surname =$request->first_surname;
            $user->second_surname =$request->second_surname;
            $user->user =$request->user;
            $user->email =$request->email;
            $user->password =Hash::make($request->password);
            $user->status =2;
            $user->type_user = 2;

            if($user->save())
            {
                return back()->with('success','Te has registrado exitosamente, ya puedes inciar sesión');

            }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
