<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>William's Help</title>

    <!-- Bootstrap -->
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css"
	rel="stylesheet">
    <link
	href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css"
	rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
        tr.hide-table-padding td {
            padding: 0;
            padding-left:40px;
            margin: 0;
        }
    </style>
    
  </head>




  <body>
    <h1>PM List</h1>

    <div class="input-group mb-3 row ml-3" >
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
        </div>
        <input type="text" class="form-control col-3" placeholder="Search PSI" aria-label="Search PSI">
    </div>

    <div>
        <p>
            Master PSI selected:
        </p>
    </div>

    <div>
        <button>Return to PSI</button>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
			<thead>
				<tr>
                    <th>Country</th>
                    <th>Valid Form</th>
                    <th>Master PSI Code</th>
                    <th>Periodicity</th>
                    <th>Start Year</th>
                    <th>End Year</th>
                    <th>Vists per year</th>
                    <th>Hour Total</th>
                    <th>PM Frequency</th>
                    <th>PM Unit</th>
                    <th>Souce</th>
                    <th>Usage</th>
                    <th>Vists</th>
                    <th>Edit Pm</th>
				</tr>
			</thead>
			<tbody>
				<tr class="accordion-toggle collapsed">
					<td>FR</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
                    <td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
                    <td>...</td>
					<td>...</td>
                    <td>...</td>
                    <td>...</td>
					<td><btn class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"><i
							class="fa fa-eye"></i></a></td>
                    <td><a class="btn btn-link" ><i
							class="fa fa-pencil"></i></a></td>
				</tr>
				<tr class="hide-table-padding">
                    <td colspan="14">
						<div id="collapseTwo" class="collapse p-3 pt-2 pb-2">
                                <div class="row-fluid">
                                    <div class="span1 font-weight-bold">Vist</div>
                                    <div class="span1 font-weight-bold">Lbr Hrs</div>
                                    <div class="span1 font-weight-bold">FSE Skills</div>
                                    <div class="span2 font-weight-bold">Tools needed</div>
                                    <div class="span2 font-weight-bold">Parts needed</div>
                                    <div class="span2 font-weight-bold">Comments</div>
                                    <div class="span1 font-weight-bold">PM type</div>
                                    <div class="span1 font-weight-bold">PM Sched</div>
                                </div>
                                <hr/>
                                <div class="row-fluid">
                                    <div class="span1">1</div>
                                    <div class="span1">2</div>
                                    <div class="span1">3</div>
                                    <div class="span2">
                                        <li>
                                            <ul>test</ul>
                                            <ul>test</ul>
                                        </li>
                                    </div>
                                    <div class="span2">0</div>
                                    <div class="span2">Some descrption text</div>
                                    <div class="span1">Field</div>
                                    <div class="span1">A</div>
                                </div>
                                <hr/>
                                <div class="row-fluid">
                                    <div class="span1">2</div>
                                    <div class="span1">2</div>
                                    <div class="span1">3</div>
                                    <div class="span2"></div>
                                    <div class="span2">0</div>
                                    <div class="span2"></div>
                                    <div class="span1"></div>
                                    <div class="span1">B</div>
                                </div>
                        </div>
                    </td>
				</tr>
				<tr class="accordion-toggle">
					<td>FR</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
                    <td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
                    <td>...</td>
					<td>...</td>
                    <td>...</td>
                    <td>...</td>
					<td><btn class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"><i
							class="fa fa-eye"></i></a></td>
                    <td><a class="btn btn-link" ><i
							class="fa fa-pencil"></i></a></td>
				</tr>
				<tr class="hide-table-padding">
					<td></td>
					<td colspan="4">
						<div id="collapseThree" class="collapse">
							- Details 1 <br /> - Details 2 <br /> - Details 3 <br />
						</div>
					</td>
				</tr>
			</tbody>
		</table>
    </div>

    <script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
	<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>

	<script src="http://getbootstrap.com/2.3.2/assets/js/holder/holder.js"></script>
	<script
		src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>

	<script src="http://getbootstrap.com/2.3.2/assets/js/application.js"></script>
  </body>
</html>
