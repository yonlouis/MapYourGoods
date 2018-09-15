@extends('errors::layout')

@section('title')
 Page not found | {{ env("APP_NAME") }}
@stop

@section('message', "The page you're looking for can't be found.")