<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Movimentacoes;
use App\Livewire\Produto\PodutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\User\UserEdit;
use App\Livewire\User\UserIndex;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->middleware('auth')->name('dashboard');
Route::get('/user', UserIndex::class)->name('user.index');
Route::get('/user/edit/{id}', UserEdit::class)->middleware('auth')->name('user.edit');


Route::get('/produto/create', PodutoCreate::class)->name('produto.create');
Route::get('/produtos', ProdutoIndex::class)->name('produto.index');
Route::get('/produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
Route::get('/movimentacao', Movimentacoes::class)->name('movimentacao');