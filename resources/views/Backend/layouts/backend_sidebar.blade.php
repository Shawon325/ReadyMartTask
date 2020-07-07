    <div class="sidebar">
        <div class="sidebar-content">

            <div class="user-menu dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="backend_assets/images/demo/users/face3.png" alt="">
                    <div class="user-info">
                        Md. Shawon <span>Web Developer</span>
                    </div>
                </a>
            </div>

            <ul class="navigation">
                <li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a href="{{ url('/admin') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
                <li class="{{ (request()->is('post/create')) ? 'active' : '' }}"><a href="{{route('post.create')}}"><span>Add Post</span> <i class="icon-plus"></i></a></li>
                <li class="{{ (request()->is('post')) ? 'active' : '' }}"><a href="{{ url('/post') }}"><span>View Post</span> <i class="icon-list"></i></a></li>
            </ul>
        </div>
    </div>
