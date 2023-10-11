<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class StaffController extends Controller
 {
//     public function index(){

//         // 1st way
//         // User::create([
//         //     'name' => "Thant Zin Htun",
//         //     'age' => 26, // Assuming 'age' is an integer field
//         //     'gender' => "Male",
//         //     'email' => "thantzinhtun@gmail.com",
//         //     'department' => "eJLS",
//         //     'position' => "M&E Engineer",
//         //     "password" => "13kjfqoi"
//         // ]);
//         // return "success";
//         // User::find(1);
//         // return (1);

//         // 2nd way create
//         // $user = new User();
//         // $user->name = 'mama';
//         // $user->age = 22;
//         // $user->gender = 'male';
//         // $user->email = 'mama@gmail.com';
//         // $user->department = 'JLS';
//         // $user->position = 'marketing';
//         // $user->password = 'sfjweoi';
//         // $user->save();



//         // update
//         // User::where('id', 2)->update([
//         //     'name' => 'Soe Weyan Htike',
//         //     'age' => 27,
//         //     'gender' => 'Male',
//         //     'email' => 'weyan@gmail.com',
//         //     'department' => 'eJLS',
//         //     'position' => 'Web Developer',
//         //     'password' => bcrypt('13kjfqoi') // Assuming you're storing a hashed password
//         // ]);


//     // delete
//     // $suer = User::find(2);
//     // $suer->delete();

//     //delete
//     // User::where('id', 1)->delete();


//     }


public function index(){
    return view('home');
}
public function about(){
    return view('about');
}
}
