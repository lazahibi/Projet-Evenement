<?php include('view/partials/header.php'); ?>
<head>
	<link rel='stylesheet' href='res/css/fullcalendar.css' />
	<script src='res/js/moment.js'></script>
	<script src='res/js/fullcalendar.js'></script>
	<script src='res/js/fr.js'></script>
	<script src="res/js/functions.js"></script>

</head>

	<div class="contenue container">
		<div class="row">
		<div id='calendar' class="col-sm" style='max-width: 50%'></div>
		<div class="nextEv col-sm" style="max-width: 30vw">
			<table style="max-width: 40vw">
				<tr><th>Prochain evenement :</th></tr>
				<tr><td>
					<h4><?= $nextEv ?></h4> le <?= $dateEv ?>
				</td></tr>
				<tr><td>
					Nombre de participants : <h4> <?= $particip ?> </h4>
				</td></tr>	
			</table>
		</div>
	</div>
</div>
  <script type="text/javascript">
                 $(function() {
                      $("#calendar").fullCalendar({
                             height: 500,
                             events: [
                  <?php
                    while ($data = $req->fetch()):
                  ?>
                        {
                          title  : "<?= $data['name_ev'] ?>",
                          start  : "<?= $data['date_ev'] ?>",
                        },
                   <?php
                    endwhile;
                   ?>
                        {
                          title  : "",
                          start  : "",
                        }
                      ]
                      })

                    });
                    </script>
</body>
</html>