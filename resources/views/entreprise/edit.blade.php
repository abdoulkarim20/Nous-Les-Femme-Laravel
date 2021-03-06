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
    <div class="container mt-5">
        <div class="card card-outline">
            <div class="card-header bg-blue">
                <h4 class="text-black text-center m-b-0">Formulaire pour repondre aux questions d'enquettes</h4>
            </div>
            <div class="card-body">
                <form action="{{ route ('entreprises.update',$entreprise->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="Nom de l???entreprise">Nom de l???entreprise</label>
                                <input type="text" class="form-control" name="nomEntreprise" value="{{$entreprise->nomEntreprise}}" id="Nom de l???entreprise">
                            </div>
                            <div class="form-group mb-3">
                                <label for="coordonnees">Coordonn??e GPS</label>
                                <input type="text" class="form-control" name="conrdonneeGPS" value="{{$entreprise->conrdonneeGPS}}" id="coordonnees">
                            </div>
                            <div class="form-group mb-3">
                                <label for="siege">Si??ge Social</label>
                                <input type="text" class="form-control" name="siegeSociale" value="{{$entreprise->siegeSociale}}" id="siege">
                            </div>
                            <div class="form-group mb-3">
                                <label for="dateentreprise">Quelle est la date de cr??ation de votre entreprise ?</label>
                                <input type="date" class="form-control" name="dateCreation" value="{{$entreprise->dateCreation}}" id="dateentreprise">
                            </div>
                            <div class="form-group mb-3">
                                <label for="registre">registre de commerce</label>
                                <input type="text" class="form-control" name="registreCommerce" value="{{$entreprise->registreCommerce}}" id="registre">
                            </div>
                            <div class="form-group mb-3">
                                <label for="ninea entreprise">Le NINEA de votre entreprise</label>
                                <input type="text" class="form-control" name="NINEA" value="{{$entreprise->NINEA}}" id="exampleInputEmail1">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pageWeb">Page Web de votre entreprise</label>
                                <input type="text" class="form-control" name="pageWeb" value="{{$entreprise->pageWeb}}" id="pageWeb">
                            </div>
                            <div>
                                <label>Quel est le nombre d'employ??es? :</label>
                                <select class="form-select" name="nombreEmployer">
                                    <option value="{{$entreprise->nombreEmployer}}" selected></option>
                                    <option value="1 a 5">1 ?? 5</option>
                                    <option value="5 a 15">5 ?? 15</option>
                                    <option value="plus">plus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label>Ont-ils des contrats formel? :</label>
                                <select class="form-select" name="contratFormel">
                                    <option value="{{$entreprise->contratFormel}}" selected></option>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Existe t-il un organigramme claire et respect?? ? :</label>
                                <select class="form-select" name="organigrammeRespecter">
                                    <option value="{{$entreprise->organigrammeRespecter}}" selected></option>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Existe t-il un dispositif de formation du personnel ? :</label>
                                <select class="form-select" name="dispositifFormation">
                                    <option value="{{$entreprise->dispositifFormation}}" selected></option>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Votre entreprise prend-elle en compte les quotisations sociales et patronale ? :</label>
                                <select class="form-select" name="questionSociale">
                                    <option value="{{$entreprise->questionSociale}}" selected></option>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="ninea entreprise">Dans quel Quartier se trouve l'entreprise</label>
                                <select class="form-select" name="quartier_id">
                                    <option selected class="form-group" value="{{$entreprise->quartier->id}}">{{$entreprise->quartier->nom}}</option>
                                    @foreach ($quartiers as $quartier)
                                    <option class="form-group" value="{{$quartier->id}}">{{$quartier->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ninea entreprise">Domaine d'activite de l'entreprise</label>
                                <select class="form-select" name="domaine_id">
                                    <option selected class="form-group" value="{{$entreprise->domaine->id}}">{{$entreprise->domaine->nom}}</option>
                                    @foreach ($domaines as $domaine)
                                    <option class="form-group" value="{{$domaine->id}}">{{$domaine->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ninea entreprise">Numero telephone du repondant</label>
                                <select class="form-select" name="repondant_id">
                                    <option selected class="form-group" value="{{$entreprise->repondant->id}}">{{$entreprise->repondant->telephone}}</option>
                                    @foreach ($repondants as $repondant)
                                    <option class="form-group" value="{{$repondant->id}}">{{$repondant->telephone}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="ninea entreprise">Regime juridique de l'entreprise</label>
                                <select class="form-select" name="regime_juridique_id">
                                    <option selected class="form-group" value="{{$entreprise->regime_juridique->id}}">{{$entreprise->regime_juridique->nom}}</option>
                                    @foreach ($regime_juridiques as $regime_juridique)
                                    <option class="form-group" value="{{$regime_juridique->id}}">{{$regime_juridique->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="my-2 text-center">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                        <a class="btn btn-danger" href="?route=Organisation&module=list">Annuler</a>
                    </div>
                </form>
                <h5 class="text-black mt-3 text-center">* Tous les champs sont oligatoires</h5>
            </div>
        </div>
    </div>
    </div>