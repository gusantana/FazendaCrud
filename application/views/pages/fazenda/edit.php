<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2>Fazenda Com Mural</h2></center>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-secondary" href="/index.php/fazenda/index" role="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Voltar</a>
                <br/><br/>
                <div class="card-title">
                   <h5>Editar Fazenda</h5>
                </div>
                <br/>
                <form action="/index.php/fazenda/edit" method="post">

                    <?php if (!empty($mensagem)) {
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
                    <input type="hidden" value="<?php echo $dados->id; ?>" name="id">
                    <div class="form-group">
                        <label for="nome">Nome da Fazenda</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $dados->nome ?>">
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</a>
                </form>
                
                
            </div>
        </div>
    </div>
</div>