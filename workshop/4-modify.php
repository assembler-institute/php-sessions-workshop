<div>
    <div class="bd-example">
        <div class="accordion" id="modifyAccordion">
            <div class="accordion-item">
                <h4 class="accordion-header" id="modifyHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseModify" aria-expanded="false" aria-controls="collapseModify">
                        Modifying session variables
                    </button>
                </h4>
                <div id="collapseModify" class="accordion-collapse collapse" aria-labelledby="modifyHeading">
                    <div class="accordion-body">
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
            </div>
        </div>
    </div>
</div>