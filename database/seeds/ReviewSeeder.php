<?php

use App\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $review = new Review();
        $review->name = 'Sonnia León';
        $review->description = 'Haber asistido a las charlas sobre "Salud Integral" y "Fortaleciendo Familias" me ha ayudado mucho en mi vida personal y me ha dado las herramientas para mejorar las relaciones con mi familia. Ahora me siento más abierta al diálogo con los demás y dispuesta a aceptar sus diferencias. En lo espiritual, estas charlas me han enseñado a mirar con compasión las debilidades de otros y a usar la fuerza interior que Dios me da para hacer cambios dentro de mí. El tema de los temperamentos del ser humano lo encuentro fascinante! Descubrir nuestros temperamentos es importante y necesario para una convivencia en armonía y éxito en toda clase de relaciones. Recomiendo mucho ambos cursos, no sólo por la riqueza de sus contenidos sino también por lo agradable y ameno que Ivette como Coach los hace. Gracias querida Ivette por tu dedicación, tiempo, cariño y deseo de compartir tus conocimientos para que los demás encontremos un mejor modo de vivir.';
        $review->active = true;
        $review->save();

        $review = new Review();
        $review->name = 'Nilmarie Álvarez';
        $review->description = 'Haber llegado a las manos de la Coach Ivette, ha sido un regalo de vida insustituible. Recuperar la tranquilidad para manejar las situaciones estresantes ya es cosa del pasado. Superar el miedo y la ansiedad fueron a mi entender, los dos retos mas grandes con los cuales tuvo que trabajar mi Coach Ivette para ayudarme a alcanzar mis metas. Hoy doy testimonio de que puedo caminar con mi frente en alto sin el temor del cual vivia presa por tantos años. Coach que pueda usted seguir sanado familias con su paz y dedicación. Dios le bendiga.';
        $review->active = true;
        $review->save();

        $review = new Review();
        $review->name = 'Denisse Rodríguez';
        $review->description = 'Participar del Taller de Salud Integral ha sido para mí de gran crecimiento. Conocer mi temperamento con sus fortalezas y debilidades ha sido de gran ayuda para desarrollar el propósito que Dios tiene para mi vida. Agradezco a Coach Ivette por su guía, paciencia pero sobretodo por las técnicas aprendidas para seguir desarrollando mi máximo potencial y vivir en paz, bendición y salud.';
        $review->active = true;
        $review->save();
        

    }
}
