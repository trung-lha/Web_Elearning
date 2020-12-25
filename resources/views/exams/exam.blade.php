@extends('layouts.main')

@section('content')
<div class="colorlib-classes">
	<div class="container">

		<div class="row">
			<h3>Tuyển tập đề thi môn {{$examForSub[0]->subjectName}}</h3>
			@foreach ($examForSub as $key=>$exam)
			<div class="col-md-4 animate-box">

				<div class="classes">
					<div class="classes-img" style="background-image: url({{asset('web_page/images/classes-1.jpg')}});">
						{{-- <span class="fa fa-eye"><small>1</small><span> --}}
						<span class="price text-center"><small>Free</small></span>
					</div>
					<div class="desc">
						<h3><a href="{{Route('examDetail', [$exam->subject_id,$exam->exam_id])}}">Bài thi thử {{$exam->subjectName}} số {{$key+1}}</a></h3>
						{{-- <p>Pointing has no control about the blind texts it is an almost unorthographic life</p> --}}
						<p><i class="fa fa-eye">  {{$exam->viewed}}</i></p>
					</div>
				</div>

			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection