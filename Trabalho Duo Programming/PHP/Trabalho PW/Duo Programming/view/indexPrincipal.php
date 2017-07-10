<?php
session_start();
require '/../vendor/autoload.php';
$sessao = new ControllerSessao();
$sessao->logOut();
$sessao->excluir($sessao);
// Menu Superior e Menu Latera
$pagina = new PageView();
$pagina->showHeadHTML();
$pagina->showMenuSuperior();
?>

<div id="main" class="texto" >
    <p id="home"><br><br></p>
    <div  class="panel panel-primary">
        <div class="panel-heading"><h4>Duo Programming</h4></div>
        <div class="panel-body">
            <div class="container">

                <h2>Eu quero aprender...</h2>

                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="java.php" </a>
                            <img src="imgs/javaIcone.png" alt="Lights" style="width:100%">
                            <div class="caption">
                                <h1>Java</h1>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="php.php"  </a>
                            <img src="imgs/iconePhp.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h1>PHP</h1>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="index.php"  </a>
                            <img src="imgs/cicone.png" alt="Fjords" style="width:100%">
                            <div class="caption">


                              <h2>C</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

              </div>
</div>
</div>
<br>
<br>
<br>
<hr>

<footer>
    <p id = "contato_pe">Contatos</p>
    <p id = "contato_pe">E-mail: naihara2008@hotmail.com</p>


</footer>
</body>
</html>