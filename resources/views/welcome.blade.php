<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vishalgarh Farms | Nature • Stay • Celebrate</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F7F3E8] text-[#173B2A]">

    <!-- ================= HERO ================= -->
    <section
        class="relative flex min-h-[85vh] items-center overflow-hidden bg-[#173B2A]"
    >

        <!-- Background Image -->
        <div
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1800&q=85');"
        ></div>

        <!-- Dark Forest Overlay -->
        <div class="absolute inset-0 bg-[#173B2A]/75"></div>

        <!-- Subtle Gold Glow -->
        <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-[#C9A86A]/20 blur-3xl"></div>

        <!-- Content -->
        <div class="relative z-10 mx-auto w-full max-w-7xl px-6 py-24 md:px-12">

            <div class="max-w-3xl">

                <!-- Tag -->
                <span
                    class="mb-6 inline-flex rounded-full border border-[#C9A86A]/50
                           bg-[#C9A86A]/15 px-5 py-2 text-sm font-semibold
                           tracking-[0.2em] text-[#C9A86A]"
                >
                    WELCOME TO VISHALGARH FARMS
                </span>

                <!-- Heading -->
                <h1
                    class="mb-6 text-5xl font-semibold leading-[1.05]
                           text-white sm:text-6xl md:text-7xl lg:text-8xl"
                >
                    Escape to
                    <span class="text-[#C9A86A]">Nature.</span>
                </h1>

                <!-- Description -->
                <p
                    class="mb-9 max-w-2xl text-base leading-8 text-white/80
                           sm:text-lg md:text-xl"
                >
                    A peaceful countryside retreat where beautiful stays,
                    fresh air and memorable celebrations come together.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col gap-4 sm:flex-row">

                    <a
                        href="#experience"
                        class="inline-flex items-center justify-center rounded-full
                               bg-[#C9A86A] px-7 py-4 font-semibold
                               text-[#173B2A] shadow-lg shadow-black/20
                               transition duration-300
                               hover:-translate-y-1 hover:bg-[#d8bb83]"
                    >
                        Explore More
                        <span class="ml-2">→</span>
                    </a>

                    <a
                        href="#booking"
                        class="inline-flex items-center justify-center rounded-full
                               border border-white/60 bg-white/10 px-7 py-4
                               font-semibold text-white backdrop-blur-sm
                               transition duration-300
                               hover:bg-white hover:text-[#173B2A]"
                    >
                        Book Your Stay
                    </a>

                </div>

            </div>
        </div>

        <!-- Bottom Scroll Indicator -->
        <div
            class="absolute bottom-8 left-1/2 hidden -translate-x-1/2
                   flex-col items-center text-white/60 md:flex"
        >
            <span class="mb-2 text-xs tracking-[0.3em]">SCROLL</span>

            <div class="h-10 w-px bg-[#C9A86A]"></div>
        </div>

    </section>


    <!-- ================= INTRO ================= -->
    <section class="bg-[#F7F3E8] px-6 py-20 md:px-12 md:py-28">

        <div class="mx-auto max-w-4xl text-center">

            <p
                class="mb-4 text-sm font-semibold uppercase
                       tracking-[0.3em] text-[#667A45]"
            >
                Discover Vishalgarh
            </p>

            <h2
                class="mb-6 text-4xl font-semibold leading-tight
                       text-[#173B2A] md:text-5xl"
            >
                A Little Piece of Paradise
            </h2>

            <p
                class="mx-auto max-w-2xl text-base leading-8
                       text-[#667A45] md:text-lg"
            >
                Discover a relaxing farm experience surrounded by greenery,
                open spaces and beautiful moments with your loved ones.
            </p>

            <!-- Gold Line -->
            <div class="mx-auto mt-8 h-px w-20 bg-[#C9A86A]"></div>

        </div>

    </section>


    <!-- ================= EXPERIENCES ================= -->
    <section
        id="experience"
        class="bg-[#173B2A] px-6 py-20 md:px-12 md:py-24"
    >

        <div class="mx-auto max-w-7xl">

            <!-- Section Heading -->
            <div class="mb-12 text-center">

                <p
                    class="mb-3 text-sm font-semibold uppercase
                           tracking-[0.3em] text-[#C9A86A]"
                >
                    Experience
                </p>

                <h2
                    class="text-4xl font-semibold text-white md:text-5xl"
                >
                    Stay. Relax. Celebrate.
                </h2>

            </div>


            <!-- Cards -->
            <div class="grid gap-6 md:grid-cols-3">

                <!-- Nature -->
                <div
                    class="group rounded-3xl border border-white/10
                           bg-[#667A45]/30 p-8 transition duration-300
                           hover:-translate-y-2 hover:bg-[#667A45]/50"
                >

                    <div
                        class="mb-7 flex h-16 w-16 items-center justify-center
                               rounded-2xl bg-[#C9A86A] text-3xl"
                    >
                        🌿
                    </div>

                    <h3 class="mb-3 text-2xl font-semibold text-white">
                        Nature
                    </h3>

                    <p class="leading-7 text-white/65">
                        Relax in peaceful surroundings away from the city
                        and reconnect with nature.
                    </p>

                    <a
                        href="#"
                        class="mt-6 inline-block font-semibold text-[#C9A86A]"
                    >
                        Discover →
                    </a>

                </div>


                <!-- Stay -->
                <div
                    class="group rounded-3xl border border-white/10
                           bg-[#667A45]/30 p-8 transition duration-300
                           hover:-translate-y-2 hover:bg-[#667A45]/50"
                >

                    <div
                        class="mb-7 flex h-16 w-16 items-center justify-center
                               rounded-2xl bg-[#C9A86A] text-3xl"
                    >
                        🏡
                    </div>

                    <h3 class="mb-3 text-2xl font-semibold text-white">
                        Stay
                    </h3>

                    <p class="leading-7 text-white/65">
                        Comfortable spaces designed for a peaceful and
                        memorable getaway.
                    </p>

                    <a
                        href="#"
                        class="mt-6 inline-block font-semibold text-[#C9A86A]"
                    >
                        Explore Stay →
                    </a>

                </div>


                <!-- Celebrations -->
                <div
                    class="group rounded-3xl border border-white/10
                           bg-[#667A45]/30 p-8 transition duration-300
                           hover:-translate-y-2 hover:bg-[#667A45]/50"
                >

                    <div
                        class="mb-7 flex h-16 w-16 items-center justify-center
                               rounded-2xl bg-[#C9A86A] text-3xl"
                    >
                        🎉
                    </div>

                    <h3 class="mb-3 text-2xl font-semibold text-white">
                        Celebrations
                    </h3>

                    <p class="leading-7 text-white/65">
                        Create beautiful memories for birthdays, gatherings
                        and special occasions.
                    </p>

                    <a
                        href="#"
                        class="mt-6 inline-block font-semibold text-[#C9A86A]"
                    >
                        Plan Event →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= BOOKING CTA ================= -->
    <section
        id="booking"
        class="bg-[#F7F3E8] px-6 py-20 md:px-12 md:py-28"
    >

        <div
            class="mx-auto max-w-6xl overflow-hidden rounded-[2rem]
                   bg-[#667A45] px-8 py-14 text-center
                   md:px-16"
        >

            <p
                class="mb-3 text-sm font-semibold uppercase
                       tracking-[0.3em] text-[#C9A86A]"
            >
                Your Escape Awaits
            </p>

            <h2
                class="mb-5 text-4xl font-semibold text-white md:text-5xl"
            >
                Make Your Next Getaway Special
            </h2>

            <p
                class="mx-auto mb-8 max-w-2xl leading-7 text-white/75"
            >
                Experience peaceful surroundings, beautiful spaces
                and unforgettable moments at Vishalgarh Farms.
            </p>

            <a
                href="#"
                class="inline-flex rounded-full bg-[#C9A86A]
                       px-8 py-4 font-semibold text-[#173B2A]
                       transition duration-300
                       hover:-translate-y-1 hover:bg-white"
            >
                Reserve Your Stay
            </a>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->
    <footer class="bg-[#173B2A] px-6 py-10 text-center">

        <div class="mb-3 text-2xl font-semibold text-white">
            Vishalgarh <span class="text-[#C9A86A]">Farms</span>
        </div>

        <p class="mb-5 text-sm text-white/50">
            Nature • Stay • Celebrate
        </p>

        <div class="mx-auto mb-6 h-px max-w-xs bg-white/10"></div>

        <p class="text-sm text-white/40">
            © {{ date('Y') }} Vishalgarh Farms · All Rights Reserved
        </p>

    </footer>

</body>
</html>