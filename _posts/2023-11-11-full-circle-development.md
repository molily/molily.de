---
layout: post
title: Full circle development
description: Reflecting on 25 years of web publishing
lang: en
---

Around 1996 or 1997, I started writing HTML. My family did not have internet access yet. We but owned a computer with a CD-ROM drive. On a CD-ROM that came with a video gaming magazine, I found some .HTM files. The magazine had shipped its website as HTML files on this CD-ROM because few people had internet access. I opened the files in Internet Explorer, then in a text editor. I changed the code and immediately realized the creative power of Hypertext. I created my first HTML pages and I distributed them via floppy disks.

A few years later, we got internet access at home. I immediately uploaded a personal website to a free webhoster. I became involved with the German [SELFHTML documentation](), which was to German web developers what the Mozilla Developer Network is today: the definitive guide and reference for web technologies.

Many years later, I have become a professional web developer.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Fast-forward to 2010. Something new was brewing in web development. The JavaScript programming language became more mature and powerful. With ECMAScript 5 and HTML5 (later named "HTML Living Standard"), the browser APIs became stable and reliable. With Chrome, a brand-new standards-compliant browser with a fast JavaScript engine became popular.

Web developers started to take JavaScript seriously. They pondered about the role JavaScript could play in web development in the future. And people started to use more and more client-side JavaScript for interactive web applications.

There have been Flash and Ajax applications before, but they were mostly gates to other dimensions where the rules of the web did not apply. (The first thing people did with Flash and Ajax was to reinvent the desktop and window metaphors, within the browser, within a web page.)

Around the same time, mobile computing got popular and affordable. Smartphones became powerful web clients. And Steve Jobs foretold that Flash has no future on mobile devices (["Thoughts on Flash"](https://en.wikipedia.org/wiki/Thoughts_on_Flash)).

Steps followed to reconcile a document-centric web with an application-centric web. For example, the JavaScript API `history.pushState` were introduced to reflect the application state in the URL.

A Cambrian explosion of JavaScript libraries and tools happened: Require.js, CoffeeScript, Backbone.js, Knockout.js, Angular.js, jQuery Mobile, Mustache, Handlebars.

People wrote more and more client-side JavaScript, so they needed ways to structure the code. "Application architectures" with patterns like MVC or MVVM sprouted like mushrooms. [TodoMVC](https://todomvc.com) guided developers through the jungle.

During that time, nothing was set in stone, everything was in flux. There weren't two or three architectures that had been agreed upon. There was no standard solution in the industry. Controversy erupted over how to use these new capabilities and patterns for the user's benefit.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

JavaScript made a difference in 2010 because user experience of websites lagged way behind that of native apps. Every interaction meant an interruption instead of a meaningful transition. Every web navigation lead to a blank white page, confusing and erratic loading behavior. The browser caching was horrible. There was no back/forward cache, no multiprocess data fetching, processing and rendering. No caching of CSS and JavaScript parse trees, no JavaScript bytecode cache. There were no cross-page transitions (outside of Internet Explorer).

At the web agency I work for, we used the new methods and tools to demonstrate our clients how smooth interactions on websites could work: Easy and quick browsing through content. Smooth transition between list and item and back. Animating dialogs. Loading new content automatically, live updates. Integrating interaction widgets and social media seamlessly. Authentication with single-sign on.

These design ideas were anything but new. They were already described in 2005. [Ajax](http://web.archive.org/web/20050227021921/http://www.adaptivepath.com/publications/essays/archives/000385print.php) promised to "eliminate the start-stop-start-stop nature of interaction on the Web". Moreover: "The user is never staring at a blank browser window and an hourglass icon, waiting around for the server to do something."

After having used these new possibilities, we wanted to share our experience and discuss possible architectures with other developers.

In May 2012, folks from Moviepilot and 9elements started a meet-up in Berlin, Germany: [apps.berlin.js](http://web.archive.org/web/20120825043249/http://berlinjs.org/apps). It was a spin-off from [Berlin.js](https://berlinjs.org/), an already successful JavaScript user group, started by [Robin Mehner](https://coding-robin.de/) and [Jan Lehnardt](https://writing.jan.io/).

The spin-off ran until February 2014, as far as I remember, and merged again with Berlin.js. JavaScript client-side apps became mainstream. Also, JavaScript frameworks like Angular.js and React emerged. The crowd started to split into framework user groups and the overarching discussions abated.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Recently, I was reminded of a talk at apps.berlin.js. [Tiffany Conroy](http://tif.ca/), who worked at SoundCloud at the time, spoke about why the SoundCloud website heavily relied on client-side rendering. Why perform all the routing and state management on the client? Why not use an old-fashioned, traditional server-side web application? The answer was: the site allows playing music while the user continues to browse the site.

Ten years later, we are debating the same questions we discussed from 2013 onwards. During the last decade, JavaScript web applications exploded. Many new web developers are only taught this way of building websites. Many websites are JavaScript apps for no particular reason or benefit. The resulting sites are slow, fragile and inaccessible. Megabytes of JavaScript are shipped for what could have been a simple and fast application with boring but solid PHP.

Today, we experience a backlash against this practice. At the same time, developers express a "tooling fatigue". There is a strong sentiment against frameworks. People want to get rid of the "struggle stack" and "use the platform" with "zero dependencies". So people advertise "vanilla JavaScript" solutions "built with web standards" to set them apart from frameworks.

Questioning the predominant use of JavaScript makes perfectly sense – always has, always will. The backlash today however tends to swing to the other extreme. Critical analysis of existing designs, refactoring of existing tech stacks is hard to market. It does not make for viral content. It's easier to start from scratch and to throw out the baby with the bath water.

JavaScript critics call the last decade a lost decade. In contrast, I have seen diverse and meaningful discussion around the usage of HTML, CSS and particularly JavaScript. Also, remarkable critiques on web design and web economics. What do we want to do with the web? How should we use the technologies we have? Which communities and interactions do we want to build? Which principles should we bake into web technologies, tools and our code?

The last decade seems lost because we failed to carry the knowledge gained in these lively discussions into the present. This means we are doomed to repeat history. [The first time was a tragedy, now it's a farce](https://en.wikipedia.org/wiki/The_Eighteenth_Brumaire_of_Louis_Bonaparte#First_as_tragedy,_then_as_farce).

What is said in 2023 about interactive web applications, JavaScript usage and frameworks falls short of what we discussed years ago. The discourse has fallen back behind the nuances we had achieved.

I don't exempt myself from that at all. This affects my thinking and writing as well. For example, someone writes an article on frameworks. I'm thinking: Let me pick up these great thoughts! Later I realize this very discussion happened in 2015. There were respectful, fruitful, nuanced blog posts. Today? Rather not. People are shouting over each other.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Much of the web development discourse today is ruined. The community became divided, scattered, and driven by animosity. The different camps rant about others in their echo chambers.

There are humble, friendly, far-sighted and compassionate voices on all sides. But they simply don't succeed building bridges between the estranged groups. Any nuanced take falls on toxic soil.

What led to a community this divided? I think it is normal that tech communities grow apart. People first have a civil discourse about different approaches. They respectfully disagree, then pursue their ways. They move further and further apart and become estranged over the years. If they happen to run into each other, they just throw snarky remarks at each other.

Fragmentation by tools and frameworks played its part. The complexity of software ecosystems requires a certain specialization. For example, people do not simply use a Shiny Library as an isolated tool. A person is educated as a "Shiny Library developer", gets hired as a "Shiny Library developer", sooner or later identifies as a "Shiny Library developer" and exchanges with fellow "Shiny Library developers".

To make matters worse, corporations with hundreds of millions of capital use "developer evangelism" and "open source" to market their products, cloud services and the underlying idea of the web. As [Justin Searls describes](https://blog.testdouble.com/posts/2023-10-16-must-have-10-years-experience-with-lineman-js/), this crushed innovative, independent tools that evolved from the daily work of small agencies and professionals.

Also, Twitter broke apart. On Twitter, web authors with different affiliations and fundamentally different views lived right next to each other. Despite all horrors, the global townsquare allowed diverse voices to chime in.

Today, the web community is fragmented into sealed echo chambers on Twitter, Bluesky, Mastodon, Threads, Discord, YouTube, Twitch etc. In fact many web developers love smaller, tight-knit communities in which no one fundamentally questions your stance of the web.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

[In March, I asked](https://molily.de/javascript-criticism/): "How do we reconcile? First of all, do we want to reconcile? Or are we fine with the divide? Are we fine with bridges burning? Are we fine with smart people on both sides ridicule and insult each other? Is this the new normal?" The answers are pretty clear by now.

This post does not have a message or resolution. I do not have any suggestions. There are enough web developers who take their narrow perspective on the web as absolute. They have a fixed opinion how you should use the web and how you should build websites. They have clear friends and foes.

I have seen many circles in 25 years and all I can say is that the most recent circle is a farce.

That said, I love web development and web publishing since 1996. HTML is radical, disturbing, chaotic, wicked, powerful and beautiful.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Last but not least, let me save some knowledge from the far and recent past into the present.

[Tom Dale](https://tomdale.net) wrote [fundamental blog posts](https://tomdale.net/archive/) on frameworks around 2015, like [You’re Missing the Point of Server-Side Rendered JavaScript Apps](https://tomdale.net/2015/02/youre-missing-the-point-of-server-side-rendered-javascript-apps/) and [JavaScript Frameworks and Mobile Performance](https://tomdale.net/2015/11/javascript-frameworks-and-mobile-performance/).

[Nolan Lawson](https://nolanlawson.com/) wrote a [series of thoughtful blog posts on Single-Page Apps](https://nolanlawson.com/tag/spas/).

Josh Collinsworth wrote on [The self-fulfilling prophecy of React](https://joshcollinsworth.com/blog/self-fulfilling-prophecy-of-react) and [Things you forgot (or never knew) because of React](https://joshcollinsworth.com/blog/antiquated-react).

Rich Harris talked about [transitional web apps](https://www.youtube.com/watch?v=860d8usGC0o) to break the dichotomy of single-page versus multi-plage apps.
