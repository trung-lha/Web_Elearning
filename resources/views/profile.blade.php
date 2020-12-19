@extends('layouts.main')

@section('content')
<div id="colorlib-contact" style="background-color: #e6dddd">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                
                @include('templates.success')
                @include('templates.alert')
               <div>
                  <h1 style="color:black">MangeMe</h1> 
               </div>
                <div class="form-group"> 
                    <div class="col-md-3" style="background-color: white">
                        <div style="text-align: center; margin-top: 10px">
                        <h3 style="color:rgb(7, 201, 201)">Profile image</h3>
                    </div>
                    <div id="box-avatar">
                            <p style="margin-top: 0px;"><img class="ava-image" src="{{asset('images/user/thailuu1.jpg')}}"  alt="人を信じる.jpg" style="width: 50%"></p>                           
                    </div>  
                    <div class="info">
                        <p>Lưu Tiến Thái</p>    
                    </div>
                </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-1">
                        <p>Tên </p>
                        <br>
                      <br>
                        <p>Email</p>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nhập tên bạn" required="required" name="name" type="text" value="Lưu Tiến Thái"> 
                        <br>
                        <input class="form-control" placeholder="Nhập Email" required="required" style="height:50px" name="email" type="email" value="thailuu9928@gmail.com">  
                    <br>
                                <input class="form-control" style="height:50px" name="avatar" type="file">
                                <br>
                                <input class="btn btn-primary" type="submit" value="Xác nhận">
                        <input name="avatar_current" type="hidden" value="人を信じる.jpg">
                    </div>           
                </div>         
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    #box-avatar{
        height: 40%;
        width:100%;
        text-align: center;
            margin-top: 50px;
    }
    .ava-image{
        object-fit: cover;
            border: 2px black solid;
            border-radius: 50%;
            padding: 5px;




    }
    .info{
        text-align: center;
    }
    </style> 