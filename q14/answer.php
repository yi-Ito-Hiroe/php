<!-- PHP課題⑭：クラスとメソッドを定義して自己紹介しよう -->
 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php

    class Person{
    public $name;
    public $age;
    
    public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
    }

private function sanitize($data): string{
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

public function introduce(): void{
    $safeName = $this->sanitize($this->name);
    $safeAge = $this->age;
    echo "<p>こんにちは。私は" . $safeName . "です。年齢は" . $safeAge . "歳です。</p>";
}
    }
    

    $person = new Person("山田", 25);
    $person->introduce();

    $person1 = new Person("tanaka", 25);
    $person1->introduce();
    
    
    ?>
 </body>
 </html>
 
