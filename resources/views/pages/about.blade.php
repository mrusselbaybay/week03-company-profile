@extends('layouts.app')

@section('title', 'About Us')
@section('description', 'Learn about NovaTech Solutions history, mission, vision, core values, and the team behind our work.')

@section('content')

    <section class="bg-brand-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white">About NovaTech Solutions</h1>
            <p class="mt-4 text-brand-100 max-w-2xl mx-auto">
                Getting to know the people, purpose, and principles behind our work.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Our Story</span>
                <h2 class="mt-3 text-3xl font-extrabold text-slate-900">Company History</h2>
                <p class="mt-5 text-slate-600 leading-relaxed">
                    NovaTech Solutions started in 2015 as a two-person freelance team building websites for
                    small local businesses. As demand grew, so did our ambitions — we expanded into mobile
                    development, cloud infrastructure, and cybersecurity to become a full-service digital
                    partner.
                </p>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Today, we're a team of over 40 designers, developers, and strategists working with clients
                    across the region, from early-stage startups to established enterprises — all united by the
                    same goal we started with: building technology that genuinely helps people.
                </p>
            </div>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="rounded-2xl bg-slate-50 p-6">
                    <p class="text-2xl font-extrabold text-brand-700">2015</p>
                    <p class="mt-1 text-xs text-slate-500">Founded</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-6">
                    <p class="text-2xl font-extrabold text-brand-700">2018</p>
                    <p class="mt-1 text-xs text-slate-500">Mobile Division Launched</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-6">
                    <p class="text-2xl font-extrabold text-brand-700">2022</p>
                    <p class="mt-1 text-xs text-slate-500">Cloud &amp; Security Team Formed</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-slate-100">
                <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-2xl">🎯</div>
                <h3 class="mt-5 text-2xl font-bold text-slate-900">Our Mission</h3>
                <p class="mt-3 text-slate-600 leading-relaxed">
                    To empower businesses of all sizes with reliable, innovative, and human-centered technology
                    solutions that solve real problems and drive sustainable growth.
                </p>
            </div>
            <div class="bg-white rounded-2xl p-10 shadow-sm border border-slate-100">
                <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center text-2xl">🔭</div>
                <h3 class="mt-5 text-2xl font-bold text-slate-900">Our Vision</h3>
                <p class="mt-3 text-slate-600 leading-relaxed">
                    To be the most trusted digital solutions partner in Southeast Asia, recognized for our
                    craftsmanship, integrity, and the lasting impact we create for our clients.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">What Drives Us</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">Core Values</h2>
            </div>
            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($coreValues as $value)
                    <div class="rounded-2xl border border-slate-100 p-6 text-center hover:shadow-md transition">
                        <div class="w-10 h-10 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">
                            {{ $loop->iteration }}
                        </div>
                        <h3 class="mt-4 font-bold text-slate-900">{{ $value['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Meet the Team</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">The People Behind NovaTech</h2>
                <p class="mt-4 text-slate-600">
                    A passionate group of thinkers, builders, and problem-solvers.
                </p>
            </div>
            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($team as $member)
                    <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-slate-100">
                        <div class="w-20 h-20 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center text-xl font-bold">
                            {{ $member['initials'] }}
                        </div>
                        <h3 class="mt-4 font-bold text-slate-900">{{ $member['name'] }}</h3>
                        <p class="text-sm text-brand-600">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection