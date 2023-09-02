<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $career=new Career;
        $career->name='Programación';
        $career->description='Tecnología en programación de aplicaciones y software';
        $career->save();

        $career=new Career;
        $career->name='Contabilidad';
        $career->description='Contabilidad y normatividad tributaria';
        $career->save();

        $career=new Career;
        $career->name='Ingeniería de sistemas';
        $career->description='Ingeniería en desarrollo y mantenimiento de hardware y software';
        $career->save();

        $career=new Career;
        $career->name='Medicina';
        $career->description=' orientada a la formación de profesionales de la salud que diagnostican, tratan y previenen enfermedades y lesiones en pacientes, con un enfoque en la atención médica.';
        $career->save();

        $career=new Career;
        $career->name='Derecho';
        $career->description='La carrera de Derecho prepara a los estudiantes para trabajar en el sistema legal, representando a clientes, resolviendo conflictos y defendiendo los derechos individuales';
        $career->save();



    }
}
