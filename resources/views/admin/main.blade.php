<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin_page/img/favicon.ico')}}" type="image/ico"/>
    @include('admin.elements.link')
    {{-- @include('admin.elements.head') --}}
</head>
<body class="nav-sm">
    {{-- nav-md --}}
    
<div class="container body">
    <div class="main_container">
        @include('admin.elements.boxleft')
                <div class="top_nav">
                    {{-- @include('admin/elements/top_nav') --}}
                    @include('admin.elements.head')
                </div>
            
        
        <!-- to navigation -->
       
        
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <footer>
            {{-- @include('admin/elements.footer') --}}
        </footer>
        <!-- /footer -->
    </div>
</div>
@include('admin.elements.script')
</body>
</html>