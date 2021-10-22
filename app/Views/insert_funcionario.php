<?php 

helper('form');
echo form_open(' Funcionario/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('NOME DO FUNCIONÁRIO  ', 'nomeFunc');
echo form_input('TB_FUNCIONARIO_NOME', '');
echo '<br>';
echo form_label('TELEFONE             ', 'telefone');
echo form_input('TB_FUNCIONARIO_TEL', '');
echo '<br>';
echo form_label('DATA CONTRATO        ', 'dataContrato');
echo form_input('TB_FUNCIONARIO_DT_CONTRATO', '');
echo '<br>';
echo form_label('CARGO                ', 'cargo');
echo form_input( 'TB_CARGO_ID', '');
echo '<br>';
echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close();

?>