<?php

namespace App\Controllers;

use App\Models;

class Locacao extends BaseController
{
	public function formInsert()
	{
		echo view('insert_locacao');
	}

	
	public function formUpdate()
	{
		echo view('update_locacao');
	}

	public function Inserir()
	{
		$TB_LOCACAO_TIPO = $this->request->getPost()['TB_LOCACAO_TIPO'];
		$TB_LOCACAO_VALOR = $this->request->getPost()['TB_LOCACAO_VALOR'];	
		$TB_LOCACAO_DT_INICIO = $this->request->getPost()['TB_LOCACAO_DT_INICIO'];
		$TB_LOCACAO_DT_FIM = $this->request->getPost()['TB_LOCACAO_DT_FIM'];
		$TB_CLIENTE_ID  = $this->request->getPost()['TB_CLIENTE_ID '];
		$TB_FUNCIONARIO_ID = $this->request->getPost()['TB_FUNCIONARIO_ID'];
		$TB_AUTOMOVEL_ID = $this->request->getPost()['TB_AUTOMOVEL_ID'];


		$locacaoModel = new \App\Models\TblocacaoModel();

		$data =
		[
			'TB_LOCACAO_TIPO'=> $TB_LOCACAO_TIPO ,
			'TB_LOCACAO_VALOR'=> $TB_LOCACAO_VALOR,
			'TB_LOCACAO_DT_INICIO'=> $TB_LOCACAO_DT_INICIO,
			'TB_LOCACAO_DT_FIM'=> $TB_LOCACAO_DT_FIM ,
			'TB_CLIENTE_ID'=> $TB_CLIENTE_ID ,
			'TB_FUNCIONARIO_ID'=> $TB_FUNCIONARIO_ID ,
			'TB_AUTOMOVEL_ID'=> $TB_AUTOMOVEL_ID ,



		];
		 		$model = $locacaoModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$locacaoModel = new \App\Models\TblocacaoModel();
		$todos = $locacaoModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_LOCACAO_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_LOCACAO_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('LocacaoViews', $data);
	}
	
    public function excluir($TB_LOCACAO_ID  = FALSE )
    {
		
		$locacaoModel = new \App\Models\TblocacaoModel();
		
		$resultado = $locacaoModel->delete($TB_LOCACAO_ID );		
		var_dump($resultado);     
    }
    public function editar ($TB_LOCACAO_ID )
    {
        $locacaoModel = new \App\Models\TblocacaoModel ();

      $todos = $locacaoModel->find($TB_LOCACAO_ID );
      $data['editar'] = $todos;

	  echo view('update_locacao', $data);

        //var_dump($data);   
        
    }
}