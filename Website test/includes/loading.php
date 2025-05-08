<!-- Fullscreen Transition Overlay -->
<div class="page-transition">
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const trigger = document.querySelector(".js-trigger-transition");
        const transitionOverlay = document.querySelector(".page-transition");

        if (trigger && transitionOverlay) {
            trigger.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent instant navigation

                const targetUrl = trigger.getAttribute("data-target");

                // Show transition effect
                transitionOverlay.classList.add("active");

                // Wait for animation, then navigate
                setTimeout(() => {
                    window.location.href = targetUrl;
                }, 1000); // 1 second delay for transition effect
            });
        }
    });
</script>

