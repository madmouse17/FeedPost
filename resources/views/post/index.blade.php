<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    {{-- <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <livewire:post-table />

            </div>
        </div>
    </div> --}}
    <div class="p-10 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-5 lg:grid-cols-5 xl:grid-cols-5 gap-5 px-6 mt-3">
        <!--Card 1-->
        @foreach ($post as $p)
        <div class="rounded overflow-hidden shadow-lg mr-4">
            <div class="relative">
                <img class="w-full" src="{{ $p->url[0] }}" alt="Mountain">
                @if (count($p->url) > 1)
                <div class="absolute left-0 top-0">
                    <svg class="h-8 w-8 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <rect x="8" y="8" width="12" height="12" rx="2" />
                        <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" />
                    </svg>
                </div>
                @endif

            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $p->tanggal }}</span>
            </div>
            <div class="px-6 py-4">
                <p class="text-gray-700 text-base">
                    {{ $p->desc }}
                </p>
            </div>

        </div>
        @endforeach
    </div>
    <div>
        {{ $post->links() }}
    </div>

</x-app-layout>