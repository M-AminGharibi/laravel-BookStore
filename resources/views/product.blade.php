@extends('layout.layout')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="white-box text-center">
                                <img src="{{$book->image}}" class="img-responsive" style="width: 100%;">

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-5">{{$book->title}}</h4>
                            <p>{{$book->description}}</p>
                            <h2 class="mt-5">
                                {{$book->price}}
                                <span> تومان</span>
                            </h2>
                            <h3 class="box-title mt-5">{{$book->author}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
