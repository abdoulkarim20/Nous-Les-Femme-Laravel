<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Formulaire d'ajout d'une regions</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #ce0033;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.html">
                <h3 class="mx-5">OGC Nous le femmes</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="navbar-brand text-white mx-2" id="add-app" aria-current="page" href="">Ajouter un apprenant</a> -->
                    <a class="navbar-brand text-white mx-2" id="liste-section" aria-current="page" href="{{ route ('entreprises.create') }}">Ajouter une Entreprise</a>
                    <!-- <a href="liste.html" class="btn btn-primary mt-5"></a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="info-box">
            <h4 style="font-weight: bold;" class="text-black mb-3">Les responses fournies par {{$entreprise->repondant->prenoms.' '.$entreprise->repondant->nom}}</h4>
            <h6 style="font-weight: bold;">Nom de l'entreprise: <span style="font-weight: normal;">{{$entreprise->nomEntreprise}}</span></h6>
            <h6 style="font-weight: bold;">Coordonnée GPS: <span style="font-weight: normal;">{{$entreprise->conrdonneeGPS}}</span></h6>
            <h6 style="font-weight: bold;">Région: <span style="font-weight: normal;">{{$entreprise->quartier->commune->departement->region->nom}}</span></h6>
            <h6 style="font-weight: bold;">Départment: <span style="font-weight: normal;">{{$entreprise->quartier->commune->departement->nom}}</span></h6>
            <h6 style="font-weight: bold;">Commune: <span style="font-weight: normal;">{{$entreprise->quartier->commune->nom}}</span></h6>
            <h6 style="font-weight: bold;">Quartier/Village: <span style="font-weight: normal;">{{$entreprise->quartier->nom}}</span></h6>
            <h6 style="font-weight: bold;">Siège Social: <span style="font-weight: normal;">{{$entreprise->siegeSociale}}</span></h6>
            <h6 style="font-weight: bold;">Nom et Prénom du Répondant: <span style="font-weight: normal;">{{$entreprise->repondant->nom.' '.$entreprise->repondant->prenoms}}</span></h6>
            <h6 style="font-weight: bold;">Numero du repondant: <span style="font-weight: normal;">{{$entreprise->repondant->telephone}}</span></h6>
            <h6 style="font-weight: bold;">Le courriel du répondant: <span style="font-weight: normal;">{{$entreprise->repondant->email}}</span></h6>
            <h6 style="font-weight: bold;">la date de création de votre entreprise: <span style="font-weight: normal;">{{$entreprise->dateCreation}}</span></h6>
            <h6 style="font-weight: bold;">Quel est le régime juridique de votre entreprise ?: <span style="font-weight: normal;">{{$entreprise->regime_juridique->nom}}</span></h6>
            <h6 style="font-weight: bold;">registre de commerce: <span style="font-weight: normal;">{{$entreprise->registreCommerce}}</span></h6>
            <h6 style="font-weight: bold;">NINEA: <span style="font-weight: normal;">{{$entreprise->NINEA}}</span></h6>
            <h6 style="font-weight: bold;">Dans quels domaines se situent les services de votre entreprise ?: <span style="font-weight: normal;">{{$entreprise->domaine->nom}}</span></h6>
            <h6 style="font-weight: bold;">Page Web: <span style="font-weight: normal;">{{$entreprise->pageWeb}}</span></h6>
            <h6 style="font-weight: bold;">Quel est le nombre d'employées?: <span style="font-weight: normal;">{{$entreprise->nombreEmployer}}</span></h6>
            <h6 style="font-weight: bold;">Ont-ils des contrats formel?: <span style="font-weight: normal;"><?php echo ($entreprise->contratFormel == 1) ? "OUI" : "NON" ?></span></h6>
            <h6 style="font-weight: bold;">Existe t-il un organigramme claire et respecté ?: <span style="font-weight: normal;"><?php echo ($entreprise->organigrammeRespecter == 1) ? "OUI" : "NON" ?></span></h6>
            <h6 style="font-weight: bold;">Existe t-il un dispositif de formation du personnel ?: <span style="font-weight: normal;"><?php echo ($entreprise->dispositifFormation == 1) ? "OUI" : "NON" ?></span></h6>
            <h6 style="font-weight: bold;">Votre entreprise prend-elle en compte les quotisations sociales et patronale ?: <span style="font-weight: normal;"><?php echo ($entreprise->questionSociale == 1) ? "OUI" : "NON" ?></span></h6>
            <a class="btn btn-danger my-4" href="{{ route ('entreprises.index')}}">Retour</a>
        </div>
    </div>