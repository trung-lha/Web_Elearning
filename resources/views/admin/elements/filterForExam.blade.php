@extends('admin.elements.filter')
@section('option')
{{-- <button type="button" class="btn btn-default dropdown-toggle btn-active-field" data-toggle="dropdown"
    aria-expanded="false">
    Search by All <span class="caret"></span>
</button>
<ul class="dropdown-menu dropdown-menu-right" role="menu">
    <li><a href="#" class="select-field" data-field="all">Search by All</a></li>
    <li><a href="#" class="select-field" data-field="id">Search by ID</a></li>
    <li><a href="#" class="select-field" data-field="username">Search by Username</a>
    </li>
    <li><a href="#" class="select-field" data-field="fullname">Search by Fullname</a>
    </li>
    <li><a href="#" class="select-field" data-field="email">Search by Email</a></li>
</ul> --}}
    <select name="filter-box" id="filter-follow-sub" class="select-container form-control">
        <option name="" id="" value="0">Tìm kiếm theo môn</option>
        @foreach ($listSubject as $subject)
            <option name="{{$subject->name}}" id="{{$subject->name}}" value="{{$subject->id}}">{{$subject->name}}</option>
        @endforeach
    </select>
@endsection