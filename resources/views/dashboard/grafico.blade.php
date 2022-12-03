@extends('dashboard.dashboard')

@section('content')
<style>
  #home{
    width: 100%;
    border: solid 2px orange;
    background-color: orange;
    border-radius: 10px;
  }
</style>
  
    <div class="container" >
      <div class="container" >
       
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Avaliações</h1>
        </div>
        <h1 class="h4 mt-3  ">Media de avaliações por cada mês</h1>
      </div>

    
     
      <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="435" height="183" style="display: block; width: 435px; height: 183px;"></canvas>
      <script src="{{ asset('js/chart.js') }}"></script> 
      <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: [<?php echo implode(',',$mesesGrafico) ?>],
                datasets: [{ 
                    label:'Avaliações',
                    data: [{{implode(',',$notasMeses)}}],
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(255, 159, 64, 0.5)',
                      'rgba(255, 205, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(201, 203, 207, 0.5 )'
                    ],
                    borderColor: [
                      'rgb(255, 99, 132)',
                      'rgb(255, 159, 64)',
                      'rgb(255, 205, 86)',
                      'rgb(75, 192, 192)',
                      'rgb(54, 162, 235)',
                      'rgb(153, 102, 255)',
                      'rgb(201, 203, 207)'
                    ],
                    borderWidth: 2
                  } 
                ]
              },
              options: {
                scales:{
                  y: {
                    min: 0,
                    max: 5,
                    ticks: {
                        stepSize: 1
                    }
                }
                }            
             }
            });
           

            
        </script>
    
    
 
            
        
    </div>
    

@endsection
