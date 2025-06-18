<!-- Simplicity is an acquired taste. - Katharine Gerould -->
<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
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

        <x-header />

        <x-survey-section />


        <x-footer />

    </div>
    @fluxScripts
    @livewireScripts
</body>

</html>
