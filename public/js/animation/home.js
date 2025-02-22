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
let onceBar = 0
let onceTech = 0
window.addEventListener('scroll', function () {
    if (this.scrollY >= 700 && onceTech === 0) {
        anime({
            targets: '.tech',
            scale: [0.8, 1],
            opacity: [0, 1],
            delay: anime.stagger(200),
            duration: 1000
        })
        onceTech++
    }

    if (this.scrollY >= 300 && onceBar === 0) {
        onceBar++
        anime({
            targets: '#backend-bar',
            width: [0, '90%'],
            duration: 1300,
            easing: 'easeInOutCubic'
        })
        anime({
            targets: '#frontend-bar',
            width: [0, '80%'],
            easing: 'easeInOutCubic',
            duration: 1300
        })

    }
})

