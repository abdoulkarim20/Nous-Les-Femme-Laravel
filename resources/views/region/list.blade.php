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
                <h3>OGC Nous le femmes</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="navbar-brand text-white mx-2" id="add-app" aria-current="page" href="">Ajouter un apprenant</a> -->
                    <a class="navbar-brand text-white mx-2" id="liste-section" aria-current="page" href="{{ route ('regions.create') }}">Ajouter une region</a>
                    <!-- <a href="liste.html" class="btn btn-primary mt-5"></a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <!-- <h4 class="text-center">La liste des Regions</h4> -->
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom de la Region</th>
                    <th scope="col">Superficie de la Region</th>
                    <th scope="col" colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($regions as $region)
                <tr>
                    <td>{{$region->id}}</td>
                    <td>{{$region->nom}}</td>
                    <td>{{$region->supperfice}}</td>
                    <td class="text-center"><a href=""><i class="bi bi-eye-fill" style="font-size: 1.5rem;"></i></a></td>
                    <td class="text-center"><a href="{{ route ('regions.edit',$region->id) }}"><i class="bi bi-pencil-square" style="font-size: 1.5rem;"></i></a></td>
                    <td class="text-center">
                        <form method="POST" action="{{ route ('regions.destroy',$region->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger icon-save">Delete</button>
                            <!-- <input type="submit" value="Delete" style="border-color: transparent; color:#ce0033"> -->
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>