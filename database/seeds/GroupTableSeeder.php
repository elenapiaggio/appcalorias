<?php
use Illuminate\Database\Seeder;
Use Faker\Factory as Faker;
Use Faker\Provider\en_US\Person;

/**
 * Class GroupTableSeeder
 * Se encarga de generar datos de prueba para la tabla
 * 'Groups'
 */
class GroupTableSeeder extends Seeder{

    /**
     * Método run
     * Inicializa las funciones createAdmin y createUser
     */
    public function run(){
        $this->createGroups(9);
    }

    /**
     * Función que crea los diferentes 'groups' a los que puede
     * pertenecer un alimento
     */
    private function createGroups($total){
        $faker = Faker::create();
        for($i=0; $i<$total; $i++){
            \DB::table('groups')->insert(array(
                'name'  => $faker->unique()->randomElement($array = array ('propagation','fish', 'fast', 'prepared',
                    'meats', 'poultry', 'vegetables', 'fruits', 'cereals'))
            ));
        }
    }

}
?>