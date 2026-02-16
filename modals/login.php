    <section id="page-login" class="page hidden">
     <div class="max-w-md mx-auto px-4 py-12">
      <div class="bg-slate-800/50 rounded-2xl p-8 neon-border">
       <h2 class="text-2xl font-bold mb-8 text-center">Iniciar Sesión</h2>
       <form id="login-form" onsubmit="handleLogin(event)" class="space-y-4">
        <div><label for="login-email" class="block text-sm text-slate-400 mb-2">Email</label> <input type="email" id="login-email" required class="w-full px-4 py-3 bg-slate-700 rounded-xl border border-slate-600 text-white placeholder-slate-500" placeholder="tu@email.com">
        </div>
        <div><label for="login-password" class="block text-sm text-slate-400 mb-2">Contraseña</label> <input type="password" id="login-password" required class="w-full px-4 py-3 bg-slate-700 rounded-xl border border-slate-600 text-white placeholder-slate-500" placeholder="••••••••">
        </div>
        <div id="login-error" class="hidden text-red-400 text-sm text-center py-2 bg-red-500/10 rounded-lg"></div><button type="submit" id="login-submit-btn" class="w-full py-4 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 rounded-xl font-semibold transition-all"> Iniciar Sesión </button>
       </form>
       <div class="mt-6 text-center">
        <p class="text-slate-400 text-sm">¿No tienes cuenta? <button onclick="navigateTo('register')" class="text-blue-400 hover:text-blue-300">Regístrate</button></p>
       </div>
      </div>
     </div>
    </section>