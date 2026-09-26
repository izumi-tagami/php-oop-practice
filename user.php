<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>ユーザー管理プログラム</h1>";

//クラスの定義
class User {
    // プロパティ
    public string $name;
    public int $age;

    // コンストラクタ
    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }

    // 自己紹介メソッド　
    public function introduce(): string {
        return "こんにちは、私は" .$this->name . "です。" . $this->age . "歳です。";
    }

    // 成人判定メソッド
    public function isAdult() {
        return $this->age >=18;
    }
}

// インスタンスを生成
$user1 = new User("山田太郎" , 25 );
$user2 = new User("佐藤花子" , 17);
$user3 = new User("鈴木一郎" , 30);

$users = [$user1, $user2, $user3]; //　ユーザーをひとまとめに管理する箱として$usersを作成

// 自己紹介 
echo "<h2>自己紹介</h2>";
foreach ($users as $user) {
    echo $user->introduce()  . "<br>"; // どのインスタンスのメソッドか
}

// 成人判定
echo "<h2>成人判定</h2>"; 
foreach ($users as $user) {
    if ($user->isAdult()) {
        echo $user->name . "さんは成人です。" . "<br>";
    } else {
        echo $user->name . "さんは未成年です。" . "<br>";
    }
}

?>
</body>
</html>