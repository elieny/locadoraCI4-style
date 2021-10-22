<?php 

helper('form');
echo form_open(' Cliente/Inserir');

echo '<br>';
echo'<pre>';

echo '<br>';
echo form_label('Nome Cliente  ', 'nome');
echo form_input('TB_CLIENTE_NOME', '');
echo '<br>';
echo form_label('Telefone  Cliente ', 'telefone');
echo form_input('TB_CLIENTE_TEL', '');
echo '<br>';
echo form_label('Sexo ', 'sexo');
echo form_input('TB_CLIENTE_SEXO', '');
echo '<br>';
echo form_label('E-MAIL', 'email');
echo form_input('TB_CLIENTE_EMAIL', '');
echo '<br>';
echo form_label('Senha ',  'senha');
echo form_input('TB_CLIENTE_ENDERECO', '');
echo '<br>';
echo form_label('Endereço ', 'endereco');
echo form_input('TB_CLIENTE_ENDERECO', '');
echo '<br>';
echo form_label('Complemento ', 'complemento');
echo form_input('TB_CLIENTE_COMPLEMENTO', '');
echo '<br>';
echo form_label('Bairro   ', 'bairro');
echo form_input('TB_CLIENTE_BAIRRO', '');
echo '<br>';
echo form_label('Cidade  ', 'cidade');
echo form_input('TB_CLIENTE_CIDADE', '');
echo '<br>';
echo form_label('UF ', 'uf');
echo form_input('TB_CLIENTE_UF', '');
echo '<br>';
echo form_label('Data de Nascimento      ', 'nascimento');
echo form_input('TB_CLIENTE_DT_NASC', '');
echo '<br>';
echo form_label('Data de Cadastro  ', 'dt_cadastro');
echo form_input('TB_CLIENTE_DT_CADASTRO', '');
echo '<br>';
echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'Inseerir');
echo form_close(); 

?>