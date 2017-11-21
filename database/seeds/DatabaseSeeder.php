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

    }

// Carga de capacidades de Institucion
     private function seedCapacidads(){
        DB::table('Capacidads')->delete();
    //--------------carga 1
        $c = new Capacidad;
            $c->titulo = 'Programacion Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->orientacion = 'Beca';
            $c->fechaInicio = '20/11/2017';
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
            $c->fechaFin = '20/11/2018';
            $c->remuneracion = '5000';          
            $c->institucion_id = 1;
            $c->save(); 

              //por cada palabra clave creo una keyword;
            $c->addKey("Php");
            $c->addKey("Laravel");
            $c->addKey("Web");
            $c->addKey("Diseño");       

     //-------------carga 2
              $c = new Capacidad;
             $c->titulo = 'Laravel Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , array';
            $c->categoria = 'Pasante';
            $c->orientacion = 'empleado';
            $c->fechaInicio = '20/11/2017';
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
            $c->fechaFin = '20/11/2018';
            $c->remuneracion = '5000';          
            $c->institucion_id = 2;
            $c->save();  
            //por cada palabra clave creo una keyword;
            $c->addKey("keyword1");
            $c->addKey("keyword2");
            $c->addKey("keyword3");
            $c->addKey("keyword4");

      
     //-------------carga 3   
      $c = new Capacidad;
             $c->titulo = 'desarrollador Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->orientacion = 'Beca';
            $c->fechaInicio = '20/11/2017';
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
            $c->fechaFin = '20/11/2018';
            $c->remuneracion = '5000';          
            $c->institucion_id = 3;
            $c->save();  
            //por cada palabra clave creo una keyword;
            $c->addKey("keyword1");
            $c->addKey("keyword2");
            $c->addKey("keyword3");
            $c->addKey("keyword4");

     
    //-------------carga 4   
       $c = new Capacidad;
             $c->titulo = 'Analista Web';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'php , laravel';
            $c->categoria = 'Pasante';
            $c->orientacion = 'Beca';
            $c->fechaInicio = '20/11/2017';
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
            $c->fechaFin = '20/11/2018';
            $c->remuneracion = '5000';          
            $c->institucion_id = 4;
            $c->save();  
            //por cada palabra clave creo una keyword;
            $c->addKey("keyword1");
            $c->addKey("keyword2");
            $c->addKey("keyword3");
            $c->addKey("keyword4");

    
    }


    // Carga de Oportunidades de Productor

     private function seedOportunidads(){
        DB::table('oportunidads')->delete();
         //--------------carga 1
        $o = new Oportunidad;
            $o->titulo= 'Supervisores Técnicos en Corrientes';
            $o->descripcion= 'búsqueda de Supervisores Técnicos para formar parte de un importante proyecto a nivel nacional ';
            $o->requisito= 'Poseer sólidos conocimientos y experiencia de al menos 2 años en';                            
            $o->fechaInicio = '20/11/2017';
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
            $o->remuneracion= '5000';
           
                      
            $o->productor_id = 3;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Tecnico");
            $o->addKey("Electricidad");
            $o->addKey("Corrientes");

        //--------------carga 2
        $o = new Oportunidad;
            $o->titulo= 'Asesor/Receptor de Taller para Concesionario Automotriz ';
            $o->descripcion= 'Concesionario Oficial se encuentra en la búsqueda de un/a Asesor de Servicio para sector de Post Venta';
            $o->requisito= 'Educación mínima: Secundaria';                            
             $o->fechaInicio = '25/11/2017';
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
            $o->remuneracion= '5000';
                      
            $o->productor_id = 4;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Asesor");
            $o->addKey("Receptor");
            $o->addKey("Automotriz");
            $o->addKey("Concesionario");

        //--------------carga 3
        $o = new Oportunidad;
            $o->titulo= 'Oficial de Negocios para Banco';
            $o->descripcion= 'Importante banco de primera línea incorpora Oficial de negocios para una de sus sucursales';
            $o->requisito= 'Educación mínima: Universitario';                            
            $o->fechaInicio = '25/11/2017';
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
            $o->duracion= 'años';
            $o->remuneracion= '8000'; 
                      
            $o->productor_id = 6;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Negocios");
            $o->addKey("Banco");
            $o->addKey("Universitario");
            $o->addKey("Corrientes");

        //--------------carga 4
         $o = new Oportunidad;
            $o->titulo= 'Técnico en sistemas - Manejo de Software y Hardware';
            $o->descripcion= 'Mantenimiento de elementos de oficina';
            $o->requisito= 'Educación mínima: Secundaria';                            
           $o->fechaInicio = '30/11/2017';
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

            $o->numdura= '2';            
            $o->duracion= 'semanas';
            $o->remuneracion= '8000'; 
                      
                      
            $o->productor_id = 10;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Software");
            $o->addKey("Hardware");
            $o->addKey("oficina");


             }




}
