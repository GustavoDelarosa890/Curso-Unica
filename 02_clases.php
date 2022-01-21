<?php
class vehiculo{
    public $numero_de_llantas;
    private $kilometraje; //private solo permite acceder desde la clase

    public function getkilometraje(){

    }
    private function calcularKilometraje(){

    }
    protected function setkilometraje($km){

    }
};
$auto = new vehiculo();
$auto->numero_de_llantas = 4;

echo 'Numero de llantas:'.$auto->numero_de_llantas;
echo '<br/n>';
echo 'El kilomatraje es';


?>