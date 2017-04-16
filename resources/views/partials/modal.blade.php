<!-- Modal Structure -->
<div id="modalProd" class="modal">
  <div class="modal-content">
    <h4 class="action-lable">Añadir producto</h4>
    <div class="row">
      <div class="col s6 input-field">
        <input id="txt-nombre" type="text" class="validate">
        <label for="txt-nombre">Nombre</label>
      </div>
      <div class="col s6 input-field">
        <input id="txt-codigo" type="text" class="validate">
        <label for="txt-codigo">Código</label>
      </div>
    </div>
    <div class="row">
      <div class="col s12 input-field">
        <input id="txt-price" type="number" class="validate" min="0" step="50">
        <label for="txt-price">Precio</label>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Guardar</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
  </div>
</div>