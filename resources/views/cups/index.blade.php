@extends ('layout')

@section ('content')

  <h1>Cups generator:</h1>
  {!! Form::open(['url' => 'cups', 'method' => 'post']) !!}
  {!! Form::label('cups', 'Cups:') !!}
  {!! Form::text('cups', $cups) !!}
  {!! Form::submit('Generate') !!}
  {!! Form::close() !!}
@stop
