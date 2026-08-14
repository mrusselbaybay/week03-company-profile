@extends('layouts.app')

@section('title', 'Home')
@section('description', 'NovaTech Solutions builds digital products that help businesses grow — websites, apps, cloud, and more.')

@section('content')

    <section class="relative overflow-hidden bg-gradient-to-br from-brand-900 via-brand-700 to-brand-500">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_20%_20%,_white_1px,_transparent_1px)] [background-size:24px_24px]"></div>
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-32 text-center">
            <span class="inline-block rounded-full bg-white/10 text-white text-xs font-semibold tracking-wide uppercase px-4 py-1.5 mb-6">
                Digital Solutions Partner
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight max-w-4xl mx-auto">
                We Build Digital Products That Move Your Business Forward
            </h1>
            <p class="mt-6 text-lg text-brand-50/90 max-w-2xl mx-auto">
                From websites to mobile apps, cloud infrastructure to cybersecurity — NovaTech Solutions
                is the technology partner startups and enterprises trust to bring their ideas to life.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center rounded-full bg-white text-brand-700 font-semibold px-8 py-3 hover:bg-brand-50 transition shadow-lg">
                    Get a Free Consultation
                </a>
                <a href="{{ route('services') }}"
                   class="inline-flex items-center justify-center rounded-full border border-white/40 text-white font-semibold px-8 py-3 hover:bg-white/10 transition">
                    Explore Our Services
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Who We Are</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Your Trusted Partner in Digital Transformation
                </h2>
                <p class="mt-5 text-slate-600 leading-relaxed">
                    Founded by a team of engineers and designers, NovaTech Solutions has spent the last decade
                    helping startups and established businesses navigate the ever-changing digital landscape.
                    We combine technical expertise with a genuine understanding of your business goals to
                    deliver solutions that actually move the needle.
                </p>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Whether you need a brand-new product built from scratch or want to modernize your existing
                    systems, our multidisciplinary team is ready to help you succeed.
                </p>
                <a href="{{ route('about') }}" class="mt-6 inline-flex items-center text-brand-600 font-semibold hover:text-brand-700">
                    Learn more about us →
                </a>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="rounded-2xl bg-brand-50 p-6 text-center">
                    <p class="text-3xl font-extrabold text-brand-700">120+</p>
                    <p class="mt-1 text-sm text-slate-600">Projects Delivered</p>
                </div>
                <div class="rounded-2xl bg-brand-50 p-6 text-center">
                    <p class="text-3xl font-extrabold text-brand-700">10+</p>
                    <p class="mt-1 text-sm text-slate-600">Years of Experience</p>
                </div>
                <div class="rounded-2xl bg-brand-50 p-6 text-center">
                    <p class="text-3xl font-extrabold text-brand-700">40+</p>
                    <p class="mt-1 text-sm text-slate-600">Team Members</p>
                </div>
                <div class="rounded-2xl bg-brand-50 p-6 text-center">
                    <p class="text-3xl font-extrabold text-brand-700">98%</p>
                    <p class="mt-1 text-sm text-slate-600">Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">What We Do</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">Featured Services</h2>
                <p class="mt-4 text-slate-600">
                    A snapshot of how we help our clients build, launch, and scale their digital products.
                </p>
            </div>

            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($featuredServices as $service)
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition">
                        <div class="w-14 h-14 rounded-xl bg-brand-50 flex items-center justify-center text-2xl">
                            {{ $service['icon'] }}
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-slate-900">{{ $service['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('services') }}"
                   class="inline-flex items-center justify-center rounded-full bg-brand-600 text-white font-semibold px-8 py-3 hover:bg-brand-700 transition">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-700">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Ready to Start Your Next Project?
            </h2>
            <p class="mt-4 text-brand-50/90">
                Let's talk about how NovaTech Solutions can help bring your vision to life.
            </p>
            <a href="{{ route('contact') }}"
               class="mt-8 inline-flex items-center justify-center rounded-full bg-white text-brand-700 font-semibold px-10 py-3.5 hover:bg-brand-50 transition shadow-lg">
                Contact Us Today
            </a>
        </div>
    </section>

@endsection