const closeNav = (h) => {
    anime({
        targets: '#mobile-nav',
        height: h,
        duration: 300,
        easing: 'linear'
    })
}

let isOpen = false
document.getElementById("navbar-toggle").onclick = () => {
    closeNav(isOpen ? '0' : '175px')
    isOpen = !isOpen
}