<div class="page-header">
    <h3></h3>
</div>
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="well well-sm">
            <form class="form-horizontal" action="gravaPedido.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">TESTE</legend>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cnpj">Descrição</label>
                        <div class="col-md-10">
                            <input id="descricao" name="descricao" type="text" placeholder="descricao" class="form-control" maxlength="18" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="quantidade">Quantidade</label>
                        <div class="col-md-2">
                            <input id="quantidade" name="quantidade" type="text" placeholder="quantidade" class="form-control" required>
                        </div>
                        <label class="col-md-2 control-label" for="preco_compra">Preço de Compra</label>
                        <div class="col-md-2">
                            <input id="preco_compra" name="preco_compra" type="text" placeholder="preco_compra" class="form-control" required>
                        </div>
                        <label class="col-md-2 control-label" for="preco_compra">Preço de Compra</label>
                        <div class="col-md-2">
                            <input id="preco_compra" name="preco_compra" type="text" placeholder="preco_compra" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="preco_venda">Preço de Venda</label>
                        <div class="col-md-2">
                            <input id="preco_venda" name="preco_venda" type="text" placeholder="preco_venda" class="form-control" required>
                        </div>
                        <label class="col-md-2 control-label" for="margem">Margem (%)</label>
                        <div class="col-md-2">
                            <input id="margem" name="margem" type="text" placeholder="margem" class="form-control" required>
                        </div>  
                        <label class="col-md-2 control-label" for="qnt_pdv">Total</label>
                        <div class="col-md-2">
                            <input id="total" name="total" type="text" placeholder="total" class="form-control" required>
                        </div>                      
                    </div>  
                    
                        
                        <div class="col-md-13 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Gravar</button>
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
                </fieldset>
            </form>
        </div>
    </div>
</div>