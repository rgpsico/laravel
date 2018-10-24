@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Informe as informações do clientes

<a class="pull-right" href="{{url('clientes')}}"> Listagem de clientes</a>
                </div>

                <div class="panel-body">     
                @if(Session::has('mensagem_sucesso'))
                  <div class="alert alert-success">
                  	{{ Session::get('mensagem_sucesso') }}
                  </div>
               @endif
               
               

@if(Request::is('*/editar'))
{!! Form::model($cliente, ['method'  =>'PATCH' , 'url' => 'clientes/'.$cliente->id]) !!}
@else
    {!!Form::open(['url' => 'clientes/salvar']) !!}
@endif

               
                 {!!Form::open(['url' => 'clientes/salvar']) !!}
                    
                {!!Form::Label('nome','Nome') !!}
                
                {!!Form::input('text' , 'nome', null ,['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome'])!!}
           
                {!!Form::Label('endereco','endereco') !!}    


{!!Form::input('text' , 'endereco', null ,['class'=>'form-control', 'autofocus', 'placeholder'=>'Endereço'])!!}
               
      
                {!!Form::Label('numero','numero') !!} 
{!!Form::input('text' , 'numero', null ,['class'=>'form-control', 'autofocus', 'placeholder'=>'Numero'])!!}
               
 {!!Form::submit('Salvar', ['class'=>'btn-primary']) !!}

                 {!!Form::close() !!}


                   </div>
            </div>
        </div>
    </div>
</div>
@endsection
