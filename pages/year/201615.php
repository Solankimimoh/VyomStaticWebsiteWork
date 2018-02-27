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
				<img style="vertical-align: middle;height:99vh" class="space1" id="largeImage" src="product/year/2016/15.png" />

			</td>
		</tr>
		<tr>
			<td width="40%" valign="bottom" style="line-height: 1.6;">
				<p style="margin-left:20px;">‘Untitled’ <br/>acrylic paint, PU foam <br/> 9’ x 4’ <br/> 2016</p>
			</td>
			<td width="60%">
				<table align="right" cellspacing="9" style="margin-right:10px;">

					<tr>

						<td>
							<img class="thumb" onclick="setimg('product/year/2016/15.png');" src="product/year/2016/thumb/15.png" width="100" height="100" />
						</td>

						<td>
							<img class="thumb" onclick="setimg('product/year/2016/15a.png');" src="product/year/2016/thumb/15a.png" width="100" height="100" />
						</td>

						<td>
							<img class="thumb" onclick="setimg('product/year/2016/15b.png');" src="product/year/2016/thumb/15b.png" width="100" height="100" />
						</td>

						<td>
							<img class="thumb" onclick="setimg('product/year/2016/15c.png');" src="product/year/2016/thumb/15c.png" width="100" height="100" />
						</td>

					</tr>
					<tr>
						<td>
							<img class="thumb" onclick="setimg('product/year/2016/15d.png');" src="product/year/2016/thumb/15d.png" width="100" height="100" />
						</td>

					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
