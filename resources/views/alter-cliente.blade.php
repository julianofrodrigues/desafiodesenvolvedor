<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alteração de Informações</title>
</head>
<body>
    <h1>Alterar Informações</h1>
    <form method="post" action="/client/edit/{{$client->id}}" enctype="multipart/form-data">{{ csrf_field() }}
        <label>Nome do Cliente:</label>
        <input type="text" name="name" value="{{$client->name}}" class="form-control" required>
        <br />
        <label>Data de Nascimento:</label>
        <input type="date" id="dtnasc" name="dtnasc" value="{{$client->dtnasc}}" class="form-control" required>
        <br />
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" @if($client->sexo=="Masculino")checked @endif> Masculino
        <input type="radio" name="sexo" value="Feminino" @if($client->sexo=="Feminino")checked @endif > Feminino
        <br />
        <label>Data de Cadastro:</label>
        <input type="date" id="dtcad" name="dtcad" value="{{$client->dtcad}}"class="form-control" required>
        <br />
        <button type="submit" class="btn btn-warning" >Alterar</button>
        <button type="reset" class="btn btn-default">Limpar</button>
    </form>
</body>
</html>