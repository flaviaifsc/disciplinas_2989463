@extends('layouts.master')
<form method="POST" action="/disciplinas">
        {{ csrf_field() }}
        <div>
        	Nome: <input name="titulo"><br>
        	Ementa: <textarea name="ementa" rows="4"> </textarea><br><br> 
        	<button type="submit"> Salvar </button>
        </div>
</form>