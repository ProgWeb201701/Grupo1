<?php
require '/../vendor/autoload.php';
require '/../controller/config.php';
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
$sessao = new ControllerSessao();
$sessao->logOut();
// Menu Superior e Menu Latera
$pagina = new PageView();
$pagina->showHeadHTML();
$pagina->showMenuSuperior();

    $resposta_correta=0;
    $resposta_errada=0;
    $sem_resposta=0;

    $keys=array_keys($_POST);
    $order=join(",",$keys);

    $response=mysql_query("select id_questoes,resposta from questoes where id_questoes IN($order) ORDER BY FIELD(id_questoes,$order)")   or die(mysql_error());

    while($result=mysql_fetch_array($response)){
        if($result['resposta']==$_POST[$result['id_questoes']]){
            $resposta_correta++;
        }else if($_POST[$result['id_questoes']]==5){
            $sem_resposta++;
        }
        else{
            $resposta_errada++;
        }
    }
    $name=$_SESSION['name'];
    mysql_query("update usuario set score='$resposta_correta' where username='$name'");
    ?>
<!DOCTYPE html>
<html>

<div id="main" class="texto" >
    <p id="contato"><br><br></p>
    <div  class="panel panel-primary">
        <div class="panel-heading"><h3>Resultado</h3></div>
        <div class="panel-body">
            <p class="texto">
            <p>Total de respostas corretas : <span class="resposta"><?php echo $resposta_correta;?></span></p>
            <p>Total de respostas erradas : <span class="resposta"><?php echo $resposta_errada;?></span></p>

            <br/> <br/> <br/>
            <a href="index.php" class='btn btn-success'>Inicie um novo quiz!!!</a>
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
