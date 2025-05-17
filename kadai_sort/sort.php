<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $order = ['昇順','降順'];
        foreach ($order as $array){
            if($array === '昇順'){
                echo '昇順にソートします。.<br>';
            
                $nums = [15, 4, 18, 23, 10 ];
                sort($nums);
                foreach ($nums as $num){
                    echo $num.'<br>';
                }
            }                
            else{
                echo '降順にソートします。.<br>';
            
                $nums = [15, 4, 18, 23, 10 ];
                arsort($nums);
                foreach ($nums as $num){
                    echo $num.'<br>';
                }
            }
        }       
        ?>
    </p>
</body>

</html>