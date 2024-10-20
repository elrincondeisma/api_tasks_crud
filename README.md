# API REST de Tareas - Laravel

Este proyecto es una API REST sencilla construida con [Laravel](https://laravel.com/) que permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre tareas (Tasks).

## Requisitos

Antes de comenzar, asegúrate de tener las siguientes herramientas instaladas:

- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Laravel 10+](https://laravel.com/docs/10.x)
- [MySQL](https://www.mysql.com/) u otro sistema de base de datos compatible

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. Clona el repositorio:

   ```bash
   git clone https://github.com/usuario/api-task.git
   cd api-task
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   php artisan db:seed
   ```
   
2. Endpoints
La API ofrece los siguientes endpoints para gestionar las tareas:

	- GET /api/tasks - Listar todas las tareas (soporta búsqueda por descripción y paginación).
	- POST /api/tasks - Crear una nueva tarea.
	- GET /api/tasks/{id} - Obtener una tarea por su ID.
	- PUT /api/tasks/{id} - Actualizar una tarea existente.
	- DELETE /api/tasks/{id} - Eliminar una tarea.

3. Parámetros de búsqueda

- GET /api/tasks?search=palabra

4. Paginación

- GET /api/tasks?page=2

5. Ejemplo de respuesta Json

```json
    {
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "description": "Ducimus aspernatur eos in sunt maiores.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 2,
            "description": "Dicta in hic nisi fugit quo est est.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 3,
            "description": "Beatae blanditiis ad eum eveniet debitis accusamus maiores.",
            "completed": 1,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 4,
            "description": "Enim incidunt quam quis illum sed provident aperiam.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 5,
            "description": "Magni dicta non ipsum sed.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 6,
            "description": "Reiciendis reiciendis eaque est ut.",
            "completed": 1,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 7,
            "description": "Nulla neque sunt voluptatum amet dolores rerum.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 8,
            "description": "Incidunt illo voluptate aut cum.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 9,
            "description": "Adipisci corporis nostrum ipsam aut.",
            "completed": 1,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        },
        {
            "id": 10,
            "description": "Quia est est est.",
            "completed": 0,
            "created_at": "2024-10-20T09:57:53.000000Z",
            "updated_at": "2024-10-20T09:57:53.000000Z"
        }
    ],
    "first_page_url": "http://127.0.0.1:8000/api/tasks?page=1",
    "from": 1,
    "last_page": 10,
    "last_page_url": "http://127.0.0.1:8000/api/tasks?page=10",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=2",
            "label": "2",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=3",
            "label": "3",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=4",
            "label": "4",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=5",
            "label": "5",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=6",
            "label": "6",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=7",
            "label": "7",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=8",
            "label": "8",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=9",
            "label": "9",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=10",
            "label": "10",
            "active": false
        },
        {
            "url": "http://127.0.0.1:8000/api/tasks?page=2",
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": "http://127.0.0.1:8000/api/tasks?page=2",
    "path": "http://127.0.0.1:8000/api/tasks",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 100
} 
```
6. Arranque del servidor

Para arrancar el servidor de desarrollo, ejecuta el siguiente comando en la terminal:

```bash
composer dev
```

## Contribuir

Si deseas contribuir al proyecto, puedes hacerlo de varias maneras:

- Reportando errores o sugiriendo mejoras en la documentación.
