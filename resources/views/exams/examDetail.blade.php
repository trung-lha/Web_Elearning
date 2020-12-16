@extends('layouts.main')
@section('content')
<aside id="colorlib-hero">
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
</aside>
<div class="colorlib-classes">
	<h2 class="col-md-offset-2">Bắt đầu làm bài thi</h2>
	<div class="container">
		<div class="row">
			<div class="col-10 col-md-offset-1">
				<div class="row row-pb-lg">
					<div class="col-md-9 animate-box">
						<div class="classes class-single" style="border: 1px solid black">
							<div class="desc desc2">
								<form action="test.php" method="post">
									<!-- Cau 1 -->
									<input type="hidden" value="exam1">
									<label for="ques1">Câu hỏi 1: </label><br>
									<span>Tìm giá trị lớn nhất M và giá trị nhỏ nhất m của y = x
										<sup>4</sup> - 2x
										<sup>2</sup> + 3 tr&ecirc;n [0; 2] Lorem ipsum dolor sit amet consectetur
										adipisicing elit. Perspiciatis odio quis eaque deleniti nam ipsam culpa. Illo
										atque aliquam, quibusdam, voluptatem ex sint maiores tempore nisi ipsa minus
										repellendus et!:
									</span><br>
									&nbsp;&nbsp;<input name="ques1" type="radio" value="1" />&nbsp;&nbsp;A.
									<span>M= 5, m = 2</span><br>
									&nbsp;&nbsp;<input name="ques1" type="radio" value="2" />&nbsp;&nbsp;B.
									<span>M= 5, m = 2</span><br>
									&nbsp;&nbsp;<input name="ques1" type="radio" value="3" />&nbsp;&nbsp;C.
									<span>M= 5, m = 2</span><br>
									&nbsp;&nbsp;<input name="ques1" type="radio" value="4" />&nbsp;&nbsp;D.
									<span>M= 5, m = 2</span><br><br>
									<input type="submit" value="submit" class="btn btn-primary" onclick="stop()">
									<!-- Cau 2 -->
									
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3" style="background-color: red;">
					<div>
            <input type="button" value="Start" onclick="start()"/>
            {{-- <input type="button" value="Stop" onclick="stop()"/>  <br/> <br/> --}}
        </div>
         
        <div>
            <span id="h">Giờ</span> :
            <span id="m">Phút</span> :
            <span id="s">Giây</span>
        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script language="javascript">
 
	var h = 2; // Giờ
	var m = 00; // Phút
	var s = 00; // Giây
	 
	var timeout = null; // Timeout
	 
	function start()
	{
		if (h === null)
{
h = parseInt(document.getElementById('h_val').value);
m = parseInt(document.getElementById('m_val').value);
s = parseInt(document.getElementById('s_val').value);
}

/*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
// Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
//  - giảm số phút xuống 1 đơn vị
//  - thiết lập số giây lại 59
if (s === -1){
m -= 1;
s = 59;
}

// Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
//  - giảm số giờ xuống 1 đơn vị
//  - thiết lập số phút lại 59
if (m === -1){
h -= 1;
m = 59;
}

// Nếu số giờ = -1 tức là đã hết giờ, lúc này:
//  - Dừng chương trình
if (h == -1){
clearTimeout(timeout);
alert('Hết giờ');
return false;
}

/*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
document.getElementById('h').innerText = h.toString();
document.getElementById('m').innerText = m.toString();
document.getElementById('s').innerText = s.toString();

/*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
timeout = setTimeout(function(){
s--;
start();
}, 1000);
}
		// Code
	
	 
	function stop(){
		clearTimeout(timeout);
	}
</script>
@endsection

