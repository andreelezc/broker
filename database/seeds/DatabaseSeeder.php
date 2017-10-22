<?php

use Illuminate\Database\Seeder;
use inetweb\Productor;
use inetweb\Institucion;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedProductors();
        self::seedInstitucions();
      
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    private function seedProductors(){
    	DB::table('productors')->delete();
    	
    	$p = new Productor;
            $p->name = 'Sr Productor';
            $p->email = 'sambranaivan@gmail.com' ;
            $p->direccion = 'casa de ivan';
            $p->password = bcrypt('123456');
             $p->save();  	
    }

    private function seedInstitucions(){
    	DB::table('Institucions')->delete();
    	
    	$i = new Institucion;
            $i->name = 'Sr Institucion';
            $i->email = 'sambranaivan@gmail.com' ;
            $i->direccion = 'casa de ivan';
            $i->password = bcrypt('123456');
            $i->save();    	
    }

}
