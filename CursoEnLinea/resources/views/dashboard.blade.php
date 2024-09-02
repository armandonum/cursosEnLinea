<x-app-layout>
    <div class="py-12 "  style="display:flex;  justify-content: center; align-items: center;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 px-4 py-2">Curso</th>
                            <th class="w-1/3 px-4 py-2">Descripción</th>
                            <th class="w-1/6 px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                       
                            <tr>
                                <td class="border px-4 py-2">nombre</td>
                                <td class="border px-4 py-2">descripcion </td>
                                <td class="border px-4 py-2">
                                    <button class="border px-4 py-2  "
                                    style=" background-color: #1d68a7; color: white;">Editar</button>
                              
                                    <button type="submit" class="border px-4 py-2 " style="background-color: red; color:white;">Eliminar</button>

                                    
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
