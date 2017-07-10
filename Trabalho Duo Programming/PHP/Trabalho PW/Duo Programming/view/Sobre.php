<?php
session_start();
require '/../vendor/autoload.php';
$sessao = new ControllerSessao();
$sessao->logOut();
// Menu Superior e Menu Latera
$pagina = new PageView();
$pagina->showHeadHTML();
$pagina->showMenuSuperior();
?>

        <div id="main" class="texto" > 

            <p id="sobre"><br><br></p>
            <div  class="panel panel-primary">
                <div class="panel-heading"><h4>Sobre</h4></div>
                <div class="panel-body">
                    <p class="texto">
                        Web Site desenvolvido para a Disciplina de Programação Web - 2017/06.
                    </p>
                </div>
                <br><br><br><hr>
                <footer>

                    <p id = "contato_pe">Contatos</p>
                    <p id = "contato_pe">E-mail: danimarttiins2008@gmail.com</p>
                    <p id = "contato_pe">E-mail: naihara2008@hotmail.com</p>


                </footer>
            </div>


        </div>
    </body>
</html>