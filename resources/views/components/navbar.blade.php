<header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-100">
    <nav class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <a href="{{ route('home') }}" class="flex items-center gap-2 font-extrabold text-xl text-brand-700">
                <span class="w-8 h-8 rounded-lg bg-brand-600 text-white flex items-center justify-center text-sm">NT</span>
                NovaTech Solutions
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'text-brand-600' : 'text-slate-600 hover:text-brand-600' }} transition">Home</a>
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'text-brand-600' : 'text-slate-600 hover:text-brand-600' }} transition">About</a>
                <a href="{{ route('services') }}"
                   class="{{ request()->routeIs('services') ? 'text-brand-600' : 'text-slate-600 hover:text-brand-600' }} transition">Services</a>
                <a href="{{ route('contact') }}"
                   class="{{ request()->routeIs('contact') ? 'text-brand-600' : 'text-slate-600 hover:text-brand-600' }} transition">Contact</a>
                <a href="{{ route('contact') }}"
                   class="ml-2 inline-flex items-center rounded-full bg-brand-600 px-5 py-2 text-white font-semibold hover:bg-brand-700 transition">
                    Get a Quote
                </a>
            </div>

            <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                    class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-slate-600 hover:bg-slate-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-1">
            <a href="{{ route('home') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('home') ? 'bg-brand-50 text-brand-700' : 'text-slate-700 hover:bg-slate-50' }}">Home</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('about') ? 'bg-brand-50 text-brand-700' : 'text-slate-700 hover:bg-slate-50' }}">About</a>
            <a href="{{ route('services') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('services') ? 'bg-brand-50 text-brand-700' : 'text-slate-700 hover:bg-slate-50' }}">Services</a>
            <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('contact') ? 'bg-brand-50 text-brand-700' : 'text-slate-700 hover:bg-slate-50' }}">Contact</a>
            <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-base font-semibold text-white bg-brand-600 text-center mt-2">Get a Quote</a>
        </div>
    </nav>
</header>