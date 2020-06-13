@extends('layouts.master')


@section('content')

    <p>Welcome in about Landing</p>




    @forelse($data as $dt)
        <p>{{$dt}}</p>
    @empty
        <p>empty array</p>
    @endforelse

@stop
