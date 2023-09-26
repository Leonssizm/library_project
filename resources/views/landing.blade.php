<x-layout>
<div class="bg-gradient-to-r from-blue-500 to-purple-500 h-screen flex flex-col justify-center items-center">
    <h1 class="text-5xl font-bold text-white mb-6">Welcome to the Library</h1>
    <p class="text-lg text-white mb-8">Discover a world of Books & knowledge at your fingertips.</p>
    <a href="{{ route('home.list') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105">Get Started</a>
</div>
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p class="text-sm">This project is made for Sweeft Digital Acceleration Program by Levan Kereselidze</p>
    </div>
</footer>
</x-layout>