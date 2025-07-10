@extends('layouts.public')

@section('title', 'MP\'s Message - Wabag District Development Authority')

@section('breadcrumb')
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-wabag-yellow transition-colors">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-wabag-yellow font-medium">MP's Message</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-wabag-black to-wabag-green text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-flag-pattern opacity-10"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Message from Our Member</h1>
            <p class="text-xl max-w-3xl mx-auto">Hon. Dr. Lino Tom, MP for Wabag Open</p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="#message" class="bg-wabag-yellow text-wabag-black px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 transition-all transform hover:-translate-y-1 shadow-lg">
                    Read Message
                </a>
                <a href="#priorities" class="border-2 border-wabag-yellow text-wabag-yellow px-6 py-3 rounded-full font-semibold hover:bg-wabag-yellow hover:bg-opacity-20 transition-all">
                    Our Priorities
                </a>
            </div>
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
                <li>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('about') }}" class="ml-1 text-gray-600 hover:text-wabag-yellow transition-colors md:ml-2">About Wabag DDA</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-wabag-yellow font-medium md:ml-2">MP's Message</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <!-- MP's Message Section -->
    <section id="message" class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- MP's Profile Card -->
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden border border-gray-100">
                        <div class="relative bg-gray-100 bg-white p-4 rounded-xl">
                            <img src="{{ asset('images/about-us/hon-dr-lino-tom.jpg') }}"
                                 alt="Hon. Dr. Lino Tom, MP for Wabag Open"
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-2xl font-bold text-wabag-black">Hon. Dr. Lino Tom</h3>
                            <p class="text-gray-600 mb-4">Member for Wabag Open</p>
                            
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="bg-wabag-light p-2 rounded-full hover:bg-wabag-yellow hover:text-wabag-black transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-wabag-light p-2 rounded-full hover:bg-wabag-yellow hover:text-wabag-black transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Content -->
                <div class="lg:w-2/3">
                    <div class="prose max-w-none">
                        <h2 class="text-3xl md:text-4xl font-bold text-wabag-black mb-6">My Commitment to Wabag District</h2>

                        <p class="text-lg text-gray-700 mb-6">Dear constituents and visitors,</p>

                        <p class="text-gray-700 mb-6">It is both an honor and privilege to serve as your elected representative in the National Parliament. Since taking office, my team and I at the Wabag District Development Authority have worked tirelessly to deliver on our campaign promises and improve the lives of all Wabag residents.</p>

                        <div id="priorities" class="bg-wabag-light p-6 rounded-xl border-l-4 border-wabag-yellow mb-8">
                            <h3 class="text-2xl font-bold text-wabag-black mb-4">Our Development Priorities</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-wabag-yellow bg-opacity-20 p-1.5 rounded-full mr-4 mt-1">
                                        <svg class="h-5 w-5 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-wabag-black">Infrastructure Development</h4>
                                        <p class="text-gray-600">Roads, bridges, and public facilities to connect our communities</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-wabag-yellow bg-opacity-20 p-1.5 rounded-full mr-4 mt-1">
                                        <svg class="h-5 w-5 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-wabag-black">Education & Capacity Building</h4>
                                        <p class="text-gray-600">Investing in our future through quality education and training</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-wabag-yellow bg-opacity-20 p-1.5 rounded-full mr-4 mt-1">
                                        <svg class="h-5 w-5 text-wabag-yellow" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-wabag-black">Healthcare Services</h4>
                                        <p class="text-gray-600">Improving access to quality healthcare for all residents</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-gradient-to-r from-wabag-green to-wabag-black text-white p-6 rounded-xl shadow-lg mb-8">
                            <div class="flex items-center mb-4">
                                <div class="bg-white bg-opacity-20 p-2 rounded-full mr-4">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Project Progress</h3>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                                    <div class="text-3xl font-bold mb-1">42</div>
                                    <div class="text-sm opacity-90">Completed Projects</div>
                                </div>
                                <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                                    <div class="text-3xl font-bold mb-1">18</div>
                                    <div class="text-sm opacity-90">Ongoing Projects</div>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray-700 mb-6">I'm proud to report that we have completed 42 projects to date, with 18 more currently underway. The projects highlighted on this website demonstrate our commitment to transparent, accountable governance and equitable development across all LLGs in our district.</p>

                        <p class="text-gray-700 mb-8">As we move forward, I remain committed to listening to your concerns and working together to build a better future for Wabag. I encourage you to explore our projects, attend community consultations, and share your ideas for our district's development.</p>

                        <div class="border-t border-gray-200 pt-8">
                            <p class="font-medium text-wabag-black">Yours in service,</p>
                            <div class="mt-6">
                                <img src="{{ asset('images/signature/signature.svg') }}" alt="Signature" class="h-20">
                                <p class="mt-2 text-wabag-black font-medium">Hon. Dr. Lino Tom</p>
                                <p class="text-gray-600">Member for Wabag Open</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-wabag-light">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-wabag-black mb-4">Get Involved in Our District's Future</h2>
                <p class="text-gray-600 mb-8">Join us in developing Wabag District. Attend our next community consultation or share your feedback directly with our office.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact" class="bg-wabag-yellow text-wabag-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-500 transition-all shadow-lg transform hover:-translate-y-1">
                        Contact Our Office
                    </a>
                    <a href="/projects" class="border-2 border-wabag-black px-8 py-3 rounded-full font-semibold hover:bg-wabag-black hover:text-white transition-all">
                        View Our Projects
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection