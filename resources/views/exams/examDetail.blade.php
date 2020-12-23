@extends('layouts.main')
@section('content')
    {{-- <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{ asset('web_page/images/toanhoc.jpg') }});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <img src="" alt="">
                                    <h1>ĐỀ 1</h1>
                                    <h2>
                                        <span>
                                            <a href="index.html">TRANG CHỦ</a> |
                                            <a href="exam.html"> Toán học </a>| đề 1</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside> --}}
    <div class="h2"style="height: 400px;">
        <h1 style="height: 100px"></h1>
            <span class="title" style="font-size: 75px; color: white">Let's go</span>
      
    </div>
    <hr>
    <div style="height: 120px;text-align: center" >
    </div>
    
    <div style="background-image:url({{asset('images/post/capture4.jpg')}})" >
        <div class="container" id="kh_bv">
            <h2 style="margin-left:360px ">Bắt đầu làm bài thi</h2>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-10 col-md-offset-1">
                    <div class="row row-pb-lg">
                        <div class="col-md-9 animate-box">
                            <div class="classes class-single" style="border: 1px solid black">
                                <div class="desc desc2">
                                    <form id="main-form" method="get" enctype="multipart/form-data" action="{{ route('ajax') }}">
                                        <input type="hidden" value="exam1">
                                        @foreach ($listQuestions as $key => $question)
                                            <label for="{{ $key + 1 }}">Câu hỏi {{ $key + 1 }}: </label><br>
                                            <span>
                                                <strong>{{ $question->question }}</strong>
                                            </span><br>
                                            &nbsp;&nbsp;<input name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="1" />&nbsp;&nbsp;A.
                                            <span>{{ $question->answer_a }}</span><br>
                                            &nbsp;&nbsp;<input name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="2" />&nbsp;&nbsp;B.
                                            <span>{{ $question->answer_b }}</span><br>
                                            &nbsp;&nbsp;<input name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="3" />&nbsp;&nbsp;C.
                                            <span>{{ $question->answer_c }}</span><br>
                                            &nbsp;&nbsp;<input name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="4" />&nbsp;&nbsp;D.
                                            <span>{{ $question->answer_d }}</span><br><br>

                                        @endforeach
                                        <button type="submit" class="btn btn-primary" id="btn-click">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2" style="background-color: red; text-align: center">
                            <span id="time" style="font-size: 40px; color : black;">90:00</span>
                            {{-- Handle Timer in clock --}}
                            <script>
                                function startTimer(duration, display) {
                                    var timer = duration,
                                        minutes, seconds;
                                    // Countdown clock: 
                                    var timeInterval = setInterval(() => {
                                        minutes = parseInt(timer / 60, 10)
                                        seconds = parseInt(timer % 60, 10);
                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                        seconds = seconds < 10 ? "0" + seconds : seconds;
                                        $("#time").html(minutes + ":" + seconds);
                                        timer--;
                                    }, 1000);

                                    // Set timeout: 
                                    var timeout = setTimeout(() => {
                                        alert('TIME OUT!!!');
                                        alert('Xem kết quả ở cuối trang!');
                                        clearInterval(timeInterval);
                                        var timeView = duration - timer - 1;
                                        minutes = parseInt(timeView / 60, 10);
                                        seconds = parseInt(timeView % 60, 10);
                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                        seconds = seconds < 10 ? "0" + seconds : seconds;
                                        var result = minutes + ":" + seconds
                                        var idExam = "{{ $listQuestions[0]->exam_id }}";
                                    }, duration * 1000 + 1000);

                                    $("#btn-click").click(function(e) {
                                        var timeView = duration - timer - 1;
                                        minutes = parseInt(timeView / 60, 10);
                                        seconds = parseInt(timeView % 60, 10);
                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                        seconds = seconds < 10 ? "0" + seconds : seconds;
                                        var result = minutes + ":" + seconds;
                                        var idExam = "{{ $question->exam_id }}";
                                        swal({
                                                title: "Bạn muốn nộp bài?",
                                                icon: "warning",
                                                buttons: true,
                                                dangerMode: true,
                                            })
                                            .then((willSubmit) => {
                                                if (willSubmit) {
                                                    // console.log($("#main-form").serializeArray());
                                                    $.ajax({
                                                        url: "{{ route('ajax') }}",
                                                        method: "get",
                                                        dataType: "Json",
                                                        data: {
                                                            time: result,
                                                            id: idExam,
                                                            arr: $("#main-form").serializeArray(),
                                                        },
                                                        success: function(result) {
                                                            clearInterval(timeInterval);
                                                            clearTimeout(timeout);
                                                            $("#result").html(result.data.xhtml);
                                                            console.log(result.data.xhtml);
                                                        }
                                                    });
                                                } else {
                                                    // swal("Your imaginary file is safe!");
                                                }
                                            });
                                        // Block submit form:
                                        e.preventDefault();
                                    });
                                };
                                window.onload = function() {
                                    var timer = 60 * 90,
                                        display = document.querySelector('#time');
                                    startTimer(timer, display);
                                };

                            </script>
                        </div>
                    </div>
                    <div class="row row-pb-lg" id="result" style="width: 100%" >
                    </div>
                </div>
            </div>
        </div>
    
</div>
<hr>
<div>
<h2 style="text-align: center">Các bài thi khác</h2>
</div>
<div class="container-fluid">
    <div class="col-md-2"></div>
<div class="col-md-8">
    <div class="row">
<img class="img_bh" src="{{asset('images/post/slider1.jpg')}}" alt="">
Bài thi số 2
</div>
<br>
<div class="row">
    <img class="img_bh" src="{{asset('images/post/slider2.jpg')}}" alt="">
    Bài thi số 3
    </div>
    <br>
    <div class="row">
        <img class="img_bh" src="{{asset('images/post/slider3.jpg')}}" alt="">
        Bài thi số 4
        </div>
</div>
<div class="col-md-2"></div>
</div>

    
@endsection
<style>
    .img_bh{
        width: 350px;
        object-fit: contain;
    }
    .h2{
        background-image:url({{asset('images/post/capture.JPG')}});
        text-align:center
    }
   
    .colorlib-classes{
        
        margin-top: 0px;
    }
    #kh_bv{
        background-color: white;
    }
</style>