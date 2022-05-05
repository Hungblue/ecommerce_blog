@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Chi tiết người sử dụng
                            <a href="{{ url('users') }}" class="btn btn-primary float-end">Quay lại</a>
                        </h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label for="">Vai trò</label>
                                <div class="p-2 border">{{ $users->role_as == '0' ? 'User' : 'Admin' }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Họ và Đệm</label>
                                <div class="p-2 border">{{ $users->name }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Tên</label>
                                <div class="p-2 border">{{ $users->lastname }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Email</label>
                                <div class="p-2 border">{{ $users->email }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Số điện thoại</label>
                                <div class="p-2 border">{{ $users->phone }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Địa chỉ 1</label>
                                <div class="p-2 border">{{ $users->address1 }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Địa chỉ 2</label>
                                <div class="p-2 border">{{ $users->address2 }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Thành phố</label>
                                <div class="p-2 border">{{ $users->city }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Đất nước</label>
                                <div class="p-2 border">{{ $users->country }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Thành phố</label>
                                <div class="p-2 border">{{ $users->state }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Mã Zip Code</label>
                                <div class="p-2 border">{{ $users->pincode }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
