---
layout: post
title: "On browser compatibility and support baselines"
description: "Evaluating new web technologies and using them safely"
keywords: web development, web authoring, browser, compatibility, css, progressive enhancement, graceful degradation
lang: en
---

## Preface on asynchrony

One of the defining features of the web is technical asynchrony. Web standards, web clients – like browsers – and web pages are never fully aligned in time. They meet _sometimes_ but _most of the time_ one is ahead or lags behind.

Web standards are usually ahead of browsers and web sites. They are designed, then browsers start implementing them. Once a web standard is stable, the implementations are finished and shipped. Then web authors use them on their sites.

But since browser behavior is not fully standardized, web standards may also lag behind browsers.

Browsers are usually ahead of web sites. Most web sites are developed at one point in time whereas browsers are updated frequently. Today, Firefox and Chromium-based browsers are evergreen, meaning they auto-update to a new major version every four weeks. Safari receives major updates roughly every year.

Browsers allow a glimpse into the past. They need to support all web sites ever written since the beginning of the web. Only a few web technologies have been deprecated and removed from browsers. Old sites mostly work in newer browsers, only some features are broken.

But browsers may also lag behind web sites. When web authors use web technologies just released in evergreen browsers, most browser versions in use do not support them yet. This was and is a huge problem because some browsers update infrequently or manually. A significant number of people are stuck with old devices, old operating systems and old browsers that cannot be updated.

For web authors, this is daily business. A large part of a web author's work is dealing with browser compatibility and web site interoperability. The situation improved thanks to evergreen browsers. But fundamentally, this is the essence of authoring for the web.

When using an HTML, CSS or JavaScript feature, web authors need to check for its browser support. [Can I Use](https://caniuse.com/) and [MDN](https://developer.mozilla.org/en-US/) are the most comprehensive databases. There is an ecosystem of tools that builds on Can I Use data: [browserslist](https://github.com/browserslist/browserslist) is a way to list browser versions a web site wants to support. [Autoprefixer](https://github.com/postcss/autoprefixer) and [@babel/preset-env](https://babeljs.io/docs/babel-preset-env) use browserslist to generate interoperable code.

# How to deal with old browsers

The crucial recurring question since the begining of the web is: How to deal with browsers that do not support a certain web technology feature? The answer is always: It depends! It depends on how the HTML, CSS, JavaScript feature works, on the browser market share in the target audience, on the importance of the feature for the site, and much more.

Progressive Enhancement and Graceful Degradation are best practices for dealing with old browsers and building interoperable sites. Based on support data, web authors decide whether to use the feature at all. They can test with browser versions that do not support the feature. How do old browsers deal with the new code? How does it affect the user experience?

Web authors can directly use the feature if it enhances the site in newer browsers and does not break anything in older browsers. If it does, web authors can detect the feature and activate it safely. They can add a polyfill or fallback if applicable.

Unfortunately, this is tedious, manual work. A web site uses hundreds, if not thousands of distinct web features across HTML, CSS, SVG, JavaScript, DOM, WebGL, images, audio, video etc. Web authors need to investigate and group the features in order to make pragmatic browser support decisions.

That is to say I can fully understand that web authors want to make this task easier and less time-consuming.

# Google's Baseline initiative

At Google's 2023 developer conference, Google recently announced the [Baseline initiative](https://web.dev/baseline/). See also [Introducing Baseline](https://web.dev/introducing-baseline/) and [Rachel Andrew's YouTube video](https://www.youtube.com/watch?v=eZa3BgGaAeA&t=616s).

Google Baseline aims to make it easier for web authors and web publishers to think and talk about browser support. Baseline is <q>a line in the sand indicator which web platform features are safe to use. Features in Baseline have cross-browser support, they are interoperable, with no major issues in any browser engine.</q> As Rachel Andrew explains in the video, <q>if a feature is part of Baseline, our aim is that most web teams should feel confident to just use it.</q>

The [blog post lists the pursued benefits](https://web.dev/baseline/):

<blockquote>
<ul>
<li>When planning a project, rather than needing to list specific browser versions, you can set a requirement to use features that are part of Baseline.</li>
<li>When publishing a library, you can help potential users understand support of features used (and therefore whether it is safe to use on their site) by declaring support for Baseline.</li>
<li>When writing a tutorial, you can tell readers that everything described is in Baseline. Your reader then knows this is a solution they can incorporate into a project.</li>
</ul>
</blockquote>

The crucial technical definition of the Google Baseline is: <q>Features become part of Baseline when they are supported in the current and previous version of all major browsers—Chrome, Edge, Firefox, and Safari.</q>

## "Widely supported" Cascade Layers

While I value Google's manifold efforts to improve web interoperability, I don't think that Google Baseline clears things up and delivers on its promises. It is a simplification of the reality. It gives web authors a false impression of how browser compatibility works.

Let me pick an example to explain how Google Baseline fails on its promises: **CSS Cascade Layers**.

<aside style="font-size: 80%"><p markdown="1">In this post, I will not explain how Cascade Layers work. Please refer to the [Complete Guide to CSS Cascade Layers](https://css-tricks.com/css-cascade-layers/) by Miriam Suzanne and the [Cascade Layers guide on MDN](https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Cascade_layers) by Estelle Weyl et al.
For the purpose of this article, you just need to know that Cascade Layers is a new CSS feature that introduces new syntax.</p></aside>

Cascade Layers are part of Google Baseline. According to the [new browser support box on MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/@layer), this feature is "widely supported" with the note added: <q>Baseline is determined by this web feature being supported on the current and the previous major versions of major browsers.</q>

<img src="/img/browser-support-layer-mdn.png" alt="Screenshot: Browser support box for @layer on MDN. It reads: Baseline: Widely supported. Icons with green checkmarks for Chrome, Edge, Firefox and Safari." class="image-max-full">

The link "See full compatibility" brings you to the [browser compatibility table](https://developer.mozilla.org/en-US/docs/Web/CSS/@layer#browser_compatibility).

<img src="/img/browser-support-layer-mdn-compat-table.png" alt="Screenshot: Browser support table for @layer. Checkmarks for all listed browsers each with the version that started support: Chrome 99, Edge 99, Firefox 97, Opera 85, Safari 15.4, Chrome Android 99, Firefox for Android 97, Opera Android 68, Safari on iOS 15.4, Samsung Internet 18.0, WebView Android 99. Samsung Internet is selected so the release date is shown: 2022-08-08." class="image-max-full">

This table is very informative. It tells you that Cascade Layers were shipped in the listed browsers _last year_. Firefox was the first (of the listed browsers) to ship support on 2022-02-08. Samsung Internet was the last (of the listed browsers) to ship support on 2022-08-08.

We have learned that all browser engines and evergreen browsers support it since August 2022. That is nine months ago.

## Reality check: Usage-relative browser support

Unfortunately, MDN does not tell you the **market share of these browsers**. And MDN does not tell you about **other browsers** that are actually used.

[The entry for @layer on Can I Use](https://caniuse.com/mdn-css_at-rules_layer) shows the same browser support data but puts them into perspective. If you select "Usage relative", you get a stacked column chart with browser versions that support and do not support the feature.

<img src="/img/browser-support-layer-caniuse.png" alt="Screenshot: Browser support box for @layer on Can I Use. It lists 14 browsers, including Chrome, Edge, Safari, Firefox, Opera, IE and their mobile counterparts. Red bars visualize browser versions that do not support @layer, sized by their market share. Green bar visualize browser versions that support @layer." class="image-max-full">

Can I Use also calculates a total percent based on the global browser market share. That percent value is a staggering 90.19%. That means Cascade Layers work for 9 out of 10 of your web site visitors. They do not work for one visitor out of 10. This important fact is hidden behind the "widely supported" verdict of Baseline.

<aside style="font-size: 80%"><p markdown="1">Disclaimer: Measuring browser market share is [no exact science](https://en.wikipedia.org/wiki/Usage_share_of_web_browsers#Accuracy), but heuristics and estimation. There is no statistical survey on browser usage with a representative sample using robust measuring and reporting methods. Can I Use uses data from [StatCounter GlobalStats](https://gs.statcounter.com/browser-market-share) but allows you to import your own browser usage statistics from Google Analytics or Simple Analytics.</p></aside>

Where does this discrepancy stem from?

MDN only states which browser versions started supporting the feature and when. It does not show market shares of the versions that do support and those that do not. This is unique to the "Usage relative" view of Can I Use.

Evergreen browsers auto-update every month, but some people are still stuck on old versions that do not support Cascade Layers. Three examples:

<ul class="compact-list">
<li>2.11% of all web users are using Chrome < 99.</li>
<li>0.95% are using desktop Safari < 15.4 on desktop and 1.74% are using mobile Safari < 15.4.</li>
<li>0.65% are using Firefox < 97.</li>
</ul>

There is another reason why MDN support table suggests 100% support while the actual global support is 90.19%: The MDN table **omits browsers with small market share**.

One of these is [UC Browser for Android](https://en.wikipedia.org/wiki/UC_Browser) published by the Chinese Alibaba Group. This browser has a global market share of 0.95%. It is based on a fork of Chromium 78. You heard right, in May 2023, UC Browser is stuck on a browser engine that was released in October 2019! Web developers in the Western world mostly ignore UC Browser, but it is still popular in India, Indonesia and China. (These countries have a combined population of almost 3.1 billion people.)

While the individual percent values are rather small, they add up to 9.81%.

This example illustrates that web authors need to check browser support for a feature and join it with browser market share data to get a clear impression. Can I Use is still the best tool for that. The simplistic "widely supported" claim of Baseline is not accurate.

## Assessing practical backwards compatibility

The most important question is not how many browsers support the feature but **what happens in browsers that do not support it**.

This is where we need to examine the feature itself, Cascade Layers. Here is a simple but common example (see also Chris Coyier's [basic use case for Cascade Layers](https://chriscoyier.net/2023/04/10/whats-a-basic-use-case-for-cascade-layers-in-css/)):

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Cascade Layers example</title>
<style>
@layer bootstrap, my-own-styles;

@import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css") layer(bootstrap);

@layer my-own-styles {
  button {
    font-size: 2rem;
  }
}
</style>
</head>
<body>
<p>
<button class="btn btn-primary">Activate me!</button>
</p>
</body>
</html>
```

This document imports the Bootstrap library and assigns it to the layer `bootstrap`. We want to make sure that our own code always overwrites Bootstrap, without waging specificity wars against Bootstrap selectors.

So we assign our code to the `my-own-styles` layer and set the layer order so that `my-own-styles` is more important than `bootstrap`.

Voilà, the button has a `font-size` of `2rem` even though Bootstrap sets a `font-size` for `.btn`, which has a higher specificity than `button`. Without Cascade Layers, Bootstrap would win the specificity conflict. (We could use the same selector as Bootstrap in our code, `.btn`. But this is what Cascade Layers make obsolete.)

Now for the interesting part: **How do older browsers without Cascade Layers support deal with this code?**

The answer is, these browsers do not recognize `@layer` and `@import` with `layer()` and therefore **ignore the code**. They do not download Bootstrap either.

Is this good or bad? It is rather good! They do not understand this newer syntax and continue parsing un-layered styles, if any.

When using Cascade Layers, it makes sense to assign most of your styles to a layer. If you do so, these styles are not applied in 9.81% of the browsers.

Unfortunately, it hard to use Cascade Layers in a backwards-compatible way. [As Miriam Suzanne wrote](https://css-tricks.com/css-cascade-layers/#aa-browser-support-and-fallbacks):

<blockquote>
<p>Since layers are intended as foundational building blocks of an entire CSS architecture, it is difficult to imagine building manual fallbacks in the same way you might for other CSS features. The fallbacks would likely involve duplicating large sections of code, with different selectors to manage cascade layering — or providing a much simpler fallback stylesheet.</p>
</blockquote>

[Stephanie Eckles wrote](https://www.smashingmagazine.com/2022/01/introduction-css-cascade-layers/#can-we-start-using-cascade-Layers):

<blockquote>
<p markdown="1">With new CSS features, we can often begin using them as a progressive enhancement. For example, with properties like `aspect-ratio` or selectors like `:is()`, we can use `@supports` to include new features while supporting fallbacks. Or, sometimes features can be added, and graceful degradation is acceptable without a comparable fallback.</p>
<p markdown="1">However, cascade layers are such an all-encompassing change that it will be difficult to start moving to use them until a polyfill is available. Unfortunately, `@supports` doesn’t currently work with at-rules, and even if it did, it would not be entirely sufficient for cascade layers since unlayered styles always win over layered ones.</p>
</blockquote>

To recap:

<ul class="compact-list">
<li>It is not possible to detect support for Cascade Layers in old browser.</li>
<li>We cannot use it as an enhancement step (Progressive Enhancement).</li>
<li>There is no practical fallback possible without rewriting almost all layered styles (Graceful Degradation).</li>
<li>There is no easy way to serve Cascade Layer code to new browsers and legacy code to old browsers.</li>
<li><span markdown="1">The good news is, there is a PostCSS-based [Cascade Layers polyfill](https://www.oddbird.net/2022/06/21/cascade-layers-polyfill/) that transforms `@layer` code into backwards-compatible code. As you might expect, the polyfill has several limitations.</span></li>
</ul>

After having investigated the specific feature and the behavior of old browsers, we can ask the questions that Baseline tries to answer:

**Is it okay to start using the feature?** – It depends on the site you are building, your users and how you use the feature. If you are building a site for the global audience and find Cascade Layers useful, you should try whether the polyfill works on your code. If you are building for an audience with newer browsers, like for a corporate intranet, you can start using Cascade Layers without safeguards in place.

**Is it safe to use?** – Technically yes, since old browsers will ignore the new syntax because their CSS parsers are forwards-compatible. But you should not serve a site without styles to almost 10% of the users. Many sites are still readable without styles. But styles are not just decoration and veneer, they facilitate readability, usability, accessibility and interactivity. You should provide at least some basic styles to all browsers.

## Summary

Google Baseline does not answer crucial browser compatibility questions. Baseline merely states that the latest and the previous versions of certain evergreen browser support a feature interoperably. This is good to know, but not enough to use the feature on your site in a safe manner.

My fear is that Google's Baseline initiative oversimplifies the discourse on browser support. Web authors will see "widely supported", all-green checkmarks and alleged 100% browser support and use the feature without further examination. Web publishers will say "we require Baseline" without realizing that it means they only support two-month-old evergreen browsers plus the latest Safari.

Coming back to the [pursued benefits](https://web.dev/baseline/):

<blockquote><p>When planning a project, rather than needing to list specific browser versions, you can set a requirement to use features that are part of Baseline.</p></blockquote>

Please do not. Please perform a market analysis to find out the browser usage in your audience. Then decide which browsers you want to support and find out how. Use Progressive Enhancement when planning a project.

<blockquote><p>When publishing a library, you can help potential users understand support of features used (and therefore whether it is safe to use on their site) by declaring support for Baseline.</p></blockquote>

That is not enough. Please make deliberate browser support decisions and document them. Please state the individual browser versions the library requires and explain why. Please state how the library behaves in older browsers. Please use feature detection in your library. Please define your own baseline and state it in a machine-readable way using [Browserslist](https://browsersl.ist/).

<blockquote><p>When writing a tutorial, you can tell readers that everything described is in Baseline. Your reader then knows this is a solution they can incorporate into a project.</p></blockquote>

That is not enough. Please explain how old browsers deal with the new code. Please explain how to use the feature as an enhancement or in a backwards-compatible way.

With new web technology features being shipped every four weeks, web authors need better practical guidance. I agree we need to unify and simplify browser support information.

A better browser support box should center on practical and safe usage. A concise text should answer these questions: What is the percent of users with browsers supporting the feature? How do old browsers deal with the feature? Can it be used as an enhancement? How can I detect the feature? How to develop a fallback? Do polyfills exist?

I believe this will enable web authors to develop modern sites using the latest browser features without impairing compatibility.