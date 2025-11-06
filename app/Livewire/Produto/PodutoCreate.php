<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class PodutoCreate extends Component
{
    public $nome;
    public $quantidade;
    public $preco;

    protected $rules = [
        'nome' =>  'required',
        'preco' => 'required'
    ];

    public $messages = [
        'nome.required' => 'Preencher Nome do produto',
         'preco.required' => 'Preencher preço do produto'
    ];

    public function store(){
        $this->validate();
       Produto::create([

        'nome' => $this->nome,
        'quantidade' => $this->quantidade,
        'preco' => $this->preco

        ]);
       return redirect()->route('produto.index');

    }



    public function render()
    {
        return view('livewire.produto.poduto-create');
    }
}
