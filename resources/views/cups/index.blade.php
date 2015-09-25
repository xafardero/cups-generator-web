@extends ('layout')

@section ('content')
<div class="row">
    <h1 class="text-center">Cups</h1>
    <h2 class="text-center">generator</h2>
    {!! Form::open(['url' => 'cups', 'method' => 'post']) !!}
    {!! Form::label('cups', 'Cups:') !!}
    {!! Form::text('cups', $cups) !!}
    {!! Form::submit('Generate') !!}
    {!! Form::close() !!}
</div>
@stop
