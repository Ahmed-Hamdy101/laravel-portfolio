<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
     <div class="flex justify-end m-2 p-2">
      <a href="{{ route('skills.create')}}" class=" py-2 px-4 bg-indigo-700 over:bg-indigo-700 rounded-lg text-white"><i class="bi bi-plus-square"></i> </a>
     </div>
<div class="  overflow-x-auto relative shadow-md sm:rounded-lg bg-white" bis_skin_checked="1">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
               
               Name
                </th>
                <th scope="col" class="px-6 py-3">
               Image
                </th>
                <th scope="col" class="px-6 py-3">
               Skill
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($skills as $s)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $s->name }}
                </th>
                <td class="px-6 py-4">
                    <img src="{{ asset('storage/'. $s->image)}}" class="h-12 w-12"/>
                </td>  
                 <td class="flex justify-end  px-6 py-4">
                    <a href=" {{route('skills.edit',$s->id) }}" class="  font-medium text-blue-600 dark:text-blue-500 hover:underline ">Edit</a>
                    <a href=" {{route('skills.edit',$s->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2 ">delete</a>
                </td>
            </tr>
            
                
            @empty
                <tr> <td> <h6> No Projects Found </h6> </td> </tr>
            @endforelse
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-app-layout>