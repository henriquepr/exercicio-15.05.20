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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

        <form action="" method="post" class="container col-sm-8 col-md-8 col-lg-8 mt-45 d-flex">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Digite o que você procura...">
                <div class="input-group-prepend">
                    <div class="border-radius btn btn-light">
                        <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>    
        </form>
        
        <div class="container col-12 col-md-6 mt-5">
            <h1 class="text-center text-success">Games para todas as plataformas</h1>
            <p>Aqui você encontra os melhores jogos, com os melhores preços para todas as plataformas...</p>
            <h3 class="text-center">Escolha uma das opções abaixo e confira:</h3>
        </div>

        <div class="container col-12 col-md-6 d-block d-lg-flex mt-45 mb-3">
            <div class="card m-auto">
                <button type="button" class="btn btn-playstation py-4 px-4">Playstation</button>
            </div>
            <div class="card ml-auto mr-auto mt-4 mt-md-0">
                <button type="button" class="btn btn-xbox py-4 px-5">Xbox</button>
            </div>
            <div class="card ml-auto mr-auto mt-4 mt-md-0">
                <button type="button" class="btn btn-nintendo py-4 px-45">Nintendo</button>
            </div>
            <div class="card ml-auto mr-auto mt-4 mt-md-0">
                <button type="button" class="btn btn-pc py-4 px-4">Computador</button>
            </div>
        </div>

        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>