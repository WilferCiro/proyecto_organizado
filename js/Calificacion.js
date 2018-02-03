(function(scope){
	function Calificacion(){
		this.initialize();
	}	
	Calificacion.prototype.initialize = function (){
		var self = this;
		$('.campo_agregar1').keyup(this.actualiza_valores1);
		$('.campo_agregar_sustentacion').keyup(this.actualiza_valores_sustentacion);
		$('[data-toggle=\"tooltip\"]').tooltip();
		new nicEditor({buttonList : ['fontSize','ol','ul','removeformat','left','center','right','indent','outdent','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('observaciones');
		this.actualiza_valores1();
		this.actualiza_valores_sustentacion();
		$('#formulario_envio_notas').on('submit',function(e){
			self.envia_formulario(e);
		});
		$('.envia_form').click(function(){
			$('#tipo_envio_notas').val($(this).attr('tipo'));
		});
		$('#modal_cargando').modal('hide');
	};
	
	Calificacion.prototype.actualiza_valores1 = function(){		
		var elementos = $('.campo_agregar1');
		var tam =elementos.length;			 
		var total=0;				
		for (var i=0; i<tam; i++) {					
			var valor=parseFloat($(elementos[i]).val());
			valor = valor>5?5:valor<0?0:valor;
			valor=valor*parseFloat($(elementos[i]).attr('peso'))/100;
			valor = isNaN(valor)?0:valor.toFixed(2);
			$('#total_'+$(elementos[i]).attr('id')).text(valor);
			total+=parseFloat(valor);
		}
		$('#totalisimo1').text(total.toFixed(2));
	}
	
	
	Calificacion.prototype.actualiza_valores_sustentacion = function(){	
		var estudiante_id=$(this).attr('estudiante_id');		
		var elementos = $('.campo_agregar_sustentacion_estudiante_'+estudiante_id);
		var tam =elementos.length;
		var total=0;				
		for (var i=0; i<tam; i++) {					
			var valor=parseFloat($(elementos[i]).val());
			valor = valor>5?5:valor<0?0:valor;
			valor=valor*parseFloat($(elementos[i]).attr('peso'))/100;
			valor = isNaN(valor)?0:valor.toFixed(2);
			$('#valor_'+$(elementos[i]).attr('id')).text(valor);
			total+=parseFloat(valor);
		}
		$('#totalisimo_sustentacion_'+estudiante_id).text(total.toFixed(2));
	}
	
	
	Calificacion.prototype.envia_formulario = function(e){
		e.preventDefault();
		$('#nuevasObservaciones').attr('value',$('#observaciones').val());
		var f=$(this);
		var formData=new FormData(document.getElementById('formulario_envio_notas'));
		formData.append('dato','valor');
		$.ajax({
			url:'php/procesa_calificacion.php',
			type:'post',
			dataType:'html',
			data:formData,
			cache:false,
			contentType:false,
			processData:false,
			beforeSend: function () {
				$('#carga_ajax2').html('<h1>Procesando, espere por favor...</h1>');
				$('#modal_cargando').modal('show');
		   }
		}).done(function(res){
			$('#carga_ajax2').html(res);
			$('#modal_cargando').modal('hide');
		});
	};
	
	
	scope.Calificacion = Calificacion;
}(window));

window.onload = function(){
	this.calificacion = new Calificacion();
}
