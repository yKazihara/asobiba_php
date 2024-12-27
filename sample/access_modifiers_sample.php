<?php
class Super {
    protected function protectedFunc(){
        echo "Protected\n";
    }
    private function privateFunc(){
        echo "Private\n";
    }
}

$super = new Super;
// $super->protectedFunc(); // エラー
// $super->privateFunc(); // エラー


class Sub extends Super {
    public function publicFunc(){
        parent::protectedFunc();
    }
}

// Superクラスを継承したSubクラスからメソッドにアクセス
$sub = new Sub();
$sub->publicFunc(); // Protected　subのpublic関数を呼んでるから可能

// まぁpublicで宣言しがちではあるけど、ちゃんとアクセス修飾子は設計したほうがいいよね。