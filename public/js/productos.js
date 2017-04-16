$(function() {
    //Load Components
    $('.modal').modal();
    //Load Table
    $('#productos-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'productos/all',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'code', name: 'code' },
            { data: 'price', name: 'price' },
            { data: 'action', name: 'action', searchable: false, sortable: false }
        ],
        initComplete: function(){
            $('.dropdown-button').dropdown();
            $(".btn-edit").click(function(){
                editModal($(this));
            });
        }
    });
});

//Actions
function editModal(el){
    var id = el.data('id');
    $.ajax({
        type: 'GET',
        url: 'productos/'+id,
        success: function(res){
            data = res[0];
            $('label').addClass("active");
            $("#txt-nombre").val(data.name);
            $("#txt-codigo").val(data.code);
            $("#txt-price").val(data.price);
            $('#modalProd').modal('open');  
        }
    });
}