<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<h2>Turmas:</h2>
@foreach ($disciplina->turmas as $turma)
        {{ $turma->ministrante }}
        {{ $turma->inicio }}
<br>
@endforeach
<br>
<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>