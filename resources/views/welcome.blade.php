<head>
    @livewireStyles
    @fluxAppearance
    <link rel="preconnect" href="https://fonts.bunny.net">    
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
 
</head>
<body>
    <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode" />
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <h3>Ola mundo</h3>
        @livewire('menu.custom-header')

    </body>


    
    @livewireScripts
    @fluxScripts
</body>