<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
$factory = (new Factory())->withServiceAccount(__DIR__.'/firebaseconfig.json')->withDatabaseUri('https://portaldenoticias-52a35-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();
/**
 * Busco todos os contatos que possue na databse
 */
//$contatos = $database->getReference('contatos')->getSnapshot();
//print_r($contatos->getValue());

$buscaContato = $database->getReference('contatos/1')->getSnapshot()->getValue();
echo $buscaContato['nome'];
echo $buscaContato['email'];

$contatos = $database->getReference('contatos')->getSnapshot();
var_dump($contatos->getValue());
foreach($contatos->getValue() as $contato){
    $nome = substr($contato['nome'], 0, 3);
    if($nome == 'Rod'){
        echo $contato['id'].'<br/>';
    echo $contato['nome'].'<br/>';
    echo $contato['email'].'<br/>';
    }
}
?>