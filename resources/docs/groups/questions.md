# Questions


## Listing the questions and available answers.




> Example request:

```bash
curl -X GET \
    -G "http://quiz.siit.ro/api/questions?limit=18&random=" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://quiz.siit.ro/api/questions"
);

let params = {
    "limit": "18",
    "random": "",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "question": "What is the capital of Chile?",
        "author": "Inani Mate",
        "answers": [
            {
                "id": 1,
                "text": "Santiago",
                "right": "1"
            },
            {
                "id": 2,
                "text": "Buenos Aires",
                "right": "0"
            },
            {
                "id": 3,
                "text": "Bucharest",
                "right": "0"
            },
            {
                "id": 4,
                "text": "Russia",
                "right": "0"
            }
        ]
    },
    {
        "id": 2,
        "question": "What is the smallest country in the world?",
        "author": "Inani Mate",
        "answers": [
            {
                "id": 1,
                "text": "Vatican City",
                "right": "1"
            },
            {
                "id": 2,
                "text": "Luxemburg",
                "right": "0"
            },
            {
                "id": 3,
                "text": "India",
                "right": "0"
            },
            {
                "id": 4,
                "text": "Liechtenstein",
                "right": "0"
            }
        ]
    }
]
```
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="GETapi-questions" data-component="query"  hidden>
<br>

</p>
<p>
<b><code>random</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-questions" hidden><input type="radio" name="random" value="1" data-endpoint="GETapi-questions" data-component="query" ><code>true</code></label>
<label data-endpoint="GETapi-questions" hidden><input type="radio" name="random" value="0" data-endpoint="GETapi-questions" data-component="query" ><code>false</code></label>
<br>

</p>
</form>


## Store question and its answers.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://quiz.siit.ro/api/questions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"question":"beatae","answers":[{"text":"odit","right":"assumenda"}]}'

```

```javascript
const url = new URL(
    "http://quiz.siit.ro/api/questions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "question": "beatae",
    "answers": [
        {
            "text": "odit",
            "right": "assumenda"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="POSTapi-questions" data-component="body" required  hidden>
<br>

</p>
<p>
<details>
<summary>
<b><code>answers</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>answers[].text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answers.0.text" data-endpoint="POSTapi-questions" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>answers[].right</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="answers.0.right" data-endpoint="POSTapi-questions" data-component="body" required  hidden>
<br>

</p>
</details>
</p>

</form>


## Delete a question its answers.

<small class="badge badge-darkred">requires authentication</small>

<aside class="notice">Must be the author of the question in order to be able to delete it.</aside>

> Example request:

```bash
curl -X DELETE \
    "http://quiz.siit.ro/api/questions/18" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://quiz.siit.ro/api/questions/18"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-questions--question-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-questions--question-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-questions--question-"></code></pre>
</div>
<div id="execution-error-DELETEapi-questions--question-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-questions--question-"></code></pre>
</div>
<form id="form-DELETEapi-questions--question-" data-method="DELETE" data-path="api/questions/{question}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-questions--question-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-questions--question-" onclick="tryItOut('DELETEapi-questions--question-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-questions--question-" onclick="cancelTryOut('DELETEapi-questions--question-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-questions--question-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/questions/{question}</code></b>
</p>
<p>
<label id="auth-DELETEapi-questions--question-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-questions--question-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="question" data-endpoint="DELETEapi-questions--question-" data-component="url" required  hidden>
<br>
The id of the question to be deleted;
</p>
</form>


## List of questions belonging to the authenticated user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://quiz.siit.ro/api/questions/own" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://quiz.siit.ro/api/questions/own"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-questions-own" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-questions-own"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-questions-own"></code></pre>
</div>
<div id="execution-error-GETapi-questions-own" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-questions-own"></code></pre>
</div>
<form id="form-GETapi-questions-own" data-method="GET" data-path="api/questions/own" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-questions-own', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-questions-own" onclick="tryItOut('GETapi-questions-own');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-questions-own" onclick="cancelTryOut('GETapi-questions-own');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-questions-own" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/questions/own</code></b>
</p>
<p>
<label id="auth-GETapi-questions-own" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-questions-own" data-component="header"></label>
</p>
</form>



