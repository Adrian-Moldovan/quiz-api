# Questions


## Display a listing of questions and available answers.




> Example request:

```bash
curl -X GET \
    -G "http://quiz.siit.ro/api/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://quiz.siit.ro/api/questions"
);

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
</form>


## Store question and its answers.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://quiz.siit.ro/api/questions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
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


fetch(url, {
    method: "POST",
    headers,
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
</form>



