<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('user.dashboard') }}" class="navbar-brand mx-4 mb-3 text-danger">Job Web Application</a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                @if(Auth::user()->is_role == 'user')
                <img class="rounded-circle" src="{{ asset('/uploads/user/'.Auth::user()->users_img) }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                @endif

            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->is_role }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('user.dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        </div>
</div>
</nav>
</div>