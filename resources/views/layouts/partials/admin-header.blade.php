<header class="fixed top-0 left-72 right-0 h-16 bg-surface-container-lowest/90 backdrop-blur-md shadow-[0_1px_8px_rgba(4,38,94,0.04)] z-40 px-8 flex items-center justify-between gap-6">
            <div class="flex items-center gap-4 flex-1 max-w-xl">
                <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm"><span class="material-symbols-outlined text-[18px]">corporate_fare</span><span>Oxford Bureau</span><span class="text-outline-variant">/</span><span class="text-primary font-medium">Management Portal</span></div>
                <div class="relative flex-1"><span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span><input class="w-full h-10 pl-9 pr-4 rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary-container transition-all" placeholder="Search enquiries, services, CMS..." type="text" /></div>
            </div>
            <div class="flex items-center gap-4">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low"><span class="w-2 h-2 rounded-full bg-secondary"></span><span class="font-label-sm text-label-sm text-primary font-medium tracking-wide">System Live • Desk Hours Active</span></div><button class="relative p-2 rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"><span class="material-symbols-outlined text-[20px]">notifications</span><span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-secondary-container"></span></button>
                <div class="h-6 w-[1px] bg-outline-variant/40"></div>
                <div class="flex items-center gap-3 pl-1">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
                    <div class="hidden xl:flex flex-col text-left"><span class="font-label-md text-label-md text-on-surface font-semibold leading-tight">{{ auth()->user()->name }}</span><span class="font-body-sm text-body-sm text-on-surface-variant leading-none">{{ auth()->user()->email }}</span></div>
                </div>
            </div>
        </header>
