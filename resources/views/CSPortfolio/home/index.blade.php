@extends('layouts.app')

@section('content')

    {{-- intro --}}
    @include('CSPortfolio.home.sections.intro')

    {{-- quote --}}
    @include('CSPortfolio.home.sections.about')

    {{-- quote --}}
    @include('CSPortfolio.home.sections.works')

@endsection