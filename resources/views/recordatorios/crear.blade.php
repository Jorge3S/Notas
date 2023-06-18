<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Crear recordatorio</h1>
        </div>
        <div class="card-body">
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <form action="{{ url('recordatorios') }}" method="post">
                  {!! csrf_field() !!}
                  <label class="block mb-1 text-sm font-small text-white">titulo</label>
                  <input type="text" name="titulo" id="titulo" class="shadow-sm bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-white focus:border-white block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                  <label class="block mb-1 text-sm font-small text-white">Contenido</label>
                  <input type="text" name="contenido" id="contenido" class="shadow-sm bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-white focus:border-white block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                  <label class="block mb-1 text-sm font-small text-white">importancia</label>
                  <input type="text" name="importancia" id="importancia" class="shadow-sm bg-gray-50 border border-white text-gray-900 text-sm rounded-lg focus:ring-white focus:border-white block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                  <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="{{ Auth::user()->id }}"></br>
                  <input type="submit" value="Save" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-900 dark:focus:ring-gray-700 dark:border-gray-700"></br>
                </form>
            </div>
        </div>
      </div>
</x-app-layouts>
