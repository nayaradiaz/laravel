<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button type="button" class="mr-3 mb-4 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                    wire:click="openCreateModal">Insert</button>

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
    @if($modal)
        <!-- component -->
        <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
            <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
            <div class="w-full">
                <div class="m-8 my-20 max-w-[400px] mx-auto">
                <div class="mb-8">
                    <h1 class="mb-4 text-3xl font-extrabold">Turn on notifications</h1>
                    <p class="text-gray-600">Get the most out of Twitter by staying up to date with what's happening.</p>
                </div>
                <div class="space-y-4">
                    <button class="p-3 bg-black rounded-full text-white w-full font-semibold">Allow notifications</button>
                    <button class="p-3 bg-white border rounded-full w-full font-semibold">Skip for now</button>
                </div>
                </div>
            </div>
            </div>
        </div>
  @endif
</div>
