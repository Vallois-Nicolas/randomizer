$('#uniName').on('blur', function() {
    if ($('#uniName').val() == '') {
        $('#uniName').removeClass('hover:border-gray-500');
        $('#uniName').removeClass('mb-5');
        $('#uniName').addClass('border-red-600');
        $('<p class="text-red-600 mb-3" id="emptyuniName">Le champ ne peut être vide</p>').insertAfter($('#uniName'));
        $('#verifyNewUni').attr('disabled', '');
        $('#verifyNewUni').addClass('opacity-50 cursor-not-allowed');
    } else if ($('#uniName').val() != '' && $('#emptyuniName').length) {
        $('#uniName').removeClass('border-red-600');
        $('#verifyNewUni').removeAttr('disabled');
        $('#verifyNewUni').removeClass('opacity-50 cursor-not-allowed');
        $('#uniName').addClass('border-green-500 mb-5');
        $('#emptyuniName').remove();
    } else {
        $('#uniName').removeClass('hover:border-gray-500');
        $('#uniName').addClass('border-green-500');
    }
});
$('#verifyNewUni').on('click', function(e) {

    e.preventDefault();

    let dataUni = {
        uniName: $('#uniName').val()
    }
    async function submitNewUni() {
        let response = await fetch("/Controllers/AjaxSearchUniverse.php", { 
            method : "POST",
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'Accept':       'application/json'
            },
            body: JSON.stringify(dataUni)
        });
        let result = await response.json();
        if (result == false && $('#alreadyExistsUni').length) {
            $('#alreadyExistsUni').remove()
            $('#submitNewUni').removeAttr('disabled');
            $('#submitNewUni').removeClass('opacity-50 cursor-not-allowed');
            $('<p class="text-green-500 mb-2" id="doesntExistCharacter">L\'univers peut être envoyé !</p>').insertBefore($('#submitNewUni'));
        } else if (result != false) {
            $('<p class="text-red-600 mb-2" id="alreadyExistsUni">L\'univers semble être déjà présent dans la base de données !</p>').insertBefore($('#submitNewUni'));
        } else {
            $('#submitNewUni').removeAttr('disabled');
            $('#submitNewUni').removeClass('opacity-50 cursor-not-allowed');
            $('<p class="text-green-500 mb-2" id="doesntExistCharacter">Le personnage peut être envoyé !</p>').insertBefore($('#submitNewUni'));
        }
    }

    submitNewUni();

})