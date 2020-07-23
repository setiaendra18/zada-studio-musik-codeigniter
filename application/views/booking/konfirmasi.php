<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<section class="section"z id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
                <h4>TRANSAKSI BOOKING - KONFIRMASI PEMBAYARAN </h4>
<?php
foreach($konfirmasi as $row)
{ 
    echo $row->id_member;
}
?>


</div>
        </div>
    </section>