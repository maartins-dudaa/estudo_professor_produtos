<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{

    public $search = '';
    public function render()
    {
        $produto = Produto::where('nome', 'like', '%' . $this->search. '%')->get();
        return view('livewire.produto.produto-index', compact('produto'));
    }

    public function delete($produtoId){
        $produto = Produto::find($produtoId);
        if($produto){
            $produto->delete();
            session()->flash('success', 'Excluído');
        }
    }
}
