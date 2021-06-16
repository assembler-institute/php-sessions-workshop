<div class="card">
    <div class="card-body">
        <h5 class="card-title">What are Sessions?</h5>
        <p class="card-text">Web servers doesn't keep any info. HTTP adresses don't mantain states. Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, theme color, etc). By default, session variables last until the user closes the browser.</p>
        <p class="card-text">Session variables hold information about one single user, and are available to all pages in one application.</p>

        <div class="alert alert-warning" role="alert">
            <h6 class="alert-heading">Be careful when ...!</h6>
            <p class="mb-0">If you need a permanent storage you should use a database. PHP Sessions are not meant for that. </p>
        </div>
    </div>
</div>