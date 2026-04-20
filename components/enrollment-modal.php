<!-- Enrollment Modal Component -->
<div id="enrollment-modal" class="fixed inset-0 z-[100] hidden">
    <!-- Overlay -->
    <div id="enrollment-modal-overlay" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>
    
    <!-- Modal Content -->
    <div id="enrollment-modal-container" class="absolute inset-0 flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-xl rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-300 scale-95 opacity-0 flex flex-col md:flex-row">
            <!-- Decorative Sidebar (Desktop only) -->
            <div class="hidden md:flex w-1/3 bg-slate-50 p-8 flex-col justify-between text-slate-900 relative overflow-hidden border-r border-slate-100">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-primary/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 bg-secondary/10 rounded-full blur-3xl"></div>
                
                <div class="relative z-10">
                    <img src="<?php echo isset($base_url) ? $base_url : './'; ?>assets/images/Logo (2).png" alt="Logo" class="h-8 w-auto mb-8">
                    <h2 class="text-2xl font-bold leading-tight text-primary">Start Your Journey Today</h2>
                    <p class="text-slate-600 text-sm mt-4">Join thousands of students who are achieving their academic goals with Unidemy.</p>
                </div>
                
                <div class="relative z-10 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-sm font-semibold text-slate-700">Expert Mentors</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-sm font-semibold text-slate-700">Global Standards</span>
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

                    <!-- Additional Message (Internships Only) -->
                    <div id="message-container" class="hidden">
                        <label for="student-message" class="block text-sm font-semibold text-slate-700 mb-1.5">Additional Message</label>
                        <textarea id="student-message" rows="3" placeholder="Tell us why you are interested in this internship..." 
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 resize-none"></textarea>
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
    const messageContainer = document.getElementById('message-container');
    
    courseInput.value = programName;
    
    if (isInternship) {
        messageContainer.classList.remove('hidden');
    } else {
        messageContainer.classList.add('hidden');
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
