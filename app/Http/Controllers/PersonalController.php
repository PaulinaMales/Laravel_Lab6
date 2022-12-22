<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    // ******* Redireccionamiento Home ******
    public function home() {
        return view('home');
     }
   // ******* Redireccionamiento Inicio ******
   public function inicio() {
      return view('inicio');
   }

   // ****** Redireccionamiento Personal ******
     public function blog() {
        //consulta a la base de datos
        $posts =[
           ['id'=>1, 'title'=>'PHP', 'slug'=>'Contenido php'],
           ['id'=>2, 'title'=>'LARAVEL', 'slug'=>'Contenido laravel']
        ];
        return view('blog',['posts'=>$posts]);
     }

     public function post($slug) {
        //consulta a la base de datos
        $post = $slug;
        return view('post', ['post'=>$post]);
     }


     //FUNCION PERSONAL
     public function personal() {
      //consulta a la base de datos
      $posts =[
         [ 'title'=>'Paulina Males', 'slug'=>'https://github.com/'],
         [ 'title'=>'Camila Mier', 'slug'=>'https://www.google.com/?hl=es'],
         [ 'title'=>'Marcos Moreira', 'slug'=>'https://www.google.com/?hl=es']

      ];
      return view('personal',['posts'=>$posts]);
   }

 



     // ****** Redireccionamiento Nosotros ******
     public function nosotros() {
      return view('nosotros');
   }
     // ****** Redireccionamiento Modelos ******
     public function modelos() {
      return view('modelos');
   }
     // ****** Redireccionamiento Contactanos ******
     public function contactanos() {
      return view('contactanos');
   }
     
}
