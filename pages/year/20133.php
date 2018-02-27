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

				<img style="vertical-align: middle;height:97vh" class="space1" id="largeImage" src="product/year/2013/3.png" />

			</td>
		</tr>
		<tr>
			<td width="40%" valign="bottom" style="line-height: 1.6;">
				<p style="margin-left:20px;">‘ad-infinitum <br/> brass sheet          <br/> 10’ x 10’ x 9’           <br/> 2013</p>
			</td>
			<td width="60%">
				<table align="right" cellspacing="9" style="margin-right:10px;">

					<tr>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/3.png');" src="product/year/2013/thumb/3.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/3a.png');" src="product/year/2013/thumb/3a.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/3b.png');" src="product/year/2013/thumb/3b.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2013/3c.png');" src="product/year/2013/thumb/3c.png" width="100" height="100" />
						</td>


					</tr>



				</table>

			</td>
		</tr>
	</table>

</body>
