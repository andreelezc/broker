<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

use inetweb\Productor;
use inetweb\Institucion;
use inetweb\Capacidad;
use inetweb\Oportunidad;
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
        self::seedOportunidads();
        $this->command->info('Tabla usuarios inicializada con datos!');
         $this->command->info('Tabla capacidades inicializada con datos!');
          $this->command->info('Tabla oportunidades inicializada con datos!');
    }

    private function seedProductors(){
    	DB::table('productors')->delete();
    	
    	$p = new Productor;
            $p->name = 'Sambrana';
            $p->email = 'sambranaivan@gmail.com' ;
            $p->direccion = 'Bolivar 635';
            $p->password = bcrypt('123456');
             $p->save();  


             // FABRICA 10 INSTANCIAS de Productor

       $productores = factory(inetweb\Productor::class,10)->create();	

       $p = new Productor;
            $p->name = 'Florencia';
            $p->email = 'aflorenciacabrera@gmail.com' ;
            $p->direccion = 'Bolivar 635';
            $p->password = bcrypt('123456');
             $p->save();  
    }

    private function seedInstitucions(){
    	DB::table('Institucions')->delete();
    	
    	$i = new Institucion;
            $i->name = 'UNNE';
            $i->email = 'sambranaivan@gmail.com' ;
            $i->direccion = 'Bolivar 1074';
            $i->password = bcrypt('123456');
            $i->save();    

        	// FABRICA 10 INSTANCIAS de institucion
       $instituciones = factory(inetweb\Institucion::class,10)->create();

       $i = new Institucion;
            $i->name = 'Intituso Nuevo Siglo';
            $i->email = 'florcabrera16@hotmail.com' ;
            $i->direccion = 'Bolivar 1074';
            $i->password = bcrypt('123456');
            $i->save(); 

    }

// Carga de capacidades de Institucion
     private function seedCapacidads(){
        DB::table('Capacidads')->delete();
    //--------------carga 1
        $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'proyecto';
            $c->tipo = 'Alumno';
            $c->personal = '2';
           
            $c->remuneracion = '5000';
            $c->provincia = 'chaco';
            $c->localidad = 'barranqueras';
            $c->fechaInicio = '20/11/2018';
            $c->fechaFin = '20/11/2019';
            $c->tiempo = 'Todo el día';
                  $c->horaInicioL='08:00';
                  $c->horaFinL='14:00' ;
                  $c->horaInicioM='00:00';
                  $c->horaFinM= '00:00';
                  $c->horaInicioMi='08:00';
                  $c->horaFinMi='14:00';
                  $c->horaInicioJ='00:00';
                  $c->horaFinJ= '00:00';
                  $c->horaInicioV='08:00';
                  $c->horaFinV= '14:00';
                  $c->horaInicioS='00:00';
                  $c->horaFinS= '00:00';
                  $c->horaInicioD='00:00';
                  $c->horaFinD='00:00';
            
                     
            $c->institucion_id = 1;
            $c->save(); 

              //por cada palabra clave creo una keyword;
            $c->addKey("Php");
            $c->addKey("Laravel");
            $c->addKey("chaco");
            $c->addKey("Diseño");    

             //--------------carga 2
        $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'pasantia';
            $c->tipo = 'profesor';
            $c->personal = '2';
            
            $c->remuneracion = '5000';
             $c->provincia = 'chaco';
            $c->localidad = 'barranqueras';
            $c->fechaInicio = '20/11/2017';
            $c->fechaFin = '20/11/2018';
            $c->tiempo = 'Todo el día';
                  $c->horaInicioL='08:00';
                  $c->horaFinL='14:00' ;
                  $c->horaInicioM='00:00';
                  $c->horaFinM= '00:00';
                  $c->horaInicioMi='08:00';
                  $c->horaFinMi='14:00';
                  $c->horaInicioJ='00:00';
                  $c->horaFinJ= '00:00';
                  $c->horaInicioV='08:00';
                  $c->horaFinV= '14:00';
                  $c->horaInicioS='00:00';
                  $c->horaFinS= '00:00';
                  $c->horaInicioD='00:00';
                  $c->horaFinD='00:00';
            
                     
            $c->institucion_id = 1;
            $c->save(); 

              //por cada palabra clave creo una keyword;
            $c->addKey("Php");
            $c->addKey("Laravel");
            $c->addKey("Corrientes");
            $c->addKey("Diseño");  
             //--------------carga 1
        $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'investigacion';
            $c->tipo = 'empleados';
            $c->personal = '3';
            
            $c->remuneracion = '5000';
             $c->provincia = 'corrientes';
            $c->localidad = 'goya';
            $c->fechaInicio = '20/11/2017';
            $c->fechaFin = '20/11/2018';
            $c->tiempo = 'Todo el día';
                  $c->horaInicioL='08:00';
                  $c->horaFinL='14:00' ;
                  $c->horaInicioM='00:00';
                  $c->horaFinM= '00:00';
                  $c->horaInicioMi='08:00';
                  $c->horaFinMi='14:00';
                  $c->horaInicioJ='00:00';
                  $c->horaFinJ= '00:00';
                  $c->horaInicioV='08:00';
                  $c->horaFinV= '14:00';
                  $c->horaInicioS='00:00';
                  $c->horaFinS= '00:00';
                  $c->horaInicioD='00:00';
                  $c->horaFinD='00:00';
            
                     
            $c->institucion_id = 1;
            $c->save(); 

              //por cada palabra clave creo una keyword;
            $c->addKey("Php");
            $c->addKey("pagina");
            $c->addKey("chaco");
            $c->addKey("Diseño");   

    
    
    }


    // Carga de Oportunidades de Productor

     private function seedOportunidads(){
        DB::table('oportunidads')->delete();
         //--------------carga 1
        $o = new Oportunidad;
            $o->titulo= 'Supervisores Técnicos ';
            $o->descripcion= 'búsqueda de Supervisores Técnicos para formar parte de un importante proyecto a nivel nacional ';
            $o->requisito= 'Poseer sólidos conocimientos y experiencia de al menos 2 años en';
            $o->categoria= 'pasantia';
            $o->tipo= 'estudiante';
            $o->orientacion= 'empresa';
            $o->personal= '2';
            $o->remuneracion= '3000';
            $o->provincia= 'corrientes';
            $o->localidad= 'corrientes';      
            $o->fechaInicio = '20/11/2017';
            $o->fechaFin= '20/12/2017';
            $o->tiempo= 'Todo el día';
                  $o->horaInicioL='08:00';
                  $o->horaFinL='14:00' ;
                  $o->horaInicioM='00:00';
                  $o->horaFinM= '00:00';
                  $o->horaInicioMi='08:00';
                  $o->horaFinMi='14:00';
                  $o->horaInicioJ='00:00';
                  $o->horaFinJ= '00:00';
                  $o->horaInicioV='08:00';
                  $o->horaFinV= '14:00';
                  $o->horaInicioS='00:00';
                  $o->horaFinS= '00:00';
                  $o->horaInicioD='00:00';
                  $o->horaFinD='00:00'; 

            $o->numdura= '6';            
            $o->duracion= 'meses';
                    
            $o->productor_id = 1;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Tecnico");
            $o->addKey("Electricidad");
            $o->addKey("corrientes");


            //--------------carga 2
        $o = new Oportunidad;
            $o->titulo= 'Supervisores Técnicos ';
            $o->descripcion= 'búsqueda de Supervisores Técnicos para formar parte de un importante proyecto a nivel nacional ';
            $o->requisito= 'Poseer sólidos conocimientos y experiencia de al menos 2 años en';
            $o->categoria= 'capacitacion';
            $o->tipo= 'profesor';
            $o->orientacion= 'empresa';
            $o->personal= '2';
            $o->remuneracion= '3000';
            $o->provincia= 'chaco';
            $o->localidad= 'charata';  
            $o->fechaInicio = '20/11/2017';
            $o->fechaFin= '20/12/2017';
            $o->tiempo= 'Todo el día';
                  $o->horaInicioL='08:00';
                  $o->horaFinL='14:00' ;
                  $o->horaInicioM='00:00';
                  $o->horaFinM= '00:00';
                  $o->horaInicioMi='08:00';
                  $o->horaFinMi='14:00';
                  $o->horaInicioJ='00:00';
                  $o->horaFinJ= '00:00';
                  $o->horaInicioV='08:00';
                  $o->horaFinV= '14:00';
                  $o->horaInicioS='00:00';
                  $o->horaFinS= '00:00';
                  $o->horaInicioD='00:00';
                  $o->horaFinD='00:00'; 

            $o->numdura= '6';            
            $o->duracion= 'meses';
                    
            $o->productor_id = 2;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Tecnico");
            $o->addKey("Electricidad");
            $o->addKey("chaco");


             //--------------carga 3
        $o = new Oportunidad;
            $o->titulo= 'Supervisores Técnicos ';
            $o->descripcion= 'búsqueda de Supervisores Técnicos para formar parte de un importante proyecto a nivel nacional ';
            $o->requisito= 'Poseer sólidos conocimientos y experiencia de al menos 2 años en';
            $o->categoria= 'proyecto';
            $o->tipo= 'profesor';
            $o->orientacion= 'institucion';
            $o->personal= '2';
            $o->remuneracion= '3000';
             $o->provincia= 'chaco';
            $o->localidad= 'fontana';  
            $o->fechaInicio = '20/11/2017';
            $o->fechaFin= '20/12/2017';
            $o->tiempo= 'Todo el día';
                  $o->horaInicioL='08:00';
                  $o->horaFinL='14:00' ;
                  $o->horaInicioM='00:00';
                  $o->horaFinM= '00:00';
                  $o->horaInicioMi='08:00';
                  $o->horaFinMi='14:00';
                  $o->horaInicioJ='00:00';
                  $o->horaFinJ= '00:00';
                  $o->horaInicioV='08:00';
                  $o->horaFinV= '14:00';
                  $o->horaInicioS='00:00';
                  $o->horaFinS= '00:00';
                  $o->horaInicioD='00:00';
                  $o->horaFinD='00:00'; 

            $o->numdura= '6';            
            $o->duracion= 'meses';
                    
            $o->productor_id = 3;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Tecnico");
            $o->addKey("Electricidad");
            $o->addKey("corrientes");



       }


      

}
