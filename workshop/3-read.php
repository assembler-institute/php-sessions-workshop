<div class="card">
    <div class="card-body">
        <h5 class="card-title">Reading session variables</h5>
        <p>We can read our session variables just like any other variables.</p>
        <pre><code>&#60?
// Start session
session_start();

$username = $_SESSION["username"];
$email = $_SESSION["email"];

echo "&#60p>Username is $username.&#60/p>";
echo "&#60p>Email is $email&#60/p>";

?></code></pre>
    </div>
</div>