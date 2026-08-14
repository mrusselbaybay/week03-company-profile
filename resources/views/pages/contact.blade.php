@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Get in touch with NovaTech Solutions. We would love to hear about your next project.')

@section('content')

    <section class="bg-brand-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white">Contact Us</h1>
            <p class="mt-4 text-brand-100 max-w-2xl mx-auto">
                Have a project in mind? We'd love to hear from you.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-5 gap-12">

            <div class="lg:col-span-3 bg-slate-50 rounded-2xl p-8 sm:p-10 border border-slate-100">
                <h2 class="text-2xl font-bold text-slate-900">Send Us a Message</h2>
                <p class="mt-2 text-sm text-slate-600">Fill out the form below and our team will get back to you within 1–2 business days.</p>

                <form action="#" method="POST" class="mt-8 space-y-6">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Juan Dela Cruz"
                                   class="mt-2 w-full rounded-lg border-slate-200 border px-4 py-2.5 text-sm focus:border-brand-500 focus:ring-2 focus:ring-brand-100 outline-none transition">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com"
                                   class="mt-2 w-full rounded-lg border-slate-200 border px-4 py-2.5 text-sm focus:border-brand-500 focus:ring-2 focus:ring-brand-100 outline-none transition">
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-slate-700">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+63 900 000 0000"
                                   class="mt-2 w-full rounded-lg border-slate-200 border px-4 py-2.5 text-sm focus:border-brand-500 focus:ring-2 focus:ring-brand-100 outline-none transition">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700">Subject</label>
                            <select id="subject" name="subject"
                                    class="mt-2 w-full rounded-lg border-slate-200 border px-4 py-2.5 text-sm focus:border-brand-500 focus:ring-2 focus:ring-brand-100 outline-none transition">
                                <option>General Inquiry</option>
                                <option>Web Development</option>
                                <option>Mobile Development</option>
                                <option>UI/UX Design</option>
                                <option>Cloud Solutions</option>
                                <option>Cybersecurity</option>
                                <option>IT Consulting</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us a bit about your project..."
                                  class="mt-2 w-full rounded-lg border-slate-200 border px-4 py-2.5 text-sm focus:border-brand-500 focus:ring-2 focus:ring-brand-100 outline-none transition"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full sm:w-auto inline-flex items-center justify-center rounded-full bg-brand-600 text-white font-semibold px-8 py-3 hover:bg-brand-700 transition">
                        Send Message
                    </button>
                    <p class="text-xs text-slate-400">This form is for UI demonstration only and is not yet connected to a backend endpoint.</p>
                </form>
            </div>

            <div class="lg:col-span-2 space-y-6">
                <div class="rounded-2xl border border-slate-100 p-6 flex gap-4">
                    <div class="w-11 h-11 shrink-0 rounded-xl bg-brand-50 flex items-center justify-center text-xl">📍</div>
                    <div>
                        <h3 class="font-bold text-slate-900">Our Address</h3>
                        <p class="mt-1 text-sm text-slate-600">{{ $companyInfo['address'] }}</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-100 p-6 flex gap-4">
                    <div class="w-11 h-11 shrink-0 rounded-xl bg-brand-50 flex items-center justify-center text-xl">✉️</div>
                    <div>
                        <h3 class="font-bold text-slate-900">Email Us</h3>
                        <a href="mailto:{{ $companyInfo['email'] }}" class="mt-1 block text-sm text-brand-600 hover:text-brand-700">{{ $companyInfo['email'] }}</a>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-100 p-6 flex gap-4">
                    <div class="w-11 h-11 shrink-0 rounded-xl bg-brand-50 flex items-center justify-center text-xl">📞</div>
                    <div>
                        <h3 class="font-bold text-slate-900">Call Us</h3>
                        <a href="tel:{{ $companyInfo['phone'] }}" class="mt-1 block text-sm text-brand-600 hover:text-brand-700">{{ $companyInfo['phone'] }}</a>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-100 p-6">
                    <h3 class="font-bold text-slate-900 mb-4">Follow Us</h3>
                    <div class="flex gap-3">
                        <a href="{{ $companyInfo['social']['facebook'] }}" target="_blank"
                           class="w-10 h-10 rounded-full bg-brand-50 flex items-center justify-center hover:bg-brand-600 hover:text-white transition text-brand-700">FB</a>
                        <a href="{{ $companyInfo['social']['twitter'] }}" target="_blank"
                           class="w-10 h-10 rounded-full bg-brand-50 flex items-center justify-center hover:bg-brand-600 hover:text-white transition text-brand-700">X</a>
                        <a href="{{ $companyInfo['social']['linkedin'] }}" target="_blank"
                           class="w-10 h-10 rounded-full bg-brand-50 flex items-center justify-center hover:bg-brand-600 hover:text-white transition text-brand-700">IN</a>
                        <a href="{{ $companyInfo['social']['instagram'] }}" target="_blank"
                           class="w-10 h-10 rounded-full bg-brand-50 flex items-center justify-center hover:bg-brand-600 hover:text-white transition text-brand-700">IG</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden border border-slate-100 shadow-sm">
                <iframe
                    src="https://www.google.com/maps?q=Ortigas%20Center%2C%20Pasig%20City%2C%20Philippines&output=embed"
                    width="100%"
                    height="420"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Company Location Map">
                </iframe>
            </div>
        </div>
    </section>

@endsection