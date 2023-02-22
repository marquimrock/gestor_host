<?php
$con = conecta();
$res = mysqli_query($con, 'SELECT * FROM clientes');

?>
<style>
    #bl-itens{
        height: 218px;
        overflow-x: hidden;
    overflow-y: scroll;
    }
</style>
<div class="panel-heading"> 
<h1></h1>                   
</div>
    <div class="well well-sm">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center" style="font-size: 20px;">Novo Pedido</div>         
        </div> 
     <div class="form-row">
        <form class="form-horizontal" action="gravaPedido.php" method="post" novalidate>
        <fieldset>
            <div class="col-md-12 col-md">
                <div class="form-group" id="form-test">
                    <div class="col-md-1 mb-3">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" disabled placeholder="Aut">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="num_pedido">N.Pedido</label>
                        <input type="text" class="form-control" id="num_pedido" name="num_pedido" maxlength="6">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="num_pedido">Cliente</label>
                        <select name="clientes" for="clientes" class="form-control" style="text-transform: uppercase">
                            <option></option>
                            <?php  while ($ped = mysqli_fetch_assoc($res)):  ?>
                            <option value="<?php  echo $ped['id'];  ?>"> <?php  echo $ped['razao_social']; ?> </option>
                    <?php  endwhile;  ?>
                </select>
                    </div>
                    <br>
                    <div class="col-md-4 text-right">
                    <button type="button" class="btn btn-primary btn-lg" onclick="addIten()"> + </button>
                    </div>
                </div>
                
                <div class="panel panel-info">
                    <div class="panel-heading"  align="center" style="font-size: 20px;">Itens</div>         
                </div>   <div id="bl-itens">
                
                <div id="divisor">                    
                </div>
            
      
                
                <!--<div class="form-group">
                    <div class="col-md-1 mb-3">
                        <label for="item">Item</label>
                        <input type="text" class="form-control" id="item">
                    </div>    
                    <div class="col-md-5 mb-3">
                      <label for="descricao">Descrição</label>
                      <input type="text" class="form-control"  name="descricao" id="descricao" placeholder="descricao">
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="quantidade">Valor</label>
                      <input type="text" class="form-control"  id="quantidade" placeholder="quantidade"> 
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="quantidade_2">Quantidade</label>
                      <input type="text" class="form-control" id="quantidade_2" placeholder="quantidade_2"> 
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="valor_item">Tot. Item</label>                      
                      <input type="text" class="form-control" id="valor_item" placeholder="valor_item" onblur="teste()">
                </div> -->

                <!-- <div class="form-group">                    
                    </div>    
                    <div class="col-md-3 mb-3">
                       <label >Total Compra</label>
                      <input type="text" class="form-control"  id="resultado"> </input> 
                      
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="fornecedor">Fornecedor</label>
                      <input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="fornecedor"> 
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="vl_un_venda_1">Valor Un Venda 1</label>
                      <input type="text" class="form-control" id="vl_un_venda_1" placeholder="vl_un_venda_1"> 
                    </div>
                </div> -->
            
               <!-- <div class="form-group">
                    <div class="col-md-3 mb-3">
                      <label for="vl_tt_venda_1">Valor Total Venda 1</label>
                      <input type="text" class="form-control" id="vl_tt_venda_1" placeholder="vl_tt_venda_1"> 
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="vl_un_venda_2">Valor Un Venda 2</label>
                      <input type="text" class="form-control" id="vl_un_venda_2" placeholder="vl_un_venda_2"> 
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="vl_tt_venda_2">Valor Total Venda 2</label>
                      <input type="text" class="form-control" id="vl_tt_venda_2" placeholder="vl_tt_venda_2"> 
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="vl_tt_venda">Valor Un Venda</label>
                      <input type="text" class="form-control" id="vl_tt_venda" placeholder="vl_tt_venda"> 
                    </div>
                </div>-->

               <!-- <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="vl_tt_venda">Valor Un Venda</label>
                        <input type="text" class="form-control" id="vl_tt_venda" placeholder="vl_tt_venda"> 
                    </div>
                        <div class="col-md-4 mb-3">
                        <label for="lucro">Lucro R$</label>
                        <input id="lucro" name="lucro" class="form-control" type="text" placeholder="lucro"  maxlength="5" required>
                    </div>
                        <div class="col-md-4 mb-3">
                        <label for="lucro_perc">Lucro %</label>
                        <input id="lucro_perc" name="lucro_perc" class="form-control" type="text" placeholder="lucro_perc"  maxlength="5" required>
                        </div>
                </div>-->
        </div>
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Gravar</button>
                    </div>
                </div>
         </div>                  
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
