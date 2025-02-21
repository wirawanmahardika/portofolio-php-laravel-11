// contact button in jumbotron animation
const contact = anime({
    targets: '#jumbotron-contact',
    background: ['rgb(239 68 68)', 'rgb(220, 38, 38)'],
    duration: 1000,
    direction: 'alternate',
    loop: true,
    easing: 'linear'
})

document.getElementById('jumbotron-contact').onmouseenter = contact.pause
document.getElementById('jumbotron-contact').onmouseout = contact.play

// professions animation
const profession = ['software developer', 'machine learning engineer']
const profesi = document.getElementById('profession')

let profesiKe = 0
animateProfesi()
setInterval(() => {
    animateProfesi()
}, 3500);

function animateProfesi() {
    profesi.innerHTML = ''
    let text = profession[profesiKe]
    text = text.split('').forEach(t => {
        const span = document.createElement('span')
        span.innerText = t
        profesi.appendChild(span)
    })

    anime({
        targets: '#profession span',
        delay: anime.stagger(80),
        opacity: [0, 1]
    })

    if (profesiKe === profession.length - 1) profesiKe = 0
    else profesiKe++
}

// skill bars animation
let once = 0
window.addEventListener('scroll', function () {
    if (this.scrollY >= 300 && once === 0) {
        anime({
            targets: '#backend-bar',
            width: [0, '90%'],
            duration: 2000,
            easing: 'cubicBezier(.5, .05, .01, .8)'
        })
        anime({
            targets: '#frontend-bar',
            width: [0, '80%'],
            easing: 'cubicBezier(.5, .05, .01, .8)',
            duration: 2000
        })
        once++
    }
})