<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'users') active   @endif">
    <a class="nav-link " href="{{route('users')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Пользователи</span></a>
</li>
