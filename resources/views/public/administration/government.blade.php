@extends('layouts.public')

@section('title', 'Executive Services - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-yellow transition-colors">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-yellow font-medium">Executive Services</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-wabag-black to-wabag-green text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-flag-pattern opacity-10"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Administrative Services</h1>
            <p class="text-xl max-w-3xl mx-auto">Supporting effective governance and administration for Wabag District</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container mx-auto px-6 py-4">
        <nav class="flex items-center text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-gray-600 hover:text-wabag-yellow transition-colors">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-wabag-yellow font-medium md:ml-2">Administration</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Main Content with Sidebar -->
    <section class="py-12 bg-wabag-light">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <div class="prose lg:prose-lg max-w-none">
                        <p class="text-lg text-gray-700 mb-6">Every day, the Executive Services is faced with scores of decisions, each with important consequences for working families. We provide the Executive Service with the support needed to govern effectively.</p>

                        <p class="text-gray-700">The Executive Services has responsibility for tasks ranging from communicating leadership's message to the Enga people to promoting our development interests at provincial and national levels.</p>

                        <h2 id="executive-authority" class="text-3xl font-bold text-wabag-black mt-10 mb-6 border-b border-wabag-yellow pb-2">Executive Authority</h2>
                        <p class="text-gray-700">The power of the Executive Branch is vested in the <strong class="text-wabag-green">Provincial Administrator of Enga</strong>, who acts as the chief administrator for the province. The Provincial Administrator is responsible for:</p>

                        <ul class="list-disc pl-5 space-y-2 my-4 text-gray-700">
                            <li>Implementing and enforcing development plans written by the Provincial Executive Council</li>
                            <li>Coordinating with the National Government of Papua New Guinea</li>
                            <li>Appointing the heads of various administrative agencies</li>
                        </ul>

                        <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-4 border-wabag-yellow my-8">
                            <h3 class="text-xl font-bold text-wabag-black mb-2">Deputy Provincial Administrator</h3>
                            <p class="text-gray-700">The Deputy Provincial Administrator is also part of the Executive Services, ready to assume the Provincial Administrator's responsibilities should the need arise.</p>
                        </div>

                        <h2 id="administrative-structure" class="text-3xl font-bold text-wabag-black mt-10 mb-6 border-b border-wabag-yellow pb-2">Administrative Structure</h2>
                        <p class="text-gray-700">Administrative agencies under the Executive Services are tasked with the daily enforcement and management of government operations. These departments and agencies have varied missions and responsibilities, covering multiple sectors.</p>

                        <h3 id="key-sectors" class="text-2xl font-bold text-wabag-green mt-8 mb-4">Key Sectors</h3>
                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-green h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        District Administration
                                    </h3>
                                    <p class="text-gray-600">Overseeing all district operations and coordinating between departments.</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-yellow h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-yellow mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Finance & Treasury
                                    </h3>
                                    <p class="text-gray-600">Managing district finances, budgets, and financial reporting.</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-black h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-black mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Planning & Development
                                    </h3>
                                    <p class="text-gray-600">Strategic planning and development project coordination.</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-green h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Legal Services
                                    </h3>
                                    <p class="text-gray-600">Providing legal counsel and ensuring compliance with regulations.</p>
                                </div>
                            </div>
                        </div>

                        <h3 id="operational-units" class="text-2xl font-bold text-wabag-green mt-8 mb-4">Operational Units</h3>
                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-yellow h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-yellow mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Works & Infrastructure
                                    </h3>
                                    <p class="text-gray-600">Overseeing construction and maintenance of district infrastructure.</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-green h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Community Development
                                    </h3>
                                    <p class="text-gray-600">Programs and initiatives for community empowerment.</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-black h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-black mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Social Services
                                    </h3>
                                    <p class="text-gray-600">Education, health, and welfare services for residents.</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-yellow h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-yellow mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Public Relations
                                    </h3>
                                    <p class="text-gray-600">Communicating government initiatives to the public.</p>
                                </div>
                            </div>
                        </div>

                        <h2 id="current-leadership" class="text-3xl font-bold text-wabag-black mt-10 mb-6 border-b border-wabag-yellow pb-2">Current Leadership</h2>

                        <div class="grid md:grid-cols-2 gap-6 my-8">
                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                                <div class="bg-wabag-green h-32 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/150x150?text=Provincial+Administrator" alt="Provincial Administrator" class="h-24 w-24 rounded-full object-cover border-4 border-white shadow-md">
                                </div>
                                <div class="p-6 text-center">
                                    <h3 class="text-xl font-bold text-wabag-black">Hon. John Doe</h3>
                                    <p class="text-wabag-green font-semibold mb-2">Provincial Administrator</p>
                                    <p class="text-gray-600 text-sm">Chief executive officer of Enga Province</p>
                                </div>
                            </div>

                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                                <div class="bg-wabag-black h-32 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/150x150?text=Deputy+Administrator" alt="Deputy Provincial Administrator" class="h-24 w-24 rounded-full object-cover border-4 border-white shadow-md">
                                </div>
                                <div class="p-6 text-center">
                                    <h3 class="text-xl font-bold text-wabag-black">Mr. Michael Johnson</h3>
                                    <p class="text-wabag-green font-semibold mb-2">Deputy Provincial Administrator</p>
                                    <p class="text-gray-600 text-sm">Supporting the Provincial Administrator in all executive functions</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:w-1/3">
                    <div class="sticky top-6 space-y-6">
                        <!-- Quick Links -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                            <h3 class="text-xl font-bold text-wabag-green mb-4">Quick Links</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="#executive-authority" class="flex items-center text-wabag-black hover:text-wabag-yellow transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Executive Authority
                                    </a>
                                </li>
                                <li>
                                    <a href="#administrative-structure" class="flex items-center text-wabag-black hover:text-wabag-yellow transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Administrative Structure
                                    </a>
                                </li>
                                <li>
                                    <a href="#current-leadership" class="flex items-center text-wabag-black hover:text-wabag-yellow transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Current Leadership
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Key Departments -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                            <h3 class="text-xl font-bold text-wabag-green mb-4">Key Departments</h3>
                            <ul class="space-y-3">
                                @foreach([
                                    'District Administration',
                                    'Finance & Treasury',
                                    'Planning & Development',
                                    'Works & Infrastructure'
                                ] as $dept)
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-yellow mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-700">{{ $dept }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div class="bg-gradient-to-r from-wabag-green to-wabag-black text-white p-6 rounded-xl">
                            <h3 class="text-xl font-bold mb-3">Administrative Questions?</h3>
                            <p class="mb-4 opacity-90">Contact our Executive Services office for inquiries or support.</p>
                            <a href="/contact" class="inline-flex items-center justify-center bg-wabag-yellow text-wabag-black font-bold py-2 px-4 rounded hover:bg-yellow-500 transition">
                                Contact Executive Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection