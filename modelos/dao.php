<?php
/**
 * Classe responsável por realizar a conexão com o banco de dados, de forma que usa-se esta função apenas uma vez durante todo o processo de desenvolvimento
 * @return Conexão com banco de dados
 */
function conectar_banco_dados(){
    return Banco::conectar();
}
/**
 * Função responsável por desconectar da base de dados.
 */
function desconectar_banco_dados(){
    Banco::desconectar();
}
function cadasatrar($dados, $comando){
    try{
        $conexao = conectar_banco_dados();
        $executa = $conexao->prepare($comando);
        $executa->execute($dados);
        
    }catch(Exception $ex){
        ?>
        <script>
                Swal.fire({icon:'error', title:'Atenção', text:'Falha ao realizar a operação de cadastro', footer:'<?php echo $ex->getMessage(); ?>'});
                </script>
            <?php
    }
}
?>