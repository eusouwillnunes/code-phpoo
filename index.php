<?php
require_once 'Cliente.php';

$url = 'http://' . $_SERVER['HTTP_HOST'];
$ordenacao = filter_input(INPUT_GET, "ordenar", FILTER_DEFAULT);
if($ordenacao == "dec"){
    $dec = true;
}else{
    $dec = false;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
              integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
              crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>PHP OO - Projeto - Fase 01!</h1>
            <a href="<?= $url; ?>" class="btn btn-primary mb-4">Ordenar - Crescente</a>
            <a href="<?= $url . '?ordenar=dec'; ?>" class="btn btn-danger mb-4">Ordenar - Decrescente</a>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                $Clientes = [
                    0 => new Cliente('Willian', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    1 => new Cliente('Danielly', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    2 => new Cliente('Josefa', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    3 => new Cliente('Paulo', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    4 => new Cliente('Pedro', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    5 => new Cliente('Rosana', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    6 => new Cliente('Douglas', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    7 => new Cliente('Mezina', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    8 => new Cliente('Cláudia', '87336382888', 'Rua 10, Pirapora', '81239323'),
                    9 => new Cliente('Sônia', '87336382888', 'Rua 10, Pirapora', '81239323'),
                ];


                if($dec){
                    krsort($Clientes);
                }

                foreach ($Clientes as $key => $Cliente) {
                    ?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?= $key; ?>">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                   href="#cliente<?= $key; ?>" aria-expanded="false"
                                   aria-controls="cliente<?= $key; ?>">
                                    <?= $key . " - " . $Cliente->nome; ?>
                                </a>
                            </h5>
                        </div>

                        <div id="cliente<?= $key; ?>" class="collapse" role="tabpanel"
                             aria-labelledby="heading<?= $key; ?>">
                            <div class="card-block">
                                <ul>
                                    <li>CPF: <?= $Cliente->cpf; ?></li>
                                    <li>Endereço: <?= $Cliente->endereco; ?></li>
                                    <li>Telefone: <?= $Cliente->telefone; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
                integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
                integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
                integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
                crossorigin="anonymous"></script>
    </body>
</html>

