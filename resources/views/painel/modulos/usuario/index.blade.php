@extends('painel.templates.dashboard')
@section('conteudo')
<div class="title-pg">
    <h1 class="title-pg">Listagem dos Usuários</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">
        <form class="form form-inline"  method="get" action="{{route('usuarios.search')}}" enctype="multipart/form-data">

            {{-- {{ csrf_field() }} --}}
            <input type="text" name="pesquisa"  class="form-control">

            <button type="submit" class="btn btn-search">Pesquisar</button>
        </form>
    </div>

    <div class="class-btn-insert">
    <a href="{{route('usuarios.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div>

    <!-- Mensagens enviadas do  controller pela session success -->
    @if( Session::has('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible hide-msgd">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> {{Session::get('success')}}</h4>

                </div>
            </div>
        </div>
    @endif
    <!-- /. Mensagens enviadas do  controller pela session success -->

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>GitHub</th>
            <th width="150">Ações</th>
        </tr>
        @forelse($datas as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->facebook}}</td>
                <td>{{$user->twitter}}</td>
                <td>{{$user->github}}</td>
                <td>
                <a href="{{route('usuarios.show', $user->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                <a href="{{route('usuarios.edit', $user->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>

                </td>
            </tr>
            @empty
            <tr>
                <td>Nenhum registro</td>
                </tr>
        @endforelse
    </table>

    {{-- {{$datas->links()}} --}}

    @if(isset($dataForm))
    {{$datas->appends(Request::only('pesquisa'))->links()}}
    @else
    {{$datas->links()}}
    @endif

</div><!--Content Dinâmico-->
@endsection