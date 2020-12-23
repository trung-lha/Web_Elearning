<!DOCTYPE html>
<html lang="en">
    {{-- @extends('layouts.main') --}}
    @include('layouts.elements.head')

<body>
    <div id="postdetail">
        @include('layouts.elements.nav')
    <hr>  
    <div class="h2"style="height: 400px;">
        <h1 style="height: 100px"></h1>
            <span class="title" style="font-size: 75px; color: white">Let's study</span>
      
    </div>
    <hr>
    <div style="height: 120px;text-align: center" >
        
        <h3 class="col-md-3"></h3>
        <h3 class="ten_bh col-md-6" ><a style="text-align: center">Phương pháp tính tích phân và bài tập giải tích phân cơ bản</a></h3>
    </div>
        <div style="background-image: url({{asset('images/post/capture4.jpg')}})">
        <div class="container">
            <div class="row" style="background-color: white ; margin-top:0px">
                <div class="col-md-12 col-md-offset-1">
                    <div class="row row-pb-lg">
                        <div class="col-md-10 animate-box">
                            <div class="classes class-single">
                                <div class="desc desc2">
                                    
                                    <p>Chúng ta hãy cùng điểm qua Tính chất của tích phân và Công thức tính tích phân cơ bản.</p>
                                    <p>1. Tính chất của tích phân xác định</p>
                                    <p><img src="{{asset('images/post/tichphan.png')}}" alt=""></p>
                                    <blockquote>
                                       
                                    </blockquote>
                                    <h3></h3>
                                    <p></p>

                                    <p></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>	
    </div>
    <hr>
    <div>
    <h2 style="text-align: center">Các bài học khác</h2>
</div>
<div class="container-fluid">
    <div class="row">
<div class="col-md-3" style="text-align: center">
<img class="img_bh" src="{{asset('images/post/slider1.jpg')}}" alt="">
Bài học số 2
</div>
<div class="col-md-1 style="background-color: white"></div>
<div class="col-md-3" style="text-align: center">
    <img class="img_bh" src="{{asset('images/post/slider2.jpg')}}" alt="">
    Bài học số 3
</div>
<div class="col-md-1" style="background-color: white"></div>
<div class="col-md-3" style="text-align: center">
    <img class="img_bh" src="{{asset('images/post/slider3.jpg')}}" alt="">
    Bài học số 4
</div>
</div>
</div>
    
        @include('layouts.elements.footer')  
    </div>
    @include('layouts.elements.script')
</body>
</html>
<style>
    .classes-img{
        background-image:url({{asset('images/post/news2.jpg')}})
    }
    .h2{
        background-image:url({{asset('images/post/capture3.png')}});
        text-align:center
    }
    .title{
        font-family: 'Times New Roman'
    }
    .ten_bh{
        font-size: 38px;
    }
    .row{
        border: 10px
    }
    .img_bh{
        width: 350px;
        object-fit: contain
    }
</style>