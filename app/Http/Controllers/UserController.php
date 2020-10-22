<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'this is list user page';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::find($id);
        dd($user->toArray());
        return 'User : this is user '.$id. ' page';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = request()->all();
        // $data = request()->only(['name', 'age']);
        // $data = request()->except('name');
        // $data = request()->name;
        // dd($data , request()->addr, request()->age);
        $user = ['id' => $id, 'name' => 'user1'];
        $profile = ['address' => '92 QT', 'tel'=>'04565645'];
        return view('users.edit', compact('user','profile'));
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
        // $data = $request->except('name');
        $data = $request->all();
        // $data = $request->only('name');
        return redirect()->back()->with(['error' => 'Input data has wrong format']);
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

    public function getOrderList($userID)
    {
        // code get list order of user by ID
    }
}
