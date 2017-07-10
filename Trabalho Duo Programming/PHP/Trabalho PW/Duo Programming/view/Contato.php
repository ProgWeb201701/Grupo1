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
                <div class="panel-heading"><h3>Endereços para Contato</h3></div>
                <div class="panel-body">
                    <p class="texto">	
                    <h4>E-mail:	    contato@DuoProgramming.com.br</h4>
                    <h4>Telefone:	 (55)1234-5678</h4>
                    </p>
                </div>
                <br>
                <br>
                <br>
                <hr>
                <footer>
                    <p id = "contato_pe">Contatos</p>
                    <p id = "contato_pe">E-mail: danimarttiins@gmail.com</p>
                    <p id = "contato_pe">E-mail: naihara2008@hotmail.com</p>


                </footer>
            </div>
        </div>
    </body>
</html>