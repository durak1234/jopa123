<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
       Portfolio
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Создание портфолио и портфолио
    </p>
    <div>
        <form action="{{ route ('portfolioCreate.post')}}" method="POST">
            @csrf
            <input type="text" name = "name" placeholder="Введите название"/>
            <input type="number" name = "price" min="0" max="10000"/>
            <input type="text" name = "val" placeholder="Введите валюту"/>
            <button type="submit"class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150">
                Создать портфолио</button>
        </form>
    </div>
    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        @foreach($portfolios as $portfolio)
            {{ $portfolio->name }} <a href="{{ route('portfolioDelete', $portfolio->id) }}" style="color:red">X</a></br>
        @endforeach
    </p>
</div>
