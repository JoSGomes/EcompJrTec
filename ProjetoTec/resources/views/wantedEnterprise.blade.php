<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas juniores</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class= "container">
            @if($enterprise != null)
            <table class="table table-bordered table-striped">
                    <p><strong>Empresa</strong></p>
                    <tr>
                        <td><strong>#</strong></td>
                        <td><strong>Nome</strong></td>
                        <td><strong>Federação</strong></td>   
                    </tr>
                    <tr>
                        <td>{{$enterprise[0]}}</td>
                        <td>{{$enterprise[1]}}</td>
                        <td>{{$enterprise[2]}}</td>   
                    </tr>
            </table>
            @endif
            <a href='/home' class="btn btn-primary m-3" type="submit">Voltar</a>
        </div>

    </center>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>