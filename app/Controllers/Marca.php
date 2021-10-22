<?php

namespace App\Controllers;

use App\Models;

class Marca extends BaseController
{
	public function formInsert()
	{
		echo view('insert_marca');
	}

	
	public function formUpdate()
	{
		echo view('update_marca');
	}

	public function Inserir()
	{
		$TB_MARCA_NOME	 = $this->request->getPost()['$TB_MARCA_NOME'];


		$marcaModel = new \App\Models\TbmarcaModel();

		$data =
        [
			'TB_MARCA_NOME'=> $TB_MARCA_NOME



		];
		 		$model = $marcaModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$marcaModel = new \App\Models\TbmarcaModel();
		$todos = $marcaModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_MARCA_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_MARCA_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('MarcaViews', $data);
	}
	
    public function excluir($TB_MARCA_ID = FALSE )
    {
		
		$marcaModel = new \App\Models\TbmarcaModel();
		
		$resultado = $marcaModel->delete($TB_MARCA_ID );		
		var_dump($resultado);     
    }
    public function editar ($TB_MARCA_ID )
    {
        $marcaModel = new \App\Models\TbmarcaModel();

      $todos = $marcaModel->find($TB_MARCA_ID  );
      $data['editar'] = $todos;

	  echo view('update_marca', $data);

        //var_dump($data);   
        
    }
}