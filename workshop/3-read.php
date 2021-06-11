<div>
    <div class="bd-example">
        <div class="accordion" id="readAccordion">
            <div class="accordion-item">
                <h4 class="accordion-header" id="readHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRead" aria-expanded="false" aria-controls="collapseRead">
                        Reading session variables
                    </button>
                </h4>
                <div id="collapseRead" class="accordion-collapse collapse" aria-labelledby="readHeading">
                    <div class="accordion-body">
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
            </div>
        </div>
    </div>
</div>