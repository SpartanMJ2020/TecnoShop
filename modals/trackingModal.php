   <div id="tracking-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeTrackingModal()"></div>
    <div class="relative bg-slate-800 rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-auto neon-border slide-in">
     <div class="sticky top-0 bg-slate-800 border-b border-slate-700 p-6 flex items-center justify-between">
      <h3 class="text-xl font-bold">Seguimiento del Pedido</h3><button onclick="closeTrackingModal()" class="p-2 text-slate-400 hover:text-white transition-colors">
       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
       </svg></button>
     </div>
     <div id="tracking-content" class="p-8">
     </div>
    </div>
   </div><!-- Toast Notification -->
   <div id="toast" class="fixed bottom-4 right-4 transform translate-y-20 opacity-0 transition-all duration-300 z-50">
    <div class="bg-slate-800 rounded-xl px-6 py-4 shadow-xl border border-slate-700 flex items-center gap-3"><span id="toast-icon"></span> <span id="toast-message" class="text-sm"></span>
    </div>
   </div>