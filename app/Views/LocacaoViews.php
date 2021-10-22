<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('ID_LOCACAO','TIPO_LOCACAO', 'VALOR_LOCACAO','DT_INICIO_LOCACAO', 'DT_FIM__LOCACAO', 'ID_CLIENTE', 'ID_FUNCIONARIO', 'ID_AUTOMOVEL', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?>