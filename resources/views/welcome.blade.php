<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">
                SaaS Check Checker
            </h1>
            <p class="text-gray-600 mb-8">
                Сервис для сбора чеков и квитанций с аналитикой расходов
            </p>

            <div class="space-x-4">
                <a href="{{ route('login') }}"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Войти
                </a>
                <a href="{{ route('register') }}"
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Регистрация
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
