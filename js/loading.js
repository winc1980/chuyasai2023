document.addEventListener("DOMContentLoaded", () => {
  console.log("DOMContentLoaded.");

  var tl1 = gsap.timeline();
  tl1
    .to("#loadingLogo", {
      scale: 1,
      ease: "back.out(0.8)",
      duration: 1,
    })
    .pause();

  var tl2 = gsap.timeline();
  tl2
    .to("#loadingLogo", { rotation: 1440, duration: 1 })
    .to("#loadingLogo", {
      scale: 1.1,
      ease: "elastic.out(10, 0.3)",
      duration: 1,
    })
    .repeat(-1)
    .pause();

  gsap.set("#loadingLogo", { scale: 30, opacity: 1 });

  tl1.play();
  tl1.then(() => {
    tl2.play();
  });
});

window.onload = () => {
  setTimeout(() => {
    document.querySelector(".loading").setAttribute("class", "loading d-none");
  }, 2000);
  console.log("onload.");
};
