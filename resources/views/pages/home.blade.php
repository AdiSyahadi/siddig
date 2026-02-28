@extends('layouts.app')

@section('title', 'SidodadiDigital - Jasa Pembuatan Website Profesional')

@section('content')
    @include('sections.hero')

    @include('sections.clients')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.services')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.portfolio')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.why-choose-us')

    @include('sections.stats')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.pricing')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.testimonials')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.faq')

    <div class="section-divider max-w-5xl mx-auto"></div>
    @include('sections.conversion')

    @include('sections.cta')
@endsection
