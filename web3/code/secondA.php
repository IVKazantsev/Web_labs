<title>Textarea</title>
<form action="" method="get">
    <label for="text">Your text</label>
    <textarea rows="1" name="text" required></textarea>

    <input type="submit" value="Calculate count">
</form>
<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    echo "Word count: ", str_word_count($text), " Char count: ", strlen($text);
}
?>
<form action="index.php" method="get">
    <input type="submit" value="Back">
</form>
