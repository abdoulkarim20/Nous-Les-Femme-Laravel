<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire d'ajout d'une regions</title>
</head>

<body>
    <main class="container">
        <div class="row mt-5">
            <div class="col-6">
                <h3 class="text-center">Ajouter une region</h3>
                <form action="{{ route ('regions.store') }}" method="POST">
                    @csrf
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom de la region</label>
                        <input type="text" class="form-control" name="nom" id="nom" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="superficie" class="form-label">Superficie de la region</label>
                        <input type="text" class="form-control" name="supperfice" id="superficie" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregister</button>
                </form>
            </div>
        </div>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>