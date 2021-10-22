<?php

namespace App\Controllers;

use App\Models;

class Automovel extends BaseController
{
	public function formInsert()
	{
		echo view('insert_auto');
	}

	
	public function formUpdate()
	{
		echo view('update_auto');
	}

	public function Inserir()
	{
		$TB_AUTOMOVEL_NOME = $this->request->getPost()['TB_AUTOMOVEL_NOME'];
		$TB_AUTOMOVEL_ANO_FAB = $this->request->getPost()['TB_AUTOMOVEL_ANO_FAB'];	
		$TB_AUTOMOVEL_COR = $this->request->getPost()['TB_AUTOMOVEL_COR'];
		$TB_AUTOMOVEL_KM = $this->request->getPost()['TB_AUTOMOVEL_KM'];
		$TB_AUTOMOVEL_VALOR_D = $this->request->getPost()['TB_AUTOMOVEL_VALOR_D'];
		$TB_AUTOMOVEL_STATUS = $this->request->getPost()['TB_AUTOMOVEL_STATUS'];
		$TB_MARCA_ID = $this->request->getPost()['TB_MARCA_ID'];
		$TB_MODELO_ID = $this->request->getPost()['TB_MODELO_ID'];

		$autoModel = new \App\Models\TbautomovelModel();

		$data =
		[
			'TB_AUTOMOVEL_NOME'=> $TB_AUTOMOVEL_NOME ,
			'TB_AUTOMOVEL_ANO_FAB'=> $TB_AUTOMOVEL_ANO_FAB,
			'TB_AUTOMOVEL_COR'=> $TB_AUTOMOVEL_COR,
			'TB_AUTOMOVEL_KM'=> $TB_AUTOMOVEL_KM ,
			'TB_AUTOMOVEL_VALOR_D'=>$TB_AUTOMOVEL_VALOR_D ,
			'TB_AUTOMOVEL_STATUS'=> $TB_AUTOMOVEL_STATUS,
			'TB_MARCA_ID'=> $TB_MARCA_ID ,
			'TB_MODELO_ID'=> $TB_MODELO_ID

		];
		 		$model = $autoModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$autoModel = new \App\Models\TbautomovelModel();
		$todos = $autoModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_AUTOMOVEL_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_AUTOMOVEL_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('AutomovelViews', $data);
	}
	
    public function excluir($TB_AUTOMOVEL_ID = FALSE )
    {
		
		$autoModel = new \App\Models\TbautomovelModel();
		
		$resultado = $autoModel->delete($TB_AUTOMOVEL_ID);		
		var_dump($resultado);     
    }
    public function editar ($TB_AUTOMOVEL_ID)
    {
        $autoModel = new \App\Models\TbautomovelModel();

      $todos = $autoModel->find($TB_AUTOMOVEL_ID);
      $data['editar'] = $todos;

	  echo view('update_auto', $data);

        //var_dump($data);   
        
    }
}