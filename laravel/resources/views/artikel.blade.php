@extends('layouts.master')


@section('header')
    <h1>Artikel {{ $id }}</h1>
@endsection


@section('content')
    <p>Dit is artikel {{ $id }} </p>
@endsection