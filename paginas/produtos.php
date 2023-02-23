<div class="panel-heading"> 
    <h1></h1>                   
</div>

<div class="container">
     <div class="well well-sm">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center" style="font-size: 20px;">Novo Produto</div>         
        </div> 
   
        <div class="form-row">
            <form class="form-horizontal" action="gravaProdutos.php" method="post" novalidate>
            <fieldset>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-1 mb-3">
                    </div>
                        <div class="col-md-1 mb-3">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" id="id" name="id" disabled>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control"  id="codigo" name="codigo" placeholder="codigo" autofocus onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="13"> 
                        </div>   
                        <div class="col-md-5 mb-3">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control"  name="descricao" id="descricao" placeholder="descricao" style="text-transform: uppercase">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 mb-3">
                    </div>
                        <div class="col-md-3 mb-3">
                            <label for="preco_compra">Preço Compra</label>                          
                            <input type="text" class="form-control" id="preco_compra" name="preco_compra" placeholder="preco_compra" onblur="calcMargem(this)" onkeyup="k(this);" >
                        </div>    
                        <div class="col-md-3 mb-3">
                            <label for="margem">Margem (%)</label>
                            <input type="text" class="form-control"  id="margem" name="margem" onblur="calcPrecoVenda()" onkeyup="k(this);">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="preco_venda">Preço Venda</label>
                            <input type="text" class="form-control" id="preco_venda" name="preco_venda" placeholder="preco_venda" onblur="calcMargem()" onkeyup="k(this);"> 
                        </div>
                    </div>
                    <div class="form-group">

                    <div class="col-md-1 mb-3">
                    </div>
                        <div class="col-md-9 mb-3">
                            <label for="fornecedor">Fornecedor</label>
                            <input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="fornecedor" style="text-transform: uppercase"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Gravar</button>
                        </div>
                    </div>                 
            </div>
            </fieldset>
        </div>

                        <?php
                        $sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : '';
                        if ($sucesso):
                            ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Sucesso!</strong>
                                Pedido gravado com sucesso.
                            </div>
                        <?php endif; ?>
                        <?php
                        $erro = isset($_GET['erro']) ? $_GET['erro'] : '';
                        if ($erro):
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erro!</strong>
                                Erro nos dados, verifique o formulario.
                            </div>
                        <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    </div>
