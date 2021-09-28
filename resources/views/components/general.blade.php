<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'general') active   @endif">
    <a class="nav-link " href="{{route('general')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Обшие ссилки</span></a>
</li>
