---
layout: post
title: An update on Robust Client-Side JavaScript
description: Where is client-side JavaScript heading?
keywords: javascript, single page apps, testing, frameworks, react
lang: en
---

<svg style="display: none">
  <symbol id="ornament" viewbox="0 0 14.666 16.598">
      <path d="M6.262 13.106q0 1.464-.988 2.47-.988 1.022-2.31 1.022-1.2 0-1.994-.776-.776-.758-.776-1.834 0-.988.6-1.57.617-.6 1.658-.6.723 0 1.217.494.511.476.511 1.094 0 .529-.493.97-.477.458-1.059.458-.44 0-.74-.317-.283-.3-.283-.776 0-.212.124-.459.123-.265.123-.3 0-.529-.37-.529-.3 0-.565.476-.247.459-.247 1.13 0 .881.653 1.498.67.635 1.676.635 1.058 0 1.852-.864.793-.864.793-2.046 0-1.535-2.046-3.404l-1.481-1.34q-.565-.53-.565-.812 0-.459.441-.459.07 0 .212.07.159.071.247.071.194 0 .194-.282 0-.264-.459-.617-.564-.406-1.111-.812-.882-.723-.882-1.57 0-.229.335-.229.035 0 .106.018.088.017.159.017.353 0 .353-.229 0-.035-.283-.688-.388-.846-.688-1.71Q0 .81 0 .581 0 0 .353 0q.23 0 .423.829.318 1.358.759 2.381.458 1.006.687 1.447.653 1.27 1.606 2.646 2.434 3.51 2.434 5.803zM14.666 14.146q0 .97-.811 1.676-.847.759-2.082.759-1.375 0-2.31-1.059-.918-1.04-.918-2.628 0-1.27.777-2.822.282-.547 1.834-3.122.917-1.517 1.27-2.258 1.164-2.452 1.252-3.51.053-.6.071-.67.053-.23.282-.23.318 0 .318.388 0 .177-.741 2.787-.035.124-.035.212 0 .194.14.194.107 0 .3-.07.212-.071.3-.071.23 0 .23.282 0 .706-.882 1.323-1.323.935-1.323 1.164 0 .23.3.23.123 0 .353-.071.229-.088.335-.088.388 0 .388.44 0 .46-.706.9-1.358.882-1.482.988-.6.494-1.234 1.535-1.006 1.64-1.006 2.557 0 1.517.653 2.329.67.81 1.834.81 1.059 0 1.711-.563.653-.547.653-1.43 0-1.887-1.482-1.887h-.105q-.089.018-.089.106 0 .07.388.459.388.388.388.9 0 .51-.405.846-.406.335-1.023.335-.477 0-.83-.476-.352-.476-.352-1.147 0-.67.564-1.199.582-.53 1.288-.53.952 0 1.57.76.617.74.617 1.851z" fill="currentColor" />
  </symbol>
</svg>


In 2017, I published the online book **[Robust Client-Side JavaScript – A Developer’s Guide](/robust-javascript/)**. More than five years later, I think my advice is still valuable. JavaScript as a language has not changed much when it come to techniques for writing robust code.

At the moment I do not have the time for a substantial book update. In this post, I would like to describe how I regard the whole issue today and how I would restructure the book today.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Recently, yet another debate sparked over single page apps, client-side frameworks like [React](https://www.zachleat.com/web/react-criticism/) and client-side versus server-side rendering. The arguments are not new. During the last decade, I found criticism of the dominant client-side JavaScript usage necessary and worthwhile. Especially proponents of progressive enhancement challenged the JavaScript ecosystem. Yet the mainstream did not adapt patterns for robustness and performance. Web sites became slower, more fragile, error-prone, inaccessible and exclusive largely due to client-side JavaScript misuse.

There always has been an class of full-stack, “universal” JavaScript frameworks with a focus on speed and simplicity – think of [Marko](https://markojs.com/), [Astro](https://astro.build/), [Fresh](https://fresh.deno.dev/) or [Qwik](https://qwik.builder.io/). They render HTML on the server and aim to ship the minimal necessary amount of JavaScript to the client. The client-side JavaScript then picks up where the server-side JavaScript left off, ideally without duplicating the server-side logic. More and more frameworks adapt such a workflow. But the mainstream is still dominated by React monoliths that comprises megabytes of client-side JavaScript.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Unfortunately, the chasm between the opposite sides of the debate grew wider. The groups are no longer listening and talking to each other, but mock and ridicule each other while talking to their in-group. Echo chambers in social media amplify this divisive discourse.

Certain posts from prominent JavaScript critics are filled with scathing polemic. They personally attack JavaScript project maintainers, calling them [liars, fraudsters and grifters](https://infrequently.org/2023/02/the-market-for-lemons/) because they only recently have “discovered” the downsides of single page apps.

I am all for radical criticism, especially targeted at billion-dollar tech corporations and powerful project leaders who [try to silence critics](https://hachyderm.io/@zachleat@zachleat.com/109830049815165514). We need to hold them accountable for tech that produces harmful, subpar web experiences. They deserve their decent share of “told you so”.

It is frustrating that influencial people did not listen to the facts or did not deliver on their own promises. Will it help to call them fraudsters in the moment they start to acknowledge the facts? I believe vitriol makes the situation even more dire. I am disappointed that smart and influential people who made valueable contributions to the web engage in mudslinging.

Only a few note that such a behavior may harm the developer community that is already toxic and exclusive:

<blockquote cite="https://hachyderm.io/@hbuchel/109830004886148541" markdown="1">

I've been wailing on about <abbr title="single page apps">SPA</abbr> frameworks recently (like a lot of us have, probably because we've found more of our people over here) but just to be clear:

The world sucks right now. Get a job where you can. If React or Vue or Angular or Next or whatever gets you a job, then that is absolutely fantastic. If you are new in web dev and it introduces you to a love for the web, that is also fantastic.

You're going to spend a lot  of time as a web developer figuring out where web experiences are broken for humans and how your platform or tech choices affect that. That always has been and is always going to be true.

Sometimes this conversation can veer into the "sounding self righteous" lane which gives me the ick.

– <a href="https://hachyderm.io/@hbuchel/109830004886148541">Heather Buchel</a>

</blockquote>

<blockquote cite="https://social.lol/@sophie/109836319615664190" markdown="1">

There’s a lot of fair criticism of React floating around at the mo. My one request is that people take care to separate “The React Community” from the people who just get paid to build things in React. I build stuff in React for money, but I do it as accessibly and consciously as I can. I know it’s far from ideal but that’s what we use. Switching to Not React isn’t really an option in an org of our size.
So please avoid mud-slinging and name-calling, and keep the discussion civil.

I think the biggest takeaway is that you probably don’t need React; and if you really do, and you’re sure, make sure you’re aware of the drawbacks and have plans to mitigate them.

– <a href="https://social.lol/@sophie/109836319615664190">Sophie Koonin</a>

</blockquote>

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

What a year, huh? – Captain, it’s February!

Anyway, where were we?

My 2017 book was an attempt to mediate between the different camps of the debate on client-side JavaScript usage. Much advice from JavaScript critics was and is abstract for the sole reason that you need a robust site architecture in the first place before writing any robust client-side JavaScript code. With my book, I wanted to teach patterns any developer who writes client-side JavaScript can apply in their daily work regardless of the framework used.

Around 2015 and 2016, several front-end developers wondered how to properly address JavaScript failure. [What happens when a JavaScript enhancement fails?](https://molily.de/javascript-failure/) These essential and much needed discussions urged me to write a book on robust JavaScript.

Unfortunately, only a few developers and projects picked up the ideas and integrated them into their work. Preventing and dealing with failing JavaScript is still an afterthought for many projects, frameworks and libraries. We need to continuously explore how practical progressive enhancement in JavaScript looks like.

In 2017, I also wanted to emphasize that progressive enhancement is much more than server-side rendering. The discussion on progressive enhancement regarding JavaScript still revolves around server-side rendering versus client-side rendering. For good reason, but this is where progressive enhancement starts.

It is a first step to use a framework that renders fully-functional HTML documents on the server. A frameworks that understands your code, identifies client-side interactivity and figures out the least amount of JavaScript that needs to be shipped to the client.

It does not mean you are done with it. Adding client-side JavaScript should not be one monolithic enhancement step from 0 to 100, but many small deliberate and considerate steps. That is why it is called progressive enhancement.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

So, where are we today? I welcome the new discussions on better web site architectures and sensible JavaScript usage. The industry is already shifting and new universal JavaScript frameworks are pushing the existing ecosystems.

My 2017 book concluded with [Writing less JavaScript](/robust-javascript/#writing-less-javascript):

<blockquote markdown="1">

An important skill of a front-end developer is to know when not to solve a problem with client-side JavaScript. It is always more robust to solve a problem further down in the stack.

If all techniques and tools did not help you to write robust JavaScript, consider reducing the code complexity and the amount of code. In the last resort, reduce the usage of client-side JavaScript. Find simpler solutions that rely on HTML, CSS and server-side logic alone.

</blockquote>

Today I would turn the reasoning upside down. Reducing client-side JavaScript is the most effective technique to prevent JavaScript failure. The most robust client-side JavaScript is the JavaScript that is never written, never shipped to the client and never executed. ([Clever, huh?](https://knowyourmeme.com/memes/roll-safe))

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Apart from that, what techniques are essential today to write robust JavaScript?

I’ve mentioned **TypeScript** as a compile-to-JavaScript language in the book. Since 2017, TypeScript conquered the JavaScript world, superseded other compile-to-JavaScript languages and became a de-facto standard for a great share of libraries and frameworks.

TypeScript is the single tool that made my JavaScript significantly more robust in the last couple of years. It helps me to design cascades of operations that may fail and helps me to implement the success and error handling. Strict typing forces me to think twice and write cautious code.

With the goal of writing robust JavaScript in mind, we should utilize TypeScript as a static code checker for JavaScript – like ESLint.

TypeScript is also a language that is a superset of JavaScript. It is also a program that compiles (transpiles) this language to JavaScript. But you do not have to use these parts to get most benefits.

You can check plain JavaScript files with the TypeScript type checker. It understands plain JavaScript well enough to spot my lapses and lazy thinking. You can [define types and add type annotations with JSDoc](https://www.typescriptlang.org/docs/handbook/jsdoc-supported-types.html).

While there are benefits to write `.ts` files with TypeScript syntax, this is not necessary to get started. In several projects, I have hardly written any `.ts` file, but TypeScript is an essential development tool.

My advice is to install an editor like Visual Studio Code and start using TypeScript in your `.js` or `.jsx` or `.vue` or `.svelte` files today.

I understand that TypeScript adds a heavy burden for web developers who already struggle with JavaScript and its toolchains. (I guess that is, ehm, everyone here?) Fortunately, editors, libraries and frameworks make it easy to integrate typed code gradually so you can learn as you go.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

My 2017 book featured several chapters on **automated testing** from a high-level perspective. Since then, I gained more experience on automatic testing of web sites in general and client-side JavaScript in particular.

In 2021, I published an extensive book on **[Testing Angular](https://testing-angular.com/)**. It is the spiritual successor of <cite>Robust JavaScript</cite>.

The fact that the book deals with Angular is partly consequence, partly coincidence. I had been working on large Angular projects for clients who demanded (and could afford) technical robustness and understood test automation. Plus, Angular is built with testability in mind and the community values well-tested, robust code.

While the second book goes into all necessary details and Angular specifics, it was the big picture that inspired me. How can testing help us to make better web sites that do not let the user down, but empower them? How can we write better, more robust JavaScript through testing?

So eventually I wrote <cite>Testing Angular</cite> for the same reason I wrote <cite>Robust JavaScript</cite>: I wanted to explore and teach writing better web experiences. Preventing JavaScript failure is still my white whale.

Fortunately, testing tools improved since 2017 and both end-to-end testing as well as JavaScript unit and integration testing got more approachable and reliable. Today I put much more emphasis on automated testing to make JavaScript robust.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

Angular is the “special occasion” framework in the JavaScript world. While [jQuery is used on 81% and React is used on 8% of the web sites analyzed](https://almanac.httparchive.org/en/2022/javascript#libraries-and-frameworks), Angular is suitable for heavy-weight corporate intranet applications with a restricted audience using desktop computers.

Especially JavaScript critics shake their head when Angular is mentioned. It ships larger amounts of client-side JavaScript than other frameworks. While it has rudimentary server-side rendering, it is not a practically viable default yet. Nonetheless, I think the Angular community listens to criticism and innovates.

Angular has some architectural advantages that allows it to evolve in order to improve the site’s robustness and thereby the user experience. The core of Angular is a compiler. Like the Svelte compiler, it transforms your high-level, declarative and human-readable code into low-level, imperative and concise code that is shipped to the browser.

The Angular team can optimize the compiler to produce more efficient and less code. In fact, the team recently rewrote the whole compiler and rendering engine. Thanks to the ahead-of-time compilation, there is dormant potential in Angular.

I am excited that the Angular ecosystem catches up with projects like [Analog.js](https://github.com/analogjs/analog), a full-stack framework that compares itself to SvelteKit, Nuxt and Next.js. Although Angular will most likely stick with the single page application architecture, folks from the Angular community are building next-generation frameworks. For example, Miško Hevery, the creator of the original AngularJS framework and co-creator of Angular, now works on Qwik.

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

While I still deem it necessary to teach basic defensive coding techniques, one cannot talk about robust client-side JavaScript without discussing the whole web site architecture. I have done so in several blog posts, but not prominently in <cite>Robust JavaScript</cite>.

Client-side JavaScript affects performance and accessibility, and I have realized that these are essential aspects of robustness as well. If JavaScript is freezing a mobile browser for 20 seconds, the site is not usable, let alone robust. If a single page application breaks browser navigation features that users of assistive technologies rely on in particular, the site is not robust. And so on.

All things considered, I think we are in a crucial phase of turmoil. My hope is that the JavaScript community convenes in a respectful and productive way, takes criticism seriously and makes radical technical and social changes.

<style>
  .separator {
    display: block;
    margin: 2rem auto;
    width: 2rem;
    height: 2rem;
    color: #e0e0e0;
  }
</style>