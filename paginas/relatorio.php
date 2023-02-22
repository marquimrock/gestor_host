<?php
$con = conecta();
$res = mysqli_query($con, 'SELECT * FROM pedido');
$total_venda = 0;
?>
<div class="page-header">
    <h3></h3>
</div>

<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Pedidos</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="Num Pedido" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Descrição" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Quantidade" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Preço Compra" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Preço Venda" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Margem" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php  while ($ped = mysqli_fetch_assoc($res)):  ?>

                    <tr>
                        <td><?php  echo $ped['id'];  ?></td>
                        <td><?php  echo $ped['descricao']; ?></td>
                        <td><?php  echo $ped['quantidade']; ?></td>
                        <td><?php  echo $ped['preco_compra']; ?></td>    
                        <td><?php  echo $ped['preco_un_venda_1']; ?></td> 
                        <td><?php  echo $ped['margem']; ?></td> 
                    </tr>

                <?php  
                $total_venda = $total_venda + $ped['preco_compra'];
            endwhile;  ?>
            </tbody>
        </table>
        <div class="panel-heading">            
            <div class="pull-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th><h3 class="panel-title" ><b>Totais</b></h3></th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th><?php echo $total_venda ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>