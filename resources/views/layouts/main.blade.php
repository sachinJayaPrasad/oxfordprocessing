<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <title>Oxford Processing - Bridging Talent, Building Future</title>
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
            "darkMode": "class",
            "theme": {
                "extend": {
                    "colors": {
                        "tertiary-fixed": "#ffdea4",
                        "tertiary": "#1e1300",
                        "on-tertiary-fixed-variant": "#5d4200",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#382600",
                        "on-tertiary": "#ffffff",
                        "surface": "#faf8ff",
                        "surface-container-low": "#f2f3ff",
                        "secondary-container": "#fdbe58",
                        "on-secondary-fixed": "#281800",
                        "on-secondary-fixed-variant": "#614000",
                        "inverse-on-surface": "#eef0ff",
                        "on-surface-variant": "#444650",
                        "on-primary-fixed-variant": "#2b457d",
                        "primary-container": "#04265e",
                        "secondary-fixed": "#ffddaf",
                        "surface-container-highest": "#dae2fd",
                        "on-surface": "#131b2e",
                        "surface-container-high": "#e2e7ff",
                        "surface-bright": "#faf8ff",
                        "inverse-surface": "#283044",
                        "on-secondary": "#ffffff",
                        "error": "#ba1a1a",
                        "outline-variant": "#c4c6d1",
                        "on-tertiary-container": "#b28a38",
                        "on-primary-fixed": "#001945",
                        "surface-tint": "#445d97",
                        "tertiary-fixed-dim": "#edc067",
                        "primary-fixed-dim": "#b0c6ff",
                        "surface-dim": "#d2d9f4",
                        "on-primary-container": "#778fcd",
                        "on-tertiary-fixed": "#261900",
                        "on-error-container": "#93000a",
                        "on-error": "#ffffff",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "primary": "#001238",
                        "on-background": "#131b2e",
                        "primary-fixed": "#d9e2ff",
                        "secondary-fixed-dim": "#fabc55",
                        "surface-variant": "#dae2fd",
                        "outline": "#747781",
                        "on-secondary-container": "#724d00",
                        "background": "#faf8ff",
                        "secondary": "#7f5600",
                        "inverse-primary": "#b0c6ff",
                        "surface-container": "#eaedff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-md": "3rem",
                        "space-xs": "0.25rem",
                        "gutter-sm": "1rem",
                        "space-lg": "1.5rem",
                        "space-sm": "0.5rem",
                        "gutter": "1.5rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "margin-lg": "5rem",
                        "margin": "1.5rem",
                        "gutter-lg": "2rem"
                    },
                    "fontFamily": {
                        "display-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-xl": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "title-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg-mobile": ["2.25rem", {
                            "lineHeight": "2.75rem",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["1rem", {
                            "lineHeight": "1.5rem",
                            "fontWeight": "400"
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
                        "headline-md": ["1.5rem", {
                            "lineHeight": "2rem",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-xl": ["2.5rem", {
                            "lineHeight": "3rem",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["3.5rem", {
                            "lineHeight": "4.25rem",
                            "letterSpacing": "-0.025em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["0.875rem", {
                            "lineHeight": "1.25rem",
                            "fontWeight": "400"
                        }],
                        "title-md": ["1.125rem", {
                            "lineHeight": "1.625rem",
                            "fontWeight": "500"
                        }],
                        "label-sm": ["0.75rem", {
                            "lineHeight": "1rem",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "label-md": ["0.875rem", {
                            "lineHeight": "1.25rem",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }],
                        "headline-xl-mobile": ["1.75rem", {
                            "lineHeight": "2.25rem",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["1.125rem", {
                            "lineHeight": "1.75rem",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">
    @include('layouts.partials.main-header', ['activePage' => trim($__env->yieldContent('activePage'))])
    <main class="w-full pt-[116px] bg-surface min-h-[calc(100vh-200px)]">
        @yield('content')
    </main>
    @include('layouts.partials.main-whatsapp')
    @include('layouts.partials.main-footer')
</body>

</html>
