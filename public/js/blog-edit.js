const setParagraf = document.getElementById("setParagraf")
const paragrafContainer = document.getElementById("paragrafContainer")

setParagraf.addEventListener("click", (e) => {
    // document.createElement("a").previousElementSibling
    const input = e.target.previousElementSibling
    const jumlahParagraf = parseInt(input.value)

    let htmlParagrafs = ''
    for (let i = 1; i <= jumlahParagraf; i++) {
        htmlParagrafs += `<div class="flex flex-col">
<span class="text-lg">Paragraf ${i}</span>
<textarea class="rounded outline-none border-2 border-black" name="paragraf${i}" cols="30" rows="3"></textarea>
                </div>`
    }

    paragrafContainer.innerHTML = htmlParagrafs
})

const form = document.getElementById("editBlog")
form.addEventListener("submit", async e => {
    e.preventDefault()

    const formData = new FormData(e.target)
    const isi = []
    formData.forEach((v, k) => { if (k.includes('paragraf') && v.length > 0) isi.push(v) })

    const body = {
        id: e.target.id.value,
        judul: e.target.judul.value,
        isi: isi,
        _token: e.target._token.value
    }


    const res = await fetch('/admin/blog/edit', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(body)
    })

    const data = await res.text();
    console.log(data);


    if (res.status === 200) {
        window.location.href = '/admin/blog'
    }
})