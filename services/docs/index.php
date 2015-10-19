<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'services/includes/header_art.inc';
?>
<?php
    include 'includes/topmenu.inc';
?>

<?php
    include 'includes/right.inc';
?>

<!-- Center Column -->
                <div id="primaryContentContainer">
                        <div id="primaryContent">
                                <h2>OpensiteSolutions Articles</h2>
				<?php
					include 'includes/adds/google_advertise.inc';
				?>
				
				<h2>Articles</h2>
				<ul>
				<b>Web</b>
				<li>Creating a <a href="favicon.php"> Favicon</a></li>
				<li>Apache <a href="apache.php#sect1">web</a> server</li>
				<li>Apache Web <a href="apache.php#sect2">Security</a></li><br>
				<b>Security</b>
				<li>PfSense <a href="firewall.php">Firewall</a></li>
				<li>Monitoring <a href="pfsense_monitoring.php">PFSense</a></li>
				<b>LDAP</b>
				<li>Installing and configuring LDAP <a href="freebsdldap_guide.php">LDAP</a>
				<li>BSD LDAP <a href="ldap.php">configuratoin</a>
				</ul>

                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'includes/left.inc';
?>


<?php
    include 'includes/footer.inc';
?>
