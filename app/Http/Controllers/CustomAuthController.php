<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('user.login');
    }  
      
    public function customLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);
   if($request['email']=="hanane.id-aamer@ensam-casa.ma" && $request['password']=='hanane1234')
   {
       return redirect('demandes')->with('name', 'Hanane ID-AAMER');
   }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('name', auth()->user()->prenom );;
        }
  
        return redirect("salut")->with('error_message', 'Email ou mot de passe incorrects');
    }

    public function registration()
    {
        return view('user.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $this->validate($request,[
            'prenom' => 'required',
            'nom' => 'required',
            'cne' => 'required',
            'annee' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard");
    }

    public function create(array $data)
    {
      return User::create([
        'prenom' => $data['prenom'],
        'nom' => $data['nom'],
        'cne' => $data['cne'],
        'annee' => $data['annee'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('user.dashboard');
        }
  
        return redirect("salut")->withSuccess('Veuillez vous connecter ');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('salut')->with('success', 'Vous êtes déconnectés avec succès');
    }
    public function salut()
    {
        
        return view('user.login'); // next:- page name created with next.blade.php 
    }
    public function salut2()
    {
        
        return view('user.registration'); // next:- page name created with next.blade.php 
    }
    public function adminHanane()
    {
        
        return view('user.adminHanane'); // next:- page name created with next.blade.php 
    }
}