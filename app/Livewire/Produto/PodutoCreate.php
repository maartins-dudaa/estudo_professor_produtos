<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class PodutoCreate extends Component
{
    public $nome;
    public $quantidade;
    public $preco;
    public $quantidade_minima;
    public $descricao;

    protected $rules = [
        'nome' =>  'required',
        'preco' => 'required',
        'quantidade_minima' => 'required',
        'quantidade' => 'required',
        'descricao' => 'required'
    ];

    public $messages = [
        'nome.required' => 'Esse campo é obrigatório',
        'quantidade_minima.required' => 'Esse campo é obrigatório',
        'quantidade.required' => 'Esse campo é obrigatório',
        'descricao.required' => 'Esse campo é obrigatório',
        'preco.required' => 'Esse campo é obrigatório'
    ];

    public function store()
    {
        $this->validate();
        Produto::create([

            'nome' => $this->nome,
            'quantidade' => $this->quantidade,
            'descricao' => $this->descricao,
            'quantidade_minima' => $this->quantidade_minima,
            'preco' => $this->preco

        ]);
        return redirect()->route('produto.index');
    }



    public function render()
    {
        return view('livewire.produto.poduto-create');
    }
}
