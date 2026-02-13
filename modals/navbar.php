<header class="sticky top-0 z-50 bg-slate-900/95 backdrop-blur-md border-b border-slate-700/50">
    <div class="max-w-7xl mx-auto px-4 py-4">
     <div class="flex items-center justify-between gap-4">
      <div class="flex items-center gap-3 cursor-pointer flex-shrink-0" onclick="navigateTo('home')">
       <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
       </div>
       <div class="hidden sm:block">
        <h1 id="header-store-name" class="text-xl font-bold bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">TechStore</h1>
        <p id="header-slogan" class="text-xs text-slate-400">Tu destino tecnológico</p>
       </div>
      </div><div class="hidden md:flex items-center flex-1 max-w-xl">
       <div class="relative w-full"><input type="text" id="search-input" placeholder="Buscar productos..." class="w-full px-4 py-2 pl-10 bg-slate-800 rounded-lg border border-slate-700 text-white placeholder-slate-500 text-sm focus:border-blue-500 transition-colors" onkeyup="handleSearch(event)">
        <svg class="w-5 h-5 text-slate-500 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
       </div>
      </div>
      <nav class="hidden lg:flex items-center gap-4 flex-shrink-0"><button onclick="navigateTo('home')" class="text-slate-300 hover:text-blue-400 transition-colors text-sm font-medium">Inicio</button> <button onclick="navigateTo('catalog')" class="text-slate-300 hover:text-blue-400 transition-colors text-sm font-medium">Catálogo</button> <button onclick="navigateTo('categories')" class="text-slate-300 hover:text-blue-400 transition-colors text-sm font-medium">Categorías</button>
      </nav>
      <div class="flex items-center gap-3 flex-shrink-0"><button onclick="navigateTo('cart')" class="relative p-2 text-slate-300 hover:text-blue-400 transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg><span id="cart-count" class="absolute -top-1 -right-1 w-5 h-5 bg-blue-500 text-white text-xs rounded-full flex items-center justify-center font-bold hidden">0</span> </button>
       <div id="user-menu" class="relative"><button id="user-btn" onclick="toggleUserMenu()" class="flex items-center gap-2 px-3 py-2 rounded-lg bg-slate-800 hover:bg-slate-700 transition-colors neon-border">
         <svg class="w-5 h-5 text-slate-300" fill="none" stroke="currentColor" viewbox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
         </svg><span id="user-name-display" class="text-sm text-slate-300 hidden lg:block">Invitado</span> </button>
        <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-slate-800 rounded-lg shadow-xl border border-slate-700 overflow-hidden z-40">
         <div id="logged-out-menu"><button onclick="navigateTo('login')" class="w-full px-4 py-3 text-left text-sm text-slate-300 hover:bg-slate-700 transition-colors">Iniciar Sesión</button> <button onclick="navigateTo('register')" class="w-full px-4 py-3 text-left text-sm text-slate-300 hover:bg-slate-700 transition-colors">Registrarse</button>
         </div>
         <div id="logged-in-menu" class="hidden"><button onclick="navigateTo('orders')" class="w-full px-4 py-3 text-left text-sm text-slate-300 hover:bg-slate-700 transition-colors">Mis Pedidos</button> <button id="admin-btn" onclick="navigateTo('admin')" class="hidden w-full px-4 py-3 text-left text-sm text-slate-300 hover:bg-slate-700 transition-colors">Panel Admin</button> <button onclick="logout()" class="w-full px-4 py-3 text-left text-sm text-red-400 hover:bg-slate-700 transition-colors">Cerrar Sesión</button>
         </div>
        </div>
       </div>
      </div>
     </div><div class="md:hidden mt-3">
      <div class="relative w-full"><input type="text" id="search-input-mobile" placeholder="Buscar productos..." class="w-full px-4 py-2 pl-10 bg-slate-800 rounded-lg border border-slate-700 text-white placeholder-slate-500 text-sm focus:border-blue-500 transition-colors" onkeyup="handleSearch(event)">
       <svg class="w-5 h-5 text-slate-500 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
       </svg>
      </div>
     </div>
    </div>
   </header>