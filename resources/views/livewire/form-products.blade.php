<div>


<div class="container">
    <div class="row pt-5 ">
        <div class="col-12 pt-5">
            <h1 class="t-b mb-4 mt-4">Inserisci il tuo annuncio</h1>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
</div>
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 mb-5">
                
                    <form wire:submit.prevent='store'>
                        <div class="mb-3">
                            <label for="img" class="form-label fs-5 t-b">Img</label>
                            <input type="file" class="form-control" id="img" name="img" wire:model='img'>
                            @error ('img') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label fs-5 t-b">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" wire:model='name'>
                            @error ('name')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label fs-5 t-b">Descrizione</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="5" wire:model='description'></textarea> 
                            @error ('description')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label fs-5 t-b">Categoria</label>
                            <select class="form-select" aria-label="Default select example" name="category" wire:model.defer='category' id="category">
                                <option>Seleziona Categoria</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error ('category')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="condition" class="form-label fs-5 t-b">Condizione</label>
                            <select class="form-select" aria-label="Default select example" name="condition" wire:model.defer='condition' id="condition">
                                <option>Condizione oggetto</option>
                                @foreach ($conditions as $condition)
                                <option value="{{$condition->id}}">{{$condition->name}}</option>
                                @endforeach
                            </select>
                            @error ('condition')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="mb-3 input-group">
                            <label for="price" class="form-label"></label>
                            <span class="input-group-text fw-semibold" id="basic-addon1">€</span>
                            <input type="text" class="form-control" id="price" name="price" wire:model='price'>
                            @error ('price')<p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <button class="btn btnOrange bg-o mt-2 text-white rounded-5" type="submit">Crea Annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
