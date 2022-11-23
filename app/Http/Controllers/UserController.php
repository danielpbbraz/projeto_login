<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function registro()
    {
        return view('register');
    }

    public function loginPage()
    {
        return view('welcome');
    }
    public function list()
    {
        return view('lista');
    }

    public function voltarHome()
    {
        return view('index');
    }

    public function login(Request $request)
    {

        // echo '<pre>';
        // var_dump($request->all());
        // echo '</pre>';

        if(Auth::attempt(['email' => $request->email, 'password' => $request->pass])){
            // dd('Logado');
            dd('Logado');
    }else{
            dd('Não logou');
    }
    }

    public function destroy($id){

        Event::findOrFail($id)->delete();
        return redirect('/index');
    }



}
