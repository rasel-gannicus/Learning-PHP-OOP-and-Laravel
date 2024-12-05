
{{-- <script>
    console.log(@json($listings));
</script> --}}

<x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @foreach ($listings as $listing)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/acme.png" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{ $listing['company'] }}</div>

                        {{-- Listing Card here --}}
                        <x-listingTags :tagCsv="$listing['tags']" />

                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> Boston,
                            MA
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</x-layout>
