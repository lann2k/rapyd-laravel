@extends('rapyd::demo.demo')

@section('title','DataForm')

@section('body')

    <h1>DataForm</h1>
    <p>

        {{ $form }}
        {{ Documenter::showMethod("Zofe\\Rapyd\\Controllers\\DemoController", "anyAdvancedform") }}
        {{ Documenter::showCode("zofe/rapyd/src/views/demo/form.blade.php") }}
    </p>
@stop