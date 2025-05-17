<?php
// Q1 tic-tac問題

echo "1から100までのカウントを開始します" . "\n";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo "tic-tac\n";
  } elseif($i % 4 === 0) {
    echo "tic\n";
  } elseif($i % 5 === 0) {
    echo "tac\n";
  } else {
    echo $i."\n";
  }
}
// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

var_dump($personalInfos);
var_dump($personalInfos[1]['name']);
var_dump($personalInfos[1]['tel']);

// 問題1
echo $personalInfos[1]['name'] ."の電話番号は" . $personalInfos[1]['tel'] . "です。";

// 問題2
$counter = 1;

foreach ($personalInfos as  $y) {
  echo $counter . "番目の" . $y['name'] . "さんのメールアドレスは" . $y['mail'] . "で、電話番号は" . $y['tel'] . "です。\n";
  $counter++;
}

// 問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
  $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    { throw new Exception("学籍番号は正の整数です。");
        if (!is_int($id) || $id <= 0) {

        }
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        return "{$this->studentName}さんは{$subject}の授業に出席しました。";
    }
}

$ueno = new Student(150, '上野');
echo "学籍番号{$ueno->studentId}番の生徒は{$ueno->studentName}です。";

// Q4 オブジェクト-2
$ueno = new Student(150, '上野');
$attendanceMessage = $ueno->attend('PHP');

echo $attendanceMessage . "学籍番号:{$ueno->studentId}";

// Q5 定義済みクラス
// 問題１
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d H:i:s');

// 問題２
$date1 = new DateTime('1992-04-25');
$date2 = new DateTime();

$interval = $date1->diff($date2);
echo "あの日から{$interval->days}日経過しました。";

?>