<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button type="button" class="mr-3 mb-4 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Insert</button>

                    <table class="w-full text-md bg-white  rounded mb-4 text-center">
                        <thead class="text-white">
                                <tr class="border-b bg-indigo-500">

                                    <th class=" p-3 px-5">Nombre</th>
                                    <th class=" p-3 px-5">Descripcion</th>
                                    <th class="p-3 px-5">Accion</th>
                                </tr>


                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                            @foreach ($tasks as $task)
                            <tr class="border-b hover:bg-indigo-100 bg-gray-100">
                                <td class="p-3 px-5 ">
                                    {{$task->title}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$task->description}}
                                </td>
                                <td class="p-3 px-5 flex justify-center">
                                    <button type="button" class="mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Update</button>
                                    <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
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
