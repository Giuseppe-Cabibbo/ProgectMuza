<div>
    <div class="container-fluid m-4">
        <div class="row">
            <div class="col-3 scrollable-list mx-5">
                <ol>
                    <li class="list">In che luogo si è verificato l’evento che intendi segnalare? </li>
                    <li class="list">Quando si è verificato l’evento che intendi segnalare (data/periodo)? </li>
                    <li class="list">Seleziona la categoria di eventi che si desidera segnalare </li>
                    <li class="list">Descrizione dell’evento (fatto o omissione) che intendi segnalare </li>
                    <li class="list">Dove si è verificato il fatto?</li>
                    <li class="list">Hai già segnalato l'evento in oggetto al Responsabile o ad altri soggetti?</li>
                    <li class="list">Chi è la persona o le persone a cui la violazione si riferisce (Es. Nome, Cognome, Qualifica o altra informazione utile all’identificazione)?</li>
                    <li class="list">Con che modalità sei venuto a conoscenza dell’evento?</li>
                    <li class="list">Ci sono eventuali altri soggetti che possono confermare o riferire altri elementi relativi all’evento?  Se sì, quali (Nome, Cognome, Qualifica)?</li>
                    <li class="list">Puoi fornirci informazioni aggiuntive?</li>
                </ol>
            </div>
            <div class="col-9 border rounded p-3" style="border-color: #e0e0e0; max-width: 600px;">
                @if($step === 1)
                    <form wire:submit.prevent="createForm">
                        <div class="mb-3">
                            <p class="frage">Domanda 1<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">In che luogo si è verificato l’evento che intendi segnalare?</label>

                            <select class="form-select my-5" wire:model="place" name="place">
                                <option value="" disabled selected>Seleziona il Paese</option>
                                <option value="Italia">Italia</option>
                                <option value="Altro">Altro</option>
                            </select>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 2)
                    <form wire:submit.prevent="createFormStep2">
                        <div class="mb-3">
                            <p class="frage">Domanda 2<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Quando si è verificato l’evento che intendi segnalare (data/periodo)?</label>
                            <input type="date" class="form-control my-5" wire:model="date" name="date">
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 3)
                    <form wire:submit.prevent="createFormStep3">
                        <div class="mb-3">
                            <p class="frage">Domanda 3<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Seleziona la categoria di eventi che si desidera segnalare</label>
                            <select class="form-select my-5" wire:model="category" name="category">
                                <option value="" disabled selected>Categorie</option>
                                <option value="Conflitto di interesse">Conflitto di interesse</option>
                                <option value="Corruzione">Corruzione</option>
                                <option value="Frode ai clienti, alla Società">Frode ai clienti, alla Società</option>
                                <option value="Furto o utilizzo improprio delle risorse e dei beni aziendali">Furto o utilizzo improprio delle risorse e dei beni aziendali</option>
                                <option value="Problematiche inerenti al rapporto di lavoro, misure discriminatorie e molestie">Problematiche inerenti al rapporto di lavoro, misure discriminatorie e molestie</option>
                                <option value="Reati Ambientali">Reati Ambientali</option>
                                <option value="Reati con la Pubblica Amministrazione">Reati con la Pubblica Amministrazione</option>
                                <option value="Reati Informatici">Reati Informatici</option>
                                <option value="Reati Societari">Reati Societari</option>
                                <option value="Reati Tributari">Reati Tributari</option>
                                <option value="Violazione dei Diritti umani e Comportamenti contrari al Codice Etico">Violazione dei Diritti umani e Comportamenti contrari al Codice Etico</option>
                                <option value="Violazione del Diritto d’Autore">Violazione del Diritto d’Autore</option>
                                <option value="Violazione della Privacy">Violazione della Privacy</option>
                                <option value="Violazioni contabili, ivi inclusi flussi finanziari, riciclaggio e finanziamento del terrorismo">Violazioni contabili, ivi inclusi flussi finanziari, riciclaggio e finanziamento del terrorismo</option>
                                <option value="Violazioni in materia di Salute e Sicurezza sul luogo di lavoro">Violazioni in materia di Salute e Sicurezza sul luogo di lavoro</option>
                                <option value="Violazione nel processo di selezione (es. del dipendente/fornitore/etc.)">Violazione nel processo di selezione (es. del dipendente/fornitore/etc.)</option>
                                <option value="Altri illeciti amministrativi, contabili, civili e penali [specificare]">Altri illeciti amministrativi, contabili, civili e penali [specificare]</option>
                                <option value="Altro [specificare]">Altro [specificare]</option>
                            </select>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif
                
                @if($step === 4)
                    <form wire:submit.prevent="createFormStep4">
                        <div class="mb-3 counter">
                            <p class="frage">Domanda 4<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Descrizione dell’evento (fatto o omissione) che intendi segnalare</label>
                            <textarea class="form-control my-5" rows="5" wire:model="description" name="description" placeholder="Descrivi qui..."></textarea>
                            <div class="char-counter">0 / 5000</div>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 5)
                    <form wire:submit.prevent="createFormStep5">
                        <div class="mb-3">
                            <p class="frage">Domanda 5<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Dove si è verificato il fatto?</label>

                            <select class="form-select my-5" wire:model="where" name="where">
                                <option value="" disabled selected>Seleziona il Posto</option>
                                <option value="Azienda">In Azienda</option>
                                <option value="All'esterno dell'azienda">All'esterno dell'azienda</option>
                            </select>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 6)
                <form wire:submit.prevent="createFormStep6">
                    <div class="mb-3">
                        <p class="frage">Domanda 6<span class="frage1">/10</span></p>
                        <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                        <label class="form-label">Hai già segnalato l'evento in oggetto al Responsabile o ad altri soggetti?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Si" wire:model="alarm" name="alarm">
                            <label class="form-check-label">
                              Si
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="No" wire:model="alarm" name="alarm">
                            <label class="form-check-label">
                              No
                            </label>
                          </div>
                        {{-- @error('place')
                            <span class="error bg-danger">{{$message}}</span>
                        @enderror --}}
                    </div>
                </form>
                @endif

                @if($step === 7)
                    <form wire:submit.prevent="createFormStep7">
                        <div class="mb-3 counter">
                            <p class="frage">Domanda 7<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Chi è la persona o le persone a cui la violazione si riferisce (Es. Nome, Cognome, Qualifica o altra informazione utile all’identificazione)?</label>
                            <textarea class="form-control my-5" rows="5" wire:model="people" name="people" placeholder="Scrivi qui..."></textarea>
                            <div class="char-counter">0 / 5000</div>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 8)
                    <form wire:submit.prevent="createFormStep8">
                        <div class="mb-3 counter">
                            <p class="frage">Domanda 8<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Con che modalità sei venuto a conoscenza dell’evento?</label>
                            <textarea class="form-control my-5" rows="5" wire:model="mode" name="mode" placeholder="Scrivi qui..."></textarea>
                            <div class="char-counter">0 / 5000</div>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 9)
                    <form wire:submit.prevent="createFormStep9">
                        <div class="mb-3 counter">
                            <p class="frage">Domanda 9<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Ci sono eventuali altri soggetti che possono confermare o riferire altri elementi relativi all’evento?  Se sì, quali (Nome, Cognome, Qualifica)?</label>
                            <textarea class="form-control my-5" rows="5" wire:model="confirm" name="confirm" placeholder="Scrivi qui..."></textarea>
                            <div class="char-counter">0 / 5000</div>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif

                @if($step === 10)
                    <form wire:submit.prevent="createFormStep10">
                        <div class="mb-3 counter">
                            <p class="frage">Domanda 10<span class="frage1">/10</span></p>
                            <button wire:click="nextStep" type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                            <label class="form-label">Puoi fornirci informazioni aggiuntive?</label>
                            <textarea class="form-control my-5" rows="5" wire:model="info" name="info" placeholder="Scrivi qui..."></textarea>
                            <div class="char-counter">0 / 5000</div>
                            {{-- @error('place')
                                <span class="error bg-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                    </form>
                @endif
                
            </div> 
        </div>
    </div>
</div>
