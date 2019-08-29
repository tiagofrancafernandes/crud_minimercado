<?php
$pagina = (isset($pagina))?$pagina:'';
$pageTitle = APP_NAME;
?>
<?php require_once '_includes/header.php' ?>

<?php require_once '_includes/menu.php' ?>


<div class="container_produtos">
  <span id="topIsHere" style="display:none;"></span>
  <div class="pdv_container">    
    <div class="row">      
      <div class="col c10">
      <div class="row keep_item_top">
        <div class="col c8">
          <input type="text" id="itemSearch" placeholder="Nome, código, descrição">
          <button class="btnSearch btn btn-sm btn-c" 
          onclick="jQuery('#itemSearch').val('')" id="limparItemSearch">Limpar Busca</button>
        </div>
        <div class="col c2 topBorder">
          <input id="qtdItemSearch" type="number" placeholder="QTD" value="1" name="qtd" min="1"
            list="qtdItemSearchValoresPadrao">
          <span class="validity"></span>
          <datalist id="qtdItemSearchValoresPadrao">
            <option value="1"></option>
            <option value="2"></option>
            <option value="3"></option>
            <option value="4"></option>
            <option value="5"></option>
            <option value="10"></option>
          </datalist>
          <div class="btnSearch btnSearch btn btn-sm btn-c" onclick="jQuery('#qtdItemSearch').val('')" id="limparQtdItemSearch">
            Limpar Quantidade</div>
        </div><div class="col c2 topBorder">
          <button id="itemSearchAdd" class="btnSearch btn btn-sm btn-b" type="button">Adicionar</button>
        </div>
      </div>
      <div class="row">
        <div class="col c8">
          <div class="row">
            <div class="col c3">
              <div class="row">
                <div class="col c11 produtoInputContainer">
                  <label style=><span>Operador:</span>
                    <input class="btn btn-sm btn-c" type="text" placeholder="Operador" disabled>
                  </label>
                  <label><span>Data:</span>
                    <input class="btn btn-sm btn-a produtoInputVal" type="text" placeholder="dd/mm/yyyy" disabled>
                  </label>
                  <label><span>Hora atual:</span>
                    <input class="btn btn-sm btn-b produtoInputVal" type="text" placeholder="hh:mm:ss" disabled>
                  </label>
                </div>
              </div>
            </div>
            <div class="col c8">
              <div class="row">
                <div class="col c8 papelTermico">
                  <table id="tabelaPapelTermico">
                    <thead>
                      <tr>
                        <th>-----------------------------------<br>
                        ------ MINIMERCADO ------<br>
                        -----------------------------------<br>
                        dd/mm/yyyy hh:mm:ss<br>
                        -----------------------------------<br>
                        ----- CUPOM NÃO FISCAL ----<br>                        
                        <span style="float: left;text-align: left;">
                          -------------------------------------------------<br>
                          ITEM   CÓDIGO   DESCRIÇÃO   VL_UN   QTD   SUBTOTAL<br>
                          -------------------------------------------------<br>
                        </span></th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>                  
                </div>
                <button class="btn btn-sm toTop ocultarDesktop fixed-box">Subir</button>
              </div>
            </div>
            <div class="col c12" style="background: red;">Algo</div>
          </div>
        </div>
        <div class="col c4 produtoInputContainer">
          <label><span>Código de barras:</span>
            <input class="btn btn-sm btn-c produtoInputVal" type="text" placeholder="Código de barras" />
          </label>
          <label><span>Código de Cadastro:</span>
            <input class="btn btn-sm btn-c produtoInputVal" type="text" placeholder="Código de Cadastro" />
          </label>
          <label><span>Quantidade:</span>
            <input class="btn btn-sm btn-c produtoInputVal" type="number" placeholder="Quantidade"/>
          </label>
          <label><span>Valor unitário:</span>
            <input class="btn btn-sm btn-c produtoInputVal" type="text" placeholder="Valor unitário" disabled />
          </label>
          <label><span>Subtotal:</span>
            <input class="btn btn-sm btn-c produtoInputVal" type="text" placeholder="Subtotal" disabled />
          </label>
        </div>
      </div>
      </div>
      <!-- INICIO Sidebar Direita -->
      <div class="col c2">
        <div class="row">
            <div class="col c12 containerQuickAction topBorder">
              <button class="btn btn-sm btn-a quickActionBtn" type="button">Finalizar venda</button>
              <button class="btn btn-sm btn-c quickActionBtn" type="button">Cancelar venda</button>
              <button class="btn btn-sm btn-b quickActionBtn" type="button">Tributos</button>
              <button class="btn btn-sm btn-b quickActionBtn" type="button">Estoque</button>
              <button class="btn btn-sm btn-b quickActionBtn" type="button">Cancelar Item</button>
            </div>
        </div>
      </div><!-- FIM Sidebar Direita -->
    </div>
    <div class="row">
      <a href="#item" class="col c2 produto pink">
        <h3>ITEM</h3>
      </a>
      <a href="#item" class="col c2 produto grey">
        <h3>Titulo</h3>
        <br>
        <a href="#link" class="btn btn-sm btn-b">Botão</a>
      </a>
      <a href="#item" class="col c2 produto green">
        <h3>Titulo</h3>
        <br>
        <a href="#link" class="btn btn-sm btn-c">Botão</a>
      </a>
    </div>
    <div class="row">
      <div class="col c4 pink">
        <h3>Titulo</h3>
        <br>
        <a href="#link" class="btn btn-sm btn-a">Botão</a>
      </div>
      <div class="col c4 grey">
        <h3>Titulo</h3>
        <br>
        <a href="#link" class="btn btn-sm btn-b">Botão</a>
      </div>
      <div class="col c4">
        <h3>Titulo</h3>
        <br>
        <a href="#link" class="btn btn-sm btn-c">Botão</a>
        <button class="btn btn-sm btn-b toTop ocultarDesktop">Subir</button>
      </div>
    </div>
  </div>

  <!-- <div class="row">
      <table class="table" style=" width: 100%;">
        <tbody>
          <tr>
            <th scope="col">Produto</th>
            <th scope="col">Preço*</th>
            <th scope="col">Imposto</th>
            <th scope="col">Ação</th>
          </tr> 
          <tr>
            <td><strong><a href="#">Produto</a></strong>
            </td>
            <td>R$ 20,00</td>
            <td>10%/Un</td>
            <td>
              <a href="#link" class="btn btn-sm btn-a f-rigth ifModal">Add</a>
              <a href="#link" class="btn btn-sm btn-a f-rigth">Editar</a>
              <a href="#link" class="btn btn-sm btn-b f-rigth">Abrir</a>
              <a href="#link" class="btn btn-sm btn-c f-rigth">Excluir</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div> -->
    <div>
    
    
      
      <div id="div1" style="height: 1000px; width 100px">
        Test
      </div>
      <br>
      <div id="div2" style="height: 1000px; width 100px">
        Test 2
      </div>
    
      <script type="text/javascript">

      </script>
    
     
    </div>
</div>

<?php require_once '_includes/footer.php' ?>