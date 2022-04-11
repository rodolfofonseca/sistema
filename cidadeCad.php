<?php
include './includes/head.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST)) {
        $nomeCidade = $_POST['nomeCidade'];
        $estado = $_POST['estado'];
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into cidade(nomecidade, uf) values(? ,?);";
        $q = $pdo->prepare($sql);
        $q->execute(array(strtoupper($nomeCidade), $estado));
        $base = "insert into cidade(nomecidade, uf) values('".$nomeCidade."' ,'".$estado."');";
        $condicao = "cadastrou a cidade ".$nomeCidade.".";
        include './logCompleto.php';
        Banco::desconectar();
        ?>
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
             role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Sucesso - </strong> Cidade Cadastrada com sucesso!!!
        </div>
        <?php
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Cidades</h4>
                    <form method="POST" action="cidadeCad.php">
                        <div class="form-body">
                            <label>nome Cidade</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control custom-radius" placeholder="nome cidade" name="nomeCidade" required size="50">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="estado" id="estado" class="form-control bg-white custom-radius custom-shadow border-0">
                                            <option value="AC">Acre / AC</option>
                                            <option value="AL">Alagoas / AL</option>
                                            <option value="AP">Amapá / AP</option>
                                            <option value="AM">Amazonas / AM</option>
                                            <option value="BA">Bahia / BA</option>
                                            <option value="CE">Ceará / CE</option>
                                            <option value="ES">Espírito Santo / ES</option>
                                            <option value="GO">Goiás / GO</option>
                                            <option value="MA">Maranhão / MA</option>
                                            <option value="MT">Mato Grosso / MT</option>
                                            <option value="MS">Mato Grosso do Sul / MS</option>
                                            <option value="MG">Minas Gerais / MG</option>
                                            <option value="PA">Pará / PA</option>
                                            <option value="PB">Paraíba / PB</option>
                                            <option value="PR">Paraná / PR</option>
                                            <option value="PE">Pernambuco / PE</option>
                                            <option value="PI">Piauí / PI</option>
                                            <option value="RJ">Rio de Janeiro / RJ</option>
                                            <option value="RN">Rio Grande do Norte / RN</option>
                                            <option value="RS">Rio Grande do Sul / RS</option>
                                            <option value="RO">Rondônia / RO</option>
                                            <option value="RR">Roraima / RR</option>
                                            <option value="SC">Santa Catarina / RC</option>
                                            <option value="SP">São Paulo / SP</option>
                                            <option value="SE">Sergipe / SE</option>
                                            <option value="TO">Tocantins / TO</option>
                                            <option value="DF">Distrito Federal / DF</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info">CADASTRAR</button>
                                    <button type="reset" class="btn btn-dark">LIMPAR CAMPOS</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include './includes/footer.php';
?>