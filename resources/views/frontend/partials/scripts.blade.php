<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ---- Scroll Reveal ----
        const revealElements = document.querySelectorAll('.reveal');
        if (revealElements.length > 0) {
            const revealObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

            revealElements.forEach(function(el) {
                revealObserver.observe(el);
            });
        }

        // ---- Counter Animation ----
        const counters = document.querySelectorAll('.stat-number[data-count]');
        if (counters.length > 0) {
            const counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(function(el) {
                counterObserver.observe(el);
            });

            function animateCounter(el) {
                var target = parseInt(el.getAttribute('data-count'));
                var suffix = el.getAttribute('data-suffix') || '';
                var duration = 1500;
                var start = 0;
                var startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    var current = Math.floor(eased * target);
                    el.textContent = current + suffix;
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        el.textContent = target + suffix;
                        el.classList.add('counting');
                        setTimeout(function() { el.classList.remove('counting'); }, 300);
                    }
                }

                requestAnimationFrame(step);
            }
        }

        // ---- Reduced motion check ----
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            revealElements.forEach(function(el) {
                el.classList.add('revealed');
            });
            counters.forEach(function(el) {
                var target = el.getAttribute('data-count');
                var suffix = el.getAttribute('data-suffix') || '';
                el.textContent = target + suffix;
            });
        }
    });
</script>
