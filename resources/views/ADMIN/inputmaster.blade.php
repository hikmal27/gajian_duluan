@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
      

        <div class="col-md-6 mx-auto ">
            <div class="card px-3 py-3">
                <div class="text-xl font-bold text-center">
                    Input Master
                </div>
                <div>
                    <form class="d-flex flex-column" action="/admin/inputmaster/status" method="post">
                        {{csrf_field()}}
                        <select class="border-0 bg-light px-3 mt-3 py-2" name="nama" id="nama">
                            @foreach ( $data as $d )
                                <option value="{{ $d->id }}">{{ $d->name }}</option>
                            @endforeach
                        </select>

                        <select class="border-0 bg-light px-3 mt-3 py-2" name="input_master" id="input_master">
                            <option value="1">TAD</option>
                            <option value="2">BM</option>
                            <option value="3">ADMIN</option>
                        </select>
                        <button class="btn btn-success mt-2" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>

     

    </div>
    <footer class="footer">

      @include('layouts.footer')

    </footer>

@include('layouts.js')



