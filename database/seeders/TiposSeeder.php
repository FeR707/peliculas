<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TiposSeeder;
use App\Models\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre = ['Acción', 'Ciencia Ficcion', 'Comedia', 'Drama', 'Fantasia', 'Melodrama', 'Musical', 'Romance', 'Suspenso', 'Terror', 'Documental'];
        $descripcion = ['El llamado cine de acción es un género cinematográfico donde prima la espectacularidad de las imágenes por medio de efectos especiales de estilo "clásico". La denominación es más un convencionalismo popular, que un género cinematográfico puro acuñado por críticos, estudiosos o cineastas. Los elementos más frecuentes de una película de acción son persecuciones (tanto a pie como con vehículos), tiroteos, enfrentamientos, artes marciales y luchas callejeras, armas, explosiones, agresiones y cualquier situación violenta o intensa.', 
        'Ciencia ficción es la denominación de uno de los géneros derivados de la literatura de ficción, junto con la literatura fantástica y la narrativa de terror. Algunos autores estiman que el término es una mala traducción del inglés science fiction y que la correcta es ficción científica. Nacida como género en la década de 1920 (aunque hay obras reconocibles muy anteriores) y exportada posteriormente a otros medios, como el cinematográfico, historietístico y televisivo, tiene un gran auge desde la segunda mitad del siglo xx debido al interés popular acerca del futuro que despertó el espectacular avance tanto científico como tecnológico alcanzado durante todos estos años.', 
        'Una comedia cinematográfica es una película con situaciones de humor que intenta provocar la risa de la audiencia. Es uno de los más prolíficos y populares géneros cinematográficos', 
        'En el cine y la televisión, el drama es un género que trata situaciones generalmente no épicas en un contexto serio, con un tono y una orientación más susceptible de inspirar tristeza y compasión que risa o gracia. Sin embargo, desde el punto de vista etimológico, el drama evoca acción y diálogo.', 
        'El género fantástico es un género artístico en el que hay presencia de elementos que rompen con la realidad establecida. En su sentido más amplio, el género fantástico se halla presente en la literatura, cinematografía, historietas, videojuegos, juegos de rol, pintura, escultura, drama y, sobre todo, en la mitología y relatos antiguos, donde tuvo su origen. Se caracteriza por no dar prioridad a una representación realista que respete las leyes de funcionamiento del mundo. En ese sentido se suele decir que el género fantástico es subversivo, pues viola las normas de la realidad.', 
        'El melodrama , similar al drama pero con varios personajes, tiene el significado literal de obra teatral dramática en la que se resaltan los pasajes sentimentales mediante la incorporación de música instrumental. Con cualquier tipo de obra teatral, cinematográfica o literaria cuyos aspectos sentimentales, patéticos o lacrimógenos estén exagerados con la intención de provocar emociones en el público.', 
        'Se considera cine musical todas aquellas producciones cinematográficas que ofrecen canciones o temas musicales bailables en una parte fundamental de su desarrollo argumental. El concepto del espectáculo que impera en todos los aspectos de la sociedad de los Estados Unidos alcanza uno de sus máximos exponentes en el cine y, dentro de él, en las elaboradas coreografías, las melodías inolvidables y las obras maestras que ha dado el género musical.', 
        'El cine romántico es un género cinematográfico que se caracteriza por retratar argumentos construidos de eventos y personajes relacionados con la expresión del amor y las relaciones románticas. El cine romántico se centra en la representación de una historia amorosa de dos o más participantes, la cual atraviesa las principales etapas de la concepción del amor como el cortejo y el matrimonio.', 
        'El suspenso, suspense (del inglés suspense, que a su vez proviene del francés suspense, derivado del latín suspensus) o thriller (del inglés thrill, «asustar», «estremecer» o «emocionar») es un recurso literario y un amplio género de literatura, cine, televisión y videojuegos, que incluye numerosos y frecuentemente solapados subgéneros, cuyo objetivo principal es mantener al lector a la expectativa, generalmente en un estado de tensión, de lo que pueda ocurrirles a los personajes y, por lo tanto, atento al desarrollo del conflicto o nudo de la narración.', 
        'El cine de terror es un género cinematográfico que se caracteriza por su voluntad de provocar en el espectador sensaciones de pavor, terror, miedo, disgusto, repugnancia, horror, incomodidad o preocupación. Sus argumentos frecuentemente desarrollan la súbita intrusión en un ámbito de alguna fuerza, evento o personaje de naturaleza maligna o celestial, a menudo de origen criminal o sobrenatural. En los cines de terror es donde se produce una sensación de miedo o temor sobre las distintas causas que genera un determinado personaje o actor no profesional.', 
        'El documental es la expresión de un aspecto de la realidad, mostrada en forma audiovisual. La organización y estructura de imágenes y sonidos (textos y entrevistas), según el punto de vista del autor, determina el tipo de documental.'];
        $imagen = ['https://media.gq.com.mx/photos/5be9df325c1fcbd1504c3507/16:9/w_2560%2Cc_limit/john_whick_327.jpg', 'https://series-y-peliculas.com/wp-content/uploads/2020/12/ciencia-ficcion.jpg', 'https://i.blogs.es/3ff1fe/scary-movie/1366_2000.jpeg', 'https://www.cinepremiere.com.mx/wp-content/uploads/2021/08/the-maltese-falcon-1200-1200-675-675-crop-000000-900x506.jpeg', 'https://cdn-e360.s3-sa-east-1.amazonaws.com/las-30-mejores-peliculas-de-fantasia-en-la-historia-del-cine-large-BHcHRZjHPF.jpg', 'https://assets.mubicdn.net/images/film/16360/image-w1280.jpg?1543075286', 'https://tvazteca.brightspotcdn.com/97/9b/8a315bf64b5683483fb89b74c392/high-school-musical-peliculas-disney-plus.jpg', 'https://cdn.superaficionados.com/imagenes/mejores-peliculas-romanticas-de-la-historia-og.jpg', 'https://www.eluniversal.com.co/binrepository/1049x700/0c0/0d0/none/13704/WDGL/peliculna-de-terror_5136541_20210908190424.jpg', 'https://media.urgente24.com/p/f46d20f0eac40f1f42b5c038a62c94aa/adjuntos/319/imagenes/002/591/0002591712/p08lqdl5jpg.jpg', 'https://d3bjfa2fjkx310.cloudfront.net/test/ad285b8995ed711eedaa5e4cfcd751eb.jpeg'];


        foreach($nombre as $key => $value){
            $peliculas = new Tipo();
            $peliculas->nombre = $value;
            $peliculas->descripcion = $descripcion[$key];
            $peliculas->imagen = $imagen[$key];
            $peliculas->save();
        }
    }
}
