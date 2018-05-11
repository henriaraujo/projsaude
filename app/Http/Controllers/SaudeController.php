<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Instituicao;
use App\Medicamento;
use App\Material;

class SaudeController extends Controller
{
	// ---------------------------------------------------------------------------------------------------------------------------------
     /**
     * Create a new controller instance.
     *
     * @return void
     */     
  public function __construct()
  {
      $this->middleware('auth');
  }
// ------------------------------------------------------------------------------------------------------------------------------------
  public function cadastro_instituicao(Request $request)
  {
  	return view('cadastro_instituicao');
  }
// ------------------------------------------------------------------------------------------------------------------------------------
  public function submit_instituicao(Request $request)
  {
  	$id = $request->session()->get('id_session');
   	Instituicao::create([
    	'long'=>$request->long_inst, 'lat'=>$request->lat_inst,
      'setcens'=>$request->setcens_inst, 'areap'=>$request->areap_inst,
      'coddist'=>$request->coddist_inst, 'distrito'=>$request->distrito_inst,
      'codsubpref'=>$request->subpref_inst, 'subpref'=>$request->codsubpref_inst,
      'regiao5'=>$request->regiao5_inst, 'regiao8'=>$request->regiao8_inst,
      'estabelecimento_sa'=>$request->estabelecimento_sa_inst, 'endereco'=>$request->endereco_inst,
      'bairro'=>$request->bairro_inst, 'telefone'=>$request->telefone_inst,
      'cep'=>$request->cep_inst, 'cnes'=>$request->cnes_inst,
      'sa_depadm'=>$request->sa_depadm_inst, 'depadm'=>$request->depadm_inst,
      'sa_tipo'=>$request->sa_tipo_inst, 'tipo'=>$request->tipo_inst,
      'sa_classe'=>$request->sa_classe_inst, 'classe'=>$request->classe_inst,
      'leitos'=>$request->leitos_inst,
    ]);
    return redirect('cadastro_instituicao')->with('status', 'Inserido com sucesso.');
  }
// ------------------------------------------------------------------------------------------------------------------------------------
  public function cadastro_material(Request $request)
    {
    	return view('cadastro_material');
    }
// ------------------------------------------------------------------------------------------------------------------------------------
    public function submit_material(Request $request)
    {
    	$tipo = $request->tipo;
    	if($tipo == 'Material'){
    		Material::create([
    			'nome' =>$request->nome_mat, 'marca'=>$request->marca_mat, 'tamanho'=>$request->tamanho_mat,
    		]);
    		 return redirect('cadastro_material')->with('status', 'Material inserido com sucesso.');
    	}
    	else{
    		Medicamento::create([
    			'nome'=>$request->nome_med, 'nome_generico'=>$request->nome_ge_med, 
    			'concentracao_composicao'=>$request->comp_med, 'forma_farmaceutica'=>$request->forma_med,
    		]);
    		return redirect('cadastro_material')->with('status', 'Medicamento inserido com sucesso.');
    	}
    }
// ------------------------------------------------------------------------------------------------------------------------------------
    public function lista_instituicao(Request $request)
    {
    	$lista_instituicao = DB::table('projsaude.instituicao')
    		->orderby('id','asc')
    		->get();

    	return view('lista_instituicao')
    		->with('lista_instituicao', $lista_instituicao)
    		->render();
    }
// ------------------------------------------------------------------------------------------------------------------------------------
    public function info_instituicao(Request $request)
    {
    	$instituicao = DB::table('projsaude.instituicao')
    		->where('id','=', $request->input('id'))
    		->first();
    		
    	return view('info_instituicao')
    		->with('instituicao', $instituicao);

    }
// ------------------------------------------------------------------------------------------------------------------------------------
    public function lista_material(Request $request)
    {

    }
// ------------------------------------------------------------------------------------------------------------------------------------
}
