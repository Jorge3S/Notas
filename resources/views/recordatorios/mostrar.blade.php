<x-app-layout>
<div class="card">
        <div class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Ver recordatorio</div>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Título : {{ $recordatorios->titulo }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Contenido : {{ $recordatorios->contenido }}</p>
                <p class="font-normal text-gray-700 dark:text-gray-400">Importancia : {{ $recordatorios->importancia }}</p>
            </div>
        </div>
    </div>







</x-app-layout>

