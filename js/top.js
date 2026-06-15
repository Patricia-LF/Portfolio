const button = document.getElementById("backToTop");

if (button) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      button.classList.add("visible");
    } else {
      button.classList.remove("visible");
    }
  });

  button.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}
