console.log("hello");
let accordion = document.querySelectorAll(".accordion");
let panels = document.querySelectorAll(".panel");
accordion.forEach((element) => {
  element.addEventListener("click", function () {
    let panel = element.nextElementSibling;
    console.log(panel);
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
});
