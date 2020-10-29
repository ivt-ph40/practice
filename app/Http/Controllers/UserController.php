<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        dd($users);
        return 'this is list user page';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = [
        //     [
        //         'username' => 'us111',
        //         'email' => 'us111@gmail.com',
        //         'address' => '1 le lai',
        //         'password' => bcrypt('113232')
        //     ],
        //     [
        //         'username' => 'us222',
        //         'email' => 'us222@gmail.com',
        //         'address' => '2 le lai',
        //         'password' => bcrypt('113232'),
        //         'created_at'
        //     ],
        // ];
        // $data = $request->except('birthday','_token');
        $data = $request->all();
        // dd($data);
        // $data['birthday'] = implode('-', $request->birthday);
        //C1
        $user = User::create($data);
        // $user = User::firstOrCreate($data);
        //C2
        // $user = User::insert($data);
        dd($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        DB::enableQueryLog();
        $users = DB::select('select * from users where id = ? ',[$id]);

            DB::select('select * from users');
            DB::table('users')->get();

    $users = DB::table('users')
        ->join('profiles', function($join){
            $join->on('users.id','=', 'profiles.user_id')
                ->where('profiles.age', '>',  20);
                // ->where('profiles.address', 'like', '9%')
        })->get();
        // ->select('users.*', 'profiles.tel as profile_tel', 'profiles.age as profile_age')
        // ->orderBy('users.id', 'desc')
        // ->get();
        dd($users);
        dd(DB::getQueryLog());

        // 'select * from users where id="3 or 1=1"'
        dd($users);
        // $user = User::find($id);
        // dd($user->toArray());
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
