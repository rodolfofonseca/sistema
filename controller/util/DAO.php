<?php
require_once 'Connection.php';
require_once 'LogDoSistema.php';
class DAO
{
    private $logDoSistema = NULL;
    function __construct()
    {
        $this->logDoSistema = new LogDoSistema();
    }
    /**
     * Função responsável por incluir novos registros ao banco de dados.
     * @param $tabela, nome da tabela que deseja realizar a inserção.
     * @param $identificador, nó que deseja realizar a inserção.
     * @param $dados array com as informações, juntamente com o nome dados campos
     * @return retornar true ou false de acordo com o resultado da inserção.
     */
    public function Salvar($tabela, $identificador, $dados)
    {
        try {
            $conexao = new Connection();
            $dataBase = $conexao->Conectar();
            $dataBase->getReference($tabela.'/'.$identificador)->set($dados);
            return true;
        } catch (Exception $ex) {
            $this->logDoSistema->EscreverArquivo('logDoSistema.txt', $ex->getMessage());
            return false;
        }
    }
    public function Alterar($tabela, $campos, $dados, $identificador)
    {
        try {
        } catch (Exception $ex) {
            $this->logDoSistema->EscreverArquivo('logDoSistema.txt', $ex->getMessage());
            
            return false;
        }
    }
    public function Pesquisar($comando){
        try{
        }catch(Exception $ex){
            $this->logDoSistema->EscreverArquivo('logDoSistema.txt', $ex->getMessage());
            
        }
    }
}
