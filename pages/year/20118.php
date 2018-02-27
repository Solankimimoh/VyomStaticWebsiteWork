<!DOCTYPE html>

<html>

<head>
	<title>2006 Project</title>

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<style>
		body {
			font-size: 13px;
			font-family: 'Lato', sans-serif;
			margin: 0;
		}
		
		::-webkit-scrollbar {
			width: .3em;
			height: .3em
		}
		
		 ::-webkit-scrollbar-thumb {
			background: #dcdcdc
		}
		
		 ::-webkit-scrollbar-track {
			background: #dcdcdc
		}
		
		.space1 {
			margin-bottom: 10px;
		}
		
		.thumb {
			cursor: pointer;
		}

	</style>


	<script>
		function setimg(path) {

			document.getElementById("largeImage").src = path;

		}

	</script>
</head>

<body>

	<table width="100%">
		<tr>
			<td colspan="2" align="center" style="height: 99vh;">

				<img style="vertical-align: middle;height:90vh" id="largeImage" src="product/year/2011/8.png" />

			</td>
		</tr>
		<tr>
			<td width="40%" valign="bottom" style="line-height: 1.6;">
				<p style="margin-left:20px;">‘the lotus seat’ <br/> mint, cement pipe, charcoal drawing, audio<br/>20’ x 30’ x 5’ <br/> 2011</p>
			</td>
			<td width="60%">
				<table align="right" cellspacing="9" style="margin-right:10px;">

					<tr>

						<td>
							<img class="thumb" onclick="setimg('product/year/2011/8.png');" src="product/year/2011/thumb/8.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2011/8a.png');" src="product/year/2011/thumb/8a.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2011/8b.png');" src="product/year/2011/thumb/8b.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2011/8c.png');" src="product/year/2011/thumb/8c.png" width="100" height="100" />
						</td>
					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
