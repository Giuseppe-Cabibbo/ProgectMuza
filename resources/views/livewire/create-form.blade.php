<div>
    <div class="container-fluid m-4">
        <div class="row">
            <div class="col-3 scrollable-list mx-5">
                <ol>
                    <li class="list">In che luogo si è verificato l’evento che intendi segnalare? </li>
                    <li class="list">Di quale categoria di comportamento si tratta?</li>
                    <li class="list">Hai avuto modo di parlare con altri di quanto intedi segnalare?</li>
                    <li class="list">Quando si è verificato il fatto (data/periodo)?</li>
                    <li class="list">Dove si è verificato il fatto?</li>
                    <li class="list">Puoi descrivere l'episodio nel modo più dettagliato possibile?</li>
                    <li class="list">Chi è l'autore del fatto e terze parti?</li>
                </ol>
            </div>
            <div class="col-9 border rounded p-3" style="border-color: #e0e0e0; max-width: 600px;">
                <form wire:submit.prevent="createForm">
                    <div class="mb-3">
                        <p class="frage">Domanda 1<span class="frage1">/10</span></p>
                        <button type="submit" class="btn btn-unstyled"><span><i class="arrow-third fa-solid fa-arrow-right fragearrow" style="color: #9252c7;"></i></span></button>
                        <label class="form-label">In che luogo si è verificato l’evento che intendi segnalare?</label>

                        <select class="form-select my-5" wire:model="place">
                            <option value="" disabled selected>Seleziona il Paese</option>
                            <option value="Italia">Italia</option>
                            <option value="Altro">Altro</option>
                        </select>

                        {{-- @error('place')
                            <span class="error bg-danger">{{$message}}</span>
                        @enderror --}}
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
