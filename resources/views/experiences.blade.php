@extends('layouts.app')

@section('title')
    Experiences
@endsection

@section('content')
    <h1 class="font-bold text-3xl">Experiences</h1>

    @livewire('experience-list')
@endsection
