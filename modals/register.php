  <section id="page-register" class="page hidden">
     <div class="max-w-md mx-auto px-4 py-12">
      <div class="bg-slate-800/50 rounded-2xl p-8 neon-border">
       <h2 class="text-2xl font-bold mb-8 text-center">Crear Cuenta</h2>
       <form id="register-form" onsubmit="handleRegister(event)" class="space-y-4">
        <div><label for="register-name" class="block text-sm text-slate-400 mb-2">Nombre completo</label> <input type="text" id="register-name" required class="w-full px-4 py-3 bg-slate-700 rounded-xl border border-slate-600 text-white placeholder-slate-500" placeholder="Tu nombre">
        </div>
        <div><label for="register-email" class="block text-sm text-slate-400 mb-2">Email</label> <input type="email" id="register-email" required class="w-full px-4 py-3 bg-slate-700 rounded-xl border border-slate-600 text-white placeholder-slate-500" placeholder="tu@email.com">
        </div>
        <div><label for="register-password" class="block text-sm text-slate-400 mb-2">Contraseña</label> <input type="password" id="register-password" required class="w-full px-4 py-3 bg-slate-700 rounded-xl border border-slate-600 text-white placeholder-slate-500" placeholder="Mín. 8 caracteres" oninput="validatePasswordStrength()">
        </div><!-- Password Strength Indicator -->
        <div id="password-strength" class="space-y-2 bg-slate-700/50 p-3 rounded-lg">
         <div class="space-y-1">
          <div class="flex items-center gap-2 text-xs"><span id="strength-upper" class="w-2 h-2 rounded-full bg-slate-600"></span> <span class="text-slate-400">Mayúscula</span>
          </div>
          <div class="flex items-center gap-2 text-xs"><span id="strength-lower" class="w-2 h-2 rounded-full bg-slate-600"></span> <span class="text-slate-400">Minúscula</span>
          </div>
          <div class="flex items-center gap-2 text-xs"><span id="strength-number" class="w-2 h-2 rounded-full bg-slate-600"></span> <span class="text-slate-400">Número</span>
          </div>
          <div class="flex items-center gap-2 text-xs"><span id="strength-special" class="w-2 h-2 rounded-full bg-slate-600"></span> <span class="text-slate-400">Carácter especial (!@#$%^&amp;*)</span>
          </div>
          <div class="flex items-center gap-2 text-xs"><span id="strength-length" class="w-2 h-2 rounded-full bg-slate-600"></span> <span class="text-slate-400">Mínimo 8 caracteres</span>
          </div>
         </div>
         <div class="h-2 bg-slate-600 rounded-full overflow-hidden">
          <div id="strength-bar" class="h-full bg-red-500 w-0 transition-all duration-300"></div>
         </div>
        </div>
        <div><label for="register-confirm-password" class="block text-sm text-slate-400 mb-2">Confirmar contraseña</label> <input type="password" id="register-confirm-password" required class="w-full px-4 py-3 bg-slate-700 rounded-xl border border-slate-600 text-white placeholder-slate-500" placeholder="Repite tu contraseña" oninput="checkPasswordMatch()">
        </div>
        <div id="password-match-error" class="hidden text-red-400 text-sm flex items-center gap-2 py-2 px-3 bg-red-500/10 rounded-lg">
         <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewbox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
         </svg> Las contraseñas no coinciden
        </div>
        <div id="register-error" class="hidden text-red-400 text-sm text-center py-2 bg-red-500/10 rounded-lg"></div>
        <div id="register-success" class="hidden text-green-400 text-sm text-center py-2 bg-green-500/10 rounded-lg"></div><button type="submit" id="register-submit-btn" class="w-full py-4 bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-500 hover:to-pink-400 rounded-xl font-semibold transition-all disabled:opacity-50 disabled:cursor-not-allowed"> Crear Cuenta </button>
       </form>
       <div class="mt-6 text-center">
        <p class="text-slate-400 text-sm">¿Ya tienes cuenta? <button onclick="navigateTo('login')" class="text-blue-400 hover:text-blue-300">Inicia sesión</button></p>
       </div>
      </div>
     </div>
    </section>