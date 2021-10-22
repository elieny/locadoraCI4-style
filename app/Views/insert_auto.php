<?php 
helper('form');
echo form_open(' Automovel/carros_inserir');

echo '<br>';
echo'<pre>';

echo '<br>';
echo form_label('ID MARCA    ', 'marca');
echo form_input('TB_MARCA_ID', '');
echo '<br>';
echo form_label('ID MODELO   ', 'modelo');
echo form_input('TB_MODELO_ID', '');
echo '<br>';
echo form_label('AUTOMÓVEL   ', 'nome');
echo form_input('TB_AUTOMOVEL_NOME', '');
echo '<br>';
echo form_label('ANO/MODELO  ', 'anoFab');
echo form_input('TB_AUTOMOVEL_ANO_FAB', '');
echo '<br>';
echo form_label('COR         ',  'cor');
echo form_input('TB_AUTOMOVEL_COR', '');
echo '<br>';
echo form_label('KM ATUAL    ', 'km');
echo form_input('TB_AUTOMOVEL_KM', '');
echo '<br>';
echo form_label('VALOR       ', 'valor');
echo form_input('TB_AUTOMOVEL_VALOR_D', '');
echo '<br>';
echo form_label('STATUS      ', 'status');
echo form_input('TB_AUTOMOVEL_STATUS', '');
echo '<br>';
echo '<br>';
 echo form_submit('mysubmit', 'Inserir');
    echo form_close();

?>