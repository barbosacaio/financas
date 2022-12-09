// Função para alterar entre modo claro e escuro
function alterarModo(){
    // Seleciona o 'body' do 'index.php'
    var elemento = document.body;
    // Adiciona ou retira a classe 'modo-escuro'
    elemento.classList.toggle('modo-escuro');
    // Salvando elementos que precisam ser alterados em variáveis
    var alterarModoIcone = document.getElementById('alterarModoIcone');
    var logo = document.getElementById('logoFinancas');
    var hamburguer = document.getElementById('hamburguer');
    // Verifica se o 'body' está ou não com a classe
    if(elemento.classList.contains('modo-escuro')){
        // Altera o ícone para o de modo escuro
        jQuery(alterarModoIcone).attr('src', 'Imagens/Utilitários/alterarModo_escuro_64px.png');
        jQuery(logo).attr('src', 'Imagens/Logos/financas_darkmode_64px.png');
        jQuery(hamburguer).attr('src', 'Imagens/Utilitários/hamburguer_escuro_64px.png');
    }else{
        // Altera o ícone para o de modo claro
        jQuery(alterarModoIcone).attr('src', 'Imagens/Utilitários/alterarModo_claro_64px.png');
        jQuery(logo).attr('src', 'Imagens/Logos/financas_lightmode_64px.png');
        jQuery(hamburguer).attr('src', 'Imagens/Utilitários/hamburguer_claro_64px.png');
    }
}