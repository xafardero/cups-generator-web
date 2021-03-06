@extends ('layout')
@section ('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3 ">
        <h1 class="text-center">Código Universal del Punto de Suministro</h1>
        <h2 class="text-center">Generador aleatorio de CUPS</h2>
        <form>
            <div class="form-group">
                <input name="cups" type="text" value="{!! $cups; !!}" class="form-control text-center">
            </div>
            <div class="form-group">
                <a href="" class="btn btn-success text-center form-control">Generar</a>
            </div>
        </form>
        <blockquote id="wiki">
            <p>
                El CUPS (Código Universal del Punto de Suministro), en España, es un código único e 
                identificador de un punto de suministro de energía, ya sea de electricidad o gas canalizado.
                (...)
            </p>
            <footer>
                <a rel="nofollow" href="https://es.wikipedia.org/wiki/C%C3%B3digo_Universal_de_Punto_de_Suministro">
                    <cite title="Source Title">Wikipedia</cite>
                </a>
            </footer>
        </blockquote>
    </div>
</div>
@stop
