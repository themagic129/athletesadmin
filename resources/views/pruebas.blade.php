<h1>Aqui se haran pruebas</h1>

@foreach ($athletes as $athlete)
    <p> Name: {{ $athlete->first_name }}
    <p> Last Name: {{ $athlete->last_name }} </p> Workout: {{ $athlete->name }}</p>
@endforeach
