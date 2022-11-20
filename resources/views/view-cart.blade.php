@extends('layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="/shop">Shop</a>
                            <span>Order Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order Date</th>
                                    <th>Code Order</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($show_Orders as $key => $show_Order)
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $show_Order->created_at }}
                                        </td>
                                        <td>
                                            {{ $show_Order->order_code }}
                                        </td>
                                        <td>
                                            @if($show_Order->order_status == 1)
                                                Đơn hàng mới
                                            @elseif($show_Order->order_status == 2)
                                                Đã xử lý  - Đã giao hàng
                                            @else
                                                Đã Hủy Đơn Hàng
                                            @endif
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm view" href="/view-detail-order/{{ $show_Order->order_code }}">
                                                <i class="fa fa-eye"></i>
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
