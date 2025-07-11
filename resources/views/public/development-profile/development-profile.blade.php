@extends('layouts.public')

@section('title', 'Development Plans - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-yellow transition-colors">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-yellow font-medium">Development Plans</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-wabag-black to-wabag-green text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-flag-pattern opacity-10"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Development Plans</h1>
            <p class="text-xl max-w-3xl mx-auto">Strategic roadmap for sustainable development in Wabag District</p>
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
                        <span class="ml-1 text-wabag-yellow font-medium md:ml-2">Development Plans</span>
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
                        <p class="text-lg text-gray-700 mb-6">The Wabag District Development Authority has established comprehensive development plans in collaboration with provincial administration and donor partners to guide our district's growth and service delivery.</p>

                        <h2 id="partnerships" class="text-3xl font-bold text-wabag-black mt-10 mb-6 border-b border-wabag-yellow pb-2">Development Partners</h2>
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 mb-8">
                            <h3 class="text-xl font-bold text-wabag-green mb-4">Key Donor Agencies</h3>
                            <div class="flex flex-wrap gap-3">
                                @foreach(['AFFP', 'AIB', 'IFC', 'AUS-AID', 'ADB', 'EU', 'UNDP', 'WORLD BANK', 'PORGERA', 'PNGSDP', 'NZODA'] as $partner)
                                <span class="px-3 py-1 bg-wabag-light rounded-full text-sm border border-wabag-yellow">{{ $partner }}</span>
                                @endforeach
                            </div>
                        </div>

                        <h2 id="program-areas" class="text-3xl font-bold text-wabag-black mt-10 mb-6 border-b border-wabag-yellow pb-2">Program Implementation Areas</h2>

                        <div class="grid md:grid-cols-2 gap-6 my-6">
                            <!-- Health & Education -->
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-green h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Health & Education
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Improve Health Outcomes</li>
                                        <li>Sustainable Population Growth</li>
                                        <li>Tertiary & Vocational Education Excellence</li>
                                        <li>Improved Early Childhood, Junior & High School Outcomes</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Economic Sector -->
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-yellow h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-yellow mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Economic Sector
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Enga SME & Agro Micro Finance Facility</li>
                                        <li>Commercial Agriculture Development</li>
                                        <li>Boosting Employment Initiatives</li>
                                        <li>Enga Business, Trade & Investment Office</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Environmental Sustainability -->
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-black h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-black mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Environmental Sustainability
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Enga Hydro Power Grid</li>
                                        <li>Solar Household Farm Pumps</li>
                                        <li>Climate Resilient Green Growth Projects</li>
                                        <li>70% Access to Electricity, Water and Sanitation</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Infrastructure Development -->
                            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow border border-gray-200">
                                <div class="bg-wabag-yellow h-2"></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-wabag-black mb-3 flex items-center">
                                        <svg class="h-5 w-5 text-wabag-yellow mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Infrastructure Development
                                    </h3>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                        <li>Enga Infrastructure Plan implementation</li>
                                        <li>Establishment of Infrastructure Finance Facility</li>
                                        <li>Major projects completion by 2030</li>
                                        <li>Wabag-Wopenamado 4-lane Highway</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h2 id="provincial-collaboration" class="text-3xl font-bold text-wabag-black mt-10 mb-6 border-b border-wabag-yellow pb-2">Provincial Collaboration</h2>
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 mb-8">
                            <h3 class="text-xl font-bold text-wabag-green mb-3">Provincial Budget Priority Committee (PBPC)</h3>
                            <p class="text-gray-600">Our development plans are coordinated with the Enga Provincial Administration through the PBPC to ensure alignment with provincial priorities and resource allocation.</p>
                        </div>

                        <div class="bg-wabag-yellow bg-opacity-10 p-6 rounded-xl border-l-4 border-wabag-yellow my-8">
                            <h3 class="text-xl font-bold text-wabag-black mb-2">Implementation Framework</h3>
                            <p class="text-gray-700">All development projects are implemented through the Provincial Works & Transport Services (PWTS) and other specialized units to ensure quality and timely delivery.</p>
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
                                    <a href="#partnerships" class="flex items-center text-wabag-black hover:text-wabag-yellow transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Development Partners
                                    </a>
                                </li>
                                <li>
                                    <a href="#program-areas" class="flex items-center text-wabag-black hover:text-wabag-yellow transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Program Areas
                                    </a>
                                </li>
                                <li>
                                    <a href="#provincial-collaboration" class="flex items-center text-wabag-black hover:text-wabag-yellow transition">
                                        <svg class="h-4 w-4 mr-2 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Provincial Collaboration
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Key Projects -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                            <h3 class="text-xl font-bold text-wabag-green mb-4">Key Infrastructure Projects</h3>
                            <ul class="space-y-3">
                                @foreach([
                                    'Wabag-Wopenamado 4-lane Highway',
                                    'Enga Hydro Power Grid Expansion',
                                    'Rural Health Center Upgrades',
                                    'Vocational Training Centers'
                                ] as $project)
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-wabag-yellow mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-700">{{ $project }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div class="bg-gradient-to-r from-wabag-green to-wabag-black text-white p-6 rounded-xl">
                            <h3 class="text-xl font-bold mb-3">Development Questions?</h3>
                            <p class="mb-4 opacity-90">Contact our Planning & Monitoring Division for more information about our development plans.</p>
                            <a href="/contact" class="inline-flex items-center justify-center bg-wabag-yellow text-wabag-black font-bold py-2 px-4 rounded hover:bg-yellow-500 transition">
                                Contact Planning Division
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection