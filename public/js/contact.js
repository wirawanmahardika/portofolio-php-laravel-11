const send = document.getElementById('send')
const name = document.getElementById('name')
const message = document.getElementById('message')

document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault()
    const sendMessageValue = `
        mailto:wirawanmahardika10@gmail.com?subject=hello from ${name.value}&body=${message.value}
    `
    send.setAttribute('href', sendMessageValue)
    send.click()
})