---
layout: book
title: "Robust Client-Side JavaScript – A Developer’s Guide"
description: "Why do we need to talk about robust JavaScript and how do we achieve it?"
keywords: JavaScript, Robustness, ECMAScript
lang: en
---

<svg style="display: none">
  <symbol id="ornament" viewbox="0 0 14.666 16.598">
      <path d="M6.262 13.106q0 1.464-.988 2.47-.988 1.022-2.31 1.022-1.2 0-1.994-.776-.776-.758-.776-1.834 0-.988.6-1.57.617-.6 1.658-.6.723 0 1.217.494.511.476.511 1.094 0 .529-.493.97-.477.458-1.059.458-.44 0-.74-.317-.283-.3-.283-.776 0-.212.124-.459.123-.265.123-.3 0-.529-.37-.529-.3 0-.565.476-.247.459-.247 1.13 0 .881.653 1.498.67.635 1.676.635 1.058 0 1.852-.864.793-.864.793-2.046 0-1.535-2.046-3.404l-1.481-1.34q-.565-.53-.565-.812 0-.459.441-.459.07 0 .212.07.159.071.247.071.194 0 .194-.282 0-.264-.459-.617-.564-.406-1.111-.812-.882-.723-.882-1.57 0-.229.335-.229.035 0 .106.018.088.017.159.017.353 0 .353-.229 0-.035-.283-.688-.388-.846-.688-1.71Q0 .81 0 .581 0 0 .353 0q.23 0 .423.829.318 1.358.759 2.381.458 1.006.687 1.447.653 1.27 1.606 2.646 2.434 3.51 2.434 5.803zM14.666 14.146q0 .97-.811 1.676-.847.759-2.082.759-1.375 0-2.31-1.059-.918-1.04-.918-2.628 0-1.27.777-2.822.282-.547 1.834-3.122.917-1.517 1.27-2.258 1.164-2.452 1.252-3.51.053-.6.071-.67.053-.23.282-.23.318 0 .318.388 0 .177-.741 2.787-.035.124-.035.212 0 .194.14.194.107 0 .3-.07.212-.071.3-.071.23 0 .23.282 0 .706-.882 1.323-1.323.935-1.323 1.164 0 .23.3.23.123 0 .353-.071.229-.088.335-.088.388 0 .388.44 0 .46-.706.9-1.358.882-1.482.988-.6.494-1.234 1.535-1.006 1.64-1.006 2.557 0 1.517.653 2.329.67.81 1.834.81 1.059 0 1.711-.563.653-.547.653-1.43 0-1.887-1.482-1.887h-.105q-.089.018-.089.106 0 .07.388.459.388.388.388.9 0 .51-.405.846-.406.335-1.023.335-.477 0-.83-.476-.352-.476-.352-1.147 0-.67.564-1.199.582-.53 1.288-.53.952 0 1.57.76.617.74.617 1.851z" fill="currentColor" />
  </symbol>
</svg>

<p id="sticky-menu">
  <a href="#toc" class="toc-link">
    <span class="tokyo-tower">🗼</span>
    Table of Contents
  </a>
  <a href="/" title="Home">molily</a>
  <a href="https://twitter.com/molily" target="_blank" rel="noopener" title="molily on Twitter">@molily</a>
</p>

<div id="sidebar">
  <nav id="toc">
    <p id="home-link">
      <a href="/" title="Home">molily</a>
      <a href="https://twitter.com/molily" target="_blank" rel="noopener" title="molily on Twitter">@molily</a>
    </p>
    <p id="toc-book-title">Robust Client-Side JavaScript</p>
    <p id="toc-epub-link">
      <strong><a href="/assets/robust-javascript.epub" download>Download this book as EPUB (724 KB)</a></strong>
    </p>
    <h2 id="toc-heading">Table of Contents</h2>
    <ol id="toc-tree">
      <li>
        <a href="#introduction">Introduction</a>
        <ol>
          <li>
            <a href="#characteristics-of-javascript">Characteristics of JavaScript</a>
          </li>
          <li>
            <a href="#the-browser-as-a-runtime-environment">The browser as a runtime environment</a>
          </li>
          <li>
            <a href="#javascript-standards">JavaScript standards</a>
          </li>
        </ol>
      </li>
      <li>
        <a href="#achieving-robustness">Achieving Robustness</a>
        <ol>
          <li>
            <a href="#graceful-degradation">Graceful Degradation</a>
          </li>
          <li>
            <a href="#progressive-enhancement">Progressive Enhancement</a>
          </li>
          <li>
            <a href="#graceful-degradation-vs-progressive-enhancement">Graceful Degradation vs. Progressive Enhancement</a>
          </li>
          <li>
            <a href="#fault-tolerance">Fault tolerance</a>
          </li>
          <li>
            <a href="#postels-law">Postel’s Law</a>
          </li>
        </ol>
      </li>
      <li>
        <a href="#how-javascript-might-fail">How JavaScript might fail</a>
        <ol>
          <li>
            <a href="#web-crawlers-without-javascript-support">Web crawlers without JavaScript support</a>
          </li>
          <li>
            <a href="#disabled-javascript-execution">Disabled JavaScript execution</a>
          </li>
          <li>
            <a href="#network-and-loading-errors">Network and loading errors</a>
          </li>
          <li>
            <a href="#parsing-errors">Parsing errors</a>
          </li>
          <li>
            <a href="#conflicting-scripts">Conflicting scripts</a>
          </li>
          <li>
            <a href="#exceptions">Exceptions</a>
          </li>
          <li>
            <a href="#reference-errors">Reference errors</a>
          </li>
          <li>
            <a href="#type-errors">Type errors</a>
          </li>
          <li>
            <a href="#security-errors">Security errors</a>
          </li>
        </ol>
      </li>
      <li>
        <a href="#how-to-prevent-failure">How to prevent failure</a>
        <ol>
          <li>
            <a href="#failing-fast">Failing fast</a>
          </li>
          <li>
            <a href="#feature-detection">Feature detection</a>
          </li>
          <li>
            <a href="#types-of-checks">Types of checks</a>
          </li>
          <li>
            <a href="#conditional-statements-and-truthy-values">Conditional statements and truthy values</a>
          </li>
          <li>
            <a href="#existence-checks">Existence checks</a>
          </li>
          <li>
            <a href="#type-checks-with-typeof">Type checks with <code>typeof</code></a>
          </li>
          <li>
            <a href="#type-checks-with-instanceof">Type checks with <code>instanceof</code></a>
          </li>
          <li>
            <a href="#duck-typing">Duck typing</a>
          </li>
          <li>
            <a href="#value-checks">Value checks</a>
          </li>
          <li>
            <a href="#handling-exceptions-with-trycatch">Handling exceptions with try…catch</a>
          </li>
          <li>
            <a href="#programmatic-exceptions">Programmatic exceptions</a>
          </li>
          <li>
            <a href="#encapsulated-code">Encapsulated code</a>
          </li>
          <li>
            <a href="#the-strict-mode">The Strict Mode</a>
          </li>
          <li>
            <a href="#promises">Promises</a>
          </li>
          <li>
            <a href="#abstraction-libraries">Abstraction libraries</a>
          </li>
          <li>
            <a href="#polyfills">Polyfills</a>
          </li>
          <li>
            <a href="#linters">Linters</a>
          </li>
          <li>
            <a href="#the-babel-compiler">The Babel compiler</a>
          </li>
          <li>
            <a href="#languages-that-compile-to-javascript">Languages that compile to JavaScript</a>
            <ol>
              <li>
                <a href="#coffeescript">CoffeeScript</a>
              </li>
              <li>
                <a href="#typescript">TypeScript</a>
              </li>
              <li>
                <a href="#clojurescript">ClojureScript</a>
              </li>
              <li>
                <a href="#elm">Elm</a>
              </li>
            </ol>
          </li>
          <li>
            <a href="#error-logging">Error logging</a>
          </li>
          <li>
            <a href="#manual-testing">Manual testing</a>
          </li>
          <li>
            <a href="#automated-testing">Automated testing</a>
          </li>
          <li>
            <a href="#unit-tests">Unit tests</a>
          </li>
          <li>
            <a href="#integration-tests">Integration tests</a>
          </li>
          <li>
            <a href="#acceptance-tests">Acceptance tests</a>
          </li>
          <li>
            <a href="#writing-less-javascript">Writing less JavaScript</a>
          </li>
        </ol>
      </li>
      <li>
        <a href="#references">References</a>
      </li>
      <li>
        <a href="#about">About</a>
      </li>
    </ol>
  </nav>
</div>

<div id="main-container">
<main id="main" markdown="1">

<p id="cover-image">

<picture>
  <source type="image/webp" srcset="/img/robust-js-500-q80-sharp_yuv.webp, /img/robust-js-1000-q40-sharp-yuv.webp 2x" >
  <source type="image/jpeg" srcset="/img/robust-js-500-q75.jpg, /img/robust-js-1000-q40.jpg 2x">
  <img id="cover-image-tokio-tower" src="/img/robust-js-500-q75.jpg" srcset="/img/robust-js-500-q75.jpg, /img/robust-js-1000-q40.jpg 2x" alt="Photo of the Tokyo Tower, a 332 meter lattice tower in Tokyo, Japan." loading="lazy">
</picture>

<a href="#cover-credits" id="cover-credits-link" class="no-link-type" title="Cover credits">Tokyo Tower by Martin Abegglen – CC-BY-SA</a>

</p>

<h1 id="main-heading">
  <span class="main-title">Robust Client-Side JavaScript</span><br>
  <span class="subheading">A Developer’s Guide</span>
</h1>

<p class="intro"><em class="intro-caps">The JavaScript programming language</em> is an essential tool of web developers today. Websites ship more and more JavaScript to the browser to be more interactive. The more complex client-side JavaScript gets, the more error-prone and fragile the user experience might get. Why do we need to talk about robust JavaScript and how do we achieve it?</p>

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## Introduction

### Characteristics of JavaScript

In the trinity of front-end web technologies – HTML, CSS and JavaScript –, the latter is different from the others. HTML and CSS are declarative languages for the special purpose of structuring a text document and expressing style rules, respectively. Both HTML and CSS are designed in a way that allows browsers to process the code in a forgiving, fault-tolerant way. These design features are necessary to allow for backward and forward compatibility.

JavaScript however is a fully fledged programming language that happens to run in the context of a web page. JavaScript has only a few fail-safe and compatibility mechanisms built in. Whereas JavaScript’s power is unlimited, HTML and CSS have the [least power](https://www.w3.org/2001/tag/doc/leastPower.html) that is necessary to serve their special purpose.

There are thousands of ways HTML, CSS and JavaScript might fail, and it happens every day, on almost every website. But when HTML or CSS fail, the impact is rather limited. A web page may still be usable in spite of several HTML and CSS errors. In contrast, a single JavaScript error may render the whole website unusable. Sometimes there are ways to recover, but the user might not be aware of them.

In this guide, we will investigate why JavaScript might fail and how to prevent or handle these errors in a graceful way that ensures a working website.

### The browser as a runtime environment

Writing client-side JavaScript for the web differs from programming for other platforms. There is not one well-defined runtime environment a developer may count on. There is not one hardware architecture or device type. There is not a single vendor that defines and builds the runtime, the compiler and the tools.

The web is an open, vendor-independent, heterogenous publishing platform. It is held together by several technical standards of different quality. New standards appear frequently, old standards are amended or deprecated. Different standardization organizations follow different rules of procedure.

This has lead to the following situation:

- There is technical behavior that is standardized and that major browsers agree on. For example, the basic HTML elements are well-supported.
- There is technical behavior that is standardized and that major browsers do not agree on. For example, browsers may have bugs in their implementation or simply not support newer standards yet.
- There is technical behavior that is not standardized and that major browsers agree on. Standards may omit some details, leaving them for implementors to decide. Still, browser vendors copy the detailed behavior from other browsers for consistency.
- There is technical behavior that is not standardized and that major browsers do not agree on. Typically new web technologies are born as proprietary experiments before entering a standardization process. Some technologies are never widely adopted and fall into oblivion.

There are several relevant browsers in numerous versions running on different operating systems on devices with different hardware abilities, internet connectivity, etc. The fact that the web client is not under their control maddens developers from other domains. They see the web as the most hostile software runtime environment. They understand the diversity of web clients as a weakness.

Proponents of the web counter that this heterogeneity and inconsistency is in fact a strength of the web. The web is open, it is everywhere, it has a low access threshold. The web is adaptive and keeps on absorbing new technologies and fields of applications. No other software environment so far has demonstrated this degree of flexibility.

Front-end developers benefit from a web that keeps on evolving and innovating. Especially JavaScript developers may quickly adopt new language features as soon as they are specified and implemented by some browsers. In this guide, we will explore how to use new features in a backwards-compatible way.

It is true that client-side JavaScript programming is a minefield. But there is a simple, [Socratic principle](https://en.wikipedia.org/wiki/I_know_that_I_know_nothing) that will light our way: *Do not take anything for granted. Do not count on anything. Question your beliefs.* If you know that you know nothing about the client that runs your JavaScript code, you can turn unfounded assumptions into justified knowledge.

Assumptions are necessary and inevitable in JavaScript, but we need to [own these assumptions](https://remysharp.com/2015/07/02/assumptions). Every JavaScript program makes a lot of assumptions about its runtime environment. While having a low entry barrier is certainly desirable, the program needs to fulfill a task. The requirements should be in a well-balanced relation to the provided features.

### JavaScript standards

There is no single technical specification that defines JavaScript, but a whole bunch of specifications.

The [ECMAScript specification](https://www.ecma-international.org/publications/standards/Ecma-262.htm) defines the core of the language: the basic language features, the syntax, the execution and the standard library. A new version of ECMAScript is published every year. At the time of writing, [ECMAScript 2017, Edition 8](https://www.ecma-international.org/ecma-262/8.0/), also called ECMAScript 8, is the latest version.

With ECMAScript alone, you cannot do anything useful. For example, there is no way to read or output any data. ECMAScript does not define the so-called <dfn>host environment</dfn> in which a program is executed. It allows several possible host environments. An HTML document in the browser is one possible host environment. Node.js is another popular one.

The host environment we are interested in here is primarily defined in the [HTML specification](https://www.w3.org/TR/html5/). It not only defines HTML as a markup language, it also defines how JavaScript is executed in the context of an HTML document. It defines how JavaScript can access and alter the document. For this purpose, it relies on yet another specification: the [Document Object Model (DOM)](https://dom.spec.whatwg.org/).

The HTML and DOM specifications define the main objects that client-side JavaScript is dealing with: nodes, elements and events. Fundamental objects include `window`, `window.alert()`, `document`, `document.body`, `document.getElementById()` and `document.createElement()`.

There are a lot of other specifications that add more APIs to the browser’s JavaScript environment. [The web platform: Browser technologies](https://platform.html5.org/) gives an overview.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## Achieving Robustness

What does robustness mean? In everyday language, a thing is considered robust when it is made of solid, strong material that somehow resists to applied force. You can use it for a long time, you can drop it by accident, you can even hit on it with a hammer or throw it around, but it does not break.

According to this definition, a piece of hard metal may be robust, but an elastic bouncy ball as well. Science looks for materials that combine strength with a certain resistance to force, like [ductility](https://simple.wikipedia.org/wiki/Ductility) and elasticity.

A structure can also be robust. Think of a [lattice tower](https://en.wikipedia.org/wiki/Lattice_tower) that is using a certain type of [truss](https://en.wikipedia.org/wiki/Truss). It is huge and strong, yet light and modular.

Similarly, in computer science, a robust program <q cite="http://www.linfo.org/robust.html">performs well not only under ordinary conditions but also under unusual conditions that stress its designers’ assumptions.</q> ([The Linux Information Project](http://www.linfo.org/robust.html)). The program does not stop execution when errors occur. It does not fail when the input data or user input is invalid or bogus.

So robustness is all about *making informed assumptions*. What happens when the developer’s assumptions are not met? Let us have a look at several concepts of robustness.

### Graceful Degradation

In the context of web development, <dfn>Graceful Degradation</dfn> means building a full-featured website, then adding fallbacks for clients that lack certain capabilities.

A website starts with a large, fixed set of features and, consequently, a large set of requirements. The client may not meet a requirement, so a feature depending on it may not be available. If a requirement is not met, the site does not break, but handles the situation gracefully. For example, it falls back to a simpler version.

For JavaScript, Graceful Degradation could mean to implement the site using the latest JavaScript language features and APIs. But every usage must be guarded by a capability check. In case the browser does not have the required capability, a simpler implementation is activated.

### Progressive Enhancement

<dfn>Progressive Enhancement</dfn> is similar to Graceful Degradation, but turns the process around.

A website still has a set of desired features and a set of client requirements. But the implementation starts with a minimal set of features. A first version of the site has a low entry barrier because it only uses well-established technologies.

Then, a second version is built that *enhances* the first version by adding new features. The enhanced version checks whether the client supports certain web technologies, then uses them safely. If the client meets the requirements for a feature, that feature is activated.

This process is repeated, creating a third, fourth, fifth version and so on. That is why it is called *Progressive* Enhancement. In theory, the website can be enhanced endlessly while staying robust and accessible to devices and browsers with restricted capabilities.

### Graceful Degradation vs. Progressive Enhancement

Graceful Degradation and Progressive Enhancement are two implementations of the same idea, but with a different twist.

Graceful Degradation aims for the full experience using bleeding-edge technologies – the [moonshot](http://whatis.techtarget.com/definition/moonshot). Building a perfect site takes a lot of time and resources. When such a page is built, it typically works only in one browser on the newest devices.

Then sophisticated fallbacks need to be added after the fact. This turns out to be difficult and tedious. For certain new browser features, developing equivalent fallbacks is virtually impossible. But more importantly, adding fallbacks is often neglected. When the budget is almost exhausted, web developers tend to add “this site requires browser X” signs, excluding many users, instead of writing proper fallbacks.

Progressive Enhancement in contrast follows the “[minimal viable product](https://en.wikipedia.org/wiki/Minimum_viable_product)” school of product development. The goal is to publish a working website quickly. This first version is not the most user-friendly, and certainly not the shiniest among its competitors. But the site works smoothly on every device. What it does, it does reliably.

Enhancements that make use of the latest browser features can now be added safely and deployed quickly. There is no stage during development in which the site only works for a small fraction of users.

It is widely agreed that Progressive Enhancement offers more benefits, but when applied to an individual website both methods should be considered and even mixed.

If you are planning a “moonshot” that relies on bleeding-edge technology in its core experience, like video conferencing or augmented reality, Graceful Degradation may help you to build a more inclusive site.

If you are planning a service with a rock-solid base and demanding extras, like realtime data analysis and visualization, Progressive Enhancement may help you to build high without losing accessibility.

When applied to JavaScript programming, both Graceful Degradation and Progressive Enhancement raise a lot of practical questions. How is a fallback applied? How well does it integrate with the rest of the code? To which extent is it possible to build on an existing version and enhance it? Is it not sometimes necessary to make a clear cut? You need to find answers that are specific for your project.

Both Graceful Degradation and Progressive Enhancement rely on checking the client’s capabilities. The crucial technique we are going to discuss later is called *[feature detection](#feature-detection)*.

### Fault tolerance

Another concept of robustness is <dfn>fault tolerance</dfn>. A technical system is considered fault-tolerant when the whole system continues to operate even if sub-systems fail.

A system consists of critical sub-systems and non-critical sub-systems. Critical sub-systems provide infrastructure and orchestrate the other parts. If they fail, typically the whole system fails. In contrast, non-critical sub-systems may recover from an error. Or they shut down in a controlled way and report the shutdown to allow for backup systems to take over.

While Graceful Degradation and Progressive Enhancement are native principles of web technologies, fault tolerance is not. It is probably the hardest yet most beneficial technique for achieving robustness.

In particular, fault tolerance is hard to implement in JavaScript. Used without caution, JavaScript is *the opposite of fault-tolerant*. Usually, if one operation fails, if one exception occurs, the whole call stack or the whole program blows up.

Implementing fault tolerance in JavaScript means dividing the code into independent, sandboxed sub-systems. Only few of them are critical. Most of them should be non-critical. If the latter fail with an error, the error needs to be caught and handled. Other sub-systems and the system as a whole should not be affected.

JavaScript does not support the definition of native sandboxes yet, but we can employ existing techniques like [try…catch](#handling-exceptions-with-trycatch) and [Promises](#promises) to achieve the desired effect.

### Postel’s Law

Jon Postel was a computer scientist that helped designing the core technologies of the internet. He edited the technical specifications of fundamental internet protocols, called Request for Comments (RFC).

In [RFC 760](https://tools.ietf.org/html/rfc760), published in January 1980, Postel first described the Internet Protocol (IPv4). There is a precise description of how implementations should behave:

<blockquote cite="https://tools.ietf.org/html/rfc760">
  <p>The implementation of a protocol must be robust. Each implementation must expect to interoperate with others created by different individuals. While the goal of this specification is to be explicit about the protocol there is the possibility of differing interpretations. In general, an implementation should be conservative in its sending behavior, and liberal in its receiving behavior. That is, it should be careful to send well-formed datagrams, but should accept any datagram that it can interpret (e.g., not object to technical errors where the meaning is still clear).</p>
</blockquote>

In [RFC 761](https://tools.ietf.org/html/rfc761), also published in January 1980, Postel described the Transmission Control Protocol (TCP) as used by the United States Department of Defense:

<blockquote cite="https://tools.ietf.org/html/rfc761">
  <p>TCP implementations should follow a general principle of robustness: be conservative in what you do, be liberal in what you accept from others.</p>
</blockquote>

Today this principle is often called <dfn>Postel’s Law</dfn>. While the original context was very specific&thinsp;—&thinsp;processing packets on a wide-area computer network&thinsp;—, today it is applied to all programs that read, parse and process user input, file formats or other structured data.

For example, the liberal, fault-tolerant [HTML 5 parser definition](https://www.w3.org/TR/html5/syntax.html#parsing-html-documents) along with the conservative [HTML 5 syntax definition](https://www.w3.org/TR/html5/syntax.html#writing-html-documents) is an application of Postel’s Law.

Personally, I do not think Postel’s Law should be seen as a <q>general principle of robustness</q>. I agree to some point that a program should accept data <q>that it can interpret (e.g. not object to technical errors where the meaning is still clear)</q>. But this rule requires careful interpretation.

In this guide, I do not argue that every program should be liberal in what it accepts. I find it more important that every program is explicit about what it accepts, is outspoken about technical errors and has a well-defined error handling.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## How JavaScript might fail

### Web crawlers without JavaScript support

Adding JavaScript to a website assumes that the client downloads and executes the code. This is not the case for a lot of automated web clients. Most robots and web crawlers speak HTTP, HTML and probably some CSS, but usually not JavaScript.

Some try to forage the JavaScript code for URLs or other valuable information. Some try to analyze the JavaScript to find malware or security vulnerabilities. Some even try to execute JavaScript in a fake browser environment.

What these robots have in common is that they are not interested in JavaScript per se. JavaScript typically makes a web page interactive, but a robot aims to analyze the page without simulating user interaction.

A search engine for example needs to evaluate if a page is valuable with regard to a query. So a search engine crawler is interested in text content, semantic markup, hyperlinks and probably media files.

Such a crawler wants simple code that it can parse quickly to find valuable data. Like HTML code. Executing arbitrary JavaScript is complex, slow and a potential security risk. Some crawlers might do it anyhow, but just as a way to find text content, semantic markup, hyperlinks, etc.

If a site cares for a decent search engine ranking, it should make it easy for crawlers to find meaningful, unique, structured text content. HTML is the best technology to present such content. This means the relevant content should be accessible without JavaScript, just by looking at the HTML returned by the server. All content should be reachable by plain hyperlinks, like `<a href="…">…</a>`.

For complex interactivity and content that cannot or should not be read by robots, it is fine to require JavaScript.

### Disabled JavaScript execution

While robots avoid running JavaScript, humans typically use a browser that runs JavaScript. Almost all browsers today have the capability to run JavaScript. But the user or their administrator may allow only JavaScript of certain origins or may have disabled JavaScript execution completely.

There are good security reasons for disabling the execution of arbitrary JavaScript. Since JavaScript is a fully fledged programming language, processing it is more complex and error-prone than any other format on the web. The browser exposes several critical APIs to JavaScript code. In consequence, JavaScript is the most frequent attack vector for browser exploits.

JavaScript is also used to invade the user’s privacy. Especially the advertisement industry gathers and combines information that is obtained using JavaScript across different sites. JavaScript APIs allow reading details about the machine’s hardware and software as well as saving data on the machine. These features are abused to create a unique “fingerprint” and an extensive profile of the user: visited sites, search terms, purchase history, interests; also age, gender, location, marital status, profession, income, ethnicity, political views, etc.

To protect the users, ad and privacy blockers as well as corporate web proxies may ignore the JavaScript from certain hosts or limit the access to certain JavaScript APIs. Some security proxies even change the author’s JavaScript code.

JavaScript authors need to learn how blockers and web proxies work. They typically match the URL with an allow list or block list. Make sure the host (`example.org`) serving the JavaScript is not on a block list. In a corporate intranet with an allow list, make sure the host is on this list. Also avoid suspicious patterns in the URL path that could trigger the blocking, like `ad.js`.

Since ads and privacy-invading scripts are typically loaded from third-party servers, blockers tend to allow JavaScript from the same domain and likely block JavaScript from a different domain. Make sure your scripts are placed on the same domain, a custom domain for assets, or a well-known, trusted content delivery network (see next chapter).

### Network and loading errors

In the age of mobile web access, a flaky internet connection is the norm. The connections from a client to a server are interrupted frequently. Sometimes the browser re-establishes the connections to send requests again. Sometimes the user needs to reload the page manually so all parts are fully loaded.

Network interruptions affect JavaScript more negatively than other formats on the web. HTML, CSS, images and videos can be loaded and processed incrementally. If half of the HTML code has been transmitted and the connection drops, the browser can still render half of the page. Image formats like JPEG and PNG have progressive modes so the user gets to see a low-resolution preview after 10-20% of the file have been transmitted.

For JavaScript, it is all or nothing. To execute the JavaScript, the full script needs to be transmitted.

JavaScript authors can do little against connectivity loss. But they can prepare for the case by shipping fewer and smaller scripts, and by making JavaScript optional for key content.

One way to improve the loading performance of scripts is to host JavaScript on <dfn>content delivery networks</dfn> (CDN). These are arrays of well-connected servers distributed around the globe optimized for caching and serving static assets like CSS, JavaScript and media files. When the browser requests an asset, the request is automatically routed to the nearest <abbr title="content delivery networks">CDN</abbr> server.

For example, if a user in Indonesia visits a site hosted in Europe, the network latency slows down the transfer. With a <abbr title="content delivery networks">CDN</abbr> server in Indonesia, the assets can be served more quickly, lowering the risk of connection interruption.

Apart from network connectivity problems, an HTTP request for a script can fail for other obvious reasons: 404 Not found, 500 Server error, etc. This seems trivial but these types of errors are probably the most common. Monitor the server log to catch these errors. Use tools to find broken links and check the output of web crawlers like the [Google search robot](https://www.google.com/webmasters/tools/home?hl=en).

### Parsing errors

The <dfn>parser</dfn> is the part of the browser’s JavaScript engine that reads the JavaScript source code sequentially to build an in-memory representation of the syntax. While the JavaScript code is just a gibberish stream of characters, the engine needs to transform it into a usable data structure in order to execute it later.

What is syntax again? It is the set of rules in a language that allow us to form a meaningful and correct sentence.

For example, if you read the sentence “The dog wags its tail”, you may think of a friendly Golden Retriever. A linguist does the same, but involuntarily starts to dissect the sentence, breaking it up into pieces and their relation.

The sentence is made of a noun phrase and a verb phrase. The noun phrase, “the dog”, consists of a determiner and a noun. The verb phrase, “wags its tail”, consists of verb and a noun phrase again. The verb, “wags”, has the third person singular present form. And so on.

For JavaScript, it is quite similar, yet less familiar since JavaScript is not a natural language, but an artificial computer language. If you write `window.alert('Hello World!');`, the parser generates an <dfn>Abstract Syntax Tree</dfn> (AST) that may look like this:

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

We will not go into detail here, but let us describe the structure of the program `window.alert('Hello World!');` in our own words:

There is an expression (think of a mathematical term) with a call of a function. To obtain this function, we need to look up the name `window`. We assume the value is an object and get its property named `alert`. We treat this value as the function being called. There is one function argument, a string literal containing `Hello World!`.

To execute a script, the JavaScript engine needs such a high-level format, not the low-level code consisting of letters, dots, braces, brackets, semicolons, etc.

If you make a slip of the tongue, a gentle listener will probably ask: “Pardon me, what did you mean by ‘alert Hello World’?” The JavaScript parser is not that polite. It has a draconian, unforgiving error handling. If it encounters a character that is not expected in a certain place, it immediately aborts parsing the current script and throws a [SyntaxError](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/SyntaxError). So one misplaced character, one slip of the pen can ruin your script.

The most frequent syntax error is probably due to typos in hand-written code. Fortunately, these errors are easy to prevent by using an editor with syntax checking or a [linter](#linters).

Even with these safeguards in place, syntax errors occur. There are several ECMAScript versions with different syntaxes. For example, if you use class declarations from ECMAScript 6 (2015) or `async`/`await` from ECMAScript 8 (2017), older browsers are not able to parse your script.

The standard solution is to [compile](#the-babel-compiler) newer ECMAScript syntax into an older equivalent syntax that is widely supported, usually ECMAScript 3 or 5.

### Conflicting scripts

In ECMAScript, the most important object is the <dfn>global object</dfn>. In the browser, the global object is `window`.

`window` is the topmost object representing the current browsing instance. It contains hundreds of built-in properties, the ECMAScript core objects and most browser APIs.

`window` also forms the outermost scope for names defined by scripts. These names are called *bindings* in ECMAScript terminology. They include, among others, variables like `var fooVariable = 1;` and functions declarations like `function fooFunction() {}`. When this code is executed in the global scope, properties on the global object `window` are created: `window.fooVariable` and `window.fooFunction`.

So the global object is a public space shared by browser APIs and all scripts running on a page. A global name can only be used once and hundreds of names are already taken. It is likely that one script overwrites an existing `window` property and thereby foils the efforts of another script.

The solution is to *avoid global names* wherever possible. Most variables, functions and classes you declare should have a limited scope. Only a few selected values of your scripts need to be globally accessible. For example, a public API for other scripts needs to be global.

The chapter [Encapsulated code](#encapsulated-code) describes practical solutions for avoiding global names.

### Exceptions

You may have heard of exceptions in the context of JavaScript, but what are they?

“Exception” does not mean exception to any rule here. An exception is an exceptional error, a fatal error. A program error that the JavaScript engine cannot handle on its own. If such an error occurs, the program is aborted. More specifically, the current function [call stack](https://en.wikipedia.org/wiki/Call_stack) is aborted. It is still possible to call the same function or other functions later.

There are several causes for exceptions, and we already encountered one: The SyntaxError occurs during parsing, before your code is even executed. Let us look at two common exceptions that may happen when the code is run: The `ReferenceError` and the `TypeError`.

### Reference errors

A `ReferenceError` is thrown when the program references a name&thinsp;—&thinsp;an identifier in ECMAScript terminology&thinsp;—&thinsp;that cannot be resolved to a value.

First, let us look at successful references:

```js
var name = 'Kitty';
window.alert('Hello ' + name);
```

We have two references here, `window.alert` and `name`. To resolve them to values, the JavaScript engine first looks for the identifiers `window` and `name` in the [scope chain](http://ryanmorr.com/understanding-scope-and-context-in-javascript/).

`window` is a global identifier, a property of the global object, as we have learned. After having resolved `window` to an object, the JavaScript engine looks for a property `alert` on this object.

`name` is a local or global variable, depending on the context.

Now, let us look at erroneous references:

```js
window.alert(frobnicateFoo);
```

The identifier `frobnicateFoo` cannot be found in the scope chain. Therefore the JavaScript engine throws a ReferenceError: “frobnicateFoo is not defined”.

So ReferenceErrors happen when the code uses an identifier that cannot be found in the current scope and all parent scopes. This is may be due to a typo. [Linters](#linters) can catch these bugs easily.

Another possible cause is the developer assuming that the browser supports a certain API. The developer assumes a global identifier is provided and uses it without caution. These are several examples that assume the availability of certain browser APIs:

```js
var object = JSON.parse(string);
```

```js
var promise = new Promise(function(resolve, reject) {
  /* … */
});
```

```js
fetch('/something')
  .then(
    function(response) { /* … */ },
    function(error) { /* … */ }
  );
```

At the time of writing, [JSON](https://caniuse.com/#feat=json) is available in 98.14% of the browsers, [Promise](https://caniuse.com/#feat=promises) in 89.04%, [fetch](https://caniuse.com/#feat=fetch) in 77.81%.

We can avoid such careless use of APIs by using *feature detection*. In particular, we need to check for the names we intent to use.

Writing good feature checks requires thorough knowledge of the API being used. We will go into details later in the chapter on [feature detection](#feature-detection). This is how we can guard the API uses above:

```js
if (typeof JSON === 'object' &&
  typeof JSON.parse === 'function') {
  /* Call JSON.parse() */
}
```

```js
if (typeof Promise === 'function') {
  /* Call new Promise() */
}
```

```js
if (typeof fetch === 'function') {
  /* Call fetch() */
}
```

These guards are only the first step. They check whether the API objects exist and have a certain type. They do not check whether the browser has full and correct support of the API. They do not check whether the APIs can be used in the current context.

For example, [security and privacy preferences](#security-errors) may limit the usage of APIs like `fetch`. Each API defines its own way how to deal with failure, like [throwing an exception](#handling-exceptions-with-trycatch) or returning a value denoting an error.

### Type errors

A `TypeError` is thrown when a program tries to perform an operation with a value whose type is not suitable for this operation. In other words, when you try to do something with a value that you cannot do with the value.

For example, functions can be called with the call operator `(…)`. All other values, like strings, numbers or plain objects cannot be called. All these examples fail with a TypeError because the value on the left side of the braces is not a function:

```js
"a string"();
5();
({})();
undefined();
null();
```

This seems obvious. Why would you try to call a number as if it was a function? You would not do that on purpose when writing the code, but it happens in production. Let us look at this example:

```js
window.frobnicateFoo();
```

Here, we have a reference to a property `frobnicateFoo` on the object `window`. Resolving `window` yields the global object. But there is no property `frobnicateFoo` on this very object. If you get the value of a non-existing property, JavaScript does not throw an exception, it simply returns `undefined`. So after resolving `window.frobnicateFoo`, the code is equivalent to `undefined();`.

Such TypeErrors are both common and hard to debug since they may have highly different causes.

In the example above, the cause is the use of a function without checking its existence beforehand. `frobnicateFoo` might be a user-defined function or a part of a browser API. If the function call fails because the function does not exist, the script defining the function was not loaded correctly or the browser does not support the API.

Here is another example of a similar “undefined is not a function” TypeError.

```js
var myLibrary = {
  start() { /* … */ }
};
myLibrary.statr();
```

The problem here is a simple typo. `myLibrary.start` is a function, but `myLibrary.statr` returns `undefined`.

These errors can be avoided by [manual](#manual-testing) and [automated testing](#automated-testing) as well as static code analysis. An <abbr title="Integrated development environments">IDEs</abbr> for example understands that the code defines an object `myLibrary` with the single property `start`. When it encounters `myLibrary.statr`, it shows a warning because it does not recognize the property `statr`.

There are several other cases where TypeErrors are thrown. For example when you try to redefine the value of a constant:

```js
const a = 1;
a = 2;
```

As William Shakespeare famously wrote in his sonnets about JavaScript, an immutable binding is not an immutable binding …

<blockquote>
<p>Which alters when it alteration finds,<br>
Or bends with the remover to remove:<br>
O, no! it is an ever-fixed mark,<br>
That looks on tempests and is never shaken</p>
</blockquote>

The nature of a constant is that its value cannot be changed later, so using the assignment operator `=` with the constant `a` on the left side throws a TypeError: “invalid assignment to const \"a\"”.

Similarly, a TypeError is thrown when you try to add a property to an object that does not allow the addition of properties:

```js
const MyLibrary = {
  start() {}
};
Object.seal(MyLibrary);
MyLibrary.newProperty = 1;
```

In [Strict Mode](#the-strict-mode), this code throws a TypeError “can't define property \"newProperty\": Object is not extensible”. Without the strict mode, the new property is silently ignored.

The same goes for overwriting properties which are read-only:

```js
const MyLibrary = {
  start() {}
};
Object.freeze(MyLibrary);
MyLibrary.start = function() {};
```

In strict mode, this code throws a TypeError “\"start\" is read-only”. Without the strict mode, the assignment is silently ignored.

Again, these errors can only be avoided by manual and automated testing.

### Security errors

There is no common error type for security errors in ECMAScript. Browser APIs throw several types of errors when API access is disallowed. Some APIs wrap the error in a Promise that is accessible in the rejection handler. Here are some examples:

- You try to use [localStorage](https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage) to save data persistently, but the user has disabled data saving for the site. Merely accessing the property `window.localStorage` throws a SecurityError.

- You try to read the current location using [navigator.geolocation.getLocation()](https://developer.mozilla.org/en-US/docs/Web/API/Geolocation/getCurrentPosition), but the user declines. The error callback is called with a PositionError with the code 1 (PERMISSION_DENIED).

- You try to fetch a URL from a different domain using [fetch()](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API), but the remote server does not allow it via [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS). The returned promise is rejected with a TypeError.

- You ask for the permission to show notifications using [Notification.requestPermission()](https://developer.mozilla.org/en-US/docs/Web/API/Notification/requestPermission), but the user declines. The returned promise is resolved with the string "denied" (yes, you read correctly).

- You try to access the device’s camera using [navigator.mediaDevices.getUserMedia()](https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia), but the user declines. The returned promise is rejected with a NotAllowedError.

As you can see, handling security errors requires a careful study of a particular API documentation.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## How to prevent failure

After this short glance at the different types of JavaScript errors, we got an idea of the problem and mentioned some possible solutions. Now let us go into detail about the techniques that prevent JavaScript from failing and handle errors gracefully.

### Failing fast

Every computer program may have logic bugs: A case is not considered, the state is changed incorrectly, data is transformed wrongly, input is not handled. These bugs can have several consequences in JavaScript:

In the *best case* the script fails with an exception. You may wonder, why is that the best case? Because an exception is visible and easy to report. The line of code that threw an exception is likely not the root cause, but the cause is somewhere in the call stack. An exception is a good starting point for debugging.

In the *worst case* the application continues to run despite the error, but some parts of the interface are broken. Sometimes the user gets stuck. Sometimes data gets lost or corrupted permanently.

JavaScript code should **[fail fast](https://martinfowler.com/ieeeSoftware/failFast.pdf)** (PDF) to make errors visible. Failing early with an exception, even with a user-facing error, is better than failing silently with undefined, puzzling behavior.

Unfortunately, JavaScript does not follow the principle of failing fast. JavaScript is a [weakly typed language](https://en.wikipedia.org/wiki/Strong_and_weak_typing) that goes great lengths to not fail with an error. Most importantly, JavaScript performs <dfn>implicit type conversion</dfn>.

Let us look at a simple, contrived example:

```js
function sum(a, b) {
  return a + b;
}
```

This function expects two numbers and returns their sum. The implicit assumption is that both arguments, `a` and `b`, are numbers. If one of them is not, the result *probably* will not be a number either. Whether the function works correctly depends on correct input types.

The problem is, the `+` operator *is a dangerous beast*. Its purpose is to add two numbers, but also to concatenate two strings. If the operands are not two numbers or two strings, implicit type conversion is performed.

These rules are specified in ECMAScript, but you should try to avoid ambiguous implicit type conversion. Here is an improved version of the function:

```js
function sum(a, b) {
  if (!(typeof a === 'number' && !isNaN(a) &&
    typeof b === 'number' && !isNaN(b))) {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

The key to failing fast is to **make your assumptions explicit** with assertions.

The function above uses [`typeof`](#type-checks-with-typeof) to assert the types of `a` and `b`. It [throws an exception](#programmatic-exceptions) if they are not numbers or if they are `NaN`. We are going to explore these techniques later in detail.

This example shows that assertions make small errors visible before they grow into big errors. The problem is, NaN *is a dangerous beast*. NaN is a special value that means “not a number”, but in fact it is a number you can calculate with.

NaN is contagious. All calculations involving NaN fail silently, yielding NaN: `5 + NaN` makes NaN, `Math.sqrt(NaN)` produces NaN. All comparisons with NaN yield false: `5 > NaN` is false, `5 < NaN` is also false. `5 === NaN` is false, `NaN === NaN` is also false.

If a NaN slips into your logic, it is carried through the rest of the program until the user sees a “NaN” appearing in the interface. It is hard to find the cause of a NaN since the place where it appears can be far from the place that caused it. Typically, the cause of a NaN is an implicit type conversion. My advice is to raise the alarm as soon as you see a NaN.

You need to decide how to implement assertions. If you throw an exception, like in the example above, make sure to catch it in a global error handler and [report it to an error logging service](#error-logging). If you follow [Postel’s Law](#postels-law) instead, at least output a warning on the console and report the error.

If the user’s task is affected, you should show a useful error message that something went wrong and that the incident has been reported. Also suggest workarounds, if applicable.

### Feature detection

<dfn>Feature detection</dfn> is a fundamental technique in an ever-changing web. As web authors, we want to use the newest browser features to provide a rich experience to the users and to make our lives easier.

Feature detection first checks whether a browser supports a certain web technology, then uses the technology safely. In the context of JavaScript, most feature detections are object and value checks, as well as function calls. Before looking at them in detail in the next chapter, let us learn about the basics of feature detection.

When writing client-side JavaScript, you need to define a baseline of requirements. You need to take some basic features for granted, like ECMAScript 3 and W3C DOM Level 2 support. If you use other JavaScript features, you should first learn about the browser support.

**[Can I Use](https://caniuse.com/)** is an essential resource that documents browser support of web technologies. For example, according to Can I Use, the [Fetch API](https://caniuse.com/#feat=fetch) in available in the browsers of 77.81% of the users worldwide. Can I Use allows to import usage data for a certain country in order to see stats for the target market.

The Can I Use data for Fetch shows that it is a fairly new API that almost all latest browsers support, but not the older browser generations. So Fetch should be used with a feature detection, ideally with a fallback or [polyfill](#polyfills).

Another essential site is the **[Web API documentation of the Mozilla Developer Network (MDN)](https://developer.mozilla.org/en-US/docs/Web/API)**. Here you will find a reference of all major JavaScript APIs, alongside with browser compatibility information and links to the original specifications.

If you are looking for ECMAScript core features, the place to go are the **[ECMAScript compatibility tables by kangax](https://kangax.github.io/compat-table/es6/)**.

As we have learned before, writing good feature detection requires thorough knowledge of the particular JavaScript API you would like to use. Fortunately, people have developed and collected feature checks for the relevant APIs so you do not have to wade through the specifications and come up with proper checks yourself.

**[Modernizr](https://modernizr.com/)** is a comprehensive feature detection library. You can select browser features you would like to use and build your own minimal library. Modernizr then provides a global object `Modernizr` with boolean properties. For example, `Modernizr.fetch` has the value `true` if the browser supports the Fetch API, or `false` if it does not. This allows you to write:

```js
if (Modernizr.fetch) {
  /* Call fetch() */
}
```

If you do not want to use Modernizr but look for bulletproof feature detection code, look into Modernizr’s [repository of detects](https://github.com/Modernizr/Modernizr/tree/master/feature-detects). For detecting the Fetch API, [Modernizr simply checks](https://github.com/Modernizr/Modernizr/blob/master/feature-detects/network/fetch.js#L18) `'fetch' in window`.

### Types of checks

Writing feature detections in JavaScript means checking for names and values defined by the host environment.

There are three levels of checks:

1. <p markdown="1">**Existence check**: Does a name exist?</p>
  - Either: Does an identifier exist in the scope chain? Ultimately, does an identifier exist in the global scope?
  - Or: Does a property exist on a certain object?
2. **Type check**: After resolving the name to a value, does the value have the expected type?
3. **Value check**: Does the value equal the expected value?

This is a cascade of checks you can perform. From top to bottom, the checks get more specific. Typically, we need to check the existence and the type of a value in order to use it safely. Sometimes checking the value is necessary as well.

### Conditional statements and truthy values

The key to robust JavaScript is [asking “if” a lot](https://christianheilmann.com/2015/02/18/progressive-enhancement-is-not-about-javascript-availability/). During the concept phase, ask “what if”. In the code, ask `if` to handle different cases differently.

The `if` statement, or conditional statement, consists of a condition, a code block and an optional second code block.

```js
if (condition) {
  // …
} else {
  // …
}
```

When an `if` statement is evaluated, first the condition expression is evaluated. The result of the expression is then converted into a boolean value, `true` or `false`. If this result is `true`, the first code block is executed, otherwise the second block, if given.

Most likely, this is not new to you. The reason we are revisiting it is the conversion into boolean. It means you can use a condition expression that does not necessarily evaluate to a boolean value. Other types, like Undefined, Null, String or Object are possible. For example, it is possible to write `if ("Hello!") {…}`.

If you rely on the implicit conversion, you should learn the conversion rules. ECMAScript defines an [internal function ToBoolean](http://www.ecma-international.org/ecma-262/8.0/#sec-toboolean) for this purpose. In our code, we can use the [public `Boolean()` function](http://www.ecma-international.org/ecma-262/8.0/#sec-boolean-constructor-boolean-value) to convert a value into boolean. This delegates to the internal ToBoolean function.

To illustrate the conversion, imagine that

```js
if (condition) {
  // …
} else {
  // …
}
```

is a short version of

```js
if (Boolean(condition) === true) {
  // …
} else {
  // …
}
```

Values are called <dfn>truthy</dfn> when ToBoolean converts them into `true`. Values are called <dfn>falsy</dfn> when ToBoolean converts them into `false`.

The way ToBoolean works is simple, but with a twist. Let us quote the ECMAScript specification which is quite readable for once:

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

As you can see, most types have a clear boolean counterpart. All objects, including functions, dates, regular expressions and errors, are truthy. The two types denoting emptiness, `undefined` and `null`, are falsy.

For numbers and strings though, it is complicated. Numbers are truthy *except for* zeros and NaN. Strings are truthy *except for* empty strings.

This ECMAScript design decision is controversial. On the one hand, it is a source of errors, since some developers expect that all numbers and all strings are truthy. On the other hand, it allows to write simple value checks like `if (value) {…}` for non-empty strings and usable non-zero numbers.

Usually, a value check aims to distinguish *usable* and *valid* values from *unusable* and *invalid* values. In most cases, truthy values are usable and falsy values are unusable. But keep in mind the exceptions for numbers and strings.

If you choose not to use implicit type conversion, make sure the `if` condition directly evaluates to boolean. For example, use comparison operators like `===`, `!==`, `>` and `<=`. These always produce boolean values.

### Existence checks

Does an identifier exist in the scope chain? Ultimately, does an identifier exist in the global scope?

Let us assume we would like to detect the Fetch API that specifies a global function `fetch`. Let us try this:

<div class="erroneous" markdown="1">
```js
if (fetch) {
  fetch(/* … */);
} else {
  // …
}
```
</div>

This works in browsers that do support fetch, but throws an exception in browsers that do not. Especially, it throws a [ReferenceError](#reference-errors).

This renders the whole check useless. This is exactly what we are trying to avoid with the check.

We cannot just use an identifier that cannot be resolved. There are several ways to work around this problem:

1.  We know that `fetch` is a property of the global object `window`. So we can use the [`in` operator](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/in) to check whether the property exists without checking its type:

    ```js
    if ('fetch' in window) {
      fetch(/* … */);
    } else {
      // …
    }
    ```

    This existence check is in fact an object property check.

2.  If present, `fetch` is a property of `window` with the type Function. Knowing this, we access the property using the familiar dot notation, `object.property`:

    ```js
    if (window.fetch) {
      fetch(/* … */);
    } else {
      // …
    }
    ```

    This existence check is in fact a [value check](#value-checks). We are relying on the [ToBoolean conversion](#conditional-statements-and-truthy-values) here. A function is *truthy*.

3.  Alternatively, use the [`typeof` operator](#type-checks-with-typeof). `typeof` does not throw an error in case the identifier cannot be resolved, it merely returns the string `'undefined'`.

    ```js
    if (typeof fetch === 'function') {
      fetch(/* … */);
    } else {
      // …
    }
    ```

    This existence check is in fact a type check (see next chapter).

### Type checks with `typeof`

`typeof` is an operator that takes one value as operand. The operator is placed before a value, for example `typeof 'Hello'`. As the name suggests, `typeof` returns the type of a value as a string. `typeof 'Hello'` evaluates to `'string'` since the value `'Hello'` is a string.

`typeof` has a behavior that makes it useful for feature detection: You can place an identifier after `typeof`, like `typeof fetch`. `typeof` does not throw an error in case the identifier cannot be resolved, it simply returns the string `'undefined'`.

The problem is, `typeof` *is a dangerous beast*. `typeof` does not return what you probably expect. This operator is one of the biggest design flaws of ECMAScript. It is deceiving and in older browsers simply incorrect.

First of all, let us learn about the <dfn>type system of ECMAScript</dfn>. There are seven main types: Undefined, Null, Boolean, Number, String, Symbol and Object. The first six are called <dfn>primitive types</dfn>.

The seventh type, Object, has all sorts of subtypes: Function, Array, RegExp, Date, Error, Map, Set; Window, Document, Element, Node, Event, Image and much more. Values of these types are complex, made up of values of primitive types.

You might expect that `typeof` deals with the seven main types by returning `'undefined'` for Undefined, `'null'`  for Null, `'object'` for Object and so on. Unfortunately not.

Let us paraphrase the ECMAScript specification to see [what typeof really returns](http://www.ecma-international.org/ecma-262/8.0/#sec-typeof-operator):

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
    <td><code>"undefined"</code></td>
  </tr>
  <tr>
    <td>Null</td>
    <td><code>"object"</code></td>
  </tr>
  <tr>
    <td>Boolean</td>
    <td><code>"boolean"</code></td>
  </tr>
  <tr>
    <td>Number</td>
    <td><code>"number"</code></td>
  </tr>
  <tr>
    <td>String</td>
    <td><code>"string"</code></td>
  </tr>
  <tr>
    <td>Symbol</td>
    <td><code>"symbol"</code></td>
  </tr>
  <tr>
    <td>Object that is ordinary and not callable (not a function)</td>
    <td><code>"object"</code></td>
  </tr>
  <tr>
    <td>Object that is standard exotic and not callable (not a function)</td>
    <td><code>"object"</code></td>
  </tr>
  <tr>
    <td>Object that is ordinary and callable (a function)</td>
    <td><code>"function"</code></td>
  </tr>
  <tr>
    <td>Object that is non-standard exotic and not callable (not a function)</td>
    <td>
      <p>Implementation-defined, but not <code>'undefined'</code>, <code>'boolean'</code>, <code>'function'</code>, <code>'number'</code>, <code>'symbol'</code>, or <code>'string'</code>.</p>
      <p>Implementations are discouraged from defining new typeof result values for non-standard exotic objects. If possible <code>'object'</code> should be used for such objects.</p>
    </td>
  </tr>
  </tbody>
</table>

The first oddity is that `typeof null` returns `object`, which does not make any sense. It is a dangerous pitfall.

The second oddity is the special detection of functions. A function typically has the type Object, but `typeof` returns `'function'` instead of `'object'`. This exception turns out to be highly useful: `typeof` is the easiest way to detect a function. Unfortunately, there are no other exceptions for common object types. For arrays, dates and regular expressions, `typeof` still returns `'object'`.

The third oddity is the distinction between ordinary, standard exotic and non-standard exotic objects. Let us try to understand this distinction without going too much into detail.

An <dfn>ordinary object</dfn> comes with a default behavior that all objects share. An <dfn>exotic object</dfn> overrides and redefines the default behavior. Exotic objects are either <dfn>standard</dfn> (specified in ECMAScript) or <dfn>non-standard</dfn> (not specified in ECMAScript). For example, an array is a <dfn>standard exotic object</dfn>.

In the past, browsers have provided objects that fall into the “non-standard exotic” category. The `typeof` operator in Internet Explorer misidentified these objects as `'unknown'`. Also Internet Explorer misidentified ordinary, callable objects (functions) as `'object'`.

Newer browsers adhere to the specification, but the historical pitfalls remain. Since the result of `typeof` used to be unreliable, people have used `typeof` mostly for existence checks instead of explicit type checks.

Let us look at the Fetch API example again:

```js
if (typeof fetch === 'function') {
  fetch(/* … */);
} else {
  // …
}
```

This check uses `typeof` to assert the Function type. This is more explicit: Since we are going to call `fetch`, we assert it is a function.

```js
if (typeof fetch !== 'undefined') {
  fetch(/* … */);
} else {
  // …
}
```

This check uses `typeof` to assert `fetch` is defined and has an arbitrary type except Undefined. This is implicit: We assert `fetch` exists, then assume it is a function defined by the Fetch API.

Both are useful feature checks. Personally, I follow the rule “explicit is better than implicit”.

### Type checks with `instanceof`

Besides `typeof`, there are several other ways to check the type of a value. One of them is the [`instanceof` operator](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/instanceof).

Simply speaking, `instanceof` returns whether an object is an instance of a given class. For example, `value instanceof Date` returns true if the value is a `Date` object. `instanceof` expects the object on the left side and a class on the right side.

More precisely, `instanceof` returns whether an object inherits from the `prototype` property of a given constructor. To understand this, we quickly need to revisit ECMAScript’s object model.

ECMAScript is a language based on <dfn>prototypal inheritance</dfn>. Every object has a prototype reference that may point to another object. If a property cannot be found on the object, the JavaScript engine follows the prototype reference and looks for the property on the prototype.

This principle is quite simple. Imagine someone asking you a question, but you do not know the answer. You still try to be helpful: “I’m sorry, I do not know the answer myself, but I know someone who is an expert on this topic!” So the other person walks to the expert and repeats the question.

Since a prototype is a simple object, it can have its own prototype again. This way, a [prototype chain](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Inheritance_and_the_prototype_chain) is formed: Objects referencing other objects, like `a` &rarr; `b` &rarr; `c`. The engine walks up the prototype chain to find a property. When you retrieve a property on `a` and it cannot be found, `b` is searched, then `c`.

How does `instanceof` fit in here? Let us investigate what happens when `value instanceof Date` is evaluated. `instanceof` expects a constructor on the right side, `Date` in the example. First the engine gets the `prototype` property of the constructor, `Date.prototype`. This is the prototype of all date objects. Then it takes the value on the left side, `value`, and walks up its prototype chain. If `Date.prototype` is found in the chain, the operator returns `true`, otherwise `false`.

In consequence, `value instanceof Date` checks whether the value inherits from `Date.prototype` using prototypal inheritance.

The `instanceof` operator is only applicable to the type Object and subtypes like Function, Array, RegExp, Date, etc. `instanceof` always returns false for [primitive types](#type-checks-with-typeof).

Another drawback limits the usefulness of `instanceof`: It does not work across windows, like frames, iframes and popup windows.

Every browser window has its own set of host objects and therefore constructor functions. For example, `Array` in one window is a different object than `Array` in another window. This sounds logical, but it causes problems when two windows exchange JavaScript objects.

Assume there is one HTML document embedding another HTML document in an iframe. A script in the iframe document calls a function in the parent document, passing an array of numbers: `parent.reportFigures([ 63, 843, 13 ])`.

The function `reportFigures` now wants to check if the argument is an array. Typically, `value instanceof Array` would be a good fit. But in this scenario, it is a *foreign* array that does not inherit from `Array.prototype` in the parent window. `value instanceof Array` would return `false`&thinsp;—&thinsp;a false negative.

The standard way to solve this particular problem is to use a type check function provided by ECMAScript: [Array.isArray()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/isArray). Unfortunately, equivalents for other types like Date and RegExp do not exist.

### Duck typing

As a weakly typed language, JavaScript performs implicit type conversion so developers do not need to think much about types. The concept behind this is called <dfn>duck typing</dfn>: “If it walks like a duck and quacks like a duck, it is a duck.”

`typeof` and `instanceof` check what a value *is* and *where it comes from*. As we have seen, both operators have serious limitations.

In contrast, duck typing checks what a value *does* and *provides*. After all, you are not interested in the type of a value, you are interested in *what you can do with the value*.

For example, a function that expects a date may check the input with `instanceof Date`:

```js
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

The example function above calls the method `getTime` on the value. Why not accept all objects that have a `getTime` method?

```js
if (!(date && typeof date.getTime === 'function')) {
  throw new TypeError('getNextDay: expected a date');
}
```

If the value walks and talks like a date, it is a date&thinsp;—&thinsp;for this purpose.

This check is not as strict as `instanceof`, and that is an advantage. A function that does not assert types but object capabilities is more flexible.

For example, JavaScript has several types that do not inherit from `Array.prototype` but walk and talk like arrays: Arguments, HTMLCollection and NodeList. A function that uses duck typing is able to support all array-like types.

### Value checks

Compared to existence and type checks, value checks are less relevant for feature detection, but they are still important for writing robust application logic.

We’ve learned that putting a value in an `if` condition makes a *truthy* test. When being converted to boolean, is the value `true`?

The truthy test is simple and effective to determine if a value is usable, but it comes with several limitations we’ve already visited. For a lot of feature checks, the truthy test suffices. See the Fetch API example again:

```js
if (window.fetch) {
  fetch(/* … */);
} else {
  // …
}
```

When detecting features, testing for a specific value is rare. Most feature detection looks for the existence of specific objects and functions. There is no specific value to compare them to.

In normal application logic though, testing for specific values is common. Such value checks make use of JavaScript’s comparison operators: `<`, `>`, `<=`, `>=`, `==`, `!=`, `===` and `!==`.

For example, you may want to check the length of an array or a string:

```js
if (array.length > 0) { /* … */ }
if (string.length > 0) { /* … */ }
```

Or if an array contains a given value:

```js
if (array.indexOf(value) !== -1) { /* … */ }
```

Unfortunately, the comparison operators in JavaScripts *are dangerous beasts*. The relational operators like `<`, `>`, `<=` and `>=` are overloaded with behavior so they work for numbers and strings. They may implicitly convert the operands into numbers.

The equality operators `==` and `!=` are even more complex. If the types of the operands do not match, they perform an implicit type conversion. We will not go into the details of ECMAScript’s equality comparison algorithm. For the sake of robustness, it is best practice to avoid these two operators altogether.

Fortunately, the strict equality operators `===` and `!==` exist. They do not perform implicit type conversion. Hence they are easier to describe:

The `===` operator first checks if the types of the operands match. If they do not, return `false`. This means you have to do manual type conversion if you want to compare values of different types.

Then the operator checks if both operands are of the type Object. If they are, check if both are the same object. If yes return `true`, else return `false`. So two objects are considered unequal unless they are identical. There is no deep comparison of object properties.

Otherwise, both operands must be of [primitive types](#type-checks-with-typeof). The values are compared directly. If they match, return `true`, else return `false`.

These rules are not trivial and you still have to learn and remember them. The strict equality operators force you to think about types again. They make implicit logic explicit.

### Handling exceptions with try…catch

JavaScript APIs have different ways to report failure. The simplest way is a function that returns a falsy or empty value. For example, `document.querySelector('.peanutButter')` returns `null` if no element with the selector could be found in the document. Similarly, `document.querySelectorAll('.peanutButter')` returns an empty list if no element with the selector could be found.

In addition to return values, APIs may throw exceptions. For example, `document.querySelector('!"§$%')` does not return `null`, but throws a SyntaxError: `'!"§$%' is not a valid selector`.

You may have guessed that `!"§$%` is not a valid CSS selector, but browsers throw the same type of error when they do not recognize the selector. For example, older browsers like Internet Explorer 8 do support `querySelector`, but do not support [CSS Selectors Level 3](https://caniuse.com/#feat=css-sel3). And most recent browsers do not support the [CSS Selectors Level 4 Working Draft](https://drafts.csswg.org/selectors-4/) yet.

So a program that calls `querySelector` would need to check both:

1. Is the return value an element and not `null`?
2. Does the function throw an exception?

We’ve learned how to check the return value:

```js
const selector = 'a selector that might be unknown or invalid';
const element = document.querySelector(selector);
if (element !== null) {
  // … Do something with element …
} else {
  // … Error handling …
}
```

But how do we check whether the function threw an exception?

The [`try { … } catch (error) { … }` statement](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/try...catch) wraps a piece of code and adds exception handling.

```js
const selector = 'a selector that might be unknown or invalid';
let element;
try {
  element = document.querySelector(selector);
} catch (error) {
  console.error(error);
  // … Report the error to a logging service …
}
if (element) {
  // … Do something with element …
} else {
  // No match. This might indicate an error as well.
  // Report the error to a logging service.
}
```

The `try…catch` statement consists of two main parts. The first part is the `try` block delimited by curly braces `{ … }`. This block contains the code that may throw an exception. The second part after the keyword `catch` consists of a variable name in parentheses, `(error)`, and the another code block in curly braces `{ … }`. This block is executed when an exception is thrown in the `try` block. It can access the error object using the name in the parentheses, `error` in the example.

Normally, an exception stops the execution of the current function call stack. When the source of the exception is wrapped in `try…catch`, only the execution of the `try` block is stopped. Using error handling, the program is able to recover from the exception. The example above catches exceptions caused by `querySelector` and reports them.

After executing the `catch (…) {…}` block, the JavaScript engine continues to run the code after the `try…catch` statement. There is an `if` statement with a truthy test on `element`. This covers two cases: `querySelector` returned `null` or threw an exception. If `querySelector` returned `null`, `element` is falsy. If `querySelector` threw an error, the assignment `element = …` never happened. Therefore `element` is `undefined`, also falsy.

`try…catch` is particularly useful when it wraps a small piece code that is likely to throw an error. Wrap an API call in `try…catch` when the API specification states that the call may throw exceptions.

`try…catch` is often misused by placing a large amount of code in the `try { … }` block. Often the `catch (…) {…}` block is left empty. This is not error handling, it is error suppression. It may be necessary in some cases, but `try…catch` is most useful for catching specific exceptions.

### Programmatic exceptions

We’ve touched programmatic exceptions briefly in [“fail fast” assertions](#failing-fast). Let us have a deeper look at them.

Typically we take great efforts to avoid or catch exceptions during JavaScript runtime. Why should we deliberately cause exceptions?

Exceptions aren’t inherently good or bad. They are simply messages stating that something went wrong during execution. These messages can be very helpful given someone is listening to them and takes action.

In the `querySelector` example above, `querySelector` uses two ways to send messages to the caller: A return value or an exception. In our own code, we can use the same pattern.

Here is our “fail fast” example again, a function that returns a number or throws a `TypeError` if it cannot produce a number:

```js
function sum(a, b) {
  if (!(typeof a === 'number' && !isNaN(a) &&
    typeof b === 'number' && !isNaN(b))) {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

The `throw` statement allows to throw an exception programmatically. It expects an arbitrary value after the `throw` keyword, but [Error objects](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Error) and their subtypes are most useful.

The example creates a new `TypeError` instance. Every Error should have a meaningful message describing the problem. The message is a string that is passed to the Error constructor.

First, a programmatic exception is a message to the developer calling the code. The `sum` function says: “This function needs two numbers in order to work correctly! It does not deal with other types. For reliability, this function does not perform implicit type conversion. Please fix your code to make sure only numbers are passed, before this small error grows to a big one.”

This message is only effective if it reaches the developer. When the exception is thrown in production, then it should be [reported and logged](#error-logging) so the developer gets the message as soon as possible.

Second, a programmatic exception is a message to the calling code, similar to the return value of the function. We’ve seen this in the `querySelector` example above. The caller should catch the exception and handle it appropriately. For this purpose, the error object holds a type, a message, the source code position it originates from, a stack trace and possibly more information on the incident.

### Encapsulated code

On a typical page, JavaScript code of different origin is executed: libraries, custom application code, advertising scripts, third-party widgets, web analytics, media players, etc. All these scripts need to be encapsulated to play together nicely and to not interfere with each other.

As we have learned, all scripts [share the same global scope](#conflicting-scripts). Using only few global names helps to avoid conflict.

Every declared name in JavaScript belongs to a certain scope. There are three important types of scope in JavaScript, from big to small:

1. Global scope
2. Function scope
3. Block scope

The scope of a name should be as small as possible.

If applicable, use [`let`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/let) and [`const`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/const) from ECMAScript 6 to declare variables and constants, respectively. The scope of these names is the current block delimited by curly braces `{…}`. The name is available from inside the block, but not from outside.

Such blocks are created by functions, `if` statements, `for` and `while` loops, among others. Here is an example of using `let` in a `for` loop:

```js
for (let i = 0; i < 10; i++) {
  console.log(i); // Outputs 0, 1, …
}
console.log(i); // ReferenceError: i is not defined
```

If `let` and `const` are not available, declare variables with [`var`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/var) inside of functions. The scope of these variables is the current function.

```js
function createLink(title, url) {
  var link = document.createElement('a');
  link.href = url;
  var text = document.createTextNode(title);
  link.appendChild(text)
  return link;
}
document.body.appendChild(
  createLink('Cinnamon rolls', 'https://cinnamon.example.org')
);
```

The `createLink` function in the example declares two variables within the function scope, `link` and `text`. In addition, it accepts two parameters, `title` and `url`. All four names are bound to the function scope and are not available from outside.

Every script declares some variables, constants, functions and classes, and does some initialization. The first thing a script should do is to create a scope for these names. Creating a wrapper function works, but it needs to be declared with a name:

```js
function init() {
  // Safely declare your names inside this function.
  var variable1 = 1;
  let variable2 = 2;
  const constant = 3;
  function someFunction() {}
  class SomeClass {}
}
init();
```

The global name `init` will likely clash with other scripts. We could try to find a more unique name like `betaritKrimsBlawernfoth` or `f8c3f9a214cf093ae`, but it is possible to use an anonymous function instead.

The best practice is to create an [Immediately-Invoked Function Expression (IIFE)](http://benalman.com/news/2010/11/immediately-invoked-function-expression/). This sounds more intimidating than it actually is.

```js
(function () {
  // Safely declare your names inside this function.
  var variable1 = 1;
  let variable2 = 2;
  const constant = 3;
  function someFunction() {}
  class SomeClass {}
})();
```

At the heart of this pattern, there is an anonymous function `function () {…}`. This is a function *expression* that simply creates a function and returns it as a value, in contrast to a function *declaration* that creates a function and inevitably binds it to a name.

The braces around the anonymous function, `( function() {…} )`,  allow the parser to recognize the function expression correctly. Finally, the braces at the end `()` call the function immediately. That is why it is called immediately-invoked function expression.

With ECMAScript 6 (2015), creating a private scope became much easier. You can simply use curly braces to create a block:

```js
{
  // Safely declare your names inside this function.
  var variable1 = 1;
  let variable2 = 2;
  const constant = 3;
  function someFunction() {}
  class SomeClass {}
}
```

ECMAScript 6 also introduced modules to solve the problem of public and private scopes as well as script dependencies once and for all. Module code always exists in its own scope. If it wants to access other scripts, it needs to `import` them explicitly. If it wants to make a value available to other scripts, it needs to `export` them explicitly. This is a better solution than letting scripts communicate via the global object.

Read more about [the background and the usage of modules](http://exploringjs.com/es6/ch_modules.html). You can also [use modules directly in the browser](https://jakearchibald.com/2017/es-modules-in-browsers/).

### The Strict Mode

ECMAScript 5 (2009) started to deprecate error-prone programming practices. But it could not just change code semantics from one day to the next. This would have broken most existing code.

In order to maintain backwards compatibility, ECMAScript 5 introduces the <dfn>Strict Mode</dfn> as an opt-in feature. In Strict Mode, common pitfalls are removed from the language or throw visible exceptions. Previously, several programming mistakes and bogus code were ignored silently. The Strict Mode turns these mistakes into visible errors&thinsp;—&thinsp;see [failing fast](#failing-fast).

Enable the Strict Mode by placing a marker at the beginning of a script:

```js
'use strict';
window.alert('This code is evaluated in Strict Mode! Be careful!');
```

Or at the beginning of a function:

```js
function strictFunction() {
  'use strict';
  window.alert('This function is evaluated in Strict Mode! Be careful!');
}
```

Syntax-wise, `'use strict';` is simply an expression statement with a string literal. This code does not do anything when evaluated. It is a meaningful marker for browsers that support ECMAScript 5, and innocuous code for browsers that do not.

Enabling the Strict Mode for a script or a function is contagious. All code syntactically nested also switches to Strict Mode. For example:

```js
window.alert('Non-strict mode!');

function strictFunction() {
  'use strict';

  window.alert('Strict Mode!');
  nestedFunction();

  function nestedFunction() {
    window.alert('Strict Mode as well!');
  }
}
```

The Strict Mode changes a lot of small things that you can [read about elsewhere](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode). A big thing is the handling of variable assignments in functions.

Consider this function:

<div class="erroneous" markdown="1">
```js
function sloppyFunction() {
  name = 'Alice';
  window.alert(name);
}
```
</div>

In non-strict mode, the assignment to `name` implicitly creates a global variable, `window.name`. Coincidentally, [window.name](https://developer.mozilla.org/en-US/docs/Web/API/Window/name) already exists and has a special meaning.

`name` is not supposed to be a global variable here, but a local variable in the scope of `sloppyFunction`. We forgot to add `var`, `let` or `const` before the assignment.

In Strict Mode, this mistake does not go unnoticed. It leads to a [ReferenceError](#reference-errors): “assignment to undeclared variable name”.

Here is the fixed code that is also valid in Strict Mode:

```js
function strictFunction() {
  'use strict';
  var name = 'Alice';
  window.alert(name);
}
```

Today, the Strict Mode should be used everywhere unless there are particular reasons against it.

Newer ECMAScript versions make the Strict Mode the default when using new features. For example, ECMAScript 6 module code is always evaluated in Strict Mode. Code inside of ECMAScript 6 classes is also Strict Mode per default.

Most likely, if you are using modules or classes, you are already using the Strict Mode. If not, I highly recommend to use the `'use strict';` marker in your scripts to enable the Strict Mode.

### Promises

A Promise is an object that wraps a value that will possibly be available in the future. This value is typically the result of an asynchronous operation, like an HTTP request to the server.

“Asynchronous” means the operation takes some time during which the JavaScript engine does not halt, but continues execution.

A Promise allows to register observer functions for the success and error cases. In the success case, the Promise is “fulfilled” with a value. In the error case, the Promise is “rejected” with an error object.

For example, the `fetch()` function of the Fetch API returns a Promise. The promised value is a response object that contains information about the HTTP server response. If the request could not be sent, for example due to a network error, the Promise is rejected with an error.

Here is a simple example:

```js
fetch('/data.json')
  .then(
    // Success handler
    function(response) {
      console.log('Response:', response.status);
    },
    // Error handler
    function(error) {
      console.error(error);
    }
  );
```

This example makes a GET request to <var>/data.json</var>. In the success case, it prints the response status code. In the error case, it prints the rejection reason.

Every Promise has a method called `then()`. The first parameter to `then()` is the success handler, also called `onFulfilled`. The second parameter is the error handler, also called `onRejected`.

So far, Promises look like yet another solution for accessing an asynchronous value. Before Promises existed, callbacks were used for this purpose: two callbacks for the success and error cases or one callback that receives the value or an error.

But this is [not the point of Promises](https://blog.domenic.me/youre-missing-the-point-of-promises/). They are not another syntax for writing callbacks. Promises are a tool to write more robust JavaScript. They were designed to make asynchronous programming as easy and as powerful as synchronous programming.

Promises wrap the value of an asynchronous operation so that it can be passed around. A Promise provides a simple yet powerful interface for working with the result. Thanks to this uniform interface, asynchronous values can be combined easily. For example, you can wait for several operations to finish and then work with all values.

Processing one Promise may yield a new Promise. This way, synchronous and asynchronous operations can be *chained*.

With Promises, you can set up a proper error handling logic: You can stop the chain if an error occurs. You can recover from an error and continue with the execution of the chain. You can [throw your own errors](#programmatic-exceptions). You can handle a single error immediately and/or handle several errors at the end of the chain.

In practice, every call to `then()` returns a new Promise. The `onFulfilled` and `onRejected` handlers determine what the result of the new Promise is. They may return a normal value to fulfill the new Promise or throw an exception to reject it. They may also return a Promise, which becomes the new Promise.

This still might sound theoretical to you. But when working with the Promise-based Fetch API, chaining Promises is common. Here is a typical chain:

```js
fetch('/data.json')
  .then(
    // The promise is fulfilled with the response object.
    function(response) {
      // If the response was not successful,
      // stop the chain by throwing an error.
      if (!response.ok) {
        throw new Error(
          `${response.status} ${response.statusText}`
        );
      }
      // Otherwise parse the response body as JSON.
      // This returns a new Promise.
      return response.json();
    }
  )
  // Continue with the Promise returned by response.json().
  .then(
    function(data) {
      // data is now a JavaScript object.
      // Do something with it.
      console.log('Success!', data);
    }
  )
  // Handle all potential errors that happened above.
  // Only pass an error handler, no success handler.
  // This is equivalent to .catch(function(…) {…}).
  .then(
    null,
    function(error) {
      console.error('Error!', error);
      // Report the error to a logging service,
      // activate a fallback or send the request again.
    }
  );
```

The example chains several operations: Making the HTTP request, checking the response status, parsing the response as JSON and finally working with the data. It handles both the success and error cases.

Understanding the example requires deep knowledge of Promises and the Fetch API. As a start, you do not need to understand every bit, only the overall structure. You can [learn more about Promise chaining elsewhere](https://javascript.info/promise-chaining).

Promises are part of ECMAScript 6 (2015). In older browsers that do not support Promises, a [polyfill](https://github.com/stefanpenner/es6-promise) can retrofit the Promise API.

The point of Promises is the ability to work with asynchronous values as if they were synchronous values. ECMAScript 8 (2017) introduced a new way to work with Promises that closely resembles synchronous code.

A function can be marked as asynchronous with the [`async` keyword](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/async_function). Such a function returns a Promise. Inside the function, you can use the [`await` keyword](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/await) in front of functions calls that return promises. The function call directly returns the unwrapped value instead of the Promise wrapper.

Here is the above example with `async` and `await`:

```js
async function fetchData() {
  try {
    const response = await fetch('/data.json')
    if (!response.ok) {
      throw new Error(`${response.status} ${response.statusText}`);
    }
    const data = await response.json();
    console.log('Success!', data);
    return data;
  } catch(error) {
    console.error('Error!', error);
  }
}
fetchData();
```

This is much easier to write and to read! Although we are working with Promises all over, we do not see them. We directly work with values and handle exceptions with [try…catch](#handling-exceptions-with-trycatch), just like in synchronous code.

Promises are an essential tool to [apply JavaScript enhancements safely](/javascript-failure/#chaining-enhancements-with-promises) and deal with failure properly. But asynchronous programming with Promises is complex and hard to learn. It comes with several pitfalls that you will run into. `async`/`await` introduce a friendlier syntax to express a sequence of operations, but the logical complexity remains.

My recommendation is to learn Promises step by step. Use Promise-based APIs like Fetch and write simple Promise chains. Learn how to handle errors in the chain properly. Then build your own Promises-based APIs and express your application flows with Promises.

### Abstraction libraries

[jQuery](https://jquery.com/), [Underscore](http://underscorejs.org/), [Lodash](https://lodash.com/) and [Moment.js](https://momentjs.com/) are probably the most used client-side JavaScript libraries. They all emerged for two main reasons:

1. The JavaScript APIs available in the browser were unhandy, clumsy and lacked essential features or expressiveness.
2. The web lacked technical standards that browser vendors agreed upon. Or old browsers that lacked support for essential web standards still dominated the market.

A main goal of client-side JavaScript libraries is to even out differences between browsers. Back in the beginnings of the web, these differences were enormous. Today, most JavaScript APIs are well-specified and browser vendors care for interoperability. Still, small differences remain. Even after browsers have fixed bugs in their implementations, old browser versions do not simply vanish into thin air but delight us for years.

Every year or so, someone writes an article titled “You do not need jQuery” or “You do not need Lodash”. These articles point out that the native APIs have been improved since or old browsers that prevented the usage of native APIs have died out. That is right, but they often miss the other main goal of libraries.

Libraries provide a concise and consistent API that is an abstraction of several inconsistent browser APIs. For example, using jQuery for traversing and manipulating the DOM, handling events and animation is still more pleasant than using the respective native APIs. This is because jQuery provides an unbeaten abstraction: A list type containing DOM nodes with powerful map, reduce and filter operations. Also, jQuery still deals with browser inconsistencies and tries to level them.

For the sake of robustness, use well-tested, rock-solid libraries. The time, resources and brain power that went into the creation and maintenance of such libraries do not compare to your own solutions.

### Polyfills

Polyfills are an important tool for writing robust, cross-browser JavaScript. A polyfill is a script that fixes holes in the browser’s web standard support in order to create a level playing field for other scripts. It implements a particular JavaScript API in case the browser does not support it natively yet.

Polyfills are like libraries, but instead of defining their own API, they implement an established or emerging web standard. The benefit for the developer is that after loading the polyfill, all browsers provide the same feature with the same standard API.

For example, some browsers do not support the Fetch API. A [polyfill for the Fetch API](https://github.com/github/fetch) implements the Fetch specification using older existing techniques like `XMLHttpRequest`. Then it fills the browser’s holes.

A polyfill for the Fetch API may have the following structure:

```js
if (!window.fetch) {
  window.fetch = function() {
    /* … Polyfill code … */
  };
}
```

If the browser does not support the Fetch API, including `window.fetch`, the code fills the hole by defining `window.fetch`.

It is worth noting that not all APIs can be fully polyfilled. Some APIs include new and special behavior that cannot be implemented by standard ECMAScript means.

For example, if the browser does not provide access to live audio and video streams from the device, no JavaScript polyfill can implement this feature. In such cases, you need to use Graceful Degradation or [Progressive Enhancement](#progressive-enhancement) to come up with an alternative.

### Linters

A linter is a program that checks code for potential errors and compatibility issues. Some linters also enforce style guide rules, like code formatting and naming conventions. Typically a linter has a command line interface, but it can also be integrated in most editors and build tools.

When developing JavaScript, a linter is an essential tool for writing robust code. If you take one thing away from this guide, let it be the use of a linter. It will point out most issues that are described here and much more.

The most flexible and powerful JavaScript linter is **[ESlint](https://eslint.org/)**. It is written in JavaScript and runs on Node.js.

ESlint consists of an ECMAScript [parser](#parsing-errors) and [numerous rules](https://eslint.org/docs/rules/) that examine the Abstract Syntax Tree (AST). The rules search for pitfalls in your code, for deprecated language idioms, for inconsistencies and code style violations.

When a rule finds a violation, it outputs a warning or an error you can see on the command line or in your editor. Some rules, especially stylistic rules, may automatically fix the problem by changing the source file.

In addition to the built-in rules, ESlint is fully extensible via plugins. A lot of libraries and ecosystems have created ESlint plugins that check for the respective best practices. For example, there are [rules for writing React.js code](https://github.com/yannickcr/eslint-plugin-react) and [rules that check React/JSX code for accessibility issues](https://github.com/evcohen/eslint-plugin-jsx-a11y).

Since more and more markup and style logic on the web is expressed in JavaScript, it is crucial to check the JavaScript code for well-established best practices from these domains as well.

Before ESlint existed, JavaScript best practices were described in books, blog posts, talks and project style guides. But not all of them could be checked and enforced automatically. ESlint became a tool for documenting best practices as well as checking them.

ESlint continues to shape the way people write JavaScript. Large projects and corporations are sharing their ESlint configurations. For example, the [AirBnB style guide](https://github.com/airbnb/javascript) and the [“Standard” style](https://standardjs.com/) are popular style guides based on ESlint.

ESlint is a safe and easy way to explore different programming paradigms possible with JavaScript. With ESlint, it is possible to impose strict rules on your JavaScript usage. For example, [ESLint rules for functional programming](https://github.com/jfmengels/eslint-plugin-fp) disallow all JavaScript features that contradict the concepts of pure functional programming.

Especially for beginners, the ESlint ecosystem may be confusing. Hundreds of rules with configuration options, hundreds of plugins and conflicting guidelines. There are few things people quarrel about more than the “right" programming style.

Fortunately, ESlint and most ESlint plugins come with a recommended configuration. Start with this configuration to get an impression how ESlint works, then adapt your ESlint configuration to reflect your or your team’s preferences.

### The Babel compiler

Every year, a new ECMAScript version is released. Some versions introduce new syntax. For example, ECMAScript 6 (2015) introduced a bunch of new syntax features. Here is a small selection:

```js
let a = 1;
const b = 0b1100101;
const c = `Hello ${a}`;
const func = (x) => x * 2;
class Cat {}
```

The ECMAScript syntax is not forward-compatible. When new syntax is added, engines that do not support the extension cannot parse the code. They throw a [SyntaxError](#parsing-errors) and do not execute the code.

There are still browsers around that do not support the ECMAScript 6 syntax. Does this mean we cannot use ECMAScript 6 until all these browsers become extinct?

We can use the newest language features today, but we need to translate the code to an older version of ECMAScript before shipping it to the browsers.

The [Babel compiler](https://babeljs.io/) makes this possible. It turns new syntax into an older, more compatible syntax. For example, Babel may translate ECMAScript 6 syntax to equivalent ECMAScript 5 code. A compiler that is in fact a translator is called <dfn>transpiler</dfn>, because nerds love blending words.

When using Babel, there is a mandatory compilation step between hand-written code and the code delivered to browsers. Babel provides a command line tool for translating JavaScript files. It also [integrates well](https://babeljs.io/docs/setup/) with popular build tools like [Grunt](https://gruntjs.com), [Gulp](https://gulpjs.com), [Browserify](http://browserify.org) and [Webpack](https://webpack.js.org).

Babel is not just a tool to transform code written in a newer ECMAScript version into an older version. Babel is a plugin-based parser and translation framework that may support arbitrary syntax extensions.

As you can imagine, this is both powerful and dangerous. On the one hand, people use Babel to prototype and test new [ECMAScript language proposals](https://github.com/tc39/proposals). On the other hand, people use Babel to add syntax that most likely will not be standardized, like [JSX](https://reactjs.org/docs/introducing-jsx.html).

This leads to a situation where large codebases are not valid ECMAScript but full of syntax extensions. Some of them are on the standards track, some are not. Such code can only be parsed by Babel with certain plugins. Like in the biblical story about the [Tower of Babel](https://en.wikipedia.org/wiki/Tower_of_Babel), language confusion prevents people from working together.

The safest approach is to write interoperable code conforming to a released ECMAScript specification and compile it to an older version using Babel.

A core assumption of compiling new syntax into old syntax is that a fully equivalent old syntax exists at all. This is not always the case. Some new ECMAScript 6 features cannot be fully translated into ECMAScript 5. Babel does its best to reproduce the semantics, but keep in mind that some detailed behavior cannot be reproduced.

These difference are not noticeable if you ship the same ECMAScript 5 code to all browsers. But in the future it makes sense to ship a smaller build with ECMAScript 6 to the browsers that support it.

Babel primarily deals with syntax extensions, not with extensions to the standard library, the ECMAScript core objects. For example, if you write:

```js
const pElements = Array.from(document.querySelectorAll('p'));
```

Babel will it translate to:

```js
'use strict';
var pElements = Array.from(document.querySelectorAll('p'));
```

Still, this will not work in a browser that only supports ECMAScript 5 because `Array.from()` is first specified in ECMAScript 6. Babel does not translate the function call. To use new ECMAScript objects and methods, you can use a [polyfill](#polyfills). The Babel project provides a [polyfill based on core-js](https://babeljs.io/docs/usage/polyfill/).

### Languages that compile to JavaScript

From a language design point of view, JavaScript has severe shortcomings and pitfalls. The technical term is “footgun”: A technology that makes it easy to shoot yourself in the foot.

JavaScript is weakly and dynamically typed. It borrows ideas from multiple paradigms and fuses them into one language: imperative, object-oriented and functional programming.

Some people make this imprecision and inconsistency responsible for many JavaScript pitfalls. That is true to some regard. JavaScript was not originally designed for writing large web applications or user interfaces. Recent ECMAScript standards introduced more strictness and consistency to improve [programming in the large](https://en.wikipedia.org/wiki/Programming_in_the_large_and_programming_in_the_small).

When it is so hard to write robust JavaScript, why not use another programming language?

The browsers only have a JavaScript engine built in, so we cannot just run, say, PHP in the browser. But other languages can be translated into JavaScript, like an Arabic text can be translated into English.

Typically, programming languages are compiled into machine code for a specific processor architecture or into bytecode for a virtual machine. It is also possible to compile them into another language, like JavaScript. As we’ve learned already, such a translator-compiler is called transpiler.

Transpilers allow to write front-end code in an arbitrary language. Someone has to develop the transpiler, of course. This opens up tremendous possibilities. We can use strictly-typed languages, or purely functional languages, or languages designed for the purpose of building user interfaces.

In fact, there are numerous languages that compile to JavaScript. They have different levels of familiarity with JavaScript:

- Some languages are strict subsets of JavaScript, meaning they resemble JavaScript in all points but remove some problematic aspects.
- Some languages are strict supersets of JavaScript, meaning they resemble JavaScript in all points and add additional features.
- Some languages have a different, incompatible syntax that resembles JavaScript.
- Some languages have a different, incompatible syntax that does not resemble JavaScript.

Let us have a look at a small selection of languages that compile to JavaScript.

#### CoffeeScript

[CoffeeScript](http://coffeescript.org/) was one of the first widely-used languages that compile to JavaScript. Its syntax is very familiar to JavaScript. CoffeeScript’s motto is “It is just JavaScript”. It mostly provides “syntactic sugar” that makes writing common JavaScript idioms easier.

In JavaScript, curly braces `{ … }` are used to delimit functions and blocks. In CoffeeScript, whitespace like line breaks and spaces is used for that purpose. The mapping from CoffeeScript to JavaScript is direct. The compiled JavaScript code closely resembles the CoffeeScript source.

Here is the `sum` function in CoffeeScript:

```coffeescript
sum = (a, b) =>
  a + b
```

When CoffeeScript version 1.0 was released on 2010, it made JavaScript programming more robust since it eliminated several common pitfalls. The JavaScript produced by the CoffeeScript compiler implemented best practices and was less error-prone.

CoffeeScript’s language design and its brevity influenced the work on the ECMAScript standard. ECMAScript 6 and [Babel](#the-babel-compiler) address several language shortcomings that existed when CoffeeScript was created. So today CoffeeScript is used less then it was several years ago, but it is still an influential language.

#### TypeScript

[TypeScript](https://www.typescriptlang.org/) is an ambitious effort by Microsoft to create a language that compiles to JavaScript by extending standard ECMAScript.

As the name suggests, TypeScript adds static typing to JavaScript. It comes with well-known ways to define types, like classes, interfaces, unions and generics.

TypeScript is a strict superset of ECMAScript. All valid ECMAScript code is also valid TypeScript, but TypeScript code with type annotations is usually not valid ECMAScript.

This design decision makes learning and adopting TypeScript easier. You do not have to forget everything you know about JavaScript and learn a new language, you focus on learning additional TypeScript features.

This is how the `sum` function with explicit type annotations may look like in TypeScript:

```typescript
function sum(a: number, b: number): number {
  return a + b;
}
```

Do you see the type information added to the parameters `a` and `b` as well as the return value?

In plain JavaScript, we need to add [type assertions](#type-checks-with-typeof) to make sure that `sum` is only called with two numbers. In TypeScript, the code simply does not compile when `sum` is called somewhere with non-numbers. By adding type information, the TypeScript compiler can analyze the code and check if the actual type of a value matches the expected type.

Using a language with strong, static typing like TypeScript has these main benefits:

- With proper typings in place, the compiler catches a certain class of bugs early. It is harder to write code that fails for simple reasons. Runtime errors like TypeError and ReferenceError are almost eliminated.
- Static typing forces you to handle cases that are logically possible, even though they are rare in practice. Without type checking, someone has to write [automated tests](#automated-testing) for the edge cases, otherwise the errors are not caught.
- Static typing makes you think twice about the structure of your data, about object modeling and API design. In plain JavaScript code, it is easy to create, mix and mutate complex objects. This makes it hard to see which properties are available and which types they have. In TypeScript, each function has a well-defined signature. The structure of all objects passed around in the code is described by classes or interfaces.
- Strong typing means there is no implicit type conversion. Explicit code is simpler code.
- Editors with strong TypeScript support, like Visual Studio Code, make programming a bliss. They have productivity features known from fully fledged <abbr title="Integrated development environments">IDEs</abbr>. Writing, navigating and refactoring code is much easier since the editor understands the structure of the program, knows all names and types.

But what are the downsides?

- Although TypeScript is a superset of ECMAScript, learning TypeScript thoroughly takes a lot of effort. Especially for people who have not worked with statically typed languages before, the type system is fundamentally new and hard to grasp.
- Turning JavaScript into a type-safe language is not easy. The TypeScript compiler knows the semantics of all ECMAScript operators and built-in types. In addition, there are [type definitions for browser APIs and libraries](http://definitelytyped.org/). Since the code still runs in loosely-typed JavaScript land, the type definitions do not always match the reality.
- TypeScript may give a false sense of safety. TypeScript aims for type safety on *compile time* given that all code has correct type definitions. After the translation to JavaScript, all type information is discarded. Dynamic code can still create errors during *runtime*. So runtime checks are still necessary and valuable.
- Like other compile-to-JavaScript languages, writing TypeScript requires setting up the compiler. To enjoy all benefits, you need to use a specific editor and [linter](https://github.com/palantir/tslint).

In conclusion, TypeScript is a valuable tool to make JavaScript programming more robust.

#### ClojureScript

[ClojureScript](https://clojurescript.org/) is a compile-to-JavaScript language derived from [Clojure](https://clojure.org/), an independent, well-established language. It embraces functional programming with optional type safety. It has a Lisp-like syntax that follows a “code is data” philosophy. Clojure code is typically compiled to bytecode running on the Java virtual machine.

Clojure and ClojureScript share little resemblance with JavaScript and the ties to the JavaScript ecosystem are loose. Both the unfamiliar Lisp-like syntax and the functional programming style may put off JavaScript developers.

Here is how the contrived `sum` function looks in ClojureScript:

```clojure
(defn sum [a, b]
  (+ a b))
```

This is how to call the function and output the result using JavaScript’s premium debugging tool, `console.log()`:

```clojure
(js/console.log (sum 1 2))
```

The core philosophy of Clojure is that it aims to be [*simple* in the first place and *easy* in the second place](https://github.com/matthiasn/talk-transcripts/blob/master/Hickey_Rich/SimpleMadeEasy.md). Let us unravel that profound sentence.

“Simple” is the opposite of complex. “Simple” means having only one purpose, doing one thing. “Simple” means unambiguous and logically clear.

“Easy” means familiar, easy to reach. “Easy” is the opposite of “hard”.

Clojure tries to use “simple” concepts to build large applications. In other words, Clojure tries everything not to be a “footgun”.

JavaScript in contrast is a melting pot of conflated features. New syntax and semantics are added with each version. JavaScript is “easy”, because its idioms are familiar to developers from different backgrounds.

ClojureScript and functional programming in general keep influencing the way people write JavaScript and the way ECMAScript is advanced. In particular, two basic concepts: <dfn>pure functions</dfn> and <dfn>immutable values</dfn>.

In short, a function is <dfn>pure</dfn> when it is free of <dfn>side effects</dfn>. Such a function takes some input values as arguments and computes a new value. The new value becomes the return value.

A pure function always produces the same output given the same input. There is no internal state. The function does not change its input values. It does not do anything besides computing the return value. It does not “change the world”. So it is always safe to call a pure function: It may take some computation time, but it does not change the state of your application.

It turned out that breaking down the logic of an application into pure functions makes the whole application more robust. Pure functions are “simple”, they do only one thing. They are easy to reason about and easy to test automatically. You can simply pass different input values and check the return value.

Here is an example of an *impure* function in Javascript:

```js
const myCats = [];

function adoptCat(cat) {
  // Mutate the outer value myCats
  myCats.push(cat);
  // Mutate an input value
  cat.owner = 'Alice';
  // Output as a side effect, no return value
  console.log('Cat adopted!', cat);
}

adoptCat({ name: 'Cheshire Cat' });
```

Here is an example of a *pure* function in JavaScript:

```js
function adoptCat(cats, cat) {
  // Make a copy of the cat object in order to augment it
  const adoptedCat = { name: cat.name, owner: 'Alice' };
  // Make a copy of the cats array in order to augment it
  return cats.concat(adoptedCat);
}

const myOldCats = [];
const myNewCats = adoptCat(myOldCats, { name: 'Cheshire Cat' });
console.log('Cat adopted!', myNewCats[myNewCats.length - 1]);
```

The rule that pure functions do not mutate their input values is enforced in functional programming languages like Clojure. Variable bindings as well as values are typically *immutable*: You can read them to create new values, but you cannot change them in-place.

#### Elm

Elm is a functional programming language that compiles to JavaScript. In contrast to Clojure/ClojureScript it was specifically designed as a compile-to-JavaScript language. It is not a general-purpose programming language, it is a toolkit for developing client-side web applications.

The syntax of Elm does not resemble JavaScript, but it is quite approachable. Here is how the familiar `sum` function looks like in Elm with explicit type annotations:

```elm
sum : Float -> Float -> Float
sum x y =
  x + y
```

This code calls `sum` and outputs the result to the HTML document:

```elm
main =
  text (
    toString (sum 1 2)
  )
```

Elm’s main goal is to prevent runtime exceptions. In this guide, we’ve learned how hard that is in JavaScript when done manually. Elm’s idea is to free the developer from this burden. If the program may throw exceptions during runtime, it simply should not compile. The Elm compiler is known for its strictness as well as for friendly error messages that help you to make the code compile.

In Elm, operations still may fail. Like other functional languages, Elm has built-in types for wrapping uncertain values (`Maybe`: `Nothing` & `Just`) and operations that produce a value or an error (`Result`: `Ok` & `Error`). When working with potential values, the success and error cases must be handled explicitly.

Elm is designed with static types from the ground up. Static typing feels natural since Elm has strong type inference. It deduces the types of values so you do not have to add type annotations in many places.

TypeScript has type inference as well, but TypeScript imposes static typing on a dynamic language and ecosystem. Elm makes a clear cut.

The real novelty of Elm is the “Elm Architecture”. As mentioned earlier, Elm is not a general-purpose language, but designed for building user interfaces running in the browser.

Typically, such interfaces are built using patterns like [Model View Controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) (MVC) or [Model View ViewModel](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93viewmodel) (MVVM). These patterns originate from object-oriented languages that mix logic and mutable state. They are not applicable to functional languages with immutable values.

In Elm, a dynamic user interface consists of three parts:

- <dfn>Model</dfn>: A type describing the state of the application, as well as the initial value. This is where all work data is stored. There is no logic here.
- <dfn>Update</dfn>: A pure function that takes a message and the existing model, processes the message and returns a new model. This is where all state changes happen, but in an immutable way.
- <dfn>View</dfn>: A pure function that takes the model and returns the description of an HTML element tree. This is similar to a declarative HTML template. The view may embed information from the model in the HTML, for rendering data, and may register messages as event handlers, for adding interactivity.

The update cycle in Elm looks like this:

1. On user input, a message is sent.
2. The `update` function is called automatically. It may react to the message and may return a new, updated state.
3. The `view` function is called automatically with the updated state. It generates a new HTML element tree.
4. Using a technique called Virtual DOM diffing, the actual DOM is updated.

This concept is radically simple and radically different from classical UI patterns. It was later dubbed <dfn>uni-directional data flow</dfn> to contrast it with bi-directional model-view binding.

In additional to synchronous model updates, messages can have asynchronous effects. The `update` function can return commands that trigger new messages eventually, like sending HTTP requests. The application may declare subscriptions for listening to input streams like WebSockets.

Elm exists in a niche, but its brilliant concepts have been widely adopted in the larger JavaScript ecosystem. Elm influenced [React](https://reactjs.org/), [Flux](https://facebook.github.io/flux/), [Redux](https://redux.js.org/) and [NgRx](https://github.com/ngrx/platform) as well as several side-effect solutions for Redux.

Even if you do not choose to write Elm over plain JavaScript, there is much to learn from Elm regarding robust programming.

### Error logging

Despite all precautions, with extensive [testing](#automated-testing) in place, errors will happen in production when diverse users with diverse browsers and devices are using your site.

In particular, JavaScript exceptions will happen in production. We’ve learned that exceptions are helpful messages about problems in your code or your larger infrastructure&thinsp;—&thinsp;as long as you receive these messages and act upon them.

Therefore, sending information about exceptions to you, the developer, is vital for every site that relies on JavaScript.

The standard approach is to monitor all exceptions on a page and to handle them centrally, for example using [window.onerror](https://developer.mozilla.org/en-US/docs/Web/API/GlobalEventHandlers/onerror). Then gather a bunch of context information and send an incident report to a log server. That server stores all reports, makes them accessible using an interface and probably sends an email to the developer.

Here is a simple global error reporter:

```js
window.onerror = function(message, file, line, column, error) {
  var errorToReport = {
    type: error ? error.type : '',
    message: message,
    file: file,
    line: line,
    column: column,
    stack: error ? error.stack : '',
    userAgent: navigator.userAgent,
    href: location.href
  };
  var url = '/error-reporting?error=' +
    JSON.stringify(errorToReport);
  var image = new Image();
  image.src = url;
};
```

This code sends a report to the address `/error-reporting` using a GET request.

The example above is not enough. It is not that easy to compile a meaningful, cross-browser report from an exception. Tools like [TraceKit](https://github.com/csnover/TraceKit) and [StackTrace.js](https://www.stacktracejs.com/) help to extract meaning from exceptions.

There are [several hosted services](https://github.com/cheeaun/javascript-error-logging) that provide such error reporting scripts and the server-side monitoring and data processing.

### Manual testing

Once a feature of a website is implemented, it needs to be tested manually. The first tester is typically the developer, switching between code editor and browser, adding logic and making the necessary input to test the logic. Before committing the code, there is probably a final test.

These ad hoc tests do not scale. They are not exhaustive, not documented, not repeatable and they do not catch regressions. A regression is when a change in one part breaks another, seemingly unrelated part. For example, improving one feature may accidentally break another feature.

More importantly, the developer perspective is not as meaningful as the user perspective.

There are several effective testing approaches in different development phases. To improve the robustness of client-side JavaScript, I find it most important to add frequent manual testing to the product development cycle.

Typically, designing an application feature produces a [user story](https://en.wikipedia.org/wiki/User_story) that describes who wants what and why: “As a new user, I want to browse restaurants nearby so I can find a cozy place for dinner”.

The next step may be to design the user interaction that achieves the goal stated in the user story. For example, the home page contains a search form and asks for the user’s location. On form submission, a list of restaurants is shown.

Every feature has a list of steps the user needs to perform. The feature and step descriptions are poured into a <dfn>test plan</dfn>.

A dedicated tester now executes all tasks that a real user needs to be able to do. The tester verifies that all features are working as described and verifies that the application reacts to input as expected. If the tester encounters a mismatch or finds anything suspicious, they report a bug.

Whenever the feature set changes or the code changes, the test plan needs to be revised and all tests need to be repeated in order to yield meaningful results.

For websites, the tester needs to execute the tasks with different browsers, devices and internet connections to catch all possible errors.

Manual testing with step-by-step instructions is probably the most time-consuming and expensive type of testing, but it is highly beneficial. Alongside with real user testing, manual testing can quickly find errors caused by client-side JavaScript.

### Automated testing

Automated testing plays a crucial role in writing robust applications. Especially when writing JavaScript code, a simple automated test already catches a lot of common bugs.

There are plenty of resources on automated testing in general and testing JavaScript in particular. In this guide, I will focus on how automated testing contributes to robust JavaScript.

In contrast to [manual testing](#manual-testing), automated testing verifies that the software meets the requirements using automated means. This typically includes writing test code or another formal proof. Once the automated test is set up, it can be executed repeatedly without human interference.

### Unit tests

A unit test is an automated test with the smallest possible scope that looks into the application code. Almost always, a unit test is code written in the same language as the implementation.

In JavaScript, the smallest reusable unit of code is a function. Other possible units are an object, a class or a module. For example, a unit test for a JavaScript function is some JavaScript code that calls the function.

For simplicity, let us write a unit test that deals with a function. But how do we write and execute a test?

There are numerous ways how to write and run unit tests in JavaScript. Popular testing frameworks include [Jasmine](https://jasmine.github.io/) and [Mocha](https://mochajs.org/). They may be combined with assertion libraries like [Chai](http://chaijs.com/) and [Unexpected](http://unexpected.js.org/). Unit tests are typically executed using test runners like [Jest](https://facebook.github.io/jest/), [Ava](https://github.com/avajs/ava) and [Karma](https://karma-runner.github.io/1.0/index.html).

In my experience, all these libraries allow to write unit tests that make JavaScript more robust. It is mostly a matter of style and taste which one to use. For the purpose of this guide, I will use the widely accepted Jasmine testing framework.

First of all, we need a function to test. Let us start with the simple, flawed `sum` function:

```js
function sum(a, b) {
  return a + b;
}
```

How would a unit test for this function look like and how does it make the code more robust?

In Jasmine, a single unit test is called test suite. It *describes* the unit under test. The suite consists of <dfn>specifications</dfn> or shortly <dfn>specs</dfn>. Each spec sets up the necessary environment, pokes the unit under test and finally makes some <dfn>expectations</dfn>, also called <dfn>assertions</dfn>. If all expectations are met, the spec passes, otherwise the spec fails.

Here is a simple Jasmine test suite for the `sum` function:

```js
describe('sum', function() {
  it('adds two numbers', function() {
    expect(sum(1, 3)).toBe(4);
  });
});
```

`describe('…', function() {…});` declares a test suite. The first argument, `'sum'` in the example, is a description of the unit under test. The function passed to `describe` contains one or more specs.

A spec is declared with `it('…', function() {…})`. The first argument, `'adds two numbers'` in the example, is the human-readable requirement. The function passed to `it` contains the actual test code.

The example above tests the `sum` function. Each spec needs to call the function with some arguments and make assertions about the return value. The example calls `sum(1, 3)` and expects the result to be 4 using Jasmine’s `expect` and `toBe` functions. As you can see, Jasmine code tries to be human-readable.

If you do not understand the details of the code above, that is fine. It is rather important to understand the structure: A unit test describes the behavior of a piece of code and thereby documents the requirements. The unit test tells you whether the implementation meets the specifications.

A specification consists of a human-readable text and an executable proof. A spec allows you to describe and verify how the code behaves in particular cases.

Unit testing makes you think about these cases in the first place, then write them down and define behavior. Does the function return the correct result when valid input is given? How does the function behave when invalid input is given? Handling these cases makes the implementation more robust.

As we’ve seen before, the simple `sum` function does not behave well when invalid input is given. Let us specify how the function *should behave* in this case. We want `sum` to throw an exception in case one argument is not a number.

Here is the respective spec:

```js
it('throws an error if one argument is not a number', function() {
  expect(function() {
    sum('1', 3);
  }).toThrow();
});
```

This spec fails when being tested against the implementation `function sum(a, b) { return a + b; }`. It is common practice to write a failing spec first. <dfn>Test-driven development</dfn> advises to first define the cases, specify the behavior and then write as little code as necessary to make the test pass.

Let us do that! Here is the `sum` function that makes the test pass:

```js
function sum(a, b) {
  if (typeof a !== 'number') {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

Wait, is not something missing there? The code only checks the `a` argument. Should we not add a check for `b` as well?

Yes, but first we write a failing spec:

```js
it('throws an error if one argument is not a number', function() {
  expect(function() { sum('1', 3);   }).toThrow();
  expect(function() { sum(1, '3');   }).toThrow();
  expect(function() { sum({}, null); }).toThrow();
});
```

Now let us change the implementation so the test passes:

```js
function sum(a, b) {
  if (!(typeof a === 'number' && typeof b === 'number')) {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

One thing is still missing: The handling of `NaN` values. Let us add a failing spec:

```js
it('throws an error if one argument is NaN', function() {
  expect(function() { sum(NaN, 3);   }).toThrow();
  expect(function() { sum(1, NaN);   }).toThrow();
  expect(function() { sum(NaN, NaN); }).toThrow();
});
```

Finally, this implementation that conforms to all specifications:

```js
function sum(a, b) {
  if (!(typeof a === 'number' && !isNaN(a) &&
    typeof b === 'number' && !isNaN(b))) {
    throw new TypeError(
      'sum(): Both arguments must be numbers. Got: "' + a + '" and "' + b + '"'
    );
  }
  return a + b;
}
```

Writing unit tests has several benefits. For one, it leads to a programming style that creates small units of code that are easy to test in isolation and have a well-defined interface. Moreover, it makes you think about robust code. By writing specs for ordinary as well as unusual conditions, by running the specs in several browsers, you put the assumptions baked into your code to the test.

In commercial web applications that make heavy use of JavaScript, every line of JavaScript code should be covered by unit tests. Tools like [Istanbul](https://istanbul.js.org/) allow to measure the test coverage.

100% test coverage means there is no logic that is not executed by unit tests. It does not necessarily mean that the logic is correct. Writing meaningful specs that reflect the actual conditions in production requires a lot of experience.

If you do not use unit testing yet, start small by writing specs for your core parts. It gives you a feeling about how testable code looks like and how to test different cases effectively.

### Integration tests

As we’ve learned, unit testing tries to focus on a small reusable unit of code and to put it through its paces. A unit test assures that a unit works well in isolation.

Such a test is precise, but it is hard to isolate a unit from the rest. For example, if a function under test calls a second function, the unit tests needs to remove and replace this dependency in order to focus on the function under test. A common technique is called <dfn>dependency injection</dfn>.

Unit tests are necessary, but not sufficient. An application is a complex combination of units. Having 100% test coverage, having passing unit tests says little about the application as a whole.

This is where <dfn>integration tests</dfn> come in. An integration test describes and verifies the behavior of several connected units. The integration test does not need to know the internals, it runs against the public interface.

For example, if a function under test calls a second function, the integration test simply lets it be. The test knows that it *integrates* all dependencies. Such a test has a larger impact and covers a lot of code. But it is hard to set up the different cases and test side effects thoroughly.

When testing JavaScript, the difference between unit tests and integration tests is subtle. Most things we’ve learned about unit tests also apply to integration tests. For example, integration tests may use the same tools like Jasmine. In practice, unit tests and integration tests are mixed in order to test a codebase precisely and extensively.

### Acceptance tests

Both unit and integration tests consist of code that checks various internal parts of the application code. Again, these tests say little about the application as a whole. The crucial question is whether the application works for the user. Is a user able to complete their tasks?

A certain class of JavaScript bugs only occurs when the code runs on the target website in a real browser. These bugs are not caught by unit or integration tests running in a cleanroom environment that bears little resemblance to the production environment.

JavaScript is error-prone because it depends on other front-end and back-end technologies. A script typically reads and changes the HTML DOM, changes CSS styles, makes HTTP requests and controls media. So when the script runs in production, it needs to work together with the HTML, CSS, other JavaScript code, server APIs and media content.

We need an automated test that checks the website as a whole. This is called <dfn>acceptance testing</dfn> or <dfn>end-to-end testing</dfn> in the web context.

An acceptance test does not tests parts of the application individually, like the front-end, back-end code or database, but the full stack. It ensures that all technologies come together to provide the desired user experience.

In particular, an acceptance test simulates a user by remotely controlling a browser. Such a test mimics the input of a user and checks the output of the website. Every test consists of step-by-step instructions like these:

1. Go to the website http://carols.example.org
2. Wait until the page is fully loaded.
3. Expect that the top-level heading reads “Christmas Carols”.
4. Focus the search field by clicking on it.
5. Enter the text “hark”.
6. Submit the form by pressing enter.
7. Wait until the next page is fully loaded.
8. Expect that the top-level heading reads “Hark! The Herald Angels Sing”.
9. Expect that the first paragraph contains “Peace on earth and mercy mild”.

An acceptance test expresses these instructions as code. Since the test interacts with the website through a browser, it can be written in any language. It does not need to be JavaScript or whatever language is used in the back-end.

Of course, you can write acceptance tests in JavaScript and run them with Node.js. Popular libraries include [Nightwatch.js](http://nightwatchjs.org/) and [WebdriverIO](http://webdriver.io/).

The technology that makes remote control of the browser possible is called [WebDriver](https://www.w3.org/TR/webdriver/). Today, all big browsers implement the WebDriver protocol. A popular server for orchestrating browsers is [Selenium](http://www.seleniumhq.org/).

Like all types of testing, acceptance tests should run on different devices and browsers for meaningful results. Commercial services like [Saucelabs](https://saucelabs.com/) and [BrowserStack](https://www.browserstack.com/) allow to run WebDriver tests against numerous devices and browsers.

### Writing less JavaScript

The role of a front-end developer is to improve the user experience with the available technologies. The developer needs to assess which interactions can and should be improved with client-side JavaScript.

JavaScript allows to build more user-friendly interfaces than HTML and CSS alone can do. It is the best technology to build excellent interactivity in the browser.

Still, JavaScript is the most brittle of all front-end web technologies. An important skill of a front-end developer is to know when *not* to solve a problem with client-side JavaScript. It is always more robust to solve a problem further down in the stack.

If all techniques and tools did not help you to write robust JavaScript, consider reducing the code complexity and the amount of code. In the last resort, reduce the usage of client-side JavaScript. Find simpler solutions that rely on HTML, CSS and server-side logic alone.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## References

- [ECMAScript® 2017 Language Specification (ECMA-262, 8th edition, June 2017)](http://www.ecma-international.org/ecma-262/8.0/)
- [JavaScript. The Core: 2nd Edition](http://dmitrysoshnikov.com/ecmascript/javascript-the-core-2nd-edition/) – Dmitry Soshnikov, 2017
- [Objektabfragen in JavaScript](https://wiki.selfhtml.org/wiki/JavaScript/Tutorials/OOP/Objektabfrage) (German) – Mathias Schäfer, 2011

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## About

Author: [Mathias Schäfer (molily)](/)

Mathias is a software developer with a focus on web development and JavaScript web applications.

Mathias is working for [9elements](https://9elements.com), a software and design agency.

Twitter: [@molily](https://twitter.com/molily)

Please send feedback and corrections to [molily@mailbox.org](mailto:molily@mailbox.org).

Thanks to Pablo Tamarit for several corrections.

License: <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike (CC BY-SA 4.0)</a>

The example code is released into the public domain. See [Unlicense](https://unlicense.org/).

<p id="cover-credits">Cover photo: <a href="https://www.flickr.com/photos/twicepix/4085401611/">Tokyo Tower by Martin Abegglen</a>. License: <a href="https://creativecommons.org/licenses/by-sa/2.0/">Creative Commons Attribution-ShareAlike 2.0 Generic (CC BY-SA 2.0)</a></p>

Published on <time datetime="2017-12-21">December 21, 2017</time>.

<p><a href="/impressum/" lang="de" hreflang="de">Impressum und Datenschutz</a></p>

</main>
</div><!-- #main-container -->

<script src="/assets/link-types.js"></script>
<script src="/assets/highlight-toc.js"></script>

{% include register-service-worker.html %}
