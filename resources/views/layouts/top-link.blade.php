<ul class="nav navbar-top-links navbar-right">
    @if(Auth::guest())
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        @include('component.message')
        @include('component.task')
        @include('component.notification')
        @include('component.profile')
    @endif
</ul>
