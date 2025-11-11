<div>
  <style>
    /* Corpo da página */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffc0dd, #ff8ac9);
      margin: 0;
      padding: 20px;
    }

    /* Campo de pesquisa */
    .form-control {
      border-radius: 15px;
      padding: 12px 15px;
      border: 2px solid #ffd1e8;
      font-size: 1rem;
      transition: all 0.3s ease;
      width: 100%;
      box-sizing: border-box;
    }

    .form-control:focus {
      border-color: #ff6fb3;
      box-shadow: 0 0 10px rgba(255, 111, 179, 0.4);
      outline: none;
    }

    /* Card */
    .card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(255, 105, 180, 0.2);
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 35px rgba(255, 105, 180, 0.3);
    }

    .card-body {
      padding: 25px;
    }

    /* Tabela */
    .table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    .table th, .table td {
      text-align: left;
      padding: 12px 15px;
      border-bottom: 1px solid #ffe0f0;
    }

    .table thead th {
      background: linear-gradient(90deg, #ff4fa3, #ff6fb3);
      color: #fff;
      font-weight: 600;
    }

    .table tbody tr:nth-child(even) {
      background: #fff0f8;
    }

    .table tbody tr:hover {
      background: #ffd1e8;
      transition: background 0.3s;
    }

    /* Botões */
    .btn-info, .btn-danger {
      border-radius: 12px;
      font-size: 0.9rem;
      padding: 6px 12px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-info {
      background: linear-gradient(90deg, #ff4fa3, #ff6fb3);
      color: #fff;
    }

    .btn-info:hover {
      background: linear-gradient(90deg, #ff6fb3, #ff4fa3);
    }

    .btn-danger {
      background: linear-gradient(90deg, #ff6f6f, #ff3b3b);
      color: #fff;
    }

    .btn-danger:hover {
      background: linear-gradient(90deg, #ff3b3b, #ff6f6f);
    }

    /* Responsividade */
    @media (max-width: 768px) {
      .table th, .table td {
        padding: 10px 8px;
      }

      .btn-info, .btn-danger {
        padding: 5px 10px;
        font-size: 0.85rem;
      }
    }
  </style>

  <!-- Campo de pesquisa -->
  <div class="mb-3">
    <input type="text" wire:model.live='search' class="form-control" placeholder="Pesquisar produto...">
  </div>

  <!-- Card da tabela -->
  <div class="mt-5">
    <div class="card">
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Quantidade</th>
              <th>Quantidade Mínima</th>
              <th>Preço</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produto as $p)
            <tr>
              <td>{{$p->id}}</td>
              <td>{{$p->nome}}</td>
              <td>{{$p->descricao}}</td>
              <td>{{$p->quantidade}}</td>
              <td>{{$p->quantidade_minima}}</td>
              <td>{{$p->preco}}</td>
              <td>
                <a href="{{route('produto.edit', $p->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button class="btn btn-sm btn-danger"
                        onclick="confirm('Tem certeza?') || event.stopImmediatePropagation()"
                        wire:click="delete({{ $p->id }})">Excluir</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
