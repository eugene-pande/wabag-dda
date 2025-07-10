<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Wabag DDA Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .admin-panel-info {
                background: linear-gradient(135deg, #1A4314 0%, #000000 100%);
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col lg:flex-row">
            <!-- Left Side - Admin Panel Information -->
            <div class="admin-panel-info lg:w-1/2 text-white p-12 flex flex-col justify-center">
                <div class="max-w-md mx-auto">
                    <h1 class="text-3xl font-bold mb-6">Admin Panel Access</h1>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-wabag-yellow bg-opacity-20 p-2 rounded-full mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Restricted Access</h3>
                                <p class="text-gray-300">This portal is exclusively for authorized Wabag DDA administrators.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-wabag-yellow bg-opacity-20 p-2 rounded-full mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Secure Login</h3>
                                <p class="text-gray-300">All login attempts are monitored and recorded for security purposes.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-wabag-yellow bg-opacity-20 p-2 rounded-full mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-wabag-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">User Management</h3>
                                <p class="text-gray-300">Administrators can manage user accounts and permissions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="w-full lg:w-1/2 flex items-center justify-center p-6 bg-gray-50">
                <div class="w-full max-w-md">
                    <div class="bg-white rounded-xl shadow-sm p-8">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-800 mb-2">Admin Login</h2>
                            <p class="text-gray-600">Enter your credentials to access the dashboard</p>
                        </div>

                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
