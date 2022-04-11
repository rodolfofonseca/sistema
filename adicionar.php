<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
$mensagem = '';
if(isset($_POST['id'])){
    $factory = (new Factory())->withServiceAccount(__DIR__.'/firebaseconfig.json')->withDatabaseUri('https://portaldenoticias-52a35-default-rtdb.firebaseio.com/');
    $database = $factory->createDatabase();
    $novoContato = ['nome' => $_POST['nome'], 'email' => $_POST['email']];
    $database->getReference('contatos/'.$_POST['id'])->set($novoContato);
    $mensagem = 'contato adicionado com sucesso';
}
?>
<!DOCTYPE html>
<head>

</head>
<body>
    <form method="POST">
        <input type="text" name="id" id="id"/>
        <input type="text" name="nome" id="nome"/>
        <input type="text" name="email" id="email"/>
        <input type="submit" value="CADASTRAR"/>
    </form>
    <?php echo $mensagem; ?>
</body>
</html>