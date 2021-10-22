<?php 

helper('form');
echo form_open(' Locacao/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Tipo de Locacao ','');
echo form_label('<br>');
echo form_input('Tipo', $editar['TB_LOCACAO_TIPO']);
echo '<br>';
echo form_label('Digite o Valor da Locacao', '');
echo form_label('<br>');
echo form_input('Valor', $editar['TB_LOCACAO_VALOR']);
echo '<br>';
echo form_label('Digite a Data de Inicio da Locacao ', '');
echo form_label('<br>');
echo form_input('Data de Inicio da Locacao', $editar['TB_LOCACAO_VALOR']);
echo '<br>';
echo form_label('Digite a Data de Fim da Locacao ', '');
echo form_label('<br>');
echo form_input('Data do Fim da Locacao', $editar['TB_LOCACAO_VALOR']);
echo '<br>';
echo form_label('Digite O ID do Cliente ', '');
echo form_label('<br>');
echo form_input('ID do Cliente ', $editar['TB_CLIENTE_ID']);
echo '<br>';
echo form_label('Digite o ID do Funcionario ', '');
echo form_label('<br>');
echo form_input(' ID do Funcionario', $editar['TB_FUNCIONARIO_ID']);
echo '<br>';
echo form_label('Digite o Id Automovel ', '');
echo form_label('<br>');
echo form_input('Id Automovel', $editar['TB_AUTOMOVEL_ID']);
echo '<br>';
echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>