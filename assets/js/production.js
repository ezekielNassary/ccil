$(document).ready(function(){
var shift='';
var date='';
var act1=0;
var act2=0;
var act3=0;
var act4=0;
var act5=0;
var act6=0;
var target1=0;
var target2=0;
var target3=0;
var target4=0;
var target5=0;
var target6=0;
var ef1=0;
var ef2=0;
var ef3=0;
var ef4=0;
var ef5=0;
var ef6=0;
var totalpro=0;
var totaleff=0.0;
var total_target=0;

production_line1();
production_line2();
production_line3();
production_line4();
production_line5();
production_line6();

    
function production_line1(){
 $.ajax({
 			type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line1'},
            success:function(data){
            	
          if(data.status == 'line1'){
        act1=parseInt(data.result[0].actual);
        target1=parseInt(data.result[0].target);
			$('.sku1').html(data.result[0].sku);
			$('.target1').html(target1);
			$('.actual').html(act1);
			ef1=parseFloat(data.result[0].efficiency);
			$('.effi1').html(ef1.toFixed(2)+'%');
			shift=data.result[0].shift;
			date=data.result[0].date;
			$('#shif-time').html('Shift: '+shift+' Date: '+date);
			graph(act1,act2,act3,act4,act5,act6);
		   }else if(data.status == 'Error'){
		   	alert('Error');
		   }
		}
        });

}
function production_line2(){
 $.ajax({
 			type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line2'},
            success:function(data){
           
		if(data.status == 'line2'){
			act2=parseInt(data.result[0].actual);
			 target2=parseInt(data.result[0].target);
			$('.sku2').html(data.result[0].sku);
			$('.target2').html(target2);
			$('.actual2').html(act2);
			ef2=parseFloat(data.result[0].efficiency);
			$('.effi2').html(ef2.toFixed(2)+'%');
			graph(act1,act2,act3,act4,act5,act6);
		}else if(data.status == 'Error'){
		   	alert('Error');
		   }
            }
        });
}
function production_line3(){
 $.ajax({
 			type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line3'},
            success:function(data){
           
		if(data.status == 'line3'){
			act3=parseInt(data.result[0].actual);
			 target3=parseInt(data.result[0].target);
			$('.sku3').html(data.result[0].sku);
			$('.target3').html(target3);
			$('.actual3').html(act3);
		  ef3=parseFloat(data.result[0].efficiency);
			$('.effi3').html(ef3.toFixed(2)+'%');
			graph(act1,act2,act3,act4,act5,act6);
		}else if(data.status == 'Error'){
		   	alert('Error');
		   }
            }
        });
}
function production_line4(){
 $.ajax({
 			type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line4'},
            success:function(data){
            console.log(data);
		if(data.status == 'line4'){
			act4=parseInt(data.result[0].actual);
			 target4=parseInt(data.result[0].target);
			$('.sku4').html(data.result[0].sku);
			$('.target4').html(target4);
			$('.actual4').html(act4);
			ef4=parseFloat(data.result[0].efficiency);
			$('.effi4').html(ef4.toFixed(2)+'%');
			graph(act1,act2,act3,act4,act5,act6);
		}else if(data.status == 'Error'){
		   	alert('Error');
		   }
            }
        });
}

function production_line5(){
 $.ajax({
 			type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line5'},
            success:function(data){
            console.log(data);
		if(data.status == 'line5'){
			act5=parseInt(data.result[0].actual);
			target5=parseInt(data.result[0].target);
			$('.sku5').html(data.result[0].sku);
			$('.target5').html(target5);
			$('.actual5').html(act5);
			ef5=parseFloat(data.result[0].efficiency);
			$('.effi5').html(ef5.toFixed(2)+'%');
			graph(act1,act2,act3,act4,act5,act6);
		}else if(data.status == 'Error'){
		   	alert('Error');
		   }
            }
        });
}
function production_line6(){
 $.ajax({
 			type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line6'},
            success:function(data){
            console.log(data);
		if(data.status == 'line6'){
			act6=parseInt(data.result[0].actual);
			target6=parseInt(data.result[0].target);
			$('.sku6').html(data.result[0].sku);
			$('.target6').html(target6);
			$('.actual6').html(act6);
			ef6=parseFloat(data.result[0].efficiency);
			$('.effi6').html(ef6.toFixed(2)+'%');
			graph(act1,act2,act3,act4,act5,act6);
			totalpro=act1+act2+act3+act4+act5+act6;
			totaleff=(ef1+ef2+ef3+ef4+ef5+ef6)/6;
			total_target=target1+target2+target3+target4+target5+target6;
       var eff_remain=100- totaleff;

			console.log(total_target);
			$('.target-remain').html(eff_remain.toFixed(2)+'%');
			$('.total-target').html(total_target);
			$('.total_eff').html(totaleff.toFixed(2)+'%');
			$('.total_production').html(totalpro)
		}else if(data.status == 'Error'){
		   	alert('Error');
		   }
            }
        });
}


function graph(){
	

	 echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Production',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: act3,
                          name: 'NM-1702'
                        },
                        {
                          value: act2,
                          name: 'NM 2002-2'
                        },
                        {
                          value: act4,
                          name: 'NM-700'
                        },
                        {
                          value: act1,
                          name: 'NM 2002-1'
                        },
                        {
                          value: act5,
                          name: 'WIMCO-GAB'
                        }
                        ,
                        {
                          value: act6,
                          name: 'WIMCO-GAN'
                        }
                      ]
                    }]
                  });
}
});