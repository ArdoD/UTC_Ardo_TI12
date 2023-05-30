@extends('layout.master')

@section('title', 'Posting')

@section('content')
    {{-- {{$detail->Book->title}} --}}
    <div class="container d-flex flex-column justify-content-left">
        <div class="section-title">
            <p>It Really Count</p>
        </div>
        <div class="title">
            <h1>
                {{$detail->Book->title}}
            </h1>
        </div>
        <div class="desc">
            {{$detail->Book->description}} {{$detail->Book->description}}
        </div>
        <div class="third d-flex flex-row" style="gap: 1vw">
            <p>by  <span style="font-weight: 600">{{$detail->author}}</span> | {{$detail->post_date}}</p>
            <div class="box">
                <p>{{$detail->reading_time}}</p>
            </div>
        </div>
        <div class="image">
            <img src="/{{$detail->Book->image}}" alt="">
        </div>
        <br>
        <div class="share">
            <div class="share" style="display: block;">
                <a href="https://www.linkedin.com/">
                    <button type="button" class="btn btn-success share-btn" style="background-color: rgb(115, 115, 241)">Linkedin</button>
                </a>
                <a href="https://www.twitter.com/">
                    <button type="button" class="btn btn-success share-btn"style="background-color: rgb(115, 115, 241)">Twitter</button>
                </a>
                <a href="https://www.facebook.com/">
                    <button type="button" class="btn btn-success share-btn" style="background-color: rgb(115, 115, 241)">Facebook</button>
                </a>
                <a href="https://www.instagram.com/">
                    <button type="button" class="btn btn-success share-btn" style="background-color: rgb(115, 115, 241)">Instagram</button>
                </a>
            </div>
        </div>
        <br>
        <div class="description">
            <p>{{$detail->long_desc}} {{$detail->long_desc}} {{$detail->long_desc}} {{$detail->long_desc}} {{$detail->long_desc}}</p>
            <br>
            <p>{{$detail->long_desc}} {{$detail->long_desc}} {{$detail->long_desc}} {{$detail->long_desc}} {{$detail->long_desc}}</p>
        </div>
        <br>
        <div class="video">
            <div class="section-title">
                <p>Video Section</p>
            </div>
            <video width="900" controls>
                <source src="tes.mp4" type="video/mp4">
              </video>
        </div>
    </div>
    <style>
        .share a{
            text-decoration: none;
        }

        .description p{
            text-align: justify
        }
        .image img{
            width: 80vw;
            height: 35vw
        }
        .box{
            border: 1px solid;
            height: 2vw;
            /* width: 6vw; */
            border-radius: 5px;
            background-color: rgb(69, 69, 241);
            padding-left: 0.1vw
        }
        .box p{
            color: white;
            font-size: 1vw;

        }

        .container{
            margin-left: 2vw;
            padding-top: 2vw;
        }
        .section-title p{
            text-decoration: underline;
            font-weight: 600;
            font-size: 1.2vw;
        }
    </style>
@endsection
