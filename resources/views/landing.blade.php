<!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corporate-Analyzer - Employee Survey & Feedback Platform</title>
    <meta name="description"
        content="Transform your organization with powerful employee surveys and actionable insights" />
    <meta name="author" content="Corporate-Analyzer" />

    <meta property="og:title" content="Corporate-Analyzer - Employee Survey Platform" />
    <meta property="og:description"
        content="Transform your organization with powerful employee surveys and actionable insights" />
    @livewireStyles
    @fluxAppearance
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-white">

        {{-- Header (+nav) --}}
        <x-header />

        {{-- Main Content --}}
        {{-- Hero Section --}}
        <x-hero-section />

        {{-- Metrics Section --}}
        <x-metrics-section />

        {{-- Features Section --}}
        <x-features-section />


        {{-- Analytics Section --}}
        <x-analytics-section />


        {{-- Pricing Section  --}}
        <x-pricing-section />


        {{-- Testimonials --}}
        <x-testimonials-section />


        {{-- About Section --}}
        <x-about-section />


        {{-- Contact Section --}}
        <x-contact-section />

        {{-- Footer --}}
        <x-footer />
    </div>
    @fluxScripts
    @livewireScripts
</body>

</html>
