<div class="card">
    <div class="card-body">
        <h5 class="card-title">Create a Session</h5>
        <p>We can start a session with <code>session_start()</code>.</p>
        <p><code>session_start()</code> will, by default, first check for an existing session. If a session already exists, it will do nothing, but it will create one if there’s no pre-existing session available.</p>
        <p>Once we have a running session in our script, we can set session variables with the PHP global variable <code>$_SESSION</code>.</p>
        <pre><code>&#60?

// Start session
session_start();

// Set session variables
$_SESSION["username"] = "mememan";
$_SESSION["email"] = "mememan@ilovegifs.com";

$sessionid = session_id();

?></code></pre>
        <div class="alert alert-info" role="alert">
            <h6 class="alert-heading">What happens when we create a session?</h6>
            <ul>
                <li>It creates a random 32 digit hexadecimal value as an identifier for that particular session. The identifier value will look something like <code>4af5ac6val45rf2d5vre58sd648ce5f7</code>.</li>
                <li>It sends a cookie named PHPSESSID to the user’s system. As the name gives out, the <code>PHPSESSID</code> cookie will store the unique session id of the session.</li>
                <li>A temporary file gets created on the server and is stored in the specified directory. It names the file on the hexadecimal id value prefixed with <code>sess_</code>. Thus, the above id example will be held in a file called <code>sess_4af5ac6val45rf2d5vre58sd648ce5f7</code>.</li>
            </ul>
            <p>PHP will access the PHPSESSID cookie and get the unique id string to get session variables’ values. It will then look into its directory for the file named with that string.</p>
            <p>When you close the browser or the website, it terminates the session after a certain period of a predetermined time.</p>
        </div>
        <div class="alert alert-info" role="alert">
            <h6 class="alert-heading">Session ID</h6>
            <p class="mb-0">We can keep track of the session we are in through an unique session identifier that is generated in each session. We can see this identifier with <code>session_id()</code></p>
        </div>
        <div class="alert alert-warning" role="alert">
            <h6 class="alert-heading">How to Send Sessions Without Cookies?</h6>
            <p class="mb-0">If you don't want to use cookies then you must investigate the <code>SID</code> constant</p>
        </div>
    </div>
</div>