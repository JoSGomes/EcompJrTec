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
    <form action="{{route('enterprises.store')}}" method = "POST">
        @csrf
        @if(count($errors) > 0 )
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="p-0 m-0" style="list-style: none;">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
        @endif
        <div class="mb-3">
            <label class="form-label m-3">Nome da Empresa Junior</label>
            <input name= "inputEnterprise" type="text" class="form-control" placeholder="Digite o nome da empresa">
        </div>
        <div class="mb-3">
                <select class="form-control" id="chooseFederation" name="chooseFederation">
                    <option value="">Escolha aqui a Federação dessa Empresa Junior</option>
                    @foreach($federations as $federation)
                        <option value="{{ $federation->nome}}" {{ ($federation->id == $federation->id) ? 'selected' : '' }}> {{ $federation->nome }} </option>
                
                    @endforeach
                </select>   
        </div>
        <div class= "d-grid gap-2">
        <button type="submit" id="registerEnterpriseButton" class=" btn btn-primary m-3">Cadastrar</button>
        </div>    
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>