<?php
use Illuminate\Database\Seeder;
Use Faker\Factory as Faker;
Use Faker\Provider\en_US\Person;

/**
 * Class FoodTableSeeder
 * Se encarga de generar datos de prueba para las tablas
 * Foods, Properties y Groups
 */
class FoodTableSeeder extends Seeder{

    /**
     * Método run
     * Inicializa las funciones createAdmin y createUser
     */
    public function run(){
        $this->createFoods(30);
    }

    /**
     * Función que inserta registros de prueba a nuestra BD
     * en la tabla 'Foods' y 'Properties'
     * @param $total Número de registros que se quiere generar
     */
    public function createFoods($total){
        for($i=0; $i<=$total; $i++){
            $faker = Faker::create();

            // datos para la tabla 'Properties'
            $idProperties = \DB::table('properties')->insertGetId(array(
                'calories' 	=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 500),
                'protein' 	=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
                'fats' 		=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 300),
                'hydrates' 	=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
                'sugars' 	=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
                'fiber' 	=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 250),
                'salt' 		=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5)
            ));

            // datos para la tabla 'Foods'
            \DB::table('foods')->insert(array(
                'name'          => $faker->unique()->word,  // genero una palabra al azar
                'property_id'	=> $idProperties,
                'group_id'      => $faker->numberBetween($min = 1, $max = 9)
            ));
        }
    }

}
?>