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
            <h4 class="page-title">Danh sách người dùng</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-xl-12">
        
        <div class="card">

            <div class="card-body">
    
                <h4 class="mt-0 header-title">Bộ lọc

                    <div class="btn-group mb-4 dropleft float-right">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thao tác <i class="mdi mdi-chevron-down"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('users.create')}}">Tạo mới</a>
                            <a class="dropdown-item" href="#">Xóa</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Xuất Excel</a>
                        </div>
                    </div>
                </h4>
                <form action="{{route('users.index')}}">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" name="search" id="search" aria-describedby="searchHelp" placeholder="Nhập email tìm kiếm" value="{{ request()->get('search') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-gradient-success float-right">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                    
                </form>

                <div class="table-responsive">
                    <table class="table mb-0 table-centered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên người dùng</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger"  data-toggle="modal" onclick="confirmDelete('{{ $user->id }}', '{{ 'Bạn có muốn xóa dữ liệu người dùng ' . $user->email }}', '{{ route('users.destroy', ['user' => $user->id]) }}' )">
                                        Xóa
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@push('ready')
    {{-- alert('yay') --}}
@endpush

@push('script')
<script>
    var confirmDelete = (id, label, route) => {
        $('#confirmationModalLabel').text(label);
        $('#confirmationModalUrl').attr('action', route);
        $('#confirmationModalMethod').val('DELETE');
        
        $('#confirmationModal').modal({
            show: true
        });
        
    }
</script>
@endpush
