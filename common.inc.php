<?php
function ta(mixed $in):void {
    if(TESTMODE) {
        echo('<pre class="ta">');
        print_r($in);
        echo('</pre');
    }
}
?>