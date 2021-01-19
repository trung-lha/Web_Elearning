@extends('admin.adminHome')

@section('content')
    <div class="container">
    <div class="row">
        <form role="form" action="{{Route('addQuestion2')}}" method="post" enctype="multipart/form-data" 
        name="editQuestion" onsubmit="return(checkValue());">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nội dung câu hỏi</label>
                <input type="text" name="question" class="form-control" id="" placeholder="Nhập nội dung" required>
            </div>

            <div class="form-group">
                <label>Đáp án A</label>
                <input type="text" name="answer_a" class="form-control" id=""  placeholder="Nhập nội dung" required>
            </div>

            <div class="form-group">
                <label>Đáp án B</label>
                <input type="text" name="answer_b" class="form-control" id=""  placeholder="Nhập nội dung" required>
            </div>

            <div class="form-group">
                <label>Đáp án C</label>
                <input type="text" name="answer_c" class="form-control" id=""  placeholder="Nhập nội dung" required>
            </div>

            <div class="form-group">
                <label>Đáp án D</label>
                <input type="text" name="answer_d" class="form-control" id=""  placeholder="Nhập nội dung" required>
            </div>
            <div class="row">
                <div class="form-group col-md-2 col-sm-2">
                    <label>Đáp án Đúng</label>
                    <select class="form-control form-control-sm" name="correct_answer">
                        <option value="1">Đáp án A</option>
                        <option value="2">Đáp án B</option>
                        <option value="3">Đáp án C</option>
                        <option value="4">Đáp án D</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-2 col-sm-2">
                    <label>Độ khó</label>
                    <select class="form-control form-control-sm" name="level">
                        <option value="1">Dễ</option>
                        <option value="2">Trung bình</option>
                        <option value="3">Khó</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="upadateQuestion" id="" class="btn btn-info">Xác nhận</button>
            <input type="hidden" name="examID" id="examID" value="{{$exam_id}}">
        </form>
    </div>
</div>
@endsection