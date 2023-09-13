<x-layout>

    

    <div class="modal-content">
        <div class="modal-body">
            <h1 class="text-center">Accedi alla Segnalazione</h1>
            <p class="text-center">Quando crei la Inbox, ti sarà assegnato un numero della segnalazione e sceglierai una password. Usa il numero della segnalazione e la password per accedere alla Inbox e vedere se hai ricevuto domande.</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="number" class="form-control" name="numero" placeholder="Numero Segnalazione">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password di Accesso">
                </div>
                <button type="submit" class="btn" style="background: none; border: none; float: right; font-size: small; color: blueviolet;">Accedi</button>
                <button id="backButton" style="background: none; border: none; font-size: small; color: blueviolet; float: left;">Indietro</button>
            </form>
        </div>
    </div>
    
</x-layout>






