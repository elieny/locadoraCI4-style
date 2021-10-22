<?php

namespace App\Controllers;

use App\Models;

class Funcionario extends BaseController
{
	public function formInsert()
	{
		echo view('insert_funcionario');
	}

	
	public function formUpdate()
	{
		echo view('update_funcionario');
	}

	public function Inserir()
	{
		$TB_FUNCIONARIO_NOME = $this->request->getPost()['TB_FUNCIONARIO_NOME'];
		$TB_FUNCIONARIO_TEL = $this->request->getPost()['TB_FUNCIONARIO_TEL'];	
		$TB_FUNCIONARIO_DT_CONTRATO = $this->request->getPost()['TB_FUNCIONARIO_DT_CONTRATO'];
		$TB_CARGO_ID = $this->request->getPost()['TB_CARGO_ID'];

		$funcModel = new \App\Models\TbfuncionarioModel();

		$data =
		[
			'TB_FUNCIONARIO_NOME'=> $TB_FUNCIONARIO_NOME ,
			'TB_FUNCIONARIO_TEL'=> $TB_FUNCIONARIO_TEL,
			'TB_FUNCIONARIO_DT_CONTRATO'=> $TB_FUNCIONARIO_DT_CONTRATO,
			'TB_CARGO_ID'=> $TB_CARGO_ID ,
			

		];
		 		$model = $funcModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$funcModel = new \App\Models\TbfuncionarioModel();
		$todos = $funcModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_FUNCIONARIO_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_FUNCIONARIO_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('FuncionarioViews', $data);
	}
	
    public function excluir($TB_FUNCIONARIO_ID = FALSE )
    {
		
		$funcModel = new \App\Models\TbfuncionarioModel();
		
		$resultado = $funcModel->delete($TB_FUNCIONARIO_ID);		
		var_dump($resultado);     
    }
    public function editar ($TB_FUNCIONARIO_ID)
    {
        $funcModel = new \App\Models\TbfuncionarioModel();

      $todos = $funcModel->find($TB_FUNCIONARIO_ID);
      $data['editar'] = $todos;

	  echo view('update_funcionario', $data);

        //var_dump($data);   
        
    }
}