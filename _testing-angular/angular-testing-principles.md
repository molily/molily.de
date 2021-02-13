---
layout: testing-angular-chapter
title: "Angular testing principles – Testing Angular"
description: "How do we take advantage of Angular’s testability?"
keywords: JavaScript, Angular, testing, automated tests, unit tests, integration tests, end-to-end tests
lang: en
draft: true
robots: noindex, follow
---

# Angular testing principles

## Testability

In contrast to other popular front-end JavaScript libraries, Angular is an opinionated, comprehensive framework that covers all important aspects of developing a JavaScript web application. Angular provides high-level structure, low-level building blocks and means to bundle everything together into a usable application.

<aside class="margin-note">Testable architecture</aside>

The complexity of Angular cannot be understood without considering automated testing. Why is an Angular application structured into Components, Services, Modules, etc.? Why are the parts intertwined the way they are? Why do all parts of an Angular application apply the same patterns?

An important reason is **testability**. Angular’s architecture guarantees that all application parts can be tested easily in a similar way.

<aside class="margin-note">Well-structured code</aside>

We know from experience that code that is easy to test is also simpler, better structured, easier to read and easier to understand. The main technique of writing testable code is to break code into smaller chunks that “do one thing and do it well”. Then couple the chunks loosely.

## Dependency injection and faking

A major design pattern for loose coupling is **dependency injection** and the underlying **inversion of control**. Instead of creating a dependency itself, an application part merely declares the dependency. The tedious task of creating and providing the dependency is delegated to an *injector* that sits on top.

This division of work decouples an application part from its dependencies: One part does not need to know how to set up a dependency, let alone the dependency’s dependencies and so forth.

<aside class="margin-note">Loose coupling</aside>

Dependency injection turns tight coupling into loose coupling. A certain application part no longer depends on a specific class, function, object or other value. It rather depends on an abstract **token** that can be traded in for a concrete implementation. The injector takes the token and exchanges it for a real value.

<aside class="margin-note">Original or fake</aside>

This is of immense importance for automated testing. In our test, we can decide how to deal with a dependency:

- We can either provide an **original**, fully-functional implementation. In this case, we are writing an [integration test](../testing-principles/#integration-tests) that includes direct and indirect dependencies.
- Or we provide a **fake** implementation that does not have side effects. In this case, we are writing a [unit test](../testing-principles/#unit-tests) that tries to test the application part in *n*.

A large portion of the time spent while writing tests is spent on decoupling an application part from its dependencies. This guide will teach you how to set up the test environment, isolate an application part and reconnect it with equivalent fake objects.

<div class="book-sources" markdown="1">
- [Angular guide: Dependency injection](https://angular.io/guide/dependency-injection)
</div>

## Testing tools

Angular provides solid testing tools out of the box. When you create an Angular project using the command line interface, it comes with a fully-working testing setup for unit, integration and end-to-end tests.

<aside class="margin-note">Balanced defaults</aside>

The Angular team already made decisions for you: [Jasmine](https://jasmine.github.io/) as testing framework, [Karma](https://karma-runner.github.io/) as test runner as well as [Protractor](https://www.protractortest.org/) for running end-to-end tests. Implementation and test code is bundled with [Webpack](https://webpack.js.org). Application parts are typically tested inside Angular’s [TestBed](https://angular.io/api/core/testing/TestBed).

This setup is a trade-off with strengths and weaknesses. Since it is just one possible way to test Angular applications, you can compile your own testing tool chain.

<aside class="margin-note">Alternatives</aside>

For example, some Angular developers use [Jest](https://jestjs.io/) instead of Jasmine and Karma. Some swap Protractor with [Cypress](../end-to-end-testing/#introducing-cypress). Some use [Spectator](../testing-components-with-spectator/#testing-components-with-spectator) or the [Angular Testing Library](https://github.com/testing-library/angular-testing-library) instead of using `TestBed` directly.

These alternatives are not better or worse, they simply make different trade-offs. This guide uses Jasmine and Karma for unit and integration tests. Later, you will learn about Spectator. For end-to-end tests, this guide deviates from the standard setup by recommending Cypress.

Once you have reached the limits of a particular setup, you should investigate whether alternatives make testing your application easier, faster and more reliable.

## Testing conventions

Angular offers some tools and conventions on testing. By design, they are flexible enough to support different ways of testing. So you need to decide how to apply them.

<aside class="margin-note">Making choices</aside>

This freedom of choice benefits experts, but confuses beginners. In your project, there should be one preferable way how to test a specific application part. You should make choices and set up project-wide conventions and patterns.

<aside class="margin-note">Cast conventions into code</aside>

The testing tools that ship with Angular are low-level. They merely provide the basic operations. If you use these tools directly, your tests become messy, repetitive and hard to maintain.

Therefore, you should create **high-level testing tools** that cast your conventions into code in order to write short, readable and understandable tests.

This guide values strong conventions and introduces helper functions that codify these conventions. Again, your mileage may vary. You are free to adapt these tools to your needs or build other testing helpers.

## Running the unit and integration tests

The Angular command line interface (CLI) allows you to run the unit, integration and end-to-end tests. If you have not installed the CLI yet or need to update to the latest version, run this command on your shell:

```
npm install -g @angular/cli
```

This installs Angular CLI globally so the `ng` command can be used everywhere. `ng` itself does nothing but exposing a couple of Angular-specific commands.

For example, `ng new` creates a new Angular project directory with a ready-to-use application scaffold. `ng serve` starts a development server, and `ng build` makes a build.

The command for starting the unit and integration tests is:

```
ng test
```

This command does several things at once.

<aside class="margin-note" markdown="1">
  `test.ts`
</aside>

First, `ng test` uses Webpack to compile your code into a JavaScript bundle. The entry point for the bundle is `src/test.ts`. This file initializes the Angular testing environment – the `TestBed` – and then imports all files in the directory tree that match the pattern `.spec.ts`.

<aside class="margin-note" markdown="1">
  `main.ts`
</aside>

You might be familiar with the entry point for the application, `src/main.ts`. This file also initializes Angular, but then it typically bootstraps (loads and starts) the `AppModule`. The `AppModule` imports other Modules, Components, Services, etc. This way, the bundler finds all parts of the application.

The test bundle with the entry point `test.ts` works differently. It does not start with one Module and walks through all its dependencies. It merely imports all files whose name ends with `.spec.ts`.

<aside class="margin-note" markdown="1">
  `.spec.ts`
</aside>

Each **`.spec.ts` file** represent a test. Typically, one `.spec.ts` file contains at least one Jasmine test suite (more on that in the next chapter). The files are co-located with the implementation code.

In our example application, the `CounterService` is located in [src/app/components/counter/counter.component.ts](https://github.com/9elements/angular-workshop/blob/main/src/app/components/counter/counter.component.ts). The corresponding test file sits in [src/app/components/counter/counter.component.spec.ts](https://github.com/9elements/angular-workshop/blob/main/src/app/components/counter/counter.component.spec.ts). This is an Angular convention, not a technical necessity, and we are going to stick to it.

<aside class="margin-note">Karma</aside>

Second, `ng test` launches Karma, the test runner. Karma starts a development server at [http://localhost:9876/](http://localhost:9876/) that serves the JavaScript bundles compiled by Webpack.

Karma then launches one or more browsers. The idea of Karma is to run the same tests in different browser to ensure cross-browser interoperability. All widely used browsers are supported: Chrome, Internet Explorer, Edge, Firefox and Safari. Per default, Karma starts Chrome.

<aside class="margin-note">Test runner</aside>

The launched browser navigates to `http://localhost:9876/`. As mentioned, this site serves the test runner and the test bundle. The tests start immediately. You can track the progress and read the results in the browser and on the shell.

When running the tests in the [counter project](https://github.com/9elements/angular-workshop), the browser output looks like this:

<img src="/img/testing-angular/karma-success.png" alt="46 specs, 0 failures" class="image-max-full" loading="lazy">

This is the shell output:

```
INFO [karma-server]: Karma v5.0.7 server started at http://0.0.0.0:9876/
INFO [launcher]: Launching browsers Chrome with concurrency unlimited
INFO [launcher]: Starting browser Chrome
WARN [karma]: No captured browser, open http://localhost:9876/
INFO [Chrome 84.0.4147.135 (Mac OS 10.15.6)]: Connected on socket yH0-wtoVtflRWMoWAAAA with id 76614320
Chrome 84.0.4147.135 (Mac OS 10.15.6): Executed 46 of 46 SUCCESS (0.394 secs / 0.329 secs)
TOTAL: 46 SUCCESS
```

Webpack watches changes on the `.spec.ts` files and files imported by them. When you change the implementation code, `counter.component.ts` for example, or the test code, `counter.component.spec.ts` for example, Webpack automatically re-compiles the bundle and pushes it to the open browsers. All tests will be restarted.

<aside class="margin-note">Red-green cycle</aside>

This feedback cycle allows you to work on the implementation and test code side-by-side. This is important for test-driven development. You change the implementation and expect the test to fail – the test is “red”. You adapt the test so it passes again – the test is “green”. Or you write a failing test first, then adapt the implementation until the test passes.

Test-driven development means letting the red-green cycle guide your development.

<div class="book-sources" markdown="1">
- [Angular CLI reference: ng test](https://angular.io/cli/test)
</div>

## Configuring Karma and Jasmine

Karma and Jasmine are configured in the file `karma.conf.js` in the project’s root directory. There are many configuration options and plenty of plugins, so we will only mention a few.

<aside class="margin-note">Launchers</aside>

As mentioned, the standard configuration opens Chrome. To run the tests in other browsers, we need to install different **launchers**.

The launcher needs to be loaded in the `plugins` array:

```javascript
plugins: [
  require('karma-jasmine'),
  require('karma-chrome-launcher'),
  require('karma-jasmine-html-reporter'),
  require('karma-coverage'),
  require('@angular-devkit/build-angular/plugins/karma')
],
```

There is already one launcher, `karma-chrome-launcher`. This is an npm package.

To install other launchers, we first need to install the respective npm package. Let us install the Firefox launcher. Run this shell command:

```
npm install --save-dev karma-firefox-launcher
```

Then we require the package in `karma.conf.js`:

```javascript
plugins: [
  require('karma-jasmine'),
  require('karma-chrome-launcher'),
  require('karma-firefox-launcher'),
  require('karma-jasmine-html-reporter'),
  require('karma-coverage'),
  require('@angular-devkit/build-angular/plugins/karma'),
],
```

If we want Karma to launch Firefox when the tests run, we also need to add it to the list of browsers: `browsers: ['Chrome']` becomes `browsers: ['Chrome', 'Firefox']`.

<aside class="margin-note">Reporters</aside>

Another important concept of Karma are **reporters**. They format and output the test results. In the default configuration, three reporters are active:

1. The built-in `progress` reporter is responsible for the text output on the shell. While the tests run, it outputs the progress:

   `Chrome 84.0.4147.135 (Mac OS 10.15.6): Executed 9 of 46 SUCCESS (0.278 secs / 0.219 secs)`

   And finally:

   `Chrome 84.0.4147.135 (Mac OS 10.15.6): Executed 46 of 46 SUCCESS (0.394 secs / 0.329 secs)`<br>
   `TOTAL: 46 SUCCESS`

2. The standard HTML reporter `kjhtml` (npm package: `karma-jasmine-html-reporter`) renders the results in the browser.

   <img src="/img/testing-angular/karma-jasmine-html-reporter.png" alt="46 specs, 0 failures" class="image-max-full" loading="lazy">

3. The coverage reporter (npm package: `karma-coverage`) creates the test coverage report. See [measuring code coverage](../measuring-code-coverage/#measuring-code-coverage).

By editing the `reporters` array, you can add reporters or replace the existing ones:

```javascript
reporters: ['progress', 'kjhtml'],
```

For example, to add a reporter that creates JUnit XML reports, first install the npm package:

```
npm install --save-dev karma-junit-reporter
```

Next, require it as a plugin:

```javascript
plugins: [
  require('karma-jasmine'),
  require('karma-chrome-launcher'),
  require('karma-jasmine-html-reporter'),
  require('karma-coverage'),
  require('karma-junit-reporter'),
  require('@angular-devkit/build-angular/plugins/karma'),
],
```

Finally, add the reporter:

```javascript
reporters: ['progress', 'kjhtml', 'junit'],
```

When we run the tests with `ng test`, we will find an XML report file in the project directory.

<aside class="margin-note">Jasmine configuration</aside>

The configuration for the Jasmine adapter is located in the `client` object. To configure Jasmine itself, we need to add the `jasmine` property:

```javascript
client: {
  // leave Jasmine Spec Runner output visible in browser
  clearContext: false,
  jasmine: {
    // Jasmine configuration goes here!
  },
},
```

This guide recommends to activate one useful Jasmine configuration option: `failSpecWithNoExpectations` lets the test fail if it does not contain ant least one expectation. (More on [expectations](../test-suites-with-jasmine/#expectations) later.) In almost all cases, specs without expectations stem from an error in the test code.

```javascript
client: {
  // leave Jasmine Spec Runner output visible in browser
  clearContext: false,
  jasmine: {
    failSpecWithNoExpectations: true,
  },
},
```

<div class="book-sources" markdown="1">
- [Karma documentation: Configuration File](https://karma-runner.github.io/5.2/config/configuration-file.html)
- [Karma documentation: Plugins](https://karma-runner.github.io/5.2/config/plugins.html)
- [npm: List of Karma plugins](https://www.npmjs.com/search?q=keywords:karma-plugin)
- [Jasmine reference: Configuration options](https://jasmine.github.io/api/edge/Configuration.html)
</div>

<p id="next-chapter-link"><a href="../test-suites-with-jasmine/#test-suites-with-jasmine">Test suites with Jasmine</a></p>
