<?php
//phpinfo();

//importo il file contenente la struttura dati
include('strutturaDati.php');
include('style.css');

foreach($topics as $topic)
{
    echo(' <head>
                <link rel="stylesheet" href="style.css">
           </head> ');
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