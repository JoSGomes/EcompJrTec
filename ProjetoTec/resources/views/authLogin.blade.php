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
        <div class="container mb-3">
            <form action="{{route('auth.store')}}" method='POST'>
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
                <div class="col-lg-12">
                    <label class="form-label m-3">E-mail:</label>
                    <input class="form-control" size="50" name="inputEmail" type="text" placeholder="Digite o seu e-mail" required>
                    <label class="form-label m-3">Senha:</label>
                    <input class="form-control" name="inputSenha" type="text" placeholder="Digite a sua senha" required> 
                </div>

                <button type="submit" id="authEnter" class=" btn btn-primary m-3">Entrar</a>

           

            </form>             
        
        </div>
        <label class="form-label m-3">Não tem uma conta? Cadastre-se!</label>
        <a href='/register' id="register" class=" btn btn-primary m-3">Cadastrar</a>
    
    
    
    </center>
</body>
</html>