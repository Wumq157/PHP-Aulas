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



?>
