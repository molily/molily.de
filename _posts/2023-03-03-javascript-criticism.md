---
layout: post
title: "Client-side JavaScript and React criticism: What comes next?"
description: "How do we improve JavaScript usage, teach progressive enhancement and reconcile the community?"
keywords: javascript, progressive enhancement, single-page apps, frameworks, react
lang: en
---


<p><em markdown="1">A continuation of [An update on Robust Client-Side JavaScript – Where is client-side JavaScript heading?](/update-on-robust-javascript/)</em></p>

## The Great Divide is now a Great War

JavaScript critics are effing mad right now. For well-documented reasons. And they do not mince matters any longer. The web development community has never been so divided. The [Great Divide](https://css-tricks.com/the-great-divide/) is now a Great War.

Critics mostly talk to their kind on Mastodon while most of the client-side JavaScript authors still converse on Twitter. Both groups rant and rave in their respective echo chambers.

I acknowledge the frustration and anger of JavaScript critics. It accumulated over years. Their articles, talks and Twitter posts are records on struggling with client-side JavaScript practices and intervening into discussions.

My question is: Given the dire situation we have, the divided web development community we have, where do we go now and what comes next? How do we cut the Gordian knot? How do we reconcile?

First of all, do we want to reconcile? Or are we fine with the divide? Are we fine with bridges burning? Are we fine with smart people on both sides ridicule and insult each other? Is this the new normal?

## Sermons and insults

I hear JavaScript critics yelling: "Just use Progressive Enhancement! Sprinkle some JavaScript on your static HTML! Don't believe those fraudsters, grifters, bastards, idiots that lied to you!"

Again, I understand the frustration. Nonetheless, I don't think the current situation can be explained in terms of fraud, lies, gaslighting et cetera. While there are powerful actors with certain economic interests, [there is no "Big JavaScript" conspiracy, no JavaScript framework cabal](https://seldo.com/posts/the_case_for_frameworks) that has lied to us to sell us their sub-par products.

Even if certain individuals would be to blame – critics personally blame JavaScript framework maintainers and the giant tech corporations they work for –, I don't see much value in doing so.

I don't have a grande theory that explains how we got into the current mess. I have a rather technical explanation: [Path dependence](https://en.wikipedia.org/wiki/Path_dependence) and technology lock-in. We didn't start with the React single-page apps we have today. It was a series of small steps where each step seemed rational and logical at the time but lead to a poor outcome.

We started with DOM Scripting during the Browser Wars, then came Ajax and client-side JavaScript exploded. Libraries like Backbone.js helped to structure client-side JavaScript in order to implement dynamic interfaces. Then came React and solved a specific problem, more on that later. React brought up new problems one obviously doesn't face without React, but React users had to deal with them.

There are also several economic explanations for React's rise to power and continued dominance. For example, in 2019, [Charlie O'Hara described React](http://web.archive.org/web/20210805020051/https://whalecoiner.com/articles/react) as the Fordism moment that commodified the web further. With React, Facebook introduced an assembly line that standardized the work for developers, turning them from artisans into factory workers.

## Shifting the ecosystem

Back to the message that JavaScript critics are sending right now. I don't think that we can convince anyone with a sermon that is half truism and half insult. We have been shouting "use Progressive Enhancement, duh!" for almost two decades – just like Sisyphus is sentenced to roll up a boulder ad infinitum after evading and outsmarting death many times. The recent addition – the insults – doesn't make the message more convincing.

Given the mess web developers are stuck in right now, I don't expect them to act accordingly. There is no easy way out for organizations that have invested in heavy client-side JavaScript architectures. Especially React doesn't provide escape hatches. That is the core problem that critics describe so well. [React is a one-way road](https://joshcollinsworth.com/blog/self-fulfilling-prophecy-of-react).

So I see no other option than to shift the JavaScript ecosystem gradually, which ironically is what some critics refuse. In particular, I don't understand why they refuse "transitional" concepts like the [Island Architecture](https://jasonformat.com/islands-architecture/):

<blockquote markdown="1">
"Islands" is the rebranding that progressive enhancement never should have needed.

The problem with progressive enhancement is by nature, it means you have to care about users, whereas "Islands" means developers can continue pretending users don't exist.

– [Andy Bell](https://bell.bz/@andy/109919510521244054)
</blockquote>

Granted, "islands" aren't the user-centric breakthrough that we might have wished for. But it's useful to explain the concept of Progressive Enhancement to someone who is stuck knee-deep in a certain thinking, programming practice, tooling and legacy code. If we want to improve their JavaScript usage, we have to pull them out of that bog. We need to give them better tools that enable them to do the right thing.

## Sprinkling JavaScript

At the same time, we should be honest that a web site doesn't magically get more robust and performant if web developers ditch React or whatever megabyte-heavy JavaScript stack they are using right now.

For more than 20 years, I've sprinkled JavaScript on HTML, I've built with Progressive Enhancement in mind, I've helped people fixing their JavaScript, with and without frameworks.

One thing I have learned and do not get tired mentioning is that "vanilla" JavaScript is a clusterfuck as well. I don't recommend writing client-side JavaScript without a proper concept, without proven patterns and tools. Without guidance and guardrails, you'll end up with a buggy, slow, incoherent, insecure and unmaintainable site.

The beauty and joy of client-side JavaScript is that there is no inherent purpose or limit. That means that Thou Shalt set up rules and restrain yourself to make your JavaScript benefit the user.

Progressive Enhancement provides guardrails, but so do frameworks. To illustrate that, let me tell you from the Golden Age of jQuery and Ajax, before component libraries like React took over. What did "sprinkle JavaScript on top of HTML" mean back then?

Two-thirds of your front-end logic was server-delivered, declarative HTML and CSS. The other two-thirds was imperative, low-level jQuery DOM manipulation, event handling, setting classes and inline styles.

The user session and the user interface state was two-thirds on the server, two-thirds on the client. Again, the client state was two-thirds in the DOM – as element presence, classes, data attributes, JSON etc. The other two-thirds was in JavaScript variables, most of them global.

Yes, there was roughly one third overlap and duplication, but no proper connection or binding. There was no easy state change and automatic DOM update. This was a developing nightmare.

More importantly, such interfaces were error-prone and brittle. They failed their users. A user could easily get into a <i>kaput</i> state.

It was React that introduced the concept that [the user interface is a function of the application state](https://www.kn8.lt/blog/ui-is-a-function-of-data/). The page DOM should always reflect the application state properly and consistently. This concept is not a fancy legitimation for single-page apps, it addresses problems every tiny JavaScript widget deals with.

React came at the expense of sucking HTML (JSX) and later CSS (CSS-in-JS) into its dysfunctional vortex. Better frameworks let you write plain HTML with non-invasive template logic and plain CSS or Sass that is component-scoped per default. They allow to define the intersections of HTML, CSS and JavaScript more clearly so they can render static pages, mangle and optimize the JavaScript code on compile time, then "hydrate partially" or "resume" what is left on the client.

These frameworks are still the opposite of sprinkling JavaScript onto your HTML. And I think this is totally fine as long as the outcome is an accessible, performant and robust web site.

## Enhancing progressively with JavaScript

Last but not least, if we tell web developers to "use Progressive Enhancement, duh!", especially developers bogged down in React single-page apps, we need to bring along a bouquet of tutorials, best practices and case studies that reflect their needs.

Enhancing progressively with JavaScript means that many practical questions pop up. How do users access and use my site? What are the common points of failure? What is my technical baseline, what is the core functionality? Which enhancement steps do I pick assuming that every step needs a user? How do I bundle enhancements? How do I implement the enhancement steps? What can I achieve with server-side logic, HTML, CSS; which interactions are more user-friendly and even more robust in client-side JavaScript? Can the enhancement steps and different experiences incrementally build on each other? If not, how does the switch from one step to the next look and feel for the user? How do I keep steps in sync and reduce duplication? How to fight fragmentation? How do I guarantee that enhancements are as robust as possible? How do I prevent failure? How do I deal with failure? How do I measure and verify that my Progressive Enhancement approach improved the experience for the different users and situations? […]

I'll stop here, you get the idea. These are questions me and my colleagues are dealing with every day.

By nature, Progressive Enhancement means deep research and learning by doing. Most advocates though tell you that building web sites with Progressive Enhancement is easier and the resulting site gets simpler. They argue that a "minimal viable product" approach will do away with unnecessary complexity of JavaScript-heavy front-ends.

There are certainly sites whose core functionality can be implemented with server-rendered forms and minimal JavaScript logic. Even then, how are the enhancement steps implemented that enable users to achieve their tasks faster? Web developers will not – and in my opinion should not – keep their hands off highly dynamic client-side interactivity and associated frameworks.

For many years, I've lamented that only a few people discuss and explore practical Progressive Enhancement with JavaScript on complex sites and web applications that currently default to React monoliths. Seriously, I cannot read another tutorial on Progressive Enhancement that operates on trivial examples that allow straight-forward enhancements or require little client-side JavaScript at all. I wouldn't even recommend them to my colleagues since they don't address their practical problems.

I've created technical demos myself to research and teach certain Progressive Enhancement and robust JavaScript techniques. That is totally fine, but in practice we have highly dynamic web applications that solve complex problems. They are slow, brittle, buggy and inaccessible. Progressive Enhancement can help, among other practices. We need to empower web developers to enhance progressively with JavaScript. Again, that means giving them a bouquet of approachable and adoptable best practices.
