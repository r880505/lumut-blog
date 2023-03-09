    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1>Lumut Simple Blog</h1>
            </div>
        </div>
    </div>
    <!--header-top-end-->
    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">
                <div class="navigation">
                    <span class="menu"></span>
                    <ul class="navig">
                        <li><a href="{{url('/')}}" @if(Request::segment('1') == '') class="active" @endif>Home</a></li>
                    </ul>
                </div>
                <div class="header-right">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>