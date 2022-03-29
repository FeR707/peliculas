<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Historia;
use Database\Seeders\HistoriaSeeder;

class HistoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titulo = ['Historia del cine', 'Origen del cine', 'El cine digital'];

        $descripcion = ['Como su nombre lo indica, la historia del cine es la rememoración de los inventos, inventores y eventos que dieron nacimiento a la cinematografía. Se extiende desde sus inicios mudos en blanco y negro, hasta sus vertientes contemporáneas, digitales y abundantes en efectos especiales computarizados.  Esta es una historia que comprende casi dos siglos, desde finales del XIX hasta el tiempo presente, y que va de la mano de la invención fotográfica. El cine es una técnica de captura, edición y reproducción de imágenes y sonido. Opera en base a soportes fotosensibles, aparatos de computación y proyectores especializados, para ofrecer al público espectador la impresión del movimiento. Esta técnica se ha perfeccionado en nuestros días con la incorporación de la tecnología digital y la profesionalización del oficio cinematográfico. Se ha logrado un lenguaje artístico propio que hoy en día es reconocido como el “noveno arte” y que, en tanto industria del entretenimiento, moviliza cuantiosas cantidades de dinero en el mundo entero. ' 
        , 'El origen formal del cine se remonta al siglo XIX, con la invención de la fotografía. Con ella se dieron los primeros pasos hacia la generación de la impresión del movimiento, gracias a la persistencia retiniana (la mínima perduración de las imágenes vistas en la retina humana cuando se proyectan a gran velocidad) y al principio de la cámara oscura.  La primera proyección fílmica exhibida al público tuvo lugar en París el 28 de diciembre de 1895. Consistía en una proyección de la salida de unos obreros de una fábrica en Lyon. Fue grabada por los célebres hermanos Lumière, quienes en un año produjeron más de 500 películas de no más de un minuto de duración.  A esa primera proyección acudieron apenas 35 personas, pero la voz se corrió muy rápidamente en París y pronto hubo multitudes deseosas de ver el nuevo invento, anunciado como Cinématographe Lumière. También es célebre la anécdota de que una de sus primeras proyecciones involucró la filmación frontal de un tren que llegaba a la estación. El público asistente, temeroso de que el tren los atropellara, huía de la sala. ' 
        ,'El cine digital, también conocido como Cine D, es una tecnología de proyección para la industria cinematográfica, que tiene la particularidad de reemplazar al proyector tradicional por uno digital precisamente para proyectar en la pantalla una versión computarizada de la película. Utiliza la tecnología digital para grabar, distribuir y proyectar películas. Se caracteriza por la alta resolución de las imágenes, se graba utilizando una representación digital del brillo y el color en cada pixel de la imagen, en lugar de quedar fijada por emulsión química en filme de celuloide tradicional.  El Cine D es, en otras palabras, el reemplazo moderno de la tecnología centenaria utilizada hasta el momento. Los comienzos del cine digital datan de los años 80. Se le conoció durante años como “Cine Electrónico”. Fue Sony la empresa que comenzó a comercializar el concepto de ‘Cine Digital’, a finales de los 80, usando cámaras HDTV analógicas.  La expansión del cine digital en Estados Unidos animó a la industria a prepararse para equipar todas sus salas con proyectos digitales y a los fabricantes a hacer líneas especiales de cámaras digitales para el cine profesional.  Las características de la tecnología digital son usar técnicas tecnológicas como film óptico tradicional, mayor resolución que los sistemas de video analógicos y mayor control sobre la colorimetría durante el proceso de producción. En términos más técnicos, un film digital consta de secuencias filmadas de acción fílmica, pintura, procesamiento de la imagen, composición, animación por ordenador en 2-D y animación por ordenador en 3-D. '];

        $imagen = ['https://www.lavanguardia.com/files/og_thumbnail/uploads/2019/10/21/5fa52ef26d789.jpeg', 'https://www.radioreloj.cu/wp-content/uploads/2021/10/lumieres-hermanos_6b7f69a0_1200x630.jpg' ,'https://film-tomaseliasgonzalezbenitez-venezuela.com/wp-content/uploads/2019/11/002-2-CINE-DIGITAL-Y-SUS-VENTAJAS.jpg'];

        foreach($titulo as $key => $value){
            $peliculas = new Historia();
            $peliculas->titulo = $value;
            $peliculas->descripcion = $descripcion[$key];
            $peliculas->imagen = $imagen[$key];
            $peliculas->save();
        }
    }
}
