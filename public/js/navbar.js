const mobileNav = document.getElementById("mobile-nav")
const navbarToggle = document.getElementById("navbar-toggle")

navbarToggle.addEventListener("click", () => {
    if (mobileNav.classList.contains("h-[175px]")) {
        mobileNav.classList.add("h-0")
        mobileNav.classList.remove("h-[175px]")
    } else {
        mobileNav.classList.add("h-[175px]")
        mobileNav.classList.remove("h-0")
    }

})
