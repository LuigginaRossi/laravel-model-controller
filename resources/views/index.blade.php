<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    @vite('resources/js/app.js')
</head>

<body class="container py-5 bg-dark">  
    <h1 class="text-center py-5 text-light">Movies List</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Title: {{$movie->title}}</h5>
                        <h6> Origginal Title: {{$movie->original_title}}</h6>
                        <h6> Nationality: {{$movie->nationality}}</h6>
                        <h6> Date :{{$movie->date}}</h6>
                        <h6> Vote: {{$movie->vote}}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    //alt e selezioni
</body>
</html>










