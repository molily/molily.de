---
layout: post
title: "ECMAScript modules and browser compatibility"
description: "How do we ship modern JavaScript in a compatible way?"
keywords: javascript, browser, compatibility, ecmascript, esm, modules
lang: en
---

One of the biggest changes in JavaScript in the last decade was the switch from loosely-connected scripts to ECMAScript modules (ESM). This affected both client-side and server-side JavaScript code.

JavaScript programmers today take it for granted that they can pull a library dependency into client-side or server-side JavaScript code with `npm install` or other package managers that build on the npm registry. A decade ago, this crucial infrastructure was still in its infancy.

In client-side JavaScript, an early module format was Asynchronous Module Definition (AMD). It was used together with pioneer loaders like RequireJS or [SystemJS](https://github.com/systemjs/systemjs) and bundlers like r.js. In server-side JavaScript runtimes, the CommonJS module specification predated Node.js but Node.js made it made popular from 2009 on.

## ECMAScript modules

In 2015, ECMAScript 6 standardized a declarative syntax for JavaScript files to import and export values.

`index.js:`

```javascript
import { helloWorld } from './helloWorld.js';

helloWorld();
```

`helloWorld.js:`

```javascript
export const helloWorld = () => {
  console.log('Hello world!');
};
```

Node.js experimentally supported ECMAScript modules in version 8.5.0 (September 2017). Since version 14 (April 2020), the implementation is no longer experimental. Since version 15.3.0 (November 2020), it is considered stable.

It took fierce discussions to agree on how Node handles ECMAScript modules, like specifying `"type": "module"` in package.json, handling .js, .mjs and .cjs files. The ecosystem-wide migration from CommonJS to ECMAScript modules is far from finished. It still keeps Node authors busy and causes headaches.

# ECMAScript modules in the browsers

For client-side JavaScript, authors quickly adopted ECMAScript modules when writing their code. Transpilers like [Babel](https://babeljs.io/) and bundlers like [Rollup](https://rollupjs.org/) and [Webpack](https://webpack.js.org/) understood ECMAScript modules early. The bundlers used the declarative imports and exports to understand the module dependency tree and to optimize the output bundles ("tree shaking").

However, browsers did not support ECMAScript modules natively yet. They did not understand the `import`/`export` syntax yet. So the bundlers produced JavaScript files without ECMAScript module syntax.

Webpack used its own mechanism for splitting code into *chunks* and loading them dynamically. Rollup relies on the module loaders RequireJS or SystemJS to be present at runtime.

In January 2016, [the HTML specification was extended](https://github.com/whatwg/html/pull/443) to introduce a new script type – module scripts. In these scripts, the familiar `import` and `export` syntax can be used.

```html
<script type="module">
  // This is ECMAScript module code and module rules apply.
  // This code is evaluated in Strict Mode.
  // import and export may be used here.
  import { helloWorld } from './helloWorld.js';
  helloWorld();
</script>
<!--
The execution of the external module script is deferred.
That is, it is executed when the document is ready.
-->
<script type="module" src="externalModuleScript.js"></script>
```

For backwards-compatibility, [the `nomodule` attribute for `script` was introduced](https://github.com/whatwg/html/pull/2261) in January 2017. Browsers with module support ignore these scripts. Old browser do not recognize the attribute, simply ignore it and execute the script as usual.

```html
<script nomodule src="scriptForOldBrowsers.js"></script>
```

This allows web developers to ship two different versions of their code:

- One **modern build** with native ECMAScript modules for new browsers.
- One **legacy build**, backwards-compatible with old browsers that lack support for ECMAScript modules.

Since May 2018, all major browser engines – Chrome 61 / Edge 79, Safari 11, Firefox 60 – [support native ECMAScript modules](https://caniuse.com/es6-module).

Today, 95.69 % of all browsers worldwide fully support `<script type="module">`, according to Can I Use. The remaining 4.31 % have no support. Bear in mind that these values are global means. In your user base, in your audiences, the values may be lower or higher.

## ECMAScript modules as a baseline

The switch to ECMAScript modules for client-side code seems small at first sight. We do not need a module loader like SystemJS any longer and the shipped production code is more closer to the written code. This is it, or not?

The crucial point is that ECMAScript module support may serve as a litmus test for several ECMAScript features and JavaScript APIs. The ECMAScript modules build is only downloaded and executed by the mentioned browsers. [We know what they are capable of](https://philipwalton.com/articles/deploying-es2015-code-in-production-today/) and may treat them as a baseline for the modern browser build.

To support older browsers, transpiling ECMAScript 6+ code to ECMAScript 5 using Babel is a common practice. For our modern browser build, there is no need to. The targeted browsers fully support ECMAScript 6 and even some features of ECMAScript 7 (2016) and 8 (2017). We can skip the transpilation completely if we stick to supported syntax features. We can also skip certain feature detection and omit polyfills for supported APIs.

The resulting modern build is smaller and faster. It is a clear win to ship ECMAScript module code to browsers that support it. But it requires developers to compile and embed two builds: the ECMAScript modules build and the legacy build for browsers without ECMAScript module support. Since the code of the two builds may differ considerably, developers need to test and debug both.

## Dynamic imports

There is one missing piece in the puzzle: We still want to split the bundle into smaller chunks and load them lazily when the page actually needs the JavaScript code. Static imports load code eagerly. Bundlers like Webpack and Rollup would emit one gigantic JavaScript file even when an individual page just needs a tiny fraction of JavaScript.

Enter dynamic imports. In addition to static, declarative import statements, ECMAScript 11 (2020) introduces [dynamic, programmatic import calls](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/import). `import()` is a function that expects the URL of the script and returns a promise:

```html
<button>Say hello!</button>
<script type="module">
document.querySelector('button').addEventListener(
  'click',
  async () => {
    // Load code dynamically when the user interacts
    const { helloWorld } = await import('./helloWorld.js');
    helloWorld();
  }
);
</script>
```

Dynamic imports are supported by all major browser engines since Chrome 63 (December 2017), Safari 11.1 (April 2018) and Firefox 67 (May 2019). Edge 79 (January 2020) was the last browser to support them, when Microsoft switched from EdgeHTML to Chromium and the Blink engine.

Compare this to the support for `<script type="module">`: Chrome 61 (September 2017) / Edge 79 (January 2020), Safari 11 (September 2017) and Firefox 60 (May 2018).

## Intermediate browsers

There is a small range of browser versions that do support ECMAScript modules but not dynamic imports: Chrome 61 to 62, Firefox 60 to 66, Edge 16 to 78 and Safari 10.3 to 11.0.

Luckily, these browser versions are hardly relevant in 2023. Only few users are stuck on old versions of Chrome, new Edge and Firefox. These "evergreen" browsers are updated automatically to a new major version every month. Safari does not update that often, but the version range 11 (September 2017) to 11.1 (April 2018) is tiny.

How should we deal with these intermediate browsers? We have two options:

1. Serve them the modern build, but do not use native dynamic imports. Use a module loader like SystemJS for importing code dynamically.
2. Serve them the legacy build without ECMAScript module code and without dynamic imports. Use a module loader like SystemJS for dynamic imports.

Because of the small market share of intermediate browsers, most projects use native dynamic imports and put intermediate browsers into one bucket with old browsers.

Shifting the baseline to browsers that support dynamic imports gives us even more freedom for what is possible in the modern build.

## Detecting support for dynamic imports

But how do we serve the legacy build to intermediate browser? The combination of `<script type="module">` and `<script nomodule>` allows us to create a conditional loader: If the browser supports ECMAScript modules, load the modern build, otherwise load the legacy build.

Unfortunately, there is no simple conditional loader for scripts using dynamic imports. This feature cannot be detected easily. The reason is that `import` is a reserved word in ECMAScript. Reserved words cannot be used in expressions where an identifier is expected.

If an intermediate browser parses a script with `import('…')`, it fails with a syntax error. When the parsing fails, the browser cannot execute the code.

```html
<script type="module">
// Wrap code in a function to prevent a top-level await.
(async () => {
  // The next line raises a SyntaxError in intermediate browsers.
  const { helloWorld } = await import('./helloWorld.js');
  // The next line in only executed if the browser supports
  // dynamic imports. It is never executed in intermediate browsers.
  helloWorld();
})();
</script>

```

Luckily, the syntax error that prevents execution already hints at a possible solution. To detect support for dynamic imports – we perform a dynamic import! If the browser executes the imported code and the code after the `import()` call, it is a new browser. If the browser does not execute the code, it is an intermediate browser.

We use dynamic imports to load the bundle that in turn uses dynamic imports. This guarantees us that only capable browsers execute the code. All other browsers are served the legacy bundle.

```html
<script type="module">
// Try to load bundle for modern browsers.
import('./bundle-with-dynamic-imports.js');
// Set a global flag that the browser supports dynamic imports.
window.__browserSupportsDynamicImports = true;
</script>
<script type="module">
// This script is executed in browsers with ECMAScript module support.
// If we cannot find the flag, the browser must be intermediate!
if (!window.__browserSupportsDynamicImports) {
  // Load the legacy build.
  const script = document.createElement('script');
  script.src = './legacy-build.js';
  document.head.appendChild(script);
}
</script>
<!-- Legacy build for browsers without ECMAScript module support. -->
<script nomodule src="./legacy-build.js"></script>
```

## Vite's legacy plugin

This structure of the snippet above is adapted from the [legacy plugin for the Vite build tool](https://github.com/vitejs/vite/tree/main/packages/plugin-legacy). With `@vitejs/plugin-legacy`, Vite compiles two builds:

1. The _modern build_ with an entry script and chunks for modern browsers that support ECMAScript module and dynamic imports.
2. The _legacy build_ with an entry script and chunks for legacy browsers. The code is transpiled with Babel.

The actual cross-browser Vite embed code is much more sophisticated: Vite detects support for `import.meta.url`, dynamic imports and async generators in one script. If these three features are supported, it sets the flag `__vite_is_modern_browser`. If this flag is _not_ set, it first loads the _legacy polyfill_ which contains SystemJS and, well, polyfills. Using SystemJS, it then loads the _legacy entry_. (This is the equivalent to `legacy-build.js` in the example above.)

Vite also deals with a nasty problem of Safari 10.1, released in March 2017. This browser has impartial support for ECMAScript modules. It supports `<script type="module">` but not `<script nomodule>` and therefore executes both code. Vite includes a [workaround that prevents Safari 10.1 from executing `nomodule` scripts](https://gist.github.com/samthor/64b114e4a4f539915a95b91ffd340acc). Fortunately, this problem has been fixed in Safari 11.

## Module preload

If you use dynamic imports frequently in your code base or have several entry points that share library code, bundlers like Rollup will create many small chunks. An individual page will load numerous small JavaScript files even if there is little JavaScript interactivity.

This is not necessarily a performance penalty since HTTP/2 multiplexing can request and receive many resources in parallel. Once these small chunks with reused library code are cached in the browser, subsequent pages have an excellent loading performance.

But often the dependency graph is a chain: a.js imports b.js, b.js imports c.js, for example. If there are other lazy-loaded modules pointing to b.js and c.js, the code does not end up in one chunk, but in three chunks.

When a page embeds a.js, a request waterfall happens. The browser downloads a.js, b.js and c.js subsequently, not in parallel. It downloads a.js, finds the import of b.js, downloads b.js, finds the import of c.js, downloads c.js. Finally, the browser is able to execute a.js after all dependencies have been loaded in sequence.

Depending on the network bandwidth and latency (round-trip time), this is a performance nightmare. To mitigate this problem, Vite analyzes the module graph and adds [`<link rel="modulepreload">`](https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/modulepreload) elements to the page. So when the page embeds a.js with `<script type="module" src="a.js">`, Vite will add `<link rel="modulepreload">` for b.js and c.js. The browser then requests and downloads a.js, b.js and c.js in parallel, utilizing the full available bandwidth.

This improves the cold boot performance while using many small chunks with the minimal amount of JavaScript necessary for a certain page.

## Pragmatic compatibility with old browsers

Vite is an example for a mature build tool that helps you ship ECMAScript modules. It supports old as well as intermediate browsers and optimizes the performance for modern browsers. This blog post cannot get into all details of Vite's strategy.

For your project, you need to decide which browser capabilities are required and which browsers you can support easily.

For example, I am currently working on a JavaScript library for a client. The library does not actively support old browsers without ECMAScript module support, it does so passively. With little effort, old browsers get a basic functionality. We have a pragmatic approach:

1. There is ECMAScript syntax that can be transpiled easily and there are browser APIs that can be polyfilled easily. We make sure to include these polyfills and configure Babel to [perform the right transformations to support a certain list of browsers](https://babeljs.io/docs/babel-preset-env). See also the [Vite legacy plugin options](https://github.com/vitejs/vite/tree/main/packages/plugin-legacy#targets) `targets` and `polyfills`.

   These polyfills and transformations typically affect the legacy bundle only since the baseline for the modern build is already quite high.
2. There is ECMAScript syntax that cannot be transpiled and there are browser APIs that cannot be polyfilled with reasonable effort.
   - If we do not strictly need these capabilities, we do not use them. We check browser support before using a JavaScript feature to avoid raising the bar for no important reason.
   - If these capabilities are highly beneficial, we use them in browsers which support them, guarded by feature detection. We make sure that older browsers do not throw parsing or runtime errors. We write [robust JavaScript](https://molily.de/robust-javascript/).

## How frameworks employ ECMAScript modules

When all major browser engines implemented support for `<script type="module">` in 2018, JavaScript programmers and projects started to switch.

How is the situation today? What is the strategy of popular build tools and frameworks?

Here is a quick survey:

- **Vite**: ECMAScript modules per default. Option to support older browsers with `@vitejs/plugin-legacy` (see above).
- **create-vue@3**: Uses Vite and has the same defaults, supports `@vitejs/plugin-legacy`.
- **create-react-app**: Does not use ECMAScript modules. Uses Babel and supports polyfills.
- **Astro**: Does not use ECMAScript modules. But the `astro-island` custom element uses dynamic imports without feature detection or fallback. So the minimal required browser needs to support both `customElements.define()` and dynamic imports.
- **Angular CLI**: ECMAScript module build only. [Angular only supports most recent browsers](https://angular.io/guide/browser-support). Angular uses dynamic imports for route-level code splitting. (Angular 16 allows to use Vite as dev server, but the production build works the same.)
- **Next.js**: Does not use ECMAScript modules. Uses `nomodule` to load polyfills though. Allows to [configure Babel and load polyfills](https://nextjs.org/docs/basic-features/supported-browsers-features).
- **Nuxt.js**: Does not use ECMAScript modules. One build per default. Allows to [build and serve a modern and a legacy build](https://nuxtjs.org/docs/configuration-glossary/configuration-modern/).
- **Sveltekit**: Uses dynamic imports without feature detection or fallback. Sveltekit uses Vite under the hood, but [`@vitejs/plugin-legacy` currently does not work with Sveltekit](https://github.com/sveltejs/kit/issues/12).
- **Remix**: ECMAScript modules and dynamic imports only. On purpose, [Remix runs in browsers that support ECMAScript modules](https://remix.run/docs/en/main/guides/browser-support). Remix supports older browser by not serving them JavaScript, falling back to server-side logic.

This overview merely describes, but does not judge the different approaches. While backwards compatibility is a virtue, each framework and site author need to decide on the minimum browser requirements and how to support browsers that do not meet them.

## Cutting the mustard with ECMAScript modules

Back in 2012, developers at the BBC used Progressive Enhancement to deliver a robust site to all browsers. The core experience in plain HTML worked without JavaScript. The developers guarded the JavaScript with feature detects so it only executed in browsers that "[cut the mustard](http://web.archive.org/web/20201209062357/http://responsivenews.co.uk/post/18948466399/cutting-the-mustard)", that is, meet a certain mark.

This technique absolved developers from writing convoluted, backwards-compatible JavaScript. It made the JavaScript simpler and more robust since it did not have to deal with every eventuality.

Since 2018, several [developers have been proposing ECMAScript modules as a new way to cut the mustard](https://fettblog.eu/cutting-the-mustard-2018/). As you can see in the list above, several frameworks are applying this approach.

Not all frameworks use Progressive Enhancement or Graceful Degradation. Not all frameworks have a strategy for browsers that do not meet the minimum requirements. For some frameworks, the site is just empty or broken in these browsers.

It is hard to even find out the minimum requirements of popular frameworks today. Only few state them explicitly. Most tacitly use JavaScript APIs or ECMAScript features introduced recently without realizing that this raises the bar of entry.

## Using new ECMAScript syntax safely: The optional chaining operator

Unfortunately, developers often raise the bar unintentionally. For example, I like the [optional chaining operator](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining). It helps to write more robust code.

```javascript
const user = { name: 'Robin' };
// The user might have an address or not
console.log(user.address?.street);
```

Technically, optional chaining is "syntactic sugar": a shorter, more readable way to write a logic that was already possible before. Syntactic sugar can easily be transpiled into older syntax with broader support:

```javascript
const user = { name: 'Robin' };
// The user might have an address or not
const street = user.address ? user.address.street : undefined;
console.log(street);
```

Historically, optional chaining is a relatively new addition to ECMAScript. It was introduced in ECMAScript 11, published in June 2020. The major browser engines already shipped support in February or March 2020 when the corresponding proposal was finished.

By the way – ECMAScript 11 is the same edition that introduced [dynamic imports described above](dynamic-imports). But browsers started to support dynamic imports much earlier than optional chaining.

Today, optional chaining [is supported by 93.33 % browsers worldwide, according to Can I Use](https://caniuse.com/mdn-javascript_operators_optional_chaining). 6.67 % of all used browsers do not support it. Some of them will execute the modern build but will not support optional chaining.

Recently, Jim Nielsen described in his blog post [The Optional Chaining Operator, "Modern" Browsers, and My Mom](https://blog.jim-nielsen.com/2022/a-web-for-all/) what happens when new JavaScript syntax is used without caution:

<blockquote cite="https://blog.jim-nielsen.com/2022/a-web-for-all/" markdown="1">

The real-life impact of our technical decisions really hit home to me once again: my Mom had trouble volunteering and participating in her local community because somebody shipped the optional chaining operator in their production JavaScript.

</blockquote>

If you use new syntax features, do so consciously and mind the consequences. New syntax raises the bar and may thwart previous efforts to support older browsers.

To use the optional chaining operator safely, we can apply the knowledge from [detecting support for dynamic imports](#detecting-support-for-dynamic-imports).

We can either [transpile it to more robust syntax using Babel with @babel/preset-env](https://babeljs.io/docs/babel-plugin-proposal-optional-chaining) – both in the modern and the legacy build.

Or we detect the browser support by using optional chaining and setting a flag. If the browser parses the code and sets the flag, we load the modern build that may use optional chaining right away.

We did similar with `window.__browserSupportsDynamicImports` above. As we have learned, Vite checks for multiple syntax features and sets `__vite_is_modern_browser`. Let us integrate two syntax checks into one script that sets `window.__isModernBrowser`:

```html
<!-- Litmus test that uses modern syntax and sets a flag. -->
<script type="module">
// Try to use optional chaining. This code does nothing on
// new browsers and causes a syntax error on old browsers.
window.__testingOptionalChaining?.test;
// Load modern build with dynamic import. It is safe to use
// dynamic imports and optional chaining in the build.
import('./modern-build.js');
// Set a global flag that the browser passed the litmus test.
window.__isModernBrowser = true;
</script>
<script type="module">
// This script is executed in browsers with ECMAScript module
// support. If the flag is not set, the browser did not pass
// the litmus test.
if (!window.__isModernBrowser) {
  // Load the legacy build.
  const script = document.createElement('script');
  script.src = './legacy-build.js';
  document.head.appendChild(script);
}
</script>
<!-- Legacy build for browsers without ECMAScript module support. -->
<script nomodule src="./legacy-build.js"></script>
```

## The future

The ECMAScript standard and browser APIs keep evolving. Many innovations make it easier to deliver small, fast, custom-fit JavaScript to the browser.

There are several upcoming features that will make ECMAScript modules in the browser more powerful. [Import maps](https://github.com/WICG/import-maps) is one of them. Since March 2023, all major browser engine support import maps. With imports maps, you do not necessarily need a traditional package manager and a module bundler to import third-party dependencies.

Luckily, there is a [shim for import maps](https://github.com/guybedford/es-module-shims). Note that it is highly complex since it fetches, parses and rewrites the module code right in the browser before executing it.

Even if we take ECMAScript modules, dynamic imports and potentially more features as a baseline for our JavaScript, we constantly need to think about browser compatibility. The nature of the web has not changed. We always have to deal with diverse browsers with hugely different capabilities.

Therefore we still need Progressive Enhancement and Graceful Degradation. If we use the latest JavaScript features and want to support slightly older browsers, we still need two builds. We will still need transpilation, feature detects and polyfills in the future.
