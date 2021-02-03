<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

// ROTA DE CADASTRO
Route::post('/cadastro', function (Request $request) {
    $data = $request->all();
    // VALIDAÇÃO DOS CAMPOS DO CADASTRO
    $validation = Validator::make($data, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|max:255|confirmed'
    ]);
    // SE HOUVER ERROS, RETORNAR PARA O USUÁRIO
    if($validation->fails()){
        return $validation->errors();
    }

    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password'])
    ]);
    $user->token = $user->createToken($user->email)->accessToken;
    return $user;
});

// ROTA DE LOGIN
Route::post('/login', function (Request $request) {
    $data = $request->all();
    // VALIDAÇÃO DOS CAMPOS DO CADASTRO
    $validation = Validator::make($data, [
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:6|max:255'
    ]);
    // SE HOUVER ERROS, RETORNAR PARA O USUÁRIO
    if($validation->fails()){
        return $validation->errors();
    }
    // TENTAR LOGAR    
    if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])){
        $user = auth()->user();
        $user->token = $user->createToken($user->email)->accessToken;
        return $user;
    }else{
        return ['status'=>false];
    }

    return $user;
});

Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    return $request->user();
});
