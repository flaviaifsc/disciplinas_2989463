    <ul>
    @foreach ($disciplinas as $disciplina)
        <li>Título: {{ $disciplina->titulo }} </li>
        <li>Ementa: {{ $disciplina->ementa }} </li><br>
    @endforeach
    </ul>