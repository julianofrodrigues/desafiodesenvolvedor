<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Clientes</title>
</head>
<body>
    <center>
    <h1>Lista Clientes</h1>
    <nav class="navbar" color ="black">
  <a class="navbar-brand" href="/">Home</a>
  <a class="navbar-brand" href="client">Lista de Clientes</a>
  <a class="navbar-brand" href="client/create">Cadastro de Clientes</a>
</nav><br>

    
    <table>
    <thead> 
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Data de Cadastro</th>
            <th>ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        
        
        <tr>
        <td title="codigo">{{$cliente->id}}</td>
        <td title="Nome">{{$cliente->name}}</td>
        <td title="Data de Nascimento">{{date('d/m/Y', strtotime($cliente->dtnasc))}}</td>
        <td title="Sexo">{{$cliente->sexo}}</td>
        <td title="Data de Cadastro">{{date('d/m/Y', strtotime($cliente->dtcad))}}</td>
        <td>
            <a onclick="direcionar('/client/edit/' + '{{ $cliente->id }}')" style="color: blue; text-decoration: underline; cursor: pointer">
            Editar
            </a>

            <a onclick="direcionar('/client/destroy/' + '{{ $cliente->id }}')" method="get" 
                    style="color: blue; text-decoration: underline; cursor: pointer">
                Excluir
            </a>
        </td>
        
       
    
        </tr>
        
    @endforeach
    </tbody>
    </table>
</body>
<script>
    function direcionar(rota){ 
        window.location.href= rota
    } 
</script>
</html>