@extends('layouts.app')

@section('title', 'EJSC Co-working Space – Elevate Your Workspace')
@section('description', 'EJSC - Co-working space modern dengan fasilitas lengkap. Book ruangan favoritmu sekarang.')

@section('content')

    @include('sections.hero-section')

    @include('sections.info-cards-section')

    @include('sections.partners-section')

    @include('sections.workspace-section')

    @include('sections.our-space-section')

    @include('sections.testimoni-section')

    @include('sections.cta-section')

@endsection
