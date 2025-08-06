@extends('layouts.app')

@section('title', 'Larastash')

@section('body')
<div class="min-h-dvh flex items-center justify-center font-mono bg-gray-50 bg-[radial-gradient(circle_at_1px_1px,rgba(0,0,0,0.05)_1px,transparent_0)] bg-[length:20px_20px]">
    <figure>
        <blockquote>
        <p class="text-gray-500 text-lg max-w-md text-pretty w-full">
            {{ $quote }}
        </p>
        </blockquote>
        <figcaption class="mt-4 text-gray-400">
            — {{ $author }}
        </figcaption>
    </figure>
    <div class="absolute bottom-4 inset-x-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <figure class="size-1.5 rounded-full bg-success-500 ring-2 ring-primary-300 animate-pulse"></figure>
                <p>
                    ready for something awesome
                </p>
            </div>
            <a href="https://github.com/larastash/basic-kit" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-black flex items-center gap-2">
                <x-icon name="lucide-external-link" class="shrink-0 size-4" />
                <span>
                    larastash/basic-kit
                </span>
            </a>
        </div>
    </div>
</div>
@endsection