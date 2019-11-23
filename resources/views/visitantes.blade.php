@extends('layouts.app')
@section('content')
<script>
var nombre = "{{$playasData->playa->nombre}}"
var hombre = parseInt("{{$playasData->hombre}}")
var sargazo = parseInt("{{$playasData->sargazo}}")
var organica = parseInt("{{$playasData->organica}}")
var inorganica = parseInt("{{$playasData->inorganica}}")
var mucha = parseInt("{{$playasData->mucha}}")
var menosCincuenta = parseInt("{{$playasData->menosCincuenta}}")
var menosCien = parseInt("{{$playasData->menosCien}}")
var masCien = parseInt("{{$playasData->masCien}}")

var total = mucha+menosCincuenta+menosCien+masCien
var porcentaje = total/4
var pHombre = (hombre*100)/total
var pSargazo = (sargazo*100)/total
var pOrganica = (organica*100)/total
var pInorganica = (inorganica*100)/total
var pMucha = (mucha*100)/total
var pMenosCincuenta = (menosCincuenta*100)/total
var pMenosCien = (menosCien*100)/total
var pMasCien = (masCien*100)/total

var votP = parseInt("{{$playasData->votospositivos}}")
var votN = "{{$playasData->votospositivos}}"
window.onload = function() {


var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		
		text: "Personas que visitan "+nombre
	},
	data: [{
		type: "pie",
		startAngle: total,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			
			{y: pMenosCincuenta, label: "Menos de cincuenta personas"},
			{y: pMenosCien, label: "Entre cincuenta y cien personas "},
			{y: pMasCien, label: "Más de cien personas"},
		]
	}]
});

chart.render();
}
	
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
@endsection