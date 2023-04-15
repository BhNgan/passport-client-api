@extends('admin.layout.base')
 
@section('title', 'user')
 
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">USER</li>
                </ol>
            </div>
            <h4 class="page-title">Tạo mới người dùng</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>


<div class="row">
    <div class="col-xl-12">
        
        <div class="card">
            
            <div class="card-body">
                
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-right">Tên</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="Nguyễn Văn A" id="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label text-right">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" placeholder="bootstrap@example.com" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label text-right">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-sm-2 col-form-label text-right">Nhập lại mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-gradient-primary">Tạo mới</button>
                            <button type="button" class="btn btn-gradient-danger">Quay về</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection