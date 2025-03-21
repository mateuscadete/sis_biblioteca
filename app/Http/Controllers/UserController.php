<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {

        // Recuperar os registros do banco dados
        $users = User::orderByDesc('id')->get();

        // Carregar a VIEW
        return view('layout.home', ['user' => $users]);
    }

    public function login()
    {
        return view('users.login');
    }

    public function create()
    {
        // Carregar a VIEW
        return view('users.cadstro');
    }

    public function store(UserRequest $request)
    {
        // Validar o formulário
        $request->validated();
        
        // Cadastrar o usuário no BD
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');

    }

    public function teste()
    {

        return view('users.teste');

    }

    public function update(UserRequest $request, User $user)
    {

        // Validar o formulário
        $request->validated();

        // Editar as informações do registro no banco de dados
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        
        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.show', ['user' => $user->id ])->with('success', 'Usuário editado com sucesso!');

    }

    public function destroy(User $user)
    {

        // Apagar o registro no BD
        $user->delete();

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuário apagado com sucesso!');

    }
}