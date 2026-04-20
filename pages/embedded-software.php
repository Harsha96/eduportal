<?php
$pageTitle = 'Embedded Software | Unidemy Global';
$additionalHead = <<<'HEADCONTENT'
<style>
        .sora {
            font-family: 'Sora', sans-serif;
        }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <section class="pt-40 pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8 text-sm font-medium text-gray-400">
                <a href="../index.php" class="hover:text-primary">Home</a>
                <span class="mx-2">/</span>
                <a href="../pages/technology-services.php" class="hover:text-primary">Technology Services</a>
                <span class="mx-2">/</span>
                <span class="text-primary">Embedded Software</span>
            </nav>
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h1 class="sora text-4xl lg:text-6xl font-black text-gray-900 mb-6 leading-tight">Engineering the
                        <span class="text-primary">Physical</span> Web</h1>
                    <p class="text-xl text-gray-600 leading-relaxed mb-8">Bridging the gap between hardware and software
                        with robust firmware, low-latency operating systems, and connected IoT ecosystems.</p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0">
                                1</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Firmware Engineering</h4>
                                <p class="text-gray-500 text-sm">Low-level C/C++ development for microcontrollers (ARM,
                                    ESP32, STM32) and board bring-up.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0">
                                2</div>
                            <div>
                                <h4 class="font-bold text-gray-900">RTOS Implementation</h4>
                                <p class="text-gray-500 text-sm">Deploying deterministic, real-time operating systems
                                    like FreeRTOS, Zephyr, and QNX.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0">
                                3</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Connectivity & Protocols</h4>
                                <p class="text-gray-500 text-sm">Expert implementation of industrial and consumer
                                    protocols: MQTT, LoraWan, Zigbee, and BLE.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="bg-emerald-500/5 rounded-[3rem] p-12 aspect-square flex items-center justify-center relative overflow-hidden">
                        <div
                            class="w-full h-full bg-gradient-to-br from-emerald-600 to-teal-400 rounded-3xl opacity-10 blur-3xl absolute inset-0">
                        </div>
                        <i data-lucide="cpu" class="w-48 h-48 text-emerald-600 opacity-20 relative z-10"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-20 bg-background">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="sora text-3xl font-black text-gray-900 mb-12">Hardware & Tools</h2>
            <div class="flex flex-wrap justify-center gap-10">
                <div class="flex flex-col items-center gap-3">
                    <div
                        class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center text-primary font-bold">
                        ARM</div>
                    <span class="font-bold text-gray-600">Cortex-M</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="zap" class="text-emerald-500"></i></div>
                    <span class="font-bold text-gray-600">Zephyr RTOS</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="bluetooth" class="text-blue-500"></i></div>
                    <span class="font-bold text-gray-600">BLE 5.0</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="radio" class="text-orange-500"></i></div>
                    <span class="font-bold text-gray-600">MQTT</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="terminal" class="text-gray-700"></i></div>
                    <span class="font-bold text-gray-600">Embedded C</span>
                </div>
            </div>
        </div>
    </section>

<?php include '../components/footer.php'; ?>
