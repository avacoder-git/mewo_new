<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'deseases') active   @endif">
    <a class="nav-link " href="{{route('deseases', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Болезни</span></a>
</li>
