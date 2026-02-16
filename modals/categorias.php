<section id="page-categories" class="page hidden">
     <div class="max-w-7xl mx-auto px-4 py-12">
      <div class="text-center mb-12">
       <h2 class="text-3xl font-bold mb-4">Explora por Categorías</h2>
       <p class="text-slate-400">Encuentra exactamente lo que necesitas</p>
      </div>
      <div class="grid md:grid-cols-3 gap-8 mb-16">
       <div onclick="filterByCategory('ordenadores')" class="group cursor-pointer bg-slate-800/50 rounded-2xl overflow-hidden neon-border card-glow">
        <div class="h-48 bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-6xl">
         💻
        </div>
        <div class="p-6">
         <h3 class="text-2xl font-bold mb-3">Ordenadores</h3>
         <p class="text-slate-400 mb-4">Equipos completos de última generación</p>
         <div class="space-y-2 text-sm text-slate-300">
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Portátiles y Ultrabooks</p>
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> PCs Gaming</p>
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Workstations Profesionales</p>
         </div><button class="mt-6 w-full py-3 bg-blue-600 hover:bg-blue-500 rounded-lg font-medium transition-colors">Ver Ordenadores</button>
        </div>
       </div>
       <div onclick="filterByCategory('componentes')" class="group cursor-pointer bg-slate-800/50 rounded-2xl overflow-hidden neon-border card-glow">
        <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center text-6xl">
         🔧
        </div>
        <div class="p-6">
         <h3 class="text-2xl font-bold mb-3">Componentes</h3>
         <p class="text-slate-400 mb-4">Hardware de vanguardia para tu PC</p>
         <div class="space-y-2 text-sm text-slate-300">
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-purple-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Procesadores y GPUs</p>
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-purple-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Memoria RAM DDR4/DDR5</p>
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-purple-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Almacenamiento SSD/NVMe</p>
         </div><button class="mt-6 w-full py-3 bg-purple-600 hover:bg-purple-500 rounded-lg font-medium transition-colors">Ver Componentes</button>
        </div>
       </div>
       <div onclick="filterByCategory('perifericos')" class="group cursor-pointer bg-slate-800/50 rounded-2xl overflow-hidden neon-border card-glow">
        <div class="h-48 bg-gradient-to-br from-green-600 to-emerald-500 flex items-center justify-center text-6xl">
         🎮
        </div>
        <div class="p-6">
         <h3 class="text-2xl font-bold mb-3">Periféricos</h3>
         <p class="text-slate-400 mb-4">Accesorios gaming de alta calidad</p>
         <div class="space-y-2 text-sm text-slate-300">
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-green-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Monitores 4K Gaming</p>
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-green-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Teclados Mecánicos RGB</p>
          <p class="flex items-center gap-2">
           <svg class="w-4 h-4 text-green-400" fill="currentColor" viewbox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
           </svg> Ratones y Auriculares</p>
         </div><button class="mt-6 w-full py-3 bg-green-600 hover:bg-green-500 rounded-lg font-medium transition-colors">Ver Periféricos</button>
        </div>
       </div>
      </div>
      <div class="grid md:grid-cols-4 gap-6">
       <div class="bg-slate-800/50 rounded-xl p-6 text-center neon-border">
        <p class="text-3xl font-bold text-blue-400 mb-2">12+</p>
        <p class="text-slate-400 text-sm">Productos Disponibles</p>
       </div>
       <div class="bg-slate-800/50 rounded-xl p-6 text-center neon-border">
        <p class="text-3xl font-bold text-green-400 mb-2">100%</p>
        <p class="text-slate-400 text-sm">Garantía Oficial</p>
       </div>
       <div class="bg-slate-800/50 rounded-xl p-6 text-center neon-border">
        <p class="text-3xl font-bold text-purple-400 mb-2">24h</p>
        <p class="text-slate-400 text-sm">Envío Rápido</p>
       </div>
       <div class="bg-slate-800/50 rounded-xl p-6 text-center neon-border">
        <p class="text-3xl font-bold text-orange-400 mb-2">★4.8</p>
        <p class="text-slate-400 text-sm">Valoración Media</p>
       </div>
      </div>
     </div>
</section><!-- Catalog Page with Filters -->