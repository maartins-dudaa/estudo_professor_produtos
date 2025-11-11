<div> <!-- <<< elemento raiz obrigatório do Livewire -->
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-gradient">Gestão de Estoque</h2>
            <a class="btn btn-secondary me-2" href="{{ route('dashboard') }}">Voltar</a>
        </div>

        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if($lowStockAlert)
        <div class="alert alert-warning">{{ $lowStockAlert }}</div>
        @endif

        <!-- Formulário de Movimentação -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-gradient-primary text-white">
                <h5>Registrar Movimentação de Estoque</h5>
            </div>
            <div class="card-body">
                <form wire:submit="registerMovement">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Produto</label>
                                <select class="form-select" wire:model="selectedProductId">
                                    <option value="">Selecione um produto</option>
                                    @foreach($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }} (Estoque: {{ $produto->quantidade }})</option>
                                    @endforeach
                                </select>
                                @error('selectedProductId') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tipo</label>
                                <select class="form-select" wire:model="tipo">
                                    <option value="entrada">Entrada</option>
                                    <option value="saida">Saída</option>
                                </select>
                                @error('tipo') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Quantidade</label>
                                <input type="number" class="form-control" wire:model="quantidade_movimentada">
                                @error('quantidade_movimentada') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label">Data</label>
                                <input type="date" class="form-control" wire:model="data_movimentacao">
                                @error('data_movimentacao') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient">Registrar Movimentação</button>
                </form>
            </div>
        </div>

        <!-- Lista de Produtos -->
        <div class="card">
            <div class="card-header bg-gradient-primary text-white">
                <h5>Produtos Cadastrados</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Estoque Atual</th>
                                <th>Estoque Mínimo</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ Str::limit($produto->descricao, 50) }}</td>
                                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                <td>{{ $produto->quantidade }}</td>
                                <td>{{ $produto->quantidade_minima }}</td>
                                <td>
                                    @if($produto->quantidade < $produto->quantidade_minima)
                                        <span class="badge bg-danger">Estoque Baixo</span>
                                    @elseif($produto->quantidade == $produto->quantidade_minima)
                                        <span class="badge bg-warning">Estoque Mínimo</span>
                                    @else
                                        <span class="badge bg-success">Normal</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        Livewire.on('redirect', (data) => {
            window.location.href = data.url;
        });
    </script>

    <style>
        body {
            background: linear-gradient(to right, #ff7eb9, #feb2d8);
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .text-gradient {
            background: -webkit-linear-gradient(45deg, #ff007f, #ffb6c1);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: 700;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #ff7eb9, #ff0088);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #ff0088, #ff7eb9);
            transform: scale(1.05);
        }

        .card-header.bg-gradient-primary {
            background: linear-gradient(135deg, #ff0088, #ff7eb9);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .form-select, .form-control {
            border: 1px solid #ff7eb9;
            box-shadow: 0 2px 5px rgba(255, 0, 136, 0.1);
            transition: 0.3s ease;
        }

        .form-select:focus, .form-control:focus {
            border-color: #ff0088;
            box-shadow: 0 0 8px rgba(255, 0, 136, 0.5);
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 192, 203, 0.15);
        }

        .alert-success {
            background-color: #ffe6f2;
            color: #b30059;
            border: 1px solid #ff99cc;
        }

        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffc107;
        }

        .badge.bg-danger {
            background-color: #ff007f;
        }

        .badge.bg-warning {
            background-color: #ffb300;
        }

        .badge.bg-success {
            background-color: #28a745;
        }
    </style>
</div>
