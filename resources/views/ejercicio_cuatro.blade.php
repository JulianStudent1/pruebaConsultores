
    @include('layouts/navbar')

    <br/><h2 style="text-align: center; font-family: sans-serif;">Ejercicio cuatro</h2><br/>
    <div class="container card">
        <div class="card-header text-md-center">Calculadora de suma de dígitos</div>

        <div class="card-body text-md-center">
        <form>
            <label for="numero">Ingrese los números enteros separados por el signo de coma:</label>
            <input type="text" id="numero" required><br/>
            <span id="mostrarError"></span><br/>
            <button type="button" class="btn btn-primary" onclick="calcularSumaDigitos()">Sumar</button>
        </form>
        <h2 id="resultado"></h2>
        </div>
    </div>

    <script>
        function validarNumero(numero) {
            var regex = /^\d+$/;
            return regex.test(numero);  
        }

        function calcularSumaDigitos() {
            document.getElementById('resultado').textContent = '';
            document.getElementById('mostrarError').textContent = '';

            var numero = document.getElementById('numero').value.split(',');
            var sumaDigitos = 0;
            var validado = true;
            
            if ( numero.length === 0) {
                document.getElementById('mostrarError').textContent = 'Por favor, ingrese al menos un número entero.';
                return;
            }

            for (var i = 0; i < numero.length; i++) {
                if (!validarNumero(numero[i])) {
                    if (numero[i].trim() === '') {
                        document.getElementById('mostrarError').textContent = 'Ingreso un valor vacio antes o despúes de una coma.';
                        validado = false; 
                        break;
                    }
                    validado = false;
                    document.getElementById('mostrarError').textContent = 'El valor '+ numero[i] + ' no es valido, por favor, ingrese un número entero.';
                    break;
                }
                sumaDigitos += parseInt(numero[i]);
            }


            if (validado === true) {
                document.getElementById('resultado').textContent = 'La suma de los dígitos es: ' + sumaDigitos;
                return;
            }
        }
    </script>
</body>
</html>