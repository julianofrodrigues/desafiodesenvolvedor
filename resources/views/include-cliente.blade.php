<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <center>
    <h1>Incluir Cliente</h1>
    <form method="post" action="{{route('client.store')}}" enctype="multipart/form-data">{{ csrf_field() }}
        <label>Nome do Cliente:</label>
        <input type="text" name="name" class="form-control" required>
        <br />
        <label>Data de Nascimento:</label>
        <input type="date" id="dtnasc" name="dtnasc" class="form-control" required>
        <br />
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Masculino"> Masculino
        <input type="radio" name="sexo" value="Feminino" > Feminino
        <br />
        <label>Data de Cadastro:</label>
        <input type="date" id="dtcad" name="dtcad" class="form-control" required>
        <br /><br />
        <button type="submit" class="btn btn-default">Cadastrar</button>
        <button type="reset" class="btn btn-default">Limpar</button>
        
    </form>    
</body>
</html>