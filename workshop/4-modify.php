<div class="card">
    <div class="card-body">
        <h5 class="card-title">Modifying session variables</h5>
        <p>We can modify our session variables just assigning them different values.</p>
        <pre><code>&#60?

// Start session
session_start();

//modify username session variable
$_SESSION["username"] = "haterman";

// unset email session variable
unset($_SESSION["email"]);

?></code></pre>
        <div class="alert alert-info" role="alert">
            <h6 class="alert-heading">Deleting a session variable</h6>
            <p class="mb-0">We can delete a session variable with <code>unset()</code></p>
        </div>
    </div>
</div>