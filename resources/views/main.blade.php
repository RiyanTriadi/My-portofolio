@extends('layouts.app')

@section('title', 'Riyan Triadi - Portofolio')

@section('content')
    <x-hero/>
    <x-about/>
    <x-skills :frontendStack="$frontendStack" :backendStack="$backendStack" :dbStack="$dbStack"/>
    <x-projects/>
    <x-contact/>
@endsection