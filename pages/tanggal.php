
<?php 
          date_default_timezone_set("Asia/Jakarta");
          function hari ($hariInggris) {
            switch ($hariInggris) {
              case 'Sunday':
                return 'Minggu, ';
              case 'Monday':
                return 'Senin, ';
              case 'Tuesday':
                return 'Selasa, ';
              case 'Wednesday':
                return 'Rabu, ';
              case 'Thursday':
                return 'Kamis, ';
              case 'Friday':
                return 'Jumat, ';
              case 'Saturday':
                return 'Sabtu, ';
              default:
                return 'hari tidak valid';
            }
          }

          function bulan($tanggal){
            $bulan = array (
              1 =>   'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember'
            );
            $pecahkan = explode('-', $tanggal);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
           
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
          
          }
          $hari = hari(date("l"));
          $bulan = bulan(date("Y-m-d"));
          $jam = " ".date("H:i:s");
          
        ?>