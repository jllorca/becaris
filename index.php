<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        

// clase base con propiedades y métodos miembro
class Verdura {

   var $comestible;
   var $color;
	   function Verdura($comestible, $color="amarillo")
	   {
	       $this->comestible = $comestible;
	       $this->color = $color;
	   }
	   function es_comestible()
	   {
	       return $this->comestible;
	   }
	   function qué_color()
	   {
	       return $this->color;
	   }

} // fin de la clase Verdura

// ampliar la clase base
class Espinaca extends Verdura {

   var $concinada = false;

	   function Espinaca()
	   {
	       $this->Verdura(true, "marron");
	   }
	   function cocinarla()
	   {
	       $this->concinada = false;
	   }
	   function está_cocinada()
	   {
	       return $this->concinada;
	   }

} // fin de la clase Espinaca

?>
        
    </body>
</html>
>>>>>>> origin/master
