// Validação: Tela de Login.
function ValidarLogin() {
    if ($("#emailUsuario").val().trim() == '') {
        alert("Preencher o campo obrigatório E E-MAIL!");
        $("#emailusuario").focus();
        return false;
    }

    if ($("#senha").val().trim() == '') {
        alert("Preencher o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if ($("#senha").val().trim().lenght < 6 || $('#senha').val().trim().lenght > 8) {
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }

}
// Validação: Tela de ValidarCadastro.
function ValidarCadastro() {
    if ($("#nomeUsuario").val().trim() == '') {
        alert("Preencher o campo obrigatório NOME!");
        $("#nomeUsuario").focus();
        return false;
    }

    if ($("#emailUsuario").val().trim() == '') {
        alert("Preencher o campo obrigatório E-MAIL!");
        $("#emailUsuario").focus();
        return false;
    }

    if ($("#senha").val().trim() == '') {
        alert("Preencher o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if ($("#repSenha").val().trim() == '') {
        alert("Preencher o campo obrigatório REPETIR SENHA!");
        $("#repSenha").focus();
        return false;
    }

    if ($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8) {
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }

    if ($("#senha").val().trim() != $("#repSenha").val().trim()) {
        alert("As SENHAS deverão ser iguais!");
        $("#repSenha").focus();
        return false;
    }

}

// Validação: Tela de Alteração de Dados.
function ValidarMeusDados() {
    if ($("#nomeUsuario").val().trim() == '') {
        alert("Preencher o campo obrigatório NOME!");
        $("#nomeUsuario").focus();
        return false;
    }

    if ($("#emailUsuario").val().trim() == '') {
        alert("Preencher o campo obrigatório E-MAIL!");
        $("#emailUsuario").focus();
        return false;
    }

    if ($("#senha").val().trim() == '') {
        alert("Preencher o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if ($("#senha").val().trim().lenght < 6 || $("#senha").val().trim().lenght > 8) {
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
}

// Validação: Tela de Cadastro e Alteração de Categoria Financeira.
function ValidarCategoria() {
    if ($("#nome").val().trim() == '') {
        alert("Preencher o campo obrigatório NOME DA CATEGORIA!");
        $("#nome").focus();
        return false;
    }
}

// Validação: Tela de Cadastro e Alteração da Empresa.
function ValidarEmpresa() {
    if ($("#empresa").val().trim() == '') {
        alert("Preencher o campo obrigatório NOME DA EMPRESA!");
        $("#empresa").focus();
        return false;
    }

    if ($("#telefone").val().trim() == '') {
        alert("Preencher o campo obrigatório TELEFONE!");
        $("#telefone").focus();
        return false;
    }

    if ($("#endereco").val().trim() == '') {
        alert("Preencher o campo obrigatório ENDEREÇO!");
        $("#endereco").focus();
        return false;
    }
}

// Validação: Tela de Cadastro e Alterção da Conta Bancária.
function ValidarConta() {
    if ($("#banco").val().trim() == '') {
        alert("Preencher o campo obrigatório NOME DO BANCO!");
        $("#banco").focus();
        return false;
    }

    if ($("#agencia").val().trim() == '') {
        alert("Preencher o campo obrigatório NÚMERO DA AGÊNCIA!");
        $("#agencia").focus();
        return false;
    }

    if ($("#numero").val().trim() == '') {
        alert("Preencher o campo obrigatório NÚMERO DA CONTA!");
        $("#numero").focus();
        return false;
    }

    if ($("#saldo").val().trim() == '') {
        alert("Preencher o campo obrigatório SALDO!");
        $("#saldo").focus();
        return false;
    }
}

// Validação: tela de realizar Movimento.
function RealizarMovimento() {
    if ($("#tipo").val() == '') {
        alert("Selecione um TIPO DE MOVIMENTO!");
        $("#tipo").focus();
        return false;
    }

    if ($("#data").val() == '') {
        alert("Selecione uma DATA!!");
        $("#data").focus();
        return false;
    }

    if ($("#valor").val() == '') {
        alert("Preencher o campo obrigatório VALOR!");
        $("#valor").focus();
        return false;
    }

    if ($("#categoria").val() == '') {
        alert("Selecione uma CATEGORIA FINANCEIRA!");
        $("#categoria").focus();
        return false;
    }

    if ($("#empresa").val() == '') {
        alert("Selecione uma EMPRESA!");
        $("#empresa").focus();
        return false;
    }

    if ($("#conta").val() == '') {
        alert("Selecione uma CONTA BANCÁRIA!");
        $("#conta").focus();
        return false;
    }
}

// Validação: Tela de Consultar Movimento.
function ConsultarMovimento() {
    if ($("#tipoMov").val() == '') {
        alert("Selecione um TIPO DE MOVIMENTO!");
        $("#tipoMov").focus();
        return false;
    }

    if ($("#dataInicio").val() == '') {
        alert("Selecione uma DATA DE INÍCIO!");
        $("#dataInicio").focus();
        return false;
    }

    if ($("#dataFinal").val() == '') {
        alert("Selecione uma DATA FINAL!");
        $("#dataFinal").focus();
        return false;
    }
}



