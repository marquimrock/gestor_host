     <div class="panel-heading"> 
    <h1></h1>                   
</div>

<div class="container">
    <div class="well well-sm"> 
        <div class="panel panel-primary">
            <div class="panel-heading" align="center" style="font-size: 20px;">Novo Cliente</div>         
        </div> 
        <div class="form-row">
        <form class="form-horizontal" action="gravaClientes.php" method="post" novalidate>
        <fieldset>            
            <div class="col-sm-12 col-sm">
                <div class="form-group" id="upper">
                    <div class="col-sm-1 mb-3">
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label for="cod">CÓD</label>
                        <input type="text" class="form-control" id="cod" placeholder="Aut.." disabled >
                    </div>    
                    <div class="col-sm-4 mb-3">
                      <label for="cnpj">CNPJ</label>
                      <input type="text" class="form-control"  name="cnpj" id="cnpj" placeholder="cnpj" onblur="validaCnpj(cnpj.value)" maxlength="14" autofocus  onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                    </div>
                    <div class="col-sm-4 mb-3">
                      <label for="ie">INS. ESTADUAL</label>
                      <input type="text" class="form-control"  id="ie" name="ie" placeholder="ie" maxlength="12" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-1 mb-3">
                    </div>
                    <div class="col-sm-5 mb-3">
                      <label for="razao_social">RAZÃO SOCIAL</label>
                      <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="razao_social" maxlength="60" style="text-transform: uppercase"> 
                    </div>
                    <div class="col-sm-5 mb-3">
                      <label for="fantasia">FANTASIA</label>                      
                      <input type="text" class="form-control" id="fantasia" name="fantasia" placeholder="fantasia" maxlength="40" style="text-transform: uppercase">
                    </div> 
                </div>
                 <div class="form-group"> 
                 <div class="col-sm-1 mb-3">
                    </div>  
                 <div class="col-sm-6 mb-3">
                       <label for="cidade">CIDADE</label>
                      <input type="text" class="form-control" name="cidade" id="cidade" maxlength="40" style="text-transform: uppercase">
                    </div>           
                    <div class="col-sm-4 mb-3">
                      <label for="telefone">TELEFONE</label>
                      <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="99-9999-9999" onblur="validaTel(telefone.value)" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-1 mb-3">
                    </div>
                    <div class="col-sm-10 mb-3">
                      <label for="email">E-MAIL</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="email" maxlength="60" style="text-transform: lowercase"> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-14 text-right">
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
                Cliente gravado com sucesso.
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
    
