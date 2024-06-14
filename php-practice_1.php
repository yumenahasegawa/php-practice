<?php
// Q1 変数と文字列
$myname = '長谷川';

echo '私の名前は「'.$myname.'」です。';

// Q2 四則演算
$num = 5*4;

echo ($num) ."\n";
echo($num / 2);

// Q3 日付操作
$today = date('Y年m月d日　H時i分s秒');

echo '現在時刻は、'.$today.'です。';

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'mac' || $device === 'windows')
{
    echo '使用OSは、'.$device.'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 23;

$message = ($age > 18 ? '未成年です。': '成人です。');
    
echo $message;

// Q6 配列
$kanto = ['群馬', '茨城', '埼玉', '千葉', '栃木', '東京','神奈川'];

echo $kanto[3].'と' .$kanto[4]. 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kencho = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($kencho as $value) {
    echo $value ."\n";
}

// Q8 連想配列-2
$kencho = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach ($kencho as $key => $value) {
    
  if ($key === '埼玉県' && $value === 'さいたま市') {
      
       echo $key. 'の県庁所在地は、' .$value. 'です。';
  }
     
  }  

// Q9 連想配列-3

$kencho = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '愛知県', '大阪府'];

foreach ($kencho as $key => $value){
    if ($key === '東京都'|| '神奈川県' || '千葉県' || '埼玉県' || '栃木県' || '群馬県' || '茨城県') {
        echo $key. 'の県庁所在地は、' . $value . 'です。' ."\n";
    } else {
        echo $key. 'は関東地方ではありません。' ."\n";
    }
}

// Q10 関数-1

function hello($name){
  return $name. 'さん、こんにちは。' ."\n";
}

echo hello('金谷');
echo hello('安藤');


// Q11 関数-2

// 定義
function calcTaxInPrice($taxOutPrice){// 仮引数（値入っていない）
    return $taxOutPrice * 1.1;
}

$price = 1000;
// 実行
$taxInPrice = calcTaxInPrice($price);// 実引数（値入っている）

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文

function distinguishNum ($count){
    if ($count % 2 === 0) {
        return $count. 'は偶数です。' ."\n";
    } else {
        return $count. 'は奇数です。' ."\n";
    }
}

echo distinguishNum(11);
echo distinguishNum(24);


// Q13 関数とswitch文

function evaluateGrade($grade){
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。' ."\n";// 関数を終わらせる
            // break;// switch文などの繰り返しや分岐処理を終わらせる
        
        case 'C':
            return '合格ですが追加課題があります。' ."\n";
            // break;
        
        case 'D':
            return '不合格です。' ."\n";
            // break;
        
        default:
            return '判定不明です。講師に問い合わせてください。' ."\n";
            // break;
    }
    
}

echo evaluateGrade('A');
echo evaluateGrade('あ');

?>