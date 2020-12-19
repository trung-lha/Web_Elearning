@extends('admin.adminHome')

@section('content')
    <div class="container">
    <div class="row">
        <form role="form" action="{{Route('subjectEdit')}}" method="post" enctype="multipart/form-data" 
        name="addbook" onsubmit="return(checkValue());">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Tên môn học</label>
                <input type="text" name="name" class="form-control" id="" value="{{$subjectForEdit[0]->name}}" required>
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control" id="" value="{{$subjectForEdit[0]->description}}" required>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="status" id="">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" name="updateSubject" id="updateSub" class="btn btn-info">Xác nhận</button>
            <input type="hidden" name="subject_id" value="{{$subjectForEdit[0]->id}}">
        </form>
    </div>
</div>

@endsection