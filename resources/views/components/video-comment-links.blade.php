<!-- Nav Item - Charts -->
<li class="nav-item @if(session()->has(['activeness']) && session('activeness')== 'video_comments') active   @endif">
    <a class="nav-link " href="{{route('video_comments', ['size'=>25])}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Видео отзыв</span></a>
</li>
