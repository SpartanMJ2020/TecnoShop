
    // Productos
    const defaultProducts = [
      { id: 'laptop-1', name: 'Laptop Pro X1', category: 'ordenadores', price: 1299, icon: '💻', specs: '16GB RAM, 512GB SSD', description: 'Portátil de alto rendimiento', stock: 15 },
      { id: 'gaming-1', name: 'Gaming Beast', category: 'ordenadores', price: 1899, icon: '🎮', specs: '32GB RAM, RTX 4070', description: 'PC gaming última generación', stock: 8 },
      { id: 'monitor-1', name: 'Monitor 4K 32"', category: 'perifericos', price: 499, icon: '🖥️', specs: '144Hz, IPS', description: 'Monitor gaming 4K', stock: 10 },
      { id: 'teclado-1', name: 'Teclado Mecánico', category: 'perifericos', price: 129, icon: '⌨️', specs: 'Cherry MX Red', description: 'Teclado gaming RGB', stock: 35 },
      { id: 'gpu-1', name: 'GPU RTX 4080', category: 'componentes', price: 1199, icon: '🔥', specs: '16GB GDDR6X', description: 'Tarjeta gráfica premium', stock: 12 },
      { id: 'cpu-1', name: 'CPU Intel i9', category: 'componentes', price: 589, icon: '⚡', specs: '24 cores, 5.8GHz', description: 'Procesador de última generación', stock: 25 }
    ];
    
    const categories = [
      { id: 'ordenadores', name: 'Ordenadores', icon: '💻', color: 'from-blue-500 to-cyan-400' },
      { id: 'perifericos', name: 'Periféricos', icon: '⌨️', color: 'from-purple-500 to-pink-400' },
      { id: 'componentes', name: 'Componentes', icon: '⚡', color: 'from-orange-500 to-red-400' }
    ];
    
    // Estado
    let currentUser = null;
    let cart = [];
    let users = [];
    let orders = [];
    let trackingData = {};
    let searchResults = [];
    
    // Pasos de seguimiento
    const trackingSteps = ['Confirmado', 'En Preparación', 'En Tránsito', 'Entregado'];
    
    // Inicializar
    function initApp() {
      loadDataFromStorage();
      renderFeaturedProducts();
      navigateTo('home');
    }
    
    // Almacenamiento
    function saveDataToStorage() {
      localStorage.setItem('techstore_users', JSON.stringify(users));
      localStorage.setItem('techstore_orders', JSON.stringify(orders));
      localStorage.setItem('techstore_tracking', JSON.stringify(trackingData));
    }
    
    function loadDataFromStorage() {
      const storedUsers = localStorage.getItem('techstore_users');
      const storedOrders = localStorage.getItem('techstore_orders');
      const storedTracking = localStorage.getItem('techstore_tracking');
      
      users = storedUsers ? JSON.parse(storedUsers) : [];
      orders = storedOrders ? JSON.parse(storedOrders) : [];
      trackingData = storedTracking ? JSON.parse(storedTracking) : {};
    }
    
    // Navegación
    function navigateTo(page) {
      document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
      document.getElementById(`page-${page}`).classList.remove('hidden');
      document.getElementById('user-dropdown').classList.add('hidden');
      
      if (page === 'catalog') {
        renderCatalog();
      } else if (page === 'categories') {
        renderCategories();
      } else if (page === 'cart') {
        renderCart();
      } else if (page === 'orders') {
        if (!currentUser) {
          navigateTo('login');
          return;
        }
        renderOrders();
      }
      window.scrollTo(0, 0);
    }
    
    function toggleUserMenu() {
      document.getElementById('user-dropdown').classList.toggle('hidden');
    }
    
    // Búsqueda
    function handleSearch(event) {
      const query = event.target.value.toLowerCase();
      if (query.length === 0) return;
      
      searchResults = defaultProducts.filter(p => 
        p.name.toLowerCase().includes(query) || 
        p.description.toLowerCase().includes(query)
      );
      
      if (searchResults.length > 0) {
        renderSearchResults();
      }
    }
    
    function renderSearchResults() {
      const container = document.getElementById('catalog-products');
      container.innerHTML = searchResults.map(p => createProductCard(p)).join('');
      navigateTo('catalog');
    }
    
    // Validación de contraseña
    function validatePasswordStrength() {
      const password = document.getElementById('register-password').value;
      
      const hasUpper = /[A-Z]/.test(password);
      const hasLower = /[a-z]/.test(password);
      const hasNumber = /[0-9]/.test(password);
      const hasSpecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
      const hasLength = password.length >= 8;
      
      updateStrengthIndicator('strength-upper', hasUpper);
      updateStrengthIndicator('strength-lower', hasLower);
      updateStrengthIndicator('strength-number', hasNumber);
      updateStrengthIndicator('strength-special', hasSpecial);
      updateStrengthIndicator('strength-length', hasLength);
      
      const strength = [hasUpper, hasLower, hasNumber, hasSpecial, hasLength].filter(Boolean).length;
      const bar = document.getElementById('strength-bar');
      const strengthPercentages = [0, 20, 40, 60, 80, 100];
      const colors = ['bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-lime-500', 'bg-green-500', 'bg-green-600'];
      
      bar.style.width = strengthPercentages[strength] + '%';
      bar.className = `h-full transition-all duration-300 ${colors[strength]}`;
      
      checkPasswordMatch();
    }
    
    function updateStrengthIndicator(elementId, isValid) {
      const element = document.getElementById(elementId);
      if (isValid) {
        element.className = 'w-2 h-2 rounded-full bg-green-500';
      } else {
        element.className = 'w-2 h-2 rounded-full bg-slate-600';
      }
    }
    
    function checkPasswordMatch() {
      const password = document.getElementById('register-password').value;
      const confirmPassword = document.getElementById('register-confirm-password').value;
      const errorEl = document.getElementById('password-match-error');
      const submitBtn = document.getElementById('register-submit-btn');
      
      if (confirmPassword && password !== confirmPassword) {
        errorEl.classList.remove('hidden');
        submitBtn.disabled = true;
      } else {
        errorEl.classList.add('hidden');
        submitBtn.disabled = false;
      }
    }
    
    // Productos
    function renderFeaturedProducts() {
      const container = document.getElementById('featured-products');
      container.innerHTML = defaultProducts.slice(0, 4).map(p => createProductCard(p)).join('');
    }
    
    function renderCatalog() {
      const container = document.getElementById('catalog-products');
      container.innerHTML = defaultProducts.map(p => createProductCard(p)).join('');
      document.getElementById('products-count').textContent = defaultProducts.length + ' productos';
      document.getElementById('filter-category').value = 'all';
      document.getElementById('filter-price').value = '3000';
      document.getElementById('price-display').textContent = '3000€';
      document.getElementById('filter-sort').value = 'featured';
    }
    
    function createProductCard(product) {
      return `
        <div class="bg-slate-800/50 rounded-2xl overflow-hidden neon-border card-glow">
          <div class="h-40 bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center text-5xl">
            ${product.icon}
          </div>
          <div class="p-5">
            <h3 class="font-bold mb-2">${product.name}</h3>
            <p class="text-slate-400 text-sm mb-3">${product.specs}</p>
            <div class="flex items-center justify-between">
              <span class="text-xl font-bold text-blue-400">${product.price} €</span>
              <button onclick="addToCart('${product.id}')" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-sm font-medium transition-colors">
                Añadir
              </button>
            </div>
          </div>
        </div>
      `;
    }
    
    // Filtros
    function filterProducts() {
      const category = document.getElementById('filter-category').value;
      const maxPrice = parseInt(document.getElementById('filter-price').value);
      const sort = document.getElementById('filter-sort').value;
      
      document.getElementById('price-display').textContent = maxPrice + '€';
      
      let filtered = defaultProducts.filter(p => {
        const catMatch = category === 'all' || p.category === category;
        const priceMatch = p.price <= maxPrice;
        return catMatch && priceMatch;
      });
      
      // Ordenar
      if (sort === 'price-low') {
        filtered.sort((a, b) => a.price - b.price);
      } else if (sort === 'price-high') {
        filtered.sort((a, b) => b.price - a.price);
      } else if (sort === 'name') {
        filtered.sort((a, b) => a.name.localeCompare(b.name));
      }
      
      const container = document.getElementById('catalog-products');
      container.innerHTML = filtered.map(p => createProductCard(p)).join('');
      document.getElementById('products-count').textContent = filtered.length + ' productos';
    }
    
    function filterByCategory(categoryId) {
      navigateTo('catalog');
      setTimeout(() => {
        document.getElementById('filter-category').value = categoryId;
        filterProducts();
      }, 100);
    }
    
    function clearFilters() {
      document.getElementById('filter-category').value = 'all';
      document.getElementById('filter-price').value = '3000';
      document.getElementById('price-display').textContent = '3000€';
      document.getElementById('filter-sort').value = 'featured';
      renderCatalog();
    }
    
    // Carrito
    function addToCart(productId) {
      const product = defaultProducts.find(p => p.id === productId);
      if (!product) return;
      
      const existing = cart.find(item => item.productId === productId);
      if (existing) {
        existing.quantity++;
      } else {
        cart.push({ productId, quantity: 1 });
      }
      
      updateCartCount();
      showToast('success', `${product.name} añadido al carrito`);
    }
    
    function updateCartCount() {
      const count = cart.reduce((sum, item) => sum + item.quantity, 0);
      const countEl = document.getElementById('cart-count');
      if (count > 0) {
        countEl.textContent = count;
        countEl.classList.remove('hidden');
      } else {
        countEl.classList.add('hidden');
      }
    }
    
    function renderCart() {
      const emptyEl = document.getElementById('cart-empty');
      const contentEl = document.getElementById('cart-content');
      const itemsEl = document.getElementById('cart-items');
      
      if (cart.length === 0) {
        emptyEl.classList.remove('hidden');
        contentEl.classList.add('hidden');
        return;
      }
      
      emptyEl.classList.add('hidden');
      contentEl.classList.remove('hidden');
      
      let subtotal = 0;
      itemsEl.innerHTML = cart.map(item => {
        const product = defaultProducts.find(p => p.id === item.productId);
        if (!product) return '';
        
        const itemTotal = product.price * item.quantity;
        subtotal += itemTotal;
        
        return `
          <div class="bg-slate-800/50 rounded-xl p-4 flex items-center gap-4 neon-border">
            <div class="w-20 h-20 bg-gradient-to-br from-slate-700 to-slate-800 rounded-lg flex items-center justify-center text-3xl">
              ${product.icon}
            </div>
            <div class="flex-1">
              <h4 class="font-semibold">${product.name}</h4>
              <p class="text-sm text-slate-400">${product.price} € / unidad</p>
            </div>
            <div class="flex items-center gap-2">
              <button onclick="updateCartQuantity('${item.productId}', -1)" class="w-8 h-8 rounded-lg bg-slate-700 hover:bg-slate-600 text-center">−</button>
              <span class="w-8 text-center">${item.quantity}</span>
              <button onclick="updateCartQuantity('${item.productId}', 1)" class="w-8 h-8 rounded-lg bg-slate-700 hover:bg-slate-600 text-center">+</button>
            </div>
            <div class="w-24 text-right">
              <p class="font-bold text-blue-400">${itemTotal} €</p>
            </div>
            <button onclick="removeFromCart('${item.productId}')" class="p-2 text-slate-400 hover:text-red-400">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
              </svg>
            </button>
          </div>
        `;
      }).join('');
      
      document.getElementById('cart-total').textContent = `${subtotal.toFixed(2)} €`;
      
      const loginNotice = document.getElementById('login-notice');
      if (!currentUser) {
        loginNotice.classList.remove('hidden');
      } else {
        loginNotice.classList.add('hidden');
      }
    }
    
    function updateCartQuantity(productId, delta) {
      const item = cart.find(i => i.productId === productId);
      if (!item) return;
      
      item.quantity += delta;
      if (item.quantity <= 0) {
        cart = cart.filter(i => i.productId !== productId);
      }
      
      updateCartCount();
      renderCart();
    }
    
    function removeFromCart(productId) {
      cart = cart.filter(i => i.productId !== productId);
      updateCartCount();
      renderCart();
      showToast('info', 'Producto eliminado');
    }
    
    // Checkout
    function processCheckout() {
      if (!currentUser) {
        showToast('error', 'Debes iniciar sesión');
        navigateTo('login');
        return;
      }
      
      if (cart.length === 0) {
        showToast('error', 'Tu carrito está vacío');
        return;
      }
      
      const total = cart.reduce((sum, item) => {
        const product = defaultProducts.find(p => p.id === item.productId);
        return sum + (product ? product.price * item.quantity : 0);
      }, 0);
      
      const trackingNumber = `TS${Date.now().toString().slice(-8)}`;
      const orderId = Date.now().toString();
      
      const order = {
        id: orderId,
        userEmail: currentUser.email,
        userName: currentUser.name,
        items: JSON.parse(JSON.stringify(cart)),
        total: total,
        status: 'confirmado',
        date: new Date().toISOString(),
        trackingNumber: trackingNumber
      };
      
      orders.push(order);
      
      // Inicializar seguimiento con todos los pasos
      trackingData[orderId] = {
        currentStep: 0,
        steps: trackingSteps.map((step, index) => ({
          name: step,
          date: new Date(Date.now() + (index * 24 * 60 * 60 * 1000)).toISOString(),
          completed: index === 0
        }))
      };
      
      saveDataToStorage();
      
      cart = [];
      updateCartCount();
      showToast('success', '¡Pedido realizado con éxito!');
      setTimeout(() => navigateTo('orders'), 1500);
    }
    
    // Autenticación
    function handleLogin(event) {
      event.preventDefault();
      
      const email = document.getElementById('login-email').value;
      const password = document.getElementById('login-password').value;
      const errorEl = document.getElementById('login-error');
      const submitBtn = document.getElementById('login-submit-btn');
      
      submitBtn.disabled = true;
      submitBtn.textContent = 'Verificando...';
      
      const user = users.find(u => u.email === email);
      
      if (user && user.password === password) {
        currentUser = { email: user.email, name: user.name };
        updateAuthUI();
        showToast('success', `¡Bienvenido, ${user.name}!`);
        document.getElementById('login-form').reset();
        errorEl.classList.add('hidden');
        navigateTo('home');
      } else {
        errorEl.textContent = 'Email o contraseña incorrectos';
        errorEl.classList.remove('hidden');
      }
      
      submitBtn.disabled = false;
      submitBtn.textContent = 'Iniciar Sesión';
    }
    
    function handleRegister(event) {
      event.preventDefault();
      
      const name = document.getElementById('register-name').value;
      const email = document.getElementById('register-email').value;
      const password = document.getElementById('register-password').value;
      const confirmPassword = document.getElementById('register-confirm-password').value;
      const errorEl = document.getElementById('register-error');
      const successEl = document.getElementById('register-success');
      const submitBtn = document.getElementById('register-submit-btn');
      
      if (password !== confirmPassword) {
        errorEl.textContent = 'Las contraseñas no coinciden';
        errorEl.classList.remove('hidden');
        successEl.classList.add('hidden');
        return;
      }
      
      // Validar fuerza de contraseña
      const hasUpper = /[A-Z]/.test(password);
      const hasLower = /[a-z]/.test(password);
      const hasNumber = /[0-9]/.test(password);
      const hasSpecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
      const hasLength = password.length >= 8;
      
      if (!hasUpper || !hasLower || !hasNumber || !hasSpecial || !hasLength) {
        errorEl.textContent = 'La contraseña no cumple los requisitos mínimos de seguridad';
        errorEl.classList.remove('hidden');
        successEl.classList.add('hidden');
        return;
      }
      
      const existing = users.find(u => u.email === email);
      if (existing) {
        errorEl.textContent = 'Este email ya está registrado';
        errorEl.classList.remove('hidden');
        successEl.classList.add('hidden');
        return;
      }
      
      submitBtn.disabled = true;
      submitBtn.textContent = 'Registrando...';
      
      users.push({
        name: name,
        email: email,
        password: password
      });
      
      saveDataToStorage();
      
      errorEl.classList.add('hidden');
      successEl.textContent = '¡Cuenta creada! Redirigiendo a login...';
      successEl.classList.remove('hidden');
      document.getElementById('register-form').reset();
      
      setTimeout(() => {
        navigateTo('login');
      }, 2000);
      
      submitBtn.disabled = false;
      submitBtn.textContent = 'Crear Cuenta';
    }
    
    function logout() {
      currentUser = null;
      updateAuthUI();
      showToast('info', 'Sesión cerrada');
      navigateTo('home');
    }
    
    function updateAuthUI() {
      const loggedOut = document.getElementById('logged-out-menu');
      const loggedIn = document.getElementById('logged-in-menu');
      const userDisplay = document.getElementById('user-name-display');
      
      if (currentUser) {
        loggedOut.classList.add('hidden');
        loggedIn.classList.remove('hidden');
        userDisplay.textContent = currentUser.name.split(' ')[0];
      } else {
        loggedOut.classList.remove('hidden');
        loggedIn.classList.add('hidden');
        userDisplay.textContent = 'Invitado';
      }
    }
    
    // Pedidos y seguimiento
    function renderOrders() {
      if (!currentUser) return;
      
      const userOrders = orders.filter(o => o.userEmail === currentUser.email);
      const listEl = document.getElementById('orders-list');
      const noOrdersEl = document.getElementById('no-orders');
      
      if (userOrders.length === 0) {
        listEl.innerHTML = '';
        noOrdersEl.classList.remove('hidden');
        return;
      }
      
      noOrdersEl.classList.add('hidden');
      
      listEl.innerHTML = userOrders.map(order => {
        const date = new Date(order.date).toLocaleDateString('es-ES');
        const statusLabel = {
          'confirmado': 'Confirmado',
          'preparando': 'En Preparación',
          'enviado': 'En Tránsito',
          'entregado': 'Entregado'
        };
        
        return `
          <div class="bg-slate-800/50 rounded-2xl p-6 neon-border card-glow">
            <div class="flex items-start justify-between mb-4">
              <div>
                <p class="text-sm text-slate-400">Pedido del ${date}</p>
                <p class="text-2xl font-bold text-blue-400 mt-2">${order.total.toFixed(2)} €</p>
                <p class="text-xs text-slate-500 mono mt-2">${order.trackingNumber}</p>
              </div>
              <div class="flex flex-col items-end gap-3">
                <span class="px-4 py-2 rounded-full text-xs font-medium bg-blue-500/20 text-blue-300">${statusLabel[order.status] || order.status}</span>
                <button onclick="openTrackingModal('${order.id}')" class="px-4 py-2 text-xs bg-blue-600 hover:bg-blue-500 rounded-lg font-medium transition-colors">
                  Ver Seguimiento
                </button>
              </div>
            </div>
          </div>
        `;
      }).join('');
    }
    
    function openTrackingModal(orderId) {
      const order = orders.find(o => o.id === orderId);
      if (!order) return;
      
      const tracking = trackingData[orderId] || { currentStep: 0, steps: trackingSteps.map((name, i) => ({name, completed: i === 0})) };
      const content = document.getElementById('tracking-content');
      
      let html = `
        <div class="space-y-6">
          <div class="bg-slate-700/50 rounded-xl p-4">
            <p class="text-sm text-slate-400 mb-2">Número de Seguimiento</p>
            <p class="text-lg font-bold mono text-blue-400">${order.trackingNumber}</p>
          </div>
          
          <div class="space-y-4">
      `;
      
      tracking.steps.forEach((step, index) => {
        const stepDate = new Date(step.date);
        const isCompleted = step.completed || index < tracking.currentStep;
        const stepClass = isCompleted ? 'completed' : '';
        
        html += `
          <div class="tracking-step ${stepClass}">
            <div class="flex gap-4">
              <div class="flex flex-col items-center">
                <div class="step-dot">
                  ${isCompleted ? '✓' : index + 1}
                </div>
                ${index < tracking.steps.length - 1 ? '<div class="step-line"></div>' : ''}
              </div>
              <div class="flex-1 pt-2 pb-4">
                <p class="font-semibold">${step.name}</p>
                ${isCompleted ? `<p class="text-xs text-slate-400 mt-1">${stepDate.toLocaleDateString('es-ES')} ${stepDate.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' })}</p>` : '<p class="text-xs text-slate-500 mt-1">Próximamente</p>'}
              </div>
            </div>
          </div>
        `;
      });
      
      html += `
          </div>
          
          <div class="bg-gradient-to-r from-blue-500/10 to-cyan-500/10 rounded-xl p-4 border border-blue-500/20">
            <p class="text-sm text-blue-300">
              <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1a1 1 0 11-2 0 1 1 0 012 0zM8 8a1 1 0 100-2 1 1 0 000 2zm5-1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
              </svg>
              Recibirás notificaciones cuando tu pedido avance en el seguimiento.
            </p>
          </div>
        </div>
      `;
      
      content.innerHTML = html;
      document.getElementById('tracking-modal').classList.remove('hidden');
    }
    
    function closeTrackingModal() {
      document.getElementById('tracking-modal').classList.add('hidden');
    }
    
    // Toast
    function showToast(type, message) {
      const toast = document.getElementById('toast');
      const icon = document.getElementById('toast-icon');
      const msg = document.getElementById('toast-message');
      
      const icons = {
        success: '<svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>',
        error: '<svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>',
        info: '<svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
      };
      
      icon.innerHTML = icons[type] || icons.info;
      msg.textContent = message;
      
      toast.classList.remove('translate-y-20', 'opacity-0');
      
      setTimeout(() => {
        toast.classList.add('translate-y-20', 'opacity-0');
      }, 3000);
    }
    
    document.addEventListener('click', (e) => {
      const dropdown = document.getElementById('user-dropdown');
      const btn = document.getElementById('user-btn');
      if (!dropdown.contains(e.target) && !btn.contains(e.target)) {
        dropdown.classList.add('hidden');
      }
    });
    
    initApp();
