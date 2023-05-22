<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="
    width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Meu Formulario</title>
</head>

<style type="text/css">
fieldset{
  width: 70%;
  margin: auto auto;
}
</style>
<body>

<form method = "POST">
 
<fieldset>
    <legend>Formulario de contato</legend>
<div class="input-group mb-3">
  <span class="input-group-text">Nome completo</span>
  <input type="text" class="form-control" placeholder="Digite seu nome" 
  aria-label="nome" name= "nome">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">LOGRADOURO:</span>
  <input type="text" class="form-control" 
  placeholder="Digite seu endereço" aria-label="logradouro" 
  name= "logradouro">
  </div>
  <br>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text">NUMERO:</span>
  <input type="text" class="form-control" 
  placeholder="NUMERO" aria-label="numero" 
  name= "numero">
  </div>
  <br>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text">COMPLENTO:</span>
  <input type="text" class="form-control" 
  placeholder="COMPLENTO" aria-label="complento" 
  name= "complento">
  </div>
  <br>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text">BAIRRO:</span>
  <input type="text" class="form-control" 
  placeholder="Digite seu Bairro" aria-label="bairro" 
  name= "bairro">
  </div>
  <br>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text">CIDADE:</span>
  <input type="text" class="form-control" 
  placeholder="Digite sua Cidade" aria-label="cidade" 
  name= "cidade">
  </div>
  <br>
  </div>
<div class="input-group mb-3">
  <span class="input-group-text">CPF:</span>
  <input type="text" class="form-control" 
  placeholder="Digite seu CPF:" aria-label="cpf" 
  name= "cpf">
  </div>
  <br>
  </div>
<div class="input-group mb-3">
  <span class="input-group-text">Data de Nascimento:</span>
  <input type="text" class="form-control" 
  placeholder="Data de Nascimento:" aria-label="datadenasci" 
  name= "datadenasci">
  </div>
  <br>
  </div>
<div class="input-group mb-3">
  <span class="input-group-text">SEXO:</span>
  <input type="text" class="form-control" 
  placeholder="SEXO:" aria-label="sexo" 
  name= "sexo">
  </div>
  <br>
  </div>
<div class="input-group mb-3">
  <span class="input-group-text">SENHA:</span>
  <input type="password" class="form-control" 
  placeholder="Digite sua Senha :" aria-label="senha" 
  name = "senha">

  </div>
  <div class="input-group mb-3">
  <span class="input-group-text">REPETIR:</span>
  <input type="password" class="form-control" 
  placeholder="Favor repetir sua Senha :" aria-label="resenha" 
  name = "resenha">
  </div>
  <br>


<script>

if($senha != $resenha){
 <div class='alert alert-info' role='alert'>Senhas nao coincides !!!</div>
}else if($senha == $resenha){
  <div class='alert alert-info' role='alert'>OK SENHA CADASTRADA COM SUCESSO !!!</div>
   function redirecionar() {
      window.location = "http://localhost/crud/cadastro.php";
   }
  }
</script>

<input class="btn btn-primary" type="reset" value="Limpar">

</fieldset>
</form>
<body>
</html>

