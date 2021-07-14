//tasker.js
//2016 Novi
//@fb.com/novhz.emo94

$(document).ready(function(){

var taskTitle;
var taskDescr;
var taskDate;
var taskTime;
var taskID;

//submit task button

	$("#btnAddTask").click(function(){
		taskTitle=$("#title").val();
		taskDescr=$("#descr").val();
		taskDate=$("#agendaDataInicial").val();
		taskTime=$("#agendaHoraInicial").val();

		if(taskTitle!=='' || taskDescr!==''){
		$.ajax({
			url: 'agenda/addtask',
			type: 'POST',
			data: 'title='+taskTitle+'&description='+taskDescr+'&agendaDataInicial='+taskDate+'&agendaHoraInicial='+taskTime,
			success:function(response){
				if(response==1){
					window.location = window.location.origin+"/PDV/agenda";
				}
			}
		});
	}else{
		
		bootbox.alert("Please complete the form!");
	}

	});

//Edit task button

	$("#btnUpdateTask").click(function(){

		taskTitle=$("#title2").val();
		taskDescr=$("#descr2").val();
		taskID=$("#agenda_id").val();
		taskDate=$("#date2").val();
		taskTime=$("#time2").val();


		$.ajax({
			url: 'agenda/editask',
			type: 'POST',
			data: 'title='+taskTitle+'&description='+taskDescr+'&agendaDataInicial='+taskDate+'&agendaHoraInicial='+taskTime+'&idAgenda='+taskID,
			success:function(response){
				if(response==1){
					window.location = window.location.origin+"/PDV/agenda";
				}
			}
		});


	});

	$("#btnDeleteTask").click(function(){
		


			bootbox.confirm("Tem certeza de que deseja remover esta tarefa?",function(response){
				if(response==true){
					$.ajax({
						url: 'agenda/deletetask',
						type: 'GET',
						data: 'idAgenda='+$("#agenda_id").val(),
						success: function(response){
								if(response==1){
									window.location = window.location.origin+"/PDV/agenda";
							  }
						}
					});
				}	
			});
	});

});