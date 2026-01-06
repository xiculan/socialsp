<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Progreso en SocialSP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <h3 class="text-2xl font-bold text-indigo-600">¡Hola, {{ Auth::user()->name }}!</h3>
                <p class="text-gray-600">Tu objetivo actual es: 
                    <span class="font-semibold text-gray-800">
                        {{ str_replace('_', ' ', ucfirst(Auth::user()->social_goal ?? 'Bienestar General')) }}
                    </span>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
                    <h4 class="font-bold text-lg mb-2">Registro de Hoy</h4>
                    <p class="text-sm text-gray-500 mb-4">¿Cómo vas con tu meta de hoy?</p>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition">
                        Logré mi objetivo hoy
                    </button>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                    <h4 class="font-bold text-lg mb-2">Consejo para ti</h4>
                    <p class="text-gray-700 italic">
                        "El cambio pequeño de hoy es el gran resultado de mañana. ¡Sigue adelante!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>