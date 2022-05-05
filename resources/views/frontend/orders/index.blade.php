@extends('layouts.front')

@section('title')
    My orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Đơn Đặt Hàng</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Thời gian</th>
                                    <th>Mã theo dõi</th>
                                    <th>Tổng giá</th>
                                    <th>Trạng thái</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->total_price }}</td>
                                        <td>{{ $item->status == 0 ? 'pending' : 'completed' }}</td>
                                        <td>
                                            <a href="{{ url('view-order/' . $item->id) }}" class="btn btn-primary">Xem</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
