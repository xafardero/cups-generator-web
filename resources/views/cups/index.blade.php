@extends ('layout')

@section ('content')
<div class="row">
    <h1 class="text-center">Cups</h1>
    <h2 class="text-center">Generator</h2>
        <form class="col-md-6 col-md-offset-3 form-horizontal">
          <div class="form-group">
            <input name="cups" type="text" value="{!! $cups; !!}" class="form-control text-center">
          </div>
          <div class="form-group">
            <a href="" class="btn btn-success text-center form-control">Generate</a>
          </div>
        </form>
</div>
@stop
