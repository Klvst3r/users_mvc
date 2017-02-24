<?php
/*
* Este archivo heredaraa de la clase EntidadBase y a su vez heredada por los modelos de consultas.
* La clase ModeloBase permitirá utiliza el constructor de consuttas que hemos incluido y también los metodos de EntidadBase, asi como otros metodos
* que se programaran dentro de la clase, por ejemploun método para ejecutar consultas sql que directamente devuelven el resultset en un array
* de objetos preparados para pasárselo a una vista, se podrían tener cientos para diferentes cosas.
*/

class ModeloBase extends EntidadBase{
    private $table;
    private $fluent;
     
    public function __construct($table) {
        $this->table=(string) $table;
        parent::__construct($table);
         
        $this->fluent=$this->getConetar()->startFluent();
    }
     
    public function fluent(){
        return $this->fluent;
    }
     
    public function ejecutarSql($query){
        $query=$this->db()->query($query);
        if($query==true){
            if($query->num_rows>1){
                while($row = $query->fetch_object()) {
                   $resultSet[]=$row;
                }
            }elseif($query->num_rows==1){
                if($row = $query->fetch_object()) {
                    $resultSet=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }
         
        return $resultSet;
    }
     
    //Aqui podemos montarnos métodos para los modelos de consulta
     
}
?>