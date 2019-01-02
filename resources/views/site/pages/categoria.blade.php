@extends('site.templates.master')
@section('conteudo')

<section class="content">
    
    <div class="col-md-12">
        <br>
        <div class="title-category">
            <h1 class="title-category">Categoria: {{$title}}</h1>
        </div>
        
        @forelse($datas as $category)

        <article class="post">
            <div class="col-md-3 col-sm-4 text-center">
                <div class="image-post">
                    <img src="{{URL::asset('/assets/uploads/posts/'.$category->image)}}" alt="{{ $category->title }}"
                    class="img-post">
                </div>
            </div>
            <div class="description-post col-md-9 col-sm-8">

                <div>
                    <h2 class="title-post">{{ $category->title }}</h2>
                </div>
                
                <div>
                    <p class="description-post">
                        {{ str_limit($category->description, 600) }}
                    </p>
                </div>

                <div>
                    <a class="btn-post btn" href="/post/{{$category->id}}">
                        Ver mais <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </article>
        @empty
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <strong>Nenhuma postagem existente...</strong>
                </div> 
            </div>
        @endforelse

        {{-- {{$datas->links()}} --}}

        @if(isset($dataForm))
            {{$datas->appends(Request::only('pesquisa'))->links()}}
        @else
            {{$datas->links()}}
        @endif

    </div><!--POSTS-->

</section>    

@endsection