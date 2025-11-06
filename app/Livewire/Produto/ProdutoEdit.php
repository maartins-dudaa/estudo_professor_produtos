<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{

    public $nome;
    public $quantidade;
    public $preco;
    public $produtoId;

    protected $rules = [

        'nome' => 'required',
        'preco' => 'required'
    ];

    public $messages = [
        'nome.required' => 'Esse campo é obrigatório',
        'preco.required' => 'Esse campo é obrigatório'
    ];

    public function mount($id)
    {
        $this->produtoId = $id;
        $user = Produto::find($this->produtoId);

        if ($user) {
            $this->nome = $user->nome;
             $this->quantidade = $user->quantidade;
              $this->preco = $user->preco;
      
        }
    }

    public function update()
    {
        $produto = Produto::find($this->produtoId);

        $produto->update([
            'nome' => $this->nome,
             'quantidade' => $this->quantidade,
              'preco' => $this->preco,


        ]);


        
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
