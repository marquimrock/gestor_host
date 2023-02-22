function addIten(){
  document.getElementById('divisor').insertAdjacentHTML('beforeend', 
    '<div class="form-group">'+
    '<div class="col-md-1 mb-3">'+
    '<label for="item">Item</label>'+
    '<input type="text" class="form-control" id="item"></div>'+
    '<div class="col-md-5 mb-3"><label for="descricao">Descrição</label>'+
    '<input type="text" class="form-control"  name="descricao" id="descricao" placeholder="descricao"></div>'+
    '<div class="col-md-1 mb-3">'+
    '<label for="quantidade">Valor</label><input type="text" class="form-control" id="quantidade" placeholder="quantidade"></div>'+
    '<div class="col-md-1 mb-3">'+
    '<label for="quantidade_2">Quantidade</label><input type="text" class="form-control" id="quantidade_2" placeholder="quantidade_2"></div>'+
    '<div class="col-md-2 mb-3">'+
    '<label for="valor_item">Tot. Item</label>'+
    '<input type="text" class="form-control" id="valor_item" placeholder="valor_item" onblur="teste()"></div>'+
    '<div class="col-md-2 mb-3">'+
    '<button type="button" class="btn btn-primary btn-sm"> - </button>'+
    '</div>'+
    '</div>');

}
function k(i) {
    var v = i.value.replace(/\D/g,'');
    v = (v/100).toFixed(2) + '';
    v = v.replace(".", ",");
    v = v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    i.value = v;
}

function calcPrecoVenda(){
  
  
  }


function calcMargem(i){
//alert(i.value);
valor30 = i.value.replace(/\D/g,'');
valor30 = Math.round(valor30).toFixed(2);
document.getElementById('margem').value = valor30*2;
  /*
  var n1 = i.value;
  
  var v = n1.replace(/\D/g,'');
    v = (v/100).toFixed(2) + '';
    v = v.replace(".", ",");
    v = v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    document.getElementById('margem').value = parseFloat(v) *  parseFloat(2);
    /*
    i.value = v;
  alert(typeof(v));
  alert(v.value);
  */
  /*var n1 = parseFloat( document.getElementById('preco_compra').value);
  var n2 = parseFloat( document.getElementById('preco_venda').value);

          if(n1 === ''){
            parseFloat(n1 = 1)
          } 
          if (n2 === ''){
            parseFloat(n2 = 1)
          }
parseFloat( document.getElementById('margem').value = (n2-n1)*10);

*/}


function tel(){
  //let fone = document.getElementById('telefone').value;
  //alert(fone);
}


function validaCnpj(v){
  
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    document.getElementById("cnpj").value = v;
    return v
    
}
function validaTel(v){  
   v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    document.getElementById("telefone").value = v;
    return v    
}
