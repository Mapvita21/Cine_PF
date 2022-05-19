<?php

use Illuminate\Database\Seeder;
use App\Pelicula;

class PeliculaSeeder extends Seeder
{
    /**
     *
     * @return void
     */
    public function run()
    {

        Pelicula::create(['imagen_url' => 'https://as01.epimg.net/meristation/imagenes/2021/10/11/noticias/1633936472_745833_1633936728_sumario_normal.jpg',
        'nombre_pelicula' => 'Demon Slayer: El tren infinito','anio' => 2021, 'genero' => 'Anime Accion', 'duracion' => '1h 57m',
        'sinopsis' => 'Tanjiro Kamado y sus amigos del Demon Slayer Corps acompañan a Ky?jur? Rengoku, el Flame Hashira, para investigar una misteriosa serie de desapariciones que ocurren dentro de un tren aparentemente infinitamente largo. Poco saben que Enmu, la última de las Lunas Inferiores de los Doce Kizuki, también está a bordo y les ha preparado una trampa.',
        'puntaje' => 4.5, 'cantidad_votos' => 1026, 'url_trailer' => 'https://www.youtube.com/embed/qSAIajR419A']);

        Pelicula::create(['imagen_url' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQre31EeKplZHc5Mtfur-CgF_2bOq9fiHiFA0nY-mLG5BUellCi',
        'nombre_pelicula' => 'Sonic 2: la película','anio' => 2022, 'genero' => 'Comedia/Accion', 'duracion' => '2h 02m',
        'sinopsis' => 'Después de establecerse en Green Hills, Sonic quiere demostrar que tiene madera de héroe. La prueba de fuego llega con el retorno del malvado Robotnik, y su nuevo compinche, Knuckles, en busca de una esmeralda que destruye civilizaciones. Sonic forma equipo con su propio compañero de fatigas, Tails, y juntos se lanzan a una aventura que les llevará por todo el mundo en busca de la preciada piedra para evitar que caiga en manos equivocadas.',
        'puntaje' => 4.2, 'cantidad_votos' => 1121, 'url_trailer' => 'https://www.youtube.com/embed/YlkN8K2oOMo']);

        Pelicula::create(['imagen_url' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRrmuWJLypZIsZC7yKIMPxxF45UYkJLv5Kg2i5AFcsWuGJnlMPR',
        'nombre_pelicula' => 'The Batman','anio' => 2022, 'genero' => 'Accion', 'duracion' => '2h 56m',
        'sinopsis' => 'En su segundo año luchando contra el crimen, Batman explora la corrupción existente en la ciudad de Gotham y el vínculo de esta con su propia familia. Además, entrará en conflicto con un asesino en serie conocido como "el Acertijo".',
        'puntaje' => 4.8, 'cantidad_votos' => 1476, 'url_trailer' => 'https://www.youtube.com/embed/fWQrd6cwJ0A']);

        Pelicula::create(['imagen_url' => 'https://i0.wp.com/codigoespagueti.com/wp-content/uploads/2021/10/Nuevo-poster-jujutsu-kaisen-0.jpg?resize=1280%2C1811&quality=80&ssl=1',
        'nombre_pelicula' => 'Jujutsu Kaisen Cero','anio' => 2022, 'genero' => 'Anime Accion', 'duracion' => '1h 45m',
        'sinopsis' => 'Yuka Okkotsu obtiene el control de una maldición extremadamente poderosa y acaba inscrito en el Colegio Técnico de Magia Metropolitana de Tokio, donde otros hechiceros deciden ayudarlo a controlar y vigilar su poder.',
        'puntaje' => 4.6, 'cantidad_votos' => 1034, 'url_trailer' => 'https://www.youtube.com/embed/qWwXc1hdWxIA']);

        Pelicula::create(['imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmZRkDVSxfhilfOlysNJRg12U8vSWSrPXxFbaF7OW-jDclbUZN',
        'nombre_pelicula' => 'The Seven Deadly Sins: prisioneros del cielo','anio' => 2018, 'genero' => 'Anime Accion', 'duracion' => '1h 39m',
        'sinopsis' => 'Los Siete Pecados Mortales viajan al Templo del Cielo en busca de un ingrediente y se unen a la lucha contra un poderoso grupo de demonios.',
        'puntaje' => 3.9, 'cantidad_votos' => 1079, 'url_trailer' => 'https://www.youtube.com/embed/mKSyOEOnjEI']);

        Pelicula::create(['imagen_url' => 'https://i.pinimg.com/736x/c5/5b/f4/c55bf4c4079eff59f5a880295151bb79.jpg',
        'nombre_pelicula' => 'Spider-Man: Sin camino a casa','anio' => 2022, 'genero' => 'Accion', 'duracion' => '2h 28m',
        'sinopsis' => 'Los Siete Pecados Mortales viajan al Templo del Cielo en busca de un ingrediente y se unen a la lucha contra un poderoso grupo de demonios.',
        'puntaje' => 4.9, 'cantidad_votos' => 1879, 'url_trailer' => 'https://www.youtube.com/embed/ldMn-1iQzKE']);

        Pelicula::create(['imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUIsLXCIR1KNEy7RyPqdx8A2Yex4afcyOeXgMCetf_JhIrAhzl',
        'nombre_pelicula' => 'Spider-Man: un nuevo universo','anio' => 2018, 'genero' => 'Accion', 'duracion' => '1h 56m',
        'sinopsis' => 'La historia se centra en un chico llamado Miles Morales, un adolescente que admira a Spider-Man, quien lucha por adaptarse a su nuevo internado de élite y estar a la altura de las expectativas de sus padres, Rio Morales y Jefferson Davis, quienes consideran a Spider-Man como una amenaza.',
        'puntaje' => 4.4, 'cantidad_votos' => 2121, 'url_trailer' => 'www.youtube.com/embed/g4Hbz2jLxvQ']);




    }
}
