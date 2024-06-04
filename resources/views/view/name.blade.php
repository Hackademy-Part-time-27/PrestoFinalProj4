<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
.contenitore{
  padding-left: 5%;
  padding-top: 5%;
  display:flex;
  flex-flow: column nowrap;
  justify-content:start;
}

.btn-custom{
  text-decoration: none;
  color: #fff;
  padding-left: 2%;
  padding-top: 2%;
  padding-bottom: 2%;
  padding-top: 2%;
  padding-left: 2%;
  background-color: #579dff ;
  border-radius: 10px;
  width: 25%;
}

.btn-custom:hover{
  opacity: 0.5;
}


  </style>
</head>
<body>
  <div class="contenitore">
        <h4 style="text-transform:none;">L'utente con mail: {{$email}} vuole diventare un revisore, clicca sul bottone per accettare la richiesta, altrimenti ignora.</h4>
        <a class="btn-custom" href="{{ route('revisor.make', $email) }}">Rendi Ufficialmente Revisore</a>
  </div>   
</body>
</html>