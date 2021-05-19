# TodoListControl

API for todo list

## index()


default function, get all todo list

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/index"
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
{
    "id": 4,
    "content": "345",
    "checked": 0,
    "done": 0
}
```
<div id="execution-results-GETapi-index" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-index"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-index"></code></pre>
</div>
<div id="execution-error-GETapi-index" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-index"></code></pre>
</div>
<form id="form-GETapi-index" data-method="GET" data-path="api/index" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-index', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-index" onclick="tryItOut('GETapi-index');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-index" onclick="cancelTryOut('GETapi-index');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-index" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/index</code></b>
</p>
</form>


## add()


add 1 task

> Example request:

```bash
curl -X POST \
    "http://localhost/api/add?task=task" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/add"
);

let params = {
    "task": "task",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 4,
    "content": "345",
    "checked": 0,
    "done": 0
}
```
<div id="execution-results-POSTapi-add" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-add"></code></pre>
</div>
<div id="execution-error-POSTapi-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-add"></code></pre>
</div>
<form id="form-POSTapi-add" data-method="POST" data-path="api/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-add" onclick="tryItOut('POSTapi-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-add" onclick="cancelTryOut('POSTapi-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/add</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="task" data-endpoint="POSTapi-add" data-component="query"  hidden>
<br>
a todo list's task.
</p>
</form>


## delone()


delete 1 task

> Example request:

```bash
curl -X POST \
    "http://localhost/api/delone?id=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delone"
);

let params = {
    "id": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 4,
    "content": "345",
    "checked": 0,
    "done": 0
}
```
<div id="execution-results-POSTapi-delone" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-delone"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delone"></code></pre>
</div>
<div id="execution-error-POSTapi-delone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delone"></code></pre>
</div>
<form id="form-POSTapi-delone" data-method="POST" data-path="api/delone" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-delone', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-delone" onclick="tryItOut('POSTapi-delone');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-delone" onclick="cancelTryOut('POSTapi-delone');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-delone" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/delone</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-delone" data-component="query"  hidden>
<br>
id of a todo list's task.
</p>
</form>


## delall()


delete all checked tasks

> Example request:

```bash
curl -X POST \
    "http://localhost/api/delall?tasklist=tasklist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delall"
);

let params = {
    "tasklist": "tasklist",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "content": "1",
            "checked": 0,
            "done": 1
        },
        {
            "id": 4,
            "content": "345",
            "checked": 0,
            "done": 0
        }
    ]
}
```
<div id="execution-results-POSTapi-delall" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-delall"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delall"></code></pre>
</div>
<div id="execution-error-POSTapi-delall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delall"></code></pre>
</div>
<form id="form-POSTapi-delall" data-method="POST" data-path="api/delall" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-delall', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-delall" onclick="tryItOut('POSTapi-delall');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-delall" onclick="cancelTryOut('POSTapi-delall');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-delall" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/delall</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>tasklist</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tasklist" data-endpoint="POSTapi-delall" data-component="query"  hidden>
<br>
a todo list.
</p>
</form>


## doneall()


finish all checked tasks

> Example request:

```bash
curl -X POST \
    "http://localhost/api/doneall?tasklist=tasklist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/doneall"
);

let params = {
    "tasklist": "tasklist",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "content": "1",
            "checked": 0,
            "done": 1
        },
        {
            "id": 4,
            "content": "345",
            "checked": 0,
            "done": 0
        }
    ]
}
```
<div id="execution-results-POSTapi-doneall" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-doneall"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-doneall"></code></pre>
</div>
<div id="execution-error-POSTapi-doneall" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-doneall"></code></pre>
</div>
<form id="form-POSTapi-doneall" data-method="POST" data-path="api/doneall" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-doneall', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-doneall" onclick="tryItOut('POSTapi-doneall');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-doneall" onclick="cancelTryOut('POSTapi-doneall');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-doneall" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/doneall</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>tasklist</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tasklist" data-endpoint="POSTapi-doneall" data-component="query"  hidden>
<br>
a todo list.
</p>
</form>



