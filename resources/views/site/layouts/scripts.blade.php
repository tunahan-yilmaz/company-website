{{-- Scripts Component - JavaScript includes --}}

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

{{-- AOS Animation --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- Custom JS --}}
<script src="{{ asset('site/assets/js/main.js') }}"></script>

<script>
    // Copy link functionality
    function copyLink() {
        const input = document.querySelector('.copy-link-input');
        const btn = document.querySelector('.copy-link-btn');

        input.select();
        input.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(input.value).then(() => {
            // Change icon to checkmark
            btn.innerHTML = '<i class="fas fa-check"></i>';
            btn.style.background = 'linear-gradient(135deg, #10b981, #059669)';

            // Reset after 2 seconds
            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-copy"></i>';
                btn.style.background = 'linear-gradient(135deg, var(--primary-color), #8b5cf6)';
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    }
</script>

{{-- Page Specific Scripts --}}
@stack('scripts')
