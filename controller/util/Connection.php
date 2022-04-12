<?php
require __DIR__.'/controller/bancoDeDados/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class Connection{
    public function __construct()
    {
    }
    /**
     * Função responsável por realizar a conexão com a base de dados.
     */
    public function Conectar(){
        $factory = (new Factory())->withServiceAccount(__DIR__.'/controller/bancoDeDados/firebaseconfig.json')->withDatabaseUri('https://portaldenoticias-52a35-default-rtdb.firebaseio.com/');
        $database = $factory->createDatabase();
        return $database;
    }
}
?>