@extends('basevosys::layouts.master')

@section('content')
<h1>Hello World</h1>

<p>
    View ini is loaded from module: {!! config('basevosys.name') !!}
</p>
@endsection