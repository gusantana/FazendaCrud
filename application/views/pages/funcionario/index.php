<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <center><h2>Fazenda Com Mural</h2></center>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-secondary" href="/index.php/fazenda/index" role="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Voltar</a> 
                <a class="btn btn-primary" href="/index.php/funcionario/add" role="button"><i class="fa fa-plus"></i>&nbsp;Adicionar</a>

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
                            <tr>
                                <td class="coluna-centro">1</td>
                                <td><a href="/index.php/funcionario/visualizar/1">Pedro</a></td>
                                <td class="coluna-centro">Fazenda 3 Irmãos</td>
                                <td class="coluna-centro">02/04/2019</td>
                                <td class="coluna-centro ">
                                    <a class="btn btn-success btn-sm" href="/index.php/funcionario/visualizar/1" role="button"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm" href="/index.php/funcionario/edit/1" role="button"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="/index.php/funcionario/delete/1" role="button"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>