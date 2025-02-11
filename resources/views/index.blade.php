<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mehedi Hasan Hasib - Backend Developer</title>

    <!-- Fonts -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="bg-gray-50 font-['Poppins']">
    <!-- Hero Section -->
    <header class="min-h-screen flex items-center relative overflow-hidden bg-gradient-to-br from-indigo-900 to-purple-800">
        <div class="absolute inset-0 opacity-10">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_w51pcehl.json" background="transparent" speed="1" loop autoplay>
            </lottie-player>
        </div>
        <div class="w-full xl:w-[90vw] 2xl:w-[80vw] mx-auto px-6 py-20 z-10">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-white">
                    <h3 class="text-2xl md:text-3xl font-bold mb-3">
                        <span>Hi, I am</span>
                    </h3>
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Mehedi Hasan Hasib</h1>
                    <h2 class="text-2xl md:text-3xl text-purple-200 mb-4">I'm a <span id="typed-text" class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-500"></span></h2>
                    <div class="text-gray-300 mb-8 max-w-lg">
                        <p class="mb-4">Specialized in building robust web applications with PHP & Laravel</p>
                        <p>Transforming ideas into elegant, efficient, and scalable solutions</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="#contact" class="text-sm md:text-md bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full transition transform hover:scale-105">
                            Contact Me
                        </a>
                        <a href="https://github.com/mehedihasanhasib" target="_blank" class="border border-white text-sm md:text-md text-white px-6 py-3 rounded-full hover:bg-white hover:text-purple-900 transition transform hover:scale-105">
                            GitHub
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-10 md:mt-0">
                    <div class="relative">
                        <lottie-player src="{{ asset('lotties/hero.json') }}" background="transparent" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">Technical Skills</h2>
            <p class="text-center text-gray-600 mb-16">My technical toolkit for building robust web applications</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Backend Skills -->
                <div class="group">
                    <div class="bg-white rounded-2xl shadow-xl p-8 transform transition duration-500">
                        <div class="flex items-center justify-center h-40 mb-8">
                            <lottie-player src="{{ asset('lotties/server.json') }}" background="transparent" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <h3 class="text-2xl font-bold text-center mb-6">Backend</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 bg-purple-50 p-3 rounded-lg">
                                <div class="w-10 h-10 flex items-center">
                                    <img src="{{ asset('icons/new-php-logo.png') }}" alt="php">
                                </div>
                                <span class="font-medium">PHP</span>
                            </div>
                            <div class="flex items-center gap-3 bg-purple-50 p-3 rounded-lg">
                                <div class="w-10 h-10">
                                    <lottie-player src="{{ asset('lotties/laravel.json') }}" background="transparent" speed="1" loop autoplay>
                                    </lottie-player>
                                </div>
                                <span class="font-medium">Laravel</span>
                            </div>
                            <div class="flex items-center gap-3 bg-purple-50 p-3 rounded-lg">
                                <div class="w-10 h-10 flex items-center">
                                    <lottie-player src="{{ asset('lotties/api.json') }}" background="transparent" speed="1" loop autoplay>
                                    </lottie-player>
                                </div>
                                <span class="font-medium">RESTful APIs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frontend Skills -->
                <div class="group">
                    <div class="bg-white rounded-2xl shadow-xl p-8 transform transition duration-500">
                        <div class="flex items-center justify-center h-40 mb-8">
                            <lottie-player src="{{ asset('lotties/frontend.json') }}" background="transparent" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <h3 class="text-2xl font-bold text-center mb-6">Frontend</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 bg-blue-50 p-3 rounded-lg">
                                <div class="w-8 h-10 flex items-center">
                                    <img src="{{ asset('icons/js.png') }}" alt="">
                                </div>
                                <span class="font-medium">JavaScript</span>
                            </div>
                            <div class="flex items-center gap-3 bg-blue-50 p-3 rounded-lg">
                                <div class="w-10 h-10 flex items-center">
                                    <img src="{{ asset('icons/reactjs.png') }}" alt="">
                                </div>
                                <span class="font-medium">ReactJS</span>
                            </div>
                            <div class="flex items-center gap-3 bg-blue-50 p-3 rounded-lg">
                                <div class="w-10 h-10 flex items-center">
                                    <div class="w-8 h-8">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#06B6D4">
                                            <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.336 6.182 14.975 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C7.336 13.382 5.975 12 3.001 12z" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="font-medium">Tailwind CSS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Database Skills -->
                <div class="group">
                    <div class="bg-white rounded-2xl shadow-xl p-8 transform transition duration-500">
                        <div class="flex items-center justify-center h-40 mb-8">
                            <lottie-player src="{{ asset('lotties/database.json') }}" background="transparent" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <h3 class="text-2xl font-bold text-center mb-6">Database</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 bg-green-50 p-3 rounded-lg">
                                <div class="w-10 h-10 flex items-center">
                                    <img src="{{ asset('icons/mysql2.png') }}" alt="">
                                </div>
                                <span class="font-medium">MySQL</span>
                            </div>
                            <div class="flex items-center gap-3 bg-green-50 p-3 rounded-lg">
                                <div class="w-10 h-10">
                                    <lottie-player src="{{ asset('lotties/db-design.json') }}" background="transparent" speed="1" loop autoplay>
                                    </lottie-player>
                                </div>
                                <span class="font-medium">Database Design</span>
                            </div>
                            <div class="flex items-center gap-3 bg-green-50 p-3 rounded-lg">
                                <div class="w-10 h-10">
                                    <lottie-player src="{{ asset('lotties/db-query.json') }}" background="transparent" speed="1" loop autoplay>
                                    </lottie-player>
                                </div>
                                <span class="font-medium">Query Optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section - Enhanced with hover effects and better visuals -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">Featured Projects</h2>
            <p class="text-center text-gray-600 mb-16">Some of my recent work</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="group relative overflow-hidden rounded-2xl">
                    <div class="bg-white p-8 shadow-lg transform transition duration-500 hover:-translate-y-2">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-20 h-20 bg-purple-600 rounded-full opacity-10">
                        </div>
                        <h3 class="text-2xl font-bold mb-4">PHP Mini MVC Framework</h3>
                        <p class="text-gray-600 mb-6">A lightweight PHP MVC framework with routing engine, Eloquent-like
                            CRUD operations, named routes, and middleware support.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm">PHP</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm">MVC</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm">OOP</span>
                        </div>
                        <a href="https://github.com/mehedihasanhasib" target="_blank" class="inline-flex items-center text-purple-600 hover:text-purple-800">
                            View on GitHub
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Repeat similar structure for other projects -->
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
                    <form id="contact-form" action="{{ route('contact.form.submit') }}" method="POST" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative">
                                <input type="text" name="name" id="name" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2" placeholder="Your Name">
                                <x-input-error class='nameError' />
                                <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your
                                    Name</label>
                            </div>

                            <div class="relative">
                                <input type="email" name="email" id="email" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2" placeholder="Email Address">
                                <x-input-error class='emailError' />
                                <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
                                    Address</label>
                            </div>
                        </div>

                        {{-- <div class="relative">
                            <input type="text" name="subject" id="subject" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2" placeholder="Subject" required>
                            <label for="subject" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Subject</label>
                        </div> --}}

                        <div class="relative">
                            <textarea name="message" id="message" rows="4" class="peer w-full border-b-2 border-gray-300 text-gray-900 focus:border-purple-600 focus:outline-none placeholder-transparent py-2" placeholder="Your Message"></textarea>
                            <x-input-error class='messageError' />
                            <label for="message" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your
                                Message</label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-purple-600 text-white px-8 py-3 rounded-full hover:bg-purple-700 transition duration-300 transform hover:scale-105">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="p-6">
                        <a href="mailto:mehedi.mh50@gmail.com" class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </a>
                        <h3 class="text-lg font-semibold mb-2">Email</h3>
                        <p class="text-gray-600">mehedi.mh50@gmail.com</p>
                    </div>

                    <div class="p-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Location</h3>
                        <p class="text-gray-600">Khulna, Bangladesh</p>
                    </div>

                    <div class="p-6">
                        <a href="tel:+8801965046625" class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </a>
                        <h3 class="text-lg font-semibold mb-2">Phone</h3>
                        <p class="text-gray-600">(+88) 01965-046625</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/contact-from-submit.js') }}"></script>
</body>

</html>
