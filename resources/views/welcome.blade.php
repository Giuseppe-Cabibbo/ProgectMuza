
<x-layout>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-6">
                    <strong>BUILDING TRUST WITH TRASPARENCY</strong>
                    <h1>Whistleblowing Form</h1>
                    <p>Attraverso questo Portale puoi effettuare segnalazioni di comportamenti o eventi che possono configurarsi come vIolazioni d i leggi o regolamenti (nazionali o dell'Unione europea), o di procedure aziendali o comunque non compatibili con un comportamento eticamente corretto. Ti ricordiamo che, a fronte di specifici pre-requisiti, le segnalazioni possono essere indirizzate anche all'esterno della Società.</p>
                </div>
            </div>
        </div>

        {{-- @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif --}}

    </header>
    
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="box col-12 col-md-auto">
                    <div class="icon-box">
                        <i class="icon fa-regular fa-file-signature" style="color: #f5f2f7;"></i>
                    </div>
                    <div>
                        <h4 class="icon-sub">Segnalazioni</h4>
                    </div>
                    <div class="line">
                        <a href="{{route('form.create')}}">
                            <p class="bef-arrow">Fai una segnalazione<i class="arrow-first fa-solid fa-arrow-right" style="color: #9252c7;"></i></p>
                        </a>
                    </div>
                </div>
                <div class="box col-12 col-md-auto">
                    <div class="icon-box">
                        <i class="icon fa-regular fa-envelope" style="color: #f5f2f7;"></i>
                    </div>
                    <div>
                        <h4 class="icon-sub">Posta Sicura</h4>
                    </div>
                    <div class="line">
                        <a href="{{route('register')}}">
                            <p class="bef-arrow">Vedi aggiornamenti segnalazioni<i class="arrow fa-solid fa-arrow-right" style="color: #9252c7;"></i></p>
                        </a>
                    </div>
                </div>
                <div class="box col-12 col-md-auto">
                    <div class="icon-box">
                        <i class="icon fa-regular fa-comment-dots" style="color: #f5f2f7;"></i>
                    </div>
                    <div>
                        <h4 class="icon-sub">Anonimato</h4>
                    </div>
                    <div class="line">
                        <a href="">
                            <p class="bef-arrow">Scopri di più<i class="arrow-third fa-solid fa-arrow-right" style="color: #9252c7;"></i></p>
                        </a>
                    </div>
                </div>
                <div class="box col-12 col-md-auto">
                    <div class="icon-box">
                        <i class="icon fa-regular fa-building-shield" style="color: #f5f2f7;"></i>
                    </div>  
                    <div>
                        <h4 class="policy">Policy</h4>
                    </div>
                    <div class="line">
                        <a href="">
                            <p class="bef-arrow">Scopri di più<i class="arrow-third fa-solid fa-arrow-right" style="color: #9252c7;"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>