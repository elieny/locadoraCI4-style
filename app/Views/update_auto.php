<?php 

helper('form');
echo form_open('Automovel/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome do Automovel','');
echo form_label('<br>');
echo form_input('Nome', $editar['TB_AUTOMOVEL_NOME']);
echo '<br>';
echo form_label('Digite o Ano de Fabricação do Automovel', '');
echo form_label('<br>');
echo form_input('Ano',$editar['TB_AUTOMOVEL_ANO_FAB']);
echo '<br>';
echo form_label('Digite a Cor do Automovel ', '');
echo form_label('<br>');
echo form_input('Cor', $editar['TB_AUTOMOVEL_COR']);
echo '<br>';
echo form_label('Digite o Km do Automovel  ', '');
echo form_label('<br>');
echo form_input('KM', $editar['TB_AUTOMOVEL_KM']);
echo '<br>';
echo form_label('Digite o valor do Automovel ', '');
echo form_label('<br>');
echo form_input('Valor', $editar['TB_AUTOMOVEL_VALOR_D']);
echo '<br>';
echo form_label('Digite o Status do Automovel', '');
echo form_label('<br>');
echo form_input('Status', $editar['TB_AUTOMOVEL_STATUS']);
echo '<br>';
echo form_label('Digite a Marca do Automovel  ', '');
echo form_label('<br>');
echo form_input('Marca', $editar['TB_MARCA_ID']);
echo '<br>';
echo form_label('Digite o Modelo do Automovel ', '');
echo form_label('<br>');
echo form_input('Modelo', $editar['TB_MODELO_ID']);
echo '<br>';
echo form_submit('mysubmit', 'Alterar');
echo form_close();

?>