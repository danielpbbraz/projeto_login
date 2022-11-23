<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Pessoa;
use App\Models\usuario;

Route::get('/', [UserController::Class, 'index'])->name('home.login');
Route::post('/login', [UserController::Class, 'login'])->name('login');
Route::get('/regitro', [UserController::Class, 'registro'])->name('register');
Route::get('/loginPage', [UserController::Class, 'loginPage'])->name('loginPage');
Route::get('/voltar', [UserController::Class, 'voltarHome'])->name('voltar');
Route::get('/lista', [UserController::Class, 'list'])->name('lista');

Route::get('/lista', [UserController::class, 'lista']);

Route::post('/cadastrar-usuario', function(Request $info){
    Pessoa::create([
        'nome' => $info->nome_user,
        'idade' => $info->idade_user

    ]);

    $senha = Hash::make($info->pass_user);

    Usuario::create([
        'email' => $info->email_user,
        'password' => $senha

    ]);
    var_dump($senha);
    echo "usuario criado com sucesso";
    return view('welcome');

});


// {
//     return view('welcome');
// });
