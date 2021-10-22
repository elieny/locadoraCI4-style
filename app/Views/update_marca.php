<?php 

helper('form');

echo form_open(' Marca/Inserir');


echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome da Marca', '');
echo form_label('<br>');
echo form_input('nome da marca', $editar['TB_MARCA_NOME']);
echo '<br>';
echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>