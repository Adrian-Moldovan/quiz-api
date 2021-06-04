<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Quiz API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: June 4 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Quiz API - able to list questions and answers for a quiz and also register new questions and answers</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://quiz.siit.ro";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.6.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://quiz.siit.ro</code></pre><h1>Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Questions</h1>
<h2>Display a listing of questions and available answers.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://quiz.siit.ro/api/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://quiz.siit.ro/api/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "question": "What is the capital of Chile?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 1,
                "text": "Santiago",
                "right": 1,
                "question_id": 1,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 2,
                "text": "Buenos Aires",
                "right": 0,
                "question_id": 1,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 3,
                "text": "Bucharest",
                "right": 0,
                "question_id": 1,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 4,
                "text": "Russia",
                "right": 0,
                "question_id": 1,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    },
    {
        "id": 2,
        "question": "What is the smallest country in the world?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 5,
                "text": "Vatican City",
                "right": 1,
                "question_id": 2,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 6,
                "text": "Luxemburg",
                "right": 0,
                "question_id": 2,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 7,
                "text": "India",
                "right": 0,
                "question_id": 2,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 8,
                "text": "Liechtenstein",
                "right": 0,
                "question_id": 2,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    },
    {
        "id": 3,
        "question": "What is the most famous Mexican beer?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 9,
                "text": "Corona",
                "right": 1,
                "question_id": 3,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 10,
                "text": "Timisoreana",
                "right": 0,
                "question_id": 3,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 11,
                "text": "Ursus",
                "right": 0,
                "question_id": 3,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 12,
                "text": "Palinca de prune",
                "right": 0,
                "question_id": 3,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    },
    {
        "id": 4,
        "question": "What is Scooby Doo’s full name?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 13,
                "text": "Scoobert Doo",
                "right": 1,
                "question_id": 4,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 14,
                "text": "Scoob Doolitle",
                "right": 0,
                "question_id": 4,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 15,
                "text": "Scooba Dive",
                "right": 0,
                "question_id": 4,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 16,
                "text": "Greg",
                "right": 0,
                "question_id": 4,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    },
    {
        "id": 5,
        "question": "What is the collective noun for a group of unicorns?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 17,
                "text": "A blessing",
                "right": 1,
                "question_id": 5,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 18,
                "text": "A pack",
                "right": 0,
                "question_id": 5,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 19,
                "text": "A gang",
                "right": 0,
                "question_id": 5,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 20,
                "text": "A flock",
                "right": 0,
                "question_id": 5,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    },
    {
        "id": 6,
        "question": "Who composed the music for Sonic the Hedgehog 3?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 21,
                "text": "Michael Jackson",
                "right": 1,
                "question_id": 6,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 22,
                "text": "Fuego",
                "right": 0,
                "question_id": 6,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 23,
                "text": "The Pope",
                "right": 0,
                "question_id": 6,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 24,
                "text": "Himself",
                "right": 0,
                "question_id": 6,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    },
    {
        "id": 7,
        "question": "The first hockey pucks used in early outdoor hockey games were made of what?",
        "created_at": "2021-05-31T05:57:41.000000Z",
        "updated_at": "2021-05-31T05:57:41.000000Z",
        "answers": [
            {
                "id": 25,
                "text": "Frozen cow dung",
                "right": 1,
                "question_id": 7,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 26,
                "text": "Frozen chicken dung",
                "right": 0,
                "question_id": 7,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 27,
                "text": "Guano",
                "right": 0,
                "question_id": 7,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            },
            {
                "id": 28,
                "text": "Leather",
                "right": 0,
                "question_id": 7,
                "created_at": "2021-05-31T05:57:41.000000Z",
                "updated_at": "2021-05-31T05:57:41.000000Z"
            }
        ]
    }
]</code></pre>
<div id="execution-results-GETapi-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-questions"></code></pre>
</div>
<div id="execution-error-GETapi-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-questions"></code></pre>
</div>
<form id="form-GETapi-questions" data-method="GET" data-path="api/questions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-questions" onclick="tryItOut('GETapi-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-questions" onclick="cancelTryOut('GETapi-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/questions</code></b>
</p>
</form>
<h2>Store question and its answers.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://quiz.siit.ro/api/questions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://quiz.siit.ro/api/questions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-questions"></code></pre>
</div>
<div id="execution-error-POSTapi-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-questions"></code></pre>
</div>
<form id="form-POSTapi-questions" data-method="POST" data-path="api/questions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-questions" onclick="tryItOut('POSTapi-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-questions" onclick="cancelTryOut('POSTapi-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/questions</code></b>
</p>
<p>
<label id="auth-POSTapi-questions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-questions" data-component="header"></label>
</p>
</form><h1>Users</h1>
<h2>Register a new user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://quiz.siit.ro/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"skiles.emily@example.net","name":"quibusdam","password":"omnis","password_confirm":"quis","device_name":{}}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://quiz.siit.ro/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "skiles.emily@example.net",
    "name": "quibusdam",
    "password": "omnis",
    "password_confirm": "quis",
    "device_name": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirm</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirm" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>device_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="device_name" data-endpoint="POSTapi-register" data-component="body"  hidden>
<br>

</p>

</form>
<h2>Login a user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://quiz.siit.ro/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"cornelius.schiller@example.com","password":"animi","device_name":{}}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://quiz.siit.ro/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "cornelius.schiller@example.com",
    "password": "animi",
    "device_name": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>device_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="device_name" data-endpoint="POSTapi-login" data-component="body"  hidden>
<br>

</p>

</form>
<h2>Display a user profile.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://quiz.siit.ro/api/user/13" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://quiz.siit.ro/api/user/13"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user--user-"></code></pre>
</div>
<div id="execution-error-GETapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user--user-"></code></pre>
</div>
<form id="form-GETapi-user--user-" data-method="GET" data-path="api/user/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user--user-" onclick="tryItOut('GETapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user--user-" onclick="cancelTryOut('GETapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<label id="auth-GETapi-user--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user" data-endpoint="GETapi-user--user-" data-component="url" required  hidden>
<br>
user_id profile.
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>