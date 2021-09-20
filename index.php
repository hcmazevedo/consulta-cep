<?php

//require "vendor/autoload.php";
if($_GET['post'] == "ok"){
require "Search.php";

$busca = new Search();

$resultado = $busca->getAdressFromZipcode($_POST['cep']);

echo "<pre>";
print_r($resultado);
//echo 'Você mora na: '. $resultado['logradouro'].','. $resultado['bairro'];
}
echo '
    <form action="index.php?post=ok" method="POST" class="">
    Informe seu CEP: <input type="text" name="cep"><input type="submit" value="Buscar">
    </form>
';