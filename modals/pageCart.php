    <section id="page-cart" class="page hidden">
     <div class="max-w-4xl mx-auto px-4 py-8">
      <h2 class="text-2xl font-bold mb-8">Carrito de Compras</h2>
      <div id="cart-empty" class="hidden text-center py-16">
       <p class="text-slate-400 mb-6">Tu carrito está vacío</p><button onclick="navigateTo('catalog')" class="px-6 py-3 bg-blue-600 hover:bg-blue-500 rounded-xl font-medium transition-colors">Ir al Catálogo</button>
      </div>
      <div id="cart-content" class="hidden">
       <div id="cart-items" class="space-y-4 mb-8"></div>
       <div class="bg-slate-800/50 rounded-2xl p-6 neon-border">
        <div class="flex justify-between items-center mb-4 pb-4 border-b border-slate-700"><span class="text-lg font-semibold">Total</span> <span id="cart-total" class="text-2xl font-bold text-blue-400">0,00 €</span>
        </div><button id="checkout-btn" onclick="processCheckout()" class="w-full py-4 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 rounded-xl font-semibold text-lg transition-all"> Finalizar Compra </button>
        <p id="login-notice" class="hidden text-center text-sm text-slate-400 mt-3">Debes iniciar sesión para comprar</p>
       </div>
      </div>
     </div>
    </section>