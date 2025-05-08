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

    window.addEventListener("wheel", function (event) {
        if (event.deltaY > 0) {
            currentIndex = Math.min(currentIndex + 1, elements.length - 1);
        } else {
            currentIndex = Math.max(currentIndex - 1, 0);
        }
        updateScrollEffect();
    });

    updateScrollEffect();
});



const birthyear = 2000
const birthmonth = 5
const birthday = 17

const years = new Date().getFullYear()
const month = new Date().getMonth()
const Day =  new Date().getDate()

let Age = years - birthyear;
if (birthmonth > month && birthday > Day) {
    Age --;
}

document.getElementById("age-box").textContent = "Ik ben " + Age.toString();


