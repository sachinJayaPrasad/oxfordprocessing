<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_dashboard" name="shell-type" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed": "#ffdea4",
                        "surface-container": "#eaedff",
                        "outline-variant": "#c4c6d1",
                        "on-tertiary-fixed": "#261900",
                        "on-secondary-fixed": "#281800",
                        "on-primary-fixed": "#001945",
                        "on-tertiary-container": "#b28a38",
                        "secondary-container": "#fdbe58",
                        "on-tertiary-fixed-variant": "#5d4200",
                        "primary-fixed": "#d9e2ff",
                        "on-error": "#ffffff",
                        "on-surface-variant": "#444650",
                        "on-surface": "#131b2e",
                        "surface-dim": "#d2d9f4",
                        "surface": "#faf8ff",
                        "secondary-fixed": "#ffddaf",
                        "error": "#ba1a1a",
                        "outline": "#747781",
                        "surface-container-low": "#f2f3ff",
                        "surface-container-high": "#e2e7ff",
                        "secondary-fixed-dim": "#fabc55",
                        "inverse-surface": "#283044",
                        "on-secondary-fixed-variant": "#614000",
                        "on-background": "#131b2e",
                        "on-secondary-container": "#724d00",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "background": "#faf8ff",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#edc067",
                        "primary": "#001238",
                        "error-container": "#ffdad6",
                        "surface-bright": "#faf8ff",
                        "inverse-on-surface": "#eef0ff",
                        "tertiary-container": "#382600",
                        "secondary": "#7f5600",
                        "surface-variant": "#dae2fd",
                        "primary-container": "#04265e",
                        "tertiary": "#1e1300",
                        "surface-container-highest": "#dae2fd",
                        "on-primary-container": "#778fcd",
                        "primary-fixed-dim": "#b0c6ff",
                        "on-primary": "#ffffff",
                        "on-primary-fixed-variant": "#2b457d",
                        "inverse-primary": "#b0c6ff",
                        "surface-tint": "#445d97"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "space-sm": "0.5rem",
                        "space-xs": "0.25rem",
                        "gutter-sm": "1rem",
                        "gutter-lg": "2rem",
                        "gutter": "1.5rem",
                        "margin-lg": "5rem",
                        "space-lg": "1.5rem",
                        "space-xl": "2.5rem",
                        "margin": "1.5rem",
                        "space-md": "1rem",
                        "margin-md": "3rem"
                    },
                    fontFamily: {
                        "headline-xl": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "title-md": ["Inter"]
                    },
                    fontSize: {
                        "headline-xl": ["2.5rem", {
                            "lineHeight": "3rem",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["1.5rem", {
                            "lineHeight": "2rem",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["3.5rem", {
                            "lineHeight": "4.25rem",
                            "letterSpacing": "-0.025em",
                            "fontWeight": "700"
                        }],
                        "headline-lg": ["2rem", {
                            "lineHeight": "2.5rem",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "600"
                        }],
                        "headline-sm": ["1.25rem", {
                            "lineHeight": "1.75rem",
                            "letterSpacing": "-0.005em",
                            "fontWeight": "600"
                        }],
                        "display-lg-mobile": ["2.25rem", {
                            "lineHeight": "2.75rem",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["0.875rem", {
                            "lineHeight": "1.25rem",
                            "fontWeight": "400"
                        }],
                        "headline-xl-mobile": ["1.75rem", {
                            "lineHeight": "2.25rem",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["1.125rem", {
                            "lineHeight": "1.75rem",
                            "fontWeight": "400"
                        }],
                        "label-md": ["0.875rem", {
                            "lineHeight": "1.25rem",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "label-sm": ["0.75rem", {
                            "lineHeight": "1rem",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["1rem", {
                            "lineHeight": "1.5rem",
                            "fontWeight": "400"
                        }],
                        "title-md": ["1.125rem", {
                            "lineHeight": "1.625rem",
                            "fontWeight": "500"
                        }]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased">
    @include('layouts.partials.admin-sidebar', ['activePage' => trim($__env->yieldContent('activePage'))])
    <div class="pl-72">
        @include('layouts.partials.admin-header')
        <main class="w-full pt-16 bg-background px-8 pb-12">
            @yield('content')
        </main>
    </div>
</body>

</html>
