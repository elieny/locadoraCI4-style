<?php 

helper('form');
echo form_open(' Cargo/Inserir');

echo '<br>';
echo '<br>';
echo form_label('CARGO       ', 'nome_Cargo');
echo form_input('TB_CARGO_NOME', '');

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close();

?>