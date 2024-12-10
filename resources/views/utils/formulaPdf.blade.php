<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .label {
            font-weight: bold;
        }
        .info {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Factura</h1>

        <div class="section">
            <h2>Datos Generales</h2>
            <p><span class="label">Código:</span> {{ $record->codigo }}</p>
            <p><span class="label">Cita:</span> {{ $record->cita }}</p>
            <p><span class="label">Notas Adicionales:</span> {{ $record->notas_adicionales }}</p>
            <p><span class="label">Cliente ID:</span> {{ $record->cliente_id }}</p>
            <p><span class="label">Montura ID:</span> {{ $record->montura_id }}</p>
            <p><span class="label">Doctor ID:</span> {{ $record->doctor_id }}</p>
        </div>

        <div class="section">
            <h2>Ojo Izquierdo</h2>
            <table>
                <thead>
                    <tr>
                        <th>Esfera</th>
                        <th>Cilindro</th>
                        <th>Eje</th>
                        <th>AV</th>
                        <th>ADD</th>
                        <th>DP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $record->ojo_izquierdo_esfera }}</td>
                        <td>{{ $record->ojo_izquierdo_cilindro }}</td>
                        <td>{{ $record->ojo_izquierdo_eje }}</td>
                        <td>{{ $record->ojo_izquierdo_av }}</td>
                        <td>{{ $record->ojo_izquierdo_add }}</td>
                        <td>{{ $record->ojo_izquierdo_dp }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2>Ojo Derecho</h2>
            <table>
                <thead>
                    <tr>
                        <th>Esfera</th>
                        <th>Cilindro</th>
                        <th>Eje</th>
                        <th>AV</th>
                        <th>ADD</th>
                        <th>DP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $record->ojo_derecho_esfera }}</td>
                        <td>{{ $record->ojo_derecho_cilindro }}</td>
                        <td>{{ $record->ojo_derecho_eje }}</td>
                        <td>{{ $record->ojo_derecho_av }}</td>
                        <td>{{ $record->ojo_derecho_add }}</td>
                        <td>{{ $record->ojo_derecho_dp }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2>Detalles del Lente</h2>
            <p><span class="label">Tipo de Lente:</span> {{ $record->tipo_lente }}</p>
            <p><span class="label">Valor del Lente:</span> {{ $record->valor_lente }}</p>
        </div>
    </div>
</body>
</html>
