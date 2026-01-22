@extends('layouts.main')

@section('title', 'Education | Bali Cak Tourism School')

@section('content')
    @include('user-page.education.partials.hero-section')
    @include('user-page.education.partials.greeting-education-section')
    @include('user-page.education.partials.education-section')

    @push('scripts')
        @vite('resources/js/pages/user-pages/education/index.js')
    @endpush
@endsection
