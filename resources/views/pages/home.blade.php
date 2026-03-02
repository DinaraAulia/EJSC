@extends('layouts.app')

@section('title', 'EJSC Bakorwil III Malang')
@section('description', 'EJSC - Co-working space Bakorwil III Malang')

@section('content')

    @include('sections.hero-section')

    @include('sections.partners-section')

    @include('sections.about-us-section')

    @include('sections.workspace-section')

    @include('sections.gallery-section')

    @include('sections.testimoni-section')

    @include('sections.cta-section')

@endsection
