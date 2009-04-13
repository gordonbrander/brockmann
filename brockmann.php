<?php if (!defined('PmWiki')) exit();
/*
    This script defines additional settings needed when the 'print'
    skin is loaded (usually in response to ?action=print, as controlled
    by the $ActionSkin['print'] setting.  See scripts/skins.php for
    more details.

    The changes made are:
      - Redefines the standard layout to a format suitable for printing
      - Redefines internal links to keep ?action=print
      - Changes the display of URL and mailto: links
      - Uses GroupPrintHeader and GroupPrintFooter pages instead
        of GroupHeader and GroupFooter
*/

global $HTMLStylesFmt, $HTMLVSpace;

// Disable PMWiki's default markup for paragraphs, etc

$HTMLStylesFmt['markup'] = "";
$HTMLStylesFmt['pmwiki'] = "";

// Disable empty "vspace" divs output by PMWiki

$HTMLVSpace = '';

?>