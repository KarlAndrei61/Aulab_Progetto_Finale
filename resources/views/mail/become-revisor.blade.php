<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto - Vendi Facile</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- CDN google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    {{-- Font Awesome CDN --}}
    <script src="https://kit.fontawesome.com/0992f05ded.js" crossorigin="anonymous"></script>
    {{-- Bootstrap --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="Wrapper">
<div class="text-center d-flex flex-column justify-content-center m-2">
    <p class="lasgros fs-1">Presto</p>
</div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="lasgros">Un utente ha chiesto di lavorare con noi</h2>
                <h4 class="suoidati">Ecco i suoi dati:</h4>
                <p class="">Nome : {{$user->name}}</p>
                <p class="">Email: {{$user->email}}</p>
                <p class="lasgros"> Se vuoi renderlo revisor, clicca qui:</p>
                <a class="btn bottonerevisore" href="{{route('make.revisor', compact('user'))}}">Rendi revisor</a>
            </div>
        </div>
    </div>

</body>






