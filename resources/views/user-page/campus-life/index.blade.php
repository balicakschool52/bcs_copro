@extends('layouts.main')

@section('title', 'Campus Life | Bali Cak Tourism School')

@section('content')
    @include('user-page.campus-life.partials.hero-section')
    @include('user-page.campus-life.partials.activity-section')

    @push('scripts')
    @endpush
@endsection
