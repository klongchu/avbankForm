<?php
if ($_GET[id]) {
    $id = $_GET[id];
    $chk_username = 1;
    $row = $this->db->select('*')->where('id', $id)->get('tb_staff')->row();
    $s_username = $row->s_username;
    $s_password = $row->s_password;
    $s_firstname = $row->s_firstname;
    $s_lastname = $row->s_lastname;
    $s_phone = $row->s_phone;
    $s_line = $row->s_line;
    $readonly = ' disabled="disabled" ';
    $txt_btn = "แก้ไขข้อมูลเจ้าหน้าที่ระดับหัวหน้า";
} else {
    $id = 0;
    $chk_username = 0;
    $txt_btn = "เพิ่มข้อมูลเจ้าหน้าที่ระดับหัวหน้า";
}
$level = $this->db->select('*')->get('tb_level')->result();
?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <?=$txt_btn;?>
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>

                    <li class="m-nav__item">
                        <a href="<?= base_url(); ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                หน้าแรก
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="<?= base_url('admin'); ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                ข้อมูลเจ้าหน้าที่ระดับหัวหน้าทั้งหมด
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">

        <div class="m-portlet m-portlet--mobile">

            <div class="m-portlet__body">
                <!--begin::Form-->
                <form class="m-form m-form--label-align-right" method="POST" id="dataform" name="dataform">
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">
                                    ข้อมูลเจ้าหน้าที่ระดับหัวหน้า :
                                </h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ชื่อผู้ใช้ (Username):
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_username" id="s_username" class="form-control m-input" placeholder="กรอก ชื่อผู้ใช้งาน" onkeyup="validUser(this.value);" value="<?= $s_username; ?>" <?= $readonly; ?> />
                                    <span class="m-form__help">
                                        ชื่อผู้ใช้เพื่อเข้าสู่ระบบ
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    รหัสผ่าน (Password):
                                </label>
                                <div class="col-lg-6">
                                    <input type="password" name="s_password" id="s_password" class="form-control m-input" placeholder="รหัสผ่าน" value="<?= $s_password; ?>" />
                                    <span class="m-form__help">
                                        รหัสผ่านสำหรับเข้าสู่ระบบ
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ชื่อจริง :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_firstname" id="s_firstname" class="form-control m-input" placeholder="ชื่อจริง"  value="<?= $s_firstname; ?>" />
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    นามสกุล :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_lastname" id="s_lastname" class="form-control m-input" placeholder="นามสกุล" value="<?= $s_lastname; ?>" />
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    เบอร์โทรศัพท์ :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_phone" id="s_phone" class="form-control m-input" placeholder="เบอร์โทรศัพท์" value="<?= $s_phone; ?>" />
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ไลน์ไอดี :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_line" id="s_line" class="form-control m-input" placeholder="ไลน์ไอดี" value="<?= $s_line; ?>" />
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ระดับ :
                                </label>
                                <div class="col-lg-6">
                                    <div class="m-radio-list">
                                        <?php
                                        foreach ($level as $data) {
                                            $select_level = "";
                                            if ($data->s_level == $row->s_level) {
                                                $select_level = ' checked="checked"';
                                            }else{
                                                if($data->s_level == 'S'){
                                                    $select_level = ' checked="checked"';
                                                }
                                            }
                                            //echo $select_level;
                                            ?>
                                            <label class="m-radio">
                                                <input type="radio" name="s_level" value="<?= $data->s_level; ?>" <?= $select_level; ?>>
                                                <?= $data->s_level_desc; ?>
                                                <span></span>
                                            </label>
                                            <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="button" id="btn_save" onclick="return save();" class="btn btn-primary">
                                        <?=$txt_btn;?>
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        ยกเลิก
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>" />
                    <input type="hidden" name="chk_username" id="chk_username" value="<?= $chk_username; ?>" />
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>