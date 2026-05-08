<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login | Prestige Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface": "#141d23",
                        "on-tertiary-fixed-variant": "#454748",
                        "on-secondary-fixed-variant": "#3f4274",
                        "secondary-fixed-dim": "#bfc2fc",
                        "on-secondary-container": "#4d5082",
                        "surface-bright": "#f6faff",
                        "inverse-primary": "#edc14a",
                        "surface-container-low": "#ecf5fe",
                        "surface-tint": "#765b00",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#4e4635",
                        "on-primary-fixed": "#241a00",
                        "on-background": "#141d23",
                        "tertiary-fixed-dim": "#c5c7c8",
                        "on-primary-fixed-variant": "#594400",
                        "tertiary-container": "#b4b6b7",
                        "surface-container": "#e6eff8",
                        "on-tertiary-container": "#454849",
                        "outline": "#7f7663",
                        "primary-fixed-dim": "#edc14a",
                        "background": "#f6faff",
                        "tertiary": "#5c5f60",
                        "secondary": "#575a8d",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d2dbe4",
                        "surface-container-high": "#e0e9f2",
                        "tertiary-fixed": "#e1e3e4",
                        "surface-variant": "#dbe4ed",
                        "surface-container-highest": "#dbe4ed",
                        "on-error-container": "#93000a",
                        "on-primary-container": "#5a4400",
                        "inverse-surface": "#293138",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffffff",
                        "on-tertiary-fixed": "#191c1d",
                        "primary": "#765b00",
                        "primary-fixed": "#ffdf93",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#c2c5ff",
                        "surface": "#f6faff",
                        "on-secondary-fixed": "#131546",
                        "on-primary": "#ffffff",
                        "primary-container": "#dbb13b",
                        "outline-variant": "#d1c5af",
                        "inverse-on-surface": "#e9f2fb",
                        "error-container": "#ffdad6",
                        "secondary-fixed": "#e0e0ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-collapsed": "80px",
                        "container-max": "1440px",
                        "margin-page": "2rem",
                        "sidebar-width": "280px",
                        "gutter": "1.5rem",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "h3": ["Manrope"],
                        "label-caps": ["Inter"],
                        "h1": ["Manrope"],
                        "h2": ["Manrope"],
                        "body-md": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "h3": ["1.5rem", {
                            "lineHeight": "1.4",
                            "fontWeight": "600"
                        }],
                        "label-caps": ["0.75rem", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "h1": ["2.5rem", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "h2": ["2rem", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "body-md": ["1rem", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "body-sm": ["0.875rem", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bg-gradient-brand {
            background: radial-gradient(circle at top right, #171a4a 0%, #171a4a 40%, #dbb13b 150%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="bg-gradient-brand min-h-screen flex items-center justify-center p-margin-page">
    <div class="w-full max-w-md">
        <!-- Brand Header (Floating above card) -->
        <div class="text-center mb-base-12 pb-8">
            <h1 class="font-h1 text-h1 text-white tracking-tight">AdminConsole</h1>
            <p class="font-body-md text-body-md text-primary-fixed-dim/80 mt-2">Executive Portal Access</p>
        </div>
        <!-- Login Card -->
        <div class="glass-card shadow-[0_24px_48px_rgba(23,26,74,0.24)] rounded-xl overflow-hidden border border-white/20 transition-all duration-250 ease-in-out">
            <div class="p-10">
                <header class="mb-8">
                    <h2 class="font-h2 text-h2 text-on-secondary-fixed-variant">Login | Prestige Admin</h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Please enter your credentials to access the secure dashboard.</p>
                </header>
                <!-- Feedback States (Hidden by default, shown for UI demonstration) -->
                <div class="hidden space-y-4 mb-6">
                    <!-- Error Placeholder -->
                    <div class="flex items-center gap-3 p-4 bg-error-container text-on-error-container rounded-lg border border-error/20">
                        <span class="material-symbols-outlined text-[20px]">error</span>
                        <span class="font-body-sm text-body-sm">Invalid email or password. Please try again.</span>
                    </div>
                    <!-- Success Placeholder -->
                    <div class="flex items-center gap-3 p-4 bg-surface-container-low text-primary rounded-lg border border-primary/20">
                        <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="font-body-sm text-body-sm">Authentication successful. Redirecting...</span>
                    </div>
                </div>
                <form class="space-y-6" onsubmit="return false;" method="$_POST" action="validar">
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant block" for="email">EMAIL ADDRESS</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                            <input class="w-full pl-12 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all duration-250 outline-none" id="email" name="email" placeholder="name@company.com" required="" type="email" />
                        </div>
                    </div>
                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label class="font-label-caps text-label-caps text-on-surface-variant block" for="password">PASSWORD</label>
                            <a class="font-body-sm text-body-sm text-primary hover:text-on-primary-container transition-colors duration-250" href="#">Forgot?</a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </div>
                            <input class="w-full pl-12 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all duration-250 outline-none" id="password" name="password" placeholder="••••••••" required="" type="password" />
                            <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-outline hover:text-on-surface transition-colors duration-250" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button class="w-full bg-primary-container text-on-primary-container font-h3 text-h3 py-4 rounded-lg shadow-sm hover:shadow-md hover:bg-[#c99e2f] transition-all duration-250 cubic-bezier(0.4, 0, 0.2, 1) flex justify-center items-center gap-2 group" type="submit">
                            Entrar
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform duration-250">arrow_forward</span>
                        </button>
                    </div>
                </form>
                <footer class="mt-8 pt-8 border-t border-outline-variant/30 text-center">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        Secured by <span class="font-bold text-on-secondary-fixed-variant">Prestige Guard™</span>
                    </p>
                </footer>
            </div>
        </div>
        <!-- Footer Links -->
        <div class="mt-8 flex justify-center gap-6">
            <a class="font-label-caps text-label-caps text-white/60 hover:text-white transition-colors duration-250" href="#">PRIVACY POLICY</a>
            <a class="font-label-caps text-label-caps text-white/60 hover:text-white transition-colors duration-250" href="#">TERMS OF SERVICE</a>
            <a class="font-label-caps text-label-caps text-white/60 hover:text-white transition-colors duration-250" href="#">SUPPORT</a>
        </div>
    </div>
    <!-- Background Decorative Element (Asymmetric) -->
    <div class="fixed top-0 right-0 -z-10 w-1/3 h-1/2 opacity-20">
        <div class="w-full h-full bg-primary-container/30 blur-[120px] rounded-full translate-x-1/2 -translate-y-1/2"></div>
    </div>
    <div class="fixed bottom-0 left-0 -z-10 w-1/4 h-1/3 opacity-10">
        <div class="w-full h-full bg-white/20 blur-[100px] rounded-full -translate-x-1/2 translate-y-1/2"></div>
    </div>
</body>

</html>
