<?php 

helper('form');
echo form_open(' Locacao/Inserir');

echo '<br>';
echo'<pre>';
echo '<br>';
echo form_label('TIPO DE LOCAÇÃO  ', 'tipo');
echo form_input('TB_LOCACAO_TIPO', '');
echo '<br>';
echo form_label('VALOR            ', 'valor');
echo form_input('TB_LOCACAO_VALOR', '');
echo '<br>';
echo form_label('DATA INICIAL     ', 'dt_Inicio');
echo form_input('TB_LOCACAO_DT_INICIO', '');
echo '<br>';
echo form_label('DATA FINAL       ', 'dt_Fim');
echo form_input('TB_LOCACAO_DT_FIM', '');
echo '<br>';
echo form_label('CLIENTE          ',  'id');
echo form_input('TB_CLIENTE_ID', '');
echo '<br>';
echo form_label('FUNCIONÁRIO      ', 'id');
echo form_input('TB_FUNCIONARIO_ID', '');
echo '<br>';
echo form_label('AUTOMOVEL        ', 'idAuto');
echo form_input('TB_AUTOMOVEL_ID', '');
echo '<br>';
echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close();

?>