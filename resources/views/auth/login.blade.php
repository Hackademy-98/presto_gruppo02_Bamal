<x-layout>

    <div class="container my-5">
        <div class="row pt-5 ">
            <div class="col-12 col-md-7 mt-4">
                <h1 class="pb-3 t-b">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label t-b fs-5">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label form-label t-b fs-5 ">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn mt-2 bg-o rounded-5 text-white btnOrange">Submit</button>
                    
                </form>
               
            </div>
           
            
        </div>
    </div>

</x-layout>