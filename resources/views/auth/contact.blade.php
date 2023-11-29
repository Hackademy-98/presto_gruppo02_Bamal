<x-layout>

    <div class="container">
        <div class="row pt-5 my-5">
            <div class="col-12 col-md-7">
                <h1 class="mt-4 mb-4 t-b">Lavora con Noi!</h1>
                
                <form action="{{ route('auth.sendEmail') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fs-5">Username</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fs-5">Perchè hai scelto noi?</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn bg-o text-white rounded-5 mt-2 btnOrange">Invia candidatura</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>