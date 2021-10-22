<?php 

helper('form');

echo form_open(' Marca/Inserir');


echo '<br>';
echo'<pre>';
echo '<br>';
echo form_label('Nome da Marca  ', 'marca');
echo form_input('TB_MARCA_NOME', '');

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close(); 

?>