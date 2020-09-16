$('#charName').on('blur', function() {
    if ($('#charName').val() == '') {
        $('#charName').removeClass('hover:border-gray-500');
        $('#charName').removeClass('mb-5');
        $('#charName').addClass('border-red-600');
        $('<p class="text-red-600 mb-3" id="emptyCharName">Le champ ne peut être vide</p>').insertAfter($('#charName'));
        $('#verifyNewChar').attr('disabled', '');
        $('#verifyNewChar').addClass('opacity-50 cursor-not-allowed');
    } else if ($('#charName').val() != '' && $('#emptyCharName').length) {
        $('#charName').removeClass('border-red-600');
        $('#verifyNewChar').removeAttr('disabled');
        $('#verifyNewChar').removeClass('opacity-50 cursor-not-allowed');
        $('#charName').addClass('border-green-500 mb-5');
        $('#emptyCharName').remove();
    } else {
        $('#charName').removeClass('hover:border-gray-500');
        $('#charName').addClass('border-green-500');
    }
});
$('#charPath').on('blur', function() {
    if ($('#charPath').val() == '') {
        $('#charPath').removeClass('hover:border-gray-500');
        $('#charPath').removeClass('mb-5');
        $('#charPath').addClass('border-red-600');
        $('<p class="text-red-600 mb-3" id="emptyCharPath">Le champ ne peut être vide</p>').insertAfter($('#charPath'));
        $('#verifyNewChar').attr('disabled', '');
        $('#verifyNewChar').addClass('opacity-50 cursor-not-allowed');
    } else if ($('#charPath').val() != '' && $('#emptyCharPath').length) {
        $('#charPath').removeClass('border-red-600');
        $('#verifyNewChar').removeAttr('disabled');
        $('#verifyNewChar').removeClass('opacity-50 cursor-not-allowed');
        $('#charPath').addClass('border-green-500 mb-5');
        $('#emptyCharPath').remove();
    } else {
        $('#charPath').removeClass('hover:border-gray-500');
        $('#charPath').addClass('border-green-500');
    }
});
$('#universe').on('blur', function() {
    if ($('#universe').val() == null) {
        $('#universe').removeClass('hover:border-gray-500');
        $('#universe').removeClass('mb-6');
        $('#universe').addClass('border-red-600');
        $('<p class="text-red-600 mb-6" id="emptyUniverse">Il faut choisir un univers</p>').insertAfter($('#universe'));
        $('#verifyNewChar').attr('disabled', '');
        $('#verifyNewChar').addClass('opacity-50 cursor-not-allowed');
    } else if ($('#universe').val() != null && $('#emptyUniverse').length) {
        $('#universe').removeClass('border-red-600');
        $('#verifyNewChar').removeAttr('disabled');
        $('#verifyNewChar').removeClass('opacity-50 cursor-not-allowed');
        $('#universe').addClass('border-green-500 mb-6');
        $('#emptyUniverse').remove();
    } else {
        $('#universe').removeClass('hover:border-gray-500');
        $('#universe').addClass('border-green-500');
    }
});
$('#verifyNewChar').on('click', function(e) {

    e.preventDefault();

    let dataChar = {
        charName: $('#charName').val(),
        universe: $('#universe').val()
    }
    async function submitNewchar() {
        let response = await fetch("/Controllers/AjaxSearchCharacter.php", { 
            method : "POST",
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'Accept':       'application/json'
            },
            body: JSON.stringify(dataChar)
        });
        console.log(JSON.stringify(dataChar))
        let result = await response.json();
        if (result == false && $('#alreadyExistsCharacter').length) {
            $('#alreadyExistsCharacter').remove()
            $('#submitNewChar').removeAttr('disabled');
            $('#submitNewChar').removeClass('opacity-50 cursor-not-allowed');
            $('<p class="text-green-500 mb-2" id="doesntExistCharacter">Le personnage peut être envoyé !</p>').insertBefore($('#submitNewChar'));
        } else if (result != false) {
            $('<p class="text-red-600 mb-2" id="alreadyExistsCharacter">Le personnage semble être déjà présent dans la base de données !</p>').insertBefore($('#submitNewChar'));
        } else {
            $('#submitNewChar').removeAttr('disabled');
            $('#submitNewChar').removeClass('opacity-50 cursor-not-allowed');
            $('<p class="text-green-500 mb-2" id="doesntExistCharacter">Le personnage peut être envoyé !</p>').insertBefore($('#submitNewChar'));
        }
    }

    submitNewchar();

})