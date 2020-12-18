<!DOCTYPE html>
<html lang="en">
    {{-- @extends('layouts.main') --}}
    @include('layouts.elements.head')

<body>
    <div id="postdetail">
        @include('layouts.elements.nav')
    <hr>  
    <div class="colorlib-classes">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="row row-pb-lg">
                        <div class="col-md-10 animate-box">
                            <div class="classes class-single">
                                <div class="classes-img" >
                                    
                                </div>
                                <div class="desc desc2">
                                    <h3><a>Phương pháp tính tích phân và bài tập giải tích phân cơ bản</a></h3>
                                    <p>Chúng ta hãy cùng điểm qua Tính chất của tích phân và Công thức tính tích phân cơ bản.</p>
                                    <p>1. Tính chất của tích phân xác định</p>
                                    <p><img src="{{asset('images/post/tichphan.png')}}" alt=""></p>
                                    <blockquote>
                                       
                                    </blockquote>
                                    <h3></h3>
                                    <p></p>

                                    <p></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>	
    </div>
        @include('layouts.elements.footer')  
    </div>
    @include('layouts.elements.script')
</body>
</html>
<style>
    .classes-img{
        background-image:url({{asset('images/post/news2.jpg')}})
    }
</style>