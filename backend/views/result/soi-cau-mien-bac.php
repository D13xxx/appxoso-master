<?php
/**
 * Created by nvdiepse.
 * User: NgoGiaDiep
 * Date: 6/25/2019
 * Time: 4:14 PM
 */
$this->title = 'Soi cầu miền bắc';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="box box-primary">
    <div class="box-header with-border">
    </div><!-- /.box-header -->
    <div class="box-body">
        <form action="soi-cau-mien-bac" method="POST">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <table class="table table-responsive table-striped">
                <h4>Số Đẹp - Miền Bắc   <?= date('d/m/Y',strtotime($date))?></h4>
                <tr>
                    <td><b>+ Số vàng</b></td>
                    <td><input type="text" name="a2" value="<?= isset($data['data'][0])? $data['data'][0]:'' ?>"></td>
                </tr><tr>
                    <td><b>+ Số bạc</b></td>
                    <td><input type="text" name="a3" value="<?= isset($data['data'][1])? $data['data'][1]:'' ?>"></td>
                </tr><tr>
                    <td><b>+ Kép vàng</b></td>
                    <td><input type="text" name="a4" value="<?= isset($data['data'][2])? $data['data'][2]:'' ?>"></td>
                </tr><tr>
                    <td><b>+ Xiên đôi</b></td>
                    <td><input type="text" name="a5" value="<?= isset($data['data'][3])? $data['data'][3]:'' ?>"></td>
                </tr>
				<tr>
					<td>
						<input type="text" hidden="true" name="a6" value="Số Đẹp - Miền Bắc <?php echo $date ?>" />
					</td>
				</tr>
            </table>
            <table class="table table-responsive table-striped">
                <h4>Phân Tích Đặc Biệt <?= date('d/m/Y',strtotime($date))?></h4>
                <tr>
                    <td><b>+ Đầu</b></td>
                    <td>
                    	<input type="text" name="b2" value="<?= isset($data['data'][5])? $data['data'][5]:'' ?>">
                    </td>
                </tr>
                <tr>
                    <td><b>+ Đuôi</b></td>
                    <td>
                    	<input type="text" name="b3" value="<?= isset($data['data'][6])? $data['data'][6]:'' ?>">
                    </td>
                </tr>
                <tr>
                    <td><b>+ Dàn Đặc Biệt</b></td>
                    <td>
                    	<input type="text" name="b4" value="<?= isset($data['data'][7])? $data['data'][7]:'' ?>">
                    </td>
                </tr>
                <tr>
                    <td><b>+ Bạch Thủ</b></td>
                    <td>
                    	<input type="text" name="b5" value="<?= isset($data['data'][8])? $data['data'][8]:'' ?>">
                	</td>
                </tr>
                <tr>
                    <td><b>+ 3 Càng Sáng</b></td>
                    <td>
                        <input type="text" name="b6" value="<?= isset($data['data'][9])? $data['data'][9]:'' ?>">
                    </td>
                </tr>
				<tr>
					<td>
						<input type="text" hidden="true" name="b7" value="Phân Tích Đặc Biệt <?= $date ?>" />
					</td>
				</tr>
            </table>
            <table class="table table-reponsive table-striped">
                <tr>
                    <th>Ngày</th>
                    <th>Số đẹp</th>
                    <th>Cầu vàng</th>
                    <th>Số trúng</th>
                </tr>
                
                <?php 
                $dateNow = date('Y-m-d');
                $ngayHienTai = $data['soicau'][0][0];
                if($dateNow == $ngayHienTai){ ?>
                	<tr>
	                    <tr>
							<td>
								
								<input type="text" name="d1" readOnly="true" value="<?php echo $date ?>"  />
							</td>
							<td>
								<input type="text" name="d2" value="<?php echo isset($data['soicau'][0][1])? $data['soicau'][0][1]:'' ?>" />
							</td>
							<td>
								<input type="text" name="d3" value="<?php echo isset($data['soicau'][0][2])? $data['soicau'][0][2]:'' ?>" />
							</td>
							<td>
								<input type="text" name="d4" value="<?php echo isset($data['soicau'][0][3])? $data['soicau'][0][3]:'' ?>" />
							</td>
						</tr>
	                </tr>
		               	 	<td>
								<input type="text" name="e1" hidden="true" value="<?= isset($data['soicau'][1][0])? $data['soicau'][1][0]:'' ?>" />
								<?= isset($data['soicau'][1][0])? $data['soicau'][1][0]:'' ?>
							<td>
								<input type="text" name="e2" hidden="true" value="<?= isset($data['soicau'][1][1])? $data['soicau'][1][1]:'' ?>" />
								<?= isset($data['soicau'][1][1])? $data['soicau'][1][1]:'' ?>
							</td>
							<td>
								<input type="text" name="e3" hidden="true" value="<?= isset($data['soicau'][1][2])? $data['soicau'][1][2]:'' ?>" />
								<?= isset($data['soicau'][1][2])? $data['soicau'][1][2]:'' ?>
							</td>
							<td>
								<input type="text" name="e4" hidden="true" value="<?= isset($data['soicau'][1][3])? $data['soicau'][1][3]:'' ?>" />
								<?= isset($data['soicau'][1][3])? $data['soicau'][1][3]:'' ?>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="f1" hidden="true" value="<?= isset($data['soicau'][2][0])? $data['soicau'][2][0]:'' ?>" />
								<?= isset($data['soicau'][2][0])? $data['soicau'][2][0]:'' ?>
							</td>
							<td>
								<input type="text" name="f2" hidden="true" value="<?= isset($data['soicau'][2][1])? $data['soicau'][2][1]:'' ?>" />
								<?= isset($data['soicau'][2][1])? $data['soicau'][2][1]:'' ?>
							</td>
							<td>
								<input type="text" name="f3" hidden="true" value="<?= isset($data['soicau'][2][2])? $data['soicau'][2][2]:'' ?>" />
								<?= isset($data['soicau'][2][2])? $data['soicau'][2][2]:'' ?>
							</td>
							<td>
								<input type="text" name="f4" hidden="true" value="<?= isset($data['soicau'][2][3])? $data['soicau'][2][3]:'' ?>" />
								<?= isset($data['soicau'][2][3])? $data['soicau'][2][3]:'' ?>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="g1" hidden="true" value="<?= isset($data['soicau'][3][0])? $data['soicau'][3][0]:'' ?>" />
								<?= isset($data['soicau'][3][0])? $data['soicau'][3][0]:'' ?>
							</td>
							<td>
								<input type="text" name="g2" hidden="true" value="<?= isset($data['soicau'][3][1])? $data['soicau'][3][1]:'' ?>" />
								<?= isset($data['soicau'][3][1])? $data['soicau'][3][1]:'' ?>
							</td>
							<td>
								<input type="text" name="g3" hidden="true" value="<?= isset($data['soicau'][3][2])? $data['soicau'][3][2]:'' ?>" />
								<?= isset($data['soicau'][3][2])? $data['soicau'][3][2]:'' ?>
							</td>
							<td>
								<input type="text" name="g4" hidden="true" value="<?= isset($data['soicau'][3][3])? $data['soicau'][3][3]:'' ?>" />
								<?= isset($data['soicau'][3][3])? $data['soicau'][3][3]:'' ?>
							</td>
						</tr>

                <?php }else{ ?>
                	<tr>
	                    <tr>
							<td>
								
								<input type="text" name="d1" readOnly="true" value="<?php echo $date ?>"  />
							</td>
							<td>
								<input type="text" name="d2" />
							</td>
							<td>
								<input type="text" name="d3"  />
							</td>
							<td>
								<input type="text" name="d4"  />
							</td>
						</tr>
	                </tr>
					<tr>
						<td>
							<input type="text" name="e1" hidden="true" value="<?= isset($data['soicau'][0][0])? $data['soicau'][0][0]:'' ?>" />
							<?= isset($data['soicau'][0][0])? $data['soicau'][0][0]:'' ?>
						<td>
							<input type="text" name="e2" hidden="true" value="<?= isset($data['soicau'][0][1])? $data['soicau'][0][1]:'' ?>" />
							<?= isset($data['soicau'][0][1])? $data['soicau'][0][1]:'' ?>
						</td>
						<td>
							<input type="text" name="e3" hidden="true" value="<?= isset($data['soicau'][0][2])? $data['soicau'][0][2]:'' ?>" />
							<?= isset($data['soicau'][0][2])? $data['soicau'][0][2]:'' ?>
						</td>
						<td>
							<input type="text" name="e4" hidden="true" value="<?= isset($data['soicau'][0][3])? $data['soicau'][0][3]:'' ?>" />
							<?= isset($data['soicau'][0][3])? $data['soicau'][0][3]:'' ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="f1" hidden="true" value="<?= isset($data['soicau'][1][0])? $data['soicau'][1][0]:'' ?>" />
							<?= isset($data['soicau'][1][0])? $data['soicau'][1][0]:'' ?>
						</td>
						<td>
							<input type="text" name="f2" hidden="true" value="<?= isset($data['soicau'][1][1])? $data['soicau'][1][1]:'' ?>" />
							<?= isset($data['soicau'][1][1])? $data['soicau'][1][1]:'' ?>
						</td>
						<td>
							<input type="text" name="f3" hidden="true" value="<?= isset($data['soicau'][1][2])? $data['soicau'][1][2]:'' ?>" />
							<?= isset($data['soicau'][1][2])? $data['soicau'][1][2]:'' ?>
						</td>
						<td>
							<input type="text" name="f4" hidden="true" value="<?= isset($data['soicau'][1][3])? $data['soicau'][1][3]:'' ?>" />
							<?= isset($data['soicau'][1][3])? $data['soicau'][1][3]:'' ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="g1" hidden="true" value="<?= isset($data['soicau'][1][0])? $data['soicau'][1][0]:'' ?>" />
							<?= isset($data['soicau'][1][0])? $data['soicau'][1][0]:'' ?>
						</td>
						<td>
							<input type="text" name="g2" hidden="true" value="<?= isset($data['soicau'][2][1])? $data['soicau'][2][1]:'' ?>" />
							<?= isset($data['soicau'][2][1])? $data['soicau'][2][1]:'' ?>
						</td>
						<td>
							<input type="text" name="g3" hidden="true" value="<?= isset($data['soicau'][2][2])? $data['soicau'][2][2]:'' ?>" />
							<?= isset($data['soicau'][2][2])? $data['soicau'][2][2]:'' ?>
						</td>
						<td>
							<input type="text" name="g4" hidden="true" value="<?= isset($data['soicau'][2][3])? $data['soicau'][2][3]:'' ?>" />
							<?= isset($data['soicau'][2][3])? $data['soicau'][2][3]:'' ?>
						</td>
					</tr>
                <?php }
                ?>
                
            </table>
            <input type="submit" class="btn btn-success" value="Cập nhật" >
        </form>
    </div>
</div>
