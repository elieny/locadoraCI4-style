<?php 

helper('form');
echo form_open('Cliente/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome do Cliente','');
echo form_label('<br>');
echo form_input('Nome', $editar['TB_CLIENTE_NOME']);
echo '<br>';
echo form_label('Digite o Telefone do Cliente', '');
echo form_label('<br>');
echo form_input('Telefone',$editar['TB_CLIENTE_SEXO']);
echo '<br>';
echo form_label('Digite Sexo do Cliente ', '');
echo form_label('<br>');
echo form_input('Sexo', $editar['TB_CLIENTE_SEXO']);
echo '<br>';
echo form_label(' Digite o Email do cliente ', '');
echo form_label('<br>');
echo form_input('Email', $editar['TB_CLIENTE_SENHA']);
echo '<br>';
echo form_label('Digite a Senha do Cliente', '');
echo form_label('<br>');
echo form_input('Senha', $editar['TB_CLIENTE_ENDERECO']);
echo '<br>';
echo form_label('Digite o Endereco do Cliente', '');
echo form_label('<br>');
echo form_input('Endereco', $editar['TB_CLIENTE_COMPLEMENTO']);
echo '<br>';
echo form_label('Digite o Complemento do Cliente', '');
echo form_label('<br>');
echo form_input('Complemento', $editar['TB_CLIENTE_BAIRRO']);
echo '<br>';
echo form_label('Digite o UF  do Cliente', '');
echo form_label('<br>');
echo form_input('UF', $editar['TB_CLIENTE_UF']);
echo '<br>';
echo form_label('Digite a Data de Nascimento do Cliente', '');
echo form_label('<br>');
echo form_input('Data de Nascimento', $editar['TB_CLIENTE_DT_NASC']);
echo '<br>';
echo form_label('Digite a Data do Cadastro do Cliente', '');
echo form_label('<br>');
echo form_input('Data do Cadastro', $editar['TB_CLIENTE_DT_CAD']);
echo '<br>';
echo form_submit('', 'Alterar');
echo form_close();

?>