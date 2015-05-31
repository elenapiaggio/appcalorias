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

            \DB::table('foods')->insert(array(
                // 'name'          => $faker->unique()->word,
                'name'          => $faker->unique()->firstName,  // genero una palabra al azar
                'group_id'      => $faker->numberBetween($min = 1, $max = 9),

                // $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5)
                'calories' 	=> $faker->numberBetween($min = 1, $max = 500),
                'protein' 	=> $faker->numberBetween($min = 1, $max = 500),
                'fats' 		=> $faker->numberBetween($min = 1, $max = 500),
                'hydrates' 	=> $faker->numberBetween($min = 1, $max = 500),
                'sugars' 	=> $faker->numberBetween($min = 1, $max = 500),
                'fiber' 	=> $faker->numberBetween($min = 1, $max = 500),
                'salt' 		=> $faker->numberBetween($min = 1, $max = 500),
            ));
        }
    }

}
?>