// Get references to both navbars
const initialNavbar = document.getElementById("initialNavbar");
const scrollNavbar = document.getElementById("scrollNavbar");

// Track scrolling
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    // Hide initial navbar and show second navbar
    initialNavbar.classList.add("hidden");
    scrollNavbar.style.display = "flex";
  } else {
    // Show initial navbar and hide second navbar
    initialNavbar.classList.remove("hidden");
    scrollNavbar.style.display = "none";
  }
});

//step 1: get DOM
let nextDom = document.getElementById("next");
let prevDom = document.getElementById("prev");

let carouselDom = document.querySelector(".carousel");
let SliderDom = carouselDom.querySelector(".carousel .list");
let thumbnailBorderDom = document.querySelector(".carousel .thumbnail");
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll(".item");
let timeDom = document.querySelector(".carousel .time");

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 7000;

nextDom.onclick = function () {
  showSlider("next");
};

prevDom.onclick = function () {
  showSlider("prev");
};
let runTimeOut;
let runNextAuto = setTimeout(() => {
  next.click();
}, timeAutoNext);
function showSlider(type) {
  let SliderItemsDom = SliderDom.querySelectorAll(".carousel .list .item");
  let thumbnailItemsDom = document.querySelectorAll(
    ".carousel .thumbnail .item"
  );

  if (type === "next") {
    SliderDom.appendChild(SliderItemsDom[0]);
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    carouselDom.classList.add("next");
  } else {
    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
    carouselDom.classList.add("prev");
  }
  clearTimeout(runTimeOut);
  runTimeOut = setTimeout(() => {
    carouselDom.classList.remove("next");
    carouselDom.classList.remove("prev");
  }, timeRunning);

  clearTimeout(runNextAuto);
  runNextAuto = setTimeout(() => {
    next.click();
  }, timeAutoNext);
}
// Function to check if the user is logged in
// function checkLogin() {
//     return fetch('session-check.php')
//         .then(response => response.json())
//         .then(data => data.loggedIn);
// }
// // Event listener for all images and buttons
// document.addEventListener('click', async function (event) {
//     if (event.target.tagName === 'IMG' || event.target.tagName === 'BUTTON') {
//         const loggedIn = await checkLogin();
        
//         // Redirect to login page if not logged in
//         if (!loggedIn) {
//             event.preventDefault();
//             window.location.href = 'homepage.php';
//         }
//     }
// });





