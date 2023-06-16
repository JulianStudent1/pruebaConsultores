
    @include('layouts/navbar')

    <br/><h2 style="text-align: center; font-family: sans-serif;">Ejercicio cinco</h2><br/>
    <div class="container card">
        <div class="card-header text-md-center">Subir imagen</div>

        <div class="card-body text-md-center">
            <form action="{{ route('ejecicioCinco.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="image">Imagen:</label>
                    <input type="file" name="image" required>
                </div><br/>

                <div>
                    <label for="title">Titulo:</label>
                    <input type="text" name="titulo" required>
                </div><br/>

                <div>
                    <label for="description">Descripcion:</label>
                    <textarea name="descripcion"></textarea>
                </div><br/>

                <button type="submit" class="btn btn-primary">Subir imagen</button>
            </form><br/>

            <h2>Imagen</h2>

            @foreach ($images as $image)
                <div>
                    <img src="{{ asset('storage/images/' . $image->nombre_archivo) }}" alt="{{ $image->titulo }}" style="width: 200px">
                    <p>{{ $image->titulo }}</p>
                    <p>{{ $image->descripcion }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>