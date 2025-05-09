document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".text-overlay p, .text-overlay img");
    let currentIndex = 0;

    function updateScrollEffect() {
        elements.forEach((el, index) => {
            if (index === currentIndex) {
                el.classList.add("active");
                el.classList.remove("inactive");
            } else {
                el.classList.remove("active");
                el.classList.add("inactive");
            }
        });
    }

    const scrollableDiv = document.getElementById('scrollable');
    let scrollAccumulator = 0;
    const threshold = 100; // adjust for sensitivity

    window.addEventListener("wheel", function (event) {
        event.preventDefault();

        scrollAccumulator += event.deltaY;

        if (scrollAccumulator > threshold) {
            currentIndex = Math.min(currentIndex + 1, elements.length - 1);
            scrollAccumulator = 0;
        } else if (scrollAccumulator < -threshold) {
            currentIndex = Math.max(currentIndex - 1, 0);
            scrollAccumulator = 0;
        } else {
            return; // don't update or scroll unless threshold is crossed
        }

        updateScrollEffect();

        const targetElement = elements[currentIndex];
        if (targetElement) {
            const containerTop = scrollableDiv.getBoundingClientRect().top;
            const elementTop = targetElement.getBoundingClientRect().top;
            const scrollOffset = elementTop - containerTop + scrollableDiv.scrollTop;

            scrollableDiv.scrollTo({
                top: scrollOffset,
                behavior: 'smooth'
            });
        }
    }, { passive: false });

    updateScrollEffect();
});

// Age calculation
const birthyear = 2000;
const birthmonth = 5;
const birthday = 17;

const now = new Date();
let Age = now.getFullYear() - birthyear;

if (now.getMonth() < birthmonth - 1 || (now.getMonth() === birthmonth - 1 && now.getDate() < birthday)) {
    Age--;
}

document.getElementById("age-box").textContent = "Ik ben " + Age.toString();
