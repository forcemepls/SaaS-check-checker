# SaaS Check Checker

Сервис для сбора чеков и квитанций с аналитикой расходов.

## Возможности

- 📄 Автоматический сбор чеков и квитанций
- 📊 Статистика расходов по категориям
- 📅 Ежемесячный обзор трат

## Требования

- PHP 8.4+
- Composer
- Docker & Docker Compose
- Node.js & NPM (для фронтенда)

## Технологии

- Laravel 13
- MySQL 8.0
- Redis 7
- Tailwind CSS
- Alpine.js

## Установка

```bash
# Клонируй репозиторий
git clone https://github.com/forcemepls/SaaS-check-checker.git
cd SaaS-check-checker

# Установи зависимости
composer install

# Скопируй конфиг
cp .env.example .env

# Сгенерируй ключ
php artisan key:generate

# Подними контейнеры (MySQL + Redis)
docker-compose up -d

# Запусти миграции
php artisan migrate

# Запусти сервер
php artisan serve
