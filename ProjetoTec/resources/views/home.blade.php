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
        <a href='/enterprises' id="buttonCEnterprise" class=" btn btn-primary m-3">Cadastrar Empresa</a>
        <a href='/federations' id="buttonCFederation" class=" btn btn-primary m-3">Cadastrar Federação</a>
        <a href='/search' id="buttonCFederation" class=" btn btn-primary m-3">Pesquisar Empresas por Federação</a>
        <a href='/searchEnterpriseHome' id="buttonCFederation" class=" btn btn-primary m-3">Pesquisar uma Empresa</a>
        <div class="row align-items-start">
            <div class="col">
                <div class="container">
                    <table class="table table-bordered table-striped">
                        <p><strong>Empresas Juniores Cadastradas</strong></p>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Nome</strong></td>
                            <td><strong>Federação</strong></td>   
                        </tr>
                        @foreach($dataEnterprises as $enterprises)
                        <tr>
                            <td>{{$enterprises->id}}</td>
                            <td>{{$enterprises->nome}}</td>
                            <td>{{$enterprises->federacao}}</td>   
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        <div class="col">
            <div class="container" >
                <table class="table table-bordered table-striped">
                    <p><strong>Federações Cadastradas</strong></p>
                    <tr>
                        <td><strong>#</strong></td>
                        <td><strong>Nome</strong></td>
                        <td><strong>Estado</strong></td>   
                    </tr>
                    @foreach($dataFederations as $federations)
                    <tr>
                        <td>{{$federations->id}}</td>
                        <td>{{$federations->nome}}</td>
                        <td>{{$federations->estado}}</td>   
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        
    </center>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>