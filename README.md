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
                "description": "Hacer las compras",
                "completed": false,
                "created_at": "2024-10-20T12:34:56.000000Z",
                "updated_at": "2024-10-20T12:34:56.000000Z"
            },
            {
                "id": 2,
                "description": "Reunión de equipo",
                "completed": true,
                "created_at": "2024-10-20T12:35:56.000000Z",
                "updated_at": "2024-10-20T12:35:56.000000Z"
            }
        ],
        "total": 50,
        "last_page": 5
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
