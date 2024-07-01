<div>
    <h2 class="text-white">
        inserisci  qui i dati
    </h2>
        <form wire:submit="save">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="inserisci titolo"
                    wire:model="title">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Corpo del post</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"wire:model="body"></textarea>
              </div>
              <button class="btn btn-danger" type="submit">salva</button>
        </form>
    
</div>


