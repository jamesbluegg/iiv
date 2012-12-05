/*Define constant to connect to database */
DEFINE('DATABASE_USER', 'web2-vatable2012');
DEFINE('DATABASE_PASSWORD', 'vatab13pa55');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'web2-vatable2012');

// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
 DATABASE_NAME);

if (!$dbc) {
 trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}