<?php
/**
 * Created by nvdiepse.
 * User: NgoGiaDiep
 * Date: 6/25/2019
 * Time: 4:14 PM
 */
$this->title = 'Soi cầu miền trung';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="box box-primary">
    <div class="box-header with-border">
    </div><!-- /.box-header -->
    <div class="box-body">
        <form action="soi-cau-mien-trung" method="POST">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <?php 
                $i = 0;
                foreach($mt as $maTinh){ ?>
                
                <table class="table table-responsive table-striped table-hover">
                <tr>
                    <td>
                        <input type="" name="tinhThanh<?= $i?>" readonly="true" value="<?= $maTinh[3]?>">      
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-6">
                        <table class="table table-responsive table striped">
                            <tr>
                                <thead>
                                    SỐ ĐẸP - từ chuyên gia
                                </thead>
                            </tr>
                            <tr>
                                <td>SỐ VÀNG</td>
                                <td>
                                    <input type="text" name="soVang<?= $i?>" value="<?= $data[$i]["soicau"][1] ? $data[$i]["soicau"][1] : '' ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>SỐ BẠC</td>
                                <td>
                                    <input type="text" name="soBac<?= $i?>" value="<?= $data[$i]["soicau"][3] ? $data[$i]["soicau"][3] : ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td>KÉP VÀNG</td>
                                <td>
                                    <input type="text" name="kepVang<?= $i?>" value="<?= $data[$i]["soicau"][5] ? $data[$i]["soicau"][5] : ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td>CẶP ĐÁ</td>
                                <td>
                                    <input type="text" name="capDa<?= $i?>" value="<?= $data[$i]["soicau"][7] ? $data[$i]["soicau"][7] : ''?>">
                                </td>
                            </tr>
                        </table>    
                    </td>
                    <td class="col-sm-6">
                        <table class="table table-responsive table striped">
                            <tr>
                                <thead>
                                Phân tích  ĐẶC BIỆT hôm nay
                                </thead>
                            </tr>
                            <tr>
                                <td>SỚ ĐẦU</td>
                                <td>
                                    <input type="text" name="soDau<?= $i?>" value="<?= $data[$i]["soicau"][11] ? $data[$i]["soicau"][11] : ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td>SỚ ĐUÔI</td>
                                <td>
                                    <input type="text" name="soDuoi<?= $i?>" value="<?= $data[$i]["soicau"][13] ? $data[$i]["soicau"][13] : ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td>DÀN ĐB</td>
                                <td>
                                    <input type="text" name="danDB<?= $i?>" value="<?= $data[$i]["soicau"][15] ? $data[$i]["soicau"][15] : ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td>BẠCH THỦ</td>
                                <td>
                                    <input type="text" name="bachThu<?= $i?>" value="<?= $data[$i]["soicau"][17] ? $data[$i]["soicau"][17] : ''?>">
                                </td>
                            </tr>
                        </table>  
                    </td>
                </tr>
            </table>
            <?php
                $i++; 
                }
            ?>
            
            <input type="submit" class="btn btn-success" value="Cập nhật" >
        </form>
    </div>
</div>
