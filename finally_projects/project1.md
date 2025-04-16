# 📝 Техническое Задание  
## Проект: **Task Manager**  
## Тип: Веб-приложение (Backend API)  
## Язык: PHP 8.3
## Фреймворк: Laravel 11 или выше
## Срок реализации: 1 месяц  
## Стек: Docker, PostgreSQL, Redis, GitHub, GitHub Actions, VPS

---

## 🎯 Цель проекта  
Создать API-сервис для управления задачами с авторизацией, CRUD-функционалом, фильтрацией, очередями и системой прав. Проект должен быть полностью контейнеризирован в Docker, включать CI/CD процесс и деплой на VPS.

---

## 📦 Функциональность

### 🧑‍💻 Пользователи
- Регистрация, логин, logout через API
- Хэширование паролей, токены через **Laravel Sanctum**
- Профиль пользователя (имя, email)

### ✅ Задачи (Tasks)
- Модель: `Task`  
  Поля:
  - `id`, `title`, `description`, `status` (new, in_progress, done), `deadline`, `user_id`
- CRUD-операции:
  - Создание, редактирование, удаление, просмотр
- Статусы и фильтрация по статусу/дате
- Пагинация

### 🧾 API-эндпоинты
- `POST /api/register`
- `POST /api/login`
- `GET /api/tasks`
- `POST /api/tasks`
- `PUT /api/tasks/{id}`
- `DELETE /api/tasks/{id}`

### 🔐 Авторизация и права доступа
- Доступ к задачам — только свои (по user_id)
- Middleware для проверки доступа

---

## ⚙️ Технические требования

### Docker-окружение
- `app`: PHP 8.2 + Laravel
- `nginx`: для проксирования
- `db`: PostgreSQL 14
- `redis`: для очередей и кэширования
- Документация по запуску: `README.md`

### Очереди и события
- Использовать Redis + `php artisan queue:work`
- Уведомление об изменении статуса задачи (событие + listener)

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
    branches: [ \"main\" ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout
        uses: actions/checkout@v3

      - name: Build and push Docker image
        run: |
          docker build -t myrepo/task-manager:latest .
          echo \"${{ secrets.DOCKER_PASSWORD }}\" | docker login -u ${{ secrets.DOCKER_USERNAME }} --password-stdin
          docker push myrepo/task-manager:latest

      - name: SSH Deploy
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.VPS_HOST }}
          username: ${{ secrets.VPS_USER }}
          key: ${{ secrets.VPS_KEY }}
          script: |
            cd /var/www/task-manager
            docker pull myrepo/task-manager:latest
            docker compose -f docker-compose.prod.yml up -d
```

---

## 🌐 Деплой на VPS

- Установить: Docker, docker-compose, Git, Nginx
- Открыть порты 80, 443, 22 (UFW)
- Клонировать репозиторий
- Заполнить `.env.prod`
- Выполнить миграции, seed'ы
- Запустить `docker-compose -f docker-compose.prod.yml up -d`
- Настроить Supervisor для очередей

---

## 🧪 Тестирование

- Feature тесты: CRUD задач
- Unit тесты: Валидация, сервисы
- `php artisan test`

---

## 📄 Документация

- README.md с описанием проекта:
  - Как развернуть в Docker
  - Как работает CI/CD
  - Примеры запросов
- Postman коллекция для всех API методов
- Скриншоты результата (при желании)