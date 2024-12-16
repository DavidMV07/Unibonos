<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view("modules/auth/login");
    }

    public function register(){
        return view("modules/auth/register");
    }

    public function registrar(Request $request){
        $item = new User(); 
        $item->name = $request->name;
        $item->codigo = $request->codigo;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();
        return to_route('login');
    }

    public function loguear(Request $request){
        $credenciales = [
            'codigo' => $request->codigo,
            'password' => $request->password
        ];

        if(Auth::attempt($credenciales)){
            return to_route('home');
        }else{
            return to_route('login');
        };
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function home(){
        return view('modules/dashboard/home');
    }

    public function usuario(){
        $items = User::paginate(10);
        return view('modules/dashboard/usuario', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/crud/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item =new User();
        $item->name = $request->name;
        $item->codigo = $request->codigo;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();
        return to_route('usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = User::find($id);
        return view('modules/crud/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::find($id);
        return view('modules/crud/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = User::find($id);
        $item->name = $request->name;
        $item->codigo = $request->codigo;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();
        return to_route('usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::find($id);
        $item->delete();
        return to_route('usuario'); 
    }
}