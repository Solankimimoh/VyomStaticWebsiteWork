<!DOCTYPE html>

<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


	<style>
		body {
			font-size: 13px;
			margin: 0;
			font-family: 'Lato', sans-serif;
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

				<img style="vertical-align: middle;height:99vh" class="space1" id="largeImage" src="product/year/2013/4.png" />

			</td>
		</tr>
		<tr>
			<td width="40%" valign="bottom" style="line-height: 1.6;">
				<p style="margin-left:20px;"> ‘landless lord’ <br/> steel mesh, plaster <br/> 8’ x 2’ x 2’ <br/> 2013</p>
			</td>
			<td width="60%">
				<table align="right" cellspacing="9" style="margin-right:10px;">

					<tr>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/4.png');" src="product/year/2013/thumb/4.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/4a.png');" src="product/year/2013/thumb/4a.png" width="100" height="100" />
						</td>


					</tr>



				</table>

			</td>
		</tr>
	</table>

</body>
