( function ( $ ) {


	var charts = {
		init: function () {
			// -- Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#292b2c';

			this.ajaxGetPostMonthlyData();

		},

		ajaxGetPostMonthlyData: function () {
			var urlPath =  'http://' + window.location.hostname + '/get-post-chart-data';
			var request = $.ajax( {
				method: 'GET',
				url: urlPath
		} );

			request.done( function ( response ) {
				console.log( response );
				charts.createCompletedJobsChart( response );
			});
		},

		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChart: function ( response ) {

			var ctx = $('#sales-chart');
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels  : [response.mes1, response.mes2, response.mes3, response.mes4, response.mes5, response.mes6], // The response got from the ajax request containing all month names in the database
					datasets: [{
								backgroundColor: '#007bff',
								borderColor    : '#007bff',
								data           : [response.ingreso1, response.ingreso2, response.ingreso3, response.ingreso4, response.ingreso5, response.ingreso6]
							},
							{
								backgroundColor: '#ced4da',
								borderColor    : '#ced4da',
								data           : [response.gasto1, response.gasto2, response.gasto3, response.gasto4, response.gasto5, response.gasto6]
							}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max, // The response got from the ajax request containing max limit for y axis
								maxTicksLimit: 5,
								callback: function (value, index, values) {
									if (value >= 1000) {
									value /= 1000
									value += 'k'
									}
									return '$' + value
								}
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			});
		}
	};

	charts.init();

} )( jQuery );
