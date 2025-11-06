<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
        if(Auth::attempt(['email'=> $this->email, // tentativa de login, o "this" diz que a variável que está sendo utilizada é a dessa
        'password' => $this->password])){
            session()->regenerate();
            return redirect()->route('dashboard'); // se der certo será redirecionado para a dashboard
        }
        session()->flash('error' , 'credenciais incorretas'); // se não der, retorna um erro 


    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
