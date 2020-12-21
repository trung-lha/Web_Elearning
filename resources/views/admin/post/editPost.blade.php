@extends('admin.adminHome')

@section('content')
    <div class="container">
    <div class="row">
        <form role="form" action="{{Route('editPostAdmin')}}" method="post" enctype="multipart/form-data" 
        name="addbook" onsubmit="return(checkValue());">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Tiêu đề bài viết</label>
                <input type="text" name="name" class="form-control" id="" value="{{$postForEdit[0]->name}}" required>
            </div>

            <div class="form-group">
                <label>Nội dung</label>
                <input type="text" name="content" class="form-control" id="" value="{{$postForEdit[0]->content}}" required>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="status" id="">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" name="updateSubject" id="updateSub" class="btn btn-info">Xác nhận</button>
            <input type="hidden" name="post_id" value="{{$postForEdit[0]->id}}">
        </form>
    </div>
</div>

@endsection