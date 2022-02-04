<?php
include './includes/head.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST)) {
        $nome_conta = (string) $_POST['nome_conta'];
        $valor_conta = (float) $_POST['valor_conta'];
        $tipo_conta = (string) $_POST['tipo_conta'];
        $data_vencimento = (string) $_POST['data_vencimento'];
        $status_conta = (string) $_POST['status_conta'];
        $validacao = (bool) false;
        if ($nome_conta == "") {
            $validacao = false;
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Atenção',
                    text: 'O nome da conta está inválido!',
                    footer: 'Talvez seja necessário refazer a operação'
                });
            </script>
        <?php
        }
        if ($valor_conta == 0) {
            $validacao = false;
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Atenção',
                    text: 'O valor da conta está inválido!',
                    footer: 'Talvez seja necessário refazer a operação'
                });
            </script>
        <?php
        }
        if($data_vencimento == ''){
            $validacao = false;
            ?>
            <script>
                Swal.fire({icon:'error', title:'Atenção', text:'A data de vencimento não pode ser vazia', footer:'Talvez seja necessário refazer a operação!'});
                </script>
            <?php
        }
        if($validacao == true){
            $pdo
        }
        /* $pdo = Banco::conectar();
          $comando = "insert into contas(nomeconta, valor, tipo, datavencimento, status) values(?, ?, ?, ?, ?);";
          $executa = $pdo->prepare($comando);
          $executa->execute(array(strtoupper($nome_conta), $valor_conta, $tipo_conta, $data_vencimento, $status_conta));
          include './logCompleto.php';
          Banco::desconectar(); */
    }
}
?>
<div class="row">
    <div class="medium-12 columns">
        <h2 class="text-center">Cadastro de Contas a Pagar e Receber</h2>
    </div>
</div>
<form method="POST" action="contas_cad.php">
    <div class="row">
        <div class="medium-6 columns">
            <label for="nome_conta">
                Nome Conta:
                <input type="text" name="nome_conta" id="nome_conta" placeholder="NOME DA CONTA" size="50" class="maiusculo">
            </label>
        </div>
        <div class="medium-6 columns">
            <label for="valor_conta">
                valor da conta
                <div class="input-group">
                    <span class="input-group-label">$</span>
                    <input class="input-group-field" type="number" name="valor_conta" id="valor_conta">
                </div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="medium-4 columns">
            <label for="tipo_conta">
                Tipo de Conta
                <select id="tipo_conta" name="tipo_conta">
                    <option value="PAGAR">PAGAR</option>
                    <option value="RECEBER">RECEBER</option>
                </select>
            </label>
        </div>
        <div class="medium-4 columns">
            <label for="data_vencimento">
                Data de Vencimento
                <input type="date" id="data_vencimento" name="data_vencimento" />
            </label>
        </div>
        <div class="medium-4 columns">
            <label for="status_conta">
                Status
                <select id="status_conta" name="status_conta">
                    <option value="AGUARDANDO">AGUARDANDO</option>
                    <option value="VENCIDA">VENCIDA</option>
                    <option value="CONCLUIDA">CONCLUIDA</option>
                </select>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="medium-6 columns">
            <input type="submit" name="Cadastrar" id="Cadastrar" value="Cadastrar" class="button primary expanded">
        </div>
        <div class="medium-6 columns">
            <input type="reset" name="Limpar" id="Limpar" value="Limpar" class="button alert expanded">
        </div>
    </div>
</form>
<?php
include './includes/footer.php';
?>