    <h1>Disciplinas</h1>
    <a href="/disciplinas/create">Cadastrar nova disciplina</a>
    <ul>
    @foreach ($disciplinas as $disciplina)
        <li><a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a> </li>
    <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
    @endforeach
    </ul>