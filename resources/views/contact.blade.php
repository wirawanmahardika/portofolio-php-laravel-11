<x-layout>
    <x-slot:title>Contact</x-slot:title>

    <x-navbar />
    <div id="contact" class="bg-bgBlack flex flex-col w-full">
        <form class="flex flex-col items-center p-3 gap-y-3 text-white pt-10">
            <h3 class="text-red-500 text-3xl font-bold sm:text-4xl">
                Contact Me
            </h3>
            <div class="flex flex-col w-4/5 sm:w-3/5 md:w-1/2">
                <label class="font-semibold text-lg mb-2">
                    Name
                </label>
                <input type="text" id="name"
                    class="rounded bg-slate-900 px-2 py-0.5 font-medium outline-none focus:ring focus:ring-red-500 md:py-1"
                    placeholder="Input your name . . ." required />
            </div>

            <div class="flex flex-col w-4/5 sm:w-3/5 md:w-1/2">
                <label class="font-semibold text-lg mb-2">
                    Message
                </label>
                <textarea name="Pesan" cols="10" rows="5" id="message"
                    class="rounded px-2 py-0.5 bg-slate-900 font-medium outline-none focus:ring focus:ring-red-500"
                    placeholder="Input your message here . . ." required></textarea>
            </div>
            <button type="submit"
                class="bg-red-600 hover:bg-red-800 px-5 py-1 font-semibold rounded text-black sm:px-6">
                SEND
            </button>
            <a id="send" class="hidden">
                SEND
            </a>
        </form>

        <p class="text-slate-50 text-center text-2xl font-bold p-2 mt-20 md:mt-14">Or you can contact me using these
            sosmed below</p>

        <div class="grid grid-cols-2 md:grid-cols-4 md:p-10">
            <a href="https://web.facebook.com/wirawan.mahardika.39">
                <img src="/svg/facebook.svg" alt="facebook" />
            </a>
            <a href="https://www.instagram.com/wirawan_404">
                <img src="/svg/instagram.svg" alt="instagram" />
            </a>
            <div class="flex justify-center items-center">
                <a href="https://github.com/wirawanmahardika">
                    <img src="/svg/github.png" alt="github" class="w-36 m-auto" />
                </a>
            </div>
            <a href="https://wa.me/+6282296411967">
                <img src="/svg/whatsapp.svg" alt="whatsapp" />
            </a>
        </div>
    </div>
    <script src="/js/contact.js"></script>
</x-layout>
