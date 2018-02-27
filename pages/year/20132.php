<!DOCTYPE html>

<html>

<head>
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

				<img style="vertical-align: middle;height:100vh" class="space1" id="largeImage" src="product/year/2013/2.png" />

			</td>
		</tr>
		<tr>
			<td width="40%" valign="bottom" style="line-height: 1.6;">
				<p style="margin-left:20px;"> ‘enneapod’ <br/> silicon balloons <br/> 30’ x 30’ x 25’ <br/> 2013</p>
			</td>
			<td width="60%">
				<table align="right" cellspacing="9" style="margin-right:10px;">

					<tr>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/2.png');" src="product/year/2013/thumb/2.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/2a.png');" src="product/year/2013/thumb/2a.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/2b.png');" src="product/year/2013/thumb/2b.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/2c.png');" src="product/year/2013/thumb/2c.png" width="100" height="100" />
						</td>


					</tr>

					<tr>

						<td>
							<img class="thumb" onclick="setimg('product/year/2013/2d.png');" src="product/year/2013/thumb/2d.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/2e.png');" src="product/year/2013/thumb/2e.png" width="100" height="100" />
						</td>
						<td colspan="1">
							<img class="thumb" onclick="setimg('product/year/2013/2f.png');" src="product/year/2013/thumb/2f.png" width="100" height="100" />
						</td>
					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
