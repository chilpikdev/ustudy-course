## Laravel Проекты для Учеников: Подробный План с Docker, CI/CD и Деплоем на VPS

### Общие требования для всех проектов:

- Полная разработка backend части на Laravel 11 или выше
- Контейнеризация через Docker
- Использование PostgreSQL и Redis
- API с Sanctum
- CI/CD через GitHub Actions
- Деплой на VPS в Docker (используя docker-compose.prod.yml)
- Хорошо оформленный GitHub репозиторий с README, API документацией и CI статусом

---

## Проект 1: Task Manager (Ученик 1)

### Неделя 1: Подготовка и CRUD

- Инициализация Laravel проекта
- Настройка docker-compose.yml с сервисами:
  - app (PHP-FPM)
  - web (Nginx)
  - db (PostgreSQL)
  - redis
- Настройка Nginx (default.conf)
- Базовые миграции: tasks
- CRUD задач, авторизация пользователей
- Публикация репозитория на GitHub

### Неделя 2: API, фильтрация, пагинация

- Sanctum: API авторизация
- Роуты `/api/tasks`
- Фильтрация задач по статусу
- Пагинация и сортировка
- Формирование Postman коллекции

### Неделя 3: Docker продакшн и CI/CD

- Создание `.env.prod`, `docker-compose.prod.yml`
- Сборка Docker образа и пуш в Docker Hub
- GitHub Actions Workflow:
  - Сборка образа
  - Push в Docker Hub
  - SSH-деплой на VPS (pull + restart docker-compose)
- Настройка Nginx на VPS
- Supervisor: запуск queue worker

### Неделя 4: Тесты, документация и финальный деплой

- Unit и Feature тесты
- README:
  - Инструкция запуска в Docker
  - API описание
  - CI/CD пояснение
- Финальный деплой и проверка

---

## Проект 2: Library App (Ученик 2)

### Неделя 1: Старт и структура

- Laravel и Docker Compose (аналогично первому)
- Таблицы: books, users, bookings
- CRUD книг (только для admin)
- Загрузка обложек (Storage)

### Неделя 2: Бронирование и роли

- Роли пользователей (user/admin)
- Бронирование книг, логика недоступных книг
- Статусы: active, returned
- Защита роутов по ролям

### Неделя 3: API + CI/CD

- Sanctum: API `/api/books`, `/api/bookings`
- Policies для бронирований
- CI:
  - Docker сборка и push
  - GitHub Actions деплой на VPS
- Продакшн Docker Compose + `.env.prod`

### Неделя 4: Документация и деплой

- Postman коллекция
- README с:
  - Установкой через Docker
  - API-эндпоинты
  - CI/CD описание
- Деплой на VPS через GitHub Actions

---

## Проект 3: Mini CRM (Ученик 3)

### Неделя 1: Архитектура и контейнеризация

- Модели: clients, applications, comments, users
- Docker Compose
- CRUD клиентов и заявок

### Неделя 2: Авторизация и API

- Роли: менеджер, админ
- Комментарии к заявкам
- Sanctum и API `/api/clients`, `/api/applications`
- Policies для доступа к заявкам

### Неделя 3: CI/CD + Docker Production

- docker-compose.prod.yml
- `.env.prod`
- GitHub Actions:
  - Docker build + push
  - SSH deploy (docker-compose pull, up -d)
- Настройка VPS (Nginx, Firewall, Docker install)

### Неделя 4: Завершение

- Postman документация
- Полный README
- CI/CD статусы
- Финальный деплой через CI/CD

---

## VPS Подготовка (для всех проектов)

- Установка Docker, docker-compose
- Настройка UFW (разрешить 80/443/22)
- Клонирование проекта
- Настройка `.env.prod`
- Запуск `docker-compose -f docker-compose.prod.yml up -d`
- Настройка Nginx (reverse proxy)
- Supervisor для `queue:work`