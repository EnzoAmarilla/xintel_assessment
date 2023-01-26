## Instruccion de instalación

- git clone https://github.com/EnzoAmarilla/xintel_assessment.git
- composer install
- crear nueva base de datos en su entorno con el siguiente nombre: "xintel_assessment"
- php artisan migrate:fresh --seed --seeder=RoleSeeder
- php artisan serve.