<?php

$nome = "Wumq";
$sobrenome = "Winchester";
$ncompleto = $nome . " " . $sobrenome;

echo "$nome <br>";
var_dump($nome);

echo "<br> <br>";

echo "$ncompleto <br>";
var_dump($ncompleto);

echo "<br>===Fim dessa aula e inicio da proxima===<br>";
?>


<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

echo "<br>===Fim dessa aula e inicio da proxima===<br>";
?>

<?php
$minhaIdade = 17;

$idade1 = 12;
$idade2 = 18;
$idade3 = 30;
$idade4 = 50;

echo "Sua idade é $minhaIdade.<br>";


if ($minhaIdade <= $idade1) {
echo "Você é muito novo ainda.";
}
else if ($minhaIdade < $idade2) {
    echo "Você não tem mais de 18 anos.";
}
else if ($minhaIdade <= $idade3) {
    echo "Você tem, ou tem mais de 18 anos.";
}
else if ($minhaIdade < $idade4)
echo "Você ainda não está em uma idade avançada, mas é maior de idade.";
else if ($minhaIdade >= $idade4) {
    echo "Você já está em uma idade avançada.";
}


echo "<br>===Fim dessa aula e inicio da proxima===<br>";
?>

<?php
$diadasemana = date('w');

switch ($diadasemana) {
        case '0':
        echo "Hoje é Domingo.";
        break;
    
        case '1':
        echo "Hoje é Segunda-Feira.";
        break;
    
        case '2':
        echo "Hoje é Terça-Feira.";
        break;

        case '3':
        echo "Hoje é Quarta-Feira.";
        break;

        case '4':
        echo "Hoje é Quinta-Feira.";
        break;

        case '5':
        echo "Hoje é Sexta-Feira.";
        break;

        case '6':
        echo "Hoje é Sabado.";
        break;

        default:
        echo "Data Invalida";
        break;
}


echo "<br>===Fim dessa aula e inicio da proxima===<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter os dados do formulário
        $nome = $_POST["nome"];
        $dataNascimento = $_POST["data_nascimento"];

        // Processar os dados
        echo "Nome: " . $nome . "<br>";
        echo "Data de Nascimento: " . $dataNascimento . "<br>";

        // Separar a data de nascimento em dia, mês e ano
        $dataParts = explode("-", $dataNascimento);
        $dia = $dataParts[2];
        $mes = $dataParts[1];
        $ano = $dataParts[0];

        // Exemplo de uso do loop foreach
        echo "Dia: " . $dia . "<br>";
        echo "Mês: " . $mes . "<br>";
        echo "Ano: " . $ano . "<br>";
    }
    ?>
    
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
echo "<br>===Fim dessa aula e inicio da proxima===<br>";












echo "<br>===Fim dessa aula e inicio da proxima===<br>";
?>
