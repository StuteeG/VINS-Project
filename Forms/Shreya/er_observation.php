<html>
<head>
	<title>
		er observation
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h2>ER OBSERVATIONw</h2>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
					WEF 10-10-2015
				</div>
			</div>
		</div>
	</div>
		<form id="er_observation">
		<div class="row">
		  <div class="col-md-5">
			<div class="form-group">
			 <label>Triage category :</label>
			 <input type="text" class="form-control" id="triage_category" name="traige_category" >
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			 <label>Date :</label>
			 </br></br>
			 <input type="date" id="date" name="date" >
			</div>
			</div>
			<div>
		   <div class="col-md-3 text-right">
			<textarea class="text-right" id="Addressograph" placeholder=" Addressograph_Here" name="Addressograph" ></textarea>
			</div></textarea>
		</div>
		</div>
		<div class="row">
		  <div class="col-md-10"><hr>
			<div class="form-group">
			 <label>Diagnosis :</label>
			 <input type="text" class="form-control" id="diagnosis" name="diagnosis" >
			</div></div>
		</div>
		<div class="row">
		  <div class="col-md-10">
			<div class="form-group">
			 <label>Inestigation :</label>
			 <textarea class="form-control" id="investigation" rows="3"  placeholder="" name="investigation" ></textarea>
			</div></div>
		</div>

		  <table class="table table-bordered">
		    <thead>
				<tr>
					<th> Time</th>
					<th><input type="time" name="time" id="time" class="form-control"> </th>
					<th><input type="time" name="time" id="time" class="form-control"> </th>
					<th><input type="time" name="time" id="time" class="form-control"> </th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td> Pulse</td>
					<td><input type="text" name="pulse" class="form-control"> </td>
					<td><input type="text" name="pulse" class="form-control"></td>
					<td><input type="text" name="pulse" class="form-control"></td>

				</tr>
				<tr>
					<td> BP</td>
					<td><input type="text" name="bp" class="form-control"> </td>
					<td><input type="text" name="bp" class="form-control"></td>
					<td><input type="text" name="bp" class="form-control"></td>

				</tr>
				<tr>
					<td> SPO2</td>
					<td> <input type="text" name="spo2" class="form-control"></td>
					<td><input type="text" name="spo2" class="form-control"></td>
					<td><input type="text" name="spo2" class="form-control"></td>

				</tr>
				<tr>
					<td> RR</td>
					<td><input type="text" name="rr" class="form-control"> </td>
					<td><input type="text" name="rr" class="form-control"></td>
					<td><input type="text" name="rr" class="form-control"></td>

				</tr>
				<tr>
					<td> GCS</td>
					<td> <input type="text" name="gcs" class="form-control"></td>
					<td><input type="text" name="gcs" class="form-control"></td>
					<td><input type="text" name="gcs" class="form-control"></td>

				</tr>
				<tr>
					<td> Temperature</td>
					<td><input type="text" name="temperature" class="form-control"> </td>
					<td><input type="text" name="temperature" class="form-control"></td>
					<td><input type="text" name="temperature" class="form-control"></td>

				</tr>
				</tbody>
				</table>
				<hr>
				<table class="table table-bordered">
				<tbody>
					<tr>
						<th> IV Infusion</th>
						<th>QTY</TH>
						<th> Start Time</th>
						<th>End Time</th>
						<th> Remarks</th>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion" class="form-control"> </td>
						<td><input type="text" name="iv_infusion" class="form-control"> </td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"></td>

						<td><input type="text" name="iv_infusion" class="form-control"> </td>
						</tr>
					<tr>
						<td><input type="text" name="qty" class="form-control"> </td>
						<td><input type="text" name="qty" class="form-control"> </td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="text" name="qty" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="start_time" class="form-control"> </td>
						<td><input type="text" name="start_time" class="form-control"> </td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="text" name="start_time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="end_time" class="form-control"> </td>
						<td><input type="text" name="end_time" class="form-control"> </td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="text" name="end_time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="remarks" class="form-control"> </td>
						<td><input type="text" name="remarks" class="form-control"> </td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"></td>
						<td><input type="text" name="remarks" class="form-control"> </td>
				    </tr>
			</tbody>
		</table>
		<div class="row">
		<hr>
		<b><align="center"> Medication Administration</b>
		<table class="table table-bordered">
				<tbody>
					<tr>
						<th> Name of the Drug</th>
						<th>Dosage</TH>
						<th>  Routine</th>
						<th>Administration By</th>
						<th> Time</th>
					</tr>
					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>

					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>
					<tr>
						<td><input type="text" name="name_drug" class="form-control"> </td>
						<td><input type="text" name="dosage" class="form-control"> </td>
						<td><input type="text" name="routine" class="form-control"></td>
						<td><input type="text" name="administration_by"  class="form-control"></td>
						<td><input type="time" name="time" id="time" class="form-control"> </td>
				    </tr>
					</tbody></table>
					<hr>


		<div class="col-md-4">
			<div class="form-group">
			 <label>Patient shifted to :</label>
			 <textarea class="form-control" id="patient_shifted_to" rows="3"  placeholder="" name="patient_shifted_to" ></textarea>
			</div>
		</div>

		<div class="col-md-4">

			 <label>ER nurse :</label>
			 <textarea class="form-control" id="er_nurse" rows="3"  placeholder="" name="er_nurse" ></textarea></div>

		<div class="col-md-4">

			 <label>Signature :</label>
			 <textarea class="form-control" id="signature" rows="3"  placeholder="" name="signature" ></textarea></div>

		<hr>
		<div class="row"></br></br>
		<label align="center"> <u>Glasgow Coma Scale</u></label>
						<table class="table table-bordered">
				<tbody>
					<tr>
						<th> EYES OPEN</th>
						<th>VERBAL RESPONSE</TH>
						<th> MOTOR RESPONSE</th>

					</tr>
					<tr>
					<td>4=Spontaneous</td>
					<td>5=Confused</td>
					<td>6=Obey's commands</td>
					</tr>
					<tr>
					<td>3=To speech</td>
					<td>4=Inappropiate</td>
					<td>5=Localizes to pain</td>
					</tr>
					<tr>
					<td>2=To pain</td>
					<td>3=Oriented</td>
					<td>4=Withdraws to pain</td>
					</tr>
					<tr>
					<td>1=No response</td>
					<td>2=Incomprehensive</td>
					<td>3=Flexion to pain</td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td>2=extension to pain</td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td>1=none</td>
					</tr>
					</tbody></table>
					<div>

					<div>
					<button class="btn btn-success btn-bg" type="submit" form="planofcare" value="submit">Submit</button>
					</div>
					</html>
