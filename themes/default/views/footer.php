<?php

	

	if(serverStatus() == '1'){
		$serverStat = '<span style="color:Green;"><i class="fas fa-desktop"></i> Online</span>';
	} else {
		$serverStat = '<span style="color:Tomato;"><i class="fas fa-desktop"></i> Offline</span>';
	}

	$output .= '
				<footer class="footer">
			      <div class="container">
			        <span class="text-muted">FFXI Server Status: '.$serverStat.'</span>
			        <span class="text-muted small"> <i>'.(serverStatus() == 1 ? onlineCount()." Users Online" : "").'</i></span>
			      </div>
			    </footer>
			</body>
		</html>
	';

?>