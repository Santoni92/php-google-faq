<?php
//phpinfo();

//importo il file contenente la struttura dati
include('strutturaDati.php');

foreach($topics as $topic)
{
    echo('<div>');
    echo('<h2>');
    echo($topic["question"]);
    echo('</h2>');
    echo('<p>');
    echo($topic["answer"]);
    echo('</p>');
    echo('</div>');

}

?>