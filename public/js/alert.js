// se os campos obrigatórios não forem preenchidos vai estourar um alert

document.querySelector('form').addEventListener('submit', function(event) {
    const titleInput = document.getElementById('title');
    const cityInput = document.getElementById('city');
    const descriptionInput = document.getElementById('description');
    const dateInput = document.getElementById('date');

    let errorMessage = '';

    if (!titleInput.value) {
        errorMessage += 'Por favor, preencha o nome do evento.\n';
    }

    if (!cityInput.value) {
        errorMessage += 'Por favor, preencha a cidade do evento.\n';
    }

    if (!descriptionInput.value) {
        errorMessage += 'Por favor, preencha a descrição do evento.\n';
    }

    if (!dateInput.value) {
        errorMessage += 'Por favor, preencha a data do evento.';
    }

    if (errorMessage !== '') {
        event.preventDefault(); // Impede o envio do formulário se houver campos em branco
        alert(errorMessage);
    }
});