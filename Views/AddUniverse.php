<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/tailwindcss/dist/tailwind.css">
    <title>Randomizer - Ajout Univers</title>
</head>

<body class="bg-gradient-to-r from-teal-400 to-blue-500">
    <div class="box-border bg-white shadow-2xl rounded-b-lg h-20 sticky top-0 <?= isset($message) ? 'mb-24' : 'mb-32' ?>">
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
        <?php
        if (isset($message)) {
            ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 w-1/3 mx-auto mb-12 shadow-2xl" role="alert">
                <p class="font-bold">Succès !</p>
                <p><?= $message ?></p>
            </div>
            <?php
        }
        ?>
        <p class="text-3xl font-bold text-white text-center mb-5">Ajouter un univers</p>
        <div class="w-1/2 mx-auto bg-white rounded-lg py-4 px-10 shadow-2xl">
            <form action="" method="post">
                <label for="uniName">Nom de l'univers :</label>
                <input type="text" name="uniName" id="uniName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight hover:border-gray-500 focus:outline-none focus:shadow-outline mb-5" placeholder="Nom de l'univers">
                <div class="text-center w-full mb-4">
                    <p class="font-bold text-orange-500 mb-4">Avant de soumettre l'univers, vérifier d'abord s'il n'est pas déjà présent dans la base de données !</p>
                    <button type="button" id="verifyNewUni" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Vérifier</button>
                </div>
                <div class="text-center w-full">
                    <button disabled class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full opacity-50 cursor-not-allowed" type="submit" name="submitNewUni" id="submitNewUni">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assets/js/ScriptAddUniverse.js"></script>
</body>

</html>