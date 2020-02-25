Document</title>
</head>

<body>
    <?php
    $f = fopen("count.dat", "r");
    $count = fgets($f);
    $count = $count + 1;
    echo $count;
    fclose($f);
    $c = fopen("count.dat","w+");
    fwrite($c,$count);
    ?>
</body>

</html>>>