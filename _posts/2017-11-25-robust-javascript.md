---
layout: default
title: Robust JavaScript
description: "Robust JavaScript"
keywords: JavaScript, Robustness
lang: en
---

<style>
body { margin: auto; padding: 1rem 3rem; max-width: 46rem; background-color: white; }
.erroneous { background-color: rgb(255, 250, 250); }
</style>

# Robust JavaScript

The JavaScript programming language is an essential tool of web publishers and web developers today. Web sites ship more and more JavaScript to the browser to make web sites more interactive. The more complex client-side JavaScript gets, the more error-prone and brittle the user experience might get. Why do we need to talk about robust JavaScript and how do we achieve it?

## Introduction

### Characteristics of JavaScript

In the trinity of front-end web technologies – HTML, CSS and JavaScript –, the latter is different from the others. HTML and CSS are declarative languages for the special purpose of structuring a text document and expressing style rules, respectively. Both HTML and CSS are designed in a way that allows browsers to process the code in a forgiving, fault-tolerant way. These design features are necessary to allow for backward and forward compatibility of the languages.

JavaScript however is a fully-fledged programming language that happens to run in the context of the web page. JavaScript has only a few fail-safe and compatibility mechanisms built in. Whereas JavaScript’s power is unlimited, HTML and CSS have the [least power](https://www.w3.org/2001/tag/doc/leastPower.html) that is necessary to serve their special purpose.

There are thousands of ways HTML, CSS and JavaScript might fail, and it happens every day, on almost every web site. But when HTML or CSS fail, the impact is rather limited. Most of the time, the web page is still usable in spite of several HTML and CSS errors. In contrast, a single JavaScript error may render the whole web site unusable. Sometimes there are ways to recover, but the user might not be aware of them.

In this guide, we’re going to investigate why JavaScript might fail and how to prevent or handle these errors in a graceful way that ensures a working web site.

### Coding for the web: The browser as a runtime environment

Writing client-side JavaScript for the web differs from programming for other platforms. There is not one well-defined runtime environment and a few canonical software libraries a programmer might count on. There is not one hardware architecture or device type. There is not one single vendor that defines and builds the runtime, the compiler, the tools.

The web is an open, vendor-independent, heterogenous publishing platform. It is held together by several technical standards of different quality. New standards appear frequently, old standards are amended or deprecated. Different standardization organizations follow different rules of procedure. This has lead to the following situation:

- There is technical behavior that is standardized and that major browsers agree on. – For example, the basic HTML elements are well-supported.
- There is technical behavior that is standardized and that major browsers do not agree on. – Browsers may have bugs in their implementation or simply not support newer standards yet.
- There is technical behavior that is not standardized and that major browsers agree on. – Standards may leave out some details, leaving them for implementors to decide. Still browser vendors try to copy the detailed behavior from other browsers for consistency.
- There is technical behavior that is not standardized and that major browsers do not agree on. – Typically new web technologies are born as proprietary experiments before entering a standardization process. Or they are never widely adopted and fall into oblivion.

There are numerous relevant browsers in numerous versions running on different operating systems on devices with different hardware abilities, internet connectivity etc. It maddens programmers from other domains that the web client is not under their control. They see the web as the most hostile software runtime environment. The diversity of web clients is mistaken as a weakness.

Proponents of the web counter that this heterogeneity and inconsistency is in fact a strength of the web. The web is open, it’s everywhere, it has a low access threshold. The web is adaptive and keeps on absorbing new technologies and fields of applications. No other software environment so far has demonstrated this degree of flexibility.

Front-end developers benefit from a web that keeps on evolving and innovating. Especially JavaScript developers may quickly adopt new language features as soon as they are specified and implemented by some browsers. In this guide, we will explore how to use new features in a backwards-compatible way.

It is true that client-side JavaScript programming is a minefield. But there is a simple, Socratic principle that will light our way: <em>Don’t take anything for granted. Don’t count on anything. Question your beliefs.</em> If you know that you know nothing about the web client that runs your JavaScript code, you can turn unfounded assumptions into justified knowledge.

It’s necessary and inevitable that a JavaScript makes assumptions, but we need to [own these assumptions](https://remysharp.com/2015/07/02/assumptions). Every JavaScript program makes a lot of assumptions about its runtime environment. Probably it demands a lot from the client. While having a low entry barrier is certainly desirable, the program needs to fulfill a task. The requirements should be in a well-balanced relation to the features.

### JavaScript standards

There is no single technical specification that defines JavaScript, but a whole bunch of specifications.

The [ECMAScript specification](https://www.ecma-international.org/publications/standards/Ecma-262.htm) defines the core of the language: the basic language features, the syntax, the execution and the standard library. A new version of ECMAScript is published every year, and ECMAScript 2017, Edition 8, is the latest at the time of writing.

With ECMAScript alone, one cannot do anything useful. For example, there is no way to read or output any data. ECMAScript does not define the so-called <dfn>host environment</dfn> in which a JavaScript program is executed. It allows several possible host environments. An HTML document in the browser is one possible host environment. Node.js is another popular one.

The host environment we’re interested in here is primarily defined in the [HTML specification](https://www.w3.org/TR/html5/). It not only defines HTML as a markup language, it also defines how JavaScript is executed in the context of an HTML document. It defines how JavaScript can access and alter the document. For this purpose, it relies on yet another specification: the [Document Object Model (DOM)](https://www.w3.org/TR/dom/).

The HTML and DOM specifications define the main objects that client-side JavaScripts are working with: nodes, elements and events. These are for example `window`, `window.alert()`, `document`, `document.body`, `document.getElementById()` and `document.createElement()`.

There are a lot of other specifications that add more APIs to the browser’s JavaScript environment. [The web platform: Browser technologies](https://platform.html5.org/) gives an overview.

### The global object `window`

The most important ECMAScript object is the <dfn>global object</dfn>. In the browser, the global object is `window`. It is not only the top-most object representing the current browsing instance, it also forms the top-most scope for any names defined by the programmer, “bindings” in ECMAScript terminology.

These bindings include, among others, global variables like `var fooVariable = 1;`, functions delcarations like `function fooFunction() {}` and class declarations like `class FooClass {}`. When this code is executed in the global scope, properties on the global object `window` are created: `window.fooVariable`, `window.fooFunction` and `window.FooClass`.

Understanding scope is crucial since all scripts running on a web page share the same global scope. A script needs to be careful to not conflict with built-in `window` properties – there are hundreds – and properties created by other scripts.

### How JavaScript is executed

Typically, a script is embedded into an HTML document. It is either embedded directly with a `<script> … </script>` element or it is referenced externally with `<script src="…"></script>`. Scripts may load other scripts dynamically. The HTML specification has a lengthy definition on how scripts are loaded and executed.

The gist is that normal scripts can be downloaded in parallel but are executed synchronously, one after another in the order they are referenced in the HTML. Synchronous scripts block the parsing of the HTML code since they might insert new code into the HTML code stream using `document.write()`.

Nowadays this is a performance anti-pattern. Scripts should be loaded asynchronously using `<script src="…" defer></script>` or `<script src="…" async"></script>`. And `document.write()` should be avoided altogether. This allows the HTML parser to do its job without being interrupted.

Mind that the JavaScript engine is still single-threaded, so only one script or function is executed at a given time. (We’re ignoring web workers here.) Also the JavaScript execution happens in the browser tab’s main thread, which means in the worst case it freezes the whole page.

## Achieving Robustness

What does robustness mean? In everyday language, a thing is considered robust when it’s made of solid, strong material that somehow resists to applied force. You can use it for a long time, you can drop it by accident, you can even hit on it with a hammer or throw it around, but it does not break.

In that sense, a hard piece of metal may be robust, but an elastic bouncy ball as well. Science looks for materials that combine strength with a certain resistance to force, like ductility and elasticity.

A structure can be also robust. Think of a [lattice tower](https://en.wikipedia.org/wiki/Lattice_tower) that is using a certain type of [truss](https://en.wikipedia.org/wiki/Truss). It is huge and strong, yet light and modular.

Similarly, in computer science, a robust program “performs well not only under ordinary conditions but also under unusual conditions that stress its designers’ assumptions.” ([The Linux Information Project](http://www.linfo.org/robust.html)). The program does not stop execution when errors occur. It does not fail when the input data or user input is invalid or bogus.

So robustness is all about <em>making informed assumptions</em>. What happens when the programmer’s assumptions are not met? Let’s look at several concepts of robustness.

### Graceful Degradation

In the context of web development, Graceful Degradation means building a full-featured web site, than adding fallbacks for clients that lack certain capabilities.

A web site starts with a large, fixed set of features and, consequently, a large set of requirements. The client may or may not meet a requirement, so a feature depending on it may not be available. If a requirement is not met, the site does not break, but handles the situation gracefully. For example, it falls back to a simpler version.

For JavaScript, Graceful Degradation could mean to implement the site using the bleeding-edge JavaScript language features and APIs. But every usage must be guarded by a capability check. In case the browser does not have the required capability, a simpler implementation is activated.

### Progressive Enhancement

Progressive Enhancement is very similar to Graceful Degradation, but turns the process around.

A web site still has a set of desired features and a set of client requirements. But the implementation starts with a minimal set of features. A first version of the site has a low entry barrier because it only uses well-established web technologies.

Then, a second version is built that <em>enhances</em> the first version by adding new features. The enhanced version checks whether the client supports newer web technologies, then uses them safely. If the client meets the requirements for a certain feature, that feature is unlocked.

This process is repeated, creating a third, fourth, fifth version and so on. That’s why it’s called <em>Progressive</em> Enhancement. In theory, the web site can be enhanced endlessly while staying robust and accessible to devices and browsers with restricted capabilities.

### Graceful Degradation vs. Progressive Enhancement

Graceful Degradation and Progressive Enhancement are two implementations of the same idea, but with a different twist.

Graceful Degradation aims for the full experience using bleeding-edge technologies – the [moonshot](http://whatis.techtarget.com/definition/moonshot). Building a perfect site takes a lot of time and resources. When such a page is built, it typically only works in one browser on bleeding-edge devices.

Then sophisticated fallbacks need to be added after the fact. This turns out to be difficult and tedious. For certain new browser features, it’s virtually impossible to develop equivalent fallbacks. But more importantly, adding fallbacks is often neglected. When the budget is almost exhausted, web developers tend to add “this site requires browser X” signs, excluding many users, instead of writing proper fallbacks.

Progressive Enhancement in contrast follows the “[minimal viable product](https://en.wikipedia.org/wiki/Minimum_viable_product)” school of product development. The goal is to publish a working web site quickly. This first version isn’t the most user-friendly, and certainly not the shiniest compared to the competitors. But the site works smoothly on every device. What it does, it does reliably.

Enhancements that make use of the latest browser features can now be added safely and deployed quickly. There is no stage during development where the site only works for a small fraction of users.

It is widely agreed that Progressive Enhancement offers more benefits, but when applied to an individual web site both methods should be considered and even mixed.

If you’re planning a “moonshot” that relies on bleeding-edge technology in its core experience, like video conferencing or augmented reality, Graceful Degradation may help you to build a more inclusive site.

If you’re planning a service with a rock-solid base plus demanding extras, like realtime data analysis and visualization, Progressive Enhancement may help to build high without losing accessibility.

When applied to JavaScript programming, both Graceful Degradation and Progressive Enhancement raise a lot of questions. How is a fallback applied? How well does it integrate with the rest of the code? To which extent is it possible to built on an existing version and enhance it? Isn’t it sometimes necessary to make a clear cut?

Both Graceful Degradation and Progressive Enhancement rely on checking the client’s capabilities. This crucial technique that we’re going to revisit later is also called <dfn>feature detection</dfn>.

### Fault tolerance

Another concept of robustness is <dfn>fault tolerance</dfn>. A technical system is considered fault-tolerant when the whole system continues to operate even if sub-systems fail.

A system consists of critical sub-systems and non-critical sub-systems. Critical sub-systems provide infrastructure and orchestrate the other parts. If they fail, typically the whole system fails. In contrast, non-critical sub-systems may recover from an error. Or they shut down in a controlled way and report the error to allow for backup systems to take over.

While Graceful Degradation and Progressive Enhancement are native principles of web technologies, fault tolerance is not. It’s probably the hardest yet most beneficial technique for achieving robustness.

In particular, fault tolerance is hard to implement in JavaScript. Used without caution, JavaScript is the opposite of fault-tolerant. Usually, if one operation fails, if one function fails, if one exception occurs, the whole call stack or the whole program blows up.

Implementing fault tolerance in JavaScript means dividing the code into independent, sandboxed sub-systems. A few of them are critical, but most of them should be non-critical. If the latter fail with an error, the error needs to be caught and handled. Other sub-systems and the system as a whole should not be affected.

JavaScript does not support the definition of native sandboxes yet, but we will learn how to employ existing techniques to achieve the desired effect.

TODO Link to try…catch

### Postel’s Law

John Postel was a computer scientist that helped designing the core technologies of the internet. He edited the technical specifications of fundamental internet protocols, called Request for Comments (RFC).

In [RFC 790](https://tools.ietf.org/html/rfc760), published in January 1980, Postel first described the Internet Protocol (IPv4). There’s a precise description of how implementations should behave:

<blockquote cite="https://tools.ietf.org/html/rfc760">
  <p>The implementation of a protocol must be robust. Each implementation must expect to interoperate with others created by different individuals. While the goal of this specification is to be explicit about the protocol there is the possibility of differing interpretations. In general, an implementation should be conservative in its sending behavior, and liberal in its receiving behavior. That is, it should be careful to send well-formed datagrams, but should accept any datagram that it can interpret (e.g., not object to technical errors where the meaning is still clear).</p>
</blockquote>

In [RFC 761](https://tools.ietf.org/html/rfc761), also published in January 1980, Postel described the Transmission Control Protocol (TCP) as used by the United States Department of Defense:

<blockquote cite="https://tools.ietf.org/html/rfc761">
  <p>TCP implementations should follow a general principle of robustness: be conservative in what you do, be liberal in what you accept from others.</p>
</blockquote>

Today this principle is often called Postel’s Law. While the original context was very specific – processing packets on a wide-area computer network –, today it is applied to all programs that read, parse and process user input, file formats, or other structured data.

For example, the definition of the liberal, fault-tolerant [HTML 5 parser](https://www.w3.org/TR/html5/syntax.html#parsing-html-documents) along with the conservative [HTML 5 syntax](https://www.w3.org/TR/html5/syntax.html#writing-html-documents) is an application of Postel’s Law.

To be honest, I don’t think Postel’s Law should be seen as a “general principle of robustness”. I agree to some degree that a program should accept data “that it can interpret (i.e. not object to technical errors where the meaning is still clear)”. This addendum is very important and requires interpretation when applying it to a specific case.

In this guide, I do not argue that every program should be liberal in what it accepts. I find it more important that every program is explicit about what it accepts and outspoken about technical errors.

## How JavaScript might fail

### No JavaScript support: Web crawlers

Adding any JavaScript to a web site assumes that the client downloads and executes the code. This is not the case for a lot of automated web clients. Most robots and web crawlers speak HTTP, HTML and probably some CSS, but usually no JavaScript.

Some try to forage the JavaScript code for URLs or other valueable information. Some try to analyze the JavaScript to find malware or security vulnerabilities. Some even try to execute JavaScript in a fake browser environment.

What these robots have in common that they are not interested in JavaScript per se. JavaScript typically makes a web page interactive, but a robot just wants to analyze the page without simulating user interaction.

A search engine for example needs to evaluate if a web page is valueable for the user with regard to a query. So a search engine crawler is interested in text content, semantic markup, hyperlinks and probably media files.

Such a crawler wants simple code that it can parse quickly to find valueable data. Like HTML code. Executing arbitrary JavaScript is complex, slow and a potential a security risk. Some crawlers might do it anyhow, but just as a way to find text content, semantic markup, hyperlinks etc.

If a site cares for a decent search engine ranking, it should make it easy for crawlers to find meaningful, unique, structured text content. HTML is the best technology to present such content. This means the relevant content should be accessible without JavaScript, just by looking at the HTML returned by the server. All content should be reachable by plain and boring hyperlinks, like `&lt;a href="…">…&lt;/a>`.

For complex interactivity and content that cannot or should not be read by robots, it’s fine to require JavaScript for accessing it.

### Disabled JavaScript execution

While robots avoid running JavaScript, humans typically use a browser that runs JavaScript. Almost all browsers today have the capability to run JavaScript. But the user or their adminstrator may have disabled JavaScript execution completely or allow only JavaScript of certain origins.

There are good security reasons for disabling the execution of arbitrary JavaScript. Since JavaScript is a fully-fledged programming language, processing it is more complex and error-prone than any other format on the web. The browser exposes several critical APIs to JavaScript code. Consequently, JavaScript is the most frequent attack vector for browser exploits.

JavaScript is also used to invade the user’s privacy. Especially the advertisement industry gathers and combines information that is obtained using JavaScript across different sites. JavaScript APIs allow reading details about the machine’s hardware and software as well as saving data on the machine. These features are abused to create a unique “fingerprint” and an extensive profile of the user: visited sites, search terms, purchase history, interests; also age, gender, location, marital status, profession, income, ethnicity, political views etc.

To protect the users, ad and privacy blockers as well as corporate web proxies may ignore the JavaScript from certain hosts or limit the access to certain JavaScript APIs. Some security proxies even change the author’s JavaScript code, inject additional code and then execute it.

JavaScript authors need to learn how blockers and web proxies work. They typically match the URL with a whitelist or blacklist. Make sure the host (e.g. `example.org`) serving the JavaScript is not on a blacklist. In a corporate intranet with a whitelist, make sure it’s on the whitelist. Also avoid suspicious patterns in the URL path that could trigger the blocking, like `ad.js`.

Since ads and privacy-invading scripts are typically loaded from third-party servers, blockers tend to allow JavaScript from the same domain and likely block JavaScript from a different domain. Make sure your scripts is placed on the same domain, a custom domain for static assets, or a well-known, trusted content delivery network.

### Network and loading errors

In the age of mobile web access, a flaky internet connection is the norm. The connections from the client to a server are interrupted frequently. Sometimes the browser re-establishes the connections to send requests again. Sometimes the user needs to reload the page manually so all parts are fully loaded.

Network interruptions affect JavaScript more negatively than other formats on the web. HTML, CSS, images and videos can be loaded and processed incrementally. If half of the HTML code has been transmitted and the connection drops, the browser can still render half of the page. Image formats like JPEG and PNG have progressive modes so the user gets to see a low-resolution preview after 10-20% of the file have been transmitted.

For JavaScript, it’s all or nothing. To execute the JavaScript, the full script needs to be transmitted.

JavaScript authors can do little against connectivity loss. But they can prepare for the case by shipping less and smaller scripts, and by making JavaScript optional at least for key content and key pages.

One way to improve the loading performance of scripts is to host JavaScript on content delivery networks (CDN). These are arrays of well-connected servers distributed around the globe optimized for caching and serving static assets like CSS, JavaScript and media files. When the browser requests an asset, the request is automatically routed to the nearest CDN server.

For example, if a user in Indonesia visits a site hosted in Europe, the network latency slows down the transfer. With a CDN server in Indonesia, the assets can be served more quickly, lowering the risk of connection interruption.

Apart from network connectivity problems, an HTTP request for a script can fail for other obvious reasons: 404 Not found, 500 Server error etc. This seems trivial but these types of errors are probable the most common. Monitor the server log frequently to catch these errors. Use tools to find broken links and check the output of web crawlers like the [Google search robot](https://www.google.com/webmasters/tools/home?hl=en).

### Parser errors

The <dfn>parser</dfn> is that part of the browser’s JavaScript engine that reads the JavaScript code sequentially to build an in-memory representation of the script’s syntax. While the JavaScript is just a gibberish comprised of characters, the JavaScript engine needs to transform it into a usable data structure in order to execute it later.

What is syntax again? It’s the set of rules in a language that allow us to form a meaningful and correct sentence. If a linguist reads “The dog wags its tail”, they involuntarily start to dissect the sentence, breaking it up into pieces and their relation. The sentence is made of a noun phrase and a verb phrase. The noun phrase, “the dog”, consists of a determiner and a noun. The verb phrase, “wags its tail”, consists of verb and a noun phrase again. The verb, “wags”, has the third person singular present form. And so on.

For JavaScript, it’s quite similar, yet less familiar since it’s a not a natural language, but an artificial computer language. If you write `window.alert('Hello World!');`, the parser generates an Abstract Syntax Tree (AST) that may look like this:

<pre>
<strong>Program</strong>
  <strong>ExpressionStatement</strong>
    <strong>CallExpression</strong>
      callee:
        <strong>MemberExpression</strong>
          object:
            <strong>Identifier</strong>
              <em>window</em>
          property:
            <strong>Identifier</strong>
              <em>alert</em>
      arguments:
        <strong>Literal</strong>
          value: <em>"Hello World!"</em>
</pre>

We won’t go into detail here, but let’s describe the structure of the program `window.alert('Hello World!');` in our own words:

There is an expression (think of a mathematical term) with a call of a function. To obtain this function, we need to look up the name `window`. We assume the value is an object and get its property named `alert`. We treat this value as the function. There is one argument for the function, a string literal with the value `Hello World!`.

To execute a script, the JavaScript engine needs to such a high-level format, not the low-level code consisting of letters, dots, braces, brackets, semicolons etc.

If you make a slip of the tongue, a gentle listener will probably ask: “Pardon me, what did you mean by ‘alert Hello World’?” The JavaScript parser is not that polite. It has a draconian, unforgiving error handling. If it encounters a character that is not expected in a certain place, it immediately aborts parsing the current script and throws a [SyntaxError](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/SyntaxError). So one misplaced character, one slip of the pen can ruin your script.

The most frequent syntax error is probably due to typos in hand-written code. Fortunately, these errors are easy to prevent by using an editor with syntax checking or a dedicated linter like [eslint](https://eslint.org/).

Even if these safeguards are in place, syntax errors occur. There are several ECMAScript versions with different syntaxes. For example, if you use class declarations from ECMAScript 6 (2015) or `async`/`await` from ECMAScript 8 (2017), older browsers are not able to parse your script. The standard solution here is to compile newer ECMAScript syntax into an older equivalent syntax that’s widely supported, usually ECMAScript 3 or 5. The [Babel compiler](https://babeljs.io/) is the tool of choice (see below).

### Exceptions

You might have heard of exceptions in the context of JavaScript, but what are they?

“Exception” does not mean exception to a rule here. An exception is an exceptional error, a fatal error. A program error that the JavaScript engine cannot handle on its own. If such an error occurs, the program is aborted. More specifically, the current function [call stack](https://en.wikipedia.org/wiki/Call_stack) is aborted. It’s still possible to call the same function or other functions later.

There are several causes for exceptions, and we’re already encountered one: The SyntaxError occurs during parsing, before your code is even executed. Let’s look two common exceptions that may happen when the code is run: The `ReferenceError` and the `TypeError`.

### Reference errors

A `ReferenceError` is thrown when the program references a name – an identifier in ECMAScript terminology – that cannot be resolved to a value.

First, let’s look at successful references:

```
var name = 'Kitty';
window.alert('Hello ' + name);
```

We have two references here, “window.alert” and “name”. To resolve them to values, the JavaScript engine first looks for the identifiers “window” and “name” in the [scope chain](http://ryanmorr.com/understanding-scope-and-context-in-javascript/).

“window” is a global identifier, a property of the global object, as we have learned. After having resolved “window” to an object, the JavaScript engine looks for a property “alert” on this object.

“name” is simply a local variable, or a global variable, depending on the context.

Now, let’s look at erroneous references:

```
window.alert(frobnicateFoo);
```

The identifier “frobnicateFoo” is not found in the scope chain. So the JavaScript engine throws a `ReferenceError`: “frobnicateFoo is not defined”.

So ReferenceErrors happen when the code uses an identifier that cannot be found in the current scope and all parent scopes. This is may be be due to a typo. Linters like [eslint](https://eslint.org/) can catch these bugs easily.

Another possible cause is the programmer assuming that the browser supports a certain API. The programmer assumes a global identifier is provided and uses it without caution. Here are several examples that assume the availability of certain browser APIs:

<pre>
var object = <strong>JSON</strong>.parse(string);
<strong>localStorage</strong>.setItem('name', 'Kitty');
var promise = new <strong>Promise</strong>(function(resolve, reject) { … });
<strong>fetch</strong>('/something').then(function(response) { … }, function(error) { … });
</pre>

[JSON](https://caniuse.com/#feat=json) is available in 97.8% of the browsers, [localStorage](https://caniuse.com/#feat=namevalue-storage) in 95.17%, [Promise](https://caniuse.com/#feat=promises) in 89.13%, [fetch](https://caniuse.com/#feat=fetch) in 78.41%.

We can avoid such careless use of APIs by using <strong>feature detection</strong>. In particular, we need to check for the names we intent to use.

Writing good feature checks requires thorough knowledge of the API being used. We’ll go into details later in the chapter about feature checks, but here’s how we can guard the API uses above:

```
if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
  /* Call JSON.parse() */
}
if (
  typeof localStorage === 'object' &&
  typeof localStorage.setItem === 'function'
) {
  /* Call localStorage.setItem() */
}
if (typeof Promise === 'function') {
  /* Call new Promise() */
}
if (typeof fetch === 'function') {
  /* Call fetch() */
}
```

These guards are only the first step. They check whether the API objects exist and have a certain type, like function. They do not check whether the browser has full and correct support of the API. They do not check whether the APIs can be used in the current context.

For example, security and privacy preferences might limit the usage of APIs like `localStorage` or `fetch`. Each API defines its own way how to deal with failure, like throwing an exception (see below) or returning a value denoting an error.

### Type errors

A `TypeError` is thrown when a program tries to perform an operation with a value whose type is not suitable for this operation. In short, when you try to do something with a value that you cannot do with the value.

For example, functions can be called with the call operator `(…)`. All other values, like strings, numbers or plain objects cannot be called. All these examples fail with a `TypeError` because the value on the left side of the braces is not a function:

```
"a string"();
5();
({})();
undefined();
null();
```

This seems obvious. Why would you try to call a number as if it was a function? You wouldn’t do that on purpose when writing the code, but it happens in production. Let’s look at this example:

```
window.frobnicateFoo();
```

Here, we have a reference to a property `frobnicateFoo` on the object `window`. Resolving `window` yields the global object. But there is no property `frobnicateFoo` on the said object. If you get the value of a non-existing property on an object, JavaScript does not throw an exception. `window.frobnicateFoo` simply returns `undefined`. So after resolving `window.frobnicateFoo`, the code is equivalent to `undefined();`.

Such TypeError are both common and hard to debug since they may have highly different causes.

In the example above, the cause is a certain function is used without checking its existence beforehand. `frobnicateFoo` might be a user-defined function or a part of a browser API. If the function call fails because it doesn’t exist, the script defining this function was not loaded correctly or the browser doesn’t support the API.

Here’s another example of a similar “undefined is not a function” `TypeError`.

```
var myLibrary = {
  start() { /* … */ }
};
myLibrary.statr();
```

The problem here is a simple typo. `myLibrary.start` is a function, but `myLibrary.statr` returns “undefined”.

These errors can be avoided by extensive manual or automated testing (see below) as well static code analysis. An IDE for example understands that the code defines an object “myLibrary” with the single property “start”. When it sees “myLibrary.statr” it shows a warning because it cannot find the property “statr”.

There are several other cases where TypeErrors are thrown. For example when you try to redefine the value of a constant:

```
const a = 1;
a = 2;
```

The nature of a constant is that its declared value cannot be changed later, so using the assignment operator “=” with the constant “a” on the left side throws a TypeError: “invalid assignment to const \"a\"”.

Similarly, a TypeError is thrown when you try to add a property to an object that does not allow the addition of properties:

```
const MyLibrary = {
  start() {}
};
Object.seal(MyLibrary);
MyLibrary.newProperty = 1;
```

In [strict mode](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode), this code throws a TypeError “can't define property \"newProperty\": Object is not extensible”. Without the strict mode, the new property is silently ignored.

The same goes for overwriting properties which are read-only:

```
const MyLibrary = {
  start() {}
};
Object.freeze(MyLibrary);
MyLibrary.start = () => {};
```

In strict mode, this code throws a `TypeError` “\"start\" is read-only”. Without the strict mode, the new assignment is silently ignored.

Again, these errors can only be avoided by using extensive manual and automated testing.

### Security errors

There is no common error type for security errors in ECMAScript. Browser APIs throw several types of errors when API access is disallowed. Newer APIs may wrap the error in a Promise that is accessible in the rejection handler. Here are some examples:

- You try to use [localStorage](https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage) to save data persistently, but the user has disabled data saving for the site. Merely accessing the property `window.localStorage` throws a SecurityError.

- You try to read the current location using [navigator.geolocation.getLocation()](https://developer.mozilla.org/en-US/docs/Web/API/Geolocation/getCurrentPosition), but the user declines. The error callback is called with a PositionError with the code 1 (PERMISSION_DENIED).

- You try to fetch a URL from a different domain using [fetch()](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API), but the remote server does not allow it via [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS). The returned promise is rejected with a TypeError.

- You ask for the permission to show notifications using [Notification.requestPermission()](https://developer.mozilla.org/en-US/docs/Web/API/Notification/requestPermission), but the user declines. The returned promise is resolved with the string "denied" (yes, you read correctly).

- You try to access the device’s camera using [navigator.mediaDevices.getUserMedia()](https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia), but the user declines. The returned promise is rejected with a NotAllowedError.

As you can see, handling security errors requires a thorough study of a particular API documentation.

### Logic bugs: How to fail fast

Every computer program may have logical bugs: A case is not considered, the state is changed incorrectly, data is transformed wrongly, input is not handled. This is not a JavaScript-specific problem, so there are no JavaScript-specific solutions. Automated and manual testing (see below) can catch such logic bugs.

It’s important to know that logic bugs can have several consequences in JavaScript. The <em>best case</em> is that the script fails with an exception.

You might wonder, why is that the best case? Because an exception is noisy, visible and easy to report. Although the line of code that throws an exception is likely not the cause of the error, the error is somewhere in the call stack. Still, an exception is a good starting point for debugging.

The <em>worst case</em> is that the application continues to run despite the error, but some parts of the interface are broken and do not respond to input. Sometimes the user gets stuck, so they need to reload the page to reset the application state. Sometimes data gets lost or corrupted permanently due to a logic bug.

So as a programmer we want our scripts to <strong>[fail fast](https://martinfowler.com/ieeeSoftware/failFast.pdf)</strong>. Failing early with an exception, probably even a user-facing error, is better than failing silently with undefined, puzzling behavior.

Unfortunately, JavaScript is a language that does not follow the principle of failing fast. Quite the contrary. JavaScript is a [weakly typed language](https://en.wikipedia.org/wiki/Strong_and_weak_typing) that goes great lengths to not fail with an error. Most importantly, JavaScript performs implicit type conversion.

Let’s look at a simple, contrived example:

```
function sum(a, b) {
  return a + b;
}
```

This functions expects two numbers and returns their sum. The implicit assumption is that both function arguments, `a` and `b`, are numbers. If one of them isn’t, the result <em>probably</em> won’t be a number either. Whether the function works correctly depends on the correct input types.

By the way, the `+` operator <em>is a dangerous beast</em>. Its purpose is to add two numbers, but also to concatenate two strings. If the operands are not both numbers or strings, implicit type conversion is performed.

These rules are specified in ECMAScript, but you should try to avoid implicit type conversion. Here’s an improved version of the function:

```
function sum(a, b) {
  if (!(typeof a === 'number' && !Number.isNaN(a) &&
    typeof b === 'number' && !Number.isNaN(b))) {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

The key to failing fast is to <strong>make your assumptions explicit</strong> with assertions.

The function above asserts the types and values of `a` and `b`. It throws an exception (see below) if they are not numbers or if they are `NaN`.

I picked this example because it shows that assertions make small errors visible before they grow into big errors. The thing is, NaN <em>is a dangerous beast</em>. NaN is a special value that means “not a number”, but in fact it is a number you can calculate with.

NaN is contagious. All calculations involving NaN fail silently, yielding NaN: `5 + NaN` makes NaN, `Math.sqrt(NaN)` produces NaN. All comparisons with NaN yield false: `5 > NaN` is false, `5 < NaN` is also false. `5 === NaN` is false, `NaN === NaN` is also false.

If one NaN slips into your logic, it’s carried through the rest of the program until the user sees a “NaN” appearing in the interface. It’s extremely hard to find the cause of a NaN since the place where it appears can be far from the place that caused it. Typically, the cause of a NaN is an implicit type conversion. My advice is to raise the alarm as soon as you see a NaN.

You need to decide how to implement assertions. If you throw an exception, like the example above, make sure to catch it in a global error handler and report it to an error logging service (see below). If you follow Postel’s Law (see above) instead, at least output a warning on the console and report the error.

If the user’s task may be affected, you should show a kind and useful error message that something went wrong and that the incident has been reported. Also suggest workarounds, if applicable.

## How to prevent failure

After this short glance at the different types of JavaScript errors, we got an idea of the problem and mentioned mentioned some possible solutions. Now let’s go into detail about the techniques that prevent JavaScript from failing and handle errors gracefully.

### Feature detection

Feature detection is a fundamental technique in an ever-changing web. As web authors, we’d like to use the newest browser features both to provide a rich experience to the users and to make our lifes easier.

Feature detection first checks whether a browser supports a certain web technology, then uses the technology safely. In the context of JavaScript, most feature detections are object and value checks, as well as function calls. Before looking at them in detail in the next chapter, let’s learn about the conceptual basics of feature detection.

When writing client-side JavaScript, you need to define a baseline of requirements. You need to take some basic features for granted, like ECMAScript 3 support and basic DOM support (e.g. W3C DOM Level 2: Core, HTML, Events). If you use other JavaScript features, you should first learn about the browser support.

[Can I use](https://caniuse.com/) is an essential ressource that documents browser support of web technologies. For example, according to Can I use, the [Fetch API](https://caniuse.com/#feat=fetch) in available in the browsers of 78.41% of the users worldwide. Can I use allows you to import usage data for a certain country, so you get stats for your target market.

The Can I use data for fetch shows that it is a fairly new API that almost all latest browsers support, but not the older browser generations. So fetch should be used with a feature detection, ideally with a fallback or polyfill (see below).

Another essential site is the [Web API documentation of the Mozilla Developer Network (MDN)](https://developer.mozilla.org/en-US/docs/Web/API). You’ll find a reference of all major JavaScript APIs there, alongside with browser compatibility information and links to the original specifications.

If you’re looking for specific ECMAScript core features, the place to go are the [compatibility tables by kangax](https://kangax.github.io/compat-table/es6/).

As we have learned before, writing good feature detection requires thorough knowledge of the particular JavaScript API you’d like to use. Fortunately, people have developed and collected feature checks for the relevant APIs so you don’t have to wade through the specifications and come up with proper checks yourself.

[Modernizr](https://modernizr.com/) is a comprehensive feature detection library. You can select browser features you’d like to use and build your own minimal library. Modernizr then provides a global object `Modernizr` with boolean properties. For example, `Modernizr.fetch` has the value `true` if the browser supports the Fetch API, or `false` if it doesn’t.

If you don’t want to use Modernizr but look for bulletproof feature detection code, look into Modernizr’s [repository of detects](https://github.com/Modernizr/Modernizr/tree/master/feature-detects). For detecting the Fetch API, the [Modernizr simple checks](https://github.com/Modernizr/Modernizr/blob/master/feature-detects/network/fetch.js) `'fetch' in window`.

### Value checks

Writing feature detections in JavaScript means checking for names and values defined by the host environment.

There are three levels of checks:

1. <strong>Existence check</strong>: Does a name exist?
  - Either: Does an identifier exist in the scope chain? Ultimately, does an identifier exist in the global scope?
  - Or: Does a property exist on a certain object?
2. <strong>Type check</strong>: After resolving the name to a value, does the value has the expected type?
3. <strong>Value check</strong>: Does the value equals the expected value?

This is a cascade of checks you can perform. From top to bottom, the checks get more specific. Typically, we need check the existence and the type of a value in order to use it safely. Sometimes checking the value is necessary as well.

### Conditional statements and truthy values

The key to robust JavaScript is [asking “if” a lot](https://christianheilmann.com/2015/02/18/progressive-enhancement-is-not-about-javascript-availability/). During the concept phase, ask “what if”. In the code ask `if` to handle different cases differently.

The `if` statement, or conditional statement, consists of a condition, a block of code and an optional second block of code.

```
if (condition) {
  …
} else {
  …
}
```

When an if statement is evaluated, first the condition expression is evaluated. The result of the expression is then converted into a boolean value, `true` or `false`. If this result is `true`, the first block of code is executed, otherwise the second block, if given.

Most likely this isn’t news to you. The reason I’m revisiting it is the conversion into boolean. It means you can use a condition expression that does not necessarily evaluate to a boolean value, like `if ("Hello!") {…}`. Other types, like Undefined, Null, String, or Object are possible.

If you rely on the implicit conversion, you should learn the conversion rules. ECMAScript defines an [internal function ToBoolean](http://www.ecma-international.org/ecma-262/8.0/#sec-toboolean) for this purpose. In our program, we can use the public [Boolean function](http://www.ecma-international.org/ecma-262/8.0/#sec-boolean-constructor-boolean-value) to convert a value into boolean. This delegates to the internal `ToBoolean` function.

Values are called <dfn>truthy</dfn> when ToBoolean converts them into `true`. Values are called <dfn>falsy</dfn> when ToBoolean converts them into `false`.

The way ToBoolean works is simple, but with a twist. Let’s quote the ECMAScript specification which is quite readable for once:

<table>
  <caption>ToBoolean Conversions</caption>
  <thead>
    <tr>
      <th>Argument Type</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Undefined</td>
      <td>Return <strong>false</strong>.</td>
    </tr>
    <tr>
      <td>Null</td>
      <td>Return <strong>false</strong>.</td>
    </tr>
    <tr>
      <td>Boolean</td>
      <td>Return <em>argument</em>.</td>
    </tr>
    <tr>
      <td>Number</td>
      <td>If <em>argument</em> is <strong>+0</strong>, <strong>-0</strong>, or <strong>NaN</strong>, return <strong>false</strong>; otherwise return <strong>true</strong>.</td>
    </tr>
    <tr>
      <td>String</td>
      <td>If <em>argument</em> is the empty String (its length is zero), return <strong>false</strong>; otherwise return <strong>true</strong>.</td>
    </tr>
    <tr>
      <td>Symbol</td>
      <td>Return true.</td>
    </tr>
    <tr>
      <td>Object</td>
      <td>Return true.</td>
    </tr>
  </tbody>
</table>

As you can see, most types have a clear boolean counterpart. All objects, including functions, dates, regular expressions and errors, are truthy. The two types denoting emptyness, `undefined` and `null`, are falsy.

For numbers and strings though, it’s not that intuitive. Numbers are truthy <em>except for</em> zeros and NaN. Strings are truthy except for empty strings.

This ECMAScript design decision is controversial. On the one hand, it’s a source of errors, since a lot of programmers expect that all numbers and all strings are truthy. On the other hand, it allows us to write simple value checks like `if (value) {…}` for non-empty strings and usable non-zero numbers.

Usually, a value check aims to distinguish usable and valid values from unusable and invalid values. In most cases, truthy values are usable and falsy values are usable. But keep in mind the exceptions for numbers and strings.

If you don’t want to trigger implicit type conversion, make sure that the `if` conditions directly evaluate to boolean. For example, use comparison operators like `===`, `!==`, `>` and `<=`. These always produce boolean values. Also, the strict equality operators `===` and `!==` do not perform implicit type conversion.

### Existence checks

Does an identifier exist in the scope chain? Ultimately, does an identifier exist in the global scope?

Let’s assume we’d like to detect the Fetch API that specifies a global function `fetch`. Let’s try this:

<pre class="erroneous">
if (fetch) {
  fetch(…);
} else {
  …
}
</pre>

This works in browsers that do support fetch, but throws an exception in browsers that don’t. Especially, it throws a ReferenceError (see above).

This renders the whole check useless. This is exactly what we’re trying to avoid with the check.

We can’t just use an identifier that cannot be found in the scope chain. There are several ways to work around this problem:

1.  Use the <code>typeof</code> operator (see below). <code>typeof</code> does not throw an error in case the following reference cannot be resolved, it simple returns the string <code>'undefined'</code>.

    ```
    if (typeof fetch === 'function') { fetch(…); } else { … }
    ```

    Mind that this turns the existence check into a type check. We know that fetch resolves to a function, so we check whether <code>typeof fetch</code> evaluates to the string <code>'function'</code>.

    To simply check whether fetch can be found, we losen the condition to accept all types except <code>'undefined'</code>:

    ```
    if (typeof fetch !== 'undefined') { fetch(…); } else { … }
    ```

2.  We know that fetch a property of the global object window. So we can use the <code>in</code> operator to check whether the property exists:

    ```
    if ('fetch' in window) { fetch(…); } else { … }
    ```

    The <code>in</code> operator simple returns whether an object property exists without checking its type.

    Mind that this turns the existence check into a property check.

3.  Again, we utilize the fact that fetch is a property of window if it’s present. We simply access the property using the dot notation, <code>object.property</code>:

    ```
    if (window.fetch) { fetch(…); } else { … }
    ```

    Mind that this turns the existence check into a value check. We’re relying on a ToBoolean conversion here (see above).

### Type checks with `typeof`

We’ve already mentioned `typeof` briefly. `typeof` is an unary operator, meaning it just takes one value as operand. The operator is placed before a value, for example `typeof 'Hello'`. As the name suggests, `typeof` returns the type of a value as a string. `typeof 'Hello'` evaluates to `'string'` since the value `'Hello'` is a string.

`typeof` has a useful feature that makes it suited for feature detection: You can place an identifier after `typeof`, like `typeof fetch`. `typeof` does not throw an error in case the identifier cannot be resolved, it simple returns the string `'undefined'`. This behavior makes `typeof` useful for safe feature detection.

The problem is, `typeof` does not return what you probably would expect. `typeof` <em>is a dangerous beast</em>. It’s one of the biggest known design flaws of ECMAScript. It’s misleading and deceiving, and in older browsers simply lying.

First of all, let’s learn about the type system of ECMAScript. There are seven main types: Undefined, Null, Boolean, Number, String, Symbol and Object. The first six are called <dfn>primitive types</dfn>.

The seventh type, Object, has all sorts of subtypes: Function, Array, RegExp, Date, Error, Map, Set; Window, Document, Element, Node, Event, Image and much more. Values of these types are complex, made up of values of primitive types.

You might expect that `typeof` deals with the seven main types by returning `'undefined'` for Undefined, `'null'`  for Null, `'object'` for Object and so on. Unfortunately not.

Let’s paraphrase the ECMAScript specification to learn [what typeof really returns](http://www.ecma-international.org/ecma-262/8.0/#sec-typeof-operator):

<table>
  <caption>typeof Operator Results</caption>
  <thead>
  <tr>
    <th>Operand type</th>
    <th>Result</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Undefined</td>
    <td>`"undefined"`</td>
  </tr>
  <tr>
    <td>Null</td>
    <td>`"object"`</td>
  </tr>
  <tr>
    <td>Boolean</td>
    <td>`"boolean"`</td>
  </tr>
  <tr>
    <td>Number</td>
    <td>`"number"`</td>
  </tr>
  <tr>
    <td>String</td>
    <td>`"string"`</td>
  </tr>
  <tr>
    <td>Symbol</td>
    <td>`"symbol"`</td>
  </tr>
  <tr>
    <td>Object that is ordinary and not callable (not a function)</td>
    <td>`"object"`</td>
  </tr>
  <tr>
    <td>Object that is standard exotic and not callable (not a function)</td>
    <td>`"object"`</td>
  </tr>
  <tr>
    <td>Object that is ordinary and callable (a function)</td>
    <td>`"function"`</td>
  </tr>
  <tr>
    <td>Object that is non-standard exotic and not callable (not a function)</td>
    <td>
      <p>Implementation-defined, but not `'undefined'`, `'boolean'`, `'function'`, `'number'`, `'symbol'`, or `'string'`.</p>
      <p>Implementations are discouraged from defining new typeof result values for non-standard exotic objects. If possible 'object' should be used for such objects.</p>
    </td>
  </tr>
  </tbody>
</table>

The first oddity is that `typeof null` returns `object`, which does not make any sense. It’s a dangerous pitfall.

The second oddity is the special detection of functions. A function is of the type Object, but `typeof function() {}` yields `'function'` instead of `'object'`. This exception turns out to be highly useful: `typeof` is the easiest way to detect a function. Unfortunately, there are no other expectations for common object types. For arrays, dates and regular expressions, `typeof` returns `'object'`

The third oddity is that there is the distinction between ordinary, standard exotic and non-standard exotic objects. Let’s try to understand these without going too much into detail.

An <dfn>ordinary object</dfn> comes with a default behavior that all objects share. An <dfn>exotic object</dfn> overrides and redefines the default behavior. Exotic objects are either <dfn>standard</dfn> (specified in ECMAScript) or <dfn>non-standard</dfn> (not specified in ECMAScript). For example, an array is a <dfn>standard exotic object</dfn>.

In the past, browsers have provided objects that fall into the “non-standard exotic” category. The `typeof` operator in Internet Explorer misidentified these objects as `'unknown'`. Also Internet Explorer misidentified classified ordinary, callable objects (functions) as `'object'`.

Newer browsers adhere to the specification, but the historical pitfalls remain. Since the result of `typeof` used to be unreliable, people have used `typeof` mostly for existence checks instead of explicit type checks. Let look at the fetch examples again:

```
if (typeof fetch === 'function') { fetch(…); } else { … }
if (typeof fetch !== 'undefined') { fetch(…); } else { … }
```

Both are useful feature checks. The first uses `typeof` to assert the function type. This is more explicit: Since we’re going to call `fetch`, we assert it is a function.

The second uses `typeof` to assert `fetch` is defined and has an arbitrary type except Undefined. This is implicit: We assert `fetch` exists, then assume it’s a function defined by the Fetch API.

### Type checks with `instanceof`

Besides `typeof`, there are several other ways to get the type of a value.

One of them is the `instanceof` operator. Simply speaking, `instanceof` returns whether an object is an instance of a class. `instanceof` expects the object on the left side and a class on the right side. For example, `value instanceof Date` returns true if the value is a `Date` object.

To understand what `instanceof` does, we quickly need to revisit ECMAScript’s object model.

ECMAScript is a language based on prototypal inheritance. Every object has a prototype reference that may reference another object. If a property cannot be found on the object, the JavaScript follows the prototype reference and looks for the property on the prototype.

This principle is really simple. Imagine someone asking you a question, but you don’t know the answer. You still try to be helpful: “I’m sorry, I don’t know the answer myself, but I know someone who is an expert on this topic!” So the other person walks to the expert and repeats the question.

Since a prototype ist a simple object, it can have its own prototype again. This way, a prototype chain is formed: Objects referencing other objects, like `a` &rarr; `b` &rarr; `c`. ECMAScript walks up the prototype chain to find a property. When you retrieve a property on `a` and it cannot be found, `b` is searched, then `c`.

So how does `instanceof` fit in here? Let’s investigate what happens when `value instanceof Date` is evaluated. `instanceof` expects a constructor on the right side, `Date` in the example. First it gets the `prototype` property of the constructor, `Date.prototype` in the example. This is the prototype of all Date objects. Then it takes the value on the left side, `value` in the example, and walks up its prototype chain. If `Date.prototype` is be found in the chain, the operator returns `true`, otherwise `false`.

In consequence, `value instanceof Date` checks whether the value inherits from `Date.prototype` using prototypal inheritance.

`instanceof` checks are only applicable the type Object and subtypes like Function, Array, RegExp, Date etc. `instanceof` always returns false for primitive types.

Another drawback limits the usefulness of `instanceof`: It does not work across windows, like frames, iframes and popup windows.

Every browser window has its own set of host objects and therefore constructor functions. For example, `Array` in one window is a different object than `Array` in another window. This sounds logical, but it causes problems when two windows want to exchange JavaScript objects.

Assume there is an HTML document embedding another HTML document in an iframe. A script in the iframe document calls a function in the parent document, passing an array of numbers: `parent.reportFigures([ 63, 843, 13 ])`.

The function `reportFigures` now wants to check if the argument is an array. Typically, `value instanceof Array` would be a good fit. But in this scenario, it’s a <em>foreign</em> array that does not inherit from `Array.prototype` in the parent window. `value instanceof Array` would return `false` – a false negative.

The standard way to solve this particular problem is to use a type check function provided by ECMAScript: [Array.isArray()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/isArray). Unfortunately, equivalents for other types like Date and RegExp do not exist.

### Duck typing

Being a weakly typed language, JavaScript doesn’t make a fuss about types. JavaScript performs implicit type conversion so programmers don’t need to think about types. The concept behind this <dfn>duck typing</dfn>: “If it walks like a duck and quacks like a duck, it is a duck.”

`typeof` and `instanceof` check what a value <em>is</em>. As we have seen, both operators have serious limitations.

In contrast, duck typing checks what a value <em>does</em> and <em>provides</em>. After all, you’re not interested in the type of an value, you’re interested in what you can do with the value.

For example, a function that expects a date can check the input with `instanceof Date`:

```
function getNextDay(date) {
  if (!(date instanceof Date)) {
    throw new TypeError('getNextDay: expected a date');
  }
  const nextDay = new Date();
  nextDay.setTime(date.getTime());
  nextDay.setDate(nextDay.getDate() + 1);
  return nextDay;
}
```

Duck typing would ask instead: What does the function do with the value? Then check whether the value fulfills the needs, and be done with it.

The example function above calls the method `getTime` on the value. Why not accept all objects that have a `getTime` property?

```
if (!(date && date.getTime)) {
  throw new TypeError('getNextDay: expected a date');
}
```

If the value walks and talks like a date, it’s valid for this purpose.

The fact that this check isn’t as strict as `typeof` and `instanceof` is an advantage. A function that does not assert types but object capabilities is more flexible. For example, JavaScript has several types that do not inherit from Array but walk and talk like arrays: Arguments, HTMLCollection, NodeList. A function that uses duck typing is able to support all array-like types.

### Value checks

Existence checks
Type check
Value checks

We’ve learned that putting a value in an `if` condition makes a <em>truthy</em> test. When being converted to boolean, is the value `true`?

```
const name = 'Buttercup';
if (name) { … } else { … }
```

This is a short notation for:

```
if (Boolean(name) === true) { … } else { … }
```

The truthy test is a simple and effective to determine if a value is usable, but it comes with several limitations we’ve already visited.

For a lot of feature checks, the truthy test suffices. See the Fetch API example again:

```
if (window.fetch) {
  fetch(…);
} else {
  …
}
```

When detecting features, testing for a specific value is rare. Most feature detection looks for the existence objects and functions. There’s no specific value to compare them to.

In normal program logic though, testing for specific values is common. For example, you might want to check if an array or string is empty:

```
if (array.length === 0) { … }
if (string.length === 0) { … }
```

Or if an array contains a given value:

```javascript
if (array.indexOf(value) !== -1) { … }
```

### Handling exceptions with try…catch

JavaScript APIs have different ways to report failure. The simplest way is a function that returns a falsy or empty value. For example, `document.querySelector('.peanutButter')` returns `null` if no element with the class could be found in the document. Similarly, `document.querySelectorAll('.peanutButter')` returns an empty list if no element with the class could be found.

In addition to return values, APIs may throw exceptions. For example, `document.querySelector('!"§$%')` does not return `null`, but throws a SyntaxError: `'!"§$%' is not a valid selector`.

So a program that calls `querySelector` with arbitrary selectors would need to check both:

1. Is the return value an element and not `null`?
2. Does the function throw an exception?

We’ve learned how to check the return value:

```
const selector = 'an arbitrary selector that might be invalid';
const element = document.querySelector(selector);
if (element !== null) {
  … do something with element …
}
```

But how do we check whether the function has thrown an exception?

The `try { … } catch (error) { … }` statement wraps a piece of code and adds exception handling.

<pre>
const selector = 'an arbitrary selector that might be invalid';
let element;
<strong>try</strong> {
  element = document.querySelector(selector);
} <strong>catch</strong> (error) {
  console.error(error);
  … Report the error to a logging service …
}
if (element) {
  … do something with element …
}
</pre>

The `try…catch` statement consists of two main parts. The first part is the `try` block delimited by curly braces `{ … }`. This block contains the code that may throw an exception. The second part after the keyword `catch` consists of a variable name in parentheses, `(error)`, and the another code block in curly braces `{ … }`. This block is executed when an exception is thrown in the `try` block. It can access the error object using the name in the parentheses, `error` in the example.

Normally, an exception stops the execution of the current function call stack. When the source of the exception is wrapped in `try…catch`, only the execution of the `try` block is stopped. Using error handling, the program is able to recover from the exception. The example above catches exceptions caused by `querySelector` and reports them.

After executing the `catch (…) {…}` block, the JavaScript engine continues to run the code after the `try…catch` statement. There is an `if` statement with a truthy test on `element`. This covers two cases: `querySelector` returned `null` or threw an exception. If `querySelector` returned `null`, `element` is falsy. If `querySelector` threw an error, the assignment `element = …` never happened. Therefore `element` is `undefined`, also falsy.

`try…catch` is particularly useful when it wraps a small piece code that is likely to throw an error. Wrap a call to an API in `try…catch` when the API specification states that the call may throw exceptions.

`try…catch` is often misused by placing a large amount of code in the `try { … }` block. Often the `catch (…) {…}` block is left empty. This is not error handling, it’s error suppression. It may be necessary in some rare cases, but `try…catch` is most useful for catching specific exceptions.

### Throwing and catching exceptions programmatically

We’ve learned how to handle exceptions thrown by the JavaScript engine, and we’ve quickly touched programmatic exceptions in “fail fast” assertions (see above). Let’s have a deeper look at programmatic exceptions.

Typically we take great efforts to avoid or catch exceptions during JavaScript runtime. Why should we deliberately cause exceptions?

Exceptions aren’t inherently good or bad. They are simply messages stating that something went wrong during execution. These messages can be very helpful given someone is listening to them and is takes action.

In the `querySelector` example above, `querySelector` uses two ways to send messages to the caller: A return value or an exception. In our own code, we can use the same pattern.

Here’s our “fail fast” example again, a function that normally returns a number but throws a `TypeError` if it cannot produce a useful return value:

```
function sum(a, b) {
  if (!(typeof a === 'number' && !Number.isNaN(a) &&
    typeof b === 'number' && !Number.isNaN(b))) {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

The `throw` statement allows to throw an exception programmatically. It’s an unary operator that expects an Error object on the right side. The example creates a new TypeError instance. Every Error should have a meaningful message describing the problem. The message is a string that is passed to the Error constructor.

First, a programmatic exception is a message to the developer calling the code. The `sum` function says: “This function needs two numbers in order to work correctly! It does not deal with other types. For reliability, this function does not perform implicit type conversion. Please fix your code immediately to make sure only numbers are passed, before this small error grows to a big error.”

This message is only effective if it reaches the developer ideally before the code is deployed to production. When the exception is thrown in production, then it should be reported and logged (see below) so the developer gets the message as soon as possible.

Second, a programmatic exception is a message to the calling code, similar to the return value of the function. We’ve seen this in the `querySelector` example above. The caller should catch the exception and decide how to handle it. For this purpose, the error object holds a type, a message, the source code position it originates from, a stack trace and possibly more information on the incident.

### Abstraction libraries

[jQuery](https://jquery.com/), [Underscore](http://underscorejs.org/), [Lodash](https://lodash.com/) and [Moment.js](https://momentjs.com/) are probably the most used client-side JavaScript libraries. They all emerged for two main reasons:

1. The JavaScript APIs available in the browser were unhandy, clumsy and lacked essential features or expressiveness.
2. The web lacked technical standards that browser vendors agreed upon. Or old browsers that lacked support for essential web standards still dominated the market.

So a main goal of client-side JavaScript libraries is to even out differences between browsers. Back in the beginnings of the web, these differences were enormous. Today, most JavaScript APIs are well-specified and browser vendors care for interoperability. Still, small differences remain. Even after browsers have fixed bugs in their implementations, old browser versions don’t simply vanish into thin air but delight us for years.

Every year or so, someone writes an article called “You don’t need jQuery” or “You don’t need Lodash”. These articles point out that the native APIs have been improved since or old browsers that prevented the usage of improved APIs have died out. That’s right, but they often miss the other main goal of libraries.

Libraries provide a concise and consistent API that is an abstraction of several inconsistent browser APIs. For example, traversing and manipulating the DOM, handling events and animating using jQuery is still more pleasant than using the respective native APIs. This is because jQuery provides an unbeaten abstraction: A list type containing DOM nodes with powerful map, reduce and filter operations. Also, jQuery still deals with browser inconsistencies and tries to level them.

For the sake of robustness, use well-tested, rock-solid libraries. The time, resources and brain power that went into the creation and maintenance of such libraries do not compare to your own solutions.

### Polyfills

Polyfills are an important tool for writing robust, cross-browser JavaScript. A polyfill is a script that fixes holes in the browser’s web standard support in order to create a level playing field for other scripts. It implements a particular JavaScript API in case the browser does not support it natively yet.

Polyfills are like libraries, but instead of defining their own API, they implement an established or emerging web standard. The benefit for the developer is that after loading the polyfill, all browsers provide the same feature with the same standard API.

For example, some browsers do not support the Fetch API. A polyfill for the Fetch API implements the Fetch specification using older existing techniques like `XMLHttpRequest`. Then it fills the browser’s holes.

A polyfill for the Fetch API might have the following structure:

```
if (!window.fetch) {
  window.fetch = function () {
    … Polyfill code …
  };
}
```

If the browser doesn’t support the Fetch API, including `window.fetch`, the code fills the hole by defining `window.fetch`.

It’s worth noting that not all APIs can be fully polyfilled. Some APIs include new and special behavior that cannot be implemented by standard ECMAScript means.

For example, if the browser does not provide access to live audio and video streams from the device, no JavaScript polyfill can implement this feature. In such cases, you need to use Graceful Degradation or Progressive Enhancement (see above) to come up with an alternative.

### Manual testing

with multiple browsers, devices, connections

### Unit and integration tests

Automated testing

### Continuous integration with real devices


### Error logging

Despite all precautions, with extensive manual and automatic testing in place, errors will happen in production when diverse users with diverse browsers and systems are using your site.

In particular, JavaScript exceptions will happen in production. We’ve learned that exceptions are helpful messages about problems in your code or your larger infrastructure – as long as you receive these messages and act upon them.

Therefore, sending information about exceptions to you, the developer, is vital for every site that relies on JavaScript.

The standard approach is to monitor all exceptions on a page and to handle them in a central handler, for example using [window.onerror](https://developer.mozilla.org/en-US/docs/Web/API/GlobalEventHandlers/onerror). Then gather a bunch of context information and send an incident report to a log server. That server stores all reports, makes them accessible using an interface and probably sends an email to the developer.

Unfortunately, it’s not easy to compile a meaningful, cross-browser report from an exception. In addition to the exception type and message, we need to know where the exception in the code occurred and how the stack trace looked. Tools like [TraceKit](https://github.com/csnover/TraceKit) and [StackTrace.js](https://www.stacktracejs.com/) help to extract meaning from exceptions.

There are [several hosted services](https://github.com/cheeaun/javascript-error-logging) that provide such error reporting scripts and the server-side monitoring and data processing.

### Encapsulated code

Encapsulated code that does not interfere with other code, e.g. few global variables, module systems, not changing core prototypes (except for polyfills)

### The ECMAScript 5 Strict Mode deprecates error-prone coding practices

### Compilers transform JavaScript to a more widely supported version, e.g. Babel compiles ECMAScript 6 to ECMAScript 5

### Languages that compile to JavaScript

From a language design point of view, JavaScript has severe shortcomings and pitfalls. The technical term is “footgun”: A technology that makes it easy to shoot yourself in the foot.

JavaScript is weakly and dynamically typed. It borrows ideas from multiple paradigms and fuses them into one language: imperative programming, object-oriented programming and functional programming.

Some people make this imprecision and inconsistency responsible for many JavaScript pitfalls. That’s true to some regard. JavaScript was never designed for writing large web applications, for developing user interfaces. Recent ECMAScript standards tried to introduce more strictness and consistency to improve [programming in the large](https://en.wikipedia.org/wiki/Programming_in_the_large_and_programming_in_the_small).

When it’s so hard to write robust JavaScript, why not use another programming language?

The browsers only have a JavaScript engine built in, so we can’t just run, say, PHP in the browser. But other languages can be translated into JavaScript, like an Arabic text can be translated into English.

Typically, programming languages are compiled into machine code for a specific processor or into bytecode for a virtual machine. It’s also possible to compile them into another language, like JavaScript. This compilation that is in fact a translation is also called transpilation, and the compiler-translater is called transpiler, because nerds love blending words.

Technically, transpilers allow to write front-end code in an arbitrary language. Someone has to develop the transpiler, of course. This opens up tremendous possibilities. We can use languages with strictly-typed languages, or purely functional languages specifically designed for the purpose of building user interfaces.

In fact, there are numerous languages that compile to JavaScript. Some have been built for this purpose alone, they cannot be compiled to machine code. These languages have different levels of familiarity with JavaScript:

- Some languages are strict subsets of JavaScript, meaning they resemble JavaScript in all points but remove some problematic aspects.
- Some languages are strict supersets of JavaScript, meaning they resemble JavaScript in all points and add additional features.
- Some languages introduce a new syntax that resembles JavaScript.
- Some languages introduce a new syntax that does not resemble JavaScript.

Here’s a selection of languages that compile to JavaScript:

#### CoffeeScript

CoffeeScript has a syntax very familiar to JavaScript. It mostly provides “syntactic sugar” that makes writing common JavaScript idioms easier. In CoffeeScript, whitespace like line breaks and spaces is used for delimiting functions and blocks. CoffeeScript made JavaScript programming more robust since it eliminated several common pitfalls. It also influenced the work on the ECMAScript standard.

Since ECMAScript 6 and Babel exist (see above), CoffeeScript isn’t used that often, but it’s still first-class language that compiles to JavaScript.</dd>

#### TypeScript

TypeScript is a strict superset of JavaScript. All valid JavaScript code is also valid TypeScript, but TypeScript code is typically not valid JavaScript. As the name suggest, TypeScript adds static typing to JavaScript. It comes with several well-proven ways to define types, like classes, interfaces, unions and generics.

This is how a `sum` function with explicit type annotations may look like in TypeScript:

<pre>
function sum(a<strong>: number</strong>, b<strong>: number</strong>)<strong>: number</strong> {
  return a + b;
}
</pre>

Do you see the added type information for the parameters and the return value? In plain JavaScript, we had to add type assertions to make sure that `add` is only called with two numbers. In TypeScript, the code simply does not compile when `add` is called somewhere with non-numbers.

#### ClojureScript

#### Elm

### Linters check for potential errors and compatibility issues

### Last but not least: reducing the code complexity, finding simpler solutions, reducing the amount of code, reducing the JavaScript usage

### References

A complete guide to check any JavaScript value
  https://wiki.selfhtml.org/wiki/JavaScript/Objektabfragen
