<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon_io/favicon.ico') }}">

    <title>Mehedi Hasan Hasib - Backend Developer</title>

    <!-- Fonts -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-50 font-['Poppins']">
    <x-loader />
    <!-- Hero Section -->
    <header
        class="min-h-screen flex items-center relative overflow-hidden bg-gradient-to-br from-indigo-900 to-purple-800">
        <div class="absolute inset-0 opacity-10">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_w51pcehl.json" background="transparent"
                speed="1" loop autoplay>
            </lottie-player>
        </div>
        <div class="w-full xl:w-[90vw] 2xl:w-[80vw] mx-auto px-6 py-20 z-10">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-white">
                    <h3 class="text-2xl md:text-3xl font-bold mb-3">
                        <span>Hi, I am</span>
                    </h3>
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Mehedi Hasan Hasib</h1>
                    <h2 class="text-2xl md:text-3xl text-purple-200 mb-4">I'm a <span id="typed-text"
                            class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-500"></span>
                    </h2>
                    <div class="text-gray-300 mb-8 max-w-lg">
                        <p class="mb-4">Specialized in building robust web applications with PHP & Laravel</p>
                        <p>Transforming ideas into elegant, efficient, and scalable solutions</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="#contact"
                            class="text-sm md:text-md bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full transition transform hover:scale-105">
                            Contact Me
                        </a>
                        <a href="https://github.com/mehedihasanhasib" target="_blank"
                            class="border border-white text-sm md:text-md text-white px-6 py-3 rounded-full hover:bg-white hover:text-purple-900 transition transform hover:scale-105">
                            GitHub
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-10 md:mt-0">
                    <div class="relative">
                        <lottie-player src="{{ asset('lotties/hero.json') }}" background="transparent" speed="1"
                            loop autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Skills Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-4">Technical Skills</h2>
                <p class="text-center text-gray-600 mb-16">My technical toolkit for building robust web applications</p>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    @foreach ($skills as $skill)
                        <x-skills :title="$skill->title" :banner="$skill->banner" :technologies="$skill->technologies" />
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section - Enhanced with hover effects and better visuals -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-4">Featured Projects</h2>
                <p class="text-center text-gray-600 mb-16">Some of my recent work</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($projects as $project)
                        <div
                            class="group relative overflow-hidden rounded-2xl transition-all duration-300 hover:shadow-2xl">
                            <div class="bg-white p-8 border border-purple-100">
                                <!-- Enhanced decorative elements -->
                                <div
                                    class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-purple-600 rounded-full opacity-5 transform rotate-45">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 -mb-8 -ml-8 w-24 h-24 bg-purple-400 rounded-full opacity-5">
                                </div>

                                <!-- Title with gradient effect -->
                                <h3
                                    class="text-2xl font-bold mb-4 bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text">
                                    {{ $project->title }}
                                </h3>

                                <!-- Project details with improved typography -->
                                <p class="text-gray-700 mb-6 leading-relaxed">{{ $project->details }}</p>

                                <!-- Enhanced tags design -->
                                <div class="flex flex-wrap gap-2 mb-8">
                                    @foreach ($project->tags as $tag)
                                        <span
                                            class="px-4 py-1.5 bg-purple-50 text-purple-600 rounded-full text-sm font-medium
                                               border border-purple-100 transition-all duration-200 hover:bg-purple-100">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Improved action buttons -->
                                <div class="flex justify-between items-center gap-2">
                                    <a href="{{ $project->github_link ?? '#' }}" target="_blank"
                                        class="text-[10px] lg:text-md xl:text-lg group inline-flex items-center px-4 py-2 rounded-lg bg-purple-50 text-purple-600
                                          transition-all duration-200 hover:bg-purple-100">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12c0-5.523-4.477-10-10-10z" />
                                        </svg>
                                        GitHub
                                        <svg class="w-4 h-4 ml-2 transition-transform duration-200 hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>

                                    <a href="{{ $project->live_link ?? '#' }}" target="_blank"
                                        class="text-[10px] lg:text-md xl:text-lg group inline-flex items-center px-4 py-2 rounded-lg bg-purple-600 text-white
                                          transition-all duration-200 hover:bg-purple-700">
                                        View Live
                                        <svg class="w-4 h-4 ml-2 transition-transform duration-200 hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-16">Work Experience</h2>
                <div class="max-w-3xl mx-auto space-y-8">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/3">
                            <h3 class="font-semibold">FouzderIT</h3>
                            <p class="text-gray-600">Aug 2024 - Present</p>
                        </div>
                        <div class="md:w-2/3">
                            <h4 class="font-semibold">Junior Software Engineer</h4>
                            <p class="text-gray-600">Backend development and maintenance of company projects.</p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/3">
                            <h3 class="font-semibold">Envobyte Ltd</h3>
                            <p class="text-gray-600">May 2024 - Jul 2024</p>
                        </div>
                        <div class="md:w-2/3">
                            <h4 class="font-semibold">Intern Web Developer</h4>
                            <p class="text-gray-600">Developed REST APIs for the company website frontend.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section - New gorgeous design -->
        <section id="contact" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-4xl font-bold text-center mb-4">Get In Touch</h2>
                    <p class="text-center text-gray-600 mb-16">Let's discuss your next project</p>

                    <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12">
                        <form action="{{ route('contact.form.submit') }}" method="POST" class="space-y-8"
                            onsubmit="formSubmit()">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="relative">
                                    <input type="text" name="name" id="name"
                                        class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2"
                                        value="{{ old('name') ?? '' }}" placeholder="Your Name" required>
                                    @error('name')
                                        <x-input-error :message="$message" />
                                    @enderror
                                    <label for="name"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your
                                        Name</label>
                                </div>

                                <div class="relative">
                                    <input type="email" name="email" id="email"
                                        class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2"
                                        value="{{ old('email') ?? '' }}" placeholder="Email Address" required>
                                    @error('email')
                                        <x-input-error :message="$message" />
                                    @enderror
                                    <label for="email"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
                                        Address</label>
                                </div>
                            </div>

                            <div class="relative">
                                <textarea name="message" id="message" rows="4"
                                    class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2"
                                    placeholder="Your Message" required>{{ old('message') ?? '' }}</textarea>
                                @error('message')
                                    <x-input-error :message="$message" />
                                @enderror
                                <label for="message"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your
                                    Message</label>
                            </div>

                            <div class="text-center">
                                <button type="submit"
                                    class="bg-purple-600 text-white px-8 py-3 rounded-full hover:bg-purple-700 transition duration-300 transform hover:scale-105">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                        <div class="p-6">
                            <a href="mailto:contact@hasib.info"
                                class="w-12 h-12 animate-bounce bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <h3 class="text-lg font-semibold mb-2">Email</h3>
                            <p class="text-gray-600">contact@hasib.info</p>
                        </div>

                        <div class="p-6">
                            <div
                                class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Location</h3>
                            <p class="text-gray-600">Khulna, Bangladesh</p>
                        </div>

                        <div class="p-6">
                            <a href="tel:+8801965046625"
                                class="w-12 h-12 animate-bounce bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </a>
                            <h3 class="text-lg font-semibold mb-2">Phone</h3>
                            <p class="text-gray-600">(+88) 01965-046625</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/submit-form.js') }}"></script>
    @if (session()->has('message'))
        <x-success-component />
    @elseif (session()->has('error') || $errors->any())
        <x-error-component />
    @endif
</body>

</html>
