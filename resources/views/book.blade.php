@extends('layout.layout')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($book as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" style="width: 100%" src="{{$item->image}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$item->title}}</h5>
                                <!-- Product price-->
                                تومان
                                  {{$item->price}}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/{{$item->id}}">مشاهده محصول</a></div>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>
            </div>
        </div>
    </section>
@stop
