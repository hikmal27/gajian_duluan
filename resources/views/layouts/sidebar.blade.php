<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <?php

             $role = Session::get('STATUS') ;

             if ($role == 1){
        ?>
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link bg-primary" href="/tad/inputpengajuan">
                    <p class="text-white text-center">Input Pengajuan</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link bg-primary" href="/tad/history">
                    <p class="text-white text-center">History Pengajuan</p>
                    </a>
                </li>
                
                <li class="nav-item ">
                    <a class="nav-link bg-primary" href="/tad/status">
                    <p class="text-white text-center">Status Pengajuan</p>
                    </a>
                </li>
            
            </ul>
        <?php
             } else if($role == 2){
        ?>
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/bm/listpengajuan">
                  <p class="text-white text-center">List Pengajuan</p>
                </a>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/bm/status">
                  <p class="text-white text-center">Status Pengajuan</p>
                </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/bm/history">
                  <p class="text-white text-center">History Pengajuan</p>
                </a>
              </li>
              
            </ul>
        <?php
             } else if ($role == 3 ){
        ?>
             <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/admin/listpengajuan">
                  <p class="text-white text-center">List Pengajuan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/admin/inputmaster">
                  <p class="text-white text-center">Input Master</p>
                </a>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/history"> 
                  <p class="text-white text-center">Report Pencairan</p>
                </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link bg-primary" href="/inputmaster"> 
                  <p class="text-white text-center">Report Margin</p>
                </a>
              </li>
              
            </ul>
        <?php 
             }

          ?>
        
      </div>
    </div>
    <div class="main-panel">