$(function () {
    
    var table = $('#gracom_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "http://localhost:8000/alunos_ativos_imugi_franquia",
        columns: [
            {data: 'unidade', name: 'unidade'},
            {data: 'alunosAtivos', name: 'alunosAtivos'},
            
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

    $(function () {
    
        var table = $('#ativos_imugi_franquia').DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://localhost:8000/alunos_ativos_imugi_franquia",
            columns: [
                {data: 'unidade', name: 'unidade'},
                {data: 'alunosAtivos', name: 'alunosAtivos'},
                
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
    });

    $(function () {
    
        var table = $('#ativos_imugi').DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://localhost:8000/alunos_ativos_imugi",
            columns: [
                {data: 'unidade', name: 'unidade'},
                {data: 'alunosAtivos', name: 'alunosAtivos'},
                
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
    
    $(function () {
    
    var table = $('#entrada').DataTable({
        processing: true,
        serverSide: true,
        ajax: "http://localhost:8000/lista_entradas",
        columns: [
            {data: 'unidade', name: 'nome_unidade'},
            {data: 'kit1', name: 'kit1', orderable: false, searchable: false},
            {data: 'kit2', name: 'kit2', orderable: false, searchable: false},
            {data: 'kit3', name: 'kit3', orderable: false, searchable: false}
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

$(function () {
    
    var table = $('#kit_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "http://localhost:8000/lista_kit",
        columns: [
            {data: 'nome_kit', name: 'nome_kit'},
            {data: 'nome_empresa', name: 'nome_empresa'},
            {data: 'created_at', name: 'created_at'},
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

    $(function () {
    
        var table = $('#lancamentosimugi').DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://localhost:8000/lista_lancamentos",
            columns: [
                {data: 'nome_unidade', name: 'nome_unidade'},
                {data: 'qtd_kit', name: 'qtd_kit'},
                {data: 'nome_kit', name: 'nome_kit'},
                {data: 'created_at', name: 'created_at'}
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

    var table = $('#imugi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "http://localhost:8000/alunos_imugi",
        columns: [
            {data: 'matricula', name: 'matricula'},
            {data: 'nome', name: 'nome'},
            {data: 'nome_kit', name: 'nome_kit'},
            {data: 'curso', name: 'curso'},
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

    $(function () {
        var table = $('#cursos_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://localhost:8000/lista_cursos",
            columns: [
                {data: 'nome_curso', name: 'nome_curso'},
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

    $('#add_unidade_imugi').click(function(){
        $('.modal-title').text("Adicionar Unidade");
        $('#action').val("Adicionar");
        $('#unidades').modal('show');
    });

    $('#add_kit').click(function(){
     $('.modal-title').text("Adicionar Kit");
     $('#action').val("Adicionar");
     $('#kits').modal('show');
    });

    $('#add_lancamento').click(function(){
        $('.modal-title').text("Adicionar Lançamento");
        $('#action').val("Adicionar");
        $('#lancamentos').modal('show');
       });

    $('#add_curso').click(function(){
        $('.modal-title').text("Adicionar Curso");
        $('#action').val("Adicionar");
        $('#curso').modal('show');
       });

    $('#add_empresa').click(function(){
        $('.modal-title').text("Adicionar Empresa");
        $('#action').val("Adicionar");
        $('#empresa').modal('show');
    });

    $('#add_usuario').click(function(){
        $('.modal-title').text("Adicionar Usuário");
        $('#action').val("Adicionar");
        $('#usuario').modal('show');
    });
 

 $('#close_kit').click(function(){
    $('#form_result').hide();
 });

 $('#close_empresa').click(function(){
    $('#form_result').hide();
 });
 
 $(function () {
    
    var table = $('#empresas_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "http://localhost:8000/lista_empresa",
        columns: [
            {data: 'logar', name: 'logar', orderable: false, searchable: false},
            {data: 'nome_empresa', name: 'nome_empresa'},
            {data: 'created_at', name: 'created_at'},
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

    $(function () {
    
        var table = $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://localhost:8000/lista_usuarios",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'tipo', name: 'tipo'},
                {data: 'nome_empresa', name: 'nome_empresa'},
                {data: 'created_at', name: 'created_at'},
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

        $(function () {
    
        var table = $('#listaunidadesimugi').DataTable({
            processing: true,
            serverSide: true,
            ajax: "http://localhost:8000/lista_unidades_imugi",
            columns: [
                {data: 'logar', name: 'logar', orderable: false, searchable: false},
                {data: 'nome_unidade', name: 'nome_unidade'},
                {data: 'cidade_id', name: 'cidade_id'},
                {data: 'cod_sophia_id', name: 'cod_sophia_id'},
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


    $('#inserir_kit').on('submit', function(event){
        event.preventDefault();
        
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"http://localhost:8000/inserir_kit",
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
        /* editar */
        if($('#action').val() == "Edit")
        {
          
        $.ajax({
          url:"kits/update",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
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
                $('#kit_table').DataTable().ajax.reload();
                $('#form_result').html(html);
                $('#form_result').show();
            }
            $('#form_result').html(html);
            }
         });
        }
       });

       $('#inserir_unidade_imugi').on('submit', function(event){
        event.preventDefault();
        
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"http://localhost:8000/inserir_unidade_imugi",
            method:"POST",
            data: $("#inserir_unidade_imugi").serialize(),
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
            $('#inserir_unidade_imugi')[0].reset();
            $('#listaunidadesimugi').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            $('#form_result').show();
            }
        })
        }
        /* editar */
        if($('#action').val() == "Edit")
        {
          
        $.ajax({
          url:"unidade_imugi/update",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
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
                $('#listaunidadesimugi').DataTable().ajax.reload();
                $('#form_result').html(html);
                $('#form_result').show();
            }
            $('#form_result').html(html);
            }
         });
        }
       });

       $(document).on('click', '.edit_unidade_imugi', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
         url:"/editar_unidade_imugi/"+id+"/edit",
         dataType:"json",
         success:function(html){
          $('#nome_unidade').val(html.data.nome_unidade);
          $('#uf').val(html.data.estado_id);
          $('#cidade').val(html.data.cidade_id);
          $('#cod_sophia').val(html.data.cod_sophia_id);
          $('.modal-title').text("Editar Unidade Imugi");
          $('#hidden_id').val(html.data.id);
          $('#action_button').val("Salvar Edições");
          $('#listaunidadesimugi').DataTable().ajax.reload();
          $('#action').val("Edit");
          $('#unidades').modal('show');
         }
        })
       });

       $('#inserir_lancamento').on('submit', function(event){
        event.preventDefault();
        
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"http://localhost:8000/inserir_lancamento",
            method:"POST",
            data: $("#inserir_lancamento").serialize(),
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
            $('#inserir_lancamento')[0].reset();
            $('#lancamentosimugi').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            $('#form_result').show();
            }
        })
        }
       });
    });

    /* baixa alunos imugi */
    $('#baixa_imugi').on('submit', function(event){
        event.preventDefault();
        /* editar */
        if($('#action').val() == "Edit")
        {
          
        $.ajax({
          url:"alunosimugi/update",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType:"json",
          success:function(data)
          {
           var html = '';
           if(data.errors)
           {
            html = '<div class="alert alert-danger">';
            for(var count = 0; count < data.errors.length; count++)
            {
             html +=  data.errors[count];
            }
            html += '</div>';
           }
           if(data.success)
            {
                html = '<div class="alert alert-success">' + data.success + '</div>';
                $('#imugi_table').DataTable().ajax.reload();
                $('#form_result').html(html);
                $('#form_result').show();
            }
            $('#form_result').html(html);
            }
         });
        }
       });
    });


    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
         url:"/editar_kit/"+id+"/edit",
         dataType:"json",
         success:function(html){
          $('#nome_kit').val(html.data.nome_kit);
          $('.modal-title').text("Editar Kit");
          $('#hidden_id').val(html.data.id);
          $('#action_button').val("Salvar Edições");
          $('#kit_table').DataTable().ajax.reload();
          $('#action').val("Edit");
          $('#kits').modal('show');
         }
        })
       });

       $(document).on('click', '.edit_imugi', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
         url:"/editar_imugi/"+id+"/edit",
         dataType:"json",
         success:function(html){
         $('#matricula').val(html.data.matricula);
          $('.modal-title').text("Baixa Material Imugi");
          $('#hidden_id').val(html.data.idCod);
          $('#action_button').val("Salvar Edições");
          $('#imugi_table').DataTable().ajax.reload();
          $('#action').val("Edit");
          $('#baixaimugi').modal('show');
         }
        })
       });
    
       var user_id;

       $(document).on('click', '.delete', function(){
        user_id = $(this).attr('id');
        $('#confirmModal').modal('show');
       });

       $(document).on('click', '#ok_button', function(){
        $.ajax({
         url:"kits/destroy/"+user_id,
         beforeSend:function(){
          $('#ok_button').text('Deleting...');
         },
         success:function(data)
         {
          setTimeout(function(){
           $('#confirmModal').modal('hide');
           $('#kit_table').DataTable().ajax.reload();
           $('#ok_button').text('OK');
          }, 1000);
         }
        })
       });
   
   
       /* empresa */
    $('#inserir_empresa').on('submit', function(event){
        event.preventDefault();
        
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"http://localhost:8000/inserir_empresa",
            method:"POST",
            data: $("#inserir_empresa").serialize(),
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
            $('#inserir_empresa')[0].reset();
            $('#empresas_table').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            $('#form_result').show();
            }
        })
        }
        /* editar */
        if($('#action').val() == "Edit")
        {
          
        $.ajax({
          url:"empresa/update",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
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
                $('#empresas_table').DataTable().ajax.reload();
                $('#form_result').html(html);
                $('#form_result').show();
            }
            $('#form_result').html(html);
            }
         });
        }
       });
    });

    $(document).on('click', '.edit_empresa', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
         url:"/editar_empresa/"+id+"/edit",
         dataType:"json",
         success:function(html){
          $('#nome_empresa').val(html.data.nome_empresa);
          $('.modal-title').text("Editar Empresa");
          $('#hidden_id').val(html.data.id);
          $('#action_button').val("Salvar Edições");
          $('#empresas_table').DataTable().ajax.reload();
          $('#action').val("Edit");
          $('#empresa').modal('show');
         }
        })
       });
    
       var user_id;

       $(document).on('click', '.delete_empresa', function(){
        user_id = $(this).attr('id');
        $('#confirmModalEmpresa').modal('show');
       });

       $(document).on('click', '#ok_button_empresa', function(){
        $.ajax({
         url:"empresa/destroy/"+user_id,
         beforeSend:function(){
          $('#ok_button_empresa').text('Deleting...');
         },
         success:function(data)
         {
          setTimeout(function(){
           $('#confirmModalEmpresa').modal('hide');
           $('#empresas_table').DataTable().ajax.reload();
           $('#ok_button_empresa').text('OK');
          }, 1000);
         }
        })
       });
    
       /* usuarios */
    $('#inserir_usuario').on('submit', function(event){
        event.preventDefault();
        
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"http://localhost:8000/inserir_usuario",
            method:"POST",
            data: $("#inserir_usuario").serialize(),
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
            $('#inserir_usuario')[0].reset();
            $('#user_table').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            $('#form_result').show();
            }
        })
        }
        /* editar */
        if($('#action').val() == "Edit")
        {
          
        $.ajax({
          url:"usuario/update",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
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
                $('#user_table').DataTable().ajax.reload();
                $('#form_result').html(html);
                $('#form_result').show();
            }
            $('#form_result').html(html);
            }
         });
        }
       });

       $(document).on('click', '.edit_usuario', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
         url:"/editar_usuario/"+id+"/edit",
         dataType:"json",
         success:function(html){
          $('#nome_usuario').val(html.data.name);
          $('#email').val(html.data.email);
          $('.modal-title').text("Editar Usuário");
          $('#hidden_id').val(html.data.id);
          $('#action_button').val("Salvar Edições");
          $('#users_table').DataTable().ajax.reload();
          $('#action').val("Edit");
          $('#usuario').modal('show');
         }
        })
       });

       $(document).on('click', '.edit_curso', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
         url:"/editar_curso/"+id+"/edit",
         dataType:"json",
         success:function(html){
          $('#nome_curso').val(html.data.nome_curso);
          $('.modal-title').text("Editar Curso");
          $('#hidden_id').val(html.data.id);
          $('#action_button').val("Salvar Edições");
          $('#cursos_table').DataTable().ajax.reload();
          $('#action').val("Edit");
          $('#curso').modal('show');
         }
        })
       });

       var user_id;

       $(document).on('click', '.delete_usuario', function(){
        user_id = $(this).attr('id');
        $('#confirmModalUsuario').modal('show');
       });

       $(document).on('click', '.delete_curso', function(){
        user_id = $(this).attr('id');
        $('#confirmModalCurso').modal('show');
       });

       
       $(document).on('click', '#ok_button_curso', function(){
        $.ajax({
         url:"curso/destroy/"+user_id,
         beforeSend:function(){
          $('#ok_button_curso').text('Deleting...');
         },
         success:function(data)
         {
          setTimeout(function(){
           $('#confirmModalCurso').modal('hide');
           $('#cursos_table').DataTable().ajax.reload();
           $('#ok_button_curso').text('OK');
          }, 1000);
         }
        })
       });

       $(document).on('click', '#ok_button_usuario', function(){
        $.ajax({
         url:"usuario/destroy/"+user_id,
         beforeSend:function(){
          $('#ok_button_usuario').text('Deleting...');
         },
         success:function(data)
         {
          setTimeout(function(){
           $('#confirmModalUsuario').modal('hide');
           $('#user_table').DataTable().ajax.reload();
           $('#ok_button_usuario').text('OK');
          }, 1000);
         }
        })
       });
    });
    /* cursos */
    $('#inserir_curso').on('submit', function(event){
        event.preventDefault();
        
        if($('#action').val() == 'Adicionar')
        {
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"http://localhost:8000/inserir_curso",
            method:"POST",
            data: $("#inserir_curso").serialize(),
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
            $('#inserir_curso')[0].reset();
            $('#cursos_table').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
            $('#form_result').show();
            }
        })
        }
        /* editar */
        if($('#action').val() == "Edit")
        {
          
        $.ajax({
          url:"cursos/update",
          method:"POST",
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
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
                $('#cursos_table').DataTable().ajax.reload();
                $('#form_result').html(html);
                $('#form_result').show();
            }
            $('#form_result').html(html);
            }
         });
        }
       });
    });
    });
});
});
});