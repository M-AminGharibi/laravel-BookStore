@extends('layout.layout')
@section('content')
    <section class="py-5">
        <div class="container pb-5 mb-2">
            <div class="comparison-table">
                <form method="get" id="form" action="{{route('compare_product')}}">
                    @csrf
                    <table class="table table-bordered">
                        <thead class="bg-secondary">
                        <tr>
                            <td class="align-middle">
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <select id='product1' name='product1'>
                                        <option value=''>محصول را انتخاب کنید</option>
                                        @foreach ($book as $key => $value)
                                            <option {{isset($product1) ? $product1->id == $value->id ? 'selected' : '' : ''}} value='{!! $value->id !!}'>{!! $value->title !!}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <select id='product2' name='product2'>
                                        <option value=''>محصول را انتخاب کنید</option>
                                        @foreach ($book as $key => $value)
                                            <option {{ isset($product2) ? $product2->id == $value->id ? 'selected' : '' : ''}} value='{!! $value->id !!}'>{!! $value->title !!}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </td>
                        </tr>
                        </thead>
                        <tbody id="summary" data-filter="target">
                        <tr class="bg-secondary">
                            <th class="text-uppercase">image</th>
                            <td><span class="text-dark font-weight-semibold">
                                    @if(isset($product1))
                                        <img style="width: 100%" src="{{isset($product1)  ? $product1->image : ''}}" alt="Google Pixel 3 XL">
                                    @endif
                            </span></td>
                            <td><span class="text-dark font-weight-semibold">
                                    @if(isset($product2))
                                        <img style="width: 100%" src="{{isset($product2) ? $product2->image : ''}}" alt="Google Pixel 3 XL">
                                    @endif
</span></td>
                        </tr>
                        <tr class="bg-secondary">
                            <th class="text-uppercase">اسم کتاب</th>
                            <td><span class="text-dark font-weight-semibold">

                                {{isset($product1) ? $product1->title : ''}}
                                </span></td>
                            <td><span class="text-dark font-weight-semibold">
                                                                {{isset($product2) ? $product2->title : ''}}

                                </span></td>
                        </tr>




                        <tr class="bg-secondary">
                            <th class="text-uppercase">نویسنده</th>
                            <td><span class="text-dark font-weight-semibold">

                                {{isset($product1) ? $product1->author : ''}}
                                </span></td>
                            <td><span class="text-dark font-weight-semibold">
                                                                {{isset($product2) ? $product2->author : ''}}

                                </span></td>
                        </tr>

                        <tr class="bg-secondary">
                            <th class="text-uppercase">قیمت</th>
                            <td><span class="text-dark font-weight-semibold">

                                {{isset($product1) ? $product1->price : ''}}

                                    <span>
                                        تومان
                                    </span>
                                </span></td>
                            <td><span class="text-dark font-weight-semibold">
                                                                {{isset($product2) ? $product2->price : ''}}
                                    <span>
                                        تومان
                                    </span>
                                </span></td>
                        </tr>

                        </tbody>
                    </table>

                </form>

            </div>
        </div>
    </section>
    <script>

@stop
