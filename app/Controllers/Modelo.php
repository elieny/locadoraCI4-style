<?php

namespace App\Controllers;

use App\Models;

class Modelo extends BaseController
{
	public function formInsert()
	{
		echo view('insert_modelo');
	}

	
	public function formUpdate()
	{
		echo view('update_modelo');
	}

	public function Inserir()
	{
		$TB_MODELO_DESC = $this->request->getPost()['TB_MODELO_DESC'];
		$TB_MODELO_OBS = $this->request->getPost()['TB_MODELO_OBS'];	
		$TB_MODELO_DATA = $this->request->getPost()['TB_MODELO_DATA'];
	


		$modeloModel = new \App\Models\TbmodeloModel();

		$data =
		[
			'TB_MODELO_DESC'=> $TB_MODELO_DESC ,
			'TB_MODELO_OBS'=> $TB_MODELO_OBS,
			'TB_MODELO_DATA'=> $TB_MODELO_DATA,



		];
		 		$model = $modeloModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$modeloModel = new \App\Models\TbmodeloModel();
		$todos = $modeloModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_MODELO_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_MODELO_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('ModeloViews', $data);
	}
	
    public function excluir($TB_AUTOMOVEL_ID = FALSE )
    {
		
		$modeloModel = new \App\Models\TbmodeloModel();
		
		$resultado = $modeloModel->delete($TB_AUTOMOVEL_ID);		
		var_dump($resultado);     
    }
    public function editar ($TB_AUTOMOVEL_ID)
    {
        $modeloModel = new \App\Models\TbmodeloModel();

      $todos = $modeloModel->find($TB_AUTOMOVEL_ID);
      $data['editar'] = $todos;

	  echo view('update_auto', $data);

        //var_dump($data);   
        
    }
}