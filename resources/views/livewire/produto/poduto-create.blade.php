<div>
  <style>
    /* Fundo da página */
    body {
      background: linear-gradient(135deg, #ffc0dd, #ff8ac9);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 40px 10px;
    }

    /* Container do formulário */
    div > form {
      background: #fff;
      border-radius: 25px;
      padding: 35px 30px;
      width: 400px;
      box-shadow: 0 15px 35px rgba(255, 105, 180, 0.3);
      border-top: 10px solid #ff4fa3;
      transition: all 0.4s ease;
    }

    div > form:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(255, 105, 180, 0.4);
    }

    /* Título */
    h2 {
      text-align: center;
      color: #ff2e91;
      font-weight: 800;
      margin-bottom: 25px;
      font-size: 1.8rem;
      letter-spacing: 1px;
    }

    /* Labels */
    label.form-label {
      color: #ff4fa3;
      font-weight: 600;
      display: block;
      margin-bottom: 8px;
      font-size: 1rem;
    }

    /* Inputs */
    input.form-control {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #ffd1e8;
      border-radius: 12px;
      font-size: 1rem;
      transition: all 0.3s ease;
      box-sizing: border-box;
    }

    input.form-control:focus {
      border-color: #ff6fb3;
      box-shadow: 0 0 10px rgba(255, 111, 179, 0.4);
      outline: none;
    }

    /* Checkbox */
    .form-check-label {
      color: #ff4fa3;
      font-weight: 500;
      cursor: pointer;
      user-select: none;
      margin-left: 6px;
    }

    .form-check-input {
      accent-color: #ff4fa3;
      width: 20px;
      height: 20px;
      cursor: pointer;
    }

    /* Botão */
    .btn-info {
      background: linear-gradient(90deg, #ff4fa3, #ff6fb3);
      border: none;
      border-radius: 15px;
      color: #fff;
      font-weight: 700;
      font-size: 1.1rem;
      padding: 14px 0;
      width: 100%;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 6px 15px rgba(255, 111, 179, 0.3);
      letter-spacing: 0.5px;
    }

    .btn-info:hover {
      background: linear-gradient(90deg, #ff6fb3, #ff4fa3);
      box-shadow: 0 8px 18px rgba(255, 111, 179, 0.5);
    }

    /* Espaçamento */
    .mb-3 {
      margin-bottom: 22px;
    }

    /* Responsivo */
    @media (max-width: 480px) {
      div > form {
        width: 90%;
        padding: 30px 20px;
      }
    }
  </style>

  <div class="d-flex justify-content-between align-items-center mb-4">

            <a class="btn btn-secondary me-2" href="{{ route('dashboard') }}">Voltar</a>
        </div>

  <form wire:submit.model='store' style=
  "align-items: center">
    <h2>Cadastro de Produtos</h2>

    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Escreva o nome do produto" wire:model='nome'>
    </div>

    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <input type="text" class="form-control" id="descricao" placeholder="Descreva aqui seu produto" wire:model='descricao'>
    </div>

    <div class="mb-3">
      <label for="quantidade" class="form-label">Quantidade</label>
      <input type="quantidade" class="form-control" id="quantidade" placeholder="EX: 10" wire:model='quantidade'>
    </div>

    <div class="mb-3">
      <label for="quantidade_minima" class="form-label">Quantidade Mínima</label>
      <input type="quantidade_minima" class="form-control" id="quantidade_minima" placeholder="EX: 17" wire:model='quantidade_minima'>
    </div>

    <div class="mb-3">
      <label for="preco" class="form-label">Preço</label>
      <input type="preco" class="form-control" id="preco" placeholder="EX: R$00,00" wire:model='preco'>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Não sou um robô</label>
    </div>

    <button type="submit" class="btn-info">Cadastrar</button>
  </form>
</div>
