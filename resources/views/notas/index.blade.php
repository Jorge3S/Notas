<x-app-layout>

    <div class="container">
        <div class="row">
        <div class="bg-cover bg-center h-full w-full">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Mis notas</h1>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/notas/create') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" title="Add New nota">
                            <i class="fa fa-plus" aria-hidden="true"></i> Crear Nueva +
                        </a>
                        <br />
                        <br />
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">Nombre</th>
                                        <th scope="col" class="px-6 py-3">Nota</th>
                                        <th scope="col" class="px-6 py-3">Palabras importantes</th>
                                        <th scope="col" class="px-20 py-3">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $item)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4">{{ $item->titulo }}</td>
                                            <td class="px-6 py-4">{{ $item->nota }}</td>
                                            <td class="px-6 py-4">{{ $item->p_clave }}</td>

                                            <td>
                                                <a href="{{ url('/notas/' . $item->id) }}" title="View nota"><button
                                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5"><i
                                                            aria-hidden="true"></i> Ver</button></a>
                                                <a href="{{ url('/notas/' . $item->id . '/edit') }}"
                                                    title="Edit nota"><button class="py-2.5 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>

                                                <form method="POST" action="{{ url('/notas' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5"
                                                        title="Delete nota"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
