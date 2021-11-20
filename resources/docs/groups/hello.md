# hello


## (GET)名前を呼んで挨拶を返してくれるAPI




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8080/public/api/v1/hello?name=alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8080/public/api/v1/hello"
);

let params = {
    "name": "alias",
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
{
    "message": "Hello 名無しさん!!GETだよ!!",
    "status": 200
}
```
<div id="execution-results-GETapi-v1-hello" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-hello"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-hello"></code></pre>
</div>
<div id="execution-error-GETapi-v1-hello" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-hello"></code></pre>
</div>
<form id="form-GETapi-v1-hello" data-method="GET" data-path="api/v1/hello" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-hello', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-hello" onclick="tryItOut('GETapi-v1-hello');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-hello" onclick="cancelTryOut('GETapi-v1-hello');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-hello" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/hello</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="GETapi-v1-hello" data-component="query"  hidden>
<br>
呼んで欲しい名前
</p>
</form>


## (POST)名前を呼んで挨拶を返してくれるAPI




> Example request:

```bash
curl -X POST \
    "http://localhost:8080/public/api/v1/hello" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://localhost:8080/public/api/v1/hello"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "reprehenderit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "Hello 名無しさん!!POSTやで!!",
    "status": 200
}
```
<div id="execution-results-POSTapi-v1-hello" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-hello"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-hello"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-hello" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-hello"></code></pre>
</div>
<form id="form-POSTapi-v1-hello" data-method="POST" data-path="api/v1/hello" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-hello', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-hello" onclick="tryItOut('POSTapi-v1-hello');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-hello" onclick="cancelTryOut('POSTapi-v1-hello');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-hello" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/hello</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-hello" data-component="body"  hidden>
<br>
呼んで欲しい名前
</p>

</form>



