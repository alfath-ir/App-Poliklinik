<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title><?= $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="<?= base_url('assets') ?>/img/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/feather.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/datatables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/buttons.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/pages.css">
</head>

<style type="text/css">
    @page: first {
        margin: 100px;
    }

    @page {
        size: auto;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<body onload="window.print(); history.back()">

    <div>

        <div id="content-wrapper" style="margin-top:50px">

            <div class="container-fluid">
                <!-- DataTables Example -->
                <center>
                    <b>
                        <h>LAPORAN OBAT POLIKLINIK</h>
                    </b>
                </center>
                <div class="card-body card-block">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered nowrap">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Satuan</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($dataObat as $do) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i; ?></td>
                                        <td><?= $do['nm_obat']; ?></td>
                                        <td class="text-center"><?= $do['stok']; ?></td>
                                        <td class="text-center"><?= $do['jenis']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                            <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Bandar Lampung, <?php echo date('d M Y') ?></label></div>

                        </div>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                            <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">Petugas</label></div>

                        </div>
                        <br><br><br>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-9"><label for="select" class=" form-control-label"></label></div>
                            <div id="form-tanggal" class="col col-md-3"><label for="select" class=" form-control-label">(....................)</label></div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/jquery.min.js"></script>
        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/jquery-ui.min.js"></script>
        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/popper.min.js"></script>
        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>

        <script src="<?= base_url('assets') ?>/js/waves.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>

        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/jquery.slimscroll.js"></script>

        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/modernizr.js"></script>
        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/css-scrollbars.js"></script>

        <script src="<?= base_url('assets') ?>/js/jquery.datatables.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/datatables.buttons.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/jszip.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/pdfmake.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/vfs_fonts.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/buttons.print.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/buttons.html5.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/datatables.bootstrap4.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/datatables.responsive.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/responsive.bootstrap4.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>

        <script src="<?= base_url('assets') ?>/js/data-table-custom.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/pcoded.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/vertical-layout.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script src="<?= base_url('assets') ?>/js/jquery.mcustomscrollbar.concat.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/script.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
        <script type="7ab3cb0e204785e18dc50839-text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script src="<?= base_url('assets') ?>/js/rocket-loader.min.js" data-cf-settings="7ab3cb0e204785e18dc50839-|49" defer=""></script>
</body>

</html>