<nav class="colorlib-nav" role="navigation">
  <div class="upper-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-4">
          <p>Chào mừng đến với trang web của chúng tôi</p>
        </div>
        <div class="col-xs-6 col-md-push-2 text-right">
          <p>
            <ul class="colorlib-social-icons">
              <li>
                <a href="#">
                  <i class="icon-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon-dribbble"></i>
                </a>
              </li>
            </ul>
          </p>
          <!-- <p class="btn-apply">
            <a href="#">Apply Now</a>
          </p> -->
        </div>
      </div>
    </div>
  </div>
  <div class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div id="colorlib-logo">
            <a href="{{Route('home')}}">e-learning</a>
          </div>
        </div>
        <div class="col-md-10 text-right menu-1">
          <ul>
            <li class="active">
              <a href="{{Route('home')}}">Trang chủ</a>
            </li>
            <li class="has-dropdown">
              <a style="cursor: default">Thi thử</a>
              <ul class="dropdown">
              
              @foreach ($listSubject as $key)
                  <li>
                  <a href="{{Route('showSubject',$key->id)}}">{{$key->name}}</a>
                </li>
              @endforeach
                
              </ul>
            </li>
            <li class="has-dropdown">
              <a style="cursor: default">Học tập</a>
              <ul class="dropdown">
                @foreach ($listSubject as $key)
                  <li>
                  <a href="{{Route('showPost',$key->id)}}">{{$key->name}}</a>
                </li>
              @endforeach
              </ul>
            </li>
            {{-- <li>
              <a href="news.html">Bài viết mới</a>
            </li>
            <li>
              <a href="about.html">Về chúng tôi</a>
            </li>
            <li><a href="contact.html">Liên hệ</a></li> --}}
            @if (Auth::user())
                <li class="has-dropdown">
              <a style="cursor: default">
                <i class="fas fa-bars" style="font-size: 30px;"></i>
              </a>
              <ul class="dropdown">
                @if (Auth::user()->role_id == 1)
                    <li>
                  <a href="{{Route('homeAdmin')}}">Admin</a>
                 </li>
                @endif
                
                <li>
                  <a href="{{Route('showInfo')}}">Thông tin</a>
                </li>
                <li>
                <form action="{{route('logout')}}" method="POST">
                {{csrf_field()}}
                  <a><button type="submit">Đăng xuất</button></a>
                </form>
                  
                </li>
              </ul>
            </li>
            @else
            <li class="btn-cta">
              <a href="{{route('login')}}">
                <span>Đăng nhập</span>
              </a>
            </li>
            @endif
            
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</nav>