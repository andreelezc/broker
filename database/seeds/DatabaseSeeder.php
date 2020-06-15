<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

use inetweb\Productor;
use inetweb\Institucion;
use inetweb\Admin;
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
        // self::seedProductors();
        // self::seedInstitucions();
        //  self::seedCapacidads();
        // self::seedOportunidads();
        self::seedAdmins();
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
            $p->cuil ='36112457';
             $p->name1 ='flor';
             $p->telefono1 ='telefono1';
             $p->email1 ='aflorenciacabrera@gmail.com';
             $p->hora ='8-9';
            $p->password = bcrypt('123456');
            $p->estado = 1;
             $p->save();  


             // FABRICA 10 INSTANCIAS de Productor

      // $productores = factory(inetweb\Productor::class,10)->create();	

       $p = new Productor;
            $p->name = 'Florencia';
            $p->email = 'aflorenciacabrera@gmail.com' ;
            $p->direccion = 'Bolivar 635';
            $p->cuil ='361124572';
             $p->name1 ='flor';
             $p->telefono1 ='333333333';
             $p->email1 ='aflorenciacabrera@gmail.com';
             $p->hora ='8-9';
            $p->password = bcrypt('123456');
           
             $p->save();  
    }

    private function seedInstitucions(){
    	DB::table('Institucions')->delete();
    	
    	$i = new Institucion;
            $i->name = 'UNNE';
            $i->email = 'sambranaivan@gmail.com' ;
            $i->direccion = 'Bolivar 1074';
             $i->cue ='361124527';
             $i->name1 ='flor';
             $i->telefono1 ='33333333';
             $i->email1 ='aflorenciacabrera@gmail.com';
             $i->hora ='8-9';
            $i->password = bcrypt('123456');
            $i->estado = 1;
            $i->save();    

        	// FABRICA 10 INSTANCIAS de institucion
       //$instituciones = factory(inetweb\Institucion::class,10)->create();

       $i = new Institucion;
            $i->name = 'Intituso Nuevo Siglo';
            $i->email = 'florcabrera16@hotmail.com' ;
            $i->direccion = 'Bolivar 1074';
            $i->cue ='36112457';
             $i->name1 ='flor';
             $i->telefono1 ='telefono1';
             $i->email1 ='aflorenciacabrera@gmail.com';
             $i->hora ='8-9';
            $i->password = bcrypt('123456');
           
            $i->save(); 

    }

// // Carga de capacidades de Institucion
     private function seedCapacidads(){
        DB::table('Capacidads')->delete();
//     //--------------carga 1
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

//               //por cada palabra clave creo una keyword;
            $c->addKey("Php");
            $c->addKey("Laravel");
            $c->addKey("chaco");
            $c->addKey("Diseño");    

//              //--------------carga 2
        $c = new Capacidad;
            $c->titulo = 'Diseño Grafico';
            $c->descripcion = 'paginas ' ;
            $c->experiencias = 'Photoshop , Coreldraw';
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

//               //por cada palabra clave creo una keyword;
            $c->addKey("diseño");
            $c->addKey("marketing");
            $c->addKey("photoshop");
            $c->addKey("redes");  

            
//              //--------------carga 3
        $c = new Capacidad;
            $c->titulo = 'Sistemas Embebidos';
            $c->descripcion = 'Automatizacion de Sistemas, internet de las cosas, gestion de sensores' ;
            $c->experiencias = 'Escuela de Sistemas Embebidos 2018';
            $c->categoria = 'pasantia';
            $c->tipo = 'profesor';
            $c->personal = '2';
            
            $c->remuneracion = '5000';
             $c->provincia = 'corrientes';
            $c->localidad = 'capital';
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

//               //por cada palabra clave creo una keyword;
            $c->addKey("arduino");
            $c->addKey("automatizacion");
            $c->addKey("iot");
            $c->addKey("redes");  
             

    
    
    }


//     // Carga de Oportunidades de Productor

     private function seedOportunidads(){
        DB::table('oportunidads')->delete();
         
            //--------------carga 1
        $o = new Oportunidad;
            $o->titulo= ' Técnicos ';
            $o->descripcion= 'búsqueda de Supervisores Técnicos para formar parte de un importante proyecto a nivel nacional ';
            $o->requisito= 'Poseer sólidos conocimientos y experiencia de al menos 2 años en';
            
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
                    
            $o->productor_id = 1;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Tecnico");
            $o->addKey("Electricidad");
            $o->addKey("chaco");

//--------------carga 1
        $o = new Oportunidad;
            $o->titulo= ' Empresario ';
            $o->descripcion= 'búsqueda de Supervisores Técnicos para formar parte de un importante proyecto a nivel nacional ';
            $o->requisito= 'Poseer sólidos conocimientos y experiencia de al menos 2 años en';
            
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
                    
            $o->productor_id = 1;
            $o->save(); 
            //por cada palabra clave creo una keyword;
            $o->addKey("Soporte");
            $o->addKey("Tecnico");
            $o->addKey("Electricidad");
            $o->addKey("chaco");

    }

         private function seedAdmins(){
        DB::table('admins')->delete();
            $a = new Admin;
            $a->email = 'admin@admin.com';
            $a->name = 'administrador';
            $a->password = bcrypt('admin');
            $a->save();


         }




      

}
