@extends('layout.layout')
@section('content')
    <section class="py-5">
        <div class="container pb-5 mb-2">
            <div class="comparison-table">
                <table class="table table-bordered">
                    <thead class="bg-secondary">
                    <tr>
                        <td class="align-middle">
                        </td>
                        <td>
                            <div class="comparison-item">
                                <a class="comparison-item-thumb" href="shop-single.html"><img src="https://www.bootdey.com/image/160x160/FF0000/000000" alt="Apple iPhone Xs Max"></a>
                            </div>
                        </td>
                        <td>
                            <div class="comparison-item">
                                <a class="comparison-item-thumb" href="shop-single.html"><img src="https://www.bootdey.com/image/160x160/1E90FF/000000" alt="Google Pixel 3 XL"></a>
                            </div>
                        </td>
                    </tr>
                    </thead>
                    <tbody id="summary" data-filter="target">
                    <tr class="bg-secondary">
                        <th class="text-uppercase">Summary</th>
                        <td><span class="text-dark font-weight-semibold">Apple iPhone Xs Max</span></td>
                        <td><span class="text-dark font-weight-semibold">Google Pixel 3 XL</span></td>
                    </tr>
                    <tr>
                        <th>Performance</th>
                        <td>Hexa Core</td>
                        <td>Octa Core</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop
