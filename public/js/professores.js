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




});