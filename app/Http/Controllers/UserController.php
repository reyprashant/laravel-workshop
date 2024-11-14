<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();//user::query()->get();        //here the users is collection a bit different than array
        // dd($users); this is for the testting ppurpose
        return view('users.index',['users'=> $users]);//compact('users') yo function use garey pani hunxa
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        // dd($request);

        // User:query->create(
        //     'name' => $request -> name; //mass fillable way yo pani use garna milxa 
        // )
        $user = new User();//this is normal case mathy ko chai mass fillable way ho mathy ko more precise
        $user ->name = $request -> name;
        $user ->email = $request -> email;
        $user ->password = $request -> password;
        $user->save();
        return redirect()->route('users.index');
        // $request -> validate([
        //     'name' => 'required|max:50',
        //     'email'=>'required|max:100',
        //     'password'=>'required|min:8|confirmed',
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//baracket ma(users $user) yo chai dependecy ma sabai aafai gardinxa
    {
        $user = User::findOrFail($id);//$user = user::query()->find($id); dependency ko way use garyo vani yo line hani rakhnu pardaina
        return view('users.edit',['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user ->name = $request -> name;
        $user ->email = $request -> email;
        $user ->password = $request -> password;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user-> delete();
        return redirect()->route('users.index');
    }
}
