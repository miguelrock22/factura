@include('partials/header')



<table class="table table-bordered" id="productos-table">
     <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>Price</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
    </table>
<script>
$(function() {
    $('#productos-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getproductos') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'code', name: 'code' },
            { data: 'price', name: 'price' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>

</body>
</html>