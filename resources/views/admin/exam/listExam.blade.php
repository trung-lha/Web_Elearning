@extends('admin.adminHome')
@section('content')
{{-- @dd($listExam) --}}
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel card-body">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action " cellspacing="0">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">#</th>
                            <th class="column-title">Môn học</th>
                            <th class="column-title">Tên bài thi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Môn học</th>
                            <th>Tên bài thi</th>
                        </tr>
                    </tfoot>
                    <tbody id="main-table">
                        @foreach ($listExam as $key=>$exam)
                        
                        <tr>
                            <td style="width: 2%;">{{$key+1}}</td>
                            <td style="width: 20%;">{{$exam->nameSub}}</td>
                            <td style="width: 60%;"><a href="{{Route('addQuestion',$exam->id)}}">{{$exam->examName}}</a></td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt--60" style="text-align: center">
                <div class="col-md-12">
                    {{ $listExam->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection