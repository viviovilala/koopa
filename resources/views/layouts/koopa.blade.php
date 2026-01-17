<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Koopa')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-teal": "#00BFA5",
                        "brand-purple": "#7C4DFF",
                        "alert-orange": "#FF9100",
                        "bg-sidebar": "#F3F4F6",
                        "bg-main": "#F9FAFB",
                        "border-color": "#E5E7EB",
                        "text-main": "#1F2937",
                        "text-muted": "#6B7280"
                    },
                    fontFamily: {
                        "sans": ["Inter", "sans-serif"]
                    },
                    boxShadow: {
                        "soft-premium": "0 4px 12px 0 rgba(0, 0, 0, 0.04)"
                    },
                    borderRadius: {
                        "card": "16px"
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body { @apply bg-bg-main text-text-main antialiased; }
        }
        .sidebar-active {
            @apply bg-primary-teal text-white shadow-md shadow-primary-teal/20;
        }
        .standard-card {
            @apply bg-white border border-border-color rounded-card shadow-soft-premium transition-all duration-300;
        }
        .pixel-heart {
            image-rendering: pixelated;
            width: 18px;
            height: 18px;
            background-color: #EF4444;
            clip-path: polygon(10% 30%, 10% 10%, 30% 10%, 30% 30%, 50% 30%, 50% 10%, 70% 10%, 70% 30%, 90% 30%, 90% 60%, 70% 60%, 70% 80%, 50% 80%, 50% 100%, 30% 100%, 30% 80%, 10% 80%, 10% 60%);
            display: inline-block;
        }
    </style>
    @stack('head')
</head>
<body class="font-sans">
    @yield('content')
    @stack('scripts')
</body>
</html>
