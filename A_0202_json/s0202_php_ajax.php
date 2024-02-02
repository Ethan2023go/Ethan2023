<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>

  </style>
</head>
<body>

<!-- php 我的整理寫法 超醜 -->
<?php
//  $arr10 = array('name'=> 'iphone10', 
//               'price'=> 10000,
//               'location'=> ['台北']
//               );
//  $arr11 = array('name'=> 'iphone11', 
//                'price'=> 20000,
//                'location'=> ['台北','台中']
//               );
//  $arr12 = array('name'=> 'iphone12', 
//               'price'=> 10000,
//               'location'=> ['高雄']
//               );
//  $arr13 = array('name'=> 'iphone13', 
//               'price'=> 10000,
//               'location'=> ['台北','台中','高雄']
//               );
 
              
// foreach ([$arr10, $arr11, $arr12, $arr13] as $arr) {
//        print_r($arr);
//        echo '<br>'; 
//     }

?>

<!-- 老師的寫法 -->
<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "<pre>";
}

$mobileArr = [
    [
        'id' => 1,
        'name' => 'iphone10',
        'price' => 10000,
        'location' => ['台北', '台中']
    ],
    [
        'id' => 2,
        'name' => 'iphone11',
        'price' => 20000,
        'location' => ['台北', '台中']
    ],
    [
        'id' => 3,
        'name' => 'iphone12',
        'price' => 30000,
        'location' => ['台北',]
    ],
    [
        'id' => 4,
        'name' => 'iphone13',
        'price' => 40000,
        'location' => ['台北', '台中', '高雄']
    ],

];

// $mobileArr = [
//     's1' => 'amy',
//     's2' => 'bob',
//     's3' => 'cat',
// ];

// print_r($mobileArr);
// dd($mobileArr);

echo json_encode($mobileArr);
// 轉成json加密

?>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>


  </script>
</body>

</html>
  
  