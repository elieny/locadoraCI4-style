<?php 

helper('form');
echo form_open(' Modelo/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Descricao do Modelo','');
echo form_label('<br>');
echo form_input('descricao', $editar['TB_MODELO_DESC']);
echo '<br>';
echo form_label('Observação ', '');
echo form_label('<br>');
echo form_input('observacao', $editar['	TB_MODELO_OBS']);
echo '<br>';
echo form_label('Data do Modelo', '');
echo form_label('<br>');
echo form_input('Data ', $editar['TB_MODELO_DATA']);
echo '<br>';

echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>