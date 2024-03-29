<?php
//ref:https://stackoverflow.com/questions/32269568/string-comparison-something-identical-of-javascripts-localecompare-in-php
// the intl extensions works on unicode strings
// so this is my way to ensure this example uses utf-8
define('LATIN_SMALL_LETTER_E_WITH_ACUTE', chr(0xc3).chr(0xa9));
define('LATIN_SMALL_LETTER_E_WITH_CARON', chr(0xc4).chr(0x9b));
ini_set('default_charset', 'utf-8');
$chars = [
    'r',
    LATIN_SMALL_LETTER_E_WITH_ACUTE, 's', 'e', 'r','v',
    LATIN_SMALL_LETTER_E_WITH_ACUTE];
$chars2 = ['R','E','S','E','R','V','E'];

$col = Collator::create(null);  // the default rules will do in this case..
$col->setStrength(Collator::PRIMARY); // only compare base characters; not accents, lower/upper-case, ...

for($i=0; $i<count($chars); $i++) {

        echo $chars[$i], ' ', $chars2[$i], ' ',
            $col->compare($chars[$i], $chars2[$i]),
            "\r\n";

}

