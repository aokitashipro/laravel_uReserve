<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',    
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function register()
    {
        $this->validate();

        // dd($this);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), 
        ]);

        session()->flash('message', '登録okです');

        return to_route('livewire-test.index');
        
    }

    public function render()
    {
        return view('livewire.register');
    }
}
