    @include('layouts/navbar')
    <br/><h2 style="text-align: center; font-family: sans-serif;">Ejercicio dos</h2><br/>

    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!--<form action="{{ route('ejecicioDos.importar') }}" method="POST" enctype="multipart/form-data">-->
    <form">
        @csrf
        <input type="file" name="archivo" accept=".csv">
        <button type="submit">Importar</button>
    </form>