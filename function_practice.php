<?php
    $to_upper = strtoupper($_GET["to_upper"]);
    $word_count = str_word_count($_GET["word_count"]);
    $string_shuffle = str_shuffle($_GET["string_shuffle"]);
    $string_position = $_GET["string_position"];
    $string_position_word = $_GET["string_position_word"];
    $string_position_function = stripos($string_position, $string_position_word);

?>
<html>
<head>
    <title>Function Practice</title>
</head>
<body>
    <h1>Results</h1>
    <p><?php echo $to_upper; ?> </p>
    <p><?php echo $word_count; ?> </p>
    <p><?php echo $string_shuffle; ?> </p>
    <p><?php echo $string_position_function; ?> </p>
</body>
</html>
