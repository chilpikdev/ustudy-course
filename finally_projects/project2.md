# 📝 Техническое Задание  
## Проект: **Library App**  
## Тип: Веб-приложение (Backend API)  
## Язык: PHP 8.3 
## Фреймворк: Laravel 11 или выше  
## Срок реализации: 1 месяц  
## Стек: Docker, PostgreSQL, Redis, GitHub, GitHub Actions, VPS

---

## 🎯 Цель проекта  
Создать API для библиотеки, позволяющий управлять книгами, бронированием, ролями пользователей (admin, user) и системой авторизации. Проект должен быть полностью контейнеризирован в Docker, с настроенным CI/CD процессом и деплоем на VPS.

---

## 📦 Функциональность

### 🧑‍💻 Пользователи
- Регистрация, логин, logout через API
- Роли пользователей: `admin` (управление книгами и бронированиями) и `user` (только бронирование)
- Хэширование паролей, токены через **Laravel Sanctum**

### ✅ Книги (Books)
- Модель: `Book`  
  Поля:
  - `id`, `title`, `author`, `description`, `cover_image`, `available_copies`
- CRUD-операции:
  - Создание, редактирование, удаление, просмотр
- Загрузка обложек книг (Storage)
- Статус доступности книги (например, доступно/нет в наличии)

### 📝 Бронирование (Bookings)
- Модель: `Booking`  
  Поля:
  - `id`, `user_id`, `book_id`, `status` (active, returned), `booking_date`, `return_date`
- CRUD-операции для бронирований:
  - Создание, редактирование, удаление, просмотр
- Логика доступности книги (нельзя забронировать книгу, если она уже забронирована)

### 🔐 Авторизация и права доступа
- Доступ к книгам и бронированиям — только для пользователей с соответствующими правами
- Использование middleware для проверки прав пользователя

### 🧑‍🏫 API-эндпоинты
- `POST /api/register`
- `POST /api/login`
- `GET /api/books`
- `POST /api/books`
- `PUT /api/books/{id}`
- `DELETE /api/books/{id}`
- `GET /api/bookings`
- `POST /api/bookings`
- `PUT /api/bookings/{id}`
- `DELETE /api/bookings/{id}`

---

## ⚙️ Технические требования

### Docker-окружение
- `app`: PHP 8.2 + Laravel
- `nginx`: для проксирования
- `db`: PostgreSQL 14
- `redis`: для кэширования и очередей
- Документация по запуску: `README.md`

### Очереди и события
- Использование Redis для очередей и обработки длительных операций (например, уведомления)
- Подключение к очередям Laravel с обработкой событий

### Загрузка файлов
- Обложки книг загружаются с помощью Laravel Storage и ссылаются на Amazon S3 (или локальное хранилище в Docker)

---

## 🔁 CI/CD

### GitHub Actions
- Сборка и пуш Docker-образа в Docker Hub
- Деплой на VPS через SSH:
  - `docker pull`
  - `docker-compose -f docker-compose.prod.yml up -d`

Пример пайплайна:
```yaml
name: Deploy

on:
  push:
    branches: [ "main" ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout
        uses: actions/checkout@v3

      - name: Build and push Docker image
        run: |
          docker build -t myrepo/library-app:latest .
          echo "${{ secrets.DOCKER_PASSWORD }}" | docker login -u ${{ secrets.DOCKER_USERNAME }} --password-stdin
          docker push myrepo/library-app:latest

      - name: SSH Deploy
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.VPS_HOST }}
          username: ${{ secrets.VPS_USER }}
          key: ${{ secrets.VPS_KEY }}
          script: |
            cd /var/www/library-app
            docker pull myrepo/library-app:latest
            docker compose -f docker-compose.prod.yml up -d
```

---

## 🌐 Деплой на VPS

- Установка: Docker, docker-compose, Git, Nginx
- Открытие портов 80, 443, 22 через UFW
- Клонирование репозитория на сервер
- Настройка `.env.prod`
- Выполнение миграций и сидов
- Запуск `docker-compose -f docker-compose.prod.yml up -d`
- Настройка Nginx как reverse proxy
- Настройка Supervisor для `queue:work`

---

## 🧪 Тестирование

- Unit тесты: валидация данных, сервисы, логика
- Feature тесты: API CRUD операций
- `php artisan test`

---

## 📄 Документация

- README.md с описанием проекта:
  - Как развернуть проект в Docker
  - Как работает CI/CD процесс
  - Описание API и примеры запросов
- Postman коллекция для тестирования API
- Скриншоты результата работы (по желанию)

---

## 📦 Техническая архитектура

- **Docker Compose**: Все сервисы (PHP, Nginx, PostgreSQL, Redis) контейнеризируются в одном Docker Compose файле.
- **CI/CD Pipeline**: Сборка и деплой происходят через GitHub Actions.
- **PostgreSQL**: Для хранения данных о книгах и бронированиях.
- **Redis**: Для обработки очередей и кэширования.