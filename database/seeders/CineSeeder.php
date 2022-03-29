<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CineSeeder;
use App\Models\Cine;

class CineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre = ['Cine comercial', 'Cine independiente', 'Cine de animación', 'Cine documental', 'Cine experimental', 'Cine de autor', 'Cine ambiental'];
        $descripcion = ['Son las películas creadas por la industria cinematográfica orientadas al gran público y con la generación de beneficios económicos como objetivo principal. A esta categoría pertenecen la mayoría de las películas que se proyectan en las salas de cine, y algunas de ellas son promocionadas mediante grandes campañas de publicidad.', 'Una película independiente es una película de bajo presupuesto y hecha por pequeñas productoras. Una película independiente no es realizada por los grandes estudios.', 'El cine de animación es aquel en el que se usan mayoritariamente técnicas de animación. El cine de imagen real registra imágenes reales en movimiento continuo, descomponiéndose en un número discreto de imágenes por segundo. En el cine de animación no existe movimiento real que registrar, sino que se producen las imágenes individualmente y una por una (mediante dibujos, modelos, objetos y otras múltiples técnicas, como el Stop Motion), de forma tal que al proyectarse consecutivamente se produzca la ilusión de movimiento. Es decir, que mientras en el cine de imagen real se analiza y descompone un movimiento real, en el cine de animación se construye un movimiento inexistente en la realidad.', 'El cine documental es el que basa su trabajo en imágenes tomadas de la realidad. Generalmente se confunde documental con reportaje, siendo el primero eminentemente un género cinematográfico, muy ligado a los orígenes del cine, y el segundo un género televisivo.', 'El cine experimental es aquel que utiliza un medio de expresión más artístico, olvidándose del lenguaje audiovisual clásico, rompiendo las barreras del cine narrativo estrictamente estructurado y utilizando los recursos para expresar y sugerir emociones, experiencias, sentimientos, utilizando efectos plásticos o rítmicos, ligados al tratamiento de la imagen o el sonido.', 'El concepto de cine de autor fue acuñado por los críticos de los Cahiers du Cinéma para referirse a un cierto cine en el que el director tiene un papel preponderante en la toma de todas las decisiones, y en donde toda la puesta en escena obedece a sus intenciones. Suele llamarse de esta manera a las películas realizadas basándose en un guion propio y al margen de las presiones y limitaciones que implica el cine de los grandes estudios comerciales, lo cual le permite una mayor libertad a la hora de plasmar sus sentimientos e inquietudes en la película.', 'El cine no solamente ha puesto en contacto al hombre con la naturaleza en diversos casos, sino que además ha sido, y sigue siendo en ocasiones, militante activo en la lucha por la defensa del medio ambiente. Además, el cine ha sido desde su nacimiento, el más fuerte medio de transmisión de conocimientos y de culturas, aportando a los espectadores infinitas posibilidades de encuentro con paisajes, naturaleza, lugares y costumbres.'];
        $imagen = ['https://static1.abc.es/media/play/2019/08/24/star-wars-cartel-kizG--1200x630@abc.jpg', 'https://images.amcnetworks.com/sundancetv.es/wp-content/uploads/2012/08/a_horrible_way_to_die.jpg', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mejores-peliculas-animacion-historia-1532805531.png', 'https://www.caracteristicas.co/wp-content/uploads/2019/02/cine-1-e1585958001794.jpg', 'https://picnic.media/wp-content/uploads/2019/06/maya-deren-cine-underground-1440x1080-1024x768.jpg', 'https://undergroundlab.es/wp-content/uploads/2020/06/Profesionales-que-intervienen-en-una-pel%C3%ADcula.jpg', 'https://revistaespejo.com/wp-content/uploads/2019/09/cinedelmedioambiente-t.jpg'];

        foreach($nombre as $key => $value){
            $peliculas = new Cine();
            $peliculas->nombre = $value;
            $peliculas->descripcion = $descripcion[$key];
            $peliculas->imagen = $imagen[$key];
            $peliculas->save();
        }
    }
}
