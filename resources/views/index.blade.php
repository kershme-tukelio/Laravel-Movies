<html>
    <head>
        <title>Movies</title>
    </head>
    <body>
        <div>
            @foreach($movies as $movie)
                <h2><a href="/{{$movie->id}}">{{$movie->title}}</a></h2>
                <p>{{$movie->zaplet}}</p>
            @endforeach
        </div>
    </body>
</html>