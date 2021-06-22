## Datos

Nombre y apellido: Pedro Danderfer.
Carrera: Diseño y programación web 5to cuatrimestre
Fecha: 22/6/2021

## Instalación

1) Crear una base de datos nueva y vacia. 
2) Agregar en el archivo .env los datos necesarios para la coneccion a dicha tabla (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
3) Correr los comandos php artisan migrate y php arthisan migrate:fresh --seed para subir las tablas con sus datos a la DB.
4) Correr el comando php artisan serve y entrar a la aplicacion desde 127.0.0.1:8000