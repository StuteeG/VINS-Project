<html>
<head>
	<title>
		MAR Flow Sheet
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
				<h1>MAR Flow Sheet</h1>
			</div>
			<div class="col-md-4 text-right">
				DOC NO. FMT/HIC/09 <br>
				REV. No. 0.1 <br>
				WEF 10-10-2015
			</div>
		</div>
	</div>

	<form name="marFlowSheet">
		<div class="row">
			<div class="col-md-8">
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>ET Tube Day : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="et_tube_day" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>FC Day :</label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="fc_day" />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Teeth Level</label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="teeth_level" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Central Line</label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="central_line" />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Arterial Line Day : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="arterial_line_day" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Other Invasive Line Day : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="other_invasive_line_day" />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>RT Day : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="rt_day" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<textarea class="form-control" name="addressograph" placeholder="Addressograph"></textarea>
			</div>
		</div>

		<hr />

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Date : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="date" name="date" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Previous 24Hrs Intake : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="prev_24_intake" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Previous 24Hrs Output : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="prev_24_output" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Balance : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="date" name="balance" />
				</div>
			</div>
		</div>

		<!--Table-->

		<div class="row form-group">
			<table class="table table-bordered table-condensed small">
				<thead>
					<tr>
						<th>Time</th>
						<th>8-00</th>
						<th>10-00</th>
						<th>12-00</th>
						<th>14-00</th>
						<th>16-00</th>
						<th>18-00</th>
						<th>20-00</th>
						<th>22-00</th>
						<th>24-00</th>
						<th>2-00</th>
						<th>4-00</th>
						<th>6-00</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th>Temp : </th>
						<td><input class="form-control" type="text" name="temp_08" /></td>
						<td><input class="form-control" type="text" name="temp_10" /></td>
						<td><input class="form-control" type="text" name="temp_12" /></td>
						<td><input class="form-control" type="text" name="temp_14" /></td>
						<td><input class="form-control" type="text" name="temp_16" /></td>
						<td><input class="form-control" type="text" name="temp_18" /></td>
						<td><input class="form-control" type="text" name="temp_20" /></td>
						<td><input class="form-control" type="text" name="temp_22" /></td>
						<td><input class="form-control" type="text" name="temp_24" /></td>
						<td><input class="form-control" type="text" name="temp_02" /></td>
						<td><input class="form-control" type="text" name="temp_04" /></td>
						<td><input class="form-control" type="text" name="temp_06" /></td>
					</tr>

					<tr>
						<th>Pulse(per min) : </th>
						<td><input class="form-control" type="text" name=" pulse_08" /></td>
						<td><input class="form-control" type="text" name=" pulse_10" /></td>
						<td><input class="form-control" type="text" name=" pulse_12" /></td>
						<td><input class="form-control" type="text" name=" pulse_14" /></td>
						<td><input class="form-control" type="text" name=" pulse_16" /></td>
						<td><input class="form-control" type="text" name=" pulse_18" /></td>
						<td><input class="form-control" type="text" name=" pulse_20" /></td>
						<td><input class="form-control" type="text" name=" pulse_22" /></td>
						<td><input class="form-control" type="text" name=" pulse_24" /></td>
						<td><input class="form-control" type="text" name=" pulse_02" /></td>
						<td><input class="form-control" type="text" name=" pulse_04" /></td>
						<td><input class="form-control" type="text" name=" pulse_06" /></td>
					</tr>

					<tr>
						<th>Blood Pressure : </th>
						<td><input class="form-control" type="text" name=" bp_08" /></td>
						<td><input class="form-control" type="text" name=" bp_10" /></td>
						<td><input class="form-control" type="text" name=" bp_12" /></td>
						<td><input class="form-control" type="text" name=" bp_14" /></td>
						<td><input class="form-control" type="text" name=" bp_16" /></td>
						<td><input class="form-control" type="text" name=" bp_18" /></td>
						<td><input class="form-control" type="text" name=" bp_20" /></td>
						<td><input class="form-control" type="text" name=" bp_22" /></td>
						<td><input class="form-control" type="text" name=" bp_24" /></td>
						<td><input class="form-control" type="text" name=" bp_02" /></td>
						<td><input class="form-control" type="text" name=" bp_04" /></td>
						<td><input class="form-control" type="text" name=" bp_06" /></td>
					</tr>

					<tr>
						<th>Resp. Rate : </th>
						<td><input class="form-control" type="text" name="resp_08" /></td>
						<td><input class="form-control" type="text" name="resp_10" /></td>
						<td><input class="form-control" type="text" name="resp_12" /></td>
						<td><input class="form-control" type="text" name="resp_14" /></td>
						<td><input class="form-control" type="text" name="resp_16" /></td>
						<td><input class="form-control" type="text" name="resp_18" /></td>
						<td><input class="form-control" type="text" name="resp_20" /></td>
						<td><input class="form-control" type="text" name="resp_22" /></td>
						<td><input class="form-control" type="text" name="resp_24" /></td>
						<td><input class="form-control" type="text" name="resp_02" /></td>
						<td><input class="form-control" type="text" name="resp_04" /></td>
						<td><input class="form-control" type="text" name="resp_06" /></td>
					</tr>

					<tr>
						<th>Pain : </th>
						<td>
							<select class="form-control" name="pain_08">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_10">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_12">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_14">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_16">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_18">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_20">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_22">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_24">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_02">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_04">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="pain_06">
								<option>0</option>
								<option>2</option>
								<option>4</option>
								<option>8</option>
								<option>10</option>
							</select>
						</td>
					</tr>

					<tr>
						<th>Intake IV Line 1 : </th>
						<td><input class="form-control" type="text" name="iv_line1_08" /></td>
						<td><input class="form-control" type="text" name="iv_line1_10" /></td>
						<td><input class="form-control" type="text" name="iv_line1_12" /></td>
						<td><input class="form-control" type="text" name="iv_line1_14" /></td>
						<td><input class="form-control" type="text" name="iv_line1_16" /></td>
						<td><input class="form-control" type="text" name="iv_line1_18" /></td>
						<td><input class="form-control" type="text" name="iv_line1_20" /></td>
						<td><input class="form-control" type="text" name="iv_line1_22" /></td>
						<td><input class="form-control" type="text" name="iv_line1_24" /></td>
						<td><input class="form-control" type="text" name="iv_line1_02" /></td>
						<td><input class="form-control" type="text" name="iv_line1_04" /></td>
						<td><input class="form-control" type="text" name="iv_line1_06" /></td>
					</tr>

					<tr>
						<th>Intake IV Line 2 : </th>
						<td><input class="form-control" type="text" name="iv_line2_08" /></td>
						<td><input class="form-control" type="text" name="iv_line2_10" /></td>
						<td><input class="form-control" type="text" name="iv_line2_12" /></td>
						<td><input class="form-control" type="text" name="iv_line2_14" /></td>
						<td><input class="form-control" type="text" name="iv_line2_16" /></td>
						<td><input class="form-control" type="text" name="iv_line2_18" /></td>
						<td><input class="form-control" type="text" name="iv_line2_20" /></td>
						<td><input class="form-control" type="text" name="iv_line2_22" /></td>
						<td><input class="form-control" type="text" name="iv_line2_24" /></td>
						<td><input class="form-control" type="text" name="iv_line2_02" /></td>
						<td><input class="form-control" type="text" name="iv_line2_04" /></td>
						<td><input class="form-control" type="text" name="iv_line2_06" /></td>
					</tr>

					<tr>
						<th>Intake IV Line 1 : </th>
						<td><input class="form-control" type="text" name="iv_line3_08" /></td>
						<td><input class="form-control" type="text" name="iv_line3_10" /></td>
						<td><input class="form-control" type="text" name="iv_line3_12" /></td>
						<td><input class="form-control" type="text" name="iv_line3_14" /></td>
						<td><input class="form-control" type="text" name="iv_line3_16" /></td>
						<td><input class="form-control" type="text" name="iv_line3_18" /></td>
						<td><input class="form-control" type="text" name="iv_line3_20" /></td>
						<td><input class="form-control" type="text" name="iv_line3_22" /></td>
						<td><input class="form-control" type="text" name="iv_line3_24" /></td>
						<td><input class="form-control" type="text" name="iv_line3_02" /></td>
						<td><input class="form-control" type="text" name="iv_line3_04" /></td>
						<td><input class="form-control" type="text" name="iv_line3_06" /></td>
					</tr>

					<tr>
						<th>Intake IV Line 1 : </th>
						<td><input class="form-control" type="text" name="iv_line4_08" /></td>
						<td><input class="form-control" type="text" name="iv_line4_10" /></td>
						<td><input class="form-control" type="text" name="iv_line4_12" /></td>
						<td><input class="form-control" type="text" name="iv_line4_14" /></td>
						<td><input class="form-control" type="text" name="iv_line4_16" /></td>
						<td><input class="form-control" type="text" name="iv_line4_18" /></td>
						<td><input class="form-control" type="text" name="iv_line4_20" /></td>
						<td><input class="form-control" type="text" name="iv_line4_22" /></td>
						<td><input class="form-control" type="text" name="iv_line4_24" /></td>
						<td><input class="form-control" type="text" name="iv_line4_02" /></td>
						<td><input class="form-control" type="text" name="iv_line4_04" /></td>
						<td><input class="form-control" type="text" name="iv_line4_06" /></td>
					</tr>

					<tr>
						<th>Intake IV Line 1 : </th>
						<td><input class="form-control" type="text" name="iv_line5_08" /></td>
						<td><input class="form-control" type="text" name="iv_line5_10" /></td>
						<td><input class="form-control" type="text" name="iv_line5_12" /></td>
						<td><input class="form-control" type="text" name="iv_line5_14" /></td>
						<td><input class="form-control" type="text" name="iv_line5_16" /></td>
						<td><input class="form-control" type="text" name="iv_line5_18" /></td>
						<td><input class="form-control" type="text" name="iv_line5_20" /></td>
						<td><input class="form-control" type="text" name="iv_line5_22" /></td>
						<td><input class="form-control" type="text" name="iv_line5_24" /></td>
						<td><input class="form-control" type="text" name="iv_line5_02" /></td>
						<td><input class="form-control" type="text" name="iv_line5_04" /></td>
						<td><input class="form-control" type="text" name="iv_line5_06" /></td>
					</tr>

					<tr>
						<th>Hourly IV : </th>
						<td><input class="form-control" type="text" name="hourly_iv_08" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_10" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_12" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_14" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_16" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_18" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_20" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_22" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_24" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_02" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_04" /></td>
						<td><input class="form-control" type="text" name="hourly_iv_06" /></td>
					</tr>

					<tr>
						<th>Total IV : </th>
						<td><input class="form-control" type="text" name="total_iv_08" /></td>
						<td><input class="form-control" type="text" name="total_iv_10" /></td>
						<td><input class="form-control" type="text" name="total_iv_12" /></td>
						<td><input class="form-control" type="text" name="total_iv_14" /></td>
						<td><input class="form-control" type="text" name="total_iv_16" /></td>
						<td><input class="form-control" type="text" name="total_iv_18" /></td>
						<td><input class="form-control" type="text" name="total_iv_20" /></td>
						<td><input class="form-control" type="text" name="total_iv_22" /></td>
						<td><input class="form-control" type="text" name="total_iv_24" /></td>
						<td><input class="form-control" type="text" name="total_iv_02" /></td>
						<td><input class="form-control" type="text" name="total_iv_04" /></td>
						<td><input class="form-control" type="text" name="total_iv_06" /></td>
					</tr>

					<tr>
						<th>Oral N/G : </th>
						<td><input class="form-control" type="text" name="total_iv_08" /></td>
						<td><input class="form-control" type="text" name="total_iv_10" /></td>
						<td><input class="form-control" type="text" name="total_iv_12" /></td>
						<td><input class="form-control" type="text" name="total_iv_14" /></td>
						<td><input class="form-control" type="text" name="total_iv_16" /></td>
						<td><input class="form-control" type="text" name="total_iv_18" /></td>
						<td><input class="form-control" type="text" name="total_iv_20" /></td>
						<td><input class="form-control" type="text" name="total_iv_22" /></td>
						<td><input class="form-control" type="text" name="total_iv_24" /></td>
						<td><input class="form-control" type="text" name="total_iv_02" /></td>
						<td><input class="form-control" type="text" name="total_iv_04" /></td>
						<td><input class="form-control" type="text" name="total_iv_06" /></td>
					</tr>


				</tbody>
			</tabel>

		</div>


	</form>
