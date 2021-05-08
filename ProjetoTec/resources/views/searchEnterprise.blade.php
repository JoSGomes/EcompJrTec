<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas juniores</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <center>
    <div class="container">
    <p><strong>Escolha a Federação das Empresas que deseja listar</strong></p>
        <div class="mb-3">
        <form action="{{route('search.create')}}">
        @csrf

            @if(count($errors) > 0 )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="p-0 m-0" style="list-style: none;">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <select class="form-control" id="chooseFederation" name="chooseFederation">
            
                <option value="">Escolha a Federação</option>
                @foreach($federations as $federation)
                    <option name="chooseFederation" id="chooseFederation" type= "text" value="{{$federation->nome}}" {{ ($federation->id == $federation->id) ? 'selected' : '' }}> {{ $federation->nome }} </option>               
                @endforeach

            </select>

            <button type="submit" id="buttonSearchEnterprise" class= "btn btn-primary m-3">Filtrar</button>
            <a href='/home' id="buttonCFederation" class="btn btn-primary m-3">Voltar</a>
            </form>  
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <p><strong>Empresas Juniores na Federação... {{$federationn}}</strong></p>
        <tr>
            <td><strong>#</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Federação</strong></td>   
        </tr>
        @foreach($enterprises as $enterprise)
        <tr>
            <td>{{$enterprise->id}}</td>
            <td>{{$enterprise->nome}}</td>
            <td>{{$enterprise->federacao}}</td>   
        </tr>
        @endforeach
    </table>

    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
