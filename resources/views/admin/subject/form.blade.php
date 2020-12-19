@extends('admin.adminHome')

<?php
    $numberSubject = 0;
    foreach ($subjects as $key){
        $numberSubject++;
    }

?>
@section('content')
<div class="page-header zvn-page-header clearfix">
    <div class="zvn-page-header-title">
        <h3>Subject Management</h3>
    </div>
    <div class="zvn-add-new pull-right">
        <a href="{{Route('subjectDetail',0)}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
    </div>
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
                            <th class="column-title">Môn học</th>
                            <th class="column-title">Mô tả</th>
                            <th class="column-title">Trạng thái</th>
                            <th class="column-title">Khởi tạo</th>
                            <th class="column-title">Cập nhật</th>
                            <th class="column-title" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Môn học</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th>Khởi tạo</th>
                            <th>Cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($subjects as $key=>$subject)
                        <tr>
                            <td style="width: 2%;">{{$key+1}}</td>
                            <td style="width: 8%;">{{$subject->name}}</td>
                            <td style="width: 40%;">{{$subject->description}}</td>
                            <td style="width: 11%;"><button class="btn btn-primary">{{$subject->status}}</button></td>
                            <td style="width: 13%;">{{$subject->created_at}}</td>
                            <td>{{$subject->updated_at}}</td>
                            <td style="width: 13%;">
                                <a href="{{Route('subjectDetail',$subject->id)}}"><button
                                        class="btn btn-success">Sửa</button></a>
                                <a onclick="return confirm('Bạn có muốn xóa môn học này không?')"
                                    href="{{Route('subjectDelete',$subject->id)}}"><button class="btn btn-dark">Xóa</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt--60" style="text-align: center">
                <div class="col-md-12">
                    {{ $subjects->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection