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

<div id="main" class="texto">
    <p id="lista"><br><br></p>
    <div id="ifelse" class="panel panel-primary">
        <div class="panel-heading"><h3>Operadores lógicos</h3></div>
        <div class="panel-body">
            <div id="ifelse" class="panel panel-primary">

                <table id="operadores">
                    <tr>
                        <th id="sub">&gt;</th>
                        <th id="sub">MAIOR DO QUE</th>
                    </tr>

                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>20>&gt;10</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>10&gt;20</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>20&gt;20</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th id="sub">&gt;=</th>
                        <th id="sub">MAIOR OU IGUAL A</th>
                    </tr>

                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>20&gt;=10</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>10&gt;=20</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>20&gt;=20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th id="sub">&lt;</th>
                        <th id="sub">MENOR DO QUE</th>
                    </tr>

                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>20<10</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>10<20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>20<20</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th id="sub">&lt;=</th>
                        <th id="sub">MENOR OU IGUAL A</th>
                    </tr>

                    <tr>
                        <th>stuação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>20<=10</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>10<=20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>20<=20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th id="sub">==</th>
                        <th id="sub">IGUAL A</th>
                    </tr>

                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>20==10</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>10==20</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>20==20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th id="sub">!=</th>
                        <th id="sub">DIFERENTE DE</th>
                    </tr>

                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>20!=10</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>10!=20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>20!=20</th>
                        <th>falso</th>
                    </tr>
                </table>
                <br>
                <p class="texto">
                    Além desses também há outros. Os mais comuns além desses é o E e o OU. Que servem para comparar duas
                    ou mais sentenças no mesmo if.

                    O E (&&) exige que todas as sentenças sejam verdadeiras para considerar o IF verdadeiro.
                    && E
                </p>
                <table id="operadores">
                    <tr id="sub">
                        <th>&&</th>
                        <th>'E'</th>
                    </tr>

                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>

                    <tr>
                        <th>10<20 && 20>10</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>10<20 && 10>20</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>10>20 && 20>10</th>
                        <th>falso</th>
                    </tr>

                    <tr>
                        <th>10>20 && 20<10</th>
                        <th>falso</th>
                    </tr>
                </table>
                <br>
                <p class="texto">
                    O OU (|| - duas barras verticais) exige que apenas uma das sentenças seja verdadeira para considerar
                    o IF verdadeiro.
                    || OU
                </p>

                <table id="operadores">
                    <tr id="sub">
                        <th>||</th>
                        <th>'OU'</th>
                    </tr>


                    <tr>
                        <th>situação</th>
                        <th>resultado</th>
                    </tr>
                    <th>10<20 || 20>10</th>
                    <th>verdadeiro</th>
                    <tr>
                        <th>10<20 || 10>20</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>10>20 || 20>10</th>
                        <th>verdadeiro</th>
                    </tr>

                    <tr>
                        <th>10>20 || 20<10</th>
                        <th>falso</th>
                    </tr>

                </table>
            </div>
        </div>
    </div>


    <p id="estrutura"><br><br></p>
    <div class="panel panel-primary">
        <div class="panel-heading"><h4>Estrutura seletiva - if e else</h4></div>
        <div class="panel-body">
            <p class="texto">
                Para fazer um bom programa, ele deve ser capaz de definir caminhos diferentes de acordo com decisões que
                o próprio programa toma. Para isso, precisamos de uma estrutura seletiva.

                Usando IF

                Para usar a estrutura 'if', e preciso define entrer parênteses oque deve ser comparado.

                Se oque está dentro dos parênteses for verdade, então a linha seguinte do 'if' será executada.

            </p>
            <pre><code>
...
	x = 10;
	y = 5;

	if(x &gt y)
		printf("Verdade");
...</code></pre>

            <p class="texto">
                E mais de uma linha seja executada, basta definir o bloco que será executado usando as chaves '{}' após
                o comando 'if'.
            </p>
            <pre><code>
...
	x = 10;
	y = 5;

	if(x &gt y){
		y = y + 5;
		x = y - 2;
		printf("X: %d\nY: %d", x, y);
	}
...</code></pre>
            <h4>O comando Else</h4>
            <p class="texto">
                Com a estrutura 'else' em conjunto com o 'if', e possível executar um bloco de código ou outro, por
                exemplo, o 'if' código anterior verificava se o 'x' era maior que o 'y', se isso fosse verdade ele
                executava o que esta dentro das chaves do 'if', e qualquer trecho de código após o final do 'if' também
                seria executado. Para resolver isso, usamos o 'else', veja a seguir como ficaria um programa que diria
                se um número e maior que o outro ou não, fazendo apenas uma comparação usando a estrura 'if'.
            </p>

            <pre><code>
...
	x = 10;
	y = 5;

	if(x &gt y){
		y = y + 5;
		x = y - 2;
		printf("X: %d\nY: %d", x, y);
	}
...</code></pre>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading"><h4>Questões:</h4></div>
        <div class="panel-body">
            <table id="questao">
        </div>

        <form class="form-horizontal" role="form" id='login' method="post" action="ResultadoQuestoes.php">
            <?php
            $res = mysql_query("select * from questoes where id_nivel=3 ORDER BY RAND()") or die(mysql_error());
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
    <a href="Variaveis.php">
        <button type="button" class="btn btn-success" id="botaoPrevious"  ">&#8592;Variáveis</button>
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
