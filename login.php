<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>XGames</title>
        <link rel="icon" type="imagem/png" href="img/xbox-icon.png"/>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="form-inline d-md-none">
                <a href="login.php" class="btn btn-light mr-1">Login</a>
                <a href="cadastre-se.php" class="btn btn-info">Cadastre-se</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Jogos em alta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="form-inline d-none d-md-inline">
                <a href="login.php" class="btn btn-light mr-1">Login</a>
                <a href="cadastre-se.php" class="btn btn-info">Cadastre-se</a>
            </div>
        </nav>

        <div class="vertical-center">
            <div class="container">
                <div class="col-12 col-md-6 p-5 m-auto border border-primary rounded">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembrar de mim?</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <a href="cadastre-se.php" class="btn btn-success ml-2">Cadastre-se</a>
                    </form>
                </div>
            </div>
        </div>

        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>