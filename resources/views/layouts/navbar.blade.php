<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba técnica</title>
    @vite(['resources/js/app.js'])
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" >Prueba</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('ejercicio_uno') }}">Ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('ejercicio_dos') }}">Ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('ejercicio_tres') }}">Ejercicio 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('ejercicio_cuatro') }}">Ejercicio 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Ejercicio 5</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    