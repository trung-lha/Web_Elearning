<!DOCTYPE HTML>
<html>

@include('layouts.elements.head')

<body onbeforeunload="return checkLeave()">

	<!-- <div class="colorlib-loader"></div> -->

    @include('layouts.elements.nav')
	@yield('content')
	@include('layouts.elements.footer')
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop">
			<i class="icon-arrow-up2"></i>
		</a>
	</div>

	@include('layouts.elements.script')

</body>

</html>