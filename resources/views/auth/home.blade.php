@extends('layouts.app')


@section('content')

    <div >
        <ul class="bg-info" style="list-style-type: none">
            <li class="p-3 m-3">
                Auth Home Page
            </li>
            <li class="p-3 m-3">
                {{$name}}
            </li>
        </ul>
    </div>

@endsection
