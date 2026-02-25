<x-layout title="PIXL - Feed">
<!-- Navigation -->
@include('partials.navigation')
<!-- Content -->
<main class="flex grow flex-col gap-4 overflow-y-auto py-4 px-4 -mx-4">
    <div class="h-full">
        <nav class="overflow-x-auto [scrollbar-width:none]">
            <ul class="min-w-max flex justify-end gap-8 text-sm">
                <li><a href="#">For you</a> </li>
                <li><a class="text-pixl-light/60 hover:text-pixl-light/80" href="#">Idea streams</a></li>
                <li><a class="text-pixl-light/60 hover:text-pixl-light/80" href="#">Following</a></li>
            </ul>
        </nav>
    </div>
    <!-- Post Prompt -->
    <div class="flex mt-8 gap-4 items-start border-b border-pixl-light/10 pb-4">
        <a href="/profile" class="shrink-0"><img src="/images/adrian.png"
                                                 alt="Avatar for Adrian"
                                                 class="size-10 object-cover"></a>
    @include('partials.post-form',
             [
                'labelText' => "Post Body",
                'fieldName' => "post",
                'placeHolder' => "what's up _adrian?",
             ] )
    </div>
    <!-- Feed -->
    <ol class="mt-4">
        <!-- Feed items -->
        @foreach($feedItems as $item)
                @include('partials.feed-item', compact('item'))
        @endforeach

        <!-- More feed items ... -->

    </ol>
    <footer class="mt-30 ml-14">
        <p class="text-center">That`s all, folks!</p>
        <hr class="border-pixl-light/10 mt-4" />
        <!-- White noise-->
        <div class="bg-[url(/resources/images/white-noise.gif)] h-20"></div>
    </footer>
</main>
<!-- Sidebar -->
@include('partials.aside')
</x-layout>
