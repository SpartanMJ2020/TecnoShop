 <section id="page-catalog" class="page hidden">
     <div class="max-w-7xl mx-auto px-4 py-8">
      <div class="flex flex-col lg:flex-row gap-8"><!-- Filters Sidebar -->
       <aside class="lg:w-64 flex-shrink-0">
        <div class="bg-slate-800/50 rounded-2xl p-6 neon-border sticky top-24">
         <h3 class="font-bold mb-4 flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
          </svg> Filtros</h3>
         <div class="space-y-4">
          <div><label class="text-sm text-slate-400 mb-2 block">Categoría</label> <select id="filter-category" onchange="filterProducts()" class="w-full px-3 py-2 bg-slate-700 rounded-lg border border-slate-600 text-sm"> <option value="all">Todas</option> <option value="ordenadores">Ordenadores</option> <option value="componentes">Componentes</option> <option value="perifericos">Periféricos</option> </select>
          </div>
          <div><label class="text-sm text-slate-400 mb-2 block">Precio máximo</label> <input type="range" id="filter-price" min="0" max="3000" value="3000" onchange="filterProducts()" class="w-full accent-blue-500">
           <div class="flex justify-between text-xs text-slate-500 mt-1"><span>0€</span> <span id="price-display">3000€</span>
           </div>
          </div>
          <div><label class="text-sm text-slate-400 mb-2 block">Ordenar por</label> <select id="filter-sort" onchange="filterProducts()" class="w-full px-3 py-2 bg-slate-700 rounded-lg border border-slate-600 text-sm"> <option value="featured">Destacados</option> <option value="price-low">Precio: menor a mayor</option> <option value="price-high">Precio: mayor a menor</option> <option value="name">Nombre A-Z</option> </select>
          </div><button onclick="clearFilters()" class="w-full py-2 bg-slate-700 hover:bg-slate-600 rounded-lg text-sm transition-colors">Limpiar Filtros</button>
         </div>
        </div>
       </aside><!-- Products Grid -->
       <div class="flex-1">
        <div class="flex items-center justify-between mb-6">
         <h2 class="text-2xl font-bold">Catálogo de Productos</h2><span id="products-count" class="text-sm text-slate-400">0 productos</span>
        </div>
        <div id="catalog-products" class="grid md:grid-cols-2 xl:grid-cols-3 gap-6"></div>
       </div>
      </div>
     </div>
</section>