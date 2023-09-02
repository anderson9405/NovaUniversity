<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group = new Group;
        $group->name='Electiva profesional';
        $group->description='Programación en laravel';
        $group->code='EP1';
        $group->image='./img/electiva1.jpg';
        $group->teacher_id=1;
        $group->save();

        $group = new Group;
        $group->name='Costos';
        $group->description='Sistemas de costeo financiero';
        $group->code='CTS1';
        $group->image='./img/costos.jpg';
        $group->teacher_id=2;
        $group->save();

        $group = new Group;
        $group->name='Electrónica';
        $group->description='Hardware y sistemas electrónicos';
        $group->code='ETC';
        $group->image='./img/electronica.jpg';
        $group->teacher_id=3;
        $group->save();

        $group = new Group;
        $group->name='Medicamentos';
        $group->description='Medicamentos para curar enfermedades';
        $group->code='MDC';
        $group->image='./img/no-image.jpg';
        $group->teacher_id=4;
        $group->save();
        
        $group = new Group;
        $group->name='Fundamentos de derecho';
        $group->description='Bases de la normatividad actual';
        $group->code='FDD';
        $group->image='./img/no-image.jpg';
        $group->teacher_id=5;
        $group->save();
    }
}