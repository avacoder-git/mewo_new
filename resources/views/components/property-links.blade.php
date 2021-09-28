<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'properties') active   @endif">
    <a class="nav-link " href="{{route('properties', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Состав</span></a>
</li>
