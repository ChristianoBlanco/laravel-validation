$(".cpfcnpj").keydown(function(){
    try {
        $(".cpfcnpj").unmask();
    } catch (e) {}

    var tamanho = $(".cpfcnpj").val().length;

    if(tamanho <= 11){
        $(".cpfcnpj").inputmask("999.999.999-99");
    } else {
        $(".cpfcnpj").inputmask("99.999.999/9999-99");
    }
    });

    $(document).ready(function(){

        $('.cpf').inputmask('999.999.999-99');
        $('.cnpj').inputmask('99.999.999/9999-99');
        $('.titulo').inputmask('999999999/99');
        $('.cnh').inputmask('99999999999');
        $('.inscricao_estadual').inputmask('99.999.99-9');
        $('.nis').inputmask('999.99999.99-9');
        $('.cns').inputmask('999999999999999');
        $('.renavam').inputmask('99999999999');
        $('.certidao').inputmask('999999999999999999999999999999-99');
        $('.ddd').inputmask('999');

    });
