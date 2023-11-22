<div>


<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class=" alert alert-success">
                    {{session('success')}}
                </div>
                @elseif (session('error'))
                    <div class=" alert alert-danger">
                        {{session('error')}}
                    </div>
            @endif
        </div>
    </div>
</div>
            <div class="container">
            <div class="row">
                <div class="col-12">
                 
                    <form wire:submit.prevent='store'>
                        <div class="mb-3">
                            <label for="img" class="form-label">Img</label>
                            <input type="file" class="form-control" id="img" name="img" wire:model='img'>
                            @error ('img'){{$message}} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" wire:model='name'>
                            @error ('name'){{$message}} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" wire:model='description'></textarea> 
                            @error ('description'){{$message}} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Categoria</label>
                            <select class="form-select" aria-label="Default select example" name="category_id" wire:model='category_id' id="category_id">
                                <option disabled selected>Seleziona Categoria</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error ('category'){{$message}} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="condition" class="form-label">Condizione</label>
                            <input type="text" class="form-control" id="condition" name="condition" wire:model='condition'>
                            @error ('condition'){{$message}} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" wire:model='price'>
                            @error ('price'){{$message}} @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Crea Annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- The whole world belongs to you. --}}
</div>
