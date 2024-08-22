document.addEventListener('DOMContentLoaded', function() {
    var imagemInput = document.getElementById('imagem');
    var fileLabel = document.getElementById('fileLabel');
    var allFiles = []; // Array para armazenar todos os arquivos selecionados
    var maxFileSize = 2 * 1024 * 1024; // Tamanho máximo do arquivo em bytes (2 MB neste exemplo)

    if (imagemInput) {
        imagemInput.addEventListener('change', function() {
            var newFiles = Array.from(this.files); // Converte FileList para Array
            var validFiles = [];
            var invalidFiles = [];
            
            newFiles.forEach(file => {
                if (file.size <= maxFileSize) {
                    validFiles.push(file);
                } else {
                    invalidFiles.push(file.name);
                }
            });
            
            // Adiciona apenas arquivos válidos à lista existente
            allFiles = allFiles.concat(validFiles);
            
            var fileNames = allFiles.map(file => file.name);
            var displayText = fileNames.length > 0 ? 
                (fileNames.length > 1 ? `Você adicionou ${fileNames.length} imagens: ${fileNames.join(', ')}` : `Imagem selecionada: ${fileNames[0]}`) : 
                'Nenhuma imagem selecionada';
                
            if (invalidFiles.length > 0) {
                displayText += ` (Arquivos excedendo o limite de ${maxFileSize / 1024 / 1024} MB: ${invalidFiles.join(', ')})`;
            }
            
            fileLabel.textContent = displayText;

            // Limpa o input para permitir a seleção de novos arquivos
            imagemInput.value = ''; 
        });
    }
});
