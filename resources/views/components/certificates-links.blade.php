<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'certificates') active   @endif">
    <a class="nav-link " href="{{route('certificates', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Сертификаты</span></a>
</li>
