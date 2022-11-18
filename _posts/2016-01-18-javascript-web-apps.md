---
layout: post
title: "JavaScript web apps considered valuable"
description: "Recalling best practices for web applications that make heavy use of client-side JavaScript."
keywords: Progressive enhancement, JavaScript, web applications, single-page apps
lang: en
---

It seems to me that the JavaScript community is stuck in a time warp. We’re having the same discussions about JavaScript-driven web applications we already had in 2006, when “Ajax” appeared, and in 2012, when JavaScript “single-page apps” became popular. It’s great to continue discussions as long as we stand on the shoulders of giants and try to improve what is already the best practice.

A recent rant by Stefan Tilkov is called [“Why I hate your Single Page App”](https://medium.com/free-code-camp/why-i-hate-your-single-page-app-f08bb4ff9134). It throws the knowledge overboard that we gathered in previous discussions. It makes bold claims and generalizations about JavaScript web apps. As someone who is deeply interested in progressive enhancement, I’m disappointed to read such a poor analysis from a co-organizer of an <a href="http://enhanceconf.com/">ambitious conference on progressive enhancement</a>.

## More JavaScript web apps, less single-page apps

First of all, I think the term “single-page application” is a perpetual source of misconception that finally leads to weak criticism of the concept. I’m using the term “JavaScript web apps” here to describe web applications that use client-side JavaScript extensively, like those typically made with Ember, React or Angular. In my last post, I wrote a [short definition of “single-page application”](/single-page-apps/#spa-working-definition), but I should have used the term “JavaScript web application” instead:

<blockquote cite="/single-page-apps/#spa-working-definition">
  <p>A [JavaScript web application] is a web site with a complex interface that provides a high level of interactivity. A great share of this interactivity is implemented in client-side JavaScript, and particular interactions can only be implemented in JavaScript.</p>
   <p>Sometimes the HTML is rendered on the client, but not necessarily. All HTML code or at least the initial structure may as well be rendered on the server.</p>
   <p>Instead of making server round-trips after each user input, the app makes HTTP server requests in the background to publish actions or to load new data.</p>
   <p><a href="/single-page-apps/#spa-working-definition">Read on…</a></p>
</blockquote>

## Passing on existing best practices

In previous discussions, best practices for JavaScript-heavy web applications have been established.
Once again, I point to [a comprehensive talk by Pamela Fox](http://blog.pamelafox.org/2013/05/frontend-architectures-server-side-html.html) from 2013 in which she described the requirements for a web application from a user and developer perspective.

The big JavaScript frameworks embrace these best practices as of today. Most problems that we had in 2006 and 2012 are solved today. We can build fast and accessible websites that are highly dynamic in the browser. Using progressive enhancement, we can build robust JavaScript web apps that still work when JavaScript fails for some reason.

JavaScript web apps aren’t special snowflakes, they are just Hypertext nodes in the World Wide Web. Therefore they need to [build on URLs just like traditional websites](https://9elements.com/io/hybrid-javascript-apps/), so that linking and bookmarking works the same. Technically, this problem is solved since browsers and libraries support the [HTML5 History API](http://caniuse.com/#feat=history), which happened between 2010 and 2012.

## Better JavaScript web apps

Unsurprisingly, some JavaScript web apps do not follow these best practices. This can be said about any technology in the web stack, think of HTML or server-side programming languages. We need to ask why some sites don’t follow best practices.

Does the concept make it hard to apply priciples of robustness? Let’s refine the best practices then, and improve the tutorials, libraries and tools. **The solution for bad JavaScript web apps is not to abandon them altogether, but to make better ones.**

## Why are we building JavaScript web apps again?

[Ten years ago](http://web.archive.org/web/20190507051447/http://adaptivepath.org/ideas/ajax-new-approach-web-applications/), web creators tried to understand how user interfaces of native apps work, and what benefits they provide. To catch up with the <q cite="http://web.archive.org/web/20190507051447/http://adaptivepath.org/ideas/ajax-new-approach-web-applications/">richness and responsiveness</q> of desktop apps, they adapted certain existing patterns for the web.

Today, we need to recall the benefits of user interfaces that overcome server round-trips and full-page refreshes. We can only improve the user experience with the front-end technologies we have. So we need to identify interactions that can and should be improved with client-side JavaScript.

JavaScript is the best technology to build excellent interactivity in the browser. Still, the most important skill of a client-side JavaScript developer is to know when not to solve a problem with client-side JavaScript. It’s always more robust to solve a problem further down in the stack.

From a perspective of progressive enhancement, it is necessary to **resolve the ostensible dichotomy of traditional server-side apps versus JavaScript web apps**. The transition from a traditional server-side app to a JavaScript-heavy app needs to be seamless. We need to find ways how to build high without losing the benefits of building low. “[Universal JavaScript](/single-page-apps/)” frameworks are a promising approach.

## The architecture of web apps

Stefan Tilkov makes a claim about the architecture of web apps I’d like to comment on:

<blockquote cite="https://medium.com/free-code-camp/why-i-hate-your-single-page-app-f08bb4ff9134">
<p>“In this architectural approach [a traditional non-JavaScript web application], it is absolutely clear that the responsibility for actual business logic resides completely on the server. … Business logic does not belong in the client, unless you like having to redundantly maintain the same logic in every kind of client you support (in addition to maintaining it on the server, of course — remember that you can never trust any client).”</p>
</blockquote>

That’s correct, but JavaScript web apps do not duplicate business logic per se.

The **business logic** is a set of high-level operations on the data. Like creating, reading, updating and deleting records (CRUD). Updating relations between records. Finding, transforming and merging records to serve a particular request.

This business logic lies in the server code given you’re building an app that somehow synchronizes with the server. This is where the data is processed in the end, this is where the data needs to be consistent. This is the code and the data storage one cannot tamper with easily. This is where authorization, validation and security checks need to be performed.

Usually this server code offers a HTTP REST API which is consumed by several clients, for example web or native clients. These clients mostly contain **user interface logic**.

## Sharing logic between client and server

A gray area is input validation, for example. For consistency, the API server has the final say on validation. However, it improves the user experience to perform at least simple validations in the clients. This gives instant feedback instead of making the user wait for server requests and user interface refreshes.

Which brings us to the well-known problem of **sharing logic**. It exists for every client-server software architecture where clients do not make a server round-trip for each trivial user action. The problem *did not arise with JavaScript web apps, nor can it be avoided by not writing client-side JavaScript*.

Instead of simply <a href="http://roca-style.org/#application-logic">forbidding to have valuable logic</a> on the client, let’s talk about **sharing particular logic for the user’s benefit**. Again, this question not only concerns JavaScript web apps, but all clients that are architecturally separated from the API server.

There are already practical ways to share logic between client and server. In the form validation example, we can specify the rules in a neutral, declarative format like JSON or XML. Each client has glue code that reads and applies the rules to the specific user interface.

## Client-server architectures instead of monoliths

Tilkov writes:

<blockquote cite="https://medium.com/free-code-camp/why-i-hate-your-single-page-app-f08bb4ff9134">
<p>“A fantastic example of the problems created by the SPA approach is parallelization of work. If you have a team of multiple people, or God forbid, multiple teams working on the same SPA, you need to come up with a good way to support this. Instead, you can just have each of those teams build their own web application. Each of those applications can be connected to every other one built at the same time by the same organization (as well as to every other web application residing anywhere, if you want to) — in fact relying on the core strength of the web.”</p>
</blockquote>

I don’t see the problem here. In fact, there are large teams, and multiple teams working on real-world JavaScript apps. It seems Tilkov confuses JavaScript apps with a monolithic architecture. In my experience, JavaScript web apps work best with loosely-coupled REST services.

If you have a service-oriented architecture, different teams can build different clients in parallel consuming the same APIs. It does not matter whether the clients are JavaScript web apps, traditional web apps or native apps. These clients can be interconnected, using URLs and other mechanisms like for example Intents on Android.

## The accessibility of JavaScript apps

Accessibility is a topic that was long neglected in the JavaScript community, and it’s still neglected in the broader web development community. We need meaningful criticism and advice to improve the accessibility of today’s web apps. That’s why I’m disappointed by such blunt statements:

<blockquote>
<p>“In terms of accessibility, rendering semantic HTML on the server-side provides an out-of-the-box support. There is only a limited set of things that you can do with HTML, and again this is a feature, not a bug.”</p>
<p>“You can address some of those problems within an SPA, too. But it takes effort. With the ROCA approach, you have a well-known, extremely mature, proven architecture to rely on.”</p>
</blockquote>

This is misleading. Your HTML is not more accessible or more semantic when it’s rendered on the server. Whether you render HTML on the server or in the browser, <em>you</em> need to write accessible and semantic markup.

There are differences between server-side and client-side rendering regarding accessibility: Rendering on the client is less robust since you have little control over the client. But once the HTML is parsed into the DOM, the accessibility is the same.

There are special accessibility requirements when using JavaScript to show, hide, insert or change content. Almost all client-side JavaScript performs these tasks, from tiny jQuery scripts to large web apps. If you don’t refresh the page for each content change, you need to use [WAI-ARIA techniques](https://www.marcozehe.de/tag/aria/) to guide users of screen readers and other assistive technologies. Certain user interface controls like [tabs](https://24ways.org/2015/how-tabs-should-work/) and modal dialogs require special ARIA markup and [manual focus management](http://allyjs.io/).

## JavaScript web apps considered valuable

My main concern with Tilkov’s article is that he sees no use for JavaScript web apps:

<blockquote cite="https://medium.com/free-code-camp/why-i-hate-your-single-page-app-f08bb4ff9134">

<p>“[The single-page apps that I know] are bloated and slow to load, even though the actual information they display and the interaction they offer is very simple. […]”</p>

<p>“In almost every case I’m aware of, your [single-page application] has zero benefit for the user, and there are only positive sides to embracing browser features instead.”</p>

</blockquote>

There might be JavaScript web apps with simple interactions, but it’s more likely that one cannot see the full complexity by looking at some screens.

Most web apps I work with daily have highly sophisticated in-browser interactions that are built with JavaScript and can only be built with JavaScript: Flickr, YouTube, Facebook, Twitter, GMail, Amazon etc. Most likely the websites you use everyday are heavily enhanced with JavaScript, too. You might not notice this, because they follow best practices and “just work”.

Such sites provide a great benefit to the user. In the end, every software, every information system should enable the user to perform tasks in an easy, fast and approachable way. This should drive your architectural decisions.

By denying that JavaScript contributes significantly to user experience, Tilkov promotes a notion of progressive enhancement that I consider as backward. [Progressive enhancement should embrace technical progress](/interaction-is-key/) and acknowledge the benefits for the users, but make sure technology is used in a robust and compatible way.

## JavaScript web apps are “on the web”

[As Greg Babiars puts it](https://twitter.com/gbabiars/status/687395730298941440), <q cite="https://twitter.com/gbabiars/status/687395730298941440">I’m ‘fatigued’ by posts like this taking nuanced technical and UX discussions and declaring [there’s] one right way that fits all needs.</q>

JavaScript web apps have proven useful and won’t go away. So [let’s put an end to JavaScript shaming](https://www.youtube.com/watch?v=puOrC7cfjRI). JavaScript is an essential tool in our front-end toolbelt. Just as with any other web technology, we need to discuss when and how to use it properly for the user’s benefit.

We need to stop excluding JavaScript apps from “the web as it was intended”. JavaScript apps are “on the web” just like other sites. The potential of the web is enormous and we have just started.

The web was invented as a “document retrieval system”, and we need to appreciate the principle of universal access. But the web is *also* an “[application delivery system](http://javascript.crockford.com/popular.html)”. Let’s reconcile these two approaches as far as possible instead of ignoring or excluding one of them.

## More on JavaScript and progressive enhancement

Please see my other articles on the topic:

<ul class="compact-list">
<li><a href="/interaction-is-key/">Interaction is Key: Progressive Enhancement and JavaScript</a></li>
<li><a href="/single-page-apps/">Progressive enhancement for JavaScript web apps</a></li>
<li><a href="/javascript-failure/">Progressive enhancement and JavaScript failure</a></li>
<li><a href="/robust-javascript/">Robust Client-Side JavaScript – A Developer’s Guide</a></li>
</ul>

For a full list of references, see [my bookmarks tagged with progressive enhancement](https://www.diigo.com/user/molily/progressive-enhancement).

I’d love to hear your feedback! Contact me via [email](mailto:molily@mailbox.org), on [Mastodon](https://mastodon.social/@molily) or [Twitter](https://twitter.com/molily).

<aside class="unwichtig">
  <p style="margin: 2rem 0 0">Edit, 2016-01-20: In a previous version of this article, I linked to the blog post <a href="https://adactio.com/journal/8245">Angular momentum</a> by Jeremy Keith without discussing it properly. I misrepresented Keith’s opinion and I’d like to apologize for this. His article presents a well-balanced stance on the topic, and I recommend reading it.</p>
</aside>
