@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
            <div class="container">
                <div class="container-sm card mx-auto px-3 py-3">
                    <div>
                        <div class="col d-flex flex-column border border-top-0 border-right-0 border-left-0 px-0 py-2">
                            <div class="col-lg-2 px-0">
                                <a class="btn btn-info" href="/admin/disetujuiadmin">List Disetujui</a>
                            </div>
                            
                        </div>

                        <div class="mt-2">
                            <div>
                                <h3 class="font-weight-bold">Filter</h3>
                            </div>
                            <div>
                                <form action="listpengajuan_filter" method="POST">
                                {{ csrf_field() }}
                                    <div class="d-flex mt-2">
                                        <select class="border-0 bg-light px-5 py-2 rounded " name="filter" id="filter">
                                            <option value="4">All</option>
                                            <option value="0">Pengajuan</option>
                                            <option value="1">Setujui BM</option>
                                            <option value="9">Tidak Setujui BM</option>
                                        </select>
                                        <div>
                                            <button type="submit" class="btn btn-access ml-3">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        
                        <form action="persetujuan" method="post">
                        {{csrf_field()}}
                        <table id="table" class="table table-bordered mt-3">
                            <thead>
                                <tr align=center valign=top>
                                    <th>
                                        <input type="checkbox" name="checkbox" id="checkbox" class="checkbox"> 
                                    </th>
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
                                @foreach ($data_pinjam as $pinjam)
                                    <tr align=center valign=top>
                                        <td>
                                            <input type="checkbox" name="id[]" class="cb-child" value="{{ $pinjam->ID }}">
                                        </td>
                                        <td>{{$i}}</td>
                                        <td>{{ $pinjam->ID_EMP }}</td>
                                        <td>{{ $pinjam->NAMA }}</td>
                                        <td>{{ $pinjam->TANGGAL_PINJAM }}</td>
                                        <td>{{ $pinjam->NOMINAL_PINJAM }}</td>
                                        <td>{{ $pinjam->STATUS }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="/admin/setuju/<?php echo $pinjam->ID ?>">stj</a> 
                                            <a class="btn btn-danger btn-sm" href="/admin/tidaksetuju/<?php echo $pinjam->ID ?>" >tdk</a>
                                        </td>
                                    </tr>
                                    
                                <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-8 mt-2 px-0">
                            <button class="btn btn-warning btn-sm" type="submit">Setuju All</button>
                            <button class="btn btn-danger btn-sm" type="submit">Tidak Setuju All</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        

     

    </div>
    <footer class="footer">

      @include('layouts.footer')

    </footer>

@include('layouts.js')
<script>

    // checkbox
    $("#checkbox").on('click', function(){
      if( $("#checkbox").prop('checked') == true ) {
        $(".cb-child").prop('checked', true)
      } else {
        $(".cb-child").prop('checked', false)
      }
    });

</script>
