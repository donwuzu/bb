<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BB')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a365d',
                        secondary: '#2c5282',
                        accent: '#d69e2e',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
          document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("mobile-menu-button");
        const menu = document.getElementById("menu");

        if (menuBtn && menu) {
            menuBtn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
                menu.classList.toggle("flex"); // for mobile
                menu.classList.toggle("flex-col"); // vertical layout
            });
        }
    });
    </script>
</body>
</html>
