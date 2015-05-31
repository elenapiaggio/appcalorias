<?php
use Illuminate\Database\Seeder;
Use Faker\Factory as Faker;

	class AdminTableSeeder extends Seeder{

        /**
         * Método run, que inicializa las funciones createAdmin y createUser
         */
		public function run(){
            $this->createAdmin();
            $this->createUsers(50);
		}

        /**
         * Función que crea un usuario de tipo 'admin'
         */
        private function createAdmin(){

            \DB::table('users')->insert(array(
                'first_name' => 'Helena',
                'last_name' => 'Piaggio',
                'email' => 'helena@gmail.com',
                'password' => \Hash::make('admin'),
                'type' => 'admin',

                'birthdate' => '1981/11/07',
                'height'=> 154,
                'weight' => 60,
                'type_activity' => 'intense',
                'sex' => 'female'
            ));
        }

        /**
         * Función que crea usuarios de tipo 'user'
         * Utiliza el componente 'Faker' para generar datos de prueba en nuestra
         * Base de datos
         * @param $total -> Número de registros que queremos generar
         */
        private function createUsers($total){
            $faker = Faker::create();

            for($i=0; $i<=$total; $i++){
                \DB::table('users')->insert(array(
                    'first_name' 	=> $faker->firstName,
                    'last_name' 	=> $faker->lastName,
                    'email' 		=> $faker->unique()->email,
                    'password' 		=> \Hash::make('secret'),
                    'type' 			=> 'user',

                    // obtengo fechas aleatorias entre 99 y 15
                    'birthdate'     => $faker->dateTimeBetween('-99 years','-18 years')->format('Y-m-d'),
                    'height'        => $faker->numberBetween($min = 130, $max = 220), // altura
                    'weight'        => $faker->numberBetween($min = 40, $max = 150), // peso
                    'type_activity' => $faker->randomElement($array = array('sedentary', 'light', 'moderate', 'intense', 'extremely_high')),
                    'sex'           => $faker->randomElement($array = array ('male','female'))
                    // 'sex'           => $faker->title($gender = 'male'|'female')  // no funciona
                ));
            }

        }
	}
?>