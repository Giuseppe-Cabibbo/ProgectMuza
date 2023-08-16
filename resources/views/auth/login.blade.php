<x-layout>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-auto">
            <h1>Accedi alla Segnalazione</h1>
            <p>Quando crei la Inbox, ti sarà assegnato un numero della segnalazione e sceglierai una password. Usa il numero della segnalazione e la password per accedere alla Inbox e vedere se hai ricevuto domande.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-auto">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Numero segnalazione</label>
                  <input type="number" class="form-control" name="numero">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
              </form>
        </div>
    </div>
</div>

</x-layout>





