<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/tailwindcss/dist/tailwind.css">
    <title>Home</title>
</head>

<body class="bg-gradient-to-r from-teal-400 to-blue-500">
    <div class="box-border bg-white shadow-2xl rounded-b-lg h-20 sticky top-0 mb-24">
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
    <div class="container mx-auto" id="mainContainer">
        <p class="text-3xl text-white text-center">Ajouter un personnage provenant d'un univers existant</p>
        <div class="w-1/2 mx-auto bg-white rounded py-4 px-2">
            <label for="charName">Nom du personnage :</label>
            <input type="text" name="charName" id="charName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nom du personnage">
            <label for="charPath">Lien vers l'image (URL) :</label>
            <input type="text" name="charPath" id="charPath" class="mb-8 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Lien vers l'image">
            <div class="text-center w-full">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" name="submitNewChar" id="submitNewChar">Envoyer</button>
            </div>
        </div>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
</body>

</html>