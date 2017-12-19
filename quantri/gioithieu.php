<?php
include_once 'ketnoi.php';
$sqlBl = "SELECT * FROM blsanpham";
$queBl = mysqli_query($conn, $sqlBl);

$sqlTv = "SELECT * FROM thanhvien";
$queTv = mysqli_query($conn, $sqlTv);

$fp = "../chucnang/thongke/dem.txt";
$fo = fopen($fp, 'r');
$count = fread($fo, filesize($fp));
fclose($fo);
?>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <svg class="glyph stroked home">
                    <use xlink:href="#stroked-home"></use>
                </svg>
            </a>
        </li>
        <li class="active"></li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Trang chủ quản trị</h1>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">120</div>
                    <div class="text-muted">Đơn hàng</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked empty-message">
                        <use xlink:href="#stroked-empty-message"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo mysqli_num_rows($queBl); ?></div>
                    <div class="text-muted">Bình luận</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo mysqli_num_rows($queTv); ?></div>
                    <div class="text-muted">Thành viên</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked app-window-with-content">
                        <use xlink:href="#stroked-app-window-with-content"></use>
                    </svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo $count; ?></div>
                    <div class="text-muted">Người xem</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Giới thiệu</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <p>
                        Nhóm Lập trình mạng gồm 5 thành viên:<br>
                        Lê Trọng Duy Linh   20142566<br>
                        Nguyễn Phương Nam   20143061<br>
                        Phạm Minh Đức       20141184<br>
                        Bùi Quang Trí       20144649<br>
                        Cù Tuấn Minh        20142895<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->