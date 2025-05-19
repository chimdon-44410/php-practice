<?php
// Q1 変数と文字列

$name = "上野";
$message = "私の名前は「" . $name . "」です。";
echo $message;

// Q2 四則演算

$num = 5 * 4;
echo $num . "\n";


$num /= 2;
echo $num;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');

echo "現在時刻は、" . date('Y年m月d日 H時i分s秒') . "です。";

// Q4 条件分岐-1 if文
$device = "mac";

if (in_array($device, ["windows", "mac"])) {
    echo "使用OSは、{$device}です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age < 18) ? "未成年です。" : "成人です。";

echo $message;

// Q6 配列
$prefecture = ['東京都','茨城県','栃木県','群馬県','埼玉県','千葉県','神奈川県'];

echo $prefecture[2] . "と" . $prefecture[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$prefecture = [
  '東京都' => '新宿区',
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '神奈川県' => '横浜市'
];

foreach ($prefecture as $y){
  echo $y . "\n";
}

// Q8 連想配列-2
$prefecture = [
  '東京都' => '新宿区',
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '神奈川県' => '横浜市'
];

foreach ($prefecture as $key => $value) {
if ($key === '埼玉県' && $value === 'さいたま市') {
   echo  $key . "の県庁所在地は、". $value ."です。";
} else {
  continue;
}
}

// Q9 連想配列-3
$prefecture = [
  '東京都' => '新宿区',
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '神奈川県' => '横浜市'
];

$prefecture['大阪府'] = '大阪府';
$prefecture['京都府'] = '京都府';
var_dump($prefecture);

$kanto = ['東京都','茨城県','栃木県','群馬県','埼玉県','千葉県','神奈川県'];

foreach ($prefecture as $key => $value) {
  if (in_array ($key, $kanto)) {
     echo  $key . "の県庁所在地は、". $value ."です。" ."\n";
  } else {
    echo $key  . "は関東地方ではありません。"."\n";
  }
  }

// Q10 関数-1
function hello($name){
    echo $name . 'さん、こんにちは。' . "\n";
  }

hello('Gizumo'); 
hello('Ueno');

// Q11 関数-2
$tax_rate = 0.10;

function calcTaxInPrice($price, $tax_rate) {
  return $price * (1 + $tax_rate);
}

$price = 1000;
$taxinPrice = calcTaxInPrice($price, $tax_rate);
echo $price . "の商品の税込価格は" . $taxinPrice . "円です。";

// Q12 関数とif文
function distinguishNum($number) {
  if($number % 2 === 0) {
      echo $number . "は偶数です。" . "\n";
  } else {
      echo $number . "は奇数です。". "\n";
  }
}
 echo distinguishNum(31);
 echo distinguishNum(22);


// Q13 関数とswitch文
function evaluateGrade($score) {
   switch ($score) {
    case 'A':
    case 'B':
      return '合格です。';
      
    case 'C':
    return '合格ですが追加課題があります。';

      case 'D':
      return '不合格です。'; 
      
    default:
      return '判定不明です。講師に問い合わせてください。';
  }
}

echo evaluateGrade('C').PHP_EOL;
echo evaluateGrade('B').PHP_EOL;

?>