<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SalvarPessoaRequest;
use App\Pessoas;

class PessoaController extends Controller
{
    public function store(SalvarPessoaRequest $request){
        $validate = $request->validated();
        
        // verifica se é um arquivo válido
        if(!$request->hasFile('arquivo') || !$request->file('arquivo')->isValid()){
            return back()->withInput()->with(['success' => false, 'message' => 'Arquivo anexado inválido ou inexistente']);
        }
        // verifica o tamanho do arquivo se está válido
        if($request->file('arquivo')->getSize() > 500000){
            return back()->withInput()->with(['success' => false, 'message' => 'Arquivo anexado deve ter no máximo 500kb']);
        }
        // verifica a extensão do arquivo
        if(Pessoas::verificarExtensaoValida($request->arquivo->extension()) === false){
            return back()->withInput()->with(['success' => false, 'message' => 'Extensão do arquivo anexado não é válida.']);
        }
        // cria um nome aleatório para o arquivo
        $nomeAnexo = uniqid(date('HisYmd')).'.'.$request->arquivo->extension();
        // salva o arquivo na pasta destino
        if(!$request->arquivo->storeAs('anexos', $nomeAnexo)){
            return back()->withInput()->with(['success' => false, 'message' => 'Ops, um erro ocorreu ao tentar salvar seu arquivo, tente novamente.']);
        }
        // salva as informaçõoes no banco de dados
        try {
            $request->request->add(['anexo' => $nomeAnexo, 'enderecoIP' => $_SERVER['REMOTE_ADDR']]);
            Pessoas::create($request->all());
            return back()->with(['success' => true, 'message' => 'Cadastro efetuado com sucesso!']);
        } catch (\Throwable $th) {
            return back()->withInput()->with(['success' => false, 'message' => 'Ops, um erro ocorreu ao tentar cadastrar. Erro: '.$th->getMessage()]);
        }
        
    }
}
