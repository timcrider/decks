<!--
FINALLY
-->
<section>
	<h3>Finally Added To Try/Catch</h3>
	<pre><code data-trim contenteditable class="php">
// Conect to the database
$db = new PDO(
	'mysql:host=localhost;dbname=testdb;charset=utf8', 
	'username', 
	'password'
);

try {
	// Run the broken query
	$db->query("Broken SQL");
} catch (PDOException $e) {
	// Handle the error somehow
	print "Unable to execute query";
} finally {
	// Always close the connection
	$db = null;
}
	</code></pre>
</section>
