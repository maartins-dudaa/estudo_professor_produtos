<div>
  <style>
    /* Corpo da página */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffc0dd, #ff8ac9);
      margin: 0;
      padding: 20px;
    }

    /* Formulário */
    form {
      background: #fff;
      border-radius: 25px;
      padding: 40px 35px;
      width: 400px;
      box-shadow: 0 15px 35px rgba(255, 105, 180, 0.2);
      border-top: 10px solid #ff4fa3;
      transition: all 0.3s ease;
      margin: 50px auto;
    }

    form:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 35px rgba(255, 105, 180, 0.3);
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

    /* Mensagem de erro */
    .text-danger {
      font-size: 0.875rem;
      color: #ff3b3b;
      margin-top: 5px;
    }

    /* Botão */
    .btn-primary {
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

    .btn-primary:hover {
      background: linear-gradient(90deg, #ff6fb3, #ff4fa3);
      box-shadow: 0 8px 18px rgba(255, 111, 179, 0.5);
    }

    /* Responsividade */
    @media (max-width: 768px) {
      form {
        width: 90%;
        padding: 30px 20px;
      }

      .btn-primary {
        font-size: 0.95rem;
        padding: 12px 0;
      }
    }
  </style>

  <form wire:submit.model='login'>
    <h2>💖 Login</h2>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      wire:model='email'>
      
      {{-- Mensagem de erro --}}
      @error('email') 
        <span class="text-danger">{{$message}}</span> 
      @enderror
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" wire:model='password'>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
