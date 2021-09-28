<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'coworkers') active   @endif">
    <a class="nav-link " href="{{route('coworkers', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Рекомендации</span></a>
</li>
