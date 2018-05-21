---
layout: post
title: "Progressive enhancement and JavaScript failure"
description: "Can progressive enhancement help to build JavaScript web apps that handle errors gracefully?"
keywords: Progressive enhancement, JavaScript, web applications, robustness, fault-tolerance
lang: en
---

## The twitter.com incident

Twitter.com, the primary web interface of Twitter, is a large JavaScript application. JavaScript is executed when browsing tweets, reading conversations, looking up profiles, composing tweets or direct messages, replying to tweets or following people. Most actions do not trigger a full page refresh, but some JavaScript code loads new data from the server or changes the interface state. It’s Ajax and client-side routing all over.

Twitter.com is a complex interface and all in all, it’s fast and usable for me. It makes sense to use JavaScript to create a highly responsive interface that eases the navigation between the main timeline, tweets, conversations and profiles.

As a JavaScript developer, I can imagine the efforts that went into seamless navigation. For example, there’s a logic that restores the state of the previous page when you navigate back. This is a tough problem in JavaScript web apps that use client-side routing, endless scrolling and on-demand loading of media. Twitter’s solution doesn’t work 100% correct and robust, but it’s still impressive.

Twitter.com is created by humans, and to err is human. Given a complex client-side JavaScript application that is used by millions of people, there are millions of ways the software might fail. I guess this happens every day and most users don’t notice it because Twitter has taken precautions to find and fix bugs quickly.

Some weeks ago, there was a JavaScript bug that a lot of Twitter users I follow noticed. It broke a vital feature: writing and sending a tweet.

<blockquote cite="https://twitter.com/Lady_Ada_King/status/698019955061579776">
<p>
Twitter web client has been breaking for me,<br>
Checked the console,<br>
I don't even want to know what this RegExp is for:<br>
<a href="https://twitter.com/Lady_Ada_King/status/698019955061579776/photo/1">Screenshot</a>
</p>

<p>– <a href="https://twitter.com/Lady_Ada_King/status/698019955061579776">Ada Rose Edwards, @Lady_Ada_King, 12 Feb 2016</a></p>
</blockquote>

<blockquote cite="https://twitter.com/SaraSoueidan/status/694811305862103040">
<p>Error in a file is making the Twitter web UI unusable. This is the kind of UX progressive enhancement helps u avoid.<br>
<a href="https://twitter.com/SaraSoueidan/status/694811305862103040/photo/1">Screenshot</a></p>
<p>– <a href="https://twitter.com/SaraSoueidan/status/694811305862103040">Sara Soueidan, @SaraSoueidan, 3 Feb 2016</a></p>
</blockquote>

So what went wrong here? There’s a large [regular expression](https://en.wikipedia.org/wiki/Regular_expression) in the JavaScript for recognizing `#hashtags` in your tweets while you type the tweet text. The JavaScript code itself was correct. But it contained non-[ASCII](https://de.wikipedia.org/wiki/American_Standard_Code_for_Information_Interchange) characters encoded with [UTF-8](https://en.wikipedia.org/wiki/UTF-8). It’s crucial that the browser uses the UTF-8 encoding to parse the JavaScript syntax correctly. For some reason, the <a href="https://en.wikipedia.org/wiki/Content_delivery_network" title="Content delivery network">CDN</a> server sent the wrong encoding for the script, and parsing the JavaScript failed.

This was a tough error because presumably the JavaScript developers at Twitter did not cause it directly, but a wrong third-party server configuration did. I assume this bug slipped through all quality assurance tests:

<blockquote cite="https://twitter.com/allgebrah/status/698318575153446913">
<ol class="compact-list">
<li>twitter developer writes regex to match most of unicode</li>
<li>tests fine locally</li>
<li>pushed out to cdn, wrong encoding header</li>
</ol>
<p>– <a href="https://twitter.com/allgebrah/status/698318575153446913">Thought Force, @allgebrah, 13 Feb 2016</a></p>
</blockquote>

If your application uses thousands of hosts to serve your JavaScript, such errors may occur.

## Progressive enhancement and JavaScript web apps

I’m mentioning this incident because there were several “told you so!” statements from advocates of progressive enhancement in my timeline. There was the sentiment that progressive enhancement would have prevented this problem. I’d like to discuss this in detail.

Progressive enhancement is about making websites more robust and providing a good experience to every user. What does this mean for JavaScript apps? Most experts agree that progressive enhancement is [not simply about JavaScript availability](https://www.christianheilmann.com/2015/02/18/progressive-enhancement-is-not-about-javascript-availability/). Since most web clients understand at least some JavaScript today, we need to focus on what happens when the browser *does* run our JavaScript code.

[In a previous post](/interaction-is-key/#reliability) I listed the precautions we take to write robust JavaScript apps: From feature support checks over polyfills to unit and acceptance tests. [As Christian Heilmann writes](https://www.christianheilmann.com/2015/02/18/progressive-enhancement-is-not-about-javascript-availability/), progressive enhancement “is about asking ‘if’ a lot.” Conceptually, but also literally in JavaScript by using the `if (…) {…}` statement and similar conditions. Explicit checks are better than implicit assumptions.

## Does progressive enhancement deal with JavaScript failure?

One year ago, Doug Avery wrote an excellent blog post: [Examining the Benefits of Progressive Enhancement](https://viget.com/extend/progressive-enhancement-benefits). Avery tries to find out what progressive enhancement can actually do and what not. In particular, it questions whether progressive enhancement helps to deal with JavaScript failure.

Avery’s article raises important questions and I recommend to read it at least twice. I’m going to cite just one interesting thought from it.

## No fallback on JavaScript failure

Avery’s most important point is that progressive enhancement does not address the fallback to the simpler version in case the enhanced JavaScript version fails for some reason. Even on a site that ‘enhances progressively’, there is no automatic downgrade, no ‘graceful degradation’ when certain JavaScript errors occur.

Web developers love to describe progressive enhancement as [building escalators instead of elevators](https://www.christianheilmann.com/2012/02/16/stumbling-on-the-escalator/). When elevators fail, people are unable to get to other floors. Multiple backup elevators and an extra staircase are needed to prepare for this failure. In contrast, when escalators fail, they ‘degrade gracefully’ to ordinary stairs – no extra fallback necessary.

This is a nice metaphor, but it applies only partly to JavaScript. If JavaScript fails for reasons *not* anticipated, usually people are stuck and there are no stairs.

Avery names [Chosen.js](https://harvesthq.github.io/chosen/), a poster child of progressive enhancement. This script transforms a simple HTML `select` element into an interactive dropdown with search and more. When the browser “[cuts the mustard](http://responsivenews.co.uk/post/18948466399/cutting-the-mustard)”, i.e. passes the support checks, the scripts hides the original `select`, changes the DOM and installs several event handlers. If the script fails *after* this initialization, the UI simply breaks:

<blockquote cite="https://viget.com/extend/progressive-enhancement-benefits">
<p>The truth is that the worst JS bugs won’t cause a feature to fall back. Your AJAX endpoint could be wrong, your click handler could be bound incorrectly, you could experience browser differences with the DOM API or with JS itself, but almost every time, your feature won’t revert to the original, un-enhanced version: it’ll just break. Progressive enhancement doesn’t address this, but testing does.</p>
</blockquote>

It’s worth to quote Avery’s conclusion entirely:

<blockquote>
<p>So what should we do? My answer would be: Write JavaScript, ensure it will run for your target users, and test, test, test. Test locally, test in integration, and finally, monitor live sites for errors the same way you’d monitor for server failures. Assess your site for realistic problems — keyboard accessibility, performance, screen size variations, SEO — but don’t spend your time worrying about undefined or improbable failures.</p>
</blockquote>

## Updating JavaScript best practices

I agree that the key role of making robust websites is to have a testing infrastructure in place. I also agree that articles on progressive enhancement haven’t addressed the specific problem of JavaScript failure *yet*. But progressive enhancement is just an abstract concept that needs to be filled and updated. Let’s refine our practices when the environment has changed.

In the past, progressive enhancement was dominated by the concept of **[Unobtrusive JavaScript](http://www.onlinetools.org/articles/unobtrusivejavascript/)**, coined back in 2005. The main goals of Unobtrusive JavaScript were to provide a functional user interface when JavaScript is not available or modern JavaScript APIs are not supported. Also, JavaScript should build on the existing HTML structure and “improve” it.

Unfortunately, most examples and techniques on progressive enhancement presented today still focus on these points.

The first point is somehow obsolete: JavaScript is widely available but still [might fail for myriads of reasons](http://kryogenix.org/code/browser/everyonehasjs.html). The “no JavaScript” case was simpler to deal with in 2005 than the “some JavaScript available” case today.

The second point is still valid, but exploded: The JavaScript APIs used today are numerous and highly complex. Think about Websockets, IndexedDB, Service Workers or WebGL. Today, the browser quirks is too subtle to just check for it with a simple `if (!document.getElementById) return;`. Feature tests need to be dry runs of the actual code to yield meaningful results.

Finally, today’s interfaces built with JavaScript are much more complex than HTML-only interfaces. As Avery also notes in his article, the difference between the basic and the enhanced version may be huge. Sometimes the basic interface cannot serve as a starting point for the enhancement. A visible “switch” may impair the user experience.

As proponents of progress enhancement, **we need to find new suitable patterns for today’s JavaScript usage**.

## `BEGIN; JAVASCRIPT; ROLLBACK;`

JavaScript logic is typically a one-way street. There’s no safe and easy way of turning around in the middle of it. In contrast, on today’s database management systems, there are [transactions](https://en.wikipedia.org/wiki/Database_transaction) that combine several queries. If one query fails, we just [roll back](https://en.wikipedia.org/wiki/Rollback_(data_management)) the entire transaction and undo all changes. The changes are just virtual until the transaction finishes. It’s all or nothing.

**In a robust, fault-tolerant system, the failure of a sub-system should not affect the stability of the whole system. This is how we should build JavaScript web apps.**

Progressive enhancement helps to identify the basic features and several enhancement steps. The basic version is not necessarily a non-JavaScript version. Progressive enhancement also applies to parts of a larger JavaScript app: There are basic modules and additional modules that enhance the application further.

Coming back to the Twitter example: The rich text editor should be an enhancement step. The parsing of hash tags in a new tweet should be an enhancement step. Both of these tasks are known to be error-prone. In a modular system, an error should be handled inside the module, and not break the entire feature of composing tweets.

*Addendum:* In his conference talk “[Fighting Fragmentation](https://www.youtube.com/watch?v=L_lVTKHJHNs)”, Stu Cox describes a similar way to achieve stability by developing modular, “*atomic enhancements*”

## A simplistic example (is simplistic)

Let’s have a look at a simple example. Given is a website with a search feature. The basic version is an HTML form:

```html
<form action='/search' id='searchForm'>
  <p>
    <label>
      Search term:
      <input type='search' name='q' id='searchQuery'>
    </label>
  </p>
  <p><button type='submit'>Search!</button></p>
</form>
```

Now we’re enhancing the site. We’re using JavaScript to fetch the search results in the background, without a full page refresh:

```html
<div id='searchResults' tabindex="0">
  <!-- Search results go here! -->
</div>

<script>
(function() {
  // Cutting the mustard
  var isFunction = function(obj, prop) {
    return typeof obj[prop] === 'function';
  };
  var supported = isFunction(document, 'getElementById') &&
    isFunction(window, 'addEventListener') &&
    ('textContent' in document.body) &&
    isFunction(window, 'fetch');
  if (!supported) return;

  var searchForm = document.getElementById('searchForm');
  var searchResults = document.getElementById('searchResults');
  var searchQuery = document.getElementById('searchQuery');
  if (!(searchForm && searchResults && searchQuery)) return;

  searchForm.addEventListener('submit', performSearch);

  // Fetches the results per Ajax and outputs them to #searchResults.
  function performSearch(event) {
    event.preventDefault();
    var q = searchQuery.value;
    if (q === '') return;
    var url = searchForm.action + '?q=' + encodeURIComponent(q);
    searchResults.focus();
    showLoadingMessage();
    fetch(url)
      .then(function(response) {
        if (!response.ok) throw new Error(response.statusText);
        return response.text();
      })
      .then(showResults)
      .catch(showError);
  }

  function showLoadingMessage(html) {
    searchResults.innerHTML = 'Loading search results…';
  }

  function showResults(html) {
    searchResults.innerHTML = html;
  }

  function showError(reason) {
    searchResults.textContent = reason;
  }
})();
</script>
```

This example is using the shiny new [fetch API](https://developer.mozilla.org/en/docs/Web/API/Fetch_API) to send an HTTP request. At the beginning, we’re ‘cutting the mustard’ by performing browser feature tests. The browser doesn’t support `fetch` yet? No problem, the enhancement just doesn’t take effect. The search still works without it.

## Graceful degradation: Falling back to the previous enhancement step

The problem with this script is that is is *not prepared for JavaScript failure*. It handles potential network and server errors. But if an exception is raised in `performSearch` (and not in one of the `fetch` promise handlers, to be specific), the search form is simply broken. It should better fall back to the simpler version, which happens to be a plain HTML, non-JavaScript version in this example.

The first task of the `submit` event handler is to prevent the default event action by calling `event.preventDefault()`. The default action of the `submit` event is to send the form data to the server.

```js
function performSearch(event) {
  event.preventDefault();
  // … Perform search with JavaScript, may cause exceptions …
}
```

We’re terribly *optimistic* here, disabling the browser’s standard behavior, assuming our JavaScript will take over, fetch and display the results. Let’s be *realistic* instead, assuming our JavaScript might fail with an exception. Let’s enable the fall back to the previous, non-JavaScript version by calling `preventDefault` *at the end* of the handler:

```js
function performSearch(event) {
  // … Perform search with JavaScript, may cause exceptions …
  event.preventDefault();
}
```

`preventDefault` is not called if an exception aborts the function prematurely. This means the search form is submitted normally without JavaScript, and a new page is loaded from the server.

## Chaining enhancements with promises

JavaScript has measures to create, catch and handle errors. There are [throw](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/throw) and [Error](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Error) to create errors programmatically, and [try {…} catch (e) {…}](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/try...catch) to catch both deliberate and unforeseen errors. However, if you have worked with these language features you know how cumbersome they are.

On a higher level, we can use **[promises](https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Promise)** to encapsulate and compose operations. This allows enhancements to be plugged in safely. Failure in the enhancements can be handled appropriately.

A promise wraps an asynchronous operation in an object. We can process the result by calling `promise.then(processResult)`. The promise can be ‘rejected’ with a ‘reason’, which is the equivalent of throwing an error. Then we can handle the failure gracefully with `promise.then(onFulfilled, onRejected)` or just `promise.catch(onRejected)`.

More and more APIs and libraries use promises to split the logic into a chain of operations. Let’s apply them to progressive enhancement: Each operation in the chain is an enhancement step.

(If you’re not familiar with promises yet, no problem. Just skip the example code blocks and rely on the description.)

If an individual operation fails, it’s easy to handle intentional and exceptional errors:

```js
// Installs the basic version, returns a promise
basic()
  .then(handleBasicSuccess, handleBasicError)
```

If the result of an operation is a necessary input for the next operation, we need to stop the execution of the chain in case of failure. A rejected promise automatically stops the chain and “bubbles up”:

```js
basic()
  // Depends on basic. Not called when basic fails.
  .then(enhancement1)
  // Depends on basic and enhance1. Not called when either of them fails.
  .then(enhancement2)
  // Handle errors in basic, enhancement1 or enhancement2.
  .catch(logError)
```

Or we use a fallback value and carry on:

```js
basic().then(
  () => {
    // Only install enhancements when basic succeeded.
    return enhancement1()
      // When enhancement1 fails, use a fallback.
      // Returns a new promise that is always resolved.
      .catch(() => enhancement1FallbackValue)
      // Carry on with more enhancements
      .then(enhancement2)
      .catch(handleEnhancement2Error);
  },
  handleBasicError
)
```

If the operation is not crucial and just an enhancement, we only log the error and continue anyway:

```js
basic().then(
  () => {
    // Depends on basic.
    return enhancement1()
      // Log a potential enhancement1 error, but do not re-throw it.
      // Returns a new promise that is always resolved.
      .catch(logError)
      // Carry on with more enhancements.
      // enhancement2 only depends on basic.
      .then(enhancement2)
      .catch(handleEnhancement2Error);
  },
  handleBasicError
)
```

## Failing fast: Making failure visible and tangible

Unfortunately, a failure with an exception that stops execution or returns to the nearest error handler is the *best case scenario*, a stroke of luck. If you’re familiar with JavaScript and the hostile environment named browser, you’ve probably experienced that JavaScript may fail without throwing exceptions. Not all browser bugs and not all programming bugs cause exceptions. JavaScript failure is often silent and remains unnoticed for the developer.

JavaScript developers are desperately looking for an answer to the million dollar question: How to make weird logic errors and browser quirks visible as early as possible? Just to name a few approaches:

- Unit, acceptance and manual user tests on real devices, [fuzz testing](https://en.wikipedia.org/wiki/Fuzz_testing)
- Extensive [error tracking](https://github.com/cheeaun/javascript-error-logging) and analytics to find potential failures
- Using languages with a strong type system that are compiled to JavaScript, like TypeScript or Dart
- Using “noisy” libraries that test input thoroughly against defined data types

“[Failing fast](https://en.wikipedia.org/wiki/Fail-fast)” in your JavaScript is the prerequisite for handling errors gracefully and possibly downgrade to a simpler version.

## More on JavaScript and progressive enhancement

Please see my other articles on the topic:

<ul class="compact-list">
<li><a href="/interaction-is-key/">Interaction is Key: Progressive Enhancement and JavaScript</a></li>
<li><a href="/single-page-apps/">Progressive enhancement for JavaScript web apps</a></li>
<li><a href="/javascript-web-apps/">JavaScript web apps considered valuable</a></li>
<li><a href="/robust-javascript/">Robust Client-Side JavaScript – A Developer’s Guide</a></li>
</ul>

For a full list of references, see [my bookmarks tagged with progressive enhancement](https://www.diigo.com/user/molily/progressive-enhancement).

*I’d love to hear your feedback! Send an email to [zapperlott@gmail.com](mailto:zapperlott@gmail.com) or [message me on Twitter: @molily](https://twitter.com/molily).*
