@extends('site.templates.master')
@section('conteudo')

<div class="slide">
    <div class="col-md-8">
        <article class="img-big">
            <a href="" title="">
                <img src="imgs/img1.jpg" alt="" class="img-slide-big">

                <h1 class="text-slide">
                    Uma nova maneira de trabalhar com HTML5 - Acesse o Curso HTML5
                </h1>
            </a>
        </article>
    </div>

    <div class="col-md-4">
        <article class="img-small col-md-12 col-sm-6 col-xm-12">
            <a href="" title="">
                <img src="imgs/img2.jpg" alt="" class="img-slide-small">

                <h1 class="text-slide">
                    Um nome para o titulo aqui
                </h1>
            </a>
        </article>
        <article class="img-small col-md-12 col-sm-6 col-xm-12">
            <a href="" title="">
                <img src="imgs/img3.jpg" alt="" class="img-slide-small">
                <h1 class="text-slide">
                    O título do post pode vir bem aqui...
                </h1>
            </a>
        </article>
    </div>
</div><!--Slide-->


<section class="content">
    <div class="col-md-8">
        
        @forelse($datas as $key)
        <article class="post">
            <div class="col-md-3 text-center">
                <div class="image-post">
                    <img src="{{URL::asset('/assets/uploads/posts/'.$key->image)}}"
                        alt="{{ $key->title }}" class="img-post">
                </div>
            </div>
            <div class="description-post col-md-9">
                <div>
                    <h2 class="title-post">{{ $key->title }}</h2>
                </div>
                
                <div>
                    <p class="description-post">
                        {{ str_limit($key->description, 600) }}
                    </p>
                </div>

                <div>
                    <a class="btn-post btn" href="post/{{$key->id}}">
                        Ver mais <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </article>
        @empty
            <div class="alert alert-danger" role="alert">
                <strong>Nenhuma postagem existente...</strong>
            </div>  
        @endforelse

        {{-- {{$datas->links()}} --}}

        @if(isset($dataForm))
            {{$datas->appends(Request::only('pesquisa'))->links()}}
        @else
            {{$datas->links()}}
        @endif

    </div><!--POSTS-->

    <!--Sidebar-->
    <div class="col-md-4 col-xs-12">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FfaculdadeAlfaUmuarama%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=316115088513380"
            width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>

</section>

@endsection
