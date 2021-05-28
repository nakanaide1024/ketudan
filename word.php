<?php

class Words {

 private $words = array(
    "司馬遼太郎" => "勇気と決断と行動力さえ持ち合わせておれば、あとのことは天に任せれば良い",
    "ミシェル・オバマ" => "恐れに基づいて決断を下してはいけません。希望と可能性に基づいて決断するのです",
    "シドニー・スミス" => "ほんの少しばかり勇気に欠けていたために、多くの才能ある人びとが、一生、功を成すことなく終っている。思いきって着手する勇気がなかったために、一生、無名に終った大勢の人間が毎日墓場へ送られる。こうした人びとも実行に取り掛かる決断さえついていれば、おそらく名声をあげていただろう",
    "アルフレッド・アドラー" => "やる気がなくなったのではない。やる気をなくすという決断を自分でしただけだ",
    "エイブラハム・リンカーン" => "それはできる、それをやる、と決断せよ。それから方法を見つけるのだ",
    "カミナ" => "俺が信じるお前でもない。お前が信じる俺でもない。お前が信じる、お前を信じろ！",
    "ジョルノ・ジョバァーナ" => "「覚悟」とは!!暗闇の荒野に!!進むべき道を切り開く事だッ！",
    "ナツ・ドラグニル" => "全部は手に入らねぇ。だから手に入れたものを大切にするんだ",
    "アルミン・アルレルト" => "何かを変えることのできる人間がいるとすれば、その人は、きっと…大事なものを捨てることができる人だ"
 );

/**
 * 名言をランダムで一つ選ぶ
 * @param void
 * @return string $content
 */

  public function sendWord(){

    $key = array_rand($this->words);
    $word = $this->words[$key];
    $content = array($key => $word);
    return $content;
  }
}