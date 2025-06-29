<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Add a Mentor</h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-6 bg-white shadow rounded">
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('mentors.store') }}" enctype="multipart/form-data">
            @csrf

            <x-label for="name" :value="'Name'" />
            <x-input id="name" name="name" class="w-full mb-4" required />

            <x-label for="profile_photo" :value="'Profile Photo'" />
            <input type="file" id="profile_photo" name="profile_photo" accept="image/*" class="w-full mb-4" />

            <x-label for="profession" :value="'Profession'" />
            <x-input id="profession" name="profession" class="w-full mb-4" required />

            <x-label for="industry" :value="'Industry'" />
            <x-input id="industry" name="industry" class="w-full mb-4" placeholder="e.g., IT, Finance" />

            <x-label for="expertise" :value="'Expertise (comma separated)'" />
            <textarea id="expertise" name="expertise" class="w-full mb-4" placeholder="e.g., PHP, Laravel, AI"></textarea>

            <x-label for="bio" :value="'Bio'" />
            <textarea id="bio" name="bio" class="w-full mb-4" required></textarea>

            <x-label for="language" :value="'Language'" />
            <select id="language" name="language" class="w-full mb-4" required>
                <option value="en">English</option>
                <option value="my">Myanmar</option>
            </select>

            <x-label for="location" :value="'Location'" />
            <x-input id="location" name="location" class="w-full mb-4" placeholder="e.g., Yangon, Myanmar" />

            <x-label for="experience_level" :value="'Experience Level'" />
            <select id="experience_level" name="experience_level" class="w-full mb-4">
                <option value="">-- Select --</option>
                <option value="Junior">Junior</option>
                <option value="Mid">Mid</option>
                <option value="Senior">Senior</option>
                <option value="Expert">Expert</option>
            </select>

            <x-label for="availability" :value="'Availability'" />
            <x-input id="availability" name="availability" class="w-full mb-4" placeholder="e.g., Weekdays, Evenings" />

            <x-label for="social_links" :value="'Social Links (URL)'" />
            <textarea id="social_links" name="social_links" class="w-full mb-4" required placeholder="e.g., https://facebook.com/mentorprofile"></textarea>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Upload
            </button>
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
</x-app-layout>

