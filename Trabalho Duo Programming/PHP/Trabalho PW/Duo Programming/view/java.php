<?php
require '/../vendor/autoload.php';
session_start();
$sessao = new ControllerSessao();
$sessao->logOut();
// Menu Superior e Menu Latera
$pagina = new PageView();
$pagina->showHeadHTML();
$pagina->showMenuSuperior();

?>

<div id="main" class="texto" >
    <p id="contato"><br><br></p>
    <div  class="panel panel-primary">
        <div class="panel-heading"><h3>Aguarde</h3></div>
        <div class="panel-body">
            <p class="texto">
            <h4>Página em construção</h4>
            </p>
        </div>
        <br>
        <br>
        <br>
        <hr>

    </div>
</div>
</body>
</html>