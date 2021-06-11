<div>
    <div class="bd-example">
        <div class="accordion" id="destroyAccordion">
            <div class="accordion-item">
                <h4 class="accordion-header" id="destroyHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDestroy" aria-expanded="false" aria-controls="collapseDestroy">
                        Destroying session variables
                    </button>
                </h4>
                <div id="collapseDestroy" class="accordion-collapse collapse" aria-labelledby="destroyHeading">
                    <div class="accordion-body">
                        <p>If we want to completely destroy the session first we must use <code>unset($_SESSION)</code> to delete all the session variables, then we must delete the cookie in case we use cookies for session id spreading and finaly we can use <code>session_destroy()</code>.</p>
                        <pre><code>&#60?

// Start session
session_start();

// unset all session variables
unset($_SESSION);

// destroy session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// destroy the session
session_destroy();

?></code></pre>
                        <div class="alert alert-info" role="alert">
                            <h6 class="alert-heading">Deleting a session variable</h6>
                            <p class="mb-0">We can delete a session variable with <code>unset()</code></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>