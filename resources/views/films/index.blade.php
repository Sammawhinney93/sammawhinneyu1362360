<!--This page is used to set the display of the database-->

@extends('layouts.layout')
@section('title')
All Films

@stop

@section('body')

  @foreach($films as $film)
    <h1>Film ID:{{$film->filmid}}</h1>
    <h1>film Title:{{$film->filmtitle}}</h1>
    <h1>Film Description:{{$film->filmdescription}}</h1>
    <h1>film Director:{{$film->filmdirector}}</h1>
    <h1>film Rating:{{$film->filmrating}}</h1>
    <br>
@endforeach
@stop