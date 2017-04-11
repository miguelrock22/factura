$(function() {
    //Load Components
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
        }
    });
});