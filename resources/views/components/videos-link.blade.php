<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'videos') active   @endif">
    <a class="nav-link " href="{{route('videos', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Видео</span></a>
</li>
