<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'marca_id' => 3,
            'modelo' => 'iPhone 13',
            'tipo' => 'Movil',
            'precio' => 750,
            'imagen' => 'iphone13.png',
            'almacenamiento' => '128 GB',
            'color' => 'Media noche',
            'ram' => '6 GB',
            'tamaño' => '6 pulgadas',
            'procesador' => 'A15',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => "iPhone 13: Tu nuevo superpoder. Nuestro sistema de cámara dual más avanzado. El chip que hace morder el polvo a la competencia. Un subidón de autonomía que vaya si notarás. Ceramic Shield, más duro que cualquier vidrio de smartphone. Pantalla Super Retina XDR de 6,1 pulgadas. Diseño robusto con bordes planos y resistente al agua.",
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 4,
            'modelo' => 'HP elite book',
            'precio' => 799,
            'imagen' => 'hpelitebook.avif',
            'almacenamiento' => '1 TB',
            'color' => 'Gris',
            'ram' => '16 GB',
            'tamaño' => '14 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => 'Mejora tu equipo para obtener un rendimiento de élite. El ordenador portátil HP EliteBook 640 es un ordenador potente, seguro y asequible que permite una fácil estandarización, mientras proporciona a los usuarios finales las herramientas que necesitan para trabajar desde casi cualquier parte.',
        ]);

        

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Macbook pro 2021',
            'precio' => 1599,
            'imagen' => 'macbookpro2021gris.avif',
            'almacenamiento' => '512 GB',
            'color' => 'Plata',
            'ram' => '16 GB',
            'tamaño' => '14.2 pulgadas',
            'procesador' => 'M1Pro',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'La potencia en estado pro. Ya está aquí el MacBook Pro más potente de la historia. Su rendimiento y eficiencia es enorme gracias al chip M1 Pro, el primero que Apple diseña para profesionales. Incluye una asombrosa pantalla Liquid Retina XDR, la mejor cámara y el mejor sistema de sonido en un portátil Mac, además de todos los puertos que vas a necesitar. Estás ante el primer portátil de una nueva especie. Y es una bestia.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Auriculares',
            'marca_id' => 3,
            'modelo' => 'Airpods Max',
            'precio' => 579,
            'imagen' => 'airpodsmax.avif',
            'almacenamiento' => null,
            'color' => 'Plata',
            'ram' => null,
            'tamaño' => null,
            'procesador' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Presentamos los AirPods Max, el equilibrio perfecto entre un sonido de alta fidelidad asombroso y la mágica facilidad de uso de los AirPods. Los auriculares definitivos ya están aquí. Con estos auriculares queríamos crear lo nunca visto ni oído. Desde las almohadillas hasta la diadema, los AirPods Max están diseñados para ajustarse a la perfección. Ofrecen un aislamiento acústico óptimo que se adapta a la forma de tu cabeza para que disfrutes de una experiencia realmente única.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Smartwatch',
            'marca_id' => 3,
            'modelo' => 'Apple Watch Series 6',
            'precio' => 239,
            'imagen' => 'applewatchseries6.avif',
            'almacenamiento' => null,
            'color' => 'Aluminio Plata',
            'ram' => null,
            'tamaño' => '44 mm',
            'procesador' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'La renovada experiencia del Apple Watch Series 6 gira en torno a su gran pantalla, en la que todo resulta increíblemente fácil de usar y leer. Este reloj es nuestra mayor y más brillante creación hasta el momento.',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Pad SE',
            'precio' => 299,
            'imagen' => 'padseverde.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Verde',
            'ram' => '8 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

                Diseño portátil, compacto y ligero. Llévate tu Redmi Pad SE a todas partes. Diversión en estado puro.

                La gran pantalla FHD+ de 11" con 16,7 millones de colores y una tasa de refresco fluida de 90 Hz con AdaptiveSync, garantiza una experiencia visual nítida y fluida para tu entretenimiento del día a día.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 6',
            'precio' => 300,
            'imagen' => 'pad6negro.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Negro',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '


            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 6',
            'precio' => 373,
            'imagen' => 'pad6negro.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Macbook pro 2021',
            'precio' => 1899,
            'imagen' => 'macbookpro2021plata.avif',
            'almacenamiento' => '1 TB',
            'color' => 'Plata',
            'ram' => '16 GB',
            'tamaño' => '14.2 pulgadas',
            'procesador' => 'M1Pro',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 2,
            'oferta_id' => 3,
            'descripcion' => 'La potencia en estado pro. Ya está aquí el MacBook Pro más potente de la historia. Su rendimiento y eficiencia es enorme gracias al chip M1 Pro, el primero que Apple diseña para profesionales. Incluye una asombrosa pantalla Liquid Retina XDR, la mejor cámara y el mejor sistema de sonido en un portátil Mac, además de todos los puertos que vas a necesitar. Estás ante el primer portátil de una nueva especie. Y es una bestia.',
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Smartwatch',
            'marca_id' => 3,
            'modelo' => 'Apple watch series 7',
            'precio' => 340,
            'imagen' => 'applewatchseries7.avif',
            'almacenamiento' => null,
            'color' => 'Aluminio Plata',
            'ram' => null,
            'tamaño' => '44 mm',
            'procesador' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'La renovada experiencia del Apple Watch Series 7 gira en torno a su gran pantalla, en la que todo resulta increíblemente fácil de usar y leer. Este reloj es nuestra mayor y más brillante creación hasta el momento.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 11',
            'precio' => 450,
            'imagen' => 'iphone11.avif',
            'almacenamiento' => '128 GB',
            'color' => 'Blanco',
            'ram' => '4 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => 1,
            'descripcion' => 'La medida exacta de todo. Un nuevo sistema de cámara dual que abarca un campo de visión más amplio. El chip más rápido que haya tenido un smart­phone. Una batería que dura todo el día, para que hagas más y cargues menos. Y el vídeo de mayor calidad en un smart­phone, que hará que tus recuerdos sean aún más inolvidables. El iPhone 11 llega pisando fuerte.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Smartwatch',
            'marca_id' => 3,
            'modelo' => 'Apple watch series 7',
            'precio' => 340,
            'imagen' => 'applewatchseries7.avif',
            'almacenamiento' => null,
            'color' => 'Aluminio Plata',
            'ram' => null,
            'tamaño' => '41 mm',
            'procesador' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => 2,
            'descripcion' => 'La renovada experiencia del Apple Watch Series 7 gira en torno a su gran pantalla, en la que todo resulta increíblemente fácil de usar y leer. Este reloj es nuestra mayor y más brillante creación hasta el momento.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Smartwatch',
            'marca_id' => 3,
            'modelo' => 'Apple watch Ultra',
            'precio' => 635,
            'imagen' => 'applewatchultragris.avif',
            'almacenamiento' => null,
            'color' => 'Titanio Gris',
            'ram' => null,
            'tamaño' => '49 mm',
            'procesador' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Descubre el Apple Watch más duro y potente que existe. Con una caja de titanio capaz de aguantarlo todo, GPS de doble frecuencia y alta precisión, hasta 36 horas de autonomía, conexión móvil para mayor libertad y tres correas especialmente creadas para deportistas y amantes de la aventura. Prepárate, vienen tiempos salvajes. El Apple Watch Ultra aguanta altitudes, temperaturas y entornos extremos. Es un instrumento de exploración esencial pensado para llevarte hasta el último confín del mundo y traerte a casa de una pieza.',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 8,
            'modelo' => 'Lenovo V15 G3',
            'precio' => 575,
            'imagen' => 'lenovov15.webp',
            'almacenamiento' => '256 GB ',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '15.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Destaque en cualquier lugar con la computadora portátil Lenovo IdeaPad Slim 3, diseñada para ser liviana y delgada, de construcción robusta con resistencia y durabilidad de grado militar para soportar caídas y condiciones de viaje extremas. Trabaje de manera más inteligente y fluida todos los días en múltiples aplicaciones simultáneamente y mientras viaja, con el sólido rendimiento de los últimos procesadores Intel y abundante memoria, mejorada por el rendimiento adaptativo de la tecnología Smart Power. Almacene y acceda rápidamente a su enorme biblioteca multimedia, también con almacenamiento SSD masivo.
            
            '
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 5,
            'modelo' => 'Microsof Surface Pro 6',
            'precio' => 468,
            'imagen' => 'microsofsurfacacepro6.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '12 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Ultraligero y versátil. Mantén tu productividad de la manera que quieras con el Surface Pro 6, ahora más rápido que nunca con el más reciente el procesador Intel® Core™ de 8.ª generación y la experiencia completa de Windows 10 Home.',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 8,
            'modelo' => 'Lenovo IdeaPad Slim 3',
            'precio' => 468,
            'imagen' => 'lenovoideapad.webp',
            'almacenamiento' => '512 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '15.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Destaque en cualquier lugar con la computadora portátil Lenovo IdeaPad Slim 3, diseñada para ser liviana y delgada, de construcción robusta con resistencia y durabilidad de grado militar para soportar caídas y condiciones de viaje extremas. Trabaje de manera más inteligente y fluida todos los días en múltiples aplicaciones simultáneamente y mientras viaja, con el sólido rendimiento de los últimos procesadores Intel y abundante memoria, mejorada por el rendimiento adaptativo de la tecnología Smart Power. Almacene y acceda rápidamente a su enorme biblioteca multimedia, también con almacenamiento SSD masivo.
            
            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 8,
            'modelo' => 'Lenovo IdeaPad Slim 3',
            'precio' => 468,
            'imagen' => 'lenovoideapad.webp',
            'almacenamiento' => '1 TB ',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '15.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Destaque en cualquier lugar con la computadora portátil Lenovo IdeaPad Slim 3, diseñada para ser liviana y delgada, de construcción robusta con resistencia y durabilidad de grado militar para soportar caídas y condiciones de viaje extremas. Trabaje de manera más inteligente y fluida todos los días en múltiples aplicaciones simultáneamente y mientras viaja, con el sólido rendimiento de los últimos procesadores Intel y abundante memoria, mejorada por el rendimiento adaptativo de la tecnología Smart Power. Almacene y acceda rápidamente a su enorme biblioteca multimedia, también con almacenamiento SSD masivo.
            
            '
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi MI 10t Lite',
            'precio' => 144,
            'imagen' => 'xiaomimi10tlite.avif',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '6.67 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Dale poder a tus ideas con el nuevo Mi 10T Lite. Tu dispositivo 5G óptimo gracias a su cámara cuádruple de 64 MP con IA, una pantalla de 120 Hz sin rival y el chipset de alto rendimiento Snapdragon 750G. El exquisito y llamativo diseño de Mi 10T Lite así como un sensor de huellas dactilares lateral, estratégicamente situado donde tu dedo se sitúa de forma natural. Mi 10T Lite viene con una batería de 4820 mAh (typ) con la tecnología inteligente AdaptiveSync',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 14 Pro',
            'precio' => 853,
            'imagen' => 'iphone14pro.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Morado Oscuro',
            'ram' => '6 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A15',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'El iPhone 14 Pro Max es el smartphone de gama alta de Apple con una pantalla OLED Super Retina XDR de 6,7 pulgadas con una resolución de 2778 x 1284 píxeles y un diseño elegante y sofisticado. Está alimentado por el nuevo chip A15 Bionic con un procesador de 6 núcleos y una GPU de 4 núcleos. Tiene una triple cámara trasera de 12MP con funciones avanzadas como el modo Noche, Deep Fusion y vídeo ProRes para hacer fotos de muy alta calidad. En resumen, el iPhone 13 Pro Max es un dispositivo de última generación que ofrece una combinación perfecta de diseño, rendimiento y funcionalidad.',

        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 8',
            'precio' => 853,
            'imagen' => 'iphone8.avif',
            'almacenamiento' => '64 GB',
            'color' => 'Gris Espacial',
            'ram' => '2 GB',
            'tamaño' => '4.7 pulgadas',
            'procesador' => 'A11',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Apple iPhone 8 Una mente brillante. Un espectacular diseño integral de vidrio. La cámara más popular del mundo en una versión aún mejor. El chip más inteligente y con mayor potencia que ha tenido un smartphone. Un sistema de carga inalámbrica que es pura comodidad. Y formas nunca vistas de disfrutar de la realidad aumentada. Es el iPhone 8, una nueva generación de iPhone.',
        ]);


        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Apple Watch Series 7',
            'tipo' => 'Smartwatch',
            'precio' => 340,
            'imagen' => 'applewatchseries7.avif',
            'almacenamiento' => null,
            'color' => null,
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => false,
            'stock' => 4,
            'tamaño' => '41 mm',
            'procesador' => null,
            'oferta_id' => 2,
            'descripcion' => 'La renovada experiencia del Apple Watch Series 7 gira en torno a su gran pantalla, en la que todo resulta increíblemente fácil de usar y leer. Este reloj es nuestra mayor y más brillante creación hasta el momento.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Apple Watch Ultra',
            'tipo' => 'Smartwatch',
            'precio' => 635,
            'imagen' => 'applewatchultragris.avif',
            'almacenamiento' => null,
            'color' => null,
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 4,
            'tamaño' => '49 mm',
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Descubre el Apple Watch más duro y potente que existe. Con una caja de titanio capaz de aguantarlo todo, GPS de doble frecuencia y alta precisión, hasta 36 horas de autonomía, conexión móvil para mayor libertad y tres correas especialmente creadas para deportistas y amantes de la aventura. Prepárate, vienen tiempos salvajes. El Apple Watch Ultra aguanta altitudes, temperaturas y entornos extremos. Es un instrumento de exploración esencial pensado para llevarte hasta el último confín del mundo y traerte a casa de una pieza.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A9',
            'precio' => 299,
            'imagen' => 'taba9gris.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'Android 13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => 4,
            'descripcion' => '
            Con el diseño por bandera. Cada elemento del aspecto de Galaxy Tab A9+ ha sido cuidado hasta el milímetro para dar lugar a una tablet elegante que mantiene el equilibrio entre las estéticas clásica y moderna. Puedes conseguirla en uno de los colores característicos de Samsung: Graphite o Silver.


            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Apple Watch Ultra',
            'tipo' => 'Smartwatch',
            'precio' => 635,
            'imagen' => 'applewatchultragris.avif',
            'almacenamiento' => null,
            'color' => null,
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 4,
            'tamaño' => '49 mm',
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Descubre el Apple Watch más duro y potente que existe. Con una caja de titanio capaz de aguantarlo todo, GPS de doble frecuencia y alta precisión, hasta 36 horas de autonomía, conexión móvil para mayor libertad y tres correas especialmente creadas para deportistas y amantes de la aventura. Prepárate, vienen tiempos salvajes. El Apple Watch Ultra aguanta altitudes, temperaturas y entornos extremos. Es un instrumento de exploración esencial pensado para llevarte hasta el último confín del mundo y traerte a casa de una pieza.',
        ]);

        
        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach Stealth 600P',
            'tipo' => 'Auriculares',
            'precio' => 110,
            'imagen' => 'turtlebeachgaming.avif',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Los auriculares de juego inalámbricos multiplataforma Stealth™ 600 Gen 2 MAX de Turtle Beach® ofrecen una duración de la batería que cambia las reglas del juego y un sonido de juego y chat de alta calidad para PlayStation®, Nintendo Switch™ y PC. La duradera batería de más de 48 horas y la conexión inalámbrica sin retrasos de 2.4 GHz te permitirán permanecer durante más tiempo en el juego y los cuidadosamente afinados altavoces de 50 mm y el micrófono abatible proporcionan un sonido y una comunicación que cambiarán el juego. ',
        ]);
        
        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach Elite Pro',
            'tipo' => 'Auriculares',
            'precio' => 241,
            'imagen' => 'tutlebeachelitepro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los Elite Pro™ de Turtle Beach® 2 + el sistema de sonido de juego de rendimiento profesional SuperAmp™ para PS5™ y PS4™ están creados a partir de Elite Pro gracias a la colaboración con los principales equipos de eSports como OpTic Gaming y Splyce para ofrecer la próxima generación de rendimiento de sonido a los mejores jugadores y competidores expertos.
            '
        ]);

        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach 600 gen2',
            'tipo' => 'Auriculares',
            'precio' => 109,
            'imagen' => 'turtlebeach600gen2.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los Turtle Beach Stealth 600 Gen 2 son la nueva versión de los auriculares de juego inalámbricos Stealth 600 para destacar en Xbox One y Xbox Series X con la tecnología Xbox Wireless y Windows Sonic. El nuevo micrófono abatible de los Stealth 600 Gen 2 es más grande para un chat más nítido y se integra perfectamente en los auriculares cuando está silenciado.            '
        ]);

        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach 600 gen2',
            'tipo' => 'Auriculares',
            'precio' => 109,
            'imagen' => 'turtlebeach600gen2azul.webp',
            'almacenamiento' => null,
            'color' => 'Azul',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los Turtle Beach Stealth 600 Gen 2 son la nueva versión de los auriculares de juego inalámbricos Stealth 600 para destacar en Xbox One y Xbox Series X con la tecnología Xbox Wireless y Windows Sonic. El nuevo micrófono abatible de los Stealth 600 Gen 2 es más grande para un chat más nítido y se integra perfectamente en los auriculares cuando está silenciado.            '
        ]);

        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach 600 gen2',
            'tipo' => 'Auriculares',
            'precio' => 109,
            'imagen' => 'turtlebeach600gen2blanco.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los Turtle Beach Stealth 600 Gen 2 son la nueva versión de los auriculares de juego inalámbricos Stealth 600 para destacar en Xbox One y Xbox Series X con la tecnología Xbox Wireless y Windows Sonic. El nuevo micrófono abatible de los Stealth 600 Gen 2 es más grande para un chat más nítido y se integra perfectamente en los auriculares cuando está silenciado.            '
        ]);

        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach Stealth 700P',
            'tipo' => 'Auriculares',
            'precio' => 199,
            'imagen' => 'turtlebeach700p.webp',
            'almacenamiento' => null,
            'color' => 'Azul',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los auriculares de juego inalámbricos multiplataforma Stealth™ 700 Gen 2 MAX de Turtle Beach® ofrecen una experiencia de juego de primera calidad en PlayStation®, Nintendo Switch™ o PC. La batería mejorada proporciona más de 40 horas de juego y una conexión inalámbrica sin retrasos que te mantendrá en el juego sin interrupciones. Contesta llamadas de móvil o escucha música mientras juegas gracias a la tecnología Bluetooth®. Las almohadillas acolchadas con gel refrigerante Aerofit™ ofrecen una gran comodidad y los altavoces Nanoclear™ de 50 mm darán vida a tus juegos. Habla con nitidez con el micrófono abatible de 2.ª generación más grande, con los controles de fácil acceso para el seguimiento variable del micrófono y con Superhuman Hearing® para conseguir la ventaja definitiva.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach Stealth 700P',
            'tipo' => 'Auriculares',
            'precio' => 199,
            'imagen' => 'turtlebeach700pnegro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los auriculares de juego inalámbricos multiplataforma Stealth™ 700 Gen 2 MAX de Turtle Beach® ofrecen una experiencia de juego de primera calidad en PlayStation®, Nintendo Switch™ o PC. La batería mejorada proporciona más de 40 horas de juego y una conexión inalámbrica sin retrasos que te mantendrá en el juego sin interrupciones. Contesta llamadas de móvil o escucha música mientras juegas gracias a la tecnología Bluetooth®. Las almohadillas acolchadas con gel refrigerante Aerofit™ ofrecen una gran comodidad y los altavoces Nanoclear™ de 50 mm darán vida a tus juegos. Habla con nitidez con el micrófono abatible de 2.ª generación más grande, con los controles de fácil acceso para el seguimiento variable del micrófono y con Superhuman Hearing® para conseguir la ventaja definitiva.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '7',
            'modelo' => 'Turtle Beach Stealth 600P',
            'tipo' => 'Auriculares',
            'precio' => 124,
            'imagen' => 'turtlebeach600projo.webp',
            'almacenamiento' => null,
            'color' => 'Rojo',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los auriculares de juego inalámbricos multiplataforma Stealth™ 600 Gen 2 MAX de Turtle Beach® ofrecen una duración de la batería que cambia las reglas del juego y un sonido de juego y chat de alta calidad para PlayStation®, Nintendo Switch™ y PC. La duradera batería de más de 48 horas y la conexión inalámbrica sin retrasos de 2.4 GHz te permitirán permanecer durante más tiempo en el juego y los cuidadosamente afinados altavoces de 50 mm y el micrófono abatible proporcionan un sonido y una comunicación que cambiarán el juego. 
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech G733 RGB ',
            'tipo' => 'Auriculares',
            'precio' => 120,
            'imagen' => 'logitechgamingnegro.avif',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Obtén mejor sellado, reduce los puntos de tensión y disfruta de comodidad más duradera para sesiones de gaming maratonianas. Para aligerarlos aún más, agregamos una cinta de suspensión para distribuir el peso para que puedas seguir jugando como si no existieran. La tecnología inalámbrica LIGHTSPEED te proporciona más de 29 horas de duración de batería y hasta 20 metros de libertad inalámbrica fiable.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech PRO X Gaming',
            'tipo' => 'Auriculares',
            'precio' => 130,
            'imagen' => 'logitechprox.avif',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Obtén mejor sellado, reduce los puntos de tensión y disfruta de comodidad más duradera para sesiones de gaming maratonianas. Para aligerarlos aún más, agregamos una cinta de suspensión para distribuir el peso para que puedas seguir jugando como si no existieran. La tecnología inalámbrica LIGHTSPEED te proporciona más de 29 horas de duración de batería y hasta 20 metros de libertad inalámbrica fiable.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech H800',
            'tipo' => 'Auriculares',
            'precio' => 129,
            'imagen' => 'logitechh800.avif',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Charle, escuche música y navegue con su PC, tablet o teléfono Smartphone sin ataduras que restrinjan sus movimientos. Este cómodo casco inalámbrico permite charlar, escuchar música y navegar en varios dispositivos como su PC, tablet y teléfono Smartphone (con sonido estéreo digital de calidad, una pila recargable de seis horas de duración y controles integrados en el auricular)',
        ]);

        
        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech G635 Gaming',
            'tipo' => 'Auriculares',
            'precio' => 128,
            'imagen' => 'logitechg635gaming.avif',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'La malla híbrida tejida de los transductores Pro-G de 50 mm contribuye a una mayor plenitud, profundidad y claridad de sonido a cualquier volumen. Con el nuevo diámetro aumentado, Pro-G suena mejor que nunca. Los sonidos de baja frecuencia (como explosiones y complejas bandas sonoras) son aún más completos y cinemáticos. Las frecuencias altas (voces, pasos, disparos) son increíblemente nítidas y precisas. Experimenta el increíble DTS® Headphone:X 2.0, cuya precisión es superior al sonido envolvente de 7.1 canales.2DTS Headphone:X y otras características avanzadas activadas en el PC mediante el software Logitech G HUB. ',
        ]);
        
        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech G733 Gaming',
            'tipo' => 'Auriculares',
            'precio' => 127,
            'imagen' => 'logitechg733azul.webp',
            'almacenamiento' => null,
            'color' => 'Azul',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Auriculares con micrófono inalámbricos LIGHTSPEED RGB para gaming. Por fin, uno auriculares que pueden ser tan expresivos como tú. Los auriculares G733 son inalámbricos y se han diseñado pensando en la comodidad. Y están equipados con todo el sonido envolvente, los filtros de voz y la iluminación avanzada que necesitas para lucir, sonar y jugar con más estilo que nunca.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech G733 Gaming',
            'tipo' => 'Auriculares',
            'precio' => 127,
            'imagen' => 'logitechg733lila.webp',
            'almacenamiento' => null,
            'color' => 'Purpura',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 10,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Auriculares con micrófono inalámbricos LIGHTSPEED RGB para gaming. Por fin, uno auriculares que pueden ser tan expresivos como tú. Los auriculares G733 son inalámbricos y se han diseñado pensando en la comodidad. Y están equipados con todo el sonido envolvente, los filtros de voz y la iluminación avanzada que necesitas para lucir, sonar y jugar con más estilo que nunca.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech G733 Gaming',
            'tipo' => 'Auriculares',
            'precio' => 127,
            'imagen' => 'logitechg733blanco.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 60,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Auriculares con micrófono inalámbricos LIGHTSPEED RGB para gaming. Por fin, uno auriculares que pueden ser tan expresivos como tú. Los auriculares G733 son inalámbricos y se han diseñado pensando en la comodidad. Y están equipados con todo el sonido envolvente, los filtros de voz y la iluminación avanzada que necesitas para lucir, sonar y jugar con más estilo que nunca.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '6',
            'modelo' => 'Logitech G733 Gaming',
            'tipo' => 'Auriculares',
            'precio' => 127,
            'imagen' => 'logitechg733negro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 60,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Auriculares con micrófono inalámbricos LIGHTSPEED RGB para gaming. Por fin, uno auriculares que pueden ser tan expresivos como tú. Los auriculares G733 son inalámbricos y se han diseñado pensando en la comodidad. Y están equipados con todo el sonido envolvente, los filtros de voz y la iluminación avanzada que necesitas para lucir, sonar y jugar con más estilo que nunca.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Airpods Gen 3',
            'tipo' => 'Auriculares',
            'precio' => 198,
            'imagen' => 'airpodsgen3.avif',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 84,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'Los AirPods no pesan nada y ofrecen un ajuste anatómico. Se colocan en el ángulo perfecto para darte un mayor confort y llevar el sonido directamente a tus oídos. Además, son un 33 % más cortos que los AirPods (2.ª generación) e incluyen un sensor de presión que te permite controlar la música y las llamadas fácilmente.  El sonido te rodea con un efecto envolvente. Sumérgete en una experiencia tridimensional cada vez que escuchas música o ves una película o una serie. Los giroscopios y los acelerómetros de los AirPods siguen los movimientos de tu cabeza y tendrás la sensación de estar en medio del escenario.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Airpods Pro Gen 2 2019',
            'tipo' => 'Auriculares',
            'precio' => 198,
            'imagen' => 'airpodsprogen2.avif',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 236,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'AirPods Pro 2ª Generación. Oye bien: la cancelación activa de ruido es hasta dos veces superior. El modo de sonido ambiente te mantiene en contacto con el mundo, mientras que el nuevo audio adaptativo ajusta el control de ruido a tu entorno. El audio espacial te lleva a otra dimensión en una experiencia inmersiva. Y todo sin parar durante las 6 horas de autonomía que te da una sola carga. Justo lo que querías escuchar.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Airpods Pro Gen 2 2021',
            'tipo' => 'Auriculares',
            'precio' => 198,
            'imagen' => 'airpodsprogen2.avif',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 250,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'AirPods Pro 2ª Generación. Oye bien: la cancelación activa de ruido es hasta dos veces superior. El modo de sonido ambiente te mantiene en contacto con el mundo, mientras que el nuevo audio adaptativo ajusta el control de ruido a tu entorno. El audio espacial te lleva a otra dimensión en una experiencia inmersiva. Y todo sin parar durante las 6 horas de autonomía que te da una sola carga. Justo lo que querías escuchar.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'Estuche De Carga Airpods V2',
            'tipo' => 'Auriculares',
            'precio' => 116,
            'imagen' => 'estuchecarga.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 160,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => 'El estuche es la mejor forma de cargar los AirPods sin cables: lo colocas sobre una base compatible y listo. El indicador LED en la parte delantera te avisa de que los AirPods se están cargando. Y si no tienes la base de carga a mano, puedes usar el puerto Lightning tranquilamente. El estuche de carga inalámbrica es compatible con todas las generaciones de AirPods y te da para varias cargas.',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds2 Pro',
            'tipo' => 'Auriculares',
            'precio' => 179,
            'imagen' => 'samsungbuds2pronegro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 115,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Sonido Hi-Fi Profesional, descubre una nueva generación de auriculares. Buds2 Pro llega para ofrecerte la mejor calidad en audio con un sonido profundo e inmersivo de 24 bits que te hara? sentir la mu?sica y todo tu contenido multimedia como nunca antes. Gracias a su cancelacio?n de ruido activa hasta un 40% mejor, podra?s centrarte en solo escuchar tu mu?sica preferida sin que nada te distraiga. Y todo esto, manteniendo un disen?o minimalista y co?modo que te hara?n sentir que no los llevas puestos.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds2 Pro',
            'tipo' => 'Auriculares',
            'precio' => 179,
            'imagen' => 'samsungbuds2prolila.webp',
            'almacenamiento' => null,
            'color' => 'Purpura',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 115,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Sonido Hi-Fi Profesional, descubre una nueva generación de auriculares. Galaxy Buds2 Pro llega para ofrecerte la mejor calidad en audio con un sonido profundo e inmersivo de 24 bits que te hara? sentir la mu?sica y todo tu contenido multimedia como nunca antes. Gracias a su cancelacio?n de ruido activa hasta un 40% mejor, podra?s centrarte en solo escuchar tu mu?sica preferida sin que nada te distraiga. Y todo esto, manteniendo un disen?o minimalista y co?modo que te hara?n sentir que no los llevas puestos.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds2 Pro',
            'tipo' => 'Auriculares',
            'precio' => 239,
            'imagen' => 'samsungbuds2problanco.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => 4,
            'descripcion' => '
            Sonido Hi-Fi Profesional, descubre una nueva generación de auriculares. Galaxy Buds2 Pro llega para ofrecerte la mejor calidad en audio con un sonido profundo e inmersivo de 24 bits que te hara? sentir la mu?sica y todo tu contenido multimedia como nunca antes. Gracias a su cancelacio?n de ruido activa hasta un 40% mejor, podra?s centrarte en solo escuchar tu mu?sica preferida sin que nada te distraiga. Y todo esto, manteniendo un disen?o minimalista y co?modo que te hara?n sentir que no los llevas puestos.
            ',
        ]);


        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds Live',
            'tipo' => 'Auriculares',
            'precio' => 177,
            'imagen' => 'samsunggalaxybudslive.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 123,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Presentamos Buds Live. Los auriculares diseñados para mantenerte siempre conectado. Con una forma icónica y un diseño ergonómico, que te permite escuchar el sonido ambiente natural, y un altavoz optimizado para una mejor experiencia. Sonido creado para tus oídos.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds2 Pro',
            'tipo' => 'Auriculares',
            'precio' => 239,
            'imagen' => 'samsungbuds2problanco.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Sonido Hi-Fi Profesional, descubre una nueva generación de auriculares. Galaxy Buds2 Pro llega para ofrecerte la mejor calidad en audio con un sonido profundo e inmersivo de 24 bits que te hara? sentir la mu?sica y todo tu contenido multimedia como nunca antes. Gracias a su cancelacio?n de ruido activa hasta un 40% mejor, podra?s centrarte en solo escuchar tu mu?sica preferida sin que nada te distraiga. Y todo esto, manteniendo un disen?o minimalista y co?modo que te hara?n sentir que no los llevas puestos.
            ',
        ]);
        
        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds2 Pro',
            'tipo' => 'Auriculares',
            'precio' => 239,
            'imagen' => 'samsunggalaxybudsprosilver.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Sonido Hi-Fi Profesional, descubre una nueva generación de auriculares. Galaxy Buds2 Pro llega para ofrecerte la mejor calidad en audio con un sonido profundo e inmersivo de 24 bits que te hara? sentir la mu?sica y todo tu contenido multimedia como nunca antes. Gracias a su cancelacio?n de ruido activa hasta un 40% mejor, podra?s centrarte en solo escuchar tu mu?sica preferida sin que nada te distraiga. Y todo esto, manteniendo un disen?o minimalista y co?modo que te hara?n sentir que no los llevas puestos.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds2 Pro',
            'tipo' => 'Auriculares',
            'precio' => 239,
            'imagen' => 'samsunggalaxybudsprosilver.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Sonido Hi-Fi Profesional, descubre una nueva generación de auriculares. Galaxy Buds2 Pro llega para ofrecerte la mejor calidad en audio con un sonido profundo e inmersivo de 24 bits que te hara? sentir la mu?sica y todo tu contenido multimedia como nunca antes. Gracias a su cancelacio?n de ruido activa hasta un 40% mejor, podra?s centrarte en solo escuchar tu mu?sica preferida sin que nada te distraiga. Y todo esto, manteniendo un disen?o minimalista y co?modo que te hara?n sentir que no los llevas puestos.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds Pro',
            'tipo' => 'Auriculares',
            'precio' => 139,
            'imagen' => 'samsunggalaxybudsproblanco.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => 4,
            'descripcion' => '
                Lo último en auriculares inalámbricos que proporciona un sonido envolvente sin precedentes. Con los altavoces dinámicos de dos vías, cada nota suena con más bajos, un gran detalle y mayor armonía. El Control Activo Inteligente de Ruido permite alternar entre cancelación de ruido y sonido ambiental.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds Pro',
            'tipo' => 'Auriculares',
            'precio' => 139,
            'imagen' => 'samsunggalaxybudsprolila.webp',
            'almacenamiento' => null,
            'color' => 'Purpura',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Lo último en auriculares inalámbricos que proporciona un sonido envolvente sin precedentes. Con los altavoces dinámicos de dos vías, cada nota suena con más bajos, un gran detalle y mayor armonía. El Control Activo Inteligente de Ruido permite alternar entre cancelación de ruido y sonido ambiental.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds Pro',
            'tipo' => 'Auriculares',
            'precio' => 139,
            'imagen' => 'samsunggalaxybudspronegro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Lo último en auriculares inalámbricos que proporciona un sonido envolvente sin precedentes. Con los altavoces dinámicos de dos vías, cada nota suena con más bajos, un gran detalle y mayor armonía. El Control Activo Inteligente de Ruido permite alternar entre cancelación de ruido y sonido ambiental.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung Buds Pro',
            'tipo' => 'Auriculares',
            'precio' => 139,
            'imagen' => 'samsunggalaxybudsprosilver.webp',
            'almacenamiento' => null,
            'color' => 'Silver',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Lo último en auriculares inalámbricos que proporciona un sonido envolvente sin precedentes. Con los altavoces dinámicos de dos vías, cada nota suena con más bajos, un gran detalle y mayor armonía. El Control Activo Inteligente de Ruido permite alternar entre cancelación de ruido y sonido ambiental.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '1',
            'modelo' => 'Samsung EO-IC500',
            'tipo' => 'Auriculares',
            'precio' => 139,
            'imagen' => 'samsunganceo-ic500.webp',
            'almacenamiento' => null,
            'color' => 'Silver',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 260,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Escucha tus playlists sin ruidos con los auriculares ANC Tipo C. Su increíble cancelación de ruido te permite escuchar música de forma segura, mientras su conexión USB Tipo C divide los sonidos entre el auricular izquierdo y derecho para una verdadera experiencia estéreo.
            ',
        ]);
        
        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi Buds 4 Pro',
            'tipo' => 'Auriculares',
            'precio' => 100,
            'imagen' => 'xiaomiredmibuds4pro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                El sonido que quieres con los nuevos Xiaomi Redmi Buds 4 Pro con Cancelación de Ruido.  Un festín para tus oídos: los Redmi Buds 4 Pro están certificados por Hi-Res Audio Wireless y son compatibles con el códec de audio LDAC a velocidades de transmisión de hasta 990 kbps, así como con resoluciones de audio de 96 kHz/24 bits y superiores.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi Buds 4 Pro',
            'tipo' => 'Auriculares',
            'precio' => 100,
            'imagen' => 'xiaomiredmibuds4problanco.webp',
            'almacenamiento' => null,
            'color' => 'Blanco',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                El sonido que quieres con los nuevos Xiaomi Redmi Buds 4 Pro con Cancelación de Ruido.  Un festín para tus oídos: los Redmi Buds 4 Pro están certificados por Hi-Res Audio Wireless y son compatibles con el códec de audio LDAC a velocidades de transmisión de hasta 990 kbps, así como con resoluciones de audio de 96 kHz/24 bits y superiores.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi Buds 4 Pro',
            'tipo' => 'Auriculares',
            'precio' => 195,
            'imagen' => 'xiaomiredmibuds4prodorado.webp',
            'almacenamiento' => null,
            'color' => 'Dorado Galáctico',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Xiaomi Buds 4 Pro: La experiencia sonora más envolvente. Hasta 48 dB ANC con modos de transparencia para disfrutar de tu música en entornos ruidosos. Sonido dimensional para una escucha realista para sumergirte en una experiencia de sonido increíble.

            Compatible con sonido inalámbrico de alta resolución con LDAC de Sony, hasta 38 horas de uso con estuche, carga inalámbrica, conexión de dos dispositivos y ultrarreducción de ruido para llamadas nítidas.            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi Buds 4 Pro',
            'tipo' => 'Auriculares',
            'precio' => 195,
            'imagen' => 'xiaomiredmibuds4problanconegro.webp',
            'almacenamiento' => null,
            'color' => 'Espacio Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Xiaomi Buds 4 Pro: La experiencia sonora más envolvente. Hasta 48 dB ANC con modos de transparencia para disfrutar de tu música en entornos ruidosos. Sonido dimensional para una escucha realista para sumergirte en una experiencia de sonido increíble.

            Compatible con sonido inalámbrico de alta resolución con LDAC de Sony, hasta 38 horas de uso con estuche, carga inalámbrica, conexión de dos dispositivos y ultrarreducción de ruido para llamadas nítidas.            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi Buds 3 Pro',
            'tipo' => 'Auriculares',
            'precio' => 109,
            'imagen' => 'xiaomiredmibuds3pro.webp',
            'almacenamiento' => null,
            'color' => 'Gris',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Buds 3 Pro, el sonido que deseas. Te permite disfrutar de un mundo con menos ruido de fondo. Los auriculares cuentan con la tecnología de cancelación activa de ruido doble con micrófonos de retroalimentación y anticipación. Cancelan el ruido ambiental y reducen el exceso de ruido en el conducto auditivo de manera eficaz. La cancelación de ruido puede ser de hasta 35 dB de profundidad.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi Buds 3 Pro',
            'tipo' => 'Auriculares',
            'precio' => 109,
            'imagen' => 'xiaomiredmibuds3pronegro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Buds 3 Pro, el sonido que deseas. Te permite disfrutar de un mundo con menos ruido de fondo. Los auriculares cuentan con la tecnología de cancelación activa de ruido doble con micrófonos de retroalimentación y anticipación. Cancelan el ruido ambiental y reducen el exceso de ruido en el conducto auditivo de manera eficaz. La cancelación de ruido puede ser de hasta 35 dB de profundidad.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '2',
            'modelo' => 'Xiaomi True Earphones 2',
            'tipo' => 'Auriculares',
            'precio' => 105,
            'imagen' => 'xiaomimitrueearphones2basic.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Los auriculares inalámbricos Xiaomi Mi True Wireless Earphones 2 Basic ofrecen un excelente sonido y una gran calidad de llamada inalámbrica junto a una batería de larga duración.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '5',
            'modelo' => 'Microsoft Estereo',
            'tipo' => 'Auriculares',
            'precio' => 103,
            'imagen' => 'microsoftestereonegro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 83,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Escucha un sonido claro y en estéreo con los auriculares estéreo Xbox One que abarcan todo el espectro de audio: desde las notas más graves hasta notas agudas y nítidas. Es un modelo de auriculares fácil de configurar que se ajusta con comodidad sobre las orejas para partidas largas.            ',
        ]);
        
        DB::table('productos')->insert([
            'marca_id' => '5',
            'modelo' => 'Microsoft Headset Gaming',
            'tipo' => 'Auriculares',
            'precio' => 105,
            'imagen' => 'microsoftheadsetgaming.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 152,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Juega alto y claro con los Cascos estéreo Xbox, que ofrecen un chat ultranítido y son compatibles con el sonido espacial de alta fidelidad Windows Sonic, Dolby Atmos y DTS Headphone:X. El diseño flexible y ligero con diadema ajustable que utiliza acolchado suave para distribuir la presión de manera uniforme. Oye cada tono agudo nítido y cada tono estruendosos a través de controladores de 40 mm cableados de alta calidad.

            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '5',
            'modelo' => 'Microsoft Starfield Xbox',
            'tipo' => 'Auriculares',
            'precio' => 143,
            'imagen' => 'microsoftstarfield.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 152,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Explora las estrellas con los Auriculares inalámbricos Xbox  Starfield Limited Edition, que tiene una diadema roja y blanca con rayas de Constelación, un micrófono ajustable nítido que revela un altavoz interno de bronce y mucho más. Admite tecnologías de sonido espacial entre las estrellas como Windows Sonic, Dolby Atmos y DTS Headphone:X. Optimiza tu experiencia en toda la galaxia con la aplicación Accesorios de Xbox.
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '5',
            'modelo' => 'Microsoft Headset Wireless',
            'tipo' => 'Auriculares',
            'precio' => 105,
            'imagen' => 'microsoftheadsetwireless.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 156,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Juega alto y claro con el Auricular inalámbrico Xbox, y rodéate de tecnologías de sonido espacial como Windows Sonic, Dolby Atmos y DTS Headphone:X. El silencio automático y el aislamiento de voz reducen el ruido de fondo para poder charlar con gran nitidez. Su diseño flexible y ligero con una diadema ajustable permite disfrutar de una experiencia más cómoda durante largas sesiones de juego, mientras que con solo girar los diales de los audífonos puedes ajustar de forma rápida e intuitiva el volumen y el equilibrio entre juego y chat. Ajusta los auriculares con la aplicación Accesorios de Xbox para disfrutar de una experiencia de audio personalizada. Emparéjalo directamente con tu consola mediante la radio inalámbrica Xbox sin necesidad de usar llaves, cables ni una estación base y conéctate a tu dispositivo móvil mediante Bluetooth® para escuchar música o charlar estés donde estés; incluso puedes emparejarlo con tu teléfono y con la Xbox a la vez para charlar con un amigo en el teléfono mientras juegas en la consola *
            
            ',
        ]);

       

        DB::table('productos')->insert([
            'marca_id' => '5',
            'modelo' => 'Microsoft LifeChat LX-6000 ',
            'tipo' => 'Auriculares',
            'precio' => 114,
            'imagen' => 'microsoftlx-600.jpg',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 1,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
                Si desea charlar, jugar o escuchar música, hágalo bien y totalmente inmerso en lo que está haciendo. Póngase cómodo con los auriculares LifeChat LX-6000 y disfrute de la calidad del sonido digital que mejorará con unas almohadillas imitando piel que proporcionan total comodidad. 

                Gracias a la conexión USB, puede conectarse rápidamente. Y cuando esté listo para hablar, el micrófono con eliminación de ruidos le garantizará una escucha de nitidez absoluta.
            
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '4',
            'modelo' => 'HP G2 Auriculares ',
            'tipo' => 'Auriculares',
            'precio' => 114,
            'imagen' => 'hpg2negro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => null,
            'stock' => 2,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Te inspiran y te acompañan. Goza con el auténtico sonido estéreo inalámbrico y olvida las distracciones gracias a la reducción de sonido DPS.

            Los auriculares inalámbricos HP G2 están diseñados para aportar comodidad durante todo el día y durar mucho tiempo. Controla el sonido con un simple gesto y muévete sin limitaciones con Bluetooth® 5.
            
            ',
        ]);

        
        DB::table('productos')->insert([
            'marca_id' => '4',
            'modelo' => 'HP Pavilion 400',
            'tipo' => 'Auriculares',
            'precio' => 56,
            'imagen' => 'hppavilion400.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 3,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Mejora tu juego y entretenimiento a nuevas cotas con sonido estéreo de gran calidad y un diseño característico y elegante. Diseñado para amplificar tus juegos, música y películas, prepárate para una experiencia de audio inmersiva.


            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '4',
            'modelo' => 'HP DHE-7004 ',
            'tipo' => 'Auriculares',
            'precio' => 19,
            'imagen' => 'hpdhe.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 1,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Los audífonos HP Stereo Gaming con micrófono brindan comodidad y versatilidad para todas sus necesidades de juegos y entretenimiento de audio.

            Gran calidad de sonido y uso cómodo. Stereo Deep Bass con micrófono y control de volumen. Previene eficazmente los enredos naturales y garantiza un transporte y uso más convenientes.
            
            Compatibilidad multiplataforma, Smartphone, PC, PS4/5, Xbox One.

            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '4',
            'modelo' => 'HP Omen Minframe 2',
            'tipo' => 'Auriculares',
            'precio' => 199,
            'imagen' => 'hpomennegro.webp',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => true,
            'microfono' => true,
            'stock' => 1,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            La tecnología FrostCap y las almohadillas de refrigeración pasiva proporcionan comodidad durante las sesiones de juego, mientras que el sonido envolvente integrado te brinda una experiencia totalmente inmersiva

            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '4',
            'modelo' => 'HP Pavilion 600',
            'tipo' => 'Auriculares',
            'precio' => 51,
            'imagen' => 'hppavilion600.webp',
            'almacenamiento' => null,
            'color' => 'Negro / Verde',
            'ram' => null,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 1,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Mejora tu juego y entretenimiento a nuevas cotas con sonido estéreo de gran calidad y un diseño característico y elegante. Diseñado para amplificar tus juegos, música y películas, prepárate para una experiencia de audio inmersiva.


            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '4',
            'modelo' => 'HP DHH-3114',
            'tipo' => 'Auriculares',
            'precio' => 51,
            'imagen' => 'hpdhh.jpg',
            'almacenamiento' => null,
            'color' => 'Negro',
            'ram' => null,
            'bluetooth' => false,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 3,
            'tamaño' => null,
            'procesador' => null,
            'oferta_id' => null,
            'descripcion' => '
            Auriculares Stereo DHH-3114 con micrófono, control de volumen y compatibilidad multiplataforma, Smartphone, PC, PS4, Xbox One.

            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'iPhone 15 Plus',
            'tipo' => 'Movil',
            'precio' => 1059,
            'imagen' => 'iphone15plusrosa.webp',
            'almacenamiento' => 128,
            'color' => 'Rosa',
            'ram' => 8,
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'tamaño' => '6.7 pulgadas',
            'procesador' => 'A17',
            'oferta_id' => null,
            'descripcion' => '
            Apple iPhone 15. La Dynamic Island a la cabeza de todo. Nueva cámara de 48 Mpx. Fotos de altísima resolución. Teleobjetivo x2. Diseño superduro con aluminio y vidrio tintado en masa. El USB C llega a puerto.
            
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'iPhone 15 Plus',
            'tipo' => 'Movil',
            'precio' => 1059,
            'imagen' => 'iphone15plusverde.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Verde',
            'ram' => '8 GB',
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'tamaño' => '6.7 pulgadas',
            'procesador' => 'A17',
            'oferta_id' => null,
            'descripcion' => '
            Apple iPhone 15. La Dynamic Island a la cabeza de todo. Nueva cámara de 48 Mpx. Fotos de altísima resolución. Teleobjetivo x2. Diseño superduro con aluminio y vidrio tintado en masa. El USB C llega a puerto.
            
            ',
        ]);

        DB::table('productos')->insert([
            'marca_id' => '3',
            'modelo' => 'iPhone 15 Plus',
            'tipo' => 'Movil',
            'precio' => 1059,
            'imagen' => 'iphone15plusazul.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Azul',
            'ram' => '8 GB',
            'bluetooth' => true,
            'inalambrico' => false,
            'microfono' => true,
            'stock' => 6,
            'tamaño' => '6.7 pulgadas',
            'procesador' => 'A17',
            'oferta_id' => null,
            'descripcion' => '
            Apple iPhone 15. La Dynamic Island a la cabeza de todo. Nueva cámara de 48 Mpx. Fotos de altísima resolución. Teleobjetivo x2. Diseño superduro con aluminio y vidrio tintado en masa. El USB C llega a puerto.
            
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 14 Pro',
            'precio' => 1350,
            'imagen' => 'iphone15prooro.webp',
            'almacenamiento' => '512 GB',
            'color' => 'Morado Oscuro',
            'ram' => '6 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A15',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'El iPhone 14 Pro es el smartphone de gama alta de Apple con una pantalla OLED Super Retina XDR de 6,7 pulgadas con una resolución de 2778 x 1284 píxeles y un diseño elegante y sofisticado. Está alimentado por el nuevo chip A15 Bionic con un procesador de 6 núcleos y una GPU de 4 núcleos. Tiene una triple cámara trasera de 12MP con funciones avanzadas como el modo Noche, Deep Fusion y vídeo ProRes para hacer fotos de muy alta calidad. En resumen, el iPhone 13 Pro Max es un dispositivo de última generación que ofrece una combinación perfecta de diseño, rendimiento y funcionalidad.',

        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 14 Pro',
            'precio' => 999,
            'imagen' => 'iphone15prooro.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Oro',
            'ram' => '6 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A15',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'El iPhone 14 Pro es el smartphone de gama alta de Apple con una pantalla OLED Super Retina XDR de 6,7 pulgadas con una resolución de 2778 x 1284 píxeles y un diseño elegante y sofisticado. Está alimentado por el nuevo chip A15 Bionic con un procesador de 6 núcleos y una GPU de 4 núcleos. Tiene una triple cámara trasera de 12MP con funciones avanzadas como el modo Noche, Deep Fusion y vídeo ProRes para hacer fotos de muy alta calidad. En resumen, el iPhone 13 Pro Max es un dispositivo de última generación que ofrece una combinación perfecta de diseño, rendimiento y funcionalidad.',

        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 14 Pro',
            'precio' => 1299,
            'imagen' => 'iphone14pro.avif',
            'almacenamiento' => '512 GB',
            'color' => 'Morado Oscuro',
            'ram' => '6 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A15',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'El iPhone 14 Pro Max es el smartphone de gama alta de Apple con una pantalla OLED Super Retina XDR de 6,7 pulgadas con una resolución de 2778 x 1284 píxeles y un diseño elegante y sofisticado. Está alimentado por el nuevo chip A15 Bionic con un procesador de 6 núcleos y una GPU de 4 núcleos. Tiene una triple cámara trasera de 12MP con funciones avanzadas como el modo Noche, Deep Fusion y vídeo ProRes para hacer fotos de muy alta calidad. En resumen, el iPhone 13 Pro Max es un dispositivo de última generación que ofrece una combinación perfecta de diseño, rendimiento y funcionalidad.',

        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 11',
            'precio' => 299,
            'imagen' => 'iphone11negro.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Negro',
            'ram' => '4 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            La medida exacta de todo. Un nuevo sistema de cámara dual que abarca un campo de visión más amplio. El chip más rápido que haya tenido un smart­phone. Una batería que dura todo el día, para que hagas más y cargues menos. Y el vídeo de mayor calidad en un smart­phone, que hará que tus recuerdos sean aún más inolvidables. El iPhone 11 llega pisando fuerte.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 11',
            'precio' => 299,
            'imagen' => 'iphone11verde.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Negro',
            'ram' => '4 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            La medida exacta de todo. Un nuevo sistema de cámara dual que abarca un campo de visión más amplio. El chip más rápido que haya tenido un smart­phone. Una batería que dura todo el día, para que hagas más y cargues menos. Y el vídeo de mayor calidad en un smart­phone, que hará que tus recuerdos sean aún más inolvidables. El iPhone 11 llega pisando fuerte.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 3,
            'modelo' => 'iPhone 11',
            'precio' => 299,
            'imagen' => 'iphone11lila.avif',
            'almacenamiento' => '128 GB',
            'color' => 'Malva',
            'ram' => '4 GB',
            'tamaño' => '6.1 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            La medida exacta de todo. Un nuevo sistema de cámara dual que abarca un campo de visión más amplio. El chip más rápido que haya tenido un smart­phone. Una batería que dura todo el día, para que hagas más y cargues menos. Y el vídeo de mayor calidad en un smart­phone, que hará que tus recuerdos sean aún más inolvidables. El iPhone 11 llega pisando fuerte.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy S21 Ultra',
            'precio' => 495,
            'imagen' => 'galaxys21ultra.avif',
            'almacenamiento' => '128 GB',
            'color' => 'Negro',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Presentamos el nuevo Galaxy S21 Ultra 5G
                Diseñado con una exclusiva cámara que revolucionará el mundo de la fotografía. Ahora podrás grabar en 8K y sacar fotos inéditas a la vez. Además, el nuevo Galaxy incorpora un chip más rápido y potente, un cristal más fuerte, 5G y batería para todo el día.
                La mejor resolución en un Smartphone
                La cámara de 108 megapíxeles captura tantos detalles que puedes ampliar y revelar más imágenes en su interior.6 La calidad de esta cámara expresa datos de color para obtener detalles y tonalidades más realistas, que no se desvanecerán con el sol.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy S21 Ultra',
            'precio' => 495,
            'imagen' => 'galaxys21ultra.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Presentamos el nuevo Galaxy S21 Ultra 5G
                Diseñado con una exclusiva cámara que revolucionará el mundo de la fotografía. Ahora podrás grabar en 8K y sacar fotos inéditas a la vez. Además, el nuevo Galaxy incorpora un chip más rápido y potente, un cristal más fuerte, 5G y batería para todo el día.
                La mejor resolución en un Smartphone
                La cámara de 108 megapíxeles captura tantos detalles que puedes ampliar y revelar más imágenes en su interior.6 La calidad de esta cámara expresa datos de color para obtener detalles y tonalidades más realistas, que no se desvanecerán con el sol.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy S21 Ultra',
            'precio' => 460,
            'imagen' => 'galaxys21ultraplata.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Plata',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Presentamos el nuevo Galaxy S21 Ultra 5G
                Diseñado con una exclusiva cámara que revolucionará el mundo de la fotografía. Ahora podrás grabar en 8K y sacar fotos inéditas a la vez. Además, el nuevo Galaxy incorpora un chip más rápido y potente, un cristal más fuerte, 5G y batería para todo el día.
                La mejor resolución en un Smartphone
                La cámara de 108 megapíxeles captura tantos detalles que puedes ampliar y revelar más imágenes en su interior.6 La calidad de esta cámara expresa datos de color para obtener detalles y tonalidades más realistas, que no se desvanecerán con el sol.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy S21 Ultra',
            'precio' => 495,
            'imagen' => 'galaxys21ultraplata.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Plata',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Presentamos el nuevo Galaxy S21 Ultra 5G
                Diseñado con una exclusiva cámara que revolucionará el mundo de la fotografía. Ahora podrás grabar en 8K y sacar fotos inéditas a la vez. Además, el nuevo Galaxy incorpora un chip más rápido y potente, un cristal más fuerte, 5G y batería para todo el día.
                La mejor resolución en un Smartphone
                La cámara de 108 megapíxeles captura tantos detalles que puedes ampliar y revelar más imágenes en su interior.6 La calidad de esta cámara expresa datos de color para obtener detalles y tonalidades más realistas, que no se desvanecerán con el sol.

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Z Flip5',
            'precio' => 768,
            'imagen' => 'galaxyzflip5gris.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Gris',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                
                Déjate atrapar por su diseño

                Prepárate para convertirte en el centro de todas las miradas. Galaxy Z Flip5 presenta un exclusivo diseño plegable de gran resistencia con el que se convertirá en tu compañero inseparable. Descubre un mundo de nuevas posibilidades con una pantalla exterior de mayor tamaño y déjate sorprender por lo último de Samsung.
                No volverás a querer otros selfies

                Hacerse fotos nunca había resultado tan sencillo. Redefine la fotografía con el modo FlexCam y captura imágenes y vídeos desde cualquier ángulo. Combina la pantalla exterior con el potencial de las cámaras principales para retratarte o grabarte con la mejor calidad de imagen.



            '
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Z Flip5',
            'precio' => 768,
            'imagen' => 'galaxyzflip5lavanda.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Lavanda',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            
                Déjate atrapar por su diseño

                Prepárate para convertirte en el centro de todas las miradas. Galaxy Z Flip5 presenta un exclusivo diseño plegable de gran resistencia con el que se convertirá en tu compañero inseparable. Descubre un mundo de nuevas posibilidades con una pantalla exterior de mayor tamaño y déjate sorprender por lo último de Samsung.
                No volverás a querer otros selfies

                Hacerse fotos nunca había resultado tan sencillo. Redefine la fotografía con el modo FlexCam y captura imágenes y vídeos desde cualquier ángulo. Combina la pantalla exterior con el potencial de las cámaras principales para retratarte o grabarte con la mejor calidad de imagen.



            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Z Flip5',
            'precio' => 768,
            'imagen' => 'galaxyzflip5menta.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Lavanda',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Déjate atrapar por su diseño
                
                Prepárate para convertirte en el centro de todas las miradas. Galaxy Z Flip5 presenta un exclusivo diseño plegable de gran resistencia con el que se convertirá en tu compañero inseparable. Descubre un mundo de nuevas posibilidades con una pantalla exterior de mayor tamaño y déjate sorprender por lo último de Samsung.
                No volverás a querer otros selfies
                
                Hacerse fotos nunca había resultado tan sencillo. Redefine la fotografía con el modo FlexCam y captura imágenes y vídeos desde cualquier ángulo. Combina la pantalla exterior con el potencial de las cámaras principales para retratarte o grabarte con la mejor calidad de imagen.
                

            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Z Flip 3',
            'precio' => 492,
            'imagen' => 'galaxyzflip3.avif',
            'almacenamiento' => '128 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '6.7 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Galaxy Z Flip3 es todo lo que necesitas, El Galaxy Z Flip3 cumple hasta con los más exigentes. Es más ligero que una taza de café y ocupa la mitad que un smartphone convencional, pero sin renunciar a su pantalla de 6,7”. Además, desde su pantalla exterior de 1,9” puedes controlar tu música o consultar tus notificaciones, sin desplegarlo. Despliega tu Galaxy Z Flip3, ¡Se ajusta a lo que necesites! Disfruta del modo multiventana y trabaja con hasta dos apps a la vez. Mantenlo a 90°mientras te haces una foto con las manos libres, o abre una app y ajusta el contenido a la parte superior, mientras mantienes los controles en la inferior.
            ',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Z Flip 3',
            'precio' => 628,
            'imagen' => 'galaxyzflip3.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '6.7 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Galaxy Z Flip3 es todo lo que necesitas, El Galaxy Z Flip3 cumple hasta con los más exigentes. Es más ligero que una taza de café y ocupa la mitad que un smartphone convencional, pero sin renunciar a su pantalla de 6,7”. Además, desde su pantalla exterior de 1,9” puedes controlar tu música o consultar tus notificaciones, sin desplegarlo. Despliega tu Galaxy Z Flip3, ¡Se ajusta a lo que necesites! Disfruta del modo multiventana y trabaja con hasta dos apps a la vez. Mantenlo a 90°mientras te haces una foto con las manos libres, o abre una app y ajusta el contenido a la parte superior, mientras mantienes los controles en la inferior.
            ',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Z Flip 3',
            'precio' => 865,
            'imagen' => 'galaxyzflip3.avif',
            'almacenamiento' => '512 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '6.7 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Galaxy Z Flip3 es todo lo que necesitas, El Galaxy Z Flip3 cumple hasta con los más exigentes. Es más ligero que una taza de café y ocupa la mitad que un smartphone convencional, pero sin renunciar a su pantalla de 6,7”. Además, desde su pantalla exterior de 1,9” puedes controlar tu música o consultar tus notificaciones, sin desplegarlo. Despliega tu Galaxy Z Flip3, ¡Se ajusta a lo que necesites! Disfruta del modo multiventana y trabaja con hasta dos apps a la vez. Mantenlo a 90°mientras te haces una foto con las manos libres, o abre una app y ajusta el contenido a la parte superior, mientras mantienes los controles en la inferior.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s21',
            'precio' => 727,
            'imagen' => 'galaxys21rosa.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Púrpura',
            'ram' => '8 GB',
            'tamaño' => '6.2 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Haz que cada día sea épico, ¡Qué no se te escape la toma perfecta!. Galaxy S21 5G ha sido diseñado para revolucionar el vídeo y la fotografía, con una resolución 8K cinematográfica superior para que puedas extraer fotos impresionantes de tus grabaciones. ¡Haz de tu realidad algo épico! Visualiza los retratos como nunca. Captura fotos listas para tus redes sociales con total capacidad de edición. La IA analiza las caras y la luz natural, los ángulos y las direcciones: para garantizar que el sujeto queda enfocado y se vea siempre impresionante.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s21',
            'precio' => 759,
            'imagen' => 'galaxys21plata.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Púrpura',
            'ram' => '8 GB',
            'tamaño' => '6.2 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => 2,
            'descripcion' => '
            Haz que cada día sea épico, ¡Qué no se te escape la toma perfecta!. Galaxy S21 5G ha sido diseñado para revolucionar el vídeo y la fotografía, con una resolución 8K cinematográfica superior para que puedas extraer fotos impresionantes de tus grabaciones. ¡Haz de tu realidad algo épico! Visualiza los retratos como nunca. Captura fotos listas para tus redes sociales con total capacidad de edición. La IA analiza las caras y la luz natural, los ángulos y las direcciones: para garantizar que el sujeto queda enfocado y se vea siempre impresionante.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s21',
            'precio' => 759,
            'imagen' => 'galaxys21plata.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Púrpura',
            'ram' => '8 GB',
            'tamaño' => '6.2 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Haz que cada día sea épico, ¡Qué no se te escape la toma perfecta!. Galaxy S21 5G ha sido diseñado para revolucionar el vídeo y la fotografía, con una resolución 8K cinematográfica superior para que puedas extraer fotos impresionantes de tus grabaciones. ¡Haz de tu realidad algo épico! Visualiza los retratos como nunca. Captura fotos listas para tus redes sociales con total capacidad de edición. La IA analiza las caras y la luz natural, los ángulos y las direcciones: para garantizar que el sujeto queda enfocado y se vea siempre impresionante.',
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s22',
            'precio' => 540,
            'imagen' => 'galaxys22.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Blanco',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Tu nuevo estándar épico para todo, ahora todo lo que hagas será épico. Conoce el Galaxy S22 5G, diseñado para revolucionar tus vídeos y fotografías con la más alta resolución y calidad profesional. Con una cámara principal de 50 MP, un procesador todopoderoso de 4nm y una batería para todo el día las cosas se volverán impresionantes.
            ',
        ]);
        

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s22',
            'precio' => 540,
            'imagen' => 'galaxys22rosa.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Blanco',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Tu nuevo estándar épico para todo, ahora todo lo que hagas será épico. Conoce el Galaxy S22 5G, diseñado para revolucionar tus vídeos y fotografías con la más alta resolución y calidad profesional. Con una cámara principal de 50 MP, un procesador todopoderoso de 4nm y una batería para todo el día las cosas se volverán impresionantes.
            ',
        ]); 

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s22',
            'precio' => 540,
            'imagen' => 'galaxys22verde.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Blanco',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Tu nuevo estándar épico para todo, ahora todo lo que hagas será épico. Conoce el Galaxy S22 5G, diseñado para revolucionar tus vídeos y fotografías con la más alta resolución y calidad profesional. Con una cámara principal de 50 MP, un procesador todopoderoso de 4nm y una batería para todo el día las cosas se volverán impresionantes.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy s22',
            'precio' => 540,
            'imagen' => 'galaxys22negro.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Blanco',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Tu nuevo estándar épico para todo, ahora todo lo que hagas será épico. Conoce el Galaxy S22 5G, diseñado para revolucionar tus vídeos y fotografías con la más alta resolución y calidad profesional. Con una cámara principal de 50 MP, un procesador todopoderoso de 4nm y una batería para todo el día las cosas se volverán impresionantes.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi 13 Pro',
            'precio' => 390,
            'imagen' => 'xiaomiredmi13pro.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Morado',
            'ram' => '8 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Note 13 Pro no solo es un smartphone, es una auténtica revolución en diseño que no pasará desapercibida. Su acabado, que solo se encuentra en terminales premium, atraerá todas las miradas. Con una pantalla curva, este dispositivo se siente como una joya en tus manos, y su estilo es innegable. No contento con ser simplemente elegante, el Redmi Note 13 Pro también juega con sus colores para que encuentres el estilo perfecto para ti. Además, sus bordes planos facilitan un agarre preciso y cómodo.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi 13 Pro',
            'precio' => 390,
            'imagen' => 'xiaomiredmi13pro.webp',
            'almacenamiento' => '512 GB',
            'color' => 'Morado',
            'ram' => '8 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Note 13 Pro no solo es un smartphone, es una auténtica revolución en diseño que no pasará desapercibida. Su acabado, que solo se encuentra en terminales premium, atraerá todas las miradas. Con una pantalla curva, este dispositivo se siente como una joya en tus manos, y su estilo es innegable. No contento con ser simplemente elegante, el Redmi Note 13 Pro también juega con sus colores para que encuentres el estilo perfecto para ti. Además, sus bordes planos facilitan un agarre preciso y cómodo.
            ',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi 13 Pro',
            'precio' => 390,
            'imagen' => 'xiaomiredmi13proverde.webp',
            'almacenamiento' => '512 GB',
            'color' => 'Morado',
            'ram' => '12 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Note 13 Pro no solo es un smartphone, es una auténtica revolución en diseño que no pasará desapercibida. Su acabado, que solo se encuentra en terminales premium, atraerá todas las miradas. Con una pantalla curva, este dispositivo se siente como una joya en tus manos, y su estilo es innegable. No contento con ser simplemente elegante, el Redmi Note 13 Pro también juega con sus colores para que encuentres el estilo perfecto para ti. Además, sus bordes planos facilitan un agarre preciso y cómodo.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi 13 Pro',
            'precio' => 390,
            'imagen' => 'xiaomiredmi13proverde.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Morado',
            'ram' => '8 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Note 13 Pro no solo es un smartphone, es una auténtica revolución en diseño que no pasará desapercibida. Su acabado, que solo se encuentra en terminales premium, atraerá todas las miradas. Con una pantalla curva, este dispositivo se siente como una joya en tus manos, y su estilo es innegable. No contento con ser simplemente elegante, el Redmi Note 13 Pro también juega con sus colores para que encuentres el estilo perfecto para ti. Además, sus bordes planos facilitan un agarre preciso y cómodo.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Note 12',
            'precio' => 199,
            'imagen' => 'xiaomiredminote12.avif',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '6.67 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Redmi Note 12 cuenta con una triple cámara con IA de 48MP y una pantalla AMOLED de 120 Hz y con protección Corning® Gorilla® Glass para capturar e inmortalizar cualquier imagen con la máxima resolución. Aporta valor y confianza, Redmi Note 12 tiene una batería de 5,000 mAh que te permite aprovechar al máximo todas las opciones de entretenimiento a tu alcance. ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Note 12',
            'precio' => 199,
            'imagen' => 'xiaomiredmi12verde.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '6.67 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Redmi Note 12 cuenta con una triple cámara con IA de 48MP y una pantalla AMOLED de 120 Hz y con protección Corning® Gorilla® Glass para capturar e inmortalizar cualquier imagen con la máxima resolución. Aporta valor y confianza, Redmi Note 12 tiene una batería de 5,000 mAh que te permite aprovechar al máximo todas las opciones de entretenimiento a tu alcance. ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Note 12',
            'precio' => 199,
            'imagen' => 'xiaomiredmi12azul.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '6.67 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Redmi Note 12 cuenta con una triple cámara con IA de 48MP y una pantalla AMOLED de 120 Hz y con protección Corning® Gorilla® Glass para capturar e inmortalizar cualquier imagen con la máxima resolución. Aporta valor y confianza, Redmi Note 12 tiene una batería de 5,000 mAh que te permite aprovechar al máximo todas las opciones de entretenimiento a tu alcance. ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Note 12',
            'precio' => 199,
            'imagen' => 'xiaomiredmi12azul.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '6.67 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Redmi Note 12 cuenta con una triple cámara con IA de 48MP y una pantalla AMOLED de 120 Hz y con protección Corning® Gorilla® Glass para capturar e inmortalizar cualquier imagen con la máxima resolución. Aporta valor y confianza, Redmi Note 12 tiene una batería de 5,000 mAh que te permite aprovechar al máximo todas las opciones de entretenimiento a tu alcance. ',
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Note 12',
            'precio' => 199,
            'imagen' => 'xiaomiredminote12.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Gris',
            'ram' => '12 GB',
            'tamaño' => '6.67 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Redmi Note 12 cuenta con una triple cámara con IA de 48MP y una pantalla AMOLED de 120 Hz y con protección Corning® Gorilla® Glass para capturar e inmortalizar cualquier imagen con la máxima resolución. Aporta valor y confianza, Redmi Note 12 tiene una batería de 5,000 mAh que te permite aprovechar al máximo todas las opciones de entretenimiento a tu alcance. ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi 13 Pro',
            'precio' => 390,
            'imagen' => 'xiaomiredmi13pronegro.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Morado',
            'ram' => '8 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Note 13 Pro no solo es un smartphone, es una auténtica revolución en diseño que no pasará desapercibida. Su acabado, que solo se encuentra en terminales premium, atraerá todas las miradas. Con una pantalla curva, este dispositivo se siente como una joya en tus manos, y su estilo es innegable. No contento con ser simplemente elegante, el Redmi Note 13 Pro también juega con sus colores para que encuentres el estilo perfecto para ti. Además, sus bordes planos facilitan un agarre preciso y cómodo.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi 13 Pro',
            'precio' => 390,
            'imagen' => 'xiaomiredmi13pronegro.webp',
            'almacenamiento' => '512 GB',
            'color' => 'Morado',
            'ram' => '8 GB',
            'tamaño' => '6.8 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
            Redmi Note 13 Pro no solo es un smartphone, es una auténtica revolución en diseño que no pasará desapercibida. Su acabado, que solo se encuentra en terminales premium, atraerá todas las miradas. Con una pantalla curva, este dispositivo se siente como una joya en tus manos, y su estilo es innegable. No contento con ser simplemente elegante, el Redmi Note 13 Pro también juega con sus colores para que encuentres el estilo perfecto para ti. Además, sus bordes planos facilitan un agarre preciso y cómodo.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2021 10.2" ',
            'precio' => 349,
            'imagen' => 'ipad10.avif',
            'almacenamiento' => '64 GB',
            'color' => 'Gris Espacial',
            'ram' => '3 GB',
            'tamaño' => '10.2 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2021 10.2" ',
            'precio' => 349,
            'imagen' => 'ipad10.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Gris Espacial',
            'ram' => '3 GB',
            'tamaño' => '10.2 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2022 10.9" ',
            'precio' => 349,
            'imagen' => 'ipad10_9_2022_plata.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Plata',
            'ram' => '6 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2022 10.9" ',
            'precio' => 349,
            'imagen' => 'ipad10_9_2022_plata.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Plata',
            'ram' => '6 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2022 10.9" ',
            'precio' => 349,
            'imagen' => 'ipad10_9_2022_rosa.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Rosa',
            'ram' => '6 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2022 10.9" ',
            'precio' => 349,
            'imagen' => 'ipad10_9_2022_rosa.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Rosa',
            'ram' => '6 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2022 10.9" ',
            'precio' => 349,
            'imagen' => 'ipad10_9_2022_azul.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Azul',
            'ram' => '6 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad 2022 10.9" ',
            'precio' => 349,
            'imagen' => 'ipad10_9_2022_azul.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Azul',
            'ram' => '6 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => 'Potente, versátil y sencillísimo de usar. El nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más. Todo por menos de lo que te imaginas.
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad Air 2022',
            'precio' => 750,
            'imagen' => 'ipadair2022blanco.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Blanco Estrella',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                iPad Air 2022: Diseño a toda pantalla. Belleza sin límites.

                La pantalla Liquid Retina de 10,9 pulgadas te mete de lleno en lo que haces. Y con prestaciones tan avanzadas como True Tone, la gama cromática amplia (P3) y la película antirreflectante, no le quitarás ojo. Lee, crea o devora series, todo a nivel ninja.

                Touch ID está integrado en el botón superior, así que puedes usar tu huella para desbloquear el iPad, iniciar sesión en apps y pagar de forma segura con Apple Pay. Además, el iPad Air viene en cinco colores alucinantes. Difícil elección.
            
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad Air 2022',
            'precio' => 625,
            'imagen' => 'ipadair2022gris.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris Espacial',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                iPad Air 2022: Diseño a toda pantalla. Belleza sin límites.

                La pantalla Liquid Retina de 10,9 pulgadas te mete de lleno en lo que haces. Y con prestaciones tan avanzadas como True Tone, la gama cromática amplia (P3) y la película antirreflectante, no le quitarás ojo. Lee, crea o devora series, todo a nivel ninja.

                Touch ID está integrado en el botón superior, así que puedes usar tu huella para desbloquear el iPad, iniciar sesión en apps y pagar de forma segura con Apple Pay. Además, el iPad Air viene en cinco colores alucinantes. Difícil elección.
            
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad Air 2022',
            'precio' => 750,
            'imagen' => 'ipadair2022gris.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Gris Espacial',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                iPad Air 2022: Diseño a toda pantalla. Belleza sin límites.

                La pantalla Liquid Retina de 10,9 pulgadas te mete de lleno en lo que haces. Y con prestaciones tan avanzadas como True Tone, la gama cromática amplia (P3) y la película antirreflectante, no le quitarás ojo. Lee, crea o devora series, todo a nivel ninja.

                Touch ID está integrado en el botón superior, así que puedes usar tu huella para desbloquear el iPad, iniciar sesión en apps y pagar de forma segura con Apple Pay. Además, el iPad Air viene en cinco colores alucinantes. Difícil elección.
            
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad Air 2022',
            'precio' => 625,
            'imagen' => 'ipadair2022purpura.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Purpura',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                iPad Air 2022: Diseño a toda pantalla. Belleza sin límites.

                La pantalla Liquid Retina de 10,9 pulgadas te mete de lleno en lo que haces. Y con prestaciones tan avanzadas como True Tone, la gama cromática amplia (P3) y la película antirreflectante, no le quitarás ojo. Lee, crea o devora series, todo a nivel ninja.

                Touch ID está integrado en el botón superior, así que puedes usar tu huella para desbloquear el iPad, iniciar sesión en apps y pagar de forma segura con Apple Pay. Además, el iPad Air viene en cinco colores alucinantes. Difícil elección.
            
            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 3,
            'modelo' => 'iPad Air 2022',
            'precio' => 750,
            'imagen' => 'ipadair2022purpura.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Purpura',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'A13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                iPad Air 2022: Diseño a toda pantalla. Belleza sin límites.

                La pantalla Liquid Retina de 10,9 pulgadas te mete de lleno en lo que haces. Y con prestaciones tan avanzadas como True Tone, la gama cromática amplia (P3) y la película antirreflectante, no le quitarás ojo. Lee, crea o devora series, todo a nivel ninja.

                Touch ID está integrado en el botón superior, así que puedes usar tu huella para desbloquear el iPad, iniciar sesión en apps y pagar de forma segura con Apple Pay. Además, el iPad Air viene en cinco colores alucinantes. Difícil elección.
            
            ',
        ]);

       

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A9',
            'precio' => 299,
            'imagen' => 'taba9gris.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'Android 13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => 4,
            'descripcion' => '
            Con el diseño por bandera. Cada elemento del aspecto de Galaxy Tab A9+ ha sido cuidado hasta el milímetro para dar lugar a una tablet elegante que mantiene el equilibrio entre las estéticas clásica y moderna. Puedes conseguirla en uno de los colores característicos de Samsung: Graphite o Silver.


            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A9',
            'precio' => 299,
            'imagen' => 'taba9plata.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'Android 13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => 4,
            'descripcion' => '
            Con el diseño por bandera. Cada elemento del aspecto de Galaxy Tab A9+ ha sido cuidado hasta el milímetro para dar lugar a una tablet elegante que mantiene el equilibrio entre las estéticas clásica y moderna. Puedes conseguirla en uno de los colores característicos de Samsung: Graphite o Silver.


            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A9',
            'precio' => 299,
            'imagen' => 'taba9plata.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '10.9 pulgadas',
            'procesador' => 'Android 13',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => true,
            'stock' => 6,
            'oferta_id' => 4,
            'descripcion' => '
            Con el diseño por bandera. Cada elemento del aspecto de Galaxy Tab A9+ ha sido cuidado hasta el milímetro para dar lugar a una tablet elegante que mantiene el equilibrio entre las estéticas clásica y moderna. Puedes conseguirla en uno de los colores característicos de Samsung: Graphite o Silver.


            ',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy tab 8 Ultra',
            'precio' => 850,
            'imagen' => 'galaxytabs8ultra.avif',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '12 GB',
            'tamaño' => '14.6 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            Presentamos Galaxy Tab S8 Ultra, diseñada para cambiar la forma en la que juegas y trabajas para siempre. Te presentamos la pantalla más grande, más versátil y con mejor calidad de la familia Tab S. Es una Tablet, un ordenador, una hoja de papel, un lienzo para tus obras de arte y mucho más. Galaxy Tab S8 Ultra el primer Galaxy S con S Pen integrado en su interior. Galaxy Tab S8 Ultra es tu compañera ideal para trabajar, estudiar o jugar. Llévala a todas partes, siempre estará lista para usar. Sumérgete en tus contenidos multimedia o concéntrate en tu trabajo en una gran pantalla ultrafluida, colorida y brillante. Todo se verá tan claro y nítido que la amarás.',
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy tab 8 Ultra',
            'precio' => 850,
            'imagen' => 'galaxytabs8ultra.avif',
            'almacenamiento' => '512 GB',
            'color' => 'Negro',
            'ram' => '12 GB',
            'tamaño' => '14.6 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            Presentamos Galaxy Tab S8 Ultra, diseñada para cambiar la forma en la que juegas y trabajas para siempre. Te presentamos la pantalla más grande, más versátil y con mejor calidad de la familia Tab S. Es una Tablet, un ordenador, una hoja de papel, un lienzo para tus obras de arte y mucho más. Galaxy Tab S8 Ultra el primer Galaxy S con S Pen integrado en su interior. Galaxy Tab S8 Ultra es tu compañera ideal para trabajar, estudiar o jugar. Llévala a todas partes, siempre estará lista para usar. Sumérgete en tus contenidos multimedia o concéntrate en tu trabajo en una gran pantalla ultrafluida, colorida y brillante. Todo se verá tan claro y nítido que la amarás.',
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab S6 Lite',
            'precio' => 279,
            'imagen' => 'tab6gris.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '10.4 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '

        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab S6 Lite',
            'precio' => 299,
            'imagen' => 'tab6gris.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '10.4 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab S6 Lite',
            'precio' => 279,
            'imagen' => 'tab6azul.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Azul',
            'ram' => '8 GB',
            'tamaño' => '10.4 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab S6 Lite',
            'precio' => 299,
            'imagen' => 'tab6azul.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Azul',
            'ram' => '8 GB',
            'tamaño' => '10.4 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
            
        ]);
        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 189,
            'imagen' => 'taba8gris.webp',
            'almacenamiento' => '32 GB',
            'color' => 'Gris',
            'ram' => '3 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 225,
            'imagen' => 'taba8gris.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 239,
            'imagen' => 'taba8gris.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
            
        ]);
        

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 189,
            'imagen' => 'taba8plata.webp',
            'almacenamiento' => '32 GB',
            'color' => 'Gris',
            'ram' => '3 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 225,
            'imagen' => 'taba8plata.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 239,
            'imagen' => 'taba8plata.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 189,
            'imagen' => 'taba8rosa.webp',
            'almacenamiento' => '32 GB',
            'color' => 'Gris',
            'ram' => '3 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 225,
            'imagen' => 'taba8rosa.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 1,
            'modelo' => 'Samsung Galaxy Tab A8',
            'precio' => 239,
            'imagen' => 'taba8rosa.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La nueva Galaxy Tab S6 Lite incorpora un nuevo diseño, con unos biseles reducidos de tan solo 9mm de grosor y un acabado en metal en la parte trasera que hace que sea ligera, con 460Gr de peso. Gracias a su pantalla de 10.4" y sus dos altavoces podrás disfrutar de tu contenido multimedia estés donde estés.

            El nuevo S Pen de Galaxy Tab S6 Lite permite una experiencia de escritura más fluida gracias a su menor latencia. Combinado con Samsung Notes, tendrás una herramienta potente capaz de transcribir texto manuscrito en digital y poder exportarlo a múltiples formatos.
            
            Galaxy Tab S6 Lite permite una experiencia adaptada gracias a One UI e incopora asociaciones con apps como Youtube, Netflix o Spotify para obtener beneficios.

            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Pad SE',
            'precio' => 170,
            'imagen' => 'padsegris.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

                Diseño portátil, compacto y ligero. Llévate tu Redmi Pad SE a todas partes. Diversión en estado puro.

                La gran pantalla FHD+ de 11" con 16,7 millones de colores y una tasa de refresco fluida de 90 Hz con AdaptiveSync, garantiza una experiencia visual nítida y fluida para tu entretenimiento del día a día.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Pad SE',
            'precio' => 299,
            'imagen' => 'padsegris.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Gris',
            'ram' => '8 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

                Diseño portátil, compacto y ligero. Llévate tu Redmi Pad SE a todas partes. Diversión en estado puro.

                La gran pantalla FHD+ de 11" con 16,7 millones de colores y una tasa de refresco fluida de 90 Hz con AdaptiveSync, garantiza una experiencia visual nítida y fluida para tu entretenimiento del día a día.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Pad SE',
            'precio' => 170,
            'imagen' => 'padsemorado.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Morado',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

                Diseño portátil, compacto y ligero. Llévate tu Redmi Pad SE a todas partes. Diversión en estado puro.

                La gran pantalla FHD+ de 11" con 16,7 millones de colores y una tasa de refresco fluida de 90 Hz con AdaptiveSync, garantiza una experiencia visual nítida y fluida para tu entretenimiento del día a día.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Pad SE',
            'precio' => 299,
            'imagen' => 'padsemorado.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Morado',
            'ram' => '8 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

                Diseño portátil, compacto y ligero. Llévate tu Redmi Pad SE a todas partes. Diversión en estado puro.

                La gran pantalla FHD+ de 11" con 16,7 millones de colores y una tasa de refresco fluida de 90 Hz con AdaptiveSync, garantiza una experiencia visual nítida y fluida para tu entretenimiento del día a día.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Redmi Pad SE',
            'precio' => 170,
            'imagen' => 'padseverde.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Verde',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

                Diseño portátil, compacto y ligero. Llévate tu Redmi Pad SE a todas partes. Diversión en estado puro.

                La gran pantalla FHD+ de 11" con 16,7 millones de colores y una tasa de refresco fluida de 90 Hz con AdaptiveSync, garantiza una experiencia visual nítida y fluida para tu entretenimiento del día a día.
            '
            
            
        ]);



        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 6',
            'precio' => 300,
            'imagen' => 'pad6dorado.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Dorado',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '


            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 6',
            'precio' => 373,
            'imagen' => 'pad6dorado.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Dorado',
            'ram' => '8 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 6',
            'precio' => 300,
            'imagen' => 'pad6azul.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Azul',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '


            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 6',
            'precio' => 373,
            'imagen' => 'pad6azul.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Azul',
            'ram' => '8 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 4',
            'precio' => 150,
            'imagen' => 'pad4gris.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Gris',
            'ram' => '3 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 4',
            'precio' => 197,
            'imagen' => 'pad4gris.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '


            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 4',
            'precio' => 150,
            'imagen' => 'pad4plata.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Plata Lunar',
            'ram' => '3 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);


        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 2,
            'modelo' => 'Xiaomi Pad 4',
            'precio' => 197,
            'imagen' => 'pad4plata.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Plata Lunar',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '


            La Xiaomi Pad 6 es una tablet de alta calidad fabricada por Xiaomi, una conocida marca de dispositivos electrónicos. Con un diseño elegante y compacto, esta tablet ofrece un rendimiento potente y una pantalla nítida de alta resolución para disfrutar de contenido multimedia y realizar tareas productivas. Su sistema operativo y aplicaciones optimizadas proporcionan una experiencia fluida y versátil, convirtiéndola en una excelente opción para usuarios que buscan una tablet moderna y eficiente.
            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 8,
            'modelo' => 'Lenovo Tab M10 Plus',
            'precio' => 279,
            'imagen' => 'lenovotabm10.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '11 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '


            Todo lo que la tablet Lenovo Tab P12 te exige es que te tomes un tiempo para ti. Disfruta de sonidos e imágenes cinematográficos en cualquier sitio con una calidad de transmisión de 1080p y altavoces JBL equipados con tecnología Dolby Atmos®. Relájate por completo con el sofisticado ajuste de luz ambiental que se adapta a tu disfrute visual y al brillo de tu entorno. Siéntate, transmite y relájate con una pantalla de 32,26 cm (12,7") fabricada especialmente para que te diviertas, tanto si estás realizando un curso como si te estás preparando para un examen.            '
            
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Tablet',
            'marca_id' => 8,
            'modelo' => 'Lenovo Tab P12',
            'precio' => 279,
            'imagen' => 'lenovotabm10.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Gris',
            'ram' => '4 GB',
            'tamaño' => '12.7 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            Todo lo que la tablet Lenovo Tab P12 te exige es que te tomes un tiempo para ti. Disfruta de sonidos e imágenes cinematográficos en cualquier sitio con una calidad de transmisión de 1080p y altavoces JBL equipados con tecnología Dolby Atmos®. Relájate por completo con el sofisticado ajuste de luz ambiental que se adapta a tu disfrute visual y al brillo de tu entorno. Siéntate, transmite y relájate con una pantalla de 32,26 cm (12,7") fabricada especialmente para que te diviertas, tanto si estás realizando un curso como si te estás preparando para un examen.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 9,
            'modelo' => 'Huawei Y6s',
            'precio' => 185,
            'imagen' => 'huaweiy6s.webp',
            'almacenamiento' => '64 GB',
            'color' => 'Negro',
            'ram' => '4 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La pantalla de 6.09"del HUAWEI Y6s, ratio de pantalla-cuerpo de hasta 87% y, junto a un notch mucho más pequeño, ofrece una experiencia de visión más visionaria e inmersiva. La cámara trasera de 13MP, f / 1.8, proporciona una excelente experiencia de fotografía diurna y nocturna; además, la cámara frontal de 8 MP con flash es la mejor opción para tomar selfies impresionantes en cualquier entorno.

            Y si quieres escuchar música, la tecnología HUAWEI SuperSound tiene una calidad de sonido ejemplar a altos niveles de volumen.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 9,
            'modelo' => 'Huawei P50 Pro',
            'precio' => 185,
            'imagen' => 'huaweip50pro.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La pantalla de 6.09"del HUAWEI Y6s, ratio de pantalla-cuerpo de hasta 87% y, junto a un notch mucho más pequeño, ofrece una experiencia de visión más visionaria e inmersiva. La cámara trasera de 13MP, f / 1.8, proporciona una excelente experiencia de fotografía diurna y nocturna; además, la cámara frontal de 8 MP con flash es la mejor opción para tomar selfies impresionantes en cualquier entorno.

            Y si quieres escuchar música, la tecnología HUAWEI SuperSound tiene una calidad de sonido ejemplar a altos niveles de volumen.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 10,
            'modelo' => 'Honor 70',
            'precio' => 658,
            'imagen' => 'honor70verde.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Verde',
            'ram' => '8 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La pantalla de 6.09"del HUAWEI Y6s, ratio de pantalla-cuerpo de hasta 87% y, junto a un notch mucho más pequeño, ofrece una experiencia de visión más visionaria e inmersiva. La cámara trasera de 13MP, f / 1.8, proporciona una excelente experiencia de fotografía diurna y nocturna; además, la cámara frontal de 8 MP con flash es la mejor opción para tomar selfies impresionantes en cualquier entorno.

            Y si quieres escuchar música, la tecnología HUAWEI SuperSound tiene una calidad de sonido ejemplar a altos niveles de volumen.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 10,
            'modelo' => 'Honor 70',
            'precio' => 658,
            'imagen' => 'honor70verde.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Verde',
            'ram' => '8 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La pantalla de 6.09"del HUAWEI Y6s, ratio de pantalla-cuerpo de hasta 87% y, junto a un notch mucho más pequeño, ofrece una experiencia de visión más visionaria e inmersiva. La cámara trasera de 13MP, f / 1.8, proporciona una excelente experiencia de fotografía diurna y nocturna; además, la cámara frontal de 8 MP con flash es la mejor opción para tomar selfies impresionantes en cualquier entorno.

            Y si quieres escuchar música, la tecnología HUAWEI SuperSound tiene una calidad de sonido ejemplar a altos niveles de volumen.

            '
            
        ]);

        
        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 10,
            'modelo' => 'Honor 70',
            'precio' => 658,
            'imagen' => 'honor70negro.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La pantalla de 6.09"del HUAWEI Y6s, ratio de pantalla-cuerpo de hasta 87% y, junto a un notch mucho más pequeño, ofrece una experiencia de visión más visionaria e inmersiva. La cámara trasera de 13MP, f / 1.8, proporciona una excelente experiencia de fotografía diurna y nocturna; además, la cámara frontal de 8 MP con flash es la mejor opción para tomar selfies impresionantes en cualquier entorno.

            Y si quieres escuchar música, la tecnología HUAWEI SuperSound tiene una calidad de sonido ejemplar a altos niveles de volumen.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 10,
            'modelo' => 'Honor 70',
            'precio' => 658,
            'imagen' => 'honor70negro.webp',
            'almacenamiento' => '128 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
            La pantalla de 6.09"del HUAWEI Y6s, ratio de pantalla-cuerpo de hasta 87% y, junto a un notch mucho más pequeño, ofrece una experiencia de visión más visionaria e inmersiva. La cámara trasera de 13MP, f / 1.8, proporciona una excelente experiencia de fotografía diurna y nocturna; además, la cámara frontal de 8 MP con flash es la mejor opción para tomar selfies impresionantes en cualquier entorno.

            Y si quieres escuchar música, la tecnología HUAWEI SuperSound tiene una calidad de sonido ejemplar a altos niveles de volumen.

            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 12,
            'modelo' => 'Alcatel 1 (2021)',
            'precio' => 437,
            'imagen' => 'alcatel.webp',
            'almacenamiento' => '16 GB',
            'color' => 'Negro',
            'ram' => '1 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '
                LG V40 ThinQ: El primer smartphone con 5 cámaras y pantalla OLED. Este Smartphone cuenta con 5 cámaras fotografías perfectas en cualquier situación, sonido Hi-Fi Quad DAC, altavoz Boombox y DTS:X 3D. 
            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 13,
            'modelo' => 'Nothing Phone 1',
            'precio' => 659,
            'imagen' => 'nothingphone.webp',
            'almacenamiento' => '256 GB',
            'color' => 'Negro',
            'ram' => '8 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

            Menos distracciones. Más alma.

            Solo puro instinto, pero en una máquina. Que se comunica a través de increíbles símbolos e interacciones que calan más hondo. Simplemente, sencillez.

                Phone (1) nos trae de vuelta. A nosotros.
            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Movil',
            'marca_id' => 13,
            'modelo' => 'Nothing Phone 2',
            'precio' => 669,
            'imagen' => 'nothing.jpg',
            'almacenamiento' => '256 GB',
            'color' => 'Blanco',
            'ram' => '12 GB',
            'tamaño' => '10.5 pulgadas',
            'procesador' => null,
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 5,
            'oferta_id' => null,
            'descripcion' => '

            Menos distracciones. Más alma.

            Solo puro instinto, pero en una máquina. Que se comunica a través de increíbles símbolos e interacciones que calan más hondo. Simplemente, sencillez.

                Phone (1) nos trae de vuelta. A nosotros.
            '
            
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Apple Macbook Air',
            'precio' => 846,
            'imagen' => 'macairmid.webp',
            'almacenamiento' => '256 GB ',
            'color' => 'Midnight',
            'ram' => '8 GB',
            'tamaño' => '13.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Revolucionado con el nuevo chip M2, el MacBook Air cautiva no solo por el diseño ultrafino sino por la rapidez y eficiencia que esconde su resistente carcasa de aluminio. Con un ordenador tan versátil podrás trabajar, jugar y liberar toda tu creatividad vayas donde vayas.           
            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Apple Macbook Air',
            'precio' => 1120,
            'imagen' => 'macairmid.webp',
            'almacenamiento' => '516 GB ',
            'color' => 'Midnight',
            'ram' => '8 GB',
            'tamaño' => '13.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Revolucionado con el nuevo chip M2, el MacBook Air cautiva no solo por el diseño ultrafino sino por la rapidez y eficiencia que esconde su resistente carcasa de aluminio. Con un ordenador tan versátil podrás trabajar, jugar y liberar toda tu creatividad vayas donde vayas.            
            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Apple Macbook Air',
            'precio' => 846,
            'imagen' => 'macairplata.webp',
            'almacenamiento' => '256 GB ',
            'color' => 'Plata',
            'ram' => '8 GB',
            'tamaño' => '13.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Revolucionado con el nuevo chip M2, el MacBook Air cautiva no solo por el diseño ultrafino sino por la rapidez y eficiencia que esconde su resistente carcasa de aluminio. Con un ordenador tan versátil podrás trabajar, jugar y liberar toda tu creatividad vayas donde vayas.           
            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Apple Macbook Air',
            'precio' => 1120,
            'imagen' => 'macairplata.webp',
            'almacenamiento' => '516 GB ',
            'color' => 'Plata',
            'ram' => '8 GB',
            'tamaño' => '13.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Revolucionado con el nuevo chip M2, el MacBook Air cautiva no solo por el diseño ultrafino sino por la rapidez y eficiencia que esconde su resistente carcasa de aluminio. Con un ordenador tan versátil podrás trabajar, jugar y liberar toda tu creatividad vayas donde vayas.            
            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Apple Macbook Air',
            'precio' => 846,
            'imagen' => 'macairblanco.webp',
            'almacenamiento' => '256 GB ',
            'color' => 'Blanco',
            'ram' => '8 GB',
            'tamaño' => '13.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Revolucionado con el nuevo chip M2, el MacBook Air cautiva no solo por el diseño ultrafino sino por la rapidez y eficiencia que esconde su resistente carcasa de aluminio. Con un ordenador tan versátil podrás trabajar, jugar y liberar toda tu creatividad vayas donde vayas.           
            '
        ]);

        DB::table('productos')->insert([
            'tipo' => 'Portatil',
            'marca_id' => 3,
            'modelo' => 'Apple Macbook Air',
            'precio' => 1120,
            'imagen' => 'macairblanco.webp',
            'almacenamiento' => '516 GB ',
            'color' => 'Blanco',
            'ram' => '8 GB',
            'tamaño' => '13.6 pulgadas',
            'procesador' => 'Core i5',
            'bluetooth' => null,
            'inalambrico' => null,
            'microfono' => null,
            'stock' => 6,
            'oferta_id' => null,
            'descripcion' => '
                Revolucionado con el nuevo chip M2, el MacBook Air cautiva no solo por el diseño ultrafino sino por la rapidez y eficiencia que esconde su resistente carcasa de aluminio. Con un ordenador tan versátil podrás trabajar, jugar y liberar toda tu creatividad vayas donde vayas.            
            '
        ]);
    }
}

