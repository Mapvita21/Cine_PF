Mr.Reseñador
una pagina diseñada para comentar y votar todas tus peliculas favoritas. 
Las peliculas se pueden añadir mediante un usuario que se crea cuando ejecutamos los seeders.

USUARIO: admin@hotmail.com
CONTRASEÑA: admin1234
¡Este es el usuario encargado de Actualizar, Agregar, Eliminar peliculas dentro de la aplicacion

Los demas usuarios creados solo pueden comentar y votar.
Solo se permite un comentario ( por usuario ) por pelicula, si se desea cabiar el comentario se debe eliminar y volver a escribir. (Usar boton rojo para eliminarlo).
Todos los usuarios tienen la disponibilidad de escoger FAVORITAS o PROXIMAS A VER. Con los iconos correspondientes. (Toda pelicula que comentes tambien aparecera un icono indicandote que ya la haz comentado.)

Nombre base de datos:
DB_DATABASE=cine

Envio de correos electronicos ( Utilizo mi correo personal para enviar correos por que no me dejo autentificar uno recien creado para la pagina ): 

MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=2525
MAIL_FROM_NAME="CINE"

Comentarios
Por alguna extraña razon se crean las cuentas pero truena en el redireccionamiento...

Por hacer:
tratar que no truene cuando editemos la peli
implemetar servicio de correo... pero esto creo
redireccionamiento al momento de crear un usuario (opcional)
actualizar lo que dice el redme


Instalacion
Composer update
composer install
cp .env.example .env
php artisan key:generate
mysql -uroot
php artisan migrate
php artisan db:seed
php artisan --version
php artisan serve
