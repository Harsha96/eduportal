<!-- Enrollment Modal Component -->
<div id="enrollment-modal" class="fixed inset-0 z-[100] hidden">
    <!-- Overlay -->
    <div id="enrollment-modal-overlay" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>
    
    <!-- Modal Content -->
    <div id="enrollment-modal-container" class="absolute inset-0 flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-xl rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-300 scale-95 opacity-0 flex flex-col md:flex-row">
            <!-- Decorative Sidebar (Desktop only) -->
            <div class="hidden md:flex w-1/3 bg-primary p-8 flex-col justify-between text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
                
                <div class="relative z-10">
                    <img src="assets/images/Logo (2).png" alt="Logo" class="h-8 w-auto brightness-0 invert mb-8">
                    <h2 class="text-2xl font-bold leading-tight">Start Your Journey Today</h2>
                    <p class="text-white/80 text-sm mt-4">Join thousands of students who are achieving their academic goals with Unidemy.</p>
                </div>
                
                <div class="relative z-10 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-sm font-medium">Expert Mentors</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-sm font-medium">Global Standards</span>
                    </div>
                </div>
            </div>

            <!-- Form Content -->
            <div class="flex-1 p-8 md:p-10 relative">
                <button id="close-enrollment-modal" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 transition-colors">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900">Enrollment Request</h3>
                    <p class="text-slate-500 mt-2">Please fill in your details and we'll get back to you shortly.</p>
                </div>

                <form id="enrollment-form" class="space-y-4">
                    <div>
                        <label for="student-name" class="block text-sm font-semibold text-slate-700 mb-1.5">Full Name</label>
                        <input type="text" id="student-name" required placeholder="John Doe" 
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="student-email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email Address</label>
                            <input type="email" id="student-email" required placeholder="john@example.com" 
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900">
                        </div>
                        <div>
                            <label for="student-phone" class="block text-sm font-semibold text-slate-700 mb-1.5">Phone Number</label>
                            <input type="tel" id="student-phone" required placeholder="+1 234 567 890" 
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900">
                        </div>
                    </div>

                    <div>
                        <label for="course-name" class="block text-sm font-semibold text-slate-700 mb-1.5">Requested Course</label>
                        <input type="text" id="course-name" readonly 
                            class="w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50 text-slate-500 font-medium outline-none">
                    </div>

                    <!-- CV Upload (Internships Only) -->
                    <div id="cv-upload-container" class="hidden">
                        <label for="student-cv" class="block text-sm font-semibold text-slate-700 mb-1.5">Upload CV (PDF preferred)</label>
                        <div class="relative">
                            <input type="file" id="student-cv" accept=".pdf,.doc,.docx" 
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 file:mr-4 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-[10px] file:font-bold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                                <i data-lucide="file-up" class="w-5 h-5"></i>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" 
                            class="w-full bg-secondary text-white font-bold py-4 rounded-xl shadow-lg shadow-secondary/20 hover:bg-orange-600 transition-all transform hover:-translate-y-0.5 active:scale-[0.98]">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function openEnrollmentModal(programName, isInternship = false) {
    const modal = document.getElementById('enrollment-modal');
    const overlay = document.getElementById('enrollment-modal-overlay');
    const container = document.getElementById('enrollment-modal-container').firstElementChild;
    const courseInput = document.getElementById('course-name');
    const cvContainer = document.getElementById('cv-upload-container');
    
    courseInput.value = programName;
    
    if (isInternship) {
        cvContainer.classList.remove('hidden');
    } else {
        cvContainer.classList.add('hidden');
    }
    
    modal.classList.remove('hidden');
    // Force reflow
    modal.offsetHeight;
    
    overlay.classList.remove('opacity-0');
    overlay.classList.add('opacity-100');
    
    container.classList.remove('scale-95', 'opacity-0');
    container.classList.add('scale-100', 'opacity-100');
    
    document.body.style.overflow = 'hidden';
    
    // Ensure icons inside modal are rendered
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
}

function closeEnrollmentModal() {
    const modal = document.getElementById('enrollment-modal');
    const overlay = document.getElementById('enrollment-modal-overlay');
    const container = document.getElementById('enrollment-modal-container').firstElementChild;
    
    overlay.classList.add('opacity-0');
    overlay.classList.remove('opacity-100');
    
    container.classList.add('scale-95', 'opacity-0');
    container.classList.remove('scale-100', 'opacity-100');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}

document.addEventListener('DOMContentLoaded', function() {
    const closeBtn = document.getElementById('close-enrollment-modal');
    const overlay = document.getElementById('enrollment-modal-overlay');
    
    closeBtn.addEventListener('click', closeEnrollmentModal);
    overlay.addEventListener('click', closeEnrollmentModal);
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('enrollment-modal').classList.contains('hidden')) {
            closeEnrollmentModal();
        }
    });

    document.getElementById('enrollment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to a server
        alert('Thank you for your request! We will contact you soon.');
        closeEnrollmentModal();
        this.reset();
    });
});
</script>
