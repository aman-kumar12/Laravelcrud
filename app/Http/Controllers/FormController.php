<?php

namespace App\Http\Controllers;

use Illuminate\Auth\CreatesUserProviders;
use Illuminate\Http\Request;
use App\Models\Crud;

use function PHPUnit\Framework\isNull;

class FormController extends Controller
{
    public function index (){
        $url = url('/');
        $title = 'Registration';
        $data = compact('url','title');
        return view('index')->with($data);
    }


    public function Register (Request $request){
        $request->validate(
        [ 
            'name' => 'required|string|min:3',
            'email' => ['required','unique:users','email','max:255'],
            'phone' => ['required','numeric'],
            'password' => ['required','confirmed','min:6','max:20'],
            'password_confirmation' => 'required',
            'gender' => 'required'

        ]

     );
     // Insert query..
        $users = new Crud;
         $users->name = $request['name'];
         $users->email = $request['email'];
         $users->phone = $request['phone'];
         $users->password = $request['password'];
         $users->cpassword = $request['password_confirmation'];
         $users->address = $request['address'];
         $users->gender = $request['gender'];
         $users->DOB = $request['DOB'];
         $users->save();

         return redirect('view');  
        //   echo '<pre>';
        //   print_r($users->all()->toArray());
        //   echo '</pre>'; 
    }

    public function view (){
        $users = Crud::all()->toArray();
        $data = compact('users');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('/view')->with($data);
    }

    public function users (){
        return redirect('view');
    }


    public function delete ($id){
        Crud::find($id)->delete();
        return redirect()->back();
    }

    public function edit ($id){
        $update = Crud::find($id);
        if(is_null($update)){
            //Not found..
            return redirect('view');
        }
        else{
            $url = url('/view/update').'/'. $id;
            $title = 'Update';
            $data = compact('update','url','title');
            return view('index')->with($data);
        }
    }

    public function update ($id, Request $request){
        $update = Crud::find($id); 
        // $update->name = $request['name'];
        // $update->email = $request['email'];
        // $update->phone = $request['phone'];
        // $update->address = $request['address'];
        // $update->gender = $request['gender'];
        // $update->DOB = $request['DOB'];
        // $update->save();
        // return redirect('/view');
    }

}

