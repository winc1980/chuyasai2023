function intro() {
  var tl = gsap.timeline();
  tl.to("#loadingLogo", { scale: 1, ease: "back.out(0.8)", duration: 1 });
  return tl;
}

function middle() {
  var tl = gsap.timeline();
  tl.to("#loadingLogo", { rotation: 1440, duration: 1 })
    .to("#loadingLogo", {
      scale: 1.1,
      ease: "elastic.out(10, 0.3)",
      duration: 1,
    })
    .repeat(-1);
  return tl;
}

document.addEventListener("DOMContentLoaded", () => {
  console.log("DOMContentLoaded.");
  gsap.set("#loadingLogo", { scale: 30 });
  var tl = gsap.timeline();
  tl.add(intro()).add(middle());
});

window.onload = () => {
  document.querySelector(".loading").setAttribute("class", "loading d-none");
  console.log("onload.");
};
