<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Sanbuk Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
        body .content .bash-example code {
            display: none;
        }

        body .content .javascript-example code {
            display: none;
        }
    </style>

    <script>
        var baseUrl = "http://sanbuk-internship-main";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.16.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.16.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">

            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>

    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
        <ul id="tocify-header-introduction" class="tocify-header">
            <li class="tocify-item level-1" data-unique="introduction">
                <a href="#introduction">Introduction</a>
            </li>
        </ul>
        <ul id="tocify-header-authenticating-requests" class="tocify-header">
            <li class="tocify-item level-1" data-unique="authenticating-requests">
                <a href="#authenticating-requests">Authenticating requests</a>
            </li>
        </ul>
        <ul id="tocify-header-banner" class="tocify-header">
            <li class="tocify-item level-1" data-unique="banner">
                <a href="#banner">Banner</a>
            </li>
            <ul id="tocify-subheader-banner" class="tocify-subheader">
                <li class="tocify-item level-2" data-unique="banner-get-banner">
                    <a href="#banner-get-banner">Get Banner</a>
                </li>
                <ul id="tocify-subheader-banner-get-banner" class="tocify-subheader">
                    <li class="tocify-item level-3" data-unique="banner-GETapi-v1-banner--bannerType-">
                        <a href="#banner-GETapi-v1-banner--bannerType-">Get Banner By Type</a>
                    </li>
                </ul>
            </ul>
        </ul>
        <ul id="tocify-header-experience" class="tocify-header">
            <li class="tocify-item level-1" data-unique="experience">
                <a href="#experience">Experience</a>
            </li>
            <ul id="tocify-subheader-experience" class="tocify-subheader">
                <li class="tocify-item level-2" data-unique="experience-GETapi-v1-experiences">
                    <a href="#experience-GETapi-v1-experiences">GET api/v1/experiences</a>
                </li>
            </ul>
        </ul>
        <ul id="tocify-header-user" class="tocify-header">
            <li class="tocify-item level-1" data-unique="user">
                <a href="#user">User</a>
            </li>
            <ul id="tocify-subheader-user" class="tocify-subheader">
                <li class="tocify-item level-2" data-unique="user-auth">
                    <a href="#user-auth">Auth</a>
                            </li>
                                                            <ul id="tocify-subheader-user-auth" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="user-POSTapi-v1-auth-sign-up">
                                            <a href="#user-POSTapi-v1-auth-sign-up">Sign Up</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="user-POSTapi-v1-auth-sign-in">
                                            <a href="#user-POSTapi-v1-auth-sign-in">Sign In</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="user-POSTapi-v1-auth-verification">
                                            <a href="#user-POSTapi-v1-auth-verification">SMS Verification</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="user-profile">
                                <a href="#user-profile">Profile</a>
                            </li>
                                                            <ul id="tocify-subheader-user-profile" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="user-GETapi-v1-user-profile">
                                            <a href="#user-GETapi-v1-user-profile">Get profile</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI
                                    spec</a></li>
        <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 21, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
        <aside>
            <strong>Base URL</strong>: <code>http://sanbuk-internship-main</code>
        </aside>
        <p>This documentation aims to provide all the information you need to work with our API.</p>
        <aside>As you scroll, you'll see code examples for working with the API in different programming languages in
            the dark area to the right (or as part of the content on mobile).
            You can switch the language used with the tabs at the top right (or from the nav menu at the top left on
            mobile).
        </aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
        <p>This API is not authenticated.</p>

        <h1 id="banner">Banner</h1>


        <h2 id="banner-get-banner">Get Banner</h2>
        <h2 id="banner-GETapi-v1-banner--bannerType-">Get Banner By Type</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-v1-banner--bannerType-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://sanbuk-internship-main/api/v1/banner/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://sanbuk-internship-main/api/v1/banner/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

        <span id="example-responses-GETapi-v1-banner--bannerType-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
accept: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
        <span id="execution-results-GETapi-v1-banner--bannerType-" hidden>
    <blockquote>Received response<span
            id="execution-response-status-GETapi-v1-banner--bannerType-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-banner--bannerType-"
                            style="max-height: 400px;"></code></pre>
</span>
        <span id="execution-error-GETapi-v1-banner--bannerType-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-banner--bannerType-"></code></pre>
</span>
        <form id="form-GETapi-v1-banner--bannerType-" data-method="GET"
              data-path="api/v1/banner/{bannerType}"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-banner--bannerType-', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-v1-banner--bannerType-"
                        onclick="tryItOut('GETapi-v1-banner--bannerType-');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-v1-banner--bannerType-"
                        onclick="cancelTryOut('GETapi-v1-banner--bannerType-');" hidden>Cancel 🛑
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-v1-banner--bannerType-" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/v1/banner/{bannerType}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>Headers</b></h4>
            <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                &nbsp;
                &nbsp;
                <input type="text" style="display: none"
                       name="Content-Type" data-endpoint="GETapi-v1-banner--bannerType-"
                       value="application/json"
                       data-component="header">
                <br>
                <p>Example: <code>application/json</code></p>
            </div>
            <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                &nbsp;
                &nbsp;
                <input type="text" style="display: none"
                       name="Accept" data-endpoint="GETapi-v1-banner--bannerType-"
                       value="application/json"
                       data-component="header">
                <br>
                <p>Example: <code>application/json</code></p>
            </div>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>bannerType</code></b>&nbsp;&nbsp;
                <small>integer</small>&nbsp;
                &nbsp;
                <input type="number" style="display: none"
                       name="bannerType" data-endpoint="GETapi-v1-banner--bannerType-"
                       value="2"
                       data-component="url">
                <br>
                <p>Example: <code>2</code></p>
            </div>
        </form>

        <h1 id="experience">Experience</h1>


        <h2 id="experience-GETapi-v1-experiences">GET api/v1/experiences</h2>

        <p>
        </p>


        <span id="example-requests-GETapi-v1-experiences">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://sanbuk-internship-main/api/v1/experiences" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://sanbuk-internship-main/api/v1/experiences"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

        <span id="example-responses-GETapi-v1-experiences">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
accept: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Aniya Bashirian Jr.&quot;,
            &quot;description&quot;: &quot;Velit dolorem voluptate et perspiciatis ea ipsa. Praesentium reprehenderit quia exercitationem non nemo illo ad sit. Neque veniam libero repudiandae consectetur.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Graciela Hoeger&quot;,
            &quot;description&quot;: &quot;Omnis nostrum est vero nemo sequi. Quo id reiciendis nisi aut velit et. Non ipsam minima non et repudiandae rerum eaque at. Et quidem non et quia. Est voluptatum consequatur voluptas quisquam.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Johnathan Hoeger&quot;,
            &quot;description&quot;: &quot;Laboriosam vel atque rerum aut pariatur unde aperiam. Ad et ut nemo distinctio dolor. Qui voluptatem in aut odit natus. Vero unde voluptate esse earum iste labore.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Matt Anderson&quot;,
            &quot;description&quot;: &quot;Voluptatem sint velit fuga. Est tempore delectus est aliquam quis omnis. Rerum numquam in ullam libero dolores praesentium autem.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Rex Kuvalis&quot;,
            &quot;description&quot;: &quot;Voluptas quia dolor qui et temporibus quis. Enim ut velit cumque autem velit. Omnis ad quia nihil nemo.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Amara Rowe&quot;,
            &quot;description&quot;: &quot;Dignissimos nam sed labore incidunt quia et. Exercitationem nobis et nihil temporibus est. Architecto qui rem possimus quidem quis animi pariatur nisi.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Estelle Willms&quot;,
            &quot;description&quot;: &quot;Excepturi eveniet fugiat similique deleniti quaerat deserunt. Velit sed dolores odio. Assumenda mollitia in reprehenderit reiciendis quia. Aut labore vitae unde ea expedita architecto rerum.&quot;,
            &quot;created_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-21T18:45:20.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
        <span id="execution-results-GETapi-v1-experiences" hidden>
    <blockquote>Received response<span
            id="execution-response-status-GETapi-v1-experiences"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-experiences"
                            style="max-height: 400px;"></code></pre>
</span>
        <span id="execution-error-GETapi-v1-experiences" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-experiences"></code></pre>
</span>
        <form id="form-GETapi-v1-experiences" data-method="GET"
              data-path="api/v1/experiences"
              data-authed="0"
              data-hasfiles="0"
              data-isarraybody="0"
              autocomplete="off"
              onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-experiences', this);">
            <h3>
                Request&nbsp;&nbsp;&nbsp;
                <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-v1-experiences"
                        onclick="tryItOut('GETapi-v1-experiences');">Try it out ⚡
                </button>
                <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-v1-experiences"
                        onclick="cancelTryOut('GETapi-v1-experiences');" hidden>Cancel 🛑
                </button>&nbsp;&nbsp;
                <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-v1-experiences" hidden>Send Request 💥
                </button>
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/v1/experiences</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>Headers</b></h4>
            <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                &nbsp;
                &nbsp;
                <input type="text" style="display: none"
                       name="Content-Type" data-endpoint="GETapi-v1-experiences"
                       value="application/json"
                       data-component="header">
                <br>
                <p>Example: <code>application/json</code></p>
            </div>
            <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                &nbsp;
                &nbsp;
                <input type="text" style="display: none"
                       name="Accept" data-endpoint="GETapi-v1-experiences"
                       value="application/json"
                       data-component="header">
                <br>
                <p>Example: <code>application/json</code></p>
            </div>
        </form>

        <h1 id="user">User</h1>


        <h2 id="user-auth">Auth</h2>
                                                    <h2 id="user-POSTapi-v1-auth-sign-up">Sign Up</h2>

<p>
</p>


        <span id="example-requests-POSTapi-v1-auth-sign-up">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://sanbuk-internship-main/api/v1/auth/sign-up" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"voluptatibus\",
    \"last_name\": \"et\",
    \"phone\": \"quibusdam\",
    \"email\": \"foster.lowe@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://sanbuk-internship-main/api/v1/auth/sign-up"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "voluptatibus",
    "last_name": "et",
    "phone": "quibusdam",
    "email": "foster.lowe@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

        <span id="example-responses-POSTapi-v1-auth-sign-up">
</span>
<span id="execution-results-POSTapi-v1-auth-sign-up" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-sign-up"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-sign-up" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-sign-up" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-sign-up"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-sign-up" data-method="POST"
      data-path="api/v1/auth/sign-up"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-sign-up', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-sign-up"
                    onclick="tryItOut('POSTapi-v1-auth-sign-up');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-sign-up"
                    onclick="cancelTryOut('POSTapi-v1-auth-sign-up');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-sign-up" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/sign-up</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="application/json"
               data-component="header">
                                    <br>
                                    <p>Example: <code>application/json</code></p>
                                </div>
    <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        &nbsp;
        <input type="text" style="display: none"
               name="first_name" data-endpoint="POSTapi-v1-auth-sign-up"
               value="voluptatibus"
               data-component="body">
        <br>
        <p>Example: <code>voluptatibus</code></p>
    </div>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        &nbsp;
        <input type="text" style="display: none"
               name="last_name" data-endpoint="POSTapi-v1-auth-sign-up"
               value="et"
               data-component="body">
        <br>
        <p>Example: <code>et</code></p>
    </div>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        &nbsp;
        <input type="text" style="display: none"
               name="phone" data-endpoint="POSTapi-v1-auth-sign-up"
               value="quibusdam"
               data-component="body">
        <br>
        <p>Example: <code>quibusdam</code></p>
    </div>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        <i>optional</i> &nbsp;
        <input type="text" style="display: none"
               name="email" data-endpoint="POSTapi-v1-auth-sign-up"
               value="foster.lowe@example.com"
               data-component="body">
        <br>
        <p>Must be a valid email address. Example: <code>foster.lowe@example.com</code></p>
    </div>
</form>

        <h2 id="user-POSTapi-v1-auth-sign-in">Sign In</h2>

        <p>
        </p>


        <span id="example-requests-POSTapi-v1-auth-sign-in">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://sanbuk-internship-main/api/v1/auth/sign-in" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": \"aut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://sanbuk-internship-main/api/v1/auth/sign-in"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": "aut"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

        <span id="example-responses-POSTapi-v1-auth-sign-in">
</span>
<span id="execution-results-POSTapi-v1-auth-sign-in" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-sign-in"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-sign-in" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-sign-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-sign-in"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-sign-in" data-method="POST"
      data-path="api/v1/auth/sign-in"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-sign-in', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-sign-in"
                    onclick="tryItOut('POSTapi-v1-auth-sign-in');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-sign-in"
                    onclick="cancelTryOut('POSTapi-v1-auth-sign-in');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-sign-in" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/sign-in</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-sign-in"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-auth-sign-in"
               value="application/json"
               data-component="header">
                                    <br>
                                    <p>Example: <code>application/json</code></p>
                                </div>
    <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        &nbsp;
        <input type="text" style="display: none"
               name="phone" data-endpoint="POSTapi-v1-auth-sign-in"
               value="aut"
               data-component="body">
        <br>
        <p>Example: <code>aut</code></p>
    </div>
</form>

        <h2 id="user-POSTapi-v1-auth-verification">SMS Verification</h2>

        <p>
        </p>


        <span id="example-requests-POSTapi-v1-auth-verification">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://sanbuk-internship-main/api/v1/auth/verification" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": \"minus\",
    \"code\": \"quasi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://sanbuk-internship-main/api/v1/auth/verification"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": "minus",
    "code": "quasi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

        <span id="example-responses-POSTapi-v1-auth-verification">
</span>
<span id="execution-results-POSTapi-v1-auth-verification" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-verification"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-verification" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-verification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-verification"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-verification" data-method="POST"
      data-path="api/v1/auth/verification"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-verification', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-verification"
                    onclick="tryItOut('POSTapi-v1-auth-verification');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-verification"
                    onclick="cancelTryOut('POSTapi-v1-auth-verification');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-verification" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/verification</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-auth-verification"
               value="application/json"
               data-component="header">
                                    <br>
                                    <p>Example: <code>application/json</code></p>
                                </div>
    <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        &nbsp;
        <input type="text" style="display: none"
               name="phone" data-endpoint="POSTapi-v1-auth-verification"
               value="minus"
               data-component="body">
        <br>
        <p>Example: <code>minus</code></p>
    </div>
    <div style=" padding-left: 28px;  clear: unset;">
        <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
        <small>string</small>&nbsp;
        &nbsp;
        <input type="text" style="display: none"
               name="code" data-endpoint="POSTapi-v1-auth-verification"
               value="quasi"
               data-component="body">
        <br>
        <p>Example: <code>quasi</code></p>
    </div>
</form>

        <h2 id="user-profile">Profile</h2>
        <h2 id="user-GETapi-v1-user-profile">Get profile</h2>

        <p>
            <small class="badge badge-darkred">requires authentication</small>
        </p>


        <span id="example-requests-GETapi-v1-user-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://sanbuk-internship-main/api/v1/user/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://sanbuk-internship-main/api/v1/user/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-profile" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-profile"></code></pre>
</span>
<form id="form-GETapi-v1-user-profile" data-method="GET"
      data-path="api/v1/user/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user-profile"
                    onclick="tryItOut('GETapi-v1-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user-profile"
                    onclick="cancelTryOut('GETapi-v1-user-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>




    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
