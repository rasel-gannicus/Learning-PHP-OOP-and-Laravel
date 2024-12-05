@props(['tagCsv'])

@php
    $tags = explode(',', $tagCsv) ; 
@endphp

{{-- <script>
    console.log(@json($tags));
</script> --}}

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="#">{{$tag}}</a>
        </li>
    @endforeach

</ul>
