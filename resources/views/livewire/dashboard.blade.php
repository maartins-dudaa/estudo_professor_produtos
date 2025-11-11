<div>
  <style>
    /* Corpo da página */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffc0dd, #ff8ac9);
      margin: 0;
      padding: 20px;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(135deg, #ff4fa3, #ff6fb3);
      padding: 15px 25px;
      box-shadow: 0 6px 20px rgba(255, 105, 180, 0.4);
    }

    .navbar-brand {
      font-weight: 800;
      color: #fff;
      font-size: 1.5rem;
    }

    .navbar-nav .navbar-text {
      color: #fff;
      font-weight: 500;
      font-size: 1rem;
    }

    .btn-outline-light {
      border: 2px solid #fff;
      color: #fff;
      font-weight: 600;
      padding: 8px 15px;
      border-radius: 20px;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background: #fff;
      color: #ff4fa3;
    }

    /* Cards */
    .card {
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(255, 105, 180, 0.3);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 40px rgba(255, 105, 180, 0.4);
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      color: #ff4fa3;
      font-weight: 700;
      font-size: 1.3rem;
    }

    .card-text {
      color: #666;
      font-size: 1rem;
      margin-bottom: 15px;
    }

    .btn-primary {
      background: linear-gradient(90deg, #ff4fa3, #ff6fb3);
      border: none;
      border-radius: 15px;
      color: #fff;
      font-weight: 700;
      padding: 10px 20px;
      width: 100%;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #ff6fb3, #ff4fa3);
      box-shadow: 0 6px 20px rgba(255, 111, 179, 0.4);
    }

    /* Responsividade */
    @media (max-width: 768px) {
      .container {
        padding: 0 15px;
      }

      .card-body {
        padding: 15px;
      }

      .card-title {
        font-size: 1.1rem;
      }

      .card-text {
        font-size: 0.9rem;
      }

      .btn-primary {
        font-size: 0.95rem;
        padding: 12px 15px;
      }
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
      <span class="navbar-brand">Moda Express</span>
      <div class="navbar-nav ms-auto">
        <span class="navbar-text me-3">Olá, {{ $user->name }}</span>
        <button class="btn btn-outline-light btn-sm" wire:click="logout">Sair</button>
      </div>
    </div>
  </nav>

  <!-- Container de Cards -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            <p class="card-text">Gerencie os produtos da loja</p>
            <a href="{{ route('produto.create') }}" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Gestão de Estoque</h5>
            <p class="card-text">Controle as movimentações</p>
            <a href="{{ route('movimentacao') }}" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
