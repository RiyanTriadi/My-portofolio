<nav class="fixed top-0 z-40 flex w-screen justify-center bg-transparent shadow-sm">
    <div class="navbar container mx-auto w-[95%]">

        <div class="flex-1">
            <a class="text-xl font-black text-olive-50" href="#home">RIYAN TRIADI</a>
        </div>

        <div class="hidden flex-none md:flex">
            <ul class="menu menu-horizontal [--menu-active-bg:var(--color-olive-800)] [--menu-active-fg:var(--color-olive-50)] px-1 font-medium text-olive-50">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="flex-none md:hidden">
            <div class="dropdown dropdown-end">

                <div tabindex="0" role="button" class="btn btn-ghost btn-circle bg-transparent border-none shadow-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-olive-50" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>

                <ul tabindex="0"
                    class="menu menu-md [--menu-active-bg:var(--color-olive-800)] [--menu-active-fg:var(--color-olive-50)] dropdown-content bg-olive-600 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div>
        </div>

    </div>
</nav>
