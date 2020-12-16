@extends('layouts.main')

@section('content')
    <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url({{asset('web_page/images/img_bg_1.jpg')}});">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<!-- <div class="slider-text-inner text-center">
				   					<h1>Best Online Learning System</h1>
				   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div> -->
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url({{asset('web_page/images/img_bg_2.jpg')}});">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<!-- <div class="slider-text-inner text-center">
				   					<h1>Online Free Course</h1>
				   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Free Trial</a></p>
				   				</div> -->
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url({{asset('web_page/images/img_bg_3.jpg')}});">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<!-- <div class="slider-text-inner text-center">
				   					<h1>Education is a Key to Success</h1>
				   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div> -->
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url({{asset('web_page/images/img_bg_4.jpg')}});">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<!-- <div class="slider-text-inner text-center">
				   					<h1>Best Online Learning Center</h1>
				   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div> -->
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

    <div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="about-desc animate-box">
							<h2>Website dành cho học sinh lớp 12</h2>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
													aria-expanded="true" aria-controls="collapseOne">Tại sao nên chọn
													chúng tôi?
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
											aria-labelledby="headingOne">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-12">
														<p>Chúng tôi cung cấp các bài học mới nhất, sát nhất với chương
															trình lớp 12. Những đề thi thử chất lượng, được chọn lọc bởi
															nhiều giáo viên nổi tiếng </p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion"
													href="#collapseTwo" aria-expanded="false"
													aria-controls="collapseTwo">Chúng tôi có những gì?
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="headingTwo">
											<div class="panel-body">
												<p>Chúng tôi cung cấp các
													<strong>bài học, thi thử</strong> các môn học trong chương trình lớp
													12 </p>
												<ul>
													<li>Toán học</li>
													<li>Vật Lý</li>
													<li>Hoá Học</li>
													<li>Sinh học</li>
													<li>Anh văn</li>
													<li>Giáo dục công dân</li>
												</ul>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="colorlib-trainers">
				<div class="container">
					
				</div>
			</div>

			<div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_2.jpg);"
				data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
							<h2>Đăng ký</h2>
							<p>Đăng ký để nhận thông tin mới nhất về các bài học</p>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-6 col-md-offset-3">
							<div class="row">
								<div class="col-md-12">
									<form class="form-inline qbstp-header-subscribe">
										<div class="col-three-forth">
											<div class="form-group">
												<input type="text" class="form-control" id="email"
													placeholder="Email của bạn">
											</div>
										</div>
										<div class="col-one-third">
											<div class="form-group">
												<button type="submit" class="btn btn-primary">Đăng ký ngay</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection