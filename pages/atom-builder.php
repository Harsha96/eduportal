<?php
$pageTitle = 'Atom Builder | CBSE Academic Achievers';
$base_url = '../';
include '../components/header.php';
?>

<style>
    .game-container {
        background: radial-gradient(circle at center, #f8fafc 0%, #e2e8f0 100%);
    }
    .atom-shell {
        display: block; /* Restoring orbits but making them VERY light */
        border: 1px dashed rgba(71, 85, 105, 0.1); 
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .particle {
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .proton { background: radial-gradient(circle at 30% 30%, #ef4444, #b91c1c); box-shadow: 0 4px 10px rgba(239, 68, 68, 0.2); }
    .neutron { background: radial-gradient(circle at 30% 30%, #94a3b8, #475569); box-shadow: 0 4px 10px rgba(148, 163, 184, 0.2); }
    .electron { background: radial-gradient(circle at 30% 30%, #0ea5e9, #0369a1); box-shadow: 0 0 15px rgba(14, 165, 233, 0.4); }

    
    @keyframes orbit {
        from { transform: rotate(0deg) translateX(var(--radius)) rotate(0deg); }
        to { transform: rotate(360deg) translateX(var(--radius)) rotate(-360deg); }
    }
    .orbiting {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -7px; /* Half of 14px size */
        animation: orbit var(--duration) linear infinite;
        transition: none !important; /* Prevent transition conflicts with animation */
    }

</style>

<main class="game-container min-h-screen pt-24 md:pt-28 pb-12 text-slate-800 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 h-full flex flex-col lg:flex-row gap-8">
        
        <!-- Left Sidebar: Controls -->
        <div class="lg:w-80 space-y-6 z-10">
            <div class="bg-white/60 backdrop-blur-xl border border-slate-200 p-6 rounded-3xl shadow-xl shadow-slate-200/50">
                <a href="cbse.php?tab=class-9-10&subtab=game" class="inline-flex items-center text-slate-500 hover:text-slate-900 mb-6 text-sm gap-2 transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to CBSE
                </a>
                <h1 class="text-2xl font-bold mb-2 text-slate-900Tracking-tight">Atom Builder</h1>
                <p class="text-slate-500 text-sm mb-6">Class 9-10 Science Lab</p>
                
                <div class="space-y-6">
                    <!-- Protons -->
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-rose-600 font-bold flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full proton"></span> Protons
                            </span>
                            <span id="proton-count" class="text-xl font-mono font-bold bg-white px-3 py-1 rounded-lg border border-slate-200">0</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <button onclick="changeParticles('protons', -1)" class="p-3 rounded-xl bg-white border border-slate-200 hover:bg-rose-50 active:scale-95 transition-all font-bold text-lg text-rose-600">-</button>
                            <button onclick="changeParticles('protons', 1)" class="p-3 rounded-xl bg-white border border-slate-200 hover:bg-rose-50 active:scale-95 transition-all font-bold text-lg text-rose-600">+</button>
                        </div>
                    </div>

                    <!-- Neutrons -->
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-slate-600 font-bold flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full neutron"></span> Neutrons
                            </span>
                            <span id="neutron-count" class="text-xl font-mono font-bold bg-white px-3 py-1 rounded-lg border border-slate-200">0</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <button onclick="changeParticles('neutrons', -1)" class="p-3 rounded-xl bg-white border border-slate-200 hover:bg-slate-100 active:scale-95 transition-all font-bold text-lg text-slate-600">-</button>
                            <button onclick="changeParticles('neutrons', 1)" class="p-3 rounded-xl bg-white border border-slate-200 hover:bg-slate-100 active:scale-95 transition-all font-bold text-lg text-slate-600">+</button>
                        </div>
                    </div>

                    <!-- Electrons -->
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sky-600 font-bold flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full electron animate-pulse"></span> Electrons
                            </span>
                            <span id="electron-count" class="text-xl font-mono font-bold bg-white px-3 py-1 rounded-lg border border-slate-200">0</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <button onclick="changeParticles('electrons', -1)" class="p-3 rounded-xl bg-white border border-slate-200 hover:bg-sky-50 active:scale-95 transition-all font-bold text-lg text-sky-600">-</button>
                            <button onclick="changeParticles('electrons', 1)" class="p-3 rounded-xl bg-white border border-slate-200 hover:bg-sky-50 active:scale-95 transition-all font-bold text-lg text-sky-600">+</button>
                        </div>
                    </div>

                    <button onclick="resetAtom()" class="w-full mt-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold hover:bg-slate-50 transition-all flex items-center justify-center gap-2 group shadow-sm">
                        <i data-lucide="rotate-ccw" class="w-4 h-4 group-hover:rotate-[-120deg] transition-transform duration-500"></i> Reset Lab
                    </button>
                </div>
            </div>
        </div>

        <!-- Center: The Atom Display -->
        <div class="flex-grow relative flex items-center justify-center min-h-[500px]">
            <!-- Cosmic Background Aura -->
            <div class="absolute w-[600px] h-[600px] bg-sky-500/5 rounded-full blur-[100px] animate-pulse"></div>
            
            <!-- Bohr Shells -->
            <div id="shell-container" class="relative w-[500px] h-[500px]">
                <div id="shell-3" class="atom-shell w-[450px] h-[450px]"></div>
                <div id="shell-2" class="atom-shell w-[300px] h-[300px]"></div>
                <div id="shell-1" class="atom-shell w-[150px] h-[150px]"></div>


                <!-- Nucleus Container -->
                <div id="nucleus" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 flex items-center justify-center z-10 transition-transform">
                    <!-- Particles via JS -->
                </div>

                <!-- Electrons Layer -->
                <div id="orbitals" class="absolute inset-0 pointer-events-none">
                    <!-- Electrons via JS -->
                </div>
            </div>
        </div>

        <!-- Right Sidebar: Live Analysis -->
        <div class="lg:w-80 space-y-6 z-10">
            <div class="bg-white/60 backdrop-blur-xl border border-slate-200 p-6 rounded-3xl shadow-xl shadow-slate-200/50 h-full">
                <h2 class="text-xl font-bold mb-6 flex items-center gap-2 text-slate-900">
                    <i data-lucide="flask-conical" class="w-5 h-5 text-slate-600"></i> Lab Analysis
                </h2>
                
                <div class="space-y-4">
                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 group hover:border-slate-200 transition-all">
                        <p class="text-[11px] text-slate-500 font-bold uppercase tracking-widest mb-1">Element Identifed</p>
                        <p id="element-name" class="text-2xl font-bold text-slate-900 tracking-tight">None</p>
                    </div>

                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 group hover:border-slate-200 transition-all font-sans">
                        <p class="text-[11px] text-slate-500 font-bold uppercase tracking-widest mb-1">Mass Number (A)</p>
                        <div class="flex items-end gap-2">
                             <p id="mass-number" class="text-3xl font-bold text-slate-900">0</p>
                             <span class="text-slate-400 text-[10px] mb-1.5 font-bold uppercase tracking-tighter">AMU</span>
                        </div>
                    </div>

                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 group hover:border-slate-200 transition-all flex justify-between items-center">
                        <div>
                            <p class="text-[11px] text-slate-500 font-bold uppercase tracking-widest mb-1">Net Charge</p>
                            <p id="net-charge" class="text-3xl font-bold text-slate-900 tracking-tighter">0</p>
                        </div>
                        <div id="charge-indicator" class="w-14 h-14 rounded-full flex flex-col items-center justify-center bg-slate-100 border border-slate-200 transition-all duration-500">
                           <span class="text-[10px] uppercase font-bold text-slate-400 leading-none mb-0.5">Ion</span>
                           <span class="text-lg font-bold text-slate-700">0</span>
                        </div>
                    </div>

                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 group hover:border-slate-200 transition-all">
                        <p class="text-[11px] text-slate-500 font-bold uppercase tracking-widest mb-3">Nuclear Stability</p>
                        <div class="flex items-center gap-3">
                            <div id="stability-bar" class="flex-grow h-3 bg-slate-200 rounded-full overflow-hidden border border-slate-300">
                                <div id="stability-fill" class="h-full w-0 bg-slate-400 transition-all duration-700 ease-out"></div>
                            </div>
                            <span id="stability-text" class="text-[10px] font-black text-slate-400 uppercase tracking-widest min-w-[60px] text-right">None</span>
                        </div>
                    </div>
                </div>

                <!-- Mini Periodic Table -->
                <div class="mt-8 pt-8 border-t border-slate-200">
                    <p class="text-[11px] text-slate-500 font-bold uppercase tracking-widest mb-4">Chemical Position</p>
                    <div id="mini-pt" class="grid grid-cols-4 gap-2 opacity-50 grayscale transition-all duration-500">
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="1">H</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="2">He</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="3">Li</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="4">Be</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="5">B</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="6">C</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="7">N</div>
                        <div class="pt-item p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-center text-xs font-bold font-mono text-slate-600" data-p="8">O</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    let atomState = {
        protons: 0,
        neutrons: 0,
        electrons: 0
    };

    const elements = [
        "None", "Hydrogen", "Helium", "Lithium", "Beryllium", "Boron", "Carbon", "Nitrogen", "Oxygen", "Fluorine", "Neon",
        "Sodium", "Magnesium", "Aluminum", "Silicon", "Phosphorus", "Sulfur", "Chlorine", "Argon"
    ];

    function changeParticles(type, amount) {
        atomState[type] = Math.max(0, atomState[type] + amount);
        // Limit to Argon (p=18)
        if (type === 'protons' && atomState.protons > 18) atomState.protons = 18;
        if (atomState[type] > 18) atomState[type] = 18; 
        
        updateUI();
    }

    function resetAtom() {
        atomState = { protons: 0, neutrons: 0, electrons: 0 };
        updateUI();
    }

    function updateUI() {
        document.getElementById('proton-count').textContent = atomState.protons;
        document.getElementById('neutron-count').textContent = atomState.neutrons;
        document.getElementById('electron-count').textContent = atomState.electrons;

        const mass = atomState.protons + atomState.neutrons;
        const charge = atomState.protons - atomState.electrons;
        
        document.getElementById('element-name').textContent = elements[atomState.protons] || "Unknown Element";
        document.getElementById('mass-number').textContent = mass;
        document.getElementById('net-charge').textContent = (charge === 0 ? '0' : (charge > 0 ? '+' : '-') + Math.abs(charge));

        const indicator = document.getElementById('charge-indicator');
        indicator.querySelector('span:last-child').textContent = (charge === 0 ? '0' : (charge > 0 ? '+' : '-') + Math.abs(charge));
        if (charge === 0) {
            indicator.className = "w-14 h-14 rounded-full flex flex-col items-center justify-center bg-slate-50 border border-slate-200 transition-all";
            indicator.querySelector('span:last-child').className = "text-lg font-bold text-slate-700";
        } else if (charge > 0) {
            indicator.className = "w-14 h-14 rounded-full flex flex-col items-center justify-center bg-rose-50 border border-rose-200 shadow-[0_4px_15px_rgba(239,68,68,0.15)] transition-all";
            indicator.querySelector('span:last-child').className = "text-lg font-bold text-rose-600";
        } else {
            indicator.className = "w-14 h-14 rounded-full flex flex-col items-center justify-center bg-sky-50 border border-sky-200 shadow-[0_4px_15px_rgba(14,165,233,0.15)] transition-all";
            indicator.querySelector('span:last-child').className = "text-lg font-bold text-sky-600";
        }


        const stabilityFill = document.getElementById('stability-fill');
        const stabilityText = document.getElementById('stability-text');
        
        if (atomState.protons === 0) {
             stabilityFill.style.width = '0%';
             stabilityText.textContent = "None";
             stabilityText.className = "text-[10px] font-black text-slate-500 uppercase tracking-widest min-w-[60px] text-right";
        } else {
            const ratio = atomState.neutrons / atomState.protons;
            let isStable = (ratio >= 1 && ratio <= 1.5) || (atomState.protons < 3 && atomState.neutrons <= atomState.protons + 1);
            if (atomState.protons === 1 && atomState.neutrons === 0) isStable = true;
            
            if (isStable) {
                stabilityFill.style.width = '100%';
                stabilityFill.className = "h-full bg-emerald-500 shadow-[0_0_10px_rgba(16,185,129,0.3)]";
                stabilityText.textContent = "Stable";
                stabilityText.className = "text-[10px] font-black text-emerald-400 uppercase tracking-widest min-w-[60px] text-right";
            } else {
                stabilityFill.style.width = '40%';
                stabilityFill.className = "h-full bg-amber-500 animate-pulse shadow-[0_0_10px_rgba(245,158,11,0.3)]";
                stabilityText.textContent = "Unstable";
                stabilityText.className = "text-[10px] font-black text-amber-400 uppercase tracking-widest min-w-[60px] text-right";
            }
        }

        document.querySelectorAll('.pt-item').forEach(item => {
            if (parseInt(item.dataset.p) === atomState.protons) {
                item.classList.remove('opacity-50', 'grayscale');
                item.classList.add('bg-indigo-500', 'text-white', 'border-indigo-300', 'shadow-lg');
            } else {
                item.classList.add('opacity-50', 'grayscale');
                item.classList.remove('bg-indigo-500', 'text-white', 'border-indigo-300', 'shadow-lg');
            }
        });

        renderNucleus();
        renderElectrons();
    }

    function renderNucleus() {
        const container = document.getElementById('nucleus');
        container.innerHTML = '';
        const total = atomState.protons + atomState.neutrons;
        if (total === 0) return;

        const isUnstable = document.getElementById('stability-text').textContent === 'Stable' ? false : true;
        if (atomState.protons > 0 && isUnstable) {
            container.classList.add('animate-[bounce_0.1s_infinite]');
        } else {
            container.classList.remove('animate-[bounce_0.1s_infinite]');
        }

        for (let i = 0; i < total; i++) {
            const p = document.createElement('div');
            const isProton = i < atomState.protons;
            p.className = `particle ${isProton ? 'proton' : 'neutron'} absolute w-7 h-7 rounded-full border border-black/10`;
            const angle = (i * 137.5) * (Math.PI / 180);
            const r = Math.sqrt(i) * 11;
            p.style.left = `calc(50% + ${Math.cos(angle) * r}px - 14px)`;
            p.style.top = `calc(50% + ${Math.sin(angle) * r}px - 14px)`;
            p.style.zIndex = 50 - Math.floor(r);
            container.appendChild(p);
        }
    }

    function renderElectrons() {
        const container = document.getElementById('orbitals');
        container.innerHTML = '';
        let remaining = atomState.electrons;
        const shellRules = [2, 8, 8, 18];
        
        shellRules.forEach((max, idx) => {
            const count = Math.min(remaining, max);
            const radius = (idx + 1) * 75;
            for (let i = 0; i < count; i++) {
                const e = document.createElement('div');
                e.className = 'particle electron orbiting z-20';
                e.style.width = '14px';
                e.style.height = '14px';
                e.style.setProperty('--radius', `${radius}px`);
                e.style.setProperty('--duration', `${(idx + 1) * 3}s`);
                const startAngle = (360 / count) * i;
                e.style.animationDelay = `-${(startAngle / 360) * ((idx + 1) * 3)}s`;
                container.appendChild(e);
            }
            remaining -= count;
        });
    }

    window.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();
        updateUI();
    });
</script>

<?php include '../components/footer.php'; ?>
