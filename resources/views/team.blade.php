@extends('landing.landing-base')

@section('title')
    Home
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('body')
    @include('landing.sections.landing-navbar')
    @include('landing.sections.landing-team')
    @include('landing.sections.landing-footer')

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop" title="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </a>
@endsection

@section('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
