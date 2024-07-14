<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <!-- film -->
    @include('shared.header')
    
    <main>
        <div class="container text-center">
            <div class="row row-gap-3">
                @foreach($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body height">
                            <h3 class="card-title pb-3">{{$movie['title']}}</h3>
                            <p><strong>Nazionalità:</strong> {{$movie['nationality']}}</p>
                            <p><strong>Data di uscita:</strong> {{$movie['date']}}</p>
                            <p><strong>Voti:</strong> {{$movie['vote']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>