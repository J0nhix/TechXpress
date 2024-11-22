<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        if (Gate::allows('admin')) {
            $admin = true;
            return Inertia::render('ListaUsuarios', [
                'can' => [
                    'create_user' => Auth::user()->can('create', User::class),
                ],
                'users' => User::all()->map(function ($user) {
                    return [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'dni' => $user->dni,
                        'alias' => $user->alias,
                        'can' => [
                            'edit_user' => Auth::user()->can('edit', $user),
                        ]
                    ];
                }),
            ])->with('admin', $admin);
           } else {
            $admin = false;
            return Redirect::to("/dashboard");
           }
        
    }

    function suscribirseview(){
        return Inertia::render('Pagosuscripcionview');
    }

    function suscribirse(){
        $usuarioAutenticado = Auth::user();
        $usuarioAutenticado->suscripcione_id = 2;
        $usuarioAutenticado->save();
        return Redirect::to("/dashboard");
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        if (Gate::allows('admin')) {
            $admin = true;
        } else {
            $admin = false;
        }
        $users=User::all();
        return redirect()->route('usuarios',['users' => $users])->with('success', 'Usuario eliminado exitosamente');
    }

    public function añadir(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'dni' =>'required|string|max:9',
            'alias' => 'string|max:255',
            'municipio' => 'string|max:255'
        ],[
            'name.required' => 'El campo nombre es obligatorio.',
            'name.string' => 'El campo nombre debe ser una cadena de texto.',
            'name.max' => 'El campo nombre no debe tener más de :max caracteres.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.string' => 'El campo correo electrónico debe ser una cadena de texto.',
            'email.lowercase' => 'El campo correo electrónico debe estar en minúsculas.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El campo correo electrónico no debe tener más de :max caracteres.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
            'password.*' => 'El campo contraseña no cumple con los requisitos mínimos de seguridad.',
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.string' => 'El campo DNI debe ser una cadena de texto.',
            'dni.max' => 'El campo DNI no debe tener más de :max caracteres.',
            'alias.string' => 'El campo alias debe ser una cadena de texto.',
            'alias.max' => 'El campo alias no debe tener más de :max caracteres.',
            'municipio.string' => 'El campo municipio debe ser una cadena de texto.',
            'municipio.max' => 'El campo municipio no debe tener más de :max caracteres.',
        ]);

        $users = User::all();
        $usuario=new User;
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->email_verified_at=Carbon::now()->format('Y-m-d H:i:s');
        $usuario->password=$request->password;
        $usuario->dni=$request->dni;
        $usuario->alias=$request->alias;
        $usuario->municipio=$request->municipio;
        $usuario->puntos=0;
        $usuario->suscripcione_id=1;
        $usuario->save();

        return redirect()->route('usuarios',['users' => $users]);
    }
}
