<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2>Fazenda Com Mural</h2></center>
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="/index.php/fazenda/add" role="button"><i class="fa fa-plus"></i>&nbsp;Adicionar Fazenda</a>
                <!-- <a class="btn btn-secondary" href="/index.php/funcionario/index" role="button"><i class="fa fa-user"></i>&nbsp;&nbsp;Ver Funcionários</a> -->
                <br/>
                <br/>
                <div class="card-title">
                   <h5><i class="fas fa-list-ol"></i>&nbsp;&nbsp;Lista de Fazendas</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="coluna-centro coluna-6">#</th>
                                <th scope="col" class="coluna-centro">Nome da fazenda</th>
                                <th scope="col" class="coluna-centro coluna-18">Data Criação</th>
                                <th scope="col" class="coluna-centro coluna-16">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if (empty($dados)) {
                                ?>
                                <tr>
                                    <td class="coluna-centro" colspan="4"><div class="alert alert-danger">Nenhum registro encontrado.</div></td>
                                </tr>
                                <?php
                            }
                            foreach($dados as $indice => $linha) {
                                ?>
                                <tr>
                                    <td class="coluna-centro"><?php echo (int)$indice + 1 ?></td>
                                    <td class=""><?php echo $linha->nome ?>
                                    <td class="coluna-centro"><?php echo $linha->dataRegistro ?>
                                    <td class="coluna-centro">
                                        <?php 
                                            $link_listarFuncionarios = "/index.php/fazenda/listarFuncionario/".$linha->id;
                                            $link_edicao = "/index.php/fazenda/edit/".$linha->id;
                                            $link_remocao = "/index.php/fazenda/delete/".$linha->id;
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="<?php echo $link_listarFuncionarios ?>" role="button"><i class="fa fa-users"></i></a>
                                        <a class="btn btn-warning btn-sm" href="<?php echo $link_edicao ?>" role="button"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="<?php echo $link_remocao ?>" role="button"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                        ?>
                            <!-- <tr>
                                <td class="coluna-centro">1</td>
                                <td>Fazenda 3 Irmãos</td>
                                <td class="coluna-centro">02/04/2019</td>
                                <td class="coluna-centro">
                                    <a class="btn btn-warning btn-sm" href="/index.php/fazenda/edit/1" role="button"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="/index.php/fazenda/delete/1" role="button"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr> -->
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>