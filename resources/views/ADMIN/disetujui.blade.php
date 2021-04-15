@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
      

        <div class="container">
            <div class="container-sm card mx-auto px-3 py-3">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th>NO</th>
                            <th>SIMID</th>
                            <th>NAMA</th>
                            <th>TANGGAL</th>
                            <th>NOMINAL</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?> 
                            @foreach ($data_disetujui as $disetujui)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $disetujui->ID_EMP }}</td>
                                    <td>{{ $disetujui->NAMA }}</td>
                                    <td>{{ $disetujui->TANGGAL_PINJAM }}</td>
                                    <td>{{ $disetujui->NOMINAL_PINJAM }}</td>
                                    <td>{{ $disetujui->STATUS }}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="/admin/cair/<?php echo $disetujui->ID ?>">cair</a>
                                    </td>
                                    
                                </tr>
                            <?php $i++; ?>
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