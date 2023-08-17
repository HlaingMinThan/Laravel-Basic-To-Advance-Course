<x-layout>
    <x-hero />
    <x-blogs-section
        :blogs="$blogs"
        :categories="$categories"
        :currentCategory="$currentCategory ?? null"
    />
    <x-subscribe />
</x-layout>