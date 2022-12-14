<?php 
error_reporting(E_ALL);
ini_set("display_errors",1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" href="../torta_da_te/css/admin_home.css">
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    

    <title>Torta Da Te</title>

    
</head>

<body>
  <?php
  include "../torta_da_te/admin_header.php";
  ?>
<main>
     <?php
     include "../torta_da_te/admin_aside.php";
     ?>
<section class="total_stastics">
  <div class="stastics_content">
    <h2>Total Sales</h2>
    <div class="stastics_result">
    <p>$ 1,523,352.50</p>
    <div class="status">
      <img src="../torta_da_te/images/stastic_grow.png" alt="">
      <p class="positive">16%</p>
    </div>
  </div>
  </div>
  <div class="stastics_content">
    <h2>Total Orders</h2>
    <div class="stastics_result">
    <p>4,679</p>
    <div class="status">
      <img src="../torta_da_te/images/stastic_grow.png" alt="">
      <p class="positive">16%</p>
      </div>
    </div>
  </div>
  <div class="stastics_content">
    <h2>Total Products</h2>
    <div class="stastics_result">
    <p>56</p>
    <div class="status">
      <img src="../torta_da_te/images/stastic.png" alt="">
      <p>0%</p>
    </div>
  </div>
  </div>
  <div class="stastics_content">
    <h2>New visitors</h2>
    <div class="stastics_result">
    <p>135,565</p>
    <div class="status">
      <img src="../torta_da_te/images/stastic.png" alt="">
      <p class="positive">2%</p>
    </div>  
    </div>
  </div>
  <div class="stastics_content">
    <div class="stastics_result">
    <h2>New Members</h2>
    <p>135</p>
    <div class="status">
      <img src="../torta_da_te/images/stastic_negative.png" alt="">
      <p class="negative">2%</p>
    </div>
    </div>
  </div>
  
</section>


<div class="chart_group">
<div class="chart">
<div class="chart_title">
  <span class="chart_title_txt">Traffic source</span>
<select name="" id="updateTraffic">
  <option value="6 Month">6 Month</option>
  <option value="1 Year">1 Year</option>
  <option value="all time">All time</option>
</select>
</div>
<div class="chart_background">
<canvas id="myChart1" width="260"></canvas>
</div>
</div>


<div class="chart">
<div class="chart_title">
  <div class="chart_ttl_value">
  <span class="chart_title_txt">Total Sales</span>
  <span class="chart_value_txt">$ 1,523,358.50</span>
  </div>
<select name="" id="">
  <option value="6 Month">6 Month</option>
  <option value="1 Year">1 Year</option>
  <option value="all time">All time</option>
</select>
</div>
<div class="chart_background">
<canvas id="myChart2" height="168"></canvas>
</div>
</div>
</div>

<div class="table_group">
  <div class="order_list_title">
  <span>
  Latest Orders
  </span>
</div>
<div class="order_list_sub_ttl">
  <div>
  <span>Total:</span><span>8544 Orders</span>
  </div>
  <span>View All</span>
</div>
<div class="order_list_tb_admin">
  <table>
    <thead>
      <tr>
      <th>Ref. No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Method</th>
      <th>Status</th>
      <th>Date</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>8544</td>
        <td class="order_name">Jane Doe</td>
        <td>janedoe@gmail.com</td>
        <td>Paypal</td>
        <td><span class="order_status paid">Paid</span></td>
        <td>12.12.2022</td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td>8544</td>
        <td class="order_name">Jane Doe</td>
        <td>janedoe@gmail.com</td>
        <td>Paypal</td>
        <td><span class="order_status pending">Pending</span></td>
        <td>12.12.2022</td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td>8544</td>
        <td class="order_name">Jane Doe</td>
        <td>janedoe@gmail.com</td>
        <td>Paypal</td>
        <td><span class="order_status pending">Pending</span></td>
        <td>12.12.2022</td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td>8544</td>
        <td class="order_name">Jane Doe</td>
        <td>janedoe@gmail.com</td>
        <td>Paypal</td>
        <td><span class="order_status  paid">Paid</span></td>
        <td>12.12.2022</td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td>8544</td>
        <td class="order_name">Jane Doe</td>
        <td>janedoe@gmail.com</td>
        <td>Paypal</td>
        <td><span class="order_status cancelled">Cancelled</span></td>
        <td>12.12.2022</td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
    </tbody>
  </table>
</div>
</div>
</main>
<footer></footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>

(function() {
	const ctx = document.getElementById('myChart1').getContext('2d');
	const labels= ['Google', 'Direct', 'Etc', 'Youtube'];


    new Chart(ctx, {
    	type: 'doughnut', // bar, pie, line, doughnut, polarArea
        data: {
        	datasets: [{
            	data: [50,25,12,13],
                backgroundColor: ['#EE3074', '#D87B54', '#75ACDF', '#75DFD9']
            }],
            labels: labels,
            font:{
              size:24
            },
            },
            
            options: {
            responsive: false,  
            legend: {position: 'bottom'},
            plugins: {
               datalabels: {
                   color: ['#fff', '#fff', '#fff', '#fff'],
                   borderWidth: 2,
                   borderColor: ['#fff', '#fff', '#fff', '#fff'],
                   borderRadius : 25,
                   anchor: 'center',
                   	formatter: function(value, context) {
                    	return (value > 10) ? value+ "%" : null //data??? 10 ???????????? ?????? ?????? ???????????? ????????????.
                    
                },
            }}
        }
    }
    );
}
)
// const updateTraffic = document.querySelector("#updateTraffic");

// updateTraffic.addEventListener('change', (event)=>{
//   function addData(data){
//     if (updateTraffic.value == idx[1]){
//     chart.data.labels.push(['Google', 'Direct', 'Etc', 'Youtube']);
//     chart.data.datasets.forEach((dataset) => {
//         dataset.data.push([100,10,12,15]);
//     });
//     chart.update();
//   }
// }
// })
(
);



(function() {
	const newChart2 = document.getElementById('myChart2').getContext('2d');
	const labels= ['July','Aug','Sep','Oct','Nov','Dec'];


    new Chart(newChart2, {
    	type: 'line', // bar, pie, line, doughnut, polarArea
        data: {
        	datasets: [{
              label: ['Total Sales'],
            	data: [14412, 21323, 36123, 18986, 27728, 48840],
                backgroundColor: ['#D87B54'],
                borderColor:['#D87B54'],
                borderWidth: 3,
            }],
            labels: labels,
            font:{
              size:24
            },
            },
            
            options: {
            responsive: false,
            interaction:{
              mode: 'index',
              intersect: false,
            },
            stacked: false,
            plugins:{
              title:{
                display: false,
                text: 'Total sales',
                size: 24,
              }
            },
            scales:{
              y:{
                type: 'linear',
                display: true,
                position: 'left',
              }
            }
        }
    }
    );
}
)

(
);

var xValues = ["July", "Aug", "Sep", "Oct","Nov","Dec"];

 new Chart("myChart2", {
  
   type: "line",
   data: {
     labels: xValues,
     datasets: [{ 
       data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
       borderColor: "red",
       fill: false
     },]
   },
   options: {
     responsive: false,
     legend: {display: false, position: 'bottom'}
   }
 });

</script>
<script src="../torta_da_te/js/navmyaccount.js"></script>

</body>
</html>