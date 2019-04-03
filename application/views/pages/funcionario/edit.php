<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2><?php echo $fazenda->nome; ?></h2></center>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-secondary" href="/index.php/fazenda/listarFuncionario/<?=$fazenda->id?>" role="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Voltar</a>
                
                <br/><br/>
                <div class="card-title">
                   <h5>Editar Funcionário</h5>
                </div>
                <?php 
                    if (!empty($mensagem)) {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php
                                echo ($mensagem);
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                }?>
                
                <?php echo validation_errors(); ?>
               
                
                <?php
                    $action = "/index.php/funcionario/edit/";
                ?>
                <form id="form" action="<?php echo $action ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $dados->id ?>" name="id">
                    
                    <div class="form-group">
                        <label for="nome">Nome do Funcionário *:</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $dados->nome ?>">
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="foto">Foto *:</label>
                        <input type="file" id="foto" name="foto" class="form-control">
                    </div>
                    -->
                    <div class="form-group">
                        <label for="mensagem1">Mensagem 1:</label>
                        <input type="text" id="mensagem1" name="mensagem1" class="form-control" value="<?php echo $dados->mensagem1 ?>">
                    </div>
                    <div class="form-group">
                        <label for="mensagem2">Mensagem 2:</label>
                        <input type="text" id="mensagem2" name="mensagem2" class="form-control" value="<?php echo $dados->mensagem2 ?>">
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