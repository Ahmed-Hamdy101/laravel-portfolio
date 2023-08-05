<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('skills.create')}}" class=" py-2 px-4 bg-indigo-700 over:bg-indigo-700 rounded-lg text-white"><i class="bi bi-plus-square"></i> </a>
               </div>
<div class="relative overflow-x-auto  shadow-md sm:rounded-lg bg-white" bis_skin_checked="1"">
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
            @forelse ($projects as $p)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $projects->name }}
                </th>
                <td class="px-6 py-4">
                  {{ $projects->skill->name }}
                </td>
                <td class="px-6 py-4">
                    Image
                </td>
            </tr>
            
                
            @empty
                <tr> <td> No Projects Found </td> </tr>
            @endforelse
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-app-layout>
