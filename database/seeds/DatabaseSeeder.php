<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

use inetweb\Productor;
use inetweb\Institucion;
use inetweb\Capacidad;
use inetweb\Keyword;
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
        self::seedCapacidads();
        $this->command->info('Tabla usuarios inicializada con datos!');
         $this->command->info('Tabla capacidades inicializada con datos!');
    }

    private function seedProductors(){
    	DB::table('productors')->delete();
    	
    	$p = new Productor;
            $p->name = 'Productor';
            $p->email = 'sambranaivan@gmail.com' ;
            $p->direccion = 'Bolivar 635';
            $p->password = bcrypt('123456');
             $p->save();  	
    }

    private function seedInstitucions(){
    	DB::table('Institucions')->delete();
    	
    	$i = new Institucion;
            $i->name = 'Institucion';
            $i->email = 'sambranaivan@gmail.com' ;
            $i->direccion = 'Bolivar 1074';
            $i->password = bcrypt('123456');
            $i->save();    	
    }

     private function seedCapacidads(){
        DB::table('Capacidads')->delete();
    //--------------carga 1
        $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->propuesta = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->rubro = 'Beca';
            $c->disponibilidad = '8:00 a 14:00';
            $c->remuneracion = '$5000';          
            $c->institucion_id = 1;
            $c->save();  

         $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = 'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();

     //-------------carga 2
              $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->propuesta = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->rubro = 'Beca';
            $c->disponibilidad = '8:00 a 14:00';
            $c->remuneracion = '$5000';          
            $c->institucion_id = 1;
            $c->save();  

            $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = 'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
     //-------------carga 3   
      $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->propuesta = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->rubro = 'Beca';
            $c->disponibilidad = '8:00 a 14:00';
            $c->remuneracion = '$5000';          
            $c->institucion_id = 1;
            $c->save();  

            $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = 'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
    //-------------carga 4   
       $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->propuesta = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->rubro = 'Beca';
            $c->disponibilidad = '8:00 a 14:00';
            $c->remuneracion = '$5000';          
            $c->institucion_id = 1;
            $c->save();  

            $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra = 'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
          $k = new Keyword;
          $k->referencia = ($c->id);
          $k->palabra =  'php';
          $k->tipo = ('capacidad');
          $k->save();
    }


}
