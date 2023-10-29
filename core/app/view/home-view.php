<?php 
// si el usuario no esta logeado
if(!isset($_SESSION["user_id"])){ Core::redir("./");}
$user= UserData::getById($_SESSION["user_id"]);
// si el id  del usuario no existe.
if($user==null){ Core::redir("./");}
?>

<div class="container-fluid p-0">

<h1 class="h3 mb-3"><strong>Dashboard</strong> Inicio</h1>

<div class="row">
  <div class="col-xl-6 col-xxl-5 d-flex">
    <div class="w-100">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Solicitud de usuario</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="file"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3"><?php echo count(User_requestData::getAll());?></h1>
<a class="btn btn-primary" href="./?view=user_request&opt=all" role="button">Ver</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Departamentos</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="layout"></i>
                  </div>
                </div>
              </div>
              
<h1 class="mt-1 mb-3"><?php echo count(CategoryData::getAll());?></h1>
<a class="btn btn-primary" href="./?view=categories&opt=all" role="button">Ver</a>
              
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Usuarios del sistema</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="users"></i>
                  </div>
                </div>
              </div>
                        <h1 class="mt-1 mb-3"><?php echo count(UserData::getAll());?></h1>
<a class="btn btn-primary" href="./?view=users&opt=all" role="button">Ver</a>
              
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Conectividad VPN</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="shopping-cart"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3"><?php echo count(ConnectivityData::getAll());?></h1>
<a class="btn btn-primary" href="./?view=connectivity&opt=all" role="button">Ver</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-7">
    <div class="card flex-fill w-100">
      <div class="card-header">

        <h5 class="card-title mb-0">Solicitudes de usuarios</h5>
      </div>
      <div class="card-body py-3">
        <div class="chart chart-sm">
          <canvas id="chartjs-dashboard-line"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
    <div class="card flex-fill w-100">
      <div class="card-header">

        <h5 class="card-title mb-0">Módulos</h5>
      </div>
      <div class="card-body d-flex">
        <div class="align-self-center w-100">
          <div class="py-3">
            <div class="chart chart-xs">
              <canvas id="chartjs-dashboard-pie"></canvas>
            </div>
          </div>

          <table class="table mb-0">
            <tbody>
              <tr>
                <td>Solicitudes de usuarios</td>
                <td class="text-end"><?php echo count(User_requestData::getAll());?></td>
              </tr>
              <tr>
                <td>Solicitudes de acceso a WIFI</td>
                <td class="text-end"><?php echo count(Wifi_requestData::getAll());?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
       
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
      var gradient = ctx.createLinearGradient(0, 0, 0, 225);
      gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
      gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
      // Line chart
      new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
          labels: [
          <?php 
          $start  = time()-(60*60*26*30);
          for($i=$start; $i<=time(); $i+=(60*60*24)):?>
          "<?php echo date('Y-m-d',$i);?>", 
      <?php endfor; ?>

          ],          datasets: [{
            label: "Solicitudes de Usuarios",
            fill: true,
            backgroundColor: gradient,
            borderColor: window.theme.primary,
            data: [
<?php 
          $start  = time()-(60*60*26*30);
          for($i=$start; $i<=time(); $i+=(60*60*24)):?>
            <?php echo (User_requestData::getByDate(date('Y-m-d', $i))->cnt); ?>, 
<?php endfor; ?>
            ],
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            intersect: false
          },
          hover: {
            intersect: true
          },
          plugins: {
            filler: {
              propagate: false
            }
          },
          scales: {
            xAxes: [{
              reverse: true,
              gridLines: {
                color: "rgba(0,0,0,0.0)"
              }
            }],
            yAxes: [{
              ticks: {
                stepSize: 1000
              },
              display: true,
              borderDash: [3, 3],
              gridLines: {
                color: "rgba(0,0,0,0.0)"
              }
            }]
          }
        }
      });
    });
  </script>

<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Bar chart
      new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
          labels: [
          <?php 
          $start  = time()-(60*60*26*30);
          for($i=$start; $i<=time(); $i+=(60*60*24)):?>
          "<?php echo date('Y-m-d',$i);?>", 
      <?php endfor; ?>

          ],
          datasets: [{
            label: "This year",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [
<?php 
          $start  = time()-(60*60*26*30);
          for($i=$start; $i<=time(); $i+=(60*60*24)):?>
            54, 
<?php endfor; ?>
            ],
            barPercentage: .75,
            categoryPercentage: .5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false
              },
              stacked: false,
              ticks: {
                stepSize: 20
              }
            }],
            xAxes: [{
              stacked: false,
              gridLines: {
                color: "transparent"
              }
            }]
          }
        }
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var markers = [{
          coords: [31.230391, 121.473701],
          name: "Shanghai"
        },
        {
          coords: [28.704060, 77.102493],
          name: "Delhi"
        },
        {
          coords: [6.524379, 3.379206],
          name: "Lagos"
        },
        {
          coords: [35.689487, 139.691711],
          name: "Tokyo"
        },
        {
          coords: [23.129110, 113.264381],
          name: "Guangzhou"
        },
        {
          coords: [40.7127837, -74.0059413],
          name: "New York"
        },
        {
          coords: [34.052235, -118.243683],
          name: "Los Angeles"
        },
        {
          coords: [41.878113, -87.629799],
          name: "Chicago"
        },
        {
          coords: [51.507351, -0.127758],
          name: "London"
        },
        {
          coords: [40.416775, -3.703790],
          name: "Madrid "
        }
      ];
      var map = new JsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        markers: markers,
        markerStyle: {
          initial: {
            r: 9,
            strokeWidth: 7,
            stokeOpacity: .4,
            fill: window.theme.primary
          },
          hover: {
            fill: window.theme.primary,
            stroke: window.theme.primary
          }
        }
      });
      window.addEventListener("resize", () => {
        map.updateSize();
      });
    });
  </script>