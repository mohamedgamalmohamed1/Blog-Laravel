@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="bg-blue-400 bottom-3 fixed px-2 py-1.5 right-3 rounded-xl text-sm text-white">
        <p>{{ session('success') }}</p>
    </div>
@endif
