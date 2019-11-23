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

var total = hombre+sargazo+organica+inorganica
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

console.log(votP)
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		
		text: nombre
	},
	data: [{
		type: "pie",
		startAngle: total,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: pHombre, label: "Basura generada por el hombre"},
			{y: pSargazo, label: "Basura generada por le sargazo"},
			{y: pOrganica, label: "Basura organica "},
			{y: pInorganica, label: "Basura inorganica"},
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