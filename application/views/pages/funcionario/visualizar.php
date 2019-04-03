<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2><?php echo $fazenda->nome; ?></h2></center>
            </div>
            <div class="card-body">
                <a href="/index.php/fazenda/listarFuncionario/<?php echo $fazenda->id ?>" role="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Voltar</a>
                    <p class="h1 centered"><?php echo $dados->nome; ?></p>
                <?php
                    $link_foto = "/upload/".$dados->foto;
                ?>
                <img class="imagem imagem-com-sombra"  src="<?php echo $link_foto; ?>">
                <h1 class="centered "><?php echo $dados->mensagem1; ?></h1>
                <h2 class="centered"><?php echo $dados->mensagem2; ?></h2>
            </div>
        </div>
    </div>
</div>