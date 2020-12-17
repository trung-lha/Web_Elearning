<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.elements.link')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col" style="position: fixed">
            @include('admin.elements.left-col')  
        </div>  

        <!-- top navigation -->
        <div class="top_nav">
            @include('admin.elements.head')
        </div>
        
        <div class="right_col" role="main">
            <!-- @yield('content') -->
            @include('admin.elements.list-user')
            @include('admin.elements.filter')
            @include('admin.elements.box-list')
            @include('admin.elements.box-pagination')
        </div>
        <footer>
            @include('admin/elements.footer')
        </footer>
        <!-- /footer -->
    </div>
</div>
@include('admin.elements.script')
</body>
</html>