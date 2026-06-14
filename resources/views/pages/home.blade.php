@extends('layouts.app')

@section('title', 'EJSC Bakorwil III Malang - Coworking Space & Creative Hub')
@section('description', 'EJSC Bakorwil III Malang adalah coworking space & creative hub modern. Kami menyediakan fasilitas ruang kolaborasi dan meeting room untuk UMKM & talenta Malang.')

@section('content')

    @include('sections.hero-section')

    @include('sections.partners-section')

    @include('sections.about-us-section')

    @include('sections.video-section')

    @include('sections.workspace-section')

    @include('sections.gallery-section')

    @include('sections.testimoni-section')

    @include('sections.team-section')

    @include('sections.cta-section')

@endsection
