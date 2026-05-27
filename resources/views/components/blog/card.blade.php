

{{-- <div class="w-full border shadow-md rounded-md p-5 bg-white"> --}}
{{-- <div {{ $attributes->merge(["class" => "w-full border shadow-md rounded-md p-5"])}}> --}}
<div {{ $attributes->class(["w-full border shadow-md rounded-md p-5", 'bg-yellow' => true])}}>
    Content

    {{ $slot }}

    {{ $attributes }}
</div>