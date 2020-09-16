<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/tailwindcss/dist/tailwind.css">
    <title>Randomizer - Accueil</title>
</head>

<body class="bg-gradient-to-r from-teal-400 to-blue-500">
    <div class="box-border bg-white shadow-2xl rounded-b-lg h-20 sticky top-0">
        <table class="text-center h-full w-full">
            <tbody>
                <tr class="align-middle">
                <td class="transition duration-500 ease-in-out hover:bg-indigo-500 text-indigo-500 hover:text-white h-full">
                        <a href="/home" class="text-2xl h-full">Randomizer !</a>
                    </td>
                    <td class="transition duration-500 ease-in-out hover:bg-blue-500 text-blue-500 hover:text-white h-full">
                        <a href="/add/character" class="text-2xl h-full">Ajouter un personnage d'un univers existant</a>
                    </td>
                    <td class="transition duration-500 ease-in-out hover:bg-teal-500 text-teal-500 hover:text-white h-full">
                        <a href="/add/universe" class="text-2xl h-full">Ajouter un nouvel univers</a>
                    </td>
                    <td class="transition duration-500 ease-in-out hover:bg-green-500 text-green-500 hover:text-white h-full">
                        <a href="/add/both" class="text-2xl h-full">Ajouter un personnage et son univers</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container mx-auto h-64" id="mainContainer">
        <form action="" method="post" class="w-full h-full inline-block align-middle firstRandom mt-64" id="formYeah">
            <button type="submit" id="randomize" name="randomize" class="transition duration-500 ease-in-out w-full h-56 bg-white hover:bg-purple-700 border border-blue-500 hover:border-transparent text-blue-500 hover:text-white text-6xl font-bold text-center rounded-full py-2 px-4 shadow-2xl">Randomize !</button>
        </form>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/AjaxHome.js"></script>
</body>

</html>