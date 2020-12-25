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
                                <div class="desc desc2" id="formQuestion">
                                    <form id="main-form" method="get" enctype="multipart/form-data" action="{{ route('processExam') }}">
                                        <input type="hidden" value="exam1">
                                        <?php $count = count($listQuestions); ?>
                                        @foreach ($listQuestions as $key => $question)
                                            <label for="{{ $key + 1 }}">Câu hỏi {{ $key + 1 }}: </label><br>
                                            <span>
                                                <strong>{{ $question->question }}</strong>
                                            </span><br>
                                            <input name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="1" />
                                            <span id="{{ 'question' . ($key + 1) . 1}}">  A. {{ $question->answer_a }}</span><br>
                                            <input  name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="2" />
                                            <span id="{{ 'question' . ($key + 1) . 2}}">  B. {{ $question->answer_b }}</span><br>
                                            <input  name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="3" />
                                            <span id="{{ 'question' . ($key + 1) . 3}}">  C. {{ $question->answer_c }}</span><br>
                                            <input name="{{ 'question' . ($key + 1) }}" type="radio"
                                                value="4" />
                                            <span id="{{ 'question' . ($key + 1) . 4}}">  D. {{ $question->answer_d }}</span><br><br>

                                        @endforeach
                                        <button type="submit" class="btn btn-primary" id="submitExam" >Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2" style="background-color: green; text-align: center">
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
                                        clearInterval(timeInterval);
                                        var timeView = duration - timer - 1;
                                        minutes = parseInt(timeView / 60, 10);
                                        seconds = parseInt(timeView % 60, 10);
                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                        seconds = seconds < 10 ? "0" + seconds : seconds;
                                        var result = minutes + ":" + seconds
                                       
                                    }, duration * 1000 + 1000);

                                    $("#submitExam").click(function(e) {
                                        var timeView = duration - timer - 1;
                                        minutes = parseInt(timeView / 60, 10);
                                        seconds = parseInt(timeView % 60, 10);
                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                        seconds = seconds < 10 ? "0" + seconds : seconds;
                                        var result = minutes + ":" + seconds;
                                        var idExam = "{{ $listQuestions[0]->exam_id }}";
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
                                                        url: "{{ route('processExam') }}",
                                                        method: "get",
                                                        dataType: "Json",
                                                        data: {
                                                            time: result,
                                                            id: idExam,
                                                            arr: $("#main-form").serializeArray(),
                                                        },
                                                        success: function(result) {
                                                            if($.isEmptyObject(result.error)){
                                                                swal({
                                                                    title: "Nộp bài thành công!",
                                                                    text: "Xem kết quả cuối trang",
                                                                    icon: "success",
                                                                    button: "OK",
                                                                });
                                                                clearInterval(timeInterval);
                                                                clearTimeout(timeout);
                                                                document.getElementById("submitExam").disabled = true;
                                                                document.getElementById("formQuestion").disabled = true;
                                                                $("#result").html(result.data.xhtml);

                                                                // highlight form answer after submit
                                                                var highLight = result.data.correct;
                                                                var highLightTrue = result.data.selectedAnswer;
                                                                for (var i=0;i<result.data.countSelected;i++){
                                                                    highLight[i]['correct_answer'] = "question"+(i+1)+highLight[i]['correct_answer'];
                                                                    highLightTrue[i] = "question"+(i+1)+highLightTrue[i];
                                                                }
                                                                for (var i=0;i<result.data.countSelected;i++){
                                                                    console.log(highLight[i]['correct_answer']);
                                                                   
                                                                    if (highLightTrue[i] == highLight[i]['correct_answer']){
                                                                        document.getElementById(highLight[i]['correct_answer']).style.color = "green";
                                                                    } else {
                                                                        document.getElementById(highLight[i]['correct_answer']).style.color = "red";
                                                                    }
                                                                    document.getElementsByName("question"+(i+1)).forEach((e) => {
                                                                        e.disabled = true;
                                                                    });
                                                                }
                                                            }else{
                                                                swal(result.error, {
                                                                    icon: "warning",
                                                                });
                                                            }
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
<script>
    function checkLeave() {
        var msg = "Bạn đang làm bài thi có chắc bạn muốn rời khỏi trang này";
        return msg;
    }

</script>
@endsection
