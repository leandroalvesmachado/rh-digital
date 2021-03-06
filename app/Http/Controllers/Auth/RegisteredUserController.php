<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\Usuario;
use App\Models\UsuarioPerfil;
use App\Models\Perfil;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => ['required', 'confirmed', Rules\Password::min(8)->letters()->numbers()->symbols()],
        ]);

        $user = Usuario::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $perfil = Perfil::where('codigo', Perfil::FUNCIONARIO)->get()->first();

        $userProfile = new UsuarioPerfil([
            'usuario_id' => $user->id,
            'perfil_id' => $perfil->id,
            'created_by' => $user->id,
            'updated_by' => $user->id
        ]);

        $userProfile->save();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        event(new Registered($user));

        // Auth::login($user);

        if (Auth::attempt($credentials)) {
            // return redirect(RouteServiceProvider::HOME);
            return redirect()->route('funcionario.home.index');
        }

        return redirect()->route('login');
    }
}
