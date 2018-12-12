<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graduations {
  
  const Eduardo = array(
    "aikido"   => "Yondan (Faixa preta 4º Dan)",
    "iaido"    => "Nidan (Faixa preta 2º Dan)",
    "jodo"     => "Shodan (Faixa preta)",
    "naginata" => "Ikkyu (Faixa marrom)",
    "jiujitsu" => "Shodan (Faixa preta)",
  );

  const Angelica = array(
    "aikido"   => "Shodan (Faixa preta)",
    "jodo"     => "Shodan (Faixa preta)",
    "naginata" => "2º kyu",
  );
  
  const Mathaeus = array(
    "aikido"   => "Nidan (Faixa preta 2º Dan)",
    "iaido"    => "Sandan (Faixa preta 3º Dan)",
  );
  
  public function getGradEduardo($arte){
    return (!in_array($arte, self::Eduardo)) ? self::Eduardo[$arte] : '';
  }

  public function getGradAngel($arte){
    return (!in_array($arte, self::Angelica)) ? self::Angelica[$arte] : '';
  }

  public function getGradMathaeus($arte){
    return (!in_array($arte, self::Mathaeus)) ? self::Mathaeus[$arte] : '';
  }
}