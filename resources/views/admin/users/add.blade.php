<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Добавление Пользователя') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
           
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('addUser') }}" method="POST">
                        @csrf
                        
                        <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                            <div class="grid grid-cols-6 gap-6">
                                
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="name" value="Name" />
                                    <x-input name="name" id="name" type="text" placeholder="Name" class="mt-1 block w-full" wire:model="state.name" required />
                                    <x-input-error for="name" class="mt-2" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <x-input name="email" id="email" type="email" placeholder="E-mail" class="mt-1 block w-full" wire:model="state.email" required />
                                    <x-input-error for="email" class="mt-2" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="role" value="" />
                                    <x-input name="role" id="role" type="text" placeholder="Role" class="mt-1 block w-full" wire:model="state.role" required />
                                    <x-input-error for="role" class="mt-2" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="password" value="" />
                                    <x-input name="password" id="password" type="password" placeholder="Пароль..." class="mt-1 block w-full" wire:model="state.password" required />
                                    <x-input-error for="role" class="mt-2" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>