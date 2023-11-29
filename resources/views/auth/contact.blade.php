<x-layout>

    <div class="container sfondoLavora min-vh-100">
        <div class="row pt-5 mt-5">
            <h1 class="mt-3 t-b">Lavora con Noi!</h1>
            <div class="col-12 p-4 bg-transparent pb-5 shadow-lg form rounded-5 mt-4 col-md-7 mt-3">
                
                
                <form action="{{ route('auth.sendEmail') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fs-5">Username</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fs-5">Perchè hai scelto noi?</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
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