@extends('layouts.main')

@section('content')
{{-- <img src="{{asset('images/post/capture2.jpg')}}" alt=""> --}}
<div id="colorlib-contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">

                @include('templates.success')
                @include('templates.alert')
                <div>
                    <h1 style="color:black">Thông tin cá nhân</h1>
                </div>
                <div class="form-group">
                    <div class="col-md-5">
                        <div style="text-align: center; margin-top: 10px">
                            <h3 style="color:rgb(7, 201, 201)">Ảnh đại diện</h3>
                        </div>
                        <div id="box-avatar">
                            <p style="margin-top: 0px;"><img class="ava-image"
                                src="{{asset('storage/images/'.Auth::user()->avatar)}}" alt="avatar" style="width: 50%"></p>
                                <br>
                                {{-- <div style="margin-left: 80px ">
                                    
                                </div> --}}
                            </div>
                        
                        {{-- <div class="info">
                            <h4><strong>Ảnh đại diện</strong></h4>
                        </div> --}}
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-1">
                        <p>Tên </p>
                        <br>
                        <br>
                        <p>Email</p>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <form action="{{Route('userEditInfo')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input class="form-control" placeholder="Nhập tên bạn" required="required" name="name"
                                type="text" value="{{$info[0]->name}}">
                            <br>
                            <input class="form-control" placeholder="Nhập Email" required="required" style="height:50px"
                                name="email" type="email" value="{{$info[0]->email}}">
                            <br>
                                <input name="avatar" type="file">   
                            <br>
                            <input class="btn btn-primary" type="submit" value="Xác nhận">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    #box-avatar {
        height: 60%;
        width: 100%;
        text-align: center;
        margin-top: 50px;
    }

    .ava-image {
        object-fit: cover;
        border: 1px black solid;
        border-radius: 100%;
        padding: 5px;
    }

    .info {
        text-align: center;
    }
</style>