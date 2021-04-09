@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
      

        <div class="col-sm-8 mx-auto">
            <div class="card px-3 py-3 box-border">
                <table class="table">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>TANGGAL</th>
                        <th>NOMINAL</th>
                        <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $datauser as $data )
                        <tr>
                            <td class="text-lg">{{ $data->ID_EMP }}</td>
                            <td class="text-lg">{{ $data->TANGGAL_PINJAM }}</td>
                            <td class="text-lg">{{ $data->NOMINAL_PINJAM }}</td>
                            <td class="text-lg">
                                @if ( $data->STATUS == 0 )
                                    On Progress
                                @elseif ( $data->STATUS == 1 )
                                    Cair 
                                @elseif ( $data->STATUS == 9 )
                                    Tidak Disetujui
                                @else
                                    Tidak
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

     

    </div>
    <footer class="footer">

      @include('layouts.footer')

    </footer>

@include('layouts.js')