<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.admin_ListUser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_CreateUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required',
        ]);
        
        $user = User::create($validatedData);

        return view('admin.admin_ListUser')->with('sucess', 'Votre utilisateur à bien été crée');
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
        $user = User::findOrFail($id);
        return view('admin.admin_ShowUser', compact('user'));
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
        $utilisateur=User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => ['required', 'email']

        ]);
        $utilisateur->name=$request->input('name');
        $utilisateur->surname=$request->input('surname');
        $utilisateur->email=$request->input('email');
        $utilisateur->update();
        return redirect(route('UserManagement.index'))->with('success', 'Votre utilisateur à bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        //$user = User::findOrFail($id);
        //$user->delete();

        return redirect(route('UserManagement.index'))->with('success', 'L utilisateur à bien été supprimé');
    }
}
