<?php

$table = new \CodeIgniter\View\Table();

echo '<pre>';
$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('ID', 'Nome','Telefone', 'Sexo', 'Email', 'Senha', 'Endereco','Complemento','Bairro','Cidade', 'UF', 'Data de Nascimento', 'Data do Cadastro', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?>