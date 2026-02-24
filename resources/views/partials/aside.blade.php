<aside class=" w-80 shrink-0 my-4 hidden lg:block overflow-y-auto px-4 -mx-4">
    <input
            type="text"
            placeholder="#Search an idea or pixel"
            class="w-full border-pixl/50 text-sm">
    <hr class="border-pixl/10 mt-2" />
    <!-- Artists to folow -->
    <x-artiste-to-follow />
    <!-- Follow idea stream -->
    <div class="mt-4 border border-pixl-light/10 p-4">
        <h2 class="text-sm text-pixl-light/60">Follow idea Streams</h2>
        <ol class="flex flex-col gap-4 mt-4">

            <li class="flex items-center justify-between gap-2.5">
                <p class="text-sm truncate">Breakfast ideas and whatnot</p>
                <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 active:border-pixl/75 hover:border-pixl/60 text-pixl border px-1.5 py-0.5 text-2xl leading-none"
                >+</button
                >
            </li>
            <li class="flex items-center justify-between gap-4">
                <p class="text-sm truncate">Quick book to read</p>
                <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 active:border-pixl/75 hover:border-pixl/60 text-pixl border px-1.5 py-0.5 text-2xl leading-none"
                >+</button
                >
            </li>
            <li class="flex items-center justify-between gap-4">
                <p class="text-sm truncate">Inspiration for Art</p>
                <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 active:border-pixl/75 hover:border-pixl/60 text-pixl border px-1.5 py-0.5 text-2xl leading-none"
                >+</button
                >
            </li>
        </ol>
        <a href="#" class="text-pixl-light/60 text-sm mt-4 inline-block"
        >Show More</a
        >
    </div>
</aside>
