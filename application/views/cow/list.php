<div class="row">
	<div class="col-md-12">

		<h2>รายการข้อมูลโค</h2>
		<hr/>
		<!-- Table -->
			<table class="table table-hover">
					<thead>
					<tr>
						<th class="col-md-2 info" style="text-align: center;">รูป</th>
						<th class="col-md-2 info" style="text-align: center;">ชื่อ</th>
						<th class="col-md-1 info" style="text-align: center;">เพศ</th>
						<th class="col-md-2 info" style="text-align: center;">วันเกิด</th>
						<th class="col-md-1 info" style="text-align: center;">อายุ</th>
						<th class="col-md-1 info" style="text-align: center;">แม่</th>
						<th class="col-md-1 info" style="text-align: center;">พ่อ</th>
						<th class="col-md-1 info" style="text-align: center;">สถานะ</th>
						<th class="col-md-1 info" style="text-align: center;">รายละเอียด</th>
					</tr>
					</thead>
					<?php foreach ($result as $row):?>
					
					<tr>
						<td style="text-align: center;vertical-align:middle;">
							<a href="#">
								<img class="img-responsive img-hover" src="<?php echo base_url().$row["image_name"]?>" width="150px" height="100px" alt="">
							</a>
						</td>
						<td style="text-align: center;vertical-align:middle;"><?php echo $row["cow_name"]?></td>
						<td style="text-align: center;vertical-align:middle;"><?php echo $row["sex"]?></td>
						<td style="text-align: center;vertical-align:middle;"><?php echo date_format(date_create($row["birth_day"]),"d/m/Y"); ?></td>
						<td style="text-align: center;vertical-align:middle;">
							<?php 
							list($day,$month,$year) = explode("/",date_format(date_create($row["birth_day"]),"d/m/Y"));
    						$year_diff  = date("Y") - $year;
    						$month_diff = date("m") - $month;
    						$day_diff   = date("d") - $day;
    						if ($day_diff < 0 || $month_diff < 0)
      							$year_diff--;
    						echo $year_diff." ปี";
							?>
						</td>
						<td style="text-align: center;vertical-align:middle;"><?php echo $row["parent_id"]!=null?$row["parent_id"]:"-"?></td>
						<td style="text-align: center;vertical-align:middle;"><?php echo $row["father_code"]?></td>
						<td style="text-align: center;vertical-align:middle;"><?php echo $row["status_name"]?></td>
						<td style="text-align: center;vertical-align:middle;">
							<a href="#"><img alt="ดูรายละเอียด" title="ดูรายละเอียด" src="<?php echo base_url()."images/view-icon.png";?>"></a>
						</td>
					</tr>
					<?php endforeach;?>
					
				</table>
				
				<!-- Pagination -->
				<div class="row text-center">
					<div class="col-lg-12">
					<?php echo $pagination;?>
						<!-- <ul class="pagination">
							<li>
								<a href="#">&laquo;</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">&raquo;</a>
							</li>
						</ul>-->
					</div> 
				</div>
				<!-- Table -->
	</div>
</div>