<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
            name="csrf-token"
            content="<?php"
            $token="csrf_token();"
            echo
            $token;
            ?
        />
    <title>Szakdoga</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Ajax.js"></script>
    <script src="../Szakdoga.js"></script>
    <script src="../js.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">
                        Admin oldal
                        <table class="listaadmin table table-responsive table-striped">
                            <thead>
                            <tr class="fejlec">
                                <th>Szakdolgozat címe</th>
                                <th>Készítők neve</th>
                                <th>GitHub link</th>
                                <th>Szakdolgozat elérhetősége</th>
                                <th></th>
                                <th></th>
</tr>
                            </thead>
                            <tbody class="szulo">
                                <tr class="sablon">
                                <td class="szakdogacime"></td>
                                <td class="tagok"></td>
                                <td class="githublink"></td>
                                <td class="oldallink"></td>
                                <td class="modosit"><button>Módosít</button></td>
                                <td class="torol"><button>Töröl</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ujadat col-md-6 mx-auto">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor row"><label class="col-md-5" for="szakdoga_nev">Szakdolgozat címe</label><input class="col-md-6" type="text" id="szakdoga_nev"></div>
                            <div class="sor row"><label class="col-md-5" for="tagokneve">Készítők neve</label><input class="col-md-6" type="text" id="tagokneve"></div>
                            <div class="sor row"><label class="col-md-5" for="oldallink">Az oldal elérhetősége </label><input class="col-md-6" type="text" id="oldallink"></div>
                            <div class="sor row"><label class="col-md-5" for="githublink"> GitHub elérhetőség</label><input class="col-md-6" type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

