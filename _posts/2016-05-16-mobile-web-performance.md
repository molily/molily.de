---
layout: post
title: Our best practices are killing mobile web performance
description: Web performance rules invented for desktop web access need to be revised for the mobile era.
keywords: mobile web, performance, JavaScript, web performance optimization, progressive enhancement
lang: en
---

## Foreword

Some years ago, web developer Nicole Sullivan gave an influential talk [Our (CSS) Best Practices Are Killing Us](http://www.stubbornella.org/content/2011/04/28/our-best-practices-are-killing-us/). Sullivan was one of the first who set up rules for predictable, maintainable, large-scale CSS.

In her talk from 2011, Sullivan argues that CSS practices considered the best back then are actually holding us back. With [OOCSS](https://www.smashingmagazine.com/2011/12/an-introduction-to-object-oriented-css-oocss/), she started a movement that eventually led to frameworks like Bootstrap and Foundation as well as methodologies like [SMACSS](https://smacss.com/), [BEM](https://css-tricks.com/bem-101/), [CSS modules](https://github.com/css-modules/css-modules) and inline CSS. Today in front-end development, we try to create reusable and encapsulated components. Sullivan helped to shape the idea of having such “lego bricks”.

In this article, I won’t talk about structuring CSS, but I’d like to borrow the idea that our best practices may harm us sometimes, and apply it to mobile web development.

## Mobile web: Frustrating user experience

Mobile web access today is ubiquitous, and for millions of people it’s the first and only web experience. I’m using the web every day with a powerful smartphone on an EDGE or HSPA+ connection. But the overall user experience is *frustrating*. Both as a user and developer, I found mobile browsers to be unreliable and slow compared to desktop browsers. To improve the performance and reduce data usage, I’m mostly using proxy-based browsers like [Opera Mini](http://www.opera.com/de/mobile/mini) and [UC Browser](https://en.wikipedia.org/wiki/UC_Browser).

There are numerous articles on why the mobile web sucks. Some of them [blame mobile web browsers](http://www.theverge.com/2015/7/20/9002721/the-mobile-web-sucks), some of them blame creators, web developers or advertisers. And they all are right. The whole industry is responsible. Web sites are slow and unresponsive because they are bloated: Slow advertising scripts, large images and videos, too many custom fonts, gigantic JavaScript and CSS frameworks of which only ten percent are used.

Some of these mistakes can be fixed at any time with basic performance optimization. Some of them need to be prevented in the concept and design phase. Some of them require the replacement of generic code with custom tailored code – which is not a viable option for smaller sites.

## Current performance goals and methods

On low-bandwidth, high-latency mobile internet connections, web sites load slowly compared to wired, high-bandwidth, low-latency connections. But the main problem is not the amount of time a page takes to fully load. It is how the page behaves *while it is loading*.

[Response time](https://www.nngroup.com/articles/response-times-3-important-limits/) and input feedback have the biggest impact on the perceived performance of a user interface. Therefore, web sites should be optimized for the **[time to first render](http://www.websiteoptimization.com/speed/tweak/start-render/)**. The duration from the start of the request to the first render to the screen should be as short as possible. The user should see something within few seconds. And the first appearance should be close to the final appearance. This is what the [Speed Index](https://sites.google.com/a/webpagetest.org/docs/using-webpagetest/metrics/speed-index) measures.

While “time to first render” is a crucial performance metric, rendering just something is not enough. A web page is not a static picture, but an interactive interface. Thus, a better performance metric is **[time to first meaningful interaction](https://medium.com/ben-and-dion/stop-painting-and-have-a-meaningful-interaction-with-me-86ef8eb4f5b3)**. How long does the user have to wait before interacting with the site?

A lot of thought is put into optimizing the **[critical render path](https://developers.google.com/web/fundamentals/performance/critical-rendering-path/?hl=en)**. The main optimization method is to postpone the loading of content that is not essential for the first render. This typically leads to a situation where most content, styles and behavior are lazy-loaded.

## Interruptions of user interaction

When a user sees the first screen of a page or starts to read the page non-visually, they will start to interact with it. They will scroll down and activate buttons and links. They assume these controls already work, and assume these controls are more or less stable.

Unfortunately, this isn’t the case for most mobile sites. After the first render, content is changed and moved around. New content is added not just at the end but also right in the middle. The most common examples are images, videos, menus, sidebars, interactive widgets and advertisement banners. Also custom fonts affect the overall layout.

These content changes not only confuse the user and interrupt the current interaction, they also cause **[layout reflows](https://developers.google.com/speed/articles/reflow)**. This is a computationally intensive recalculation of element positions. For the user such reflows are experienced as “the page is jumping around”.

This is especially frustrating if the user has already scrolled down and content is added above the current scroll position. Browsers [try to prevent this “jumping”](https://developers.google.com/web/updates/2016/04/scroll-anchoring?hl=en) by making their scrolling behavior smarter.

## The best practices that are killing us

So why do mobile web sites perform so badly? In my opinion, developers follow best practices. If they are applied without consideration, these practices may kill us:

<ol class="compact-list">
<li>Progressive Enhancement and Unobtrusive JavaScript</li>
<li>Non-blocking, asynchronous JavaScript</li>
<li>Lazy-loading of non-critical content</li>
</ol>

The basic idea of progressive enhancement is treating every web device [according to its abilities](https://en.wikipedia.org/wiki/From_each_according_to_his_ability,_to_each_according_to_his_needs). Progressive enhancement helps to focus on the core features of a web site,
which should lead to high performance.

Although I am a [strong proponent of progressive enhancement](/artikel), I think our understanding is yet incomplete and our practices need to be improved continually. It seems that progressive enhancement is misunderstood: Enhancements are applied *during load time while the user is watching*.

While the user is [riding a skateboard](http://blog.crisp.se/2016/01/25/henrikkniberg/making-sense-of-mvp), it suddenly transforms into a bicycle, then into a motorcycle, then into a car. Not that the user does not enjoy driving a car, but when they just learned to ride the skateboard, they get angry when you take it away shortly after.

“[Unobtrusive JavaScript](https://en.wikipedia.org/wiki/Unobtrusive_JavaScript)” is an decade-old technique I have [already criticized in an earlier article](/javascript-failure/#updating-javascript-best-practices). JavaScript is considered “unobtrusive” when it adds additional behavior to an existing, self-sufficient HTML structure. Once the JavaScript kicks in, it changes the HTML DOM and adds behavior. Inevitably, this leads to significant content changes and reflows.

On desktop computers with a fast internet connection, the content changes just milliseconds after the first render. But on mobile, users will see the non-JavaScript version for couple of seconds – and probably interact with it – until the JavaScript visibly switches to the enhanced version.

In the last ten years, [we taught](/javascript-asynchron/) web developers to load scripts in an asynchronous, non-blocking way. A basic web performance rule says “[include stylesheets at the top, scripts at the bottom of the HTML code](https://developer.yahoo.com/performance/rules.html)”.

When external JavaScripts are placed at the bottom of the page or marked with [async/defer](https://developer.mozilla.org/en/docs/Web/HTML/Element/script), the code may be executed *at any time after the first render*. On mobile, it’s quite common that JavaScript-powered dropdown menus, sticky elements and interactive widgets appear not until 10 seconds after the first render.

## Mobile web performance guidelines

In the age of predominant mobile web access, some of these practices are causing harm. Some are fine per se but applied without consideration. I’m not suggesting to abandon them completely, but to revise them for the mobile age. I have compiled some guidelines to update the rules we have.

1. **Use but question lazy-loading**

   It’s important to realize that lazy-loading of content and lazy-initialization of widgets is a double-edged sword. It improves and impairs the user experience at the same time. Choose wisely what is loaded later and on demand.

2. **Identify critical code, forget rules of thumb**

   The rule “stylesheets at the top, scripts at the bottom” is not useful for complex sites. Identify HTML, CSS and JavaScript necessary for the most important content and interactivity. This critical code should block the first render. Styles and scripts may even be inlined into the HTML for performance gains.

   Most CSS is not critical since it does not style the content on the first couple of screens. It probably affects content on another page, so there’s no need to load it in a blocking way.

   Particular JavaScript should be considered critical, like the code for the main navigation. This small script should be loaded synchronously so the user does not see the main navigation transform under their feet.

3. **Do not interrupt user interaction**

   It is fine to render parts of the page multiple times when additional content or behavior is loaded. But every rendering should present a *usable and stable interface*. The user interaction should not be interrupted. A particular interface control should not change while the user interacts with it.

4. **No reflows**

   Prefer *adding* content over *changing* content that’s already visible. There should be no reflows affecting existing content. An easy way to achieve this is adding content at the bottom of the page. This works well with the natural top-down reading order.

5. **Support scrolling and fix the heights**

   Scrolling while the page is loading should be possible and should not be tampered with. Avoid scroll position jumping. Content should be lazy-loaded into placeholders with a fixed height, typically when the user reaches the scroll position. Either reserve an empty space (e.g. for ads) or show a title and loading indicator (e.g. for sections, sidebars and widgets).

6. **Measure & improve the Speed Index**

   The first screen should not change significantly during page load. Make sure the [Speed Index diagram](https://sites.google.com/a/webpagetest.org/docs/using-webpagetest/metrics/speed-index) shows an early, sharp rise to 90-95% visual completeness, then a steady rise to 100%.

# Case study: BBC News article page

I cannot present a complex site that implements these guidelines. But since I’ve compiled them *ex negativo*, I’d like to present an example worth improving.

Most complex news sites today display a loading performance that is not user-friendly. Let’s have a look at **[this performance test](http://www.webpagetest.org/result/160516_8J_19YF/)** of a [BBC News article](http://www.bbc.com/news/business-36146336) using webpagetest.org. The test device is a Motorola E with mobile Chrome on a simulated “slow 3G” connection. This slow connection allows to investigate the loading behavior thoroughly. On a faster connection, there will be the same events but in a faster sequence.

### Description: Reflows, Reflows, Reflows

The loading performance of a site is best examined in the [filmstrip view](http://www.webpagetest.org/video/compare.php?tests=160516_8J_19YF-r:1-c:0) and by [watching the video](http://www.webpagetest.org/video/view.php?id=160516_2e47309e6744523e53b8994af5911e0c8e602bfd).

<a href="/assets/perf-bbc.png"><img src="/assets/perf-bbc-small.jpg" alt="Filmstrip" class="image-full"></a>

[Enlarge excerpt from the filmstrip](/assets/perf-bbc.png)

1. The first render happens after 8 seconds. The article text is fully loaded and the user can start to read.
2. Ten seconds later, the category is inserted between header and article title, causing a reflow.
3. Two seconds later, the category transforms into a drop-down menu.
4. A gray-white screen is seen for 8 seconds. I did not observe this on my smartphone. I guess this is just a test artifact I’m going to ignore.
6. An advertisement banner is inserted between the header and the category navigation, causing a reflow.
7. Roughly at the same time, a section menu is added to the header into a placeholder space, not causing a reflow.
8. Five to six seconds later, a dropdown menu for exploring other BBC sites is loaded. It replaces a menu button which was just a simple link to the footer of the page.
9. On my real mobile Chrome, a full-page ad pops up after the page completely loaded.

### Evaluation: Lazy-loading overkill

The BBC News site is clearly optimized for the first render time. It lazy-loads images, navigation widgets and ads. Some of the lazy-loading is implemented in an unobtrusive way, other causes reflow and user interruption.

The site started with good intentions but unfortunately ended up with bad results. The overall performance and usability suffers from the lazy-loading more than it benefits. Especially the three lazy-loaded navigations are confusing and impair the performance. Two ads are loaded in an annoying way.

I’m recommending these action points:

- Remove visual clutter. Focus on the core content and core navigation techniques.
- Minimize lazy-loading. Use lazy-loading techniques that do not cause reflows and do not interrupt user interaction.
- Merge two redundant navigation widgets into one. The category navigation contains the section navigation.
- Leave cross-site navigation as it is: a simple link to the existing footer.
- Avoid flashy ads. Use placeholder space for the main banners. Avoid pop-up banners or use less intrusive interstitials.

*I’d love to hear your feedback! Send an email to [zapperlott@gmail.com](mailto:zapperlott@gmail.com) or [message me on Twitter: @molily](https://twitter.com/molily).*
