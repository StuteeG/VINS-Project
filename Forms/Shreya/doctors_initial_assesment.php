<html>
<head>
	<title>
		Doctor's Initial Assessment
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Doctor's Initial Assessment</h1>
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
<form id="doctor's_initial_assessment">

	<div class="row form-group">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					<label>History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="history" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Past History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="past_history" />
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<textarea class="form-control" name="addressograph" placeholder="Addressograph"></textarea>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					<label>Allergic History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="allergic_history" />
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<h3>In case of Road Accident : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Name of Informant : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="name_informant" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Brought By : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="brought_by" />
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Place of Accident : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="place_of_accident" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Time : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="time" name="time" />
			</div>
		</div>
	</div>

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
	      <label>MLC Done outside or not : </label>
			</div>
			<div class="col-md-6">
	      <select class="form-control" name="mlc">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>

	<hr />
	<div class="row">
		<h3>History Of : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>LOC : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="loc">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>ENT Bleeding : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="ent_bleeding">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Seizures : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="seizures">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Vomiting : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="vomiting">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>
	<hr />

	<div class="row">
		<h3>Vitals : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Pulse : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="pulse" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Temprature : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="temp" />
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>BP : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="bp" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>SPO2 : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="spo2" />
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>RBS : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="rbs" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Pain : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="pain">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>GCS : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_e" placeholder="E"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_m" placeholder="M"/>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_v" placeholder="V"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Systematic Examination : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="systematic_examination" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Any other Findings or Injuries : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="any_other" />
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Treated on Admission : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="treated_on_admission" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Shifted To : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="shifted_to" />
			</div>
		</div>
	</div>


</form>
</div>
</body>

</html>
