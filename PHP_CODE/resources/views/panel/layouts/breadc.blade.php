<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if(isset($path) && is_array($path))
            @foreach($path as $page => $link)
            @if(end($path) != $link)
            <li class="breadcrumb-item"><a href="{{$link}}">{{$page}}</a></li>
            @else
            <li class="breadcrumb-item active" aria-current="page">{{$page}}</li>
            @endif
            @endforeach
        @endif
    </ol>
</nav>