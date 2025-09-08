document.addEventListener("DOMContentLoaded", () => {
  const steps = document.querySelectorAll(".scroll-step");
  let currentIndex = 0;

  // Initially activate first step
  steps.forEach((el, i) => {
    if (i === 0) el.classList.add("active");
    else el.classList.remove("active");
  });

  const scrollable = document.getElementById("scrollable");
  let scrollAccumulator = 0;
  const threshold = 100;

  function activateStep(index) {
    steps.forEach((el, i) => {
      if (i === index) el.classList.add("active");
      else el.classList.remove("active");
    });
  }

  function scrollToStep(index) {
    const target = steps[index];
    if (!target) return;
    const containerTop = scrollable.getBoundingClientRect().top;
    const elTop = target.getBoundingClientRect().top;
    const offset = elTop - containerTop + scrollable.scrollTop;
    scrollable.scrollTo({ top: offset, behavior: "smooth" });
  }

  window.addEventListener(
    "wheel",
    (e) => {
      e.preventDefault();
      scrollAccumulator += e.deltaY;

      if (scrollAccumulator > threshold) {
        if (currentIndex < steps.length - 1) {
          currentIndex++;
          scrollAccumulator = 0;
          activateStep(currentIndex);
          scrollToStep(currentIndex);
        }
      } else if (scrollAccumulator < -threshold) {
        if (currentIndex > 0) {
          currentIndex--;
          scrollAccumulator = 0;
          activateStep(currentIndex);
          scrollToStep(currentIndex);
        }
      }
    },
    { passive: false }
  );

  // Age calculation
  const birthYear = 2000;
  const birthMonth = 5; // May
  const birthDay = 17;
  const now = new Date();
  let age = now.getFullYear() - birthYear;
  if (
    now.getMonth() < birthMonth - 1 ||
    (now.getMonth() === birthMonth - 1 && now.getDate() < birthDay)
  ) {
    age--;
  }
  const ageBox = document.getElementById("age-box");
  if (ageBox) {
    ageBox.textContent = age;
  }

  // Fade in body after page load
  setTimeout(() => {
    document.body.style.opacity = "1";
  }, 100);
});