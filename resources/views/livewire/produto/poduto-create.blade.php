<div>
 <form wire:submit.model='store'>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Escreva o nome do produto"
     wire:model='nome'>
  </div>

  <div class="mb-3">
    <label for="quantidade" class="form-label">Quantidade</label>
    <input type="quantidade" class="form-control" id="quantidade" placeholder="EX:.10"
     wire:model='quantidade'>
  </div>

  <div class="mb-3">
    <label for="preco" class="form-label">Preço</label>
    <input type="preco" class="form-control" id="preco" placeholder="EX:.R$00.00"
     wire:model='preco'>
  </div>
    
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Não sou um robo</label>
  </div>
  <button type="submit" class="btn btn-info">Cadastrar</button>
</form>
</div>
