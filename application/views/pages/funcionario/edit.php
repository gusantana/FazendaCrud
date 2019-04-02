<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2>Fazenda Com Mural</h2></center>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-secondary" href="/index.php/fazenda/index" role="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Voltar para Lista de Fazendas</a>
                <a class="btn btn-outline-primary" href="/index.php/funcionario/index" role="button"><i class="fa fa-user"></i>&nbsp;&nbsp;Lista de Funcionários</a>
                <br/><br/>
                <div class="card-title">
                   <h5>Adicionar Funcionário</h5>
                </div>
                <br/>
                <form id="form" action="/index.php/fazenda/edit" method="post">
                    <input type="hidden" name="id" value="<?php echo($id) ?>" >

                    <div class="form-group">
                        <label for="nome">Nome da Fazenda:</label>
                        <select name="id_fazenda" class="form-control">
                            <option value="1">Fazenda 1</option>
                            <option value="2">Fazenda 2</option>
                            <option value="3">Fazenda 3</option>
                            <option value="4">Fazenda 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome do Funcionário:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mensagem_1">Mensagem 1:</label>
                        <input type="text" id="mensagem_1" name="mensagem_1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mensagem_2">Mensagem 2:</label>
                        <input type="text" id="mensagem_2" name="mensagem_2" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success" href="#" role="button"><i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</button>
                    <button type="button" class="btn btn-secondary" ><i class="fa fa-eraser" onclick="limparFormulario();"></i>&nbsp;&nbsp;Limpar</a>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var limparFormulario = function () 
    {
        $("#form input").val("");
    };
</script>