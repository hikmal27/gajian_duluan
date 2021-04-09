@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
      

      <div class="container">
        <div class="col-8 card mx-auto px-3 py-3">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                        <th>SIMID</th>
                        <th>NAMA</th>
                        <th>TANGGAL</th>
                        <th>NOMINAL</th>
                        <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pinjam as $pinjam)
                            <tr>
                                <td>{{ $pinjam->ID_EMP }}</td>
                                <td>{{ $pinjam->NAMA }}</td>
                                <td>{{ $pinjam->TANGGAL_PINJAM }}</td>
                                <td>{{ $pinjam->NOMINAL_PINJAM }}</td>
                                <td>
                                  <a class="btn btn-success btn-md" href="/bm/setuju/<?php echo $pinjam->ID ?>">stj</a> 
                                  <a class="btn btn-danger btn-md" href="/bm/tidaksetuju/<?php echo $pinjam->ID ?>" >tdk</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
        </div>
      </div>

     

    </div>
    <footer class="footer">

      @include('layouts.footer')

    </footer>

@include('layouts.js')