<?php

namespace App\Controllers;

use App\Models;

class Cargo extends BaseController
{
	public function formInsert()
	{
		echo view('insert_cargo');
	}

	
	public function formUpdate()
	{
		echo view('update_cargo');
	}

	public function Inserir()
	{

		$TB_CARGO_NOME = $this->request->getPost()['TB_CARGO_NOME'];	
	

		$cargoModel = new \App\Models\TbcargoModel();

		$data =
		[

			'TB_CARGO_NOME'=> $TB_CARGO_NOME,


		];
		 		$model = $cargoModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$cargoModel = new \App\Models\TbcargoModel();
		$todos = $cargoModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_CARGO_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_CARGO_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('CargoViews', $data);
	}
	
    public function excluir($TB_CARGO_ID  = FALSE )
    {
		
		$cargoModel = new \App\Models\TbcargoModel();
		
		$resultado = $cargoModel->delete($TB_CARGO_ID );		
		var_dump($resultado);     
    }
    public function editar ($TB_CARGO_ID )
    {
        $cargoModel = new \App\Models\TbcargoModel();

      $todos = $cargoModel->find($TB_CARGO_ID );
      $data['editar'] = $todos;

	  echo view('update_cargo', $data);

        //var_dump($data);   
        
    }
}