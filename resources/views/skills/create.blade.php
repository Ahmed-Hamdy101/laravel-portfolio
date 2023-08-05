<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       Create
        </h2>
    </x-slot>

<div class="py-12 ">

<div class=" py-12 mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md " style="max-width: 28rem">
    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
  
    <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('skills.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf

     <!-- Name -->
     <div>
         <x-label for="name" :value="__('Name')" />
         <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
     </div>

     <!-- Password -->
      <div class="mt-4">
         <x-label for="image" :value="__('Image')" />
         
        <x-input id="image" class="block mt-1 w-full" type="file" name="image"
        required autocomplete="current-password" />
      </div>
        
        <div class="  flex items-center justify-end mt-4">       
            <x-button class="ml-3 ">
                Store
            </x-button>
        </div>
    </form>
</div>
</d iv>
</x-app-layout>