@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
      

      <div class="container">
        <div class="container-sm card mx-auto px-3 py-3">
            <div>
                <form action="persetujuan" method="post">
                {{csrf_field()}}
                  <table class="table">
                      <thead>
                          <tr>
                            <th>
                              <input type="checkbox" name="checkbox" id="checkbox" class="checkbox"> 
                            </th>
                          <th>NO</th>
                          <th>SIMID</th>
                          <th>NAMA</th>
                          <th>TANGGAL</th>
                          <th>NOMINAL</th>
                          <th>AKSI</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i = 1; ?>
                          @foreach ($data_pinjam as $pinjam)
                                <tr>
                                  <td>
                                      <input type="checkbox" name="id[]" class="cb-child" value="{{ $pinjam->ID }}">
                                  </td>
                                  <td>{{ $i }}</td>
                                  <td>{{ $pinjam->ID_EMP }}</td>
                                  <td>{{ $pinjam->NAMA }}</td>
                                  <td>{{ $pinjam->TANGGAL_PINJAM }}</td>
                                  <td>{{ $pinjam->NOMINAL_PINJAM }}</td>
                                  <td>
                                    <a class="btn btn-success btn-sm" href="/bm/setuju/<?php echo $pinjam->ID ?>">stj</a> 
                                    <a class="btn btn-danger btn-sm" href="/bm/tidaksetuju/<?php echo $pinjam->ID ?>" >tdk</a>
                                  </td>
                                  
                              </tr>
                              <?php $i++; ?>
                          @endforeach
                      </tbody>
                  </table>      
                  <div class="col-8 mt-2 px-0">
                    <button class="btn btn-warning btn-sm" type="submit">Setuju All</button>
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