<?php
if ($_GET[id]) {
    $id = $_GET[id];
    $chk_username = 1;
    $row = $this->db->select('*')->where('i_id', $id)->get('tb_member_bank')->row();
    
    $s_username = $row->s_username;
    $i_bank = $row->i_bank;
    $s_account_no = $row->s_account_no;
    $s_account_name = $row->s_account_name;
    $readonly = ' disabled="disabled" ';
    $txt_btn = "แก้ไขข้อมูล";
    
    

} else {
    $u = $_GET[u];
    $id = 0;
    $chk_username = 0;
    $row = $this->db->select('*')->where('s_username', $u)->get('tb_member')->row();
    $s_username = $row->s_username;
    $readonly = ' disabled="disabled" ';
    $txt_btn = "เพิ่มข้อมูล";
}
$member = $this->db->select('*')->where('s_username', $s_username)->get('tb_member')->row();
$member_id = $member->i_id;
$bank = $this->db->select('*')->get('tb_bank')->result();
?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    <?=$txt_btn;?>ธนาคารของลูกค้า
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
                        <a href="<?= base_url('member'); ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                ข้อมูลลูกค้าทั้งหมด
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="<?= base_url('memberbank'); ?>?id=<?=$member->i_id;?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                ข้อมูลธนาคารของลูกค้า <?=$s_username;?> (<?=$member->s_firstname;?>)
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
                                    ข้อมูลธนาคารของลูกค้า :
                                </h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ชื่อผู้ใช้ (Username):
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_usernamess" id="s_usernamess" class="form-control m-input" placeholder="กรอก ชื่อผู้ใช้งาน" onkeyup="validUser(this.value);" value="<?= $s_username; ?>" <?= $readonly; ?> />
                                    <span class="m-form__help">
                                        ชื่อผู้ใช้เพื่อเข้าสู่ระบบของลูกค้า
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    เลขบัญชี :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_account_no" id="s_account_no" class="form-control m-input" placeholder="เลขบัญชี"  value="<?= $s_account_no; ?>" />
                                <span class="m-form__help text-warning">
                                        เลขบัญชีกรอกตัวเลขเท่านั้น เช่น 0123456789
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ชื่อบัญชี :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="s_account_name" id="s_account_name" class="form-control m-input" placeholder="ชื่อบัญชี" value="<?= $s_account_name; ?>" />
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                    ธนาคาร :
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control m-input" name="i_bank" id="i_bank">
                                        <?php
                                        foreach ($bank as $data){
                                            if($i_bank == $data->i_bank){
                                                $selected = ' selected="selected" ';
                                            }else{
                                                $selected = '  ';
                                            }
                                            ?>
                                        <option value="<?=$data->i_bank;?>" <?=$selected;?>>
                                            <?=$data->s_fname_th;?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                        
                                    </select>
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
                                        <?=$txt_btn;?>ธนาคารของลูกค้า
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        ยกเลิก
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>" />
                    <input type="hidden" name="member_id" id="member_id" value="<?= $member_id; ?>" />
                    <input type="hidden" name="s_username" id="s_username"  value="<?= $s_username; ?>" />
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>