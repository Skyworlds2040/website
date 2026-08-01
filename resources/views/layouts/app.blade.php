<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'NEON EDICT | Miami Nightlife')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700;800;900&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .neon-glow {
            text-shadow: 0 0 20px rgba(228, 20, 69, 0.4);
        }

        .text-bleed {
            letter-spacing: -0.02em;
        }

        .text-stroke {
            -webkit-text-stroke: 1px currentColor;
            color: transparent;
        }

        .editorial-text-mask {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-gradient {
            background: linear-gradient(180deg, rgba(27, 28, 28, 0) 0%, rgba(27, 28, 28, 0.8) 100%);
        }

        .clip-slant {
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }

        .text-glow {
            text-shadow: 0 0 15px rgba(228, 20, 69, 0.4);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>
