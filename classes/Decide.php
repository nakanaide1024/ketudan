<?php

class Decide{

  /**
   * @param array $content
   * @return string $result
   */
  public static function decided($content){
    
    //ランダムの数値を決める
    $num = rand(1,100);

    //ランダムの数値によって結果を異なる結果話を返す
    if($num <= 40 ){
      $result = $content['a'];
      return $result;
    } elseif($num <= 90){
      $result = $content['b'];
      return $result;
    } elseif($num <=95){
      $result = "とりあえず一旦寝よう";
      return $result;
    } else{
      $result = "どちらでもない道を探せ！";
      return $result;
    }

  }
}