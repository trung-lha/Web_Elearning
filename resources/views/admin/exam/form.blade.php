@extends('admin.adminHome')

@section('content')
<div class="page-header zvn-page-header clearfix">
    <div class="zvn-page-header-title">
        <h3>Exams Management</h3>
    </div>
    <div class="zvn-add-new pull-right">
        <a href="{{Route('showListExam')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
    </div>
</div>

@include('templates.error')

@include('admin.elements.filterForExam')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel card-body">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action " cellspacing="0">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">#</th>
                            <th class="column-title">Câu hỏi</th>
                            <th class="column-title">Bài thi</th>
                            <th class="column-title">Môn học</th>
                            <th class="column-title">Khởi tạo</th>
                            <th class="column-title">Cập nhật</th>
                            <th class="column-title" style="text-align: center;">Hành động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Câu hỏi</th>
                            <th>Bài thi</th>
                            <th>Môn học</th>
                            <th>Khởi tạo</th>
                            <th>Cập nhật</th>
                            <th style="text-align: center;">Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody id="main-table">
                        @foreach ($listQuestions as $key=>$question)
                        <tr>
                            <td style="width: 2%;">{{$key+1}}</td>
                            <td style="width: 39%;">{{$question->question}}</td>
                            <td style="width: 10%;">{{$question->exam_name}}</td>
                            <td style="width: 10%;">{{$question->subject_name}}</td>
                            <td style="width: 13%;">{{$question->created_at}}</td>
                            <td style="width: 13%;">{{$question->updated_at}}</td>
                            <td style="width: 13%;">
                                <a href="{{Route('showQuestion',$question->id)}}"><button
                                        class="btn btn-success">Sửa</button></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa bài viết này không?')" href=""><button
                                        class="btn btn-dark">Xóa</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt--60" style="text-align: center">
                <div class="col-md-12">
                    {{ $listQuestions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{asset('web_page/js/jquery.min.js')}}"></script>
<script src="{{asset('web_page/js/jquery.easing.1.3.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#filter-follow-sub').on('change',() =>{
            var selectedSubject = $("#filter-follow-sub option:selected").val();
            
            $.ajax({
                url:"{{route('test')}}",
                type:"get",
                dataType: "json",
                data:{'selectedSubject': selectedSubject},
                success:function(response) {
                    console.log(response);
                    $('#main-table').html(response.tableData);
                }
            });
        })
    });
</script>