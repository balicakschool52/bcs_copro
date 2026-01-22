@extends('layouts.main')

@section('title', 'About Us | Bali Cak Tourism School')

@section('content')
    @include('user-page.about-us.partials.hero-section')
    @include('user-page.about-us.partials.greeting-about-section')
    @include('user-page.about-us.partials.visi-misi-section')
    @include('user-page.about-us.partials.lecture-section')

    @push('scripts')
        @vite('resources/js/pages/user-pages/about-us/index.js')
    @endpush
@endsection
