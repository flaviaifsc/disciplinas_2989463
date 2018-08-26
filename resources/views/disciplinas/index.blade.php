    <h1>Disciplinas</h1>
    <a href="/disciplinas/create">Cadastrar nova disciplina</a>
    <ul>
    @foreach ($disciplinas as $disciplina)
        <li><a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a> </li>

    <br>
    <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
    <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button type="submit">Apagar</button>
    </form>

    <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>

    @endforeach
    </ul>