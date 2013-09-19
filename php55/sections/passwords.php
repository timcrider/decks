<!--
Passwords
http://www.jcurcio.com/posts/creating-and-verifying-hashes-in-php-the-easy-way/
-->
<section>
	<h3>Password Hashing</h3>
	<ul>
		<li>New password functions allow easy password hashing and testing</li>
		<li>Currently supports 2 algorithms
			<ul>
				<li>PASSWORD_BCRYPT</li>
				<li>PASSWORD_DEFAULT</li>
			</ul>
		</li>
		<li>Built to easily allow future algorithms</li>
	</ul>
	<p></p>
	<p><small>http://www.php.net/manual/en/book.password.php</small></p>
</section>

<section>
	<h3>Encrypt A Password</h3>
	<pre><code data-trim contenteditable class="php">
$hash = password_hash(
	'test123', 
	PASSWORD_BCRYPT, 
	[ 'cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)]
);

print "PWHash: $hash\n";

/**
PWHash: $2y$11$8SWpTvGyl11HqLdGPWNT1.3ZSWt6G0A.NZrm8NAHxtM7qHkmubiv6
*/
	</code></pre>

</section>


<section>
	<h3>Get Password Hash Info</h3>
	<pre><code data-trim contenteditable class="php">
print_r(password_get_info($hash));

/**
Array
(
    [algo] => 1
    [algoName] => bcrypt
    [options] => Array
        (
            [cost] => 11
        )

)
*/
	</code></pre>

</section>

<section>
	<h3>Test A Password</h3>
	<pre><code data-trim contenteditable class="php">
$hash = '$2y$11$8SWpTvGyl11HqLdGPWNT1.3ZSWt6G0A.NZrm8NAHxtM7qHkmubiv6';

if (password_verify('test123', $hash)) {
	print "C'mon in!\n";
} else {
	print "Get out!\n";
}

/**
Cmon in!
*/
	</code></pre>

</section>
