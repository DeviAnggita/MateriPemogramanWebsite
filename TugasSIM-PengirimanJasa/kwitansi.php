  <!DOCTYPE html>
  <html>

  <head>
  	<style type="text/css">
  		.lead {
  			font-family: "Times New Roman";
  			font-weight: bold;
  		}

  		.value {
  			font-family: "Times New Roman";
  		}

  		.value-big {
  			font-family: "Times New Roman";
  			font-weight: bold;
  			font-size: large;
  		}

  		.td {
  			align-items: top;
  		}

  		/* @page { size: with x height */
  		/*@page { size: 20cm 10cm; margin: 0px; }*/
  		@page {
  			size: A4;
  			margin: 0px;
  		}

  		/*		@media print {
				html, body {
					width: 210mm;
			  }
			}*/
  		/*body { border: 2px solid #000000;  }*/
  	</style>
  	<script type="text/javascript">
  		var beforePrint = function() {};

  		var afterPrint = function() {
  			document.location.href = '';
  		};

  		if (window.matchMedia) {
  			var mediaQueryList = window.matchMedia('print');
  			mediaQueryList.addListener(function(mql) {
  				if (mql.matches) {
  					beforePrint();
  				} else {
  					afterPrint();
  				}
  			});
  		}

  		window.onbeforeprint = beforePrint;
  		window.onafterprint = afterPrint;
  	</script>
  </head>

  	<title>Print kwitansi No. </title>

  	<body>
  		<table border="1px">
  			<tr>
  				<td width="80px"><img src="image/logo_asli.png" width="200px" /></td>
  				<td>
  					<table cellpadding="5">
  						<tr>
  							<td width="200px">
  								<div class="lead">No Resi :
  							</td>
  							<td>
  								<div class="" value="">FDM12345</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Pengirim :</div>
  							</td>
  							<td>
  								<div class="value">Hasna</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Asal Pengirim :</div>
  							</td>
  							<td>
  								<div class="value">Yogyakarta</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Penerima :</div>
  							</td>
  							<td>
  								<div class="value">Annisya</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Asal Penerima :</div>
  							</td>
  							<td>
  								<div class="value">Surakarta</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Nama Barang :</div>
  							</td>
  							<td>
  								<div class="value">Baju</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Berat Barang :</div>
  							</td>
  							<td>
  								<div class="value">2 Kg</div>
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Tanggal Pembayaran :</div>
  							</td>
  							<td>
  								<div class="value">3-Juni-2021</div>
  							</td>
  						</tr>
  						<tr>
  							<td>&nbsp;</td>
  							<td>____________________________________________________</td>
  						</tr>
  						<tr>
  							<td>
  								<div class="lead">Total Harga :</div>
  							</td>
  							<td>
  								<div class="value-big">20.000</div>
  							</td>
  						</tr>
  						<tr>
  							<td colspan="2">&nbsp;</td>
  						</tr>
  						<tr>
  							<td>&nbsp;</td>
  							<td>
  								<div class="md-me-2" align="right" style="position: relative; right:50px">Admin</div>
  							</td>
  						</tr>
  					</table>
  				</td>
  			</tr>
  		</table>
  	<hr>
  	<script src="/js/jquery.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function() {
  			window.print();
  		});
  	</script>
  	<a href="home.php" style="color: red; text-decoration:none">Kembali &nbsp</a>
  	<a style="color: black;">|</a>
  	<a href="cetakkwi.php" style="color: blue; text-decoration:none" target="_BLANK">&nbsp Cetak Kwitansi</a>
  	</body>
  	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

  </html>