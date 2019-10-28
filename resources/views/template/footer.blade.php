<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2019 Sistema de Logistica by Grupo Gracom. All rights reserved.</span>
    </footer>
    </div>
</div>
    <script type="b2b87a95708a162dfd393efc-text/javascript" src="{{asset('assets/js/vendor.js')}}"></script>
    <script type="b2b87a95708a162dfd393efc-text/javascript" src="{{asset('assets/js/bundle.js')}}"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="b2b87a95708a162dfd393efc-|49" defer=""></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    <script type="text/javascript">
  $(function () {
    
    var table = $('#kit_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('lista_kit') }}",
        columns: [
            {data: 'nome_kit', name: 'nome_kit'},
            {data: 'nome_empresa', name: 'nome_empresa'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }
    });

    $('#add_kit').click(function(){
     $('#action_button').val("Adiiconar");
     $('#action').val("Adicionar");
     $('#kits').modal('show');
 });

 $('#close_kit').click(function(){
    $('#form_result').hide();
 });



    $('#inserir_kit').on('submit', function(event){
        event.preventDefault();
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"{{ route('inserir_kit') }}",
            method:"POST",
            data: $("#inserir_kit").serialize(),
            dataType:"json",
            success:function(data)
            {
            var html = '';
            if(data.errors)
            {
            html = '<div class="alert alert-danger">';
            for(var count = 0; count < data.errors.length; count++)
            {
            html += '<p>' + data.errors[count] + '</p>';
            }
            html += '</div>';
            }
            if(data.success)
            {
            html = '<div class="alert alert-success">' + data.success + '</div>';
            $('#inserir_kit')[0].reset();
            $('#kit_table').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            $('#form_result').show();
            }
        })
        }
    });
    
  });
</script>

</body>

</html>