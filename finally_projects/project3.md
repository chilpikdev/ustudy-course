# 📝 Техническое Задание  
## Проект: **Mini CRM**  
## Тип: Веб-приложение (Backend API)  
## Язык: PHP 8.3  
## Фреймворк: Laravel 11 или выше  
## Срок реализации: 1 месяц  
## Стек: Docker, PostgreSQL, Redis, GitHub, GitHub Actions, VPS

---

## 🎯 Цель проекта  
Разработать API для мини CRM-системы, которая позволит управлять контактами клиентов, задачами, коммуникациями и календарем. Проект должен быть полностью контейнеризирован в Docker, с настроенным CI/CD процессом и деплоем на VPS.

---

## 📦 Функциональность

### 🧑‍💻 Пользователи
- Регистрация, логин, logout через API
- Роли пользователей: `admin` (управление пользователями, задачами, контактами), `user` (ограниченный доступ)
- Хэширование паролей, токены через **Laravel Sanctum**
- Профиль пользователя (имя, email, роль)

### ✅ Контакты (Contacts)
- Модель: `Contact`  
  Поля:
  - `id`, `name`, `email`, `phone`, `company`, `address`, `notes`
- CRUD-операции:
  - Создание, редактирование, удаление, просмотр
- Фильтрация по компании и имени

### ✅ Задачи (Tasks)
- Модель: `Task`  
  Поля:
  - `id`, `user_id`, `contact_id`, `title`, `description`, `status` (pending, in_progress, completed), `due_date`
- CRUD-операции:
  - Создание, редактирование, удаление, просмотр
- Статус и фильтрация по дате

### ✅ Коммуникации (Communications)
- Модель: `Communication`  
  Поля:
  - `id`, `task_id`, `contact_id`, `type` (email, call, message), `date`, `notes`
- CRUD-операции:
  - Создание, редактирование, удаление, просмотр
- Привязка к задаче и контакту

### ✅ Календарь (Calendar)
- Модель: `Event`  
  Поля:
  - `id`, `user_id`, `title`, `start_time`, `end_time`, `description`
- CRUD-операции:
  - Создание, редактирование, удаление, просмотр
- Фильтрация по пользователю и времени

### 🔐 Авторизация и права доступа
- Использование Laravel Sanctum для авторизации
- Роли пользователей: `admin` (управление контактами, задачами и пользователями) и `user` (ограниченный доступ)
- Доступ к данным — только для соответствующих ролей и пользователей

### 🧑‍🏫 API-эндпоинты
- `POST /api/register`
- `POST /api/login`
- `GET /api/contacts`
- `POST /api/contacts`
- `PUT /api/contacts/{id}`
- `DELETE /api/contacts/{id}`
- `GET /api/tasks`
- `POST /api/tasks`
- `PUT /api/tasks/{id}`
- `DELETE /api/tasks/{id}`
- `GET /api/communications`
- `POST /api/communications`
- `PUT /api/communications/{id}`
- `DELETE /api/communications/{id}`
- `GET /api/events`
- `POST /api/events`
- `PUT /api/events/{id}`
- `DELETE /api/events/{id}`

---

## ⚙️ Технические требования

### Docker-окружение
- `app`: PHP 8.2 + Laravel
- `nginx`: для проксирования
- `db`: PostgreSQL 14
- `redis`: для очередей и кэширования
- Документация по запуску: `README.md`

### Очереди и события
- Использование Redis для обработки очередей, например, для отправки уведомлений
- Подключение к очередям Laravel с обработкой событий (например, уведомления об изменении задачи или события в календаре)

### Загрузка файлов
- Возможность прикреплять файлы (например, документы) к контактам или задачам через **Laravel Storage**

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
          docker build -t myrepo/mini-crm:latest .
          echo "${{ secrets.DOCKER_PASSWORD }}" | docker login -u ${{ secrets.DOCKER_USERNAME }} --password-stdin
          docker push myrepo/mini-crm:latest

      - name: SSH Deploy
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.VPS_HOST }}
          username: ${{ secrets.VPS_USER }}
          key: ${{ secrets.VPS_KEY }}
          script: |
            cd /var/www/mini-crm
            docker pull myrepo/mini-crm:latest
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
- **PostgreSQL**: Для хранения данных о контактах, задачах, коммуникациях и событиях.
- **Redis**: Для обработки очередей и кэширования данных.