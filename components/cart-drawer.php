<!-- Cart Drawer -->
<div id="cart-drawer" class="fixed inset-y-0 right-0 w-full md:w-[400px] bg-white shadow-2xl z-[100] transform translate-x-full transition-transform duration-500 ease-in-out">
    <div class="flex flex-col h-full">
        <!-- Header -->
        <div class="p-6 border-b border-gray-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <i data-lucide="shopping-cart" class="w-6 h-6 text-primary"></i>
                <h2 class="text-xl font-bold text-gray-900">Your Cart</h2>
                <span id="cart-count-badge" class="bg-primary text-white text-[11px] font-bold px-2 py-0.5 rounded-full">0</span>
            </div>
            <button id="close-cart" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                <i data-lucide="x" class="w-6 h-6 text-gray-500"></i>
            </button>
        </div>

        <!-- Cart Items Container -->
        <div id="cart-items" class="flex-grow overflow-y-auto p-6 custom-scrollbar">
            <!-- Empty State -->
            <div id="empty-cart" class="flex flex-col items-center justify-center h-full text-center">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                    <i data-lucide="shopping-bag" class="w-10 h-10 text-gray-300"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900">Your cart is empty</h3>
                <p class="text-gray-500 mt-1 max-w-[200px]">Explore our programs and add them to your cart.</p>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/competitive-exams.php" class="mt-6 text-primary font-bold hover:underline">Browse Programs</a>
            </div>

            <!-- Items List (Dynamically populated) -->
            <div id="items-list" class="space-y-6 hidden">
                <!-- Template Item -->
            </div>
        </div>

        <!-- Footer / Checkout -->
        <div id="cart-footer" class="p-6 border-t border-gray-100 bg-gray-50/50 hidden">
            <div class="space-y-3 mb-6">
                <div class="flex items-center justify-between text-gray-600 text-sm">
                    <span>Subtotal</span>
                    <span id="cart-subtotal" class="font-semibold text-gray-900">₹0</span>
                </div>
                <div class="flex items-center justify-between text-gray-600 text-sm">
                    <span>Processing Fee</span>
                    <span class="text-green-600 font-semibold">FREE</span>
                </div>
                <div class="h-px w-full bg-gray-200"></div>
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold text-gray-900">Total Amount</span>
                    <span id="cart-total" class="text-xl font-bold text-primary">₹0</span>
                </div>
            </div>
            <button onclick="proceedToCheckout()" class="w-full bg-secondary hover:bg-orange-600 text-white font-bold py-4 rounded-2xl shadow-lg shadow-secondary/30 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                <span>Proceed to Checkout</span>
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </button>
            <p class="text-[11px] text-gray-400 text-center mt-4 uppercase tracking-widest font-bold">Secure SSL Checkout</p>
        </div>
    </div>
</div>

<!-- Cart Overlay -->
<div id="cart-overlay" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[95] hidden transition-opacity duration-500 opacity-0"></div>

<script>
    const cart = {
        items: JSON.parse(localStorage.getItem('unidemy_cart')) || [],
        
        save() {
            localStorage.setItem('unidemy_cart', JSON.stringify(this.items));
            this.updateUI();
        },

        addItem(item) {
            const exists = this.items.find(i => i.id === item.id);
            if (exists) {
                exists.quantity += 1;
            } else {
                this.items.push({...item, quantity: 1});
            }
            this.save();
            this.open();
        },

        removeItem(id) {
            this.items = this.items.filter(i => i.id !== id);
            this.save();
        },

        updateQuantity(id, delta) {
            const item = this.items.find(i => i.id === id);
            if (item) {
                item.quantity += delta;
                if (item.quantity <= 0) this.removeItem(id);
                else this.save();
            }
        },

        getTotal() {
            return this.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },

        updateUI() {
            const itemsList = document.getElementById('items-list');
            const emptyCart = document.getElementById('empty-cart');
            const cartFooter = document.getElementById('cart-footer');
            const cartCountBadge = document.getElementById('cart-count-badge');
            const cartNavBadge = document.getElementById('cart-nav-badge');
            const subtotalEl = document.getElementById('cart-subtotal');
            const totalEl = document.getElementById('cart-total');

            const count = this.items.reduce((sum, item) => sum + item.quantity, 0);
            if(cartCountBadge) cartCountBadge.textContent = count;
            if(cartNavBadge) {
                cartNavBadge.textContent = count;
                cartNavBadge.classList.toggle('hidden', count === 0);
            }

            if (this.items.length === 0) {
                itemsList.classList.add('hidden');
                emptyCart.classList.remove('hidden');
                cartFooter.classList.add('hidden');
            } else {
                itemsList.classList.remove('hidden');
                emptyCart.classList.add('hidden');
                cartFooter.classList.remove('hidden');

                itemsList.innerHTML = this.items.map(item => `
                    <div class="flex gap-4 group bg-white p-4 rounded-2xl border border-gray-100 hover:border-primary/20 transition-colors shadow-sm">
                        <div class="w-16 h-16 rounded-xl bg-gray-100 overflow-hidden shrink-0 border border-gray-100">
                            <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-grow min-w-0">
                            <div class="flex justify-between items-start mb-0.5">
                                <h4 class="font-bold text-gray-900 text-sm leading-tight pr-4 truncate">${item.name}</h4>
                                <button onclick="cart.removeItem('${item.id}')" class="text-gray-400 hover:text-red-500 transition-colors">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <p class="text-[11px] text-gray-500 mb-2 font-medium uppercase tracking-wider">${item.category}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3 bg-gray-50 rounded-lg px-2 py-1">
                                    <button onclick="cart.updateQuantity('${item.id}', -1)" class="text-gray-400 hover:text-primary transition-colors">
                                        <i data-lucide="minus" class="w-3.5 h-3.5"></i>
                                    </button>
                                    <span class="text-sm font-bold w-4 text-center text-gray-700">${item.quantity}</span>
                                    <button onclick="cart.updateQuantity('${item.id}', 1)" class="text-gray-400 hover:text-primary transition-colors">
                                        <i data-lucide="plus" class="w-3.5 h-3.5"></i>
                                    </button>
                                </div>
                                <span class="font-bold text-primary">₹${(item.price * item.quantity).toLocaleString()}</span>
                            </div>
                        </div>
                    </div>
                `).join('');
                
                if (typeof lucide !== 'undefined') lucide.createIcons();

                const total = this.getTotal();
                subtotalEl.textContent = '₹' + total.toLocaleString();
                totalEl.textContent = '₹' + total.toLocaleString();
            }
        },

        open() {
            document.getElementById('cart-drawer').classList.remove('translate-x-full');
            document.getElementById('cart-overlay').classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('cart-overlay').classList.add('opacity-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        },

        close() {
            document.getElementById('cart-drawer').classList.add('translate-x-full');
            document.getElementById('cart-overlay').classList.remove('opacity-100');
            setTimeout(() => {
                document.getElementById('cart-overlay').classList.add('hidden');
            }, 500);
            document.body.style.overflow = '';
        }
    };

    function proceedToCheckout() {
        alert('Thank you for choosing Unidemy Global! You are being redirected to our secure payment portal...');
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('close-cart')?.addEventListener('click', () => cart.close());
        document.getElementById('cart-overlay')?.addEventListener('click', () => cart.close());
        cart.updateUI();
    });
</script>
