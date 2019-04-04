<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aserweb</title>
</head>
<body>
    <div>
        Respuesta a Solicitud 
    </div>

    <p>Hola! {!! $solicitud->nombre !!} Su cita registrada el dia {!! $solicitud->fecha_inicio !!}</p>
    <p>Ha sido aprobada</p>s
    <ul>
        <li>Lugar o institucion: {!! $solicitud->id_institucion !!}</li>
        <li>Dia: {{ $solicitud->fecha_cita }}</li>
        <li>Hora: {{ $solicitud->hora }}</li>
    </ul>
</body>
</html>