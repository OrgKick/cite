@extends('layouts.app')

@section('content')
<div class="content">
    <p>@if (Auth::guest())
        Отказано в доступе</p>
@else


    <div class="panel-body">

            <div class="alert alert-success user">
                {{ Auth::user()->name }}
            </div>
        @endif


    </div>
</div>
@endsection