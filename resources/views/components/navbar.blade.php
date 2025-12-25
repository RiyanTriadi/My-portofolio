<nav class="sticky top-0 z-50 bg-teal/10 backdrop-blur-sm transition-all duration-300 shadow-lg " x-data="{ isOpen: false }">
    
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        
        <h1 class="font-black text-xl tracking-wider">
            <a href="#home" class="text-orange">RIYAN</a>
            <a href="#home">TRIADI</a>
        </h1>

        <div class="hidden md:flex items-center space-x-2">
            <a href="#home" class="px-4 py-2 rounded-lg hover:text-orange transition duration-300">Home</a>
            <a href="#about" class="px-4 py-2 rounded-lg hover:text-orange transition duration-300">About me</a>
            <a href="#projects" class="px-4 py-2 rounded-lg hover:text-orange transition duration-300">Projects</a>
            <a href="#contact" class="px-4 py-2 rounded-lg hover:text-orange transition duration-300">
                Contact
            </a>
        </div>

        <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-azure-100" viewBox="0 0 24 24">
                <path d="M4 18q-.425 0-.712-.288T3 17t.288-.712T4 16h16q.425 0 .713.288T21 17t-.288.713T20 18H4zm0-5q-.425 0-.712-.288T3 12t.288-.712T4 11h16q.425 0 .713.288T21 12t-.288.713T20 13H4zm0-5q-.425 0-.712-.288T3 7t.288-.712T4 6h16q.425 0 .713.288T21 7t-.288.713T20 8H4z"/>
            </svg>
        </button>
    </div>

    <div x-show="isOpen" 
        @click.away="isOpen = false"

        x-transition:enter="transition ease-in-out duration-400"
        x-transition:enter-start="opacity-0 -translate-y-5"
        x-transition:enter-end="opacity-100 translate-y-0"

        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-5"

        class="md:hidden absolute top-full left-0 w-full bg-teal/20 backdrop-blur-md">
        
        <div class="flex justify-center py-4 text-sm gap-4">
            <a href="#home" class="block py-2 px-3 rounded-full border border-orange hover:bg-orange hover:text-dark transition">Home</a>
            <a href="#about" class="block py-2 px-3 rounded-full border border-orange hover:bg-orange hover:text-dark transition">About me</a>
            <a href="#projects" class="block py-2 px-3 rounded-full border border-orange hover:bg-orange hover:text-dark transition">Projects</a>
            <a href="#contact" class="block py-2 px-3 rounded-full border border-orange hover:bg-orange hover:text-dark transition">Contact</a>
        </div>
    </div>
</nav>