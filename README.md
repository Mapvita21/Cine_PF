♛Mr.Reseñador♛

una pagina diseñada para comentar y votar todas tus peliculas favoritas. 
Las peliculas se pueden añadir mediante un usuario que se crea cuando ejecutamos los seeders.

☂USUARIO:    admin@hotmail.com
☃CONTRASEÑA: admin1234
¡Este es el usuario encargado de Actualizar, Agregar, Eliminar peliculas dentro de la aplicacion

Los demas usuarios creados solo pueden comentar y votar.
Solo se permite un comentario ( por usuario ) por pelicula, si se desea cabiar el comentario se debe eliminar y volver a escribir. (Usar boton rojo para eliminarlo).
Todos los usuarios tienen la disponibilidad de escoger FAVORITAS o PROXIMAS A VER. Con los iconos correspondientes. (Toda pelicula que comentes tambien aparecera un icono indicandote que ya la haz comentado.)

Envio de correos electronicos ( Utilizo mi correo personal para enviar correos por que no me dejo autentificar uno recien creado para la pagina ): 

Nombre base de datos:
➹DB_DATABASE=cine

➸MAIL_MAILER=smtp
➸MAIL_HOST=smtp.sendgrid.net
➸MAIL_PORT=2525
➸MAIL_FROM_NAME="CINE"


☝Comentarios
1ro configurar archivo.env para q funcione el mail con nuestros datos en mailtrap
2do en el archivo mail.php se hace lo mismo


➪Instalacion
♠ Necesitamos tener la version de PHP 7.2.5 anexo link de donde lo descargamos esta pagina nos ayudo 
♦ https://wetransfer.com/downloads/8c95de1cf91dd163c7830399d9730b1620220512023931/87cf58

➢Composer update

➢composer install

➢cp .env.example .env

➢php artisan key:generate

➢php artisan migrate

➢php artisan db:seed

➢php artisan --version

➢php artisan serve
