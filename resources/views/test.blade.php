@extends('layout')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Date range:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="reservation" value='01-01-2007 - 02-28-2007'>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Consultores</h3>
                        </div>
                        <div class="box-body">
                        @foreach($consultores as $consultor)
                            <div class="col-lg-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="{{ $consultor->no_usuario }}"> {{ $consultor->no_usuario }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Opciones</h3>
                        </div>
                        <div class="box-body">
                            <button type="button" class="btn btn-block bg-blue btn-lg" onclick="relatorio()">
                                <i class="fa fa-file-text-o"></i> 
                                Relatorio
                            </button>
                            <button type="button" class="btn btn-block bg-red" onclick="grafico()">
                                <i class="fa fa-line-chart"></i> 
                                Grafico 
                            </button>
                            <button type="button" class="btn btn-block bg-purple"  onclick="pizza()">
                                <i class="fa fa-pie-chart"></i> 
                                Pizza
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12" id="result">
                    
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
    @extends('footer')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        function relatorio(opcion) {
            var range = $("#reservation").val();
            //console.log(range);
            var docs = [];
            $(".checkbox input:checkbox:checked").each(function(){
                docs.push($(this).val());
                
            });
            var parametros ={
                "consultores":docs,
                "rango": range
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data : parametros,
                method: "post",
                url  : "{{ route('relatorio') }}",
                success: function(data){

                    var result = data.data;
                    var datos = { 
                        "datos": result,
                        "consultores": docs
                    };
                    $.ajax({

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data : datos,
                        method: "post",
                        url  : "{{ route('tabla') }}",
                        success: function(data){

                             $("#result").html(data);

                        }
                    });
                }
            });
        }
        function pizza(opcion) {
            var range = $("#reservation").val();
            //console.log(range);
            var docs = [];
            $(".checkbox input:checkbox:checked").each(function(){
                docs.push($(this).val());
                
            });
            var parametros ={
                "consultores":docs,
                "rango": range
            };
           
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data : parametros,
                method: "post",
                url  : "{{ route('getPizza') }}",
                success: function(data){

                    var result = data.data;
                    var datos = { 
                        "datos": result,
                        "consultores": docs
                    };
                    $.ajax({

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data : datos,
                        method: "post",
                        url  : "{{ route('pizza') }}",
                        success: function(data){

                             $("#result").html(data);

                        }
                    });
                }
            });
        }
function grafico(opcion) {
            var range = $("#reservation").val();
            //console.log(range);
            var docs = [];
            $(".checkbox input:checkbox:checked").each(function(){
                docs.push($(this).val());
                
            });
            var parametros ={
                "consultores":docs,
                "rango": range
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data : parametros,
                method: "post",
                url  : "{{ route('getGrafico') }}",
                success: function(data){

                    var result = data.data;
                    var datos = { 
                        "datos": result,
                        "consultores": docs
                    };
                    $.ajax({

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data : datos,
                        method: "post",
                        url  : "{{ route('grafico') }}",
                        success: function(data){

                             $("#result").html(data);

                        }
                    });
                }
            });
        }
    </script>
    <!-- /.content -->

    <!-- /.content-wrapper -->

@endsection



