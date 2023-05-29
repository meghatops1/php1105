<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Type of array</h1>
    <h2>Numeric Array</h2>
    <?php
        $arrayExampleNum = [1,2,3,4,"apple","php","hhkkjh"];
        echo "<pre>";
        print_r($arrayExampleNum);
    ?>
    <h2>Associative Array</h2>
    <?php
        $arrayExampleAss = ["name"=>"malay","subject"=>"php","sname"=>"patel"];
        echo "<pre>";
        print_r($arrayExampleAss);
    ?>
    <h2>Multidimensional Array</h2>
    <?php
        $arrayExample = [
            "software"=>["mobile"=>["android","ios"],
                        "web"=>["php",".net","java"],
                        ]
            ];
        echo "<pre>";
        print_r($arrayExample);

        echo $arrayExample['software']['web'][2];
    ?>
    <h1>array_chunk</h1>
    <?php
    print_r(array_chunk($arrayExampleNum,2));
    echo "<hr>";
    print_r(array_column($arrayExample,"web"));
    echo "<hr>";
    print_r(array_keys($arrayExampleAss));
    echo "<hr>";
    print_r(array_values($arrayExampleAss));
    echo "<hr>"."sort array";
    sort($arrayExampleNum);
    print_r($arrayExampleNum);
    rsort($arrayExampleNum);
    print_r($arrayExampleNum);
    ?>
</body>
</html>