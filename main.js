const countdown = () => {
    const now = new Date();
    const target = new Date("2023/11/5 18:00:00");
    const differ = target.getTime() - now.getTime();
  
    if (differ < 0) return false;
  
    const ms = Math.floor(differ);
    const sec = Math.floor((differ / 1000) % 60);
    const min = Math.floor((differ / 1000 / 60) % 60);
    const hour = Math.floor((differ / 1000 / 60 / 60) % 24);
    const day = Math.floor(differ / 1000 / 60 / 60 / 24);
  
    document.querySelector(".js-countdown-ms").textContent = String(ms).slice(
      -3,
      -1
    );
    document.querySelector(".js-countdown-sec").textContent = String(
      sec
    ).padStart(2, "0");
    document.querySelector(".js-countdown-min").textContent = String(
      min
    ).padStart(2, "0");
    document.querySelector(".js-countdown-hour").textContent = String(
      hour
    ).padStart(2, "0");
    document.querySelector(".js-countdown-day").textContent = String(
      day
    ).padStart(2, "0");
  
    if (differ < 0) clearInterval(countdown);
  };
  setInterval(countdown, 1);
  
  const video = document.querySelector("#video");
  const videoSrc = document.querySelector("#videoPath").value;
  
  if (Hls.isSupported()) {
    const hls = new Hls();
    hls.loadSource(videoSrc);
    hls.attachMedia(video);
  } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
    // ネイティブサポートブラウザ用
    video.src = videoSrc;
  }
  
  // スライド
  let vw = 0.04266666667 * window.innerWidth;
  var mySwiper = new Swiper(".swiper-container", {
    centeredSlides: true,
    loop: true,
    autoHeight: true,
  
    slidesPerView: "auto",
    spaceBetween: 10,
    centeredSlides: true,
    breakpoints: {
      767: {
        spaceBetween: vw,
        slidesPerView: 1,
        slidesPerView: "auto",
      },
    },
    autoplay: {
      delay: 3000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false,
    },
  });
  