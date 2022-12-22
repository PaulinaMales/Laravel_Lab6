@extends('template')

@section('content')

<div class="box1">
    <h1 class="titulo">NUESTRO PERSONAL</h1>
       <p class="subtitulo">Nuestro equipo de trabajo</p>
    @foreach ($posts as $post)
    <div class="tarjeta">

        <p>
            <strong> {{$post['title']}}</strong>
            <br>
            <img class="imagen" src="https://th.bing.com/th/id/OIP.iSJR-cIBCm7BU5O1lTaJIAAAAA?pid=ImgDet&w=350&h=350&rs=1">
            <br>
            <a href="https://github.com/">Git Hub</strong></a> 
            <div class="box2">
                <p class="info"> Más Información </p>
            </div>
    
        </p>
    </div>

    @endforeach
</div>

@endsection

