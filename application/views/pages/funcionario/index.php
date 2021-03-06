<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2>Fazenda Com Mural</h2></center>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-secondary" href="/index.php/fazenda/index" role="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Voltar</a> 
                
                <br/>
                <br/>
                <div class="card-title">
                   <h5><i class="fas fa-list-ol"></i>&nbsp;&nbsp;Lista de Funcionários do Mês</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="coluna-centro coluna-6">#</th>
                                <th scope="col" class="coluna-centro">Nome do Funcionário</th>
                                <th scope="col" class="coluna-centro">Nome da Fazenda</th>
                                <th scope="col" class="coluna-centro coluna-12">Data Criação</th>
                                <th scope="col" class="coluna-centro coluna-18">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if (empty($dados)) {
                                ?>
                                <tr>
                                    <td class="coluna-centro" colspan="5"><div class="alert alert-danger">Nenhum registro encontrado.</div></td>
                                </tr>
                                <?php
                            }
                            foreach($dados as $indice => $linha) {
                            ?>
                            <tr>
                                <?php
                                    $link_visualizar = '/index.php/funcionario/visualizar/'.$linha->id;
                                    $link_editar = '/index.php/funcionario/edit/'.$linha->id;
                                    $link_excluir = '/index.php/funcionario/delete/'.$linha->id;
                                ?>
                                <td class="coluna-centro"><?= $indice+1 ?></td>
                                <td>
                                    <a href=""><?= $linha->nome ?></a>
                                </td>
                                <td class="coluna-centro">Fazenda 3 Irmãos</td>
                                <td class="coluna-centro"><?= $linha->dataRegistro ?></td>
                                <td class="coluna-centro ">
                                    <a class="btn btn-success btn-sm" href="<?= $link_visualizar ?>" role="button"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm" href="<?= $link_editar ?>" role="button"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="<?= $link_excluir ?>" role="button"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php
                            }
                        ?>
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>