<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        Bienvenido {{ $user}}

                    </div>
                    <div>
                        Tienes {{$tasks->count()}} tarea/s creadas

                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($tasks as $task)
                        <p>
                            <div class="mt-4 text-lg text-purple-800">
                                {{$task->title}}
                            </div>
                            <div class="mt-4 text-lg text-purple-400">
                                {{$task->description}}
                            </div>

                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>