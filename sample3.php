<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>おはよう</title>
    <link rel="stylesheet" href="css/test.css" type="text/css">
</head>

<body>
    <?php
    // 税率
    $tax = 0.1;
    $apple = 100;
    $meat = 1000;
    $egg = 200;

    // 税抜
    $sum = $apple * 2 + $meat * 1 + $egg * 2;
    // 税込
    $sum_tax = $sum * (1 + $tax);
    ?>
    <table border="1">
        <tr>
            <th>購入商品</th>
            <th>個数</th>
            <th>金額</th>
        </tr>
        <tr>
            <td>りんご</td>
            <td>2</td>
            <td><?php print(number_format($apple) . '円'); ?></td>
        </tr>
        <tr>
            <td>肉</td>
            <td>1</td>
            <td><?php print(number_format($meat) . '円'); ?></td>
        </tr>
        <tr>
            <td>卵</td>
            <td>2</td>
            <td><?php print(number_format($egg) . '円'); ?></td>
        </tr>
        <tr>
            <td>合計</td>
            <th><?php print(number_format($sum) . '円'); ?></th>
        </tr>
        <tr>
            <th>合計（税込）</th>
            <th><?php print(number_format($sum_tax) . '円'); ?></th>
        </tr>

</body>

</html>