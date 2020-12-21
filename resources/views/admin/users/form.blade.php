@extends('admin.adminHome')

@section('content')
<div class="page-header zvn-page-header clearfix">
    <div class="zvn-page-header-title">
        <h3>User Management</h3>
    </div>
    {{-- <div class="zvn-add-new pull-right">
        <a href="{{Route('userDetail',0)}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
    </div> --}}
</div>

@include('templates.error')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Bộ lọc</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-6">
                        <a href="" type="button" class="btn btn-primary">
                            All <span class="badge bg-white">4</span></a>
                        <a href="" type="button" class="btn btn-success">
                            Active <span class="badge bg-white">2</span></a>
                        <a href="" type="button" class="btn btn-success">
                            Inactive <span class="badge bg-white">2</span></a>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle btn-active-field"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Search by All <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#" class="select-field" data-field="all">Search by All</a></li>
                                    <li><a href="#" class="select-field" data-field="fullname">Search by Name</a>
                                    </li>
                                    <li><a href="#" class="select-field" data-field="email">Search by Descirption</a>
                                    </li>
                                </ul>
                            </div>
                            <input type="text" class="form-control" name="search_value" value="">
                            <span class="input-group-btn">
                                <button id="btn-clear" type="button" class="btn btn-success"
                                    style="margin-right: 0px">Xóa tìm kiếm</button>
                                <button id="btn-search" type="button" class="btn btn-primary">Tìm kiếm</button>
                            </span>
                            <input type="hidden" name="search_field" value="all">
                        </div>


                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel card-body">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action " cellspacing="0">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">#</th>
                            <th class="column-title">Hồ sơ cá nhân</th>
                            <th class="column-title">Ảnh đại diện</th>
                            <th class="column-title">Cấp độ</th>
                            <th class="column-title">Trạng thái</th>
                            <th class="column-title">Khởi tạo</th>
                            <th class="column-title">Cập nhật</th>
                            <th class="column-title" style="text-align: center;">Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Hồ sơ cá nhân</th>
                            <th>Ảnh đại diện</th>
                            <th>Cấp độ</th>
                            <th>Trạng thái</th>
                            <th>Khởi tạo</th>
                            <th>Cập nhật</th>
                            <th style="text-align: center;">Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $key=>$user)
                        <tr>
                            <td style="width: 2%;">{{$key+1}}</td>
                            <td style="width: 25%;">
                                Name:{{$user->name}}<br>Email:{{$user->email}}
                            </td>
                            <td style="width: 20%;"><img src="{{asset('storage/images/'.$user->avatar)}}" alt="avatar" style="width: 60px; height: 60px;"></td>
                            <td style="width: 10%;">
                                @if($user->role_id == 1)
                                    <strong>Admin</strong>
                                @else
                                    <strong>User</strong>
                                @endif
                            </td>
                            
                            <td style="width: 10%;"><button class="btn btn-primary">{{$user->status}}</button></td>
                            <td style="width: 12%;">{{$user->created_at}}</td>
                            <td style="width: 12%;">{{$user->updated_at}}</td>
                            <td style="width: 9%; text-align: center;">
                                <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')"
                                    href="{{Route('deleteUser',$user->id)}}"><button class="btn btn-dark">Xóa</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt--60" style="text-align: center">
                <div class="col-md-12">
                    {{ $users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection