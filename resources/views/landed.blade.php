@extends('layout.layout')
@section('title', 'Landed')

@section('content')

    <body class="flex onest overflow-x-hidden">
        <div class="relative">
            <div class="item-header z-0">
                <img class="absolute right-0 top-0" src="{{ asset('asset/item/Ellipse 39.png') }}" alt="">
                <img class="absolute left-0 top-0" src="{{ asset('asset/item/Ellipse 38.png') }}" alt="">
                <img class="absolute left-0 top-0" src="{{ asset('asset/item/PRINT.png') }}" alt="">
            </div>
            <nav id="navbar" class="flex justify-between items-center p-5 bg-none px-4 md:px-16 fixed top-0 left-0 w-full z-50 transition-all duration-300">
                <div>
                    <img src="{{ asset('asset/image/CDA_Primary Logo 1.png') }}" alt="Cyber Defense Logo"
                        class="w-28 h-auto">
                </div>
                <div class="hidden md:flex space-x-4 gap-4">
                    <a href="#home" class="text-gray-800 font-bold hover:text-orange-500">Beranda</a>
                    <a href="#home" class="text-gray-800 font-bold hover:text-orange-500">Beranda</a>
                    <a href="#about" class="text-gray-800 font-bold hover:text-orange-500">Tentang Kami</a>
                    <a href="#curriculum" class="text-gray-800 font-bold hover:text-orange-500">Kurikulum</a>
                    <a href="#timeline" class="text-gray-800 font-bold hover:text-orange-500">Timeline</a>
                    <a href="#certification"
                        class="text-gray-800 font-bold hover:text-orange-500">Sertifikasi</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-toggle"><i class="fa-solid fa-bars"></i></button>
                </div>
            </nav>
            <div id="mobile-menu" class="hidden fixed top-0 pt-16 left-0 w-full bg-white shadow-md z-40">
                <a href="#home" class="block px-4 py-2 text-gray-800 font-bold hover:bg-orange-100">Beranda</a>
                <a href="#about" class="block px-4 py-2 text-gray-800 font-bold hover:bg-orange-100">Tentang Kami</a>
                <a href="#curriculum" class="block px-4 py-2 text-gray-800 font-bold hover:bg-orange-100">Kurikulum</a>
                <a href="#timeline" class="block px-4 py-2 text-gray-800 font-bold hover:bg-orange-100">Timeline</a>
                <a href="#certification" class="block px-4 py-2 text-gray-800 font-bold hover:bg-orange-100">Sertifikasi</a>
            </div>

            <script>
                const menuToggle = document.getElementById('menu-toggle');
                const mobileMenu = document.getElementById('mobile-menu');
                const navbar = document.getElementById('navbar');

                menuToggle.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });

                // Close menu when clicking outside
                document.addEventListener('click', (event) => {
                    if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                        mobileMenu.classList.add('hidden');
                    }
                });

                // Change navbar background on scroll
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.add('bg-white', 'shadow-md');
                    } else {
                        navbar.classList.remove('bg-white', 'shadow-md');
                    }
                });
            </script>
        </div>

        <section class="flex flex-col md:flex-row items-center justify-center px-4 md:px-32 py-10 h-screen w-full md:mt-0" id="home">
            <div class="flex w-full flex-col">
                <h1 class="text-6xl md:text-6xl lg:text-7xl font-bold text-gray-800 mb-5 leading-tight">
                    Take Your Part in Global Cyber <span class="text-orange-500">Defense</span> Elite
                </h1>
                <p class="text-base md:text-xl lg:text-2xl text-gray-600 mb-5">
                    Dapatkan pengalaman belajar praktis, dan nikmati bimbingan langsung dari mentor expert Internasional.
                </p>
                <button class="px-6 py-3 bg-orange-500 text-white rounded-full text-sm md:text-lg hover:bg-orange-600 w-fit">
                    Daftar Sekarang <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <div class="w-full text-center hidden md:flex justify-center">
                <img src="{{ asset('asset/image/PRINT.png') }}" alt="Cyber Defense"
                    class="w-full max-w-sm lg:max-w-md mx-auto rounded-lg">
            </div>
        </section>

        <section class="bg-[#FB9A3C] grid grid-cols-3 md:grid-cols-5 gap-2 md:gap-5 py-2 px-4 md:px-24">
            <div class="w-20 md:w-36 h-20 md:h-36 flex justify-center items-center">
            <img src="{{ asset('asset/image/Logo Kek.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="w-20 md:w-36 h-20 md:h-36 flex justify-center items-center">
            <img src="{{ asset('asset/image/FINAL LOGO SEAL 2.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="w-20 md:w-36 h-20 md:h-36 flex justify-center items-center">
            <img src="{{ asset('asset/image/WhatsApp Image 2025-03-30 at 12.54.21_aaa235b5 1.png') }}" alt=""
                class="w-full h-auto">
            </div>
            <div class="w-20 md:w-36 h-20 md:h-36 flex justify-center items-center col-span-1 md:col-span-auto">
            <img src="{{ asset('asset/image/Group 1610.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="w-20 md:w-36 h-20 md:h-36 flex justify-center items-center col-span-1 md:col-span-auto">
            <img src="{{ asset('asset/image/logo acquarii.png') }}" alt="" class="w-full h-auto">
            </div>
        </section>
        <section class="w-full h-fit px-4 md:px-[200px] flex flex-col lg:flex-row md:justify-center items-center my-16" id="about">
            <div class="flex flex-col w-full md:w-1/2 lg:w-1/2 text-left lg:text-left">
                <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-6 leading-tight">
                    <span class="text-[#F97D16]">Developing</span> the Next Generation of Cyber Defenders
                </h2>
                <p class="text-gray-600 text-sm md:text-lg lg:text-xl leading-relaxed mb-10">
                    Penunjukan khusus Presiden Republik Indonesia untuk melaksanakan kolaborasi antara Indonesia dan India.
                    KEK Singhasari melalui SEAL (Social Economic Accelerator Lab) menciptakan kolaborasi di bidang
                    keamanan siber yang berfokus pada pertahanan, mempersiapkan talenta untuk menghadapi perkembangan
                    teknologi di dunia siber.
                </p>
            </div>
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="{{ asset('asset/image/image 112.png') }}" alt="Cyber Defense Collaboration"
                    class="w-full max-w-sm lg:max-w-xl rounded-none md:rounded-lg">
            </div>
        </section>


        <section class="flex flex-col justify-center items-center px-5 py-10 gap-5 my-0 md:my-16" id="mentor">
            <p class="text-5xl">Belajar Dengan <span class="text-[#F97D16]">Mentor Ahli</span> Bertaraf Internasional</p>
            <div class="flex flex-col md:flex-row justify-center items-center px-5 py-10 gap-5">
                <div class="text-center w-fit h-fit rounded-2xl p-2 border">
                    <div class="bg-gradient-to-t from-[#EC4242] to-[#FFD1B7] rounded-2xl">
                        <img src="{{ asset('asset/image/Utool-20250325-140134617 1.png') }}" alt="John Doe"
                            class="w-[192px] h-[192px] rounded-2xl mb-3">
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Sawani C</h3>
                    <p class="text-sm text-gray-600">Senior Security Expert</p>
                </div>
                <div class="text-center w-fit h-fit rounded-2xl p-2 border">
                    <div class="bg-gradient-to-t from-[#EC4242] to-[#FFD1B7] rounded-2xl">
                        <img src="{{ asset('asset/image/Utool-20250325-142449414[1] 2.png') }}" alt="Jane Smith"
                            class="w-[192px] h-[192px] rounded-2xl mb-3">
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Abhijit H</h3>
                    <p class="text-sm text-gray-600">Cyber Security Expert</p>
                </div>
                <div class="text-center w-fit h-fit rounded-2xl p-2 border">
                    <div class="bg-gradient-to-t from-[#EC4242] to-[#FFD1B7] rounded-2xl">
                        <img src="{{ asset('asset/image/WhatsApp Image 2025-04-10 at 11.23.20_375df8e7 1.png') }}"
                            alt="Michael Lee" class="w-[192px] h-[192px] rounded-2xl mb-3">
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Samarjit A</h3>
                    <p class="text-sm text-gray-600">Cyber Security Ethical</p>
                </div>
            </div>
        </section>

        <section
            class="flex flex-col lg:flex-row w-full gap-4 lg:gap-2 h-auto bg-gray-100 px-4 sm:px-6 2xl:px-[300px] py-6 my-20">
            <div class="flex flex-col w-full lg:w-[600px] gap-4">
                <p class="text-[24px] sm:text-[32px] lg:text-[64px] font-semibold text-center lg:text-left">Raih <span
                        class="text-[#F97D16]">Beasiswa</span> Hingga 300Jt</p>
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 sm:px-5 rounded-full w-fit mx-auto lg:mx-0 inline-flex items-center gap-3">
                    Daftar Sekarang
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
                <div class="grid grid-cols-2 w-full max-w-[600px] gap-4 sm:gap-6 lg:gap-10 mx-auto">
                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full py-5">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px] text-[#F97D16] font-semibold">25%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>
                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full py-5">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px] text-[#F97D16] font-semibold">40%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>
                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full py-5">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px] text-[#F97D16] font-semibold">80%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>
                <div class="flex flex-col bg-white text-center justify-center items-center rounded-lg w-full h-full py-5">
                    <p class="text-[24px] sm:text-[32px] lg:text-[64px] text-[#F97D16] font-semibold">100%</p>
                    <p class="text-xs sm:text-sm lg:text-lg">Dari Total Program</p>
                </div>
            </div>
        </section>
        <section class="flex flex-col lg:flex-row w-full px-4 sm:px-6 lg:px-[64px] gap-6 mt-20 md:mb-[300px]"
            id="curriculum">
            <div class="flex flex-col w-full lg:w-[60%] gap-4">
                <p class="text-[24px] sm:text-[32px] lg:text-[64px] w-full lg:w-[600px] font-semibold">Apa Saja Yang Akan
                    Kamu Pelajari
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
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2">Baseline Technology Skills</h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">This stackable module consists of focused technology skills necessary 
                                to build a career in cybersecurity. With a solid understanding of the IT infrastructure, systems 
                                and resources deployed in organizations, the participants can better understand the risks 
                                these businesses face and adopt the means to protect them. This module also focuses on 
                                analyzing IT-related processes for efficiency and security.?
                            </p>
                        </div>
                        <div class="tab-content hidden" id="tab-3">
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2"> Niche Cybersecurity Skills (IAM/Identity Security)</h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">Learning Summary: This stackable module focuses on the specialized skills needed by an 
                                Identity & Access Management (IAM) practitioner. This module includes core concepts, 
                                business drivers, use cases, demonstrations and process analysis of the three segments 
                                within IAM – Identity Governance & Administration (IGA), Single Sign On (SSO) and 
                                Privileged Access Management (PAM). Next, the participants engage in hands-on lab 
                                exercises to implement industry-standard use cases from scratch using Okta, a market-leader 
                                in the secure web/mobile application access management space.

                            </p>
                        </div>
                        <div class="tab-content hidden" id="tab-4">
                            <h2 class="text-base sm:text-lg lg:text-xl font-semibold mb-2">Professional Skills 
                            </h2>
                            <p class="text-gray-600 text-xs sm:text-sm lg:text-base">Learning Summary: This stackable module facilitates the transition of entry-level and early
                                stage talent into a professional career. With a holistic view towards the gamut of skills needed 
                                to excel in a professional career, especially if one is part of a global workforce, this module 
                                enables the participants to become aware of workplace expectations and adopt the skills and 
                                considerations needed to excel in their careers. 
                            </p>
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

        <section class="w-full mx-auto px-4 sm:px-6 lg:px-20 xl:px-40 py-8 sm:py-12 md:my-32" id="timeline">
            <div class="flex flex-col md:flex-row w-full justify-center gap-6 sm:gap-10 lg:gap-20">
                <div class="w-full md:w-auto">
                    <img src="{{ asset('asset/image/Poster Webinar A31 1.png') }}" alt="Poster"
                        class="w-full h-auto object-container" />
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

                    <div class="md:flex md:flex-wrap flex-col gap-2 sm:gap-4 lg:gap-6 mt-4">
                        <a href="#"
                            class=" w-fit bg-orange-500 hover:bg-orange-600 text-white font-medium mb-2 md:mb-0 px-4 sm:px-6 lg:px-8 py-2 sm:py-3 lg:py-4 rounded-full flex items-center">
                            Daftar Sekarang <span class="ml-2">→</span>
                        </a>
                        <a href="#"
                            class="w-fit border border-orange-500 text-orange-500 hover:bg-orange-100 font-medium px-4 sm:px-6 lg:px-8 py-2 sm:py-3 lg:py-4 rounded-full flex items-center">
                            Cek Rundown Silabus <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-full px-4 sm:px-8 lg:px-16 flex flex-col lg:flex-row justify-center" id="certification">
            <div class="flex flex-col mb-8 lg:mb-0">
                <h1 class="text-2xl sm:text-4xl lg:text-5xl font-semibold text-gray-900 mb-4">
                    Perjalanan Belajar yang <br /> Bikin Kamu Naik Level
                </h1>
                <p class="text-gray-500">
                    Berikut timeline pada pilot program pertama yang dimulai bulan <br class="hidden sm:block" />April
                    2025.
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

        <section class="mt-10 my-20">
            <h2 class="text-2xl md:text-5xl font-semibold text-center"><span class="text-orange-600">Sertifikasi</span>
                yang Akan Kamu
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
                    <img src="{{ asset('asset/image/image 114.png') }}" alt=""
                        class="w-auto max-w-full md:w-fit">
                </div>
            </div>
        </section>
        <footer class="bg-white text-center text-gray-500 py-4 border-t border-gray-300">
            © All Right Reserved by SEAL
        </footer>
    </body>
@endsection
