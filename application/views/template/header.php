<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
    <head>
	<?php
	if ($this->session->userdata('member_id') == NULL) {
	    //echo "aaa";
	    $class = $this->router->fetch_class();
	    if ($class != 'login') {
		?>

		<meta http-equiv="refresh" content="0;url=<?= base_url('login'); ?>" />
		<?php
		exit();
	    }
	}
	$query = $this->db->get(TB_webconfig);
	$data = $query->row();
	$cache_version = "1.0.2";
	$newdata = array();
	$newdata[wc_webconfig] = 'webconfig';
	$newdata[wc_site_name] = $data->s_site_name;
	$newdata[wc_title] = $data->s_title;
	$newdata[wc_keyword] = $data->s_keyword;
	$newdata[wc_description] = $data->s_keyword;
	$newdata[wc_logo] = $data->s_logo;
	$newdata[wc_webstats] = $data->s_webstats;
	$newdata[wc_fav] = $data->s_fav;
	$newdata[wc_skins] = $data->s_kins;
	$newdata[wc_domain] = "www.bank123.com";
	$newdata[wc_folder_domain] = "bank123";
	$newdata[wc_license] = "bank123";
	$this->session->set_userdata($newdata);
	$uploads_dir = base_url('uploads/webconfig') . "/";
	$link_img_top = base_url('uploads/webconfig') . "/" . $this->session->userdata('wc_logo');


	$des_view = $data->s_description;
	$title_view = $data->s_title;

	$class_method = $this->uri->segment(2);
	$class_method_id = $this->uri->segment(3);
	if ($class_method == 'detailauto' || $class_method == 'detail') {
	    $this->db->where('id', $class_method_id);
	    $bank_list = $this->db->get('tbl_bank_list')->row();

	    $this->db->where('id', $bank_list->i_bank);
	    $banks = $this->db->get('tbl_bank')->row();


	    $icon_aa = base_url() . "uploads/bank/" . $banks->s_icon . "?v=" . time();
	    $title_view = $bank_list->s_account_name . " " . $bank_list->s_account_no . " :: " . $title_view;
	} else {
	    $icon_aa = base_url() . "fav.ico?v=" . time();
	}
	?>
        <script>
	    var lisense_bank_js = "bank123";
        </script>
	
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php echo $des_view; ?>" />
	<meta name="keyword" content="<?php echo $des_view; ?>" />
	<meta name="author" content="<?php echo $data->s_dev_by; ?>" />
	<link href="<?php echo $icon_aa; ?>" rel="shortcut icon" type="image/x-icon" />
	<title><?php echo $title_view; ?> </title>
	<meta itemprop="name" content="<?php echo $title_view; ?>" />
	<meta itemprop="description" content="<?php echo $des_view; ?>" />
	<meta itemprop="image" content="<?= $link_img_top; ?>" />
	<meta property="og:title" content="<?php echo $title_view; ?>" />
	<meta property="og:description" content="<?php echo $des_view; ?>" />
	<meta property="og:image" content="<?= $link_img_top; ?>" />
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
	    WebFont.load({
		google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
		active: function () {
		    sessionStorage.fonts = true;
		}
	    });
	</script>
	<!--end::Web font -->
	<!-- vendors -->

	<?php echo link_tag('assets/vendors/base/vendors.bundle.css?v=' . $cache_no); ?>
	<?php echo link_tag('assets/demo/demo9/base/style.bundle.css?v=' . $cache_no); ?>

	<!-- Custom CSS -->
        <style>
            .form-control-danger{
                    border-color: #f4516c;
            }
            .form-control-success{
                    border-color: #34bfa3;
            }
        </style>


	<!-- jQuery -->

	<script>
	    var main_base_url = "<?= base_url(); ?>";
	    //alert(main_base_url);
	</script>




	

	<script>
	    $(document).ready(function () {
		function currentTime() {
		    var today = new Date();
		    var dd = today.getDate();
		    var mm = today.getMonth();
		    var yy = today.getFullYear();
		    var h = today.getHours();
		    var m = today.getMinutes();
		    var s = today.getSeconds();
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('txt').innerHTML =
			    "วันที่ " + dd + "/" + (mm + 1) + "/" + yy + " " + h + ":" + m + ":" + s + " น.";
		    var t = setTimeout(currentTime, 500);
		}
		function checkTime(i) {
		    if (i < 10) {
			i = "0" + i
		    }
		    ;  // add zero in front of numbers < 10
		    return i;
		}
		//currentTime();


		var sec = 3;
		notification();
		setInterval(notification, 1000 * sec);
	    });
	    function reloadTime() {
		location.reload();
		$('#se-pre-con').delay(100).fadeOut();

	    }
	</script>

    </head>


    <!-- Loading Start -->


    <!-- end::Body -->
    <body  class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default"  >
	<!-- begin::Page loader -->
	<div class="m-page-loader m-page-loader--base">
	    <div class="m-blockui">
		<span>
		    Please wait...
		</span>
		<span>
		    <div class="m-loader m-loader--brand"></div>
		</span>
	    </div>
	</div>
	<!-- end::Page Loader -->        
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
	    <!-- BEGIN: Header -->
	    <?php $this->load->view('template/top_header'); ?>
	    <!-- END: Header -->		
	    <!-- BEGIN: Left Aside -->
	    <?php //$this->load->view('template/left_aside'); ?>
	    <!-- END: Left Aside -->					
	    <!-- begin::Body -->
	    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
		    
                    
                    
			    

