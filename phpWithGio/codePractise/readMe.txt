PHP includes a short echo tag <?= which is a short-hand to the more verbose <?php echo.

You can use the short echo tag to <?= 'print this string' ?>.
It's equivalent to <?php echo 'print this string' ?>.

If a file contains only PHP code, it is preferable to omit the PHP closing tag at the end of the file. This prevents accidental whitespace or new lines being added after the PHP closing tag, which may cause unwanted effects because PHP will start output buffering when there is no intention from the programmer to send any output at that point in the script.

<?php
echo "Hello world";

// ... more code

echo "Last statement";

// the script ends here with no PHP closing tag

Three types of tag are available in php
1.normal tag(<?php ?>)
2.short echo tag(<?= ?>)
3.short tag(<? ?>)

If you want to just print single text or something ,you should use shorthand version .<?= $var ?>