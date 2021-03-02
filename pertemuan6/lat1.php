<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <Style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #ff00ff;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 2s;
            
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </Style>
</head>
<body>
    <?php
    $angka =    [
                    [1,2,3],[4,5,6],[7,8,0]
                ];
    ?>

    <?php foreach($angka as $a) :?>
        <?php foreach($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>



</body>
</html>