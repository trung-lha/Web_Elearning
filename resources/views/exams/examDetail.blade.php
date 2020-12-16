@extends('layouts.main')
@section('content')
{{-- <aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url({{asset('web_page/images/toanhoc.jpg')}});">
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
<div class="colorlib-classes">
	<h2 class="col-md-offset-2">Bắt đầu làm bài thi</h2>
	<div class="container">
		<div class="row">
			<div class="col-10 col-md-offset-1">
				<div class="row row-pb-lg">
					<div class="col-md-9 animate-box">
						<div class="classes class-single" style="border: 1px solid black">
							<div class="desc desc2">
								<form action="" method="post">
									@foreach ($listQuestions as $key=>$question)
									<input type="hidden" value="exam1">
									<label for="ques1">Câu hỏi {{$key+1}}: </label><br>
									<span>
										<strong>{{$question->question}}</strong>
									</span><br>
									&nbsp;&nbsp;<input name="{{'answer'.($key+1)}}" type="radio" value="1" />&nbsp;&nbsp;A.
									<span>{{$question->answer_a}}</span><br>
									&nbsp;&nbsp;<input name="{{'answer'.($key+1)}}" type="radio" value="2" />&nbsp;&nbsp;B.
									<span>{{$question->answer_b}}</span><br>
									&nbsp;&nbsp;<input name="{{'answer'.($key+1)}}" type="radio" value="3" />&nbsp;&nbsp;C.
									<span>{{$question->answer_c}}</span><br>
									&nbsp;&nbsp;<input name="{{'answer'.($key+1)}}" type="radio" value="4" />&nbsp;&nbsp;D.
									<span>{{$question->answer_d}}</span><br><br>
									
									@endforeach
									<input type="submit" value="submit" class="btn btn-primary" onclick="myFunction()">
								</form>
							</div>
						</div>
					</div>
					
					<div class="col-md-2" style="background-color: red; text-align: center">
                        <span id="time" style="font-size: 40px; color : black;">90:00</span>
                        <script>
                            function startTimer(duration, display) {
                                var timer = duration, minutes, seconds;
                                // Countdown clock: 
                                var timeInterval = setInterval( () => {
                                    minutes = parseInt(timer / 60, 10)
                                    seconds = parseInt(timer % 60, 10);
                                    minutes = minutes < 10 ? "0" + minutes : minutes;
                                    seconds = seconds < 10 ? "0" + seconds : seconds;
                                    $("#time").html(minutes + ":" + seconds);
                                    timer--;
                                }, 1000);

                                };
                            window.onload = function () {
                                var timer = 60 * 90,
                                display = document.querySelector('#time');
                                startTimer(timer, display);
                            };
                        </script>
                        
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection