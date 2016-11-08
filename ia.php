<?php

class ia
{

// Declaración de propiedades

  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;
  public $navesHumano=[];


// declaracion de metodos getters

  public function getMapaCol(){
    return $this->columna;
  }
  public function getMapaFil(){
    return $this->fila;
  }
  public function getNumNaves(){
    return $this->numNaves;
  }
  public function getNavesHumano(){
    return $this->navesHumano;
  }
  public function getNavesIa(){
    return $this->navesIA;
  }

//declaracion de metodos setters
  public function setMapaCol($mapaCol){
    $this->mapaCol=$mapaCol;
  }
  public function setMapaFil($mapaFil){
    $this->mapaFil=$mapaFil;
  }

// array asociativo
 public function setNaveHumana($tipo,$fila,$columna){
    $naves=[

    $tipo=>"tipo",
    $columna=> "col",
    $fila=> "fil"

  ];
  }

  //array de las naves  IA
  public  $navesIA=[

      0=>["tipo"=>"nave","col"=>0,"fil"=>3],
      1=>[ "tipo"=>"nave","col"=>1,"fil"=>3],
      2=>[ "tipo"=>"nave","col"=>2,"fil"=>3],
        ];

}
?>
