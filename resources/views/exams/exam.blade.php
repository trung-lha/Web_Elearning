@extends('layouts.main')

@section('content')
    <div class="colorlib-classes">
			<div class="container">
				
				<div class="row">
					@foreach ($examForSub as $key)
						<div class="col-md-4 animate-box">
							
							<div class="classes">
								<div class="classes-img" style="background-image: url({{asset('web_page/images/classes-1.jpg')}});">
									{{-- <span class="price text-center"><small>Free</small></span> --}}
								</div>
								<div class="desc">
									<h3><a href="{{Route('examDetail', [$key->subject_id,$key->id])}}">{{$key->name}}</a></h3>
									<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
									{{-- <p><i class="fa fa-eye"></i> 10</p> --}}
								</div>
							</div>
							
						</div>
					@endforeach
				</div>
			</div>	
		</div>
@endsection