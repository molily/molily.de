---
layout: post
title: "Things I’ve learned: Angular, TypeScript and RxJS"
description: "Exploring programming paradigms in different JavaScript stacks"
keywords: JavaScript, Single page applications, Backbone, Chaplin, Marionette, React, Redux, Preact, Angular, TypeScript, RxJS
lang: en
---

In this post I’d like to share my experience with web development technologies I’ve encountered recently. I won’t give you a thorough introduction to these technologies, only describe my personal viewpoint.

## Back story: Backbone, Chaplin, React

I’m developing web sites since the late 1990s, and today I’m a mostly writing frontend code with a focus on JavaScript. I’ve never actively chosen to become a “JavaScript expert”. Ten years ago I was a regular in the German [Selfhtml Forum](https://forum.selfhtml.org/). When JavaScript gained more and more traction in the the wake of “Ajax”, more JavaScript questions were posted and I tried to answer them. By looking into other people’s problems, I’ve learned the depths and shallows of JavaScript.

The company I work for, [9elements](https://9elements.com), used JavaScript quite early for animation, visualization and rich interactions. In 2012 we released [Chaplin](http://chaplinjs.org), a [Backbone](http://backbonejs.org/)-based architecture for JavaScript single-page applications. Later we discovered the power of React and Redux, and they are still the tools of our choice. In a recent smaller project, we substituted React with [Preact](https://github.com/developit/preact) instead of React, and we were happy about that choice.

The React and Redux ecosystem has many good practices built-in that come in handy when developing larger web apps. For people who’ve used plain JavaScript, jQuery or Backbone/Chaplin, the simple and clear component model of React is an epiphany.

## Giant leap: Redux

Recently [I was wondering](https://twitter.com/molily/status/917477498409152513) which web development technology improved the way I work most in the last years. There are certainly a few leaps, like Redux, but I think what made web dev easier is the sum of different small tools. Libraries like React and Angular, compile-to-JavaScript languages like Babel and TypeScript, build tools like Gulp, Browserify, Webpack, linters like eslint, testing tools like Karma etc. It’s much easier to produce good code.

Most people would probably say React had a bigger impact on their work than Redux. For me it’s the opposite; Redux was the eye opener. I’ve always struggled with application-wide state management. [Chaplin and Marionette](https://9elements.com/io/comparison-of-marionette-and-chaplin/) made it easier to keep state in central models, but every non-trivial app ended up as a hairball of internal dependencies and confusing model-view bindings.

Redux and the underlying [Flux architecture](https://facebook.github.io/flux/docs/in-depth-overview.html#content) feature ideas of functional and reactive programming and reintroduced these paradigms into web frontend coding. Redux allowed to talk about application state in formal terms again. When something goes wrong in your app, it’s easy to find the cause. Moreover, the parts of the architecture are clearly separated and relatively easy to test in isolation.

## Side effects in Redux: Thunks and Sagas

Still, in large React projects I struggled with testing all parts. In my opinion, Redux has a blank space when it comes to side effects. A side effect is when your app loads data via HTTP or saves data locally. That is, when it actually gets useful. The easiest solution, [redux-thunk](https://github.com/gaearon/redux-thunk), is cumbersome to test. And it opens [Hellmouth](https://en.wikipedia.org/wiki/Hellmouth_(Buffy_the_Vampire_Slayer)) right in the middle of Sunnydale High. More and more logic creeps into action creators while the simple idea of creating actions – <code>const createFoo = (value) => ({ type: FOO, payload: value });</code> – gets lost.

There are ways to solve the [side effects conundrum](https://goshakkk.name/redux-side-effect-approaches/) in Redux, but each comes with a significant overhead. The most ambitious solution I have tried is [Redux Sagas](https://github.com/redux-saga/redux-saga). It is probably the most powerful and complex solution. But it comes at the cost of introducing yet another programming paradigm: concurrency. A saga is a dormant background worker thread that wakes up briefly when you cast the right spell, then sleeps again while keeping its memory. Redux side effects are just a finger exercise for this powerful paradigm.

Most importantly, Sagas use the clever hack of [ECMAScript 6 generator functions](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Iterators_and_Generators) to create asynchronous functions that return multiple values. These values are merely descriptions of what should be done (e.g. “call function <code>fetchUser</code> with <code>1</code>”, without calling the function). That makes them easy to test. But a clever hack using bleeding edge language features is not something you’d want your team to work with.

Another well-known drawback of Redux is that you need a lot of boilerplate code if you have several uniform records with <abbr title="create, read, update, delete">CRUD</abbr> actions that are transmitted over HTTP and a [RESTful API](https://en.wikipedia.org/wiki/Representational_state_transfer). We used helper functions to create reducers, action creators and the corresponding tests. This felt like a step backwards from good old Backbone models that had these conventions baked-in. There are tool to implement [model-based state management](https://github.com/tommikaikkonen/redux-orm) with Redux, but for me these approaches just don’t fit together.

# Angular

This was just the prelude for the topic I’d like to write about. At 9elements, we do have standard tools and favorite development stacks. But we try to use the right tool for a job instead of just the tool we’re used to. In a recent client project, we’re using Angular 2+ and I have the pleasure to set up the architecture.

My first impression was that conceptually, Angular and the React ecosystem I’ve been using are very close. The core concept is writing encapsulated UI components that have a template, scoped styles, well-defined dependencies, inputs/props and outputs/events/callbacks.

So I quickly felt at home when using Angular. Over the years, we had to discover the best practices for React ourselves (e.g. [pure components](https://reactjs.org/docs/react-api.html#reactpurecomponent), [Webpack](https://github.com/webpack/webpack), [Babel](https://babeljs.io/), [eslint](https://eslint.org/), [CSS Modules](https://github.com/css-modules/css-modules) and [CSS-in-JS](https://github.com/MicheleBertoli/css-in-js), [Jest](https://facebook.github.io/jest/), [Enzyme](http://airbnb.io/enzyme/), [create-react-app](https://github.com/facebookincubator/create-react-app) etc.). It seems that Angular 2 together with [angular-cli](https://cli.angular.io/) took all these common practices and put them in one framework and development environment. So I found Angular to be familiar right from the start and I was pleased that most things worked nicely.

Angular has its own specialties that make any app and any single component more complex than in React – at first sight. For example, [dependency injection](https://angular.io/guide/dependency-injection) produces a lot of code that might scare off beginners. For me, the benefit was easy to comprehend, having tested React apps, having used home-grown dependency injection. In a typical Angular app, there is one obvious way how to test a component/service/module. The spec boilerplate is even created by angular-cli. Having these conventions in place is a huge benefit. It makes it easy for a team to develop a good testing discipline.

In Angular, everything feels “enterprisey” with several abstraction layers, meta-structures and boilerplate code. I will probably never grok all details of Angular. But all in all there were no big surprises for me. What I found challenging so far wasn’t Angular, but two adjacent technologies: TypeScript and RxJS.

## TypeScript

[TypeScript](http://www.typescriptlang.org/) is a compile-to-JavaScript language that adds a static type system to JavaScript, by its nature dynamically typed. I’ve written statically-typed languages before, but TypeScript is a good mix of correct, expressive and practical. The Angular ecosystem provides type definitions that make it easy to add type annotations to common data structures and application parts.

TypeScript [with strict null checks](https://www.typescriptlang.org/docs/handbook/release-notes/typescript-2-0.html) shows [how sloppy a programmer you are](https://twitter.com/tomdale/status/736194971712229378). And it shows that common JavaScript API idioms – like methods overloaded with four different signatures – are hard to express with proper type definitions. This constraint is good since it forces you to use simpler, clearer object structures and function signatures.

Still I find it hard to express some structures in TypeScript. Using TypeScript is a constant investment, you need a certain discipline and will power. But the effort is worth the benefit.

Previously, I’ve used the JavaScript IDE [WebStorm](https://www.jetbrains.com/webstorm/)/[RubyMine](https://www.jetbrains.com/ruby/) which offered statical analysis of the JavaScript source code. Navigating in the code base, refactoring and auto-completion was easier than with a plain text editor. With TypeScript and Visual Studio Code however, you gain all the productivity of well-known IDEs.

## RxJS

It was a great decision by the Angular team to write Angular 2 in TypeScript, and to recommend TypeScript for every new Angular project. What I found even more radical was the decision to build Angular core parts on top of [RxJS Observables](http://reactivex.io/rxjs/manual/overview.html). I’ve watched (functional) reactive programming grow from a distance, but I’ve never found a good entry.

The technologies I’ve mentioned here were quite approachable to me. React and Redux for example encourage some functional and reactive programming practices, but they are still quite basic and learnable. Similarly, TypeScript doesn’t offer anything fundamentally new that I haven’t seen in other languages before. RxJS though, and to a lesser extent Redux Sagas, open a window to a world of declarative programming that I haven’t visited to before.

# ngrx: Redux for Angular

So I’m struggling with expressing logic in RxJS that would be simple to implement imperatively. At the same time, I’m convinced that this way of programming has its clear benefits in some cases. For example, I’m using [ngrx, a Redux implementation for Angular](https://github.com/ngrx/platform). ngrx is standing on the shoulders of giants and ships with a practical solution for the side effects riddle: ngrx effects.

Like [“epics” in redux-observable](https://redux-observable.js.org/docs/basics/Epics.html), an [ngrx effect](https://github.com/ngrx/platform/blob/master/docs/effects/README.md) simply maps an observable stream of Redux actions to another stream of actions. Asynchronous side effects are possible by calling injected services. These effects are concise, easy to read and easy to test. Writing them efficiently requires a deep knowledge of RxJS though.

Reactive programming with RxJS feels natural with Angular and ngrx. At the same time it doesn’t integrate magically with Angular components and services, it’s still manual work.

For example, it’s easy to subscribe to an observable somewhere, but it comes with potential problems. [Unsubscribing correctly](https://stackoverflow.com/questions/38008334/angular-rxjs-when-should-i-unsubscribe-from-subscription) isn’t trivial, and by the way, [don’t unsubscribe quite so much](https://medium.com/@benlesh/rxjs-dont-unsubscribe-6753ed4fda87). When using RxJS, you’re quickly lost in [hot vs. cold observables](https://medium.com/@benlesh/hot-vs-cold-observables-f8094ed53339) as well as [sharing and multicast](https://blog.angularindepth.com/rxjs-understanding-the-publish-and-share-operators-16ea2f446635). An observable can maintain subscriptions and act like a cache.

This reminds me of the event-driven architecture that Backbone, Marionette and Chaplin used for model-view binding and application-wide events. It was a step forward back then, but still required manual work and caution. With RxJS, you get even more power and complexity but expressed in a concise, somewhat cryptic declarative language that only a few people on earth speak fluently.

## Conclusion

All programming concepts and libraries used for web interfaces have to deal with similar problems. As different as approaches like React and Angular, Redux Sagas and ngrx effects might be, they address the same problems using different programming paradigms. It’s great to learn new solutions new and see conceptual similarities – both strengths and weaknesses. I’m glad that I have the opportunity to work with these technologies.

Thanks to recent libraries and tools, client-side JavaScript has reached a maturity that allows us to write more robust web applications. The downside is that we’ve reached a complexity where it’s virtually impossible to understand the abstraction layers you’re using. Back in the days of jQuery and Backbone, it was possible to read the full source code and at least understand the overall structure. Today we reach for powerful programming paradigms that are not new but still unfamiliar to most web developers.
