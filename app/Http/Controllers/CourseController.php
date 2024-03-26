<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Listar os cursos | Método listar | Conforme documentação
    public function index(){
        //dd('listar os cursos');
        // Código para listar os cursos
        // Carregar a VIEW
        return view('courses.index');

    }

    // Detalhes do curso
    public function show()
    {
        // Carregar a VIEW
        return view('courses.show');
    }

    // CREATE
    public function create()
    {
        // Carregar a VIEW
        return view('courses.create');
    }

    // Cadastrar no banco de dados o novo curso
    public function store(Request $request)
    {

        // Não possui VIEW, pois depois de cadastrar ele deve redirecionar para outra pagina
        // Cadastrar no banco de dados na tabela cursos os valores de todos os campos
        Course::create($request->all());
        return redirect()->route('course.show')->with('success', 'Curso cadastrado com sucesso!');
    }

    // EDIT
    public function edit()
    {
        // Carregar a VIEW
        return view('courses.edit');
    }

    //UPDATE | Editar no banco de dados o curso
    public function update(){
        dd("Editar no banco de dados o curso");
    }

    // DESTROY | Excluir o curso do banco de dados
    public function destroy(){
        dd("Excluir o curso do banco de dados");
    }
}
