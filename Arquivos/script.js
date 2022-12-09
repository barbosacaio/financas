// Função para alterar entre modo claro e escuro
function alterarModo(){
    // Seleciona o 'body' do 'index.php'
    var elemento = document.body;
    // Adiciona ou retira a classe 'modo-escuro'
    elemento.classList.toggle('modo-escuro');
    // Salva o botão de alterar modo numa variável
    var alterarModoIcone = document.getElementById('alterarModoIcone');
    // Salva o ícone do site numa variável
    var logo = document.getElementById('logoFinancas');
    // Verifica se o 'body' está ou não com a classe
    if(elemento.classList.contains('modo-escuro')){
        // Altera o ícone para o de modo escuro
        jQuery(alterarModoIcone).attr('src', 'Imagens/Utilitários/alterarModo_escuro_64px.png');
        jQuery(logo).attr('src', 'Imagens/Logos/financas_darkmode_64px.png');
    }else{
        // Altera o ícone para o de modo claro
        jQuery(alterarModoIcone).attr('src', 'Imagens/Utilitários/alterarModo_claro_64px.png');
        jQuery(logo).attr('src', 'Imagens/Logos/financas_lightmode_64px.png');
    }
}