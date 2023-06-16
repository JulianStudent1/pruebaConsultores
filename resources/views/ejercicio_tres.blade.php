
    @include('layouts/navbar')

    <br/><h2 style="text-align: center; font-family: sans-serif;">Ejercicio tres</h2><br/>
    <div class="container">
        <table id="usuarios" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $dato)
                <tr>
                    <td>{{ $dato->id }}</td>
                    <td>{{ $dato->nombre }}</td>
                    <td>{{ $dato->correo }}</td>
                    <td>{{ $dato->fecha_registro }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><br/><br/><br/>
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#usuarios').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>