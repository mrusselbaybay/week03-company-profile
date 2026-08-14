@extends('layouts.app')

@section('title', 'Services')
@section('description', 'Explore the full range of services offered by NovaTech Solutions, from web development to IT consulting.')

@section('content')

    <section class="bg-brand-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white">Our Services</h1>
            <p class="mt-4 text-brand-100 max-w-2xl mx-auto">
                End-to-end digital solutions designed to help your business build, launch, and grow.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="group bg-white rounded-2xl p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition">
                        <div class="w-16 h-16 rounded-2xl bg-brand-50 flex items-center justify-center text-3xl group-hover:bg-brand-600 group-hover:text-white transition">
                            {{ $service['icon'] }}
                        </div>
                        <h3 class="mt-6 text-xl font-bold text-slate-900">{{ $service['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed">{{ $service['description'] }}</p>
                        <a href="{{ route('contact') }}" class="mt-5 inline-flex items-center text-sm font-semibold text-brand-600 hover:text-brand-700">
                            Inquire about this service →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">How We Work</span>
                <h2 class="mt-3 text-3xl font-extrabold text-slate-900">Our Simple Process</h2>
            </div>
            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div>
                    <div class="w-12 h-12 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">1</div>
                    <h3 class="mt-4 font-bold text-slate-900">Discover</h3>
                    <p class="mt-1 text-sm text-slate-600">We learn about your goals and challenges.</p>
                </div>
                <div>
                    <div class="w-12 h-12 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">2</div>
                    <h3 class="mt-4 font-bold text-slate-900">Design</h3>
                    <p class="mt-1 text-sm text-slate-600">We map out a solution tailored to your needs.</p>
                </div>
                <div>
                    <div class="w-12 h-12 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">3</div>
                    <h3 class="mt-4 font-bold text-slate-900">Build</h3>
                    <p class="mt-1 text-sm text-slate-600">Our team develops and tests your solution.</p>
                </div>
                <div>
                    <div class="w-12 h-12 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">4</div>
                    <h3 class="mt-4 font-bold text-slate-900">Launch &amp; Support</h3>
                    <p class="mt-1 text-sm text-slate-600">We deploy and continue to support your growth.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-700">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Not Sure Which Service You Need?</h2>
            <p class="mt-4 text-brand-50/90">Talk to our team and we'll help you find the right fit.</p>
            <a href="{{ route('contact') }}"
               class="mt-8 inline-flex items-center justify-center rounded-full bg-white text-brand-700 font-semibold px-10 py-3.5 hover:bg-brand-50 transition shadow-lg">
                Get in Touch
            </a>
        </div>
    </section>

@endsection