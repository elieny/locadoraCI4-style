<?php 

helper('form');
echo form_open('Cargo/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome do Cargo','');
echo form_label('<br>');
echo form_label('<br>');
echo form_input('Cargo', $editar['TB_CARGO_NOME']);
echo '<br>';

echo form_submit('mysubmit', 'Alterar');
echo form_close();