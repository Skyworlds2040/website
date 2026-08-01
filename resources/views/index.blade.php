@extends('layouts.app')

@section('title', 'Special & Weekly South Beach Events | Clevelander South Beach')

@section('content')
    <!-- Hero Section -->
    <x-page-hero bg="/assets/images/25117773.webp" title="Something Special Every Week"
        subtitle="Experience
                the Pulse" />

    <!-- About Section -->
    @include('components.about')

    <!-- Event Grid & filter -->
    @include('components.events')

    <!-- Packages Grid -->
    @include('components.packages')

    @include('components.above-footer')
@endsection
