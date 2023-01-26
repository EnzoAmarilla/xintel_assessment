## Instrucciones de instalación

- git clone https://github.com/EnzoAmarilla/xintel_assessment.git
- composer install
- duplicar archivo ".env.example" y llamarlo ".env"
- php artisan key:generate
- crear nueva base de datos en su entorno con el siguiente nombre: "xintel_assessment"
- php artisan migrate:fresh --seed --seeder=RoleSeeder
- php artisan serve.

(Todo listo)