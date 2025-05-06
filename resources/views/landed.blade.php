@extends('layout.layout')
@section('title', 'landed')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/landed.css') }}">
@endsection

@section('content')

    <body class="flex onest">
        <section
            class="flex flex-col lg:flex-row w-full gap-4 lg:gap-2 h-auto bg-gray-200 px-4 sm:px-6 2xl:px-[300px] py-6 my-10">
            <div class="flex flex-col w-full lg:w-[600px] gap-4">
                <p class="text-[24px] sm:text-[32px] lg:text-[64px] font-semibold">Raih <span class="text-[#F97D16]">Beasiswa</span> Hingga
                    300Jt</p>
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 sm:px-5 rounded-full w-fit inline-flex items-center gap-3">
                    Daftar Sekarang
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-2 grid-rows-2 lg:grid-rows-2 w-full lg:w-[600px] gap-4">
                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px]">25%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>

                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px]">40%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>

                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px]">80%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>

                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px]">100%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>
            </div>
            <style>
                @media (max-width: 768px) {
                    .grid {
                        grid-template-columns: 1fr !important;
                        grid-template-rows: auto !important;
                    }
                }
            </style>
        </section>
        <section class="flex flex-col lg:flex-row w-full px-4 sm:px-6 lg:px-[64px] gap-6 my-16">
            <div class="flex flex-col w-full lg:w-[60%] gap-4">
                <p class="text-[24px] sm:text-[32px] lg:text-[64px] w-full lg:w-[600px] font-semibold">Apa Saja Yang Akan Kamu Pelajari
                </p>
                <p class="text-xs sm:text-sm lg:text-base">Materi terdiri dari 4 Stack yang akan dilaksanakan selama 45
                    hari,
                    proses pembelajaran terdiri dari dedicated mentoring (1on1 Session), Hands-on Labs & Group Assignments
                </p>
                <button class="text-[#F97D16] w-fit">Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="w-full lg:w-[60%] flex justify-center items-start p-4 sm:p-6 lg:p-10">
                <div class="bg-white rounded-xl shadow p-4 sm:p-6 lg:p-8 w-full max-w-full lg:max-w-[800px]">
                    <div class="flex flex-wrap sm:space-x-4 lg:space-x-6 border-b">
                        <button class="tab-button py-2 px-3 sm:px-4 rounded-t-md font-medium text-orange-600 bg-orange-100"
                            data-tab="1">Stack 1</button>
                        <button class="tab-button py-2 px-3 sm:px-4 rounded-t-md text-gray-600 hover:text-orange-600"
                            data-tab="2">Stack 2</button>
                        <button class="tab-button py-2 px-3 sm:px-4 rounded-t-md text-gray-600 hover:text-orange-600"
                            data-tab="3">Stack 3</button>
                        <button class="tab-button py-2 px-3 sm:px-4 rounded-t-md text-gray-600 hover:text-orange-600"
                            data-tab="4">Stack 4</button>
                    </div>

                    <div class="mt-4">
                        <div class="tab-content" id="tab-1">
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2">Core Cybersecurity Skills</h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">
                                This stackable module covers core cybersecurity concepts and domains outlined by the topics
                                in
                                the ISC² Certified in Cybersecurity (CC) examination. Additionally, this segment also covers
                                keynote sessions by industry experts on cybersecurity overview, career options and
                                enterprise
                                cybersecurity awareness and considerations. By completing this learning stack, the
                                participant
                                gains a broad-brush view of cybersecurity and related career options.
                            </p>
                        </div>
                        <div class="tab-content hidden" id="tab-2">
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2">Lorem, ipsum.</h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In ut accusantium veritatis possimus itaque blanditiis quam amet. Libero aliquid unde vel voluptate tempora dolorem hic. Esse repudiandae eius provident, quas et iusto ratione doloremque adipisci repellendus mollitia veritatis earum necessitatibus possimus numquam? Sapiente, error qui. Saepe temporibus, aliquam repellendus maxime quaerat quis quas, ratione error eos tempore ex doloribus. Pariatur numquam, doloribus ipsum at excepturi blanditiis voluptates vero odit eos explicabo quas labore aliquam ratione harum quia, incidunt porro earum tempora? Odio eligendi vero iste in excepturi eos fugit, dolorum animi labore facere dicta eum totam fugiat non nisi voluptate?</p>
                        </div>
                        <div class="tab-content hidden" id="tab-3">
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2">Lorem, ipsum dolor.</h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis est ex asperiores delectus enim alias nostrum quo. Odit, voluptatum nulla. Velit, quisquam! Quia rem numquam ea atque esse, dignissimos aspernatur ut nulla aperiam magnam aliquid repellendus deleniti, dolorem vel nemo distinctio debitis perspiciatis modi quae ducimus sunt minus impedit! Delectus!

                            </p>
                        </div>
                        <div class="tab-content hidden" id="tab-4">
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2">Lorem.
                            </h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae natus quo iure iste, eius aliquid corporis sint beatae repudiandae ipsam tempore itaque amet nostrum inventore, laboriosam voluptatem eligendi sunt sed odio rem culpa assumenda temporibus? Doloribus a aut eos rerum placeat, quae, quisquam libero aliquam delectus voluptates pariatur maxime rem deleniti voluptate ut ipsam vitae quasi accusantium. Quis nihil eos alias? Nisi labore dolorum excepturi aperiam obcaecati, laborum a! Expedita quasi soluta sequi, rerum repellendus nesciunt, mollitia ipsa consectetur cupiditate dolores corporis, vel similique reiciendis repellat tempora. Sed obcaecati est, maiores voluptas tenetur eos et nihil, atque aspernatur adipisci consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                const buttons = document.querySelectorAll('.tab-button');
                const contents = document.querySelectorAll('.tab-content');

                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Remove active styles
                        buttons.forEach(btn => {
                            btn.classList.remove('bg-orange-100', 'text-orange-600');
                            btn.classList.add('text-gray-600');
                        });

                        // Hide all contents
                        contents.forEach(content => content.classList.add('hidden'));

                        // Activate clicked tab
                        button.classList.remove('text-gray-600');
                        button.classList.add('bg-orange-100', 'text-orange-600');
                        const tabId = button.getAttribute('data-tab');
                        document.getElementById('tab-' + tabId).classList.remove('hidden');
                    });
                });
            </script>
        </section>

        <section class="w-full mx-auto px-4 sm:px-6 lg:px-20 xl:px-40 py-8 sm:py-12 my-10">
            <div class="flex flex-col md:flex-row w-full justify-center gap-6 sm:gap-10 lg:gap-20">
                <div class="w-full md:w-auto">
                    <img src="{{ asset('asset/image/Poster Webinar A31 1.png') }}" alt="Poster"
                        class="w-full h-auto object-cover" />
                </div>

                <div class="w-full md:w-full lg:w-1/2 p-4 sm:p-6 space-y-4 sm:space-y-6 flex flex-col justify-center">
                    <p class="text-orange-500 font-semibold text-sm sm:text-base lg:text-lg">Pendaftaran Dibuka</p>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                        Kelas Cyber Defense Academy - BATCH 01
                    </h1>
                    <p class="text-orange-600 font-medium text-sm sm:text-base lg:text-lg">
                        Batch 01 LiveClass 45x, Pendaftaran akan dibuka:
                    </p>

                    <div class="flex flex-wrap gap-2 sm:gap-4 lg:gap-6 text-center mt-4" id="countdown-timer">
                        <div class="border border-orange-400 rounded-xl px-3 sm:px-4 lg:px-6 py-2 sm:py-3 lg:py-4">
                            <p class="text-xl sm:text-2xl lg:text-4xl font-bold" id="days">03</p>
                            <p class="text-xs sm:text-sm lg:text-base">hari</p>
                        </div>
                        <div class="border border-orange-400 rounded-xl px-3 sm:px-4 lg:px-6 py-2 sm:py-3 lg:py-4">
                            <p class="text-xl sm:text-2xl lg:text-4xl font-bold" id="hours">06</p>
                            <p class="text-xs sm:text-sm lg:text-base">jam</p>
                        </div>
                        <div class="border border-orange-400 rounded-xl px-3 sm:px-4 lg:px-6 py-2 sm:py-3 lg:py-4">
                            <p class="text-xl sm:text-2xl lg:text-4xl font-bold" id="minutes">57</p>
                            <p class="text-xs sm:text-sm lg:text-base">menit</p>
                        </div>
                        <div class="border border-orange-400 rounded-xl px-3 sm:px-4 lg:px-6 py-2 sm:py-3 lg:py-4">
                            <p class="text-xl sm:text-2xl lg:text-4xl font-bold" id="seconds">06</p>
                            <p class="text-xs sm:text-sm lg:text-base">detik</p>
                        </div>
                    </div>

                    <script>
                        const countdownDate = new Date();
                        countdownDate.setDate(countdownDate.getDate() + 3);

                        function updateCountdown() {
                            const now = new Date().getTime();
                            const distance = countdownDate - now;

                            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            document.getElementById('days').textContent = days;
                            document.getElementById('hours').textContent = hours;
                            document.getElementById('minutes').textContent = minutes;
                            document.getElementById('seconds').textContent = seconds;

                            if (distance < 0) {
                                clearInterval(timerInterval);
                                document.getElementById('countdown-timer').innerHTML =
                                    "<p class='text-xl sm:text-2xl lg:text-4xl font-bold'>Waktu Habis</p>";
                            }
                        }

                        const timerInterval = setInterval(updateCountdown, 1000);
                        updateCountdown();
                    </script>

                    <p class="text-gray-600 text-sm sm:text-base lg:text-lg">
                        Mulai belajar skill cyber security dari 0 dengan 45x pertemuan kelas! Instruktur profesional
                        Internasional mempercepat proses belajar kamu hingga akhir dan jadi ahli!
                    </p>

                    <div class="flex flex-wrap gap-2 sm:gap-4 lg:gap-6 mt-4">
                        <a href="#"
                            class="bg-orange-500 hover:bg-orange-600 text-white font-medium px-4 sm:px-6 lg:px-8 py-2 sm:py-3 lg:py-4 rounded-full flex items-center">
                            Daftar Sekarang <span class="ml-2">→</span>
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 hover:bg-orange-100 font-medium px-4 sm:px-6 lg:px-8 py-2 sm:py-3 lg:py-4 rounded-full flex items-center">
                            Cek Rundown Silabus <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-full px-4 sm:px-8 lg:px-16 flex flex-col lg:flex-row justify-center">
            <div class="flex flex-col mb-8 lg:mb-0">
            <h1 class="text-2xl sm:text-4xl lg:text-5xl font-semibold text-gray-900 mb-4">
                Perjalanan Belajar yang <br /> Bikin Kamu Naik Level
            </h1>
            <p class="text-gray-500">
                Berikut timeline pada pilot program pertama yang dimulai bulan <br class="hidden sm:block" />April 2025.
            </p>
            </div>

            <div class="relative border-l border-gray-300 pl-6 ml-3 space-y-8">
            <ul class="space-y-4">
                <li>
                <p class="font-semibold bg-gray-200 rounded-full p-2 w-fit">Senin, 14 April 2025</p>
                <p class="font-semibold mt-2">Webinar</p>
                <p class="text-gray-500">Sounding informasi tutup pendaftaran beasiswa 21 April 23:59 WIB</p>
                </li>
                <li>
                <p class="font-semibold bg-gray-200 rounded-full p-2 w-fit">Senin, 21 April 2025</p>
                <p class="font-semibold mt-2">Last Call of Participant</p>
                <p class="text-gray-500">(will be officially closed on 23:59 WIB)</p>
                </li>
                <li>
                <p class="font-semibold bg-gray-200 rounded-full p-2 w-fit">Selasa–Rabu, 22–23 April 2025</p>
                <p class="font-semibold mt-2">Seleksi & Pengiriman Surat Offering</p>
                <p class="text-gray-500">maksimal konfirmasi & pembayaran 24 April</p>
                </li>
                <li>
                <p class="font-semibold bg-gray-200 rounded-full p-2 w-fit">Kamis, 24 April 2025</p>
                <p class="font-semibold mt-2">Follow Up Konfirmasi Pembayaran</p>
                </li>
                <li>
                <p class="font-semibold bg-gray-200 rounded-full p-2 w-fit">Jumat, 25 April 2025</p>
                <p class="font-semibold mt-2">Welcoming & Onboarding</p>
                </li>
                <li>
                <p class="font-semibold bg-gray-200 rounded-full p-2 w-fit">Senin, 28 April 2025</p>
                <p class="font-semibold mt-2">Class Started</p>
                </li>
            </ul>
            </div>
        </section>

        <section class="mt-10 my-16">
            <h2 class="text-2xl md:text-5xl font-semibold text-center"><span class="text-orange-600">Sertifikasi</span> yang Akan Kamu
            Peroleh</h2>
            <br>
            <br>
            <div class="flex flex-col md:flex-row w-full justify-center gap-4">
            <div class="w-full md:w-fit text-center">
                <p class="font-semibold">Certified in Cyber Security ISC2 (CC) <br>Okta Certified Professional
                <br>Microsoft IAM Admin (SC-300) <br>Course Completion Certificate
                </p>
            </div>
            <div class="w-full md:w-fit flex justify-center">
                <img src="{{ asset('asset/image/image 114.png') }}" alt="" class="w-auto max-w-full md:w-fit">
            </div>
            </div>
        </section>
        <footer class="bg-white text-center text-gray-500 py-4 border-t border-gray-300">
            © All Right Reserved by SEAL
        </footer>
    </body>
@endsection
