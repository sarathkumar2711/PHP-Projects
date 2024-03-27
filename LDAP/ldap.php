
<?php

	$ldap_dn = $_POST["username"];     								// or "pi\\".$_POST["username"];
	$ldap_password = $_POST["password"];
	
	
	$ldap_con = ldap_connect("Server name or IP Address"); 						
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

	if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password))
		echo "<h2>Authenticated</h2>";
	else
		echo ldap_error($ldap_con);
?>






























<!--
srv1.pi.local 
172.31.10.10

		dc, ou, cn ?????
		
		username = distinguished name(dn) ie., (dc,ou,cn)
		CN=Documents,OU=Docs/KB,DC=Mimecast,DC=COM
		Microsoft Windows Server Active Directory is the LDAP-based identity store for Windows forests and domains.
-->
























<!--
	dc - Domain Controller
	ldap_connect("Server")
			
-->