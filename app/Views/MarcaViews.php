<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('TB_MARCA_ID','TB_MARCA_NOME', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?>