<div class="left_col scroll-view">
    
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{asset('admin_page/img/img.jpg')}}" alt="" class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{$infoAdmin[0]->name}}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Menu</h3>
            <ul class="nav side-menu">
                <li><a href="{{Route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                <li><a  href="{{Route('userAdmin')}}"><i class="fa fa-user"></i> User</a></li>
                <li><a href="{{Route('subjectAdmin')}}"><i class="fa fa-book"></i> Subject</a></li>
                <li><a href="{{Route('postAdmin')}}"><i class="fa fa-newspaper-o"></i> Post</a></li>
                <li><a href="{{Route('examAdmin')}}"><i class="fa fa-building-o"></i> Exam</a></li>
            </ul>
        </div>
    </div>
</div>