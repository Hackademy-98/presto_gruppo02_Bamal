<x-layout>

    <div class="container-fluid vh-100  sfondoLogin">        
        <div class="row pt-5 justify-content-center mt-5">
            <div class="col-12 card p-4 bg-transparent pb-5 shadow-lg form rounded-5 mt-4 col-md-5 mt-5">
                <h1 class="pb-3 t-b fw-">Login</h1>
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
                    <button type="submit" class="btn mt-2 bg-o rounded-5 text-white btnOrange" id="btnSubmit">Submit</button>
                    
                </form>               
            </div>
           {{-- <div class="col-12 ms-5 col-md-4 d-flex align-items-end">
            <img id="imgSide" class="imgSide" src="/media/at-iso-color.png" alt="">

           </div> --}}
            
        </div>
    </div>

</x-layout>