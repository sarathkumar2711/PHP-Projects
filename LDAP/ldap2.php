 
 
 <?php
 
	$ldap = ldap_connect("Your Server name"); // replace yourdomain.local with your domain name (keep the quotes)
    $domain = "Your domain name\\"; // replace yourdomain with your domain name (keep the quotes and the backslashes)

        // Pulling username and password info from form and saving as variable
    $username = $_POST['username'];
    $password = $_POST['password'];

        // Combine Domain and Username for LDAP Login
    $domain_user = $domain.$username;

        // Attempt to Authenticate user
    if (@ldap_bind($ldap, $domain_user, $password)) {
		
        echo "Authenticated";
    } 
	else {

        echo "Invalid Credentials!";
        
    }
	  
?>