$(document).ready(function () {
    var urlBase = 'http://localhost:8000';
    var urlApi = urlBase + '/api';

    var profesorres = [];

    $.ajax({
        url: urlApi + '/professores',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            profesorres = data;
            carregaProfessores();
        }
    });

    function carregaProfessores() {
        console.log(profesorres);
        for (professor of profesorres) {
            $('.tabela-professores').append(
                `<tr>
                    <td>${professor.Nome}</td>
                    <td>${professor.Instituicao}</td>
                    <td><a class="btn btn-info mais-detalhes-professor" href="${urlBase + '/professores/' + professor.ID}">Mais</a></td>
                </tr>`
            );
        }
    }

    var instituicoes = [];

    $.ajax({
        url: urlApi + '/instituicoes',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            instituicoes = data;
            carregaInstituicoes();
        }
    });

    function carregaInstituicoes() {
        for (instituicao of instituicoes) {
            $('.tabela-instituicoes').append(
                `<tr>
                    <td>${instituicao.Nome}</td>
                    <td>${instituicao.Sigla}</td>
                    <td>${instituicao.UF}</td>
                    <td><a class="btn btn-info mais-detalhes-professor" href="${urlBase + '/instituicoes/' + instituicao.Sigla}">Mais</a></td>
                </tr>`
            );
        }
    }

    var alunos = [];

    $.ajax({
        url: urlApi + '/alunos',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            alunos = data;
            carregaAlunos();
        }
    });

    function carregaAlunos() {
        for (aluno of alunos) {
            $('.tabela-alunos').append(
                `<tr>
                    <td>${aluno.Nome}</td>
                    <td>${aluno.Curso}</td>
                    <td>${aluno.UF}</td>
                    <td><a class="btn btn-info mais-detalhes-professor" href="${urlBase + '/alunos/' + aluno.Matricula}">Mais</a></td>
                </tr>`
            );
        }
    }


    var orientacoes = [];

    $.ajax({
        url: urlApi + '/orientacoes',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            orientacoes = data;
            carregaOrientacoes();
        }
    });

    function carregaOrientacoes() {
        for (orientacao of orientacoes) {
            $('.tabela-orientacoes').append(
                `<tr>
                    <td>${orientacao.Professor}</td>
                    <td>${orientacao.Aluno}</td>
                    <td>${orientacao.Fim}</td>
                    <td><a class="btn btn-info mais-detalhes-professor" href="${urlBase + '/orientacoes/' + orientacao.ID}">Mais</a></td>
                </tr>`
            );
        }
    }


});