document.getElementById('randomize').addEventListener("click", function (e) {

    e.preventDefault();

    async function submit() {
        let response = await fetch("/Controllers/AjaxHomeController.php", { method : "POST" });
        let result = await response.json();
        if (document.getElementById('formYeah').hasAttribute("id")) {
            let resultInPage = `<div class="flex h-full w-full mt-56"><div class="flex-auto h-full w-full text-center px-auto"><p class="text-4xl text-white" id="charName">${result['charName']} - ${result['uniName']}</p><img src="${result['charPath']}" alt="${result['charName']}" class="h-full text-center mx-auto mt-5" id="charImg"></div><div class="flex-auto w-full"><button type="button" onclick="randomizeAgain()" name="randomizeAgain" class="mt-16 transition duration-500 ease-in-out w-full h-56 bg-white hover:bg-purple-700 border border-blue-500 hover:border-transparent text-blue-500 hover:text-white text-6xl font-bold text-center rounded-full py-2 px-4 shadow-2xl">Randomize !</button></div></div>`;
            document.getElementById('formYeah').remove();
            document.getElementById('mainContainer').innerHTML = resultInPage;
        } else {
            document.getElementById('charName').innerHTML = result['charName'] + ' - ' + result['uniName'];
            document.getElementById('charImg').setAttribute('src', result['charPath']);
        }
    }

    submit();

});

async function randomizeAgain() {
    let response = await fetch("/Controllers/AjaxHomeController.php", { method : "POST" });
    let result = await response.json();
    document.getElementById('charName').innerHTML = result['charName'] + ' - ' + result['uniName'];
    document.getElementById('charImg').setAttribute('src', result['charPath']);
}