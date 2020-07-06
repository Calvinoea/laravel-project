<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){

    //    $user = new User();
    //    $user->name = 'sarthak';
    //    $user->email = 'sarthak@bitfumes.com';
    //    $user->password = bcrypt('password') ;
    //    $user->save();

    // $user = User::all();

    // return $user;

    // User::where('id', 3)->Delete();

// User::where('id',4)->update(['name' => 'bitfumessssss']);

        // DB::insert('insert into users (name,email,password)
        // values (?,?,?)',[

        //     'sarthak', 'sarthak@bitfumes.com', 'password',

        // ]);

    //    $users = DB::select('select * from users');

    //    return $users;

    //   DB::update('update users set name = ? where id = 1', ['bitfumes']);

    //   return $users;


    //  DB::delete('delete from users where id = 1');

    //    $users = DB::select('select * from users');
    //    return $users;

    $data= [
        'name' => 'El',
        'email' => 'el@bitfumes.com',
        'password' => 'password',
    ];

        // User::create($data);

        // $user = User::all();
        // return $user;


        return  view('home');

    }





}
