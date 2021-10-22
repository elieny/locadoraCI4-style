<?php 

helper('form');
echo form_open(' Funcionario/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome do Funcionario','');
echo form_label('<br>');
echo form_input('Nome', $editar['TB_FUNCIONARIO_NOME']);
echo '<br>';
echo form_label('Digite o Telefone do Funcionario ', '');
echo form_label('<br>');
echo form_input('Telefone', $editar['TB_FUNCIONARIO_TEL']);
echo '<br>';
echo form_label('Digite a Data do Contratodo Funcionario', '');
echo form_label('<br>');
echo form_input('Data do Contrato', $editar['TB_FUNCIONARIO_DT_CONTRATO']);
echo '<br>';
echo form_label('Digite o Id do Cargo ', '');
echo form_label('<br>');
echo form_input('Cargo', $editar['TB_CARGO_ID']);
echo '<br>';

echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>