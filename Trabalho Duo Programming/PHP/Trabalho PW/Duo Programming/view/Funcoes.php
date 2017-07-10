<?php
session_start();
require '/../vendor/autoload.php';
require '/../controller/config.php';

$sessao = new ControllerSessao();
$sessao->logOut();
// Menu Superior e Menu Latera
$pagina = new PageView();
$pagina->showHeadHTML();
$pagina->showMenuSuperior();
$pagina->showMenuLateral();

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>

        <div id="main" class="texto" > 
            <p id="criando"><br><br></p>
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Criando Funções</h4></div>
                <div class="panel-body">
                    <p class="texto">
                        Uma função na linguagem C, nada mais é que um bloco de código. Um função pode ser declarada como varios tipo: float, int, double, bool, void, char...
                        O tipo de função bool, nescessita de um cuidado especial. Pois precisa ser declarado uma biblioteca no cabeçalho do codigo: #include &lt;bool&gt;
                        No final da função, exite um comando "return", que ser para retornar alguma coisa(do mesmo tipo da função, ex: int). As funções do tipo void, nao possuem esse recurso, elas simplesmente terminam e voltam para o local onde ela foram "chamadas", sem retornar nenhum valor.
                        As funções podem receber variaveis ou valores como parâmetros, que pode ser de qualquer tipo, independentes do tipo da função.
                        A "main" é a principal função do seu código. <br> Exemplo:  
                    </p>
                    <pre><code>
#include &lt;stdio.h&gt;
int main(){
	int x, y;

	printf("Digite o primeiro número:\n");
	scanf("%d", &x);

	printf("Digite o segundo número:\n");
	scanf("%d", &y);

	printf("%d", x + y);

	return 0;
}
</code></pre>

                    <p class="texto">
                        Mas e se quisermos calcular outra vez? Teriamos que repetir o "printf("%d", x + y)"?<br>
                        Com o auxilio de uma outra função nao seria nescessário, poderiamos simplesmente criar uma função do tipo inteiro para retornar a soma.
                        <br> Exemplo:  
                    </p>
<pre><code>
#include &lt;stdio.h&gt;
int soma(int valor_1, int valor_2){
	return (valor_1 + valor_2);
}

int main(){
 		int x, y;

 		while(1){//laço infinito, so para mostra a reutilização da função soma
			printf("Digite o primeiro número:\n");
			scanf("%d", &x);

			printf("Digite o segundo número:\n");
			scanf("%d", &y);

	 		printf("%d", soma(x, y));
		} 		
 		return 0;
 	}
</code></pre>                    <p class="texto">
                        No código é feito uma soma inumeras vezes, reaproveitando o código da função soma.
                        Podemos usar funções para usar em uma condição.
                        Ex: Precisamos de um programa que identifique se um número é impar ou par:
                    </p>

                    <pre><code>
#include &lt;stdio.h&gt;
#include &lt;bool&gt; 

bool identificador(int numero){

	//se for par
	if(numero%2 == 0){
		//verdade
		return true;
	}else{
		//falso
		return false;
	}
}

int main(){

	int numero;

	printf("Digite um número:\n");
	scanf("%d", &numero);

	//se a funcao for verdade
	if(identificador(numero)){
		printf("PAR");
	}else{
		printf("IMPAR");
	}

	return 0;
}
</code></pre>


                    <p class="texto">
                        Quando o usuário digita um valor, ele é armazena na variavel 'numero' e logo depois e passado para a função 'identificador'. Observer como a chamada da função esta dentro de um 'if', se a função retornar verade(true), então oque esta dentro das chaves do 'if' será executada, se não será executado o código de dentro das chaves do 'else'.
                    </p>

                </div>
            </div>

            <p id="recursiva"><br><br></p>
            <div  class="panel panel-primary">
                <div class="panel-heading"><h4>Funções Recursivas</h4></div>
                <div class="panel-body">
                    <p class="texto">
                        Uma função pode ser chamada dentro da própria função, criando assim uma recursividade.
                        Ex: Precisamos criar um programa que tenha um contador simples usando recusividade.
                    </p>


                    <pre><code>
#include &lt;stdio.h&gt; 
int contador(int numero, int total){
	if(numero < total){
		printf("%d", numero);
		contador((numero+1), total);
	}
	return 0;
}

int main(){

	int inicio, fim;

	printf("Digite um numero inicial")
	scanf("%d", &inicio);

	printf("Digite ate quanto deve ser contado");
	scanf("%d", &fim);

	contador(inicio, fim);

	return 0;
}</code></pre>
                    <p class="texto">
                        No código a função 'contador' é chamada apenas uma vez dentro da função principal. Logo dentro dela mesma, ela fica sendo chamada até que a condição do 'if' não seja mais verdade.
                    </p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Questões:</h4></div>
                <div class="panel-body">
                    <table id = "questao">
                </div>

                <form class="form-horizontal" role="form" id='login' method="post" action="ResultadoQuestoes.php">
                    <?php
                    $res = mysql_query("select * from questoes where id_nivel=5 ORDER BY RAND()") or die(mysql_error());
                    $rows = mysql_num_rows($res);
                    $i = 1;
                    while ($result = mysql_fetch_array($res)) {
                        ?>


                        <?php if ($i == 1) { ?>
                            <div id='question<?php echo $i; ?>' class='cont'>
                                <p class='questions' id="qname<?php echo $i; ?>"> <?php echo $i ?>
                                    .<?php echo $result['questoes']; ?></p>
                                <input type="radio" value="1" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta1']; ?>
                                <br/>
                                <input type="radio" value="2" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta2']; ?>
                                <br/>
                                <input type="radio" value="3" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta3']; ?>
                                <br/>
                                <input type="radio" value="4" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta4']; ?>
                                <br/>
                                <input type="radio" value="5" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta5']; ?>
                                <br/>
                                <input type="radio" checked='checked' style='display:none' value="6"
                                       id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/>
                                <br/>
                                <button id='<?php echo $i; ?>' class='next btn btn-success' type='button'>Próximo</button>
                            </div>



                        <?php } elseif ($i < 1 || $i < $rows) { ?>

                            <div id='question<?php echo $i; ?>' class='cont'>
                                <p class='questions' id="qname<?php echo $i; ?>"> <?php echo $i ?>
                                    .<?php echo $result['questoes']; ?></p>
                                <input type="radio" value="1" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta1']; ?>
                                <br/>
                                <input type="radio" value="2" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta2']; ?>
                                <br/>
                                <input type="radio" value="3" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta3']; ?>
                                <br/>
                                <input type="radio" value="4" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta4']; ?>
                                <br/>
                                <input type="radio" value="5" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta5']; ?>
                                <br/>
                                <input type="radio" checked='checked' style='display:none' value="6"
                                       id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/>
                                <br/>
                                <button id='<?php echo $i; ?>' class='previous btn btn-success' type='button'>Anterior</button>
                                <button id='<?php echo $i; ?>' class='next btn btn-success' type='button'>Próximo</button>
                            </div>

                        <?php } elseif ($i == $rows) { ?>
                            <div id='question<?php echo $i; ?>' class='cont'>
                                <p class='questions' id="qname<?php echo $i; ?>"> <?php echo $i ?>
                                    .<?php echo $result['questoes']; ?></p>
                                <input type="radio" value="1" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta1']; ?>
                                <br/>
                                <input type="radio" value="2" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta2']; ?>
                                <br/>
                                <input type="radio" value="3" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta3']; ?>
                                <br/>
                                <input type="radio" value="4" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta4']; ?>
                                <br/>
                                <input type="radio" value="5" id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/><?php echo $result['resposta5']; ?>
                                <br/>
                                <input type="radio" checked='checked' style='display:none' value="6"
                                       id='radio1_<?php echo $result['id_questoes']; ?>'
                                       name='<?php echo $result['id_questoes']; ?>'/>
                                <br/>

                                <button id='<?php echo $i; ?>' class='previous btn btn-success' type='button'>Anterior</button>
                                <button id='<?php echo $i; ?>' class='next btn btn-success' type='submit'>Fim</button>
                            </div>
                        <?php }
                        $i++;
                    } ?>

                </form>
            </div>
        </div>


<?php

if (isset($_POST[1])) {
    $keys = array_keys($_POST);
    $order = join(",", $keys);

    $response = mysql_query("select id_questoes,resposta from questoes where id_questoes IN($order) ORDER BY FIELD(id_questoes,$order)") or die(mysql_error());
    $right_resposta = 0;
    $wrong_resposta = 0;
    $unanswered = 0;
    while ($result = mysql_fetch_array($response)) {
        if ($result['resposta'] == $_POST[$result['id_questoes']]) {
            $right_resposta++;
        } else if ($_POST[$result['id_questoes']] == 5) {
            $unanswered++;
        } else {
            $wrong_resposta++;
        }

    }

    echo "resposta_correta : " . $right_resposta . "<br>";
    echo "resposta_errada : " . $wrong_resposta . "<br>";
    echo "sem_resposta : " . $unanswered . "<br>";
}
?>


<script>
    $('.cont').addClass('hide');
    count = $('.questions').length;
    $('#question' + 1).removeClass('hide');

    $(document).on('click', '.next', function () {
        last = parseInt($(this).attr('id'));
        nex = last + 1;
        $('#question' + last).addClass('hide');

        $('#question' + nex).removeClass('hide');
    });

    $(document).on('click', '.previous', function () {
        last = parseInt($(this).attr('id'));
        pre = last - 1;
        $('#question' + last).addClass('hide');

        $('#question' + pre).removeClass('hide');
    });

    setTimeout(function () {
        $("form").submit();
    }, 60000);
</script>
<br>
<br>
<br>
<div>
    <a href="Controladores.php">
        <button type="button" class="btn btn-success" id="botaoPrevious"  ">&#8592;Controladores</button>
    </a>
</div>
<br>
<br>
<br>
<hr>
<footer>
    <p id="contato_pe">Contatos</p>
    <p id="contato_pe">E-mail: danimarttiins@gmail.com</p>
    <p id="contato_pe">E-mail: naihara2008@hotmail.com</p>


</footer>
</body>
</html>
