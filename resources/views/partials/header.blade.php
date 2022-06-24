
<header>
    <div class="_container d-flex justify-content-between align-items-center">


        <div class="d-flex align-items-center"><img src="img/dc-logo.png" alt=""></div>
        <ul>
            <li><a href="/">home</a></li>
        @foreach ($headerMenu as $link)
            <li>
                <a href="{{$link}}">{{ $link }}</a>
            </li>
        @endforeach
        </ul>


    </div>
</header>

