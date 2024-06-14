<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++){
  if($i % 4 === 0 && $i % 5 === 0){
      echo 'tic-tac' ."\n";
  } elseif ($i % 4 === 0) {
      echo 'tic' ."\n";
  } elseif ($i % 5 === 0){
      echo 'tac' ."\n";
  } else {
      echo $i ."\n";
  }
}

// Q2 多次元連想配列
// 問題１
echo $personalInfos[1]['name']. 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// 問題２
foreach ($personalInfos as $person => $person_detail){
  echo ++$person. '番目の' . $person_detail['name']. 'のメールアドレスは' .$person_detail['mail']. 'で、電話番同は' .$person_detail['tel']. 'です。' ."\n";
}
// 問題３
$ageList = [25, 30, 18];

foreach ($ageList as $key => $age){
    $personalInfos[$key]['age'] = $age;
}
var_dump($personalInfos);


// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student (120, '山田');
echo '学籍番号' . $yamada->studentId. '番の生徒は' . $yamada->studentName. 'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($php)
    {
         echo $this->studentName. 'は' .$php. 'の授業に出席しました。学籍番号：' .$this->studentId ;
    }
}

$yamada = new Student (120, '山田');
$yamada -> attend('PHP');

// Q5 定義済みクラス
// 問題１
$date = new datetime('2024-06-13');
$last_date = $date -> modify('-1 month')-> format ('Y-m-d');
echo $last_date;

// 問題２
$last_time = new DateTime('1992-04-25');
$today_time = new DateTime('2024-06-13');

$diff = $last_time -> diff($today_time);
echo 'あの日から' .$diff -> days . '日経過しました。';


?>