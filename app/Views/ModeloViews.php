<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('TB_MODELO_ID','TB_MODELO_DESC','TB_MODELO_OBS','TB_MODELO_DATA', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?>