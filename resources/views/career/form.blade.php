@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-6 animate__animated animate__fadeInDown">Career Path Questionnaires</h2>
    <form x-data="{ loading: false }" @submit="loading = true" method="POST" action="{{ route('career.analyze') }}" class="space-y-4">
        @csrf
        @foreach ($questions as $index => $question)
            <div class="animate__animated animate__fadeInUp">
                <label class="block font-medium mb-2">{{ $question }}</label>
                <input type="text" name="answers[]" class="w-full p-2 rounded border mb-4 shadow-md" required>
            </div>
        @endforeach
        <div class="mb-6">
            <label for="language" class="block text-lg font-semibold text-gray-700 mb-2">
                Preferred Language (မည်သည့်ဘာသာနှင့် ရလဒ်ယူလိုပါသလဲ)
            </label>
            <div class="flex items-center space-x-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="language" value="en" class="form-radio text-indigo-600" checked>
                    <span class="ml-2">English</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="language" value="my" class="form-radio text-indigo-600">
                    <span class="ml-2">Burmese (မြန်မာ)</span>
                </label>
            </div>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded animate__animated animate__fadeInUp">Submit</button>

        <!-- Loading Spinner -->
        <div x-show="loading" class="flex items-center justify-center mt-4 text-gray-600">
            <svg class="animate-spin h-5 w-5 mr-2 text-blue-600" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
            </svg>
            <span class="animate__animated animate__fadeIn">Generating suggestions...</span>
        </div>
    </form>
</div>
<footer class="mt-16 bg-gradient-to-br from-gray-800 via-gray-900 to-gray-800 text-gray-300 text-center px-6 py-10 rounded-t-3xl shadow-inner">
    <div class="text-base tracking-wide">
        &copy; 2025 <span class="font-semibold text-blue-400">Lan Pya</span>. All rights reserved.
    </div>

    <div class="mt-4 text-sm leading-relaxed">
        <p class="italic text-gray-400">"The best way to predict your future is to create it."</p>
        <p class="font-semibold text-blue-300 mt-1">— Abraham Lincoln</p>
    </div>

    <div class="mt-6 flex justify-center gap-4 text-gray-400 text-sm">
        <a href="{{ route('privacy') }}" class="hover:text-blue-400 transition">Privacy Policy</a>
        <a href="{{ route('blog.index') }}" class="hover:text-blue-400 transition">Blogs</a>
        <a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Contact</a>
    </div>
</footer>


@endsection

@push('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
