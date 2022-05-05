@extends('layouts.front2')

@section('title')
    Thanh toán
@endsection

@section('content')
    <!--Begin display -->
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">VNPAY RESPONSE</h3>
        </div>
        <div class="table-responsive">
            <div class="form-group">
                <label>Mã đơn hàng:</label>
                <label>{{ $vnpayData['p_order_id'] }}</label>
            </div>
            <div class="form-group">
                <label>Số tiền:</label>
                <label>{{ $vnpayData['p_money'] }}</label>
            </div>
            <div class="form-group">
                <label>Nội dung thanh toán:</label>
                <label>{{ $vnpayData['p_note'] }}</label>
            </div>
            <div class="form-group">
                <label>Mã phản hồi (vnp_ResponseCode):</label>
                <label>{{ $vnpayData['p_vnp_response_code'] }}</label>
            </div>
            <div class="form-group">
                <label>Mã GD Tại VNPAY:</label>
                <label>{{ $vnpayData['p_code_vnpay'] }}</label>
            </div>
            <div class="form-group">
                <label>Mã Ngân hàng:</label>
                <label>{{ $vnpayData['p_code_bank'] }}</label>
            </div>
            <div class="form-group">
                <label>Thời gian thanh toán:</label>
                <label>{{ $vnpayData['p_time'] }}</label>
            </div>
            <div class="form-group">
                <label>Kết quả: GD thành công</label>
                <br>
                <a type="button" class="btn btn-primary" href="{{ url('/my-orders') }}">Xem đơn hàng</a>
            </div>
        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y'); ?></p>
        </footer>
    </div>
@endsection

@section('scripts')
    <link href="{{ asset('frontend/vnpay/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/vnpay/jumbotron-narrow.css') }}" rel="stylesheet">
    <script src="{{ asset('frontend/vnpay/jquery-1.11.3.min.js') }}"></script>
@endsection
