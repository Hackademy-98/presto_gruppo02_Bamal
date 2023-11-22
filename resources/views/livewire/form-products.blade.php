<div class="container">
    <div class="row">
        <div class="col-12">
            
            
            
            <div class="row">
                <div class="col-12">
                    <form wire:submit.prevent='store'>
                        <div class="mb-3">
                            <label for="img" class="form-label">Img</label>
                            <input type="file" class="form-control" id="img" name="img" wire:model='img'>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" wire:model='name'>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" wire:model='description'></textarea> 
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select name="category" id="category" wire:model='category' ></select>
                        </div>
                        <div class="mb-3">
                            <label for="condition" class="form-label">Condizione</label>
                            <input type="text" class="form-control" id="condition" name="condition" wire:model='condition'>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" wire:model='price'>
                        </div>
                        <button class="btn btn-primary" type="submit">Crea Annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- The whole world belongs to you. --}}
</div>
