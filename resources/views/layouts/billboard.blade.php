<div id="header" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($billboards as $billboard)
            <li data-target="#header" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($billboards as $billboard)
            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                <a href="{{route('movies.show',$billboard->movie->id)}}"><img class="d-block w-100" src="{{asset($billboard->movie->background)}}" alt="Second slide"></a>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#header" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#header" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
