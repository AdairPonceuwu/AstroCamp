<?php

namespace Controllers;

use Model\Ponente;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;


class PonentesController {

  public static function index(Router $router){

    $ponentes = Ponentes :: all();
    

    $router->render('admin/ponentes/index',[ 
      'titulo'=>'Ponentes y Conferencistas'
    ]);
  }

  public static function crear(Router $router){
    $alertas = [];
    $ponente = new Ponente;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

      if(!empty($_FILES['imagen']['tmp_name'])){
        $carpeta_imagenes = '/../public/img/speakers';

        if(!is_dir($carpeta_imagenes)){
          mkdir($carpeta_imagenes, 0755, true);
        }

        $imagen_png = Image :: make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80); 
        $imagen_webp = Image :: make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80); 

        $nombre_imagen = md5(uniqid(rand(), true));

        $_POST['imagen'] = $nombre_imagen;
      }

      $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES);

      $ponente->sincronizar($_POST);

      //Validar
      $alertas = $ponente->validar();

      if (empty($alertas)){
        //Guardar las Imagenes
        $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . "png");
        $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . "webp");

        $resultado = $ponente -> guardar();

        if($resultado){
          header('Location: /admin/ponentes');

        }


      }
    }

    $router->render('admin/ponentes/crear',[ 
      'titulo'=>'Alta de ponentes', 
      'alertas'=>$alertas,
      'ponente'=>$ponente
    ]);
  } 

}