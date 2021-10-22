<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('ID', 'NOME','ANO_FAB', 'COR', 'KM', 'VALOR', 'STATUS','MARCA','MODELO', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?> 
<br>
<br>

