<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'applications') active   @endif">
    <a class="nav-link " href="{{route('applications', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Заявки</span></a>
</li>
