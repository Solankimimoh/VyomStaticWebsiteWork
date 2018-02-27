<!DOCTYPE html>

<html>

<head>
	<title>2006 Project</title>

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<style>
		body,
		html {
			font-size: 13px;
			font-family: 'Lato', sans-serif;
			margin: 0;
			height: 100%;
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
			margin-bottom: 20px;
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

	<table width="100%" height="100%">
		<tr>
			<td colspan="2" align="center" style="height: 99vh;">

				<img style="vertical-align: middle;height: 95vh;"  id="largeImage" src="product/year/2006/2.png" />


			</td>
		</tr>
		<tr>
			<td width="40%" valign="bottom" style="line-height: 1.6;">
				<p style="margin-left:20px">‘untitled’ <br/> plater with steel armature, fabric scrap, bench  <br/> 14’ x 9’ x 7’ <br/>2006 </p>

			</td>
			<td width="60%">
				<table align="right" cellspacing="9" style="margin-right:10px">

					<tr>

						<td>
							<img class="thumb" onclick="setimg('product/year/2006/2.png');" src="product/year/2006/thumb/2.png" width="100" height="100" />
						</td>
						<td>
							<img class="thumb" onclick="setimg('product/year/2006/2a.png');" src="product/year/2006/thumb/2a.png" width="100" height="100" />
						</td>

					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
