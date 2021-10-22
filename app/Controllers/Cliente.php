<?php

namespace App\Controllers;

use App\Models;

class Cliente extends BaseController
{
	public function formInsert()
	{
		echo view('insert_cliente');
	}

	
	public function formUpdate()
	{
		echo view('update_cliente');
	}

	public function Inserir()
	{
		$TB_CLIENTE_NOME = $this->request->getPost()['TB_CLIENTE_NOME	'];	
		$TB_CLIENTE_TEL = $this->request->getPost()['TB_CLIENTE_TEL'];
		$TB_CLIENTE_SEXO = $this->request->getPost()['TB_CLIENTE_SEXO'];
		$TB_CLIENTE_EMAIL	 = $this->request->getPost()['TB_CLIENTE_EMAIL	'];
		$TB_CLIENTE_SENHA = $this->request->getPost()['TB_CLIENTE_SENHA'];
		$TB_CLIENTE_ENDERECO = $this->request->getPost()['TB_CLIENTE_ENDERECO'];
		$TB_CLIENTE_COMPLEMENTO = $this->request->getPost()['TB_CLIENTE_COMPLEMENTO'];
        $TB_CLIENTE_BAIRRO = $this->request->getPost()['TB_CLIENTE_BAIRRO'];
        $TB_CLIENTE_CIDADE = $this->request->getPost()['TB_CLIENTE_CIDADE'];
        $TB_CLIENTE_UF = $this->request->getPost()['TB_CLIENTE_UF'];
        $TB_CLIENTE_DT_NASC = $this->request->getPost()['TB_CLIENTE_DT_NASC'];
        $TB_CLIENTE_DT_CAD= $this->request->getPost()['TB_CLIENTE_DT_CAD'];

		$clienteModel = new \App\Models\TbclienteModel();

		$data =
		[
			'TB_CLIENTE_NOME'=> $TB_CLIENTE_NOME,
			'TB_CLIENTE_TEL'=> $TB_CLIENTE_TEL,
			'TB_CLIENTE_SEXO'=> $TB_CLIENTE_SEXO,
			'TB_CLIENTE_EMAIL	'=> $TB_CLIENTE_EMAIL,
			'TB_CLIENTE_SENHA'=>$TB_CLIENTE_SENHA ,
			'TB_CLIENTE_ENDERECO'=> $TB_CLIENTE_ENDERECO,
			'TB_CLIENTE_COMPLEMENTO'=> $TB_CLIENTE_COMPLEMENTO,
            'TB_CLIENTE_BAIRRO'=> $TB_CLIENTE_BAIRRO ,
            'TB_CLIENTE_CIDADE'=> $TB_CLIENTE_CIDADE ,
            'TB_CLIENTE_UF'=> $TB_CLIENTE_UF ,
            'TB_CLIENTE_DT_NASC'=> $TB_CLIENTE_DT_NASC ,
            'TB_CLIENTE_DT_CAD'=> $TB_CLIENTE_DT_CAD ,

		];
		 		$model = $clienteModel ->save($data);
				 var_dump($model);
	}

	public function ler()
	{
		$clienteModel = new \App\Models\TbclienteModel();
		$todos = $clienteModel->findAll();

		foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_CLIENTE_ID'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['TB_CLIENTE_ID'] . '"> ALTERAR </a>';
        } 

		$data['tabela'] = $todos;
		echo view('ClienteViews', $data);
	}
	
    public function excluir($TB_CLIENTE_ID  = FALSE )
    {
		
		$clienteModel = new \App\Models\TbclienteModel();
		
		$resultado = $clienteModel->delete($TB_CLIENTE_ID);		
		var_dump($resultado);     
    }
    public function editar ($TB_CLIENTE_ID )
    {
        $clienteModel = new \App\Models\TbclienteModel();

      $todos = $clienteModel->find($TB_CLIENTE_ID );
      $data['editar'] = $todos;

	  echo view('update_cliente', $data);

        //var_dump($data);   
        
    }
}