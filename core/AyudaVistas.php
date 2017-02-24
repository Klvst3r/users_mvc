<?php
/*
* Contiene diversos helpers (pequeños métodos que nos ayuden en pequeñas tareas dentro de las vistas)
*/

<?php
class AyudaVistas{
     
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
     
    //Helpers para las vistas
}
?>
?>