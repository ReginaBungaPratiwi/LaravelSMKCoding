<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f9fafb; /* Very light gray background */
                margin: 0;
                padding: 0;
            }

            /* Fullscreen background with gradient */
            .background {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(135deg, #e5e7eb, #d1d5db); /* Lighter gray gradient */
                z-index: -1;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                padding: 0 20px; /* Spacing on small screens */
            }

            .form-container {
                background: white;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
                text-align: center;
            }

            .form-title {
                font-size: 24px;
                font-weight: 600;
                color: #374151; /* Darker gray for the title */
                margin-bottom: 20px;
            }

            .form-input {
                width: 100%;
                padding: 14px;
                margin-bottom: 20px;
                border-radius: 8px;
                border: 1px solid #e5e7eb; /* Very light gray border */
                background-color: #f3f4f6; /* Light gray input background */
                font-size: 16px;
                transition: all 0.3s;
            }

            .form-input:focus {
                border-color: #9ca3af; /* Even lighter gray border on focus */
                box-shadow: 0 0 5px rgba(156, 163, 175, 0.3);
                outline: none;
            }

            .submit-btn {
                width: 100%;
                padding: 14px;
                background-color: #9ca3af; /* Light gray for the button */
                color: white;
                font-size: 16px;
                border-radius: 8px;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.2s ease;
            }

            .submit-btn:hover {
                background-color: #6b7280; /* Darker gray on hover */
                transform: scale(1.05);
            }

            .footer-text {
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
                color: #6b7280; /* Lighter gray text for footer */
            }

            .footer-text a {
                color: #9ca3af; /* Light gray for links */
                text-decoration: none;
            }

            .footer-text a:hover {
                text-decoration: underline;
            }

            /* Responsive Design */
            @media (max-width: 480px) {
                .form-container {
                    padding: 25px;
                }

                .form-input {
                    padding: 12px;
                    font-size: 14px;
                }

                .submit-btn {
                    padding: 12px;
                    font-size: 14px;
                }
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Background Gradient -->
        <div class="background"></div>

        <!-- Centered Container for the Form -->
        <div class="container">
            <div class="form-container">
                <div class="form-title">
                    @if(Route::currentRouteName() == 'login')
                        {{ __('Login') }} 
                    @elseif(Route::currentRouteName() == 'register')
                        {{ __('Register') }} 
                    @endif
                </div>

                <!-- Form content -->
                {{ $slot }} <!-- Tempat untuk konten form login atau register -->
            </div>
        </div>
    </body>
</html>
