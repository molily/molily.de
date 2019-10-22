---
layout: post
title: "Progressive enhancement for JavaScript web apps"
description: We should choose mature “universal” JavaScript techniques to build web applications with a scalable architecture.
keywords: Progressive enhancement, JavaScript, web applications, single-page apps
lang: en
---

In addition to my recent [article on progressive enhancement and JavaScript](/interaction-is-key/), I’d like have a closer look on progressively-enhanced JavaScript applications.

In my opinion, we need more convincing articles and practical tutorials on progressive enhancement and JavaScript. I find a lot of articles to be misleading or disconnected from everyday development on demanding projects. Nowadays most articles on progressive enhancement are critical of JavaScript applications, but few present viable solutions.

In the Smashing Magazine, Heydon Pickering has recently published an article called [Reimagining Single-Page Applications With Progressive Enhancement](http://www.smashingmagazine.com/2015/12/reimagining-single-page-applications-progressive-enhancement/). I’d like to comment on this article and take it as an opportunity to reason about progressive enhancement in general.

<h2 id="switching-parts">Switching between parts of a page</h2>

The article presents a way how to create a single-page application with progressive enhancement in mind. The approach aims to be simpler than “universal JavaScript” that shares render code between client and server.

The recipe is:

1. First you take a plain HTML page. The HTML may be rendered on the server dynamically.
2. The content is divided into different parts (sections). These parts have IDs so they are addressable in the URL, e.g. <code>page.html#part1</code>
3. The page contains lots of content, but only one part is visible at once. (Note: the article uses the high-level term “view” here. I’ll stick to “part of the page” here since it’s less ambiguous.)
4. Another part gets visible when the user follows a link to it: <code>&lt;a href="#part1">…&lt;/a></code>. Using the CSS <code>:target</code> selector, only the requested part is made visible.

   Therefore, linking to parts is easy. Also, switching between the parts is fast and accessible.
5. Only now comes the power of JavaScript. There is a <code>hashchange</code> event listener. When the user switches between the parts, a callback specific to the visible part is triggered. In this callback, JavaScript behavior can be added en masse, additional content can be loaded etc.

With some HTML, CSS and little JavaScript we made it possible to address parts of a page, to reveal them and to call JavaScript handlers when the user changes between them.

<h2 id="tab-control-not-spa">A sophisticated tab control, not a single-page app yet</h2>

So what did we achieve with these steps? We have built a <em>sophisticated tab control</em>. Granted, this is not a normal tab control that is responsible just for a few sections of the page. Here it manages all content on the page. Still the purpose is to <em>show and hide static, server-rendered parts of the page in an accessible way</em>.

I cannot overstate the importance of good, accessible tab controls. The author found a flexible solution. There are [other good examples](http://blog.ginader.de/archives/2009/02/07/jQuery-Accessible-Tabs-How-to-make-tabs-REALLY-accessible.php) of [accessible tab controls](https://24ways.org/2015/how-tabs-should-work/), <a href="https://www.marcozehe.de/2013/02/02/advanced-aria-tip-1-tabs-in-web-apps/">some with <abbr title="Accessible Rich Internet Applications">ARIA</abbr> markup</a>.

My point is that this is <em>not a single-page app</em> (yet). When most JavaScript developers say “single-page app”, they have something different in mind. The article refers to a complex concept and tries to “reimagine” it. Unfortunately it gives a widely-used term a new meaning. What the article describes may be useful, but it’s not a scalable architecture for today’s web apps.

<h2 id="adding-js-logic">The interesting bit: Adding JavaScript logic</h2>

From an architectural point, it gets interesting when JavaScript logic is added in the mentioned callbacks. [The author writes](http://www.smashingmagazine.com/2015/12/reimagining-single-page-applications-progressive-enhancement/#static-views-with-enhanced-functionality):

<blockquote cite="http://www.smashingmagazine.com/2015/12/reimagining-single-page-applications-progressive-enhancement/#static-views-with-enhanced-functionality">
  <p>As part of the [callback] function of a particular view, you could insert new DOM nodes and attach new event handlers, for instance. Maybe throw in some AJAX to fetch some fresh data before compiling a template in place of the server-rendered HTML. You could include a form that runs a PHP script on the server when JavaScript is unavailable and that returns the user to the form’s specific view with <code>header('Location: http://my-app-thing.com#submission-form')</code>. You could also handle query parameters, using URLs like <code>http://my-app-thing.com/?foo=bar#some-view</code>.</p>
</blockquote>

The goal of this structure is to have static parts, which are fully accessible and usable without JavaScript, <q cite="https://www.smashingmagazine.com/2015/12/reimagining-single-page-applications-progressive-enhancement/#completely-static-views">side by side with views that are (potentially) highly augmented by JavaScript.</q>

This is where the article tries to make a connection to dynamic web apps and JavaScript single-page apps, but falls short in my opinion. Any non-trivial JavaScript logic – like fetching additional data, replacing the static content, processing user input – is disconnected from the server-side logic. I don’t think this is a viable approach to progressive enhancement – more on this later.

<h2 id="spa-definition">What is a single-page application anyway?</h2>

Let’s take a short detour to find out what single-page apps are about.

Some years ago, there was a broad discussion about JavaScript single page apps. Pamela Fox gave a great overview on the different front-end architectures, discussing the pros and cons for developers and users: [Server-side HTML vs. JS Widgets vs. Single-Page Web Apps](http://blog.pamelafox.org/2013/05/frontend-architectures-server-side-html.html). There is a related conference talk: [slides](http://frontend-architectures.appspot.com/) and [video](https://vimeo.com/65497607).

Even the [original article from 2005 that coined the “Ajax” moniker](http://adaptivepath.org/ideas/ajax-new-approach-web-applications/) might help to understand what single-page apps today are about. According to this definition, Ajax is not merely a front-end technique, not just a fancier name for <code>XMLHttpRequest</code>. It’s a user interface concept for dynamic websites. The user performs tasks ideally without delays or interruptions, without noticing that server work is being done. Server requests are sent asynchronously in the background.

<h2 id="spa-working-definition">Single-page applications: A working definition</h2>

For now, let’s take this working definition by yours truly:

A single-page web application is a website with a complex interface that provides a high level of interactivity. A great share of this interactivity is implemented in client-side JavaScript, and particular interactions can only be implemented in JavaScript.

Sometimes the HTML is rendered on the client, but not necessarily. All HTML code or at least the initial structure may as well be rendered on the server.

Instead of making server round-trips after each user input, the app makes HTTP server requests in the background to publish actions or to load new data. Sometimes the Websockets protocol is used to stream data without the HTTP overhead. Usually the exchange data format is JSON, so the app might talk to generic HTTP REST APIs. But it’s also common to request HTML snippets from the server.

Usually the content is tailored to the user, so there is some user authentication and access control involved.

Usually single-page apps set the URL according to the application state and, vice versa, route a given URL to a specific part of the application, restoring the state. Thereby parts of an app are addressable, just like traditional web pages.

<h2 id="crud-examples">Simple <abbr title="Create, Read, Update, Delete">CRUD</abbr> example apps</h2>

A group of developers has created the [TodoMVC](http://todomvc.com) example app as a comparison of JavaScript frameworks and as a learning resource. The app implements a todo list that allows to create, filter and complete todos. It [has been criticized as simplistic](https://tomdale.net/2015/11/javascript-frameworks-and-mobile-performance/) since it only covers a small part of what today’s web apps – and therefore today’s frameworks – deal with. Still it has realistic user interface with well-defined features and gives a glimpse on how interactions in web apps work.

For [Chaplin.js, an application architecture based on Backbone.js](http://chaplinjs.org/), I have created the [cars example app](https://molily.github.io/chaplin-cars/) ([source code](https://github.com/molily/chaplin-cars)) some while ago. It implements a simple [Create, Read, Update, Delete (CRUD)](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete) workflow for a list of records. Most Backbone &amp; Chaplin apps have such a workflow somewhere. Compared to TodoMVC, this example has more single-page app features like REST-style routes, module loading, arbitrary HTML templates and controlled data sharing.

In a possible follow-up article, I will describe more complex JavaScript apps from my daily work and discuss how they relate to progressive enhancement. Please see [my previous article](/interaction-is-key/) that describes [GED VIZ](https://viz.ged-project.de/), a data visualization tool.

<h2 id="pe-todo-list">A progressively-enhanced todo list</h2>

After this detour, I’d like to examine how a progressively-enhanced TodoMVC implementation would look like. What parts are necessary?

* Rendering the todo list on the client and on the server.
* Persisting the todos on the server. Ideally, the list is persisted on the client as well so the app also works offline and synchronizes with the server once the connection is re-established.
* Filtering the list. With JavaScript, this is an Ajax request or in-memory filtering, without it’s a server round-trip.
* A form for adding a new todo. Processing the form data means saving the todo. With JavaScript, this is an Ajax request, without it’s a server round-trip.
* A form for editing an existing todo. This can be the same for as adding, just with a input value set. The form processing needs to be different though, since we’re editing an existing record. With JavaScript, the form template is filled on the client, without it’s filled on the server.
* A form for marking a todo as completed, then updating the list. Logic is needed on the client and on the server. With JavaScript, this is a checkbox and an Ajax request, without it’s an additional submit button and a server round-trip.

As far as I can see, these features fit hardly into the structure the [Smashing Mag article](http://www.smashingmagazine.com/2015/12/reimagining-single-page-applications-progressive-enhancement/) describes. Todos can be created and removed arbitrarily. A todo needs to have a unique ID, it needs to be addressable. So we need to transcend the model of having fixed parts of a single page that are just shown and hidden.

For non-trivial apps, it is not practical to plug all content into one page and address parts using fragment identifiers. Without JavaScript, each server round-trip would transmit all content again, even if only one part has changed its state. [JavaScript web applications should rather embrace traditional URLs](https://9elements.com/io/hybrid-javascript-apps/). While <code>hashchange</code> is the easiest way to implement client-side routing, the community has already moved away from such stopgaps.

<h2 id="coherence-maintenance">Coherence and maintenance</h2>

If we want web apps that do not have a hard dependency on client-side JavaScript, we need to implement the basic HTML rendering, form input processing and data logic on the server. There is a risk of code duplication as soon as we enhance this basic implementation with client-side JavaScript. This leads to incoherence as [Tom Dale described](https://tomdale.net/2015/02/youre-missing-the-point-of-server-side-rendered-javascript-apps/) (emphasis mine):

<blockquote cite="https://tomdale.net/2015/02/youre-missing-the-point-of-server-side-rendered-javascript-apps/">
<p>The traditional approach of sprinkling JavaScript on top of server-rendered HTML was fine for a long time, but the more AJAX and other ad hoc dynamic behavior you have, the more it turns into <em>a giant ball of mud</em>.</p>
<p>Worst of all, <strong>you now have state and behavior for the same task—UI rendering—implemented in two languages</strong> and running on two computers separated by a high-latency network. Congratulations, you’ve just signed up to solve one of the hardest problems in distributed computing.</p>
</blockquote>

Please read this quote a second time because there is plenty of experience condensed in few sentences.

From a software development perspective, it is not desirable to have two separated implementations, two codebases, multiple approaches for roughly the same feature. If we take progressive enhancement seriously, the client-side JavaScript might get way more complex than the basic version with old-fashioned HTML links, forms and server round-trips. Both need different server-side logic.

Most architectures do not allow us to create rich and dynamic web apps using progressive enhancement. But those who *ease code sharing and coherence*, like “universal” JavaScript, are the best choice. It’s hard to come up with a drastically simpler approach without losing flexibility and scalability.

There is the notion that developers choose JavaScript single-page apps merely for their own convenience. Quite the contrary, the main purpose is to deliver an excellent user experience with the given budget within the given time frame. By sharing logic between client and server, we can build faster interfaces with less bugs.

<h2 id="universal-todo-list">
  &rarr; <a href="https://github.com/molily/universal-progressive-todos">Todo list with universal JavaScript and progressive enhancement</a>
</h2>

To explore this problem in a more practical way, I’m working on a todo list implementation using “universal” JavaScript, specifically [Express](http://expressjs.com), [React](https://facebook.github.io/react/) and [Redux](https://github.com/rackt/redux). There are numerous React examples that render the first page on the server using Node.js. What’s special about my attempt is that it uses progressive enhancement. The app should work when JavaScript is disabled or fails for some reason.

This is still a work in progress. I’m mostly exploring ways to share server and client logic. Having worked with React and Redux on several large client projects before, I’m convinced that this is a solid infrastructure for building progressively-enhanced web apps.

→ <strong>[GitHub repository: Todo list with universal JavaScript and progressive enhancement](https://github.com/molily/universal-progressive-todos)</strong>

<h2 id="article-references">More on JavaScript and progressive enhancement</h2>

Please see my other articles on the topic:

<ul class="compact-list">
  <li><a href="/interaction-is-key/">Interaction is Key: Progressive Enhancement and JavaScript</a></li>
  <li><a href="/javascript-web-apps/">JavaScript web apps considered valuable</a></li>
  <li><a href="/javascript-failure/">Progressive enhancement and JavaScript failure</a></li>
  <li><a href="/robust-javascript/">Robust Client-Side JavaScript – A Developer’s Guide</a></li>
</ul>

For a full list of references, see [my bookmarks tagged with progressive enhancement](https://www.diigo.com/user/molily/progressive-enhancement).

*I’d love to hear your feedback! Send an email to [molily@mailbox.org](mailto:molily@mailbox.org) or [message me on Twitter: @molily](https://twitter.com/molily).*

<h2 id="appendix">Appendix</h2>

After publishing this article, I learned about [Taunus](https://github.com/taunus/taunus), a framework by [Nicolás Bevacqua](https://ponyfoo.com/) for “universal” JavaScript web apps with a strong focus on progressive enhancement. There is also a [todo list example app in Taunus](https://github.com/taunus/taunus-todomvc) that works completely without JavaScript. We need more of such projects, and those advocating for progressive enhancement should welcome and support these tools.
