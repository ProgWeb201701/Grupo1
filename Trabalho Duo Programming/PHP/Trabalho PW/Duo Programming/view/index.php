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

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();

    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    //Redireciona para a página de autenticação
    header('location:http://localhost/Trabalho%20PW/Duo%20Programming/view/login.php');
}
?>


<div id="main" class="texto" >
    <p id="home"><br><br></p>
    <div  class="panel panel-primary">
        <div class="panel-heading"><h4>Duo Programming</h4></div>

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">


                        <img src="imgs/cicone.png" alt="Lights" style="width:50%">
                        <div class="caption">
                            <a href="Conceitos.php"><h4>-Conceitos Básicos</h4></a>
                            <!--       <a href="Conceitos.php#criando"><h4> - Criando e Compilando</h4></a> -->
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="imgs/cicone.png" alt="Nature" style="width:50%">
                        <div class="caption">
                            <a href="Variaveis.php"><h4>-Variáveis </h4></a>
                            <!-- <a href="Variaveis.php#variaveis"><h4> - Variáveis e seus Tipos</h4></a>
                             <a href="Variaveis.php#utilizando"><h4> - Utilizando Variáveis</h4></a> -->
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">


                        <img src="imgs/cicone.png" alt="Fjords" style="width:50%">
                        <div class="caption">
                            <a href="Operadores.php" ><h4>-Operadores</h4></a>
                            <!--   <a href="Operadores.php#lista"><h4>-Operadores</h4></a>
                               <a href="Operadores.php#estrutura"><h4>-IF e Else</h4></a> -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">

                        <img src="imgs/cicone.png" alt="Fjords" style="width:50%">
                        <div class="caption">
                            <a href="Controladores.php"><h4>-Controladores</h4></a>
                            <!--     <a href="Controladores.php#while"><h4> - While</h4></a>
                                 <a href="Controladores.php#dowhile"><h4> - Do While</h4></a>
                                 <a href="Controladores.php#for"><h4> - For</h4>	</a>
                                 <a href="Controladores.php#switch"><h4> - Switch</h4></a>-->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">


                        <img src="imgs/cicone.png" alt="Fjords" style="width:50%">
                        <div class="caption">
                            <a href="Funcoes.php"><h4>-Funções</h4></a>
                            <!--      <a href="Funcoes.php#criando"><h4> - Criando Funções</h4>	</a>
                                  <a href="Funcoes.php#recursiva"><h4> - Funções Recursivas</h4></a> -->
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
    <p id = "contato_pe">E-mail: danimarttiins@gmail.com</p>
    <p id = "contato_pe">E-mail: naihara2008@hotmail.com</p>


</footer>
</body>
</html>