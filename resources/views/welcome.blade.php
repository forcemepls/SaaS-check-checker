@extends('layouts.app')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">
                    Добро пожаловать в SaaS Check Checker
                </h1>
                <p class="text-gray-600 mb-8">
                    Сервис для сбора чеков и квитанций с аналитикой расходов
                </p>

                <!-- Пример Alpine.js -->
                <div x-data="{ count: 0 }" class="space-y-4">
                    <button
                        @click="count++"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Кликов: <span x-text="count"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
