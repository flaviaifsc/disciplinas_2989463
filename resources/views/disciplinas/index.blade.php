    <h1>Disciplinas</h1>
    <ul>
    @foreach ($disciplinas as $disciplina)
        <li><a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a> </li>
    <br>
    @endforeach
    </ul>