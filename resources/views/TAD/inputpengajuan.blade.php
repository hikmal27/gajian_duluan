@include('layouts.atas')
      
    @include('layouts.sidebar')
    
    @include('layouts.navbar')
      
    <div class="content">
        
      <div class="container">
          <div class="col-8 card mx-auto px-3 py-3">
              <div class="text-2xl font-bold text-center">
                  Form Pengajuan
              </div>
              <div class="mt-4">
                  Gaji : Rp. {{$gaji}}
              </div>
              <div class="mt-2">
                  <form action="/tad/pengajuan" method="post">
                      {{csrf_field()}}
                      @if ($gaji >= 1000000 && $gaji < 1500000)
                          <select name="nominal" id="nominal" class="border-0 bg-light px-4 py-3 mr-2 rounded">
                              <option value="500000">Rp. 500.000</option>
                          </select>
                      @elseif ($gaji >= 1500000 && $gaji < 2000000)
                          <select name="nominal" class="border-0 bg-light px-4 py-3 mr-2 rounded">
                              <option value="500000">Rp. 500.000</option>
                              <option value="1000000">Rp. 1.000.000</option>
                          </select>
                      @elseif ($gaji >= 2000000 && $gaji < 2500000)
                          <select name="nominal" class="border-0 bg-light px-4 py-3 mr-2 rounded">
                              <option value="500000">Rp. 500.000</option>
                              <option value="1000000">Rp. 1.000.000</option>
                              <option value="1500000">Rp. 1.500.000</option>
                          </select>
                      @else
                          <select name="nominal" class="border-0 bg-light px-4 py-3 mr-2 rounded">
                              <option value="500000">Rp. 500.000</option>
                              <option value="1000000">Rp. 1.000.000</option>
                              <option value="1500000">Rp. 1.500.000</option>
                              <option value="2000000">Rp. 2.000.000</option>
                          </select>
                      @endif
                      <input type="hidden" name="id_emp" value="<?php echo $id_emp ?>">
                      <button type="submit" class="border-0 bg-success py-3 px-4 text-white rounded">Save</button>
                  </form>
              </div>
          </div>
      </div>
     

     

    </div>
    <footer class="footer">

      @include('layouts.footer')

    </footer>

@include('layouts.js')