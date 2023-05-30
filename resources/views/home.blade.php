@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="section1">
        <div class="container-one d-flex">
            <div class="image-sec1">
                <img src="/{{$one[0]->image}}" alt="{{$one[0]->image}}">
            </div>

            <div class="title-sec1 d-flex flex-column">
                <div class="section-title">
                    <p>It Really Counts</p>
                </div>
                <a href="/posting/{{$one[0]->id}}">
                    <div class="book-title">
                        <h3>
                            {{-- Judul Buku direpeating biar keliatan panjang kyk di soal --}}
                            {{$one[0]->title}}{{$one[0]->title}}{{$one[0]->title}}{{$one[0]->title}}
                        </h3>
                    </div>
                </a>
                    <div class="book-desc">
                        {{$one[0]->description}}{{$one[0]->description}}{{$one[0]->description}}{{$one[0]->description}}
                    </div>
                </div>
        </div>
    </div>
    <div class="section2">
        <div class="section-title">
            <p>Latest Book Reviews</p>
        </div>
        <div class="container-sec2 d-flex flex-row">
            {{-- @foreach ($books as $books ) --}}
            @for ($i = 0; $i < 4; $i++)

            <a href="/posting/{{$books[$i]->id}}">
                <div class="card" style="width: 18rem;height:28rem">
                    <img class="card-img-top card-image" src="/{{$books[$i]->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h3>{{$books[$i]->title}}</h3>
                        <p class="card-text">{{$books[$i]->description}}</p>
                    </div>
                </div>
            <a>
            @endfor
            {{-- @endforeach --}}
        </div>
    </div>
    <div class="section3">
        <div class="section-title">
            <p>Book Series Reviews</p>
        </div>
        <div class="container-sec3 d-flex flex-wrap justify-content-left ">
            @foreach ($books as $books )
                <div class="container-card">
                    <div class="card" style="width: 26rem;height:22rem">
                        <img class="card-img-top card-image-sec3" src="/{{$books->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h3>{{$books->title}}</h3>
                        </div>
                    </div>
                    <a href="/posting/{{$books->id}}" class="btn btn-primary">Read Post</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
