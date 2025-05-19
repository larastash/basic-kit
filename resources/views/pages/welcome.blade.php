@extends('layouts.app')

@section('title', 'Hello world!')

@section('body')
<div class="min-h-dvh flex items-center justify-center font-mono">
    <h1 class="text-gray-100 font-mono font-black text-9xl">
        basic
    </h1>
    <div class="absolute bottom-4 inset-x-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <figure class="size-1.5 rounded-full bg-success-500 ring-2 ring-primary-300 animate-pulse"></figure>
                <p>
                    ready for something awesome
                </p>
            </div>
            <p class="text-gray-500">
                larastash
            </p>
        </div>
    </div>
</div>
@endsection