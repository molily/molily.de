---
layout: book
title: "Testing Angular Applications – A Developer’s Guide"
description: ""
keywords: JavaScript, Angular, Testing, Automated Tests
lang: en
draft: true
robots: noindex, follow
---

<style>
#toc li {
  list-style: none;
}
#toc .toc-heading-level-2 { margin-left: calc(1 * 1rem); }
#toc .toc-heading-level-3 { margin-left: calc(2 * 1rem); }
#toc .toc-heading-level-4 { margin-left: calc(3 * 1rem); }
#toc .toc-heading-level-5 { margin-left: calc(4 * 1rem); }

.responsive-iframe { position: relative; margin-left: auto; margin-right: auto; max-width: 1000px; height: 0; padding-top: 56.25%; }
.responsive-iframe__iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 1px solid white; }
</style>

<svg style="display: none">
  <symbol id="ornament" viewbox="0 0 14.666 16.598">
      <path d="M6.262 13.106q0 1.464-.988 2.47-.988 1.022-2.31 1.022-1.2 0-1.994-.776-.776-.758-.776-1.834 0-.988.6-1.57.617-.6 1.658-.6.723 0 1.217.494.511.476.511 1.094 0 .529-.493.97-.477.458-1.059.458-.44 0-.74-.317-.283-.3-.283-.776 0-.212.124-.459.123-.265.123-.3 0-.529-.37-.529-.3 0-.565.476-.247.459-.247 1.13 0 .881.653 1.498.67.635 1.676.635 1.058 0 1.852-.864.793-.864.793-2.046 0-1.535-2.046-3.404l-1.481-1.34q-.565-.53-.565-.812 0-.459.441-.459.07 0 .212.07.159.071.247.071.194 0 .194-.282 0-.264-.459-.617-.564-.406-1.111-.812-.882-.723-.882-1.57 0-.229.335-.229.035 0 .106.018.088.017.159.017.353 0 .353-.229 0-.035-.283-.688-.388-.846-.688-1.71Q0 .81 0 .581 0 0 .353 0q.23 0 .423.829.318 1.358.759 2.381.458 1.006.687 1.447.653 1.27 1.606 2.646 2.434 3.51 2.434 5.803zM14.666 14.146q0 .97-.811 1.676-.847.759-2.082.759-1.375 0-2.31-1.059-.918-1.04-.918-2.628 0-1.27.777-2.822.282-.547 1.834-3.122.917-1.517 1.27-2.258 1.164-2.452 1.252-3.51.053-.6.071-.67.053-.23.282-.23.318 0 .318.388 0 .177-.741 2.787-.035.124-.035.212 0 .194.14.194.107 0 .3-.07.212-.071.3-.071.23 0 .23.282 0 .706-.882 1.323-1.323.935-1.323 1.164 0 .23.3.23.123 0 .353-.071.229-.088.335-.088.388 0 .388.44 0 .46-.706.9-1.358.882-1.482.988-.6.494-1.234 1.535-1.006 1.64-1.006 2.557 0 1.517.653 2.329.67.81 1.834.81 1.059 0 1.711-.563.653-.547.653-1.43 0-1.887-1.482-1.887h-.105q-.089.018-.089.106 0 .07.388.459.388.388.388.9 0 .51-.405.846-.406.335-1.023.335-.477 0-.83-.476-.352-.476-.352-1.147 0-.67.564-1.199.582-.53 1.288-.53.952 0 1.57.76.617.74.617 1.851z" fill="currentColor" />
  </symbol>
</svg>

<p id="sticky-menu">
  <a href="#toc" class="toc-link">
    Table of Contents
  </a>
  <a href="/" title="Home">molily.de</a>
  <a href="https://twitter.com/molily" target="_blank" title="molily on Twitter">@molily</a>
</p>

<div id="toc-and-main">
  <div id="toc-container">
    <nav id="toc">
      <p id="toc-home-link">
        <a href="/" title="Home">molily.de</a>
        <a href="https://twitter.com/molily" target="_blank" title="molily on Twitter">@molily</a>
      </p>
      <h1 id="toc-book-title">Testing Angular Applications</h1>
      <!-- <p id="toc-epub-link"><strong><a href="/assets/.epub" download>Download this book as EPUB (724 KB)</a></strong></p> -->
      <h2 id="toc-heading">Table of Contents</h2>
      <!--
      <ol>
        <li>
          <a href="#introduction">Introduction</a>
        </li>
      </ol>
      -->
      <ol id="generated-toc"></ol>
    </nav>
  </div>

<div id="main-container">
<main id="main" markdown="1">

<h1 id="main-heading">
  Testing Angular Applications
  <span class="subheading">A Developer’s Guide</span>
</h1>

<p class="intro"><em class="intro-caps">The Angular framework</em> is a mature and comprehensive solution for building enterprise-ready applications based on web technologies. At Angular’s core lies the ability to test all application parts in an automated way. How do we take advantage of Angular’s testability?</p>

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## Introduction

Most web developers come across automated tests in their career. They fancy the idea of writing code to scrutinize a web application and put it to an acid test. As web developers, as business owners, we want to know whether the site works for the user, our customers.

Does the site allow the user to complete their tasks? Is the site still functional after new features have been introduced or internals have been refactored? How does the site react to user errors or system failure? Testing gives you answers to these questions.

I believe the benefits of automated testing are easy to grasp. Developers want to sleep well and be confident that their application works correctly. Moreover, testing helps developers to write better software. Software that is more robust, better to understand and easier to maintain.

In stark contrast, I have met only few web developers with a steady testing practice. Only few find it _easy_, let alone _enjoy_ writing tests. This task is seen as a chore or nuisance.

Often individual developers are blamed for the lack of tests. The claim that developers are just too ignorant or lazy to write tests is simplistic and downright toxic. If testing has an indisputable value, we need to examine why developers avoid it while being convinced of the benefits. Testing should be easy, straight-forward and commonplace.

If you are struggling with writing tests, it is not your fault or deficit. We are all struggling because testing software automatically is inherently complicated and difficult.

Why is testing so difficult? First, writing automated tests requires a different mindset than writing the implementation code. Implementing a feature means building a structure – testing means trying to knock it over. You try to find weaknesses and loopholes in your own work. You think through all possible cases and pester your code with “What if?” questions. What seems frustrating at first sight is an invaluable strategy to improve your code.

Second, testing has a steep learning curve. If testing can be seen as a tool, it is not a like a screwdriver or power drill. Rather, it compares to a tractor or excavator. It takes training to operate these machines. And it takes experience to apply them accurately and safely.

This is meant to encourage you. Getting started with testing is hard, but it gets easier and easier with more practice. The goal of this guide is to empower you to write tests on a daily basis that cover the important features of your Angular application.

## Terminology

Before we dive in, a quick note regarding the technical terms. Some words have a special meaning in the context of Angular. In the broader JavaScript context, they have plenty other meanings. This guide tries to distinguish between these meanings by using a different case.

When referring to core Angular concepts, this guide uses **upper case**: _Module, Component, Service, Input, Output, Directive, Pipe_ etc.

When using these terms in the common sense, this guide uses **lower case**: _module, component, service, input, output_ etc.

## Testing principles

There is a gap between practical introductions – how to test a feature at all – and essential discussions on the core concepts – what does testing achieve, which type of tests are beneficial etc. Before we dive into the practical tutorial, we need to reflect on a few basics about testing.

### Why we test – what makes a good test

When you are writing tests, you need to keep in mind what the goals of testing are. You need to judge whether a test is valuable with regard to these goals.

Automated testing has several technical, economical and organizational benefits. Let us look pick a few that are useful to judge a test:

- **Testing saves time and money.** Testing tries to nip software problems in a bud. Tests prevent bugs before they cause real damage, when they are still manageable and under control.

  Of course, quality assurance takes time and costs money itself. But it takes less time and is cheaper then letting the bugs slip through into the software release. When a faulty application ships to the customer, when users run into a bug, when data is lost or corrupted, your whole business might be at stake. After an incident, it is expensive to analyse and fix the bug in order to regain the user’s trust.

  **A valuable test is cost-effective.** The test prevents bugs that could ultimately render the application unusable. The test is cheap to write compared to the potential damage is prevents.

- **Testing formalizes and documents the requirements.** A test suite is a formal, human- and machine-readable description of how the code should behave. It helps fellow developers to understand the requirements the original developers had to implement and the challenges they had to deal with.

  **A valuable test clearly describes how the implementation code should behave.** The test uses a proper language to talk to developers and convey the requirements. The test lists known cases the implementation has to deal with.

- **Testing ensures that the code implements the requirements and does not exhibit bugs.** Testing taps every part of the code in order to find flaws.

  **A valuable test covers the important scenarios** – both correct and incorrect input, expected cases as well as exceptional cases.

- **Testing makes change safe by preventing regressions.** Tests not only verify that the current implementation meets the requirements. They also verify that the code still works as expected after changes. With proper automated tests in place, accidentally breakage is less likely. Implementing new features and code refactoring is safer.

  **A valuable test fails when essential code is changed or deleted.** Design the test to fail if dependent behavior is changed. It should still pass if unrelated code is changed.

### What testing can achieve

Automated testing is a tool with a specific purpose and scope of application. A basic concept is that testing helps you to ship an application that functions according to its requirements. That is true, but there are certain subtleties.

The International Software Testing Qualifications Board (ISTQB) came up with Seven
Testing Principles that shed light on what testing can achieve and what not. Without discussing every principle, let us consider the main ideas.

https://www.istqb.org/downloads/category/2-foundation-level-documents.html
https://www.istqb.org/downloads/send/2-foundation-level-documents/281-istqb-ctfl-syllabus-2018-v3-1.html

The purpose of a test is to discover bugs. If the test fails, it proves the presence of a bug (or the test is set up incorrectly). If the test passes, it proves that _this particular test setup_ did not trigger a bug. It does not prove that the code is correct and free of bugs.

So should you write automated tests for all possible cases to ensure correctness? No, say the ISTQB principles: “Exhaustive testing is impossible”. It is neither technically feasible nor worthwhile to write tests for all possible inputs and conditions. Instead, you should _assess the risks_ of a certain case and write tests for high-risk cases first.

Even if it was viable to cover all cases, it would give you a false sense of security. No software is without errors, and a fully tested software may still be a usability nightmare that does not satisfy its users.

Another core idea is that testing depends on its context and that it needs to be adapted again and again to provide meaning. The specific context in this guide are single-page web applications written in JavaScript, made with Angular. Such applications need specific testing methods and tools we will get to know.

Once you have learned and applied these tools, you should not stop. A fixed toolchain will only discover certain types of bugs. You need to try out different approaches to find new classes of bugs. Likewise, an existing test suite needs to be updated regularly so that it still finds regressions.

### Tailoring your testing approach

While there are several competing schools of thoughts and methodologies, there is not one correct approach to testing. Learn from other’s experience, but develop a testing approach that suits your application, your team, your project or business.

Before you start setting up tests, you should examine the current situation of your application:

- What are the critical features? For example, logging in, searching for a record and editing a form.
- Which technical obstacles frustrate your users? For example, bad cross-browser compatibility.
- What are the frequently reported technical problems? For example, your application may lack error handling.
- What are the technical requirements? For example, your application needs to consume structured data from a given back-end API. In turn, it needs to expose certain URL routes.

This technical assessment is as important as an inquiry of your development team:

- What is the overall attitude on testing? For example, some developers value testing while others find it ineffective to avoid bugs.
- What is the current testing practice? For example, developers sometimes write tests, but not as a daily routine.
- What is the experience on writing tests? For example, some developers have written tests for several environments, while others understand the basic concepts but have not yet gotten into practice.
- What are the obstacles that impede a good testing routing? For example, developers have not been trained on the existing testing tools.
- Are tests well-integrated into your development workflow? For example, a continous integration server automatically runs the test suite on every change set.

Once you have answered these questions, you should set up a testing goal and implements steps to achieve it. A good start is to think economically. What is the return on investment of writing a test? Pick the low-hanging fruits. Find business-critical features and make sure they are covered by tests. Write tests that are easy to write but cover large parts of the code.

Simultaneously, integrate testing into your team’s workflow. Make sure everyone shares the same basic expertise. Offer formal training workshops and pair experienced programmers with team members less familiar with testing. Appoint maintainers and contact persons for test quality and testing infrastructure. If applicable, hire dedicated software testers.

Writing automated tests should be easy and fun for your team members. Remove any obstacles that make testing difficult or inefficient.

#### The right amount of testing

A fierce debate revolves around the right amount of testing. Too little testing is a problem: Features are not properly specified, bugs go unnoticed, regressions happen. But too much testing consumes development time, yields no additional profit and slows down development in the long run.

So we need to reach a sweet spot. If your testing practice deteriorates from this spot, you run into problems. If you add more tests, you observe little benefit.

Tests differ in their value and quality. Some tests are more meaningful than others. If they fail, your application is actually unusable. This means the quality of tests is more important than their quantity.

A common metric of testing is **code coverage**. It counts the lines in your code that are called by your tests. It tells you which parts of your code (file, method/function, block, expression etc.) are executed at all. Code coverage is typically expressed as percent values, e.g. 79% statements, 53% branches, 74% functions, 78% lines.

This metric on testing is useful but also deeply flawed because the value of a test cannot be quantified automatically. Code coverage tells you whether a piece of code was called, regardless of its importance. The coverage report may point to important behavior that is not yet covered by tests, but should be. It does not tell whether the existing tests are meaningful and make the right expectations. You can merely infer that the code does not throw exceptions under test conditions.

It is controversial whether one should strive for 100% code coverage. While it is feasible to cover 100% of certain business-critical code, it requires immense efforts to cover all parts of an application written in Angular and TypeScript. If you write tests for the main features of your app from a user’s perspective, you can easily achieve a code coverage of 60-70%. Every extra percent gain takes more and more time and leads to weird and twisted tests that do not reflect the actual usage of your application.

We are going to discuss the practical use of code coverage tools later.

### Levels of testing

We can distinguish automated tests by their perspective and proximity to the code.

#### End-to-end tests

Some tests have a _high-level, bird’s-eye view_ on the application. They try to replicate a user interacting with the application: Navigating to an address, reading text, clicking on a link or button, filling out a form, moving the mouse or typing on the keyboard. They make expectations about what the user sees and reads in the browser.

From the user’s perspective, it does not matter that your application is implemented in Angular. Technical details like the inner structure of your code are not relevant. There is no distinction between front-end and back-end, between parts of your code. The full experience is tested.

These tests are called **end-to-end (E2E) tests** since they integrate all parts of the application from one end (the user) to the other end (the darkest corners of the back-end). End-to-end tests also form the automated part of **acceptance tests** since they tell whether the application works for the user.

#### Unit tests

Other tests have a _low-level, worm’s-eye view_ on the application. They pick a small piece of code and put it through its paces. From this perspective, implementation details matter. The developer needs to set up an appropriate testing environment to trigger all relevant cases.

The shortsighted worm only sees what is directly in front. This perspective tries to cut off the ties of the code under test with its dependencies. It tries to _isolate_ the code in order to examine it.

These tests are called **unit tests**. A unit is a small piece of code that is reasonable to test.

#### Integration tests

Between these two extreme perspectives, there are tests that operate on specific parts of the code, but test cohesive groups. They prescind from implementation details and try to take the user’s perspective.

These tests are called **integration tests** since they test how well the parts _integrate_ into the group. For example, all parts of one feature may be tested together. An integration test proves that all parts work together properly.

### Distribution of testing efforts

All levels of testing are necessary and valuable. Different types of tests need to be combined to create a thorough test suite. But how should we divide our attention? On which level should we spend most of the time? Should we focus on end-to-end tests since they mimic how the user interacts with the application? Again, this is a controversial issue among testing experts.

What is indisputable is that high-level tests like end-to-end tests are expensive and slow, while lower-level tests like integration and unit tests are cheaper and faster.

End-to-end tests are brittle, meaning they often produce false negatives. Sometimes they fail for now apparent reason – when you run the same tests again, they suddenly pass. Even if the test failure is a true negative, it is hard to find the root cause of the problem. You need to wander through the full stack to locate the bug.

End-to-end test are computationally expensive and run slow. Since they use a real, sometimes “headless” browser and run against the full software stack, the testing setup is immense. You need to deploy front-end, back-end, databases, caches etc. to testing machines and then have machines to run the end-to-end tests.

Several commercial tools try to make end-to-end tests easier, faster and more robust. Since end-to-end tests are unreliable because of their complexity, these tools try to reduce complexity at the expense of flexibility. For example, they remote-control one possible browser instead of all browsers that support a generic automation protocol like WebDriver.

In comparison, integration tests are simpler and unit tests even more so. Since they have less moving parts and fewer dependencies, they run faster and the results are reproducible. The setup is relatively simple. Integration and unit tests typically run on one machine with a build of the code under test.

The crucial question for dividing your testing efforts is: Which tests yield the most return on investment? How much work is it to maintain a test in relation to its benefit?

In theory, the benefit of end-to-end tests is the highest, since they indicate whether the application works for the user. In practice, they are flaky, imprecise, painful to write and debug. The business value of integration and unit tests is estimated higher.

For this reason, some experts argue you should write few end-to-end test, a fair amount of integration tests and many unit tests. If this distribution is visualized, it looks like a pyramid:

<p>
<svg style="display: block; margin: auto; width: 100%; max-width: 25rem" viewbox="0 0 500 350">
  <path d="M 250 10 L 490 340 H 10 Z" stroke="gray" stroke-width="2" fill="white" />
  <text x="250" y="65" style="font-size: 20px; text-anchor: middle; dominant-baseline: middle">
    <tspan>End</tspan>
    <tspan x="250" dy="30">to</tspan>
    <tspan x="250" dy="30">end</tspan>
  </text>
  <path d="M 152 145 H 349" stroke="gray" stroke-width="2" />
  <text x="250" y="200" style="font-size: 25px; text-anchor: middle; dominant-baseline: middle">Integration</text>
  <line x1="79" y1="245" x2="421" y2="245" stroke="gray" stroke-width="2" />
  <text x="250" y="295" style="font-size: 30px; text-anchor: middle; dominant-baseline: middle">Unit</text>
</svg>
</p>

These proportions are known as the **[Testing Pyramid](https://martinfowler.com/bliki/TestPyramid.html)**. They are widely recognized in software testing across domains, platforms and programming languages.

However, this common distribution also drew criticism. In particular, experts disagree on the value of unit tests.

On the one hand, unit tests are precise and cheap. They are ideal to specify all tiny details of a shared module. They help you to design small, composable modules that “do one thing and do it well”. This level of testing forces you to reconsider how the module interacts with other modules.

On the other hand, unit test are too low-level to check whether a certain feature works for the user. They give you little confidence that your application works. In addition, unit tests might increase the cost of every code change.

Unit tests run the risk of mirroring or even duplicating implementation details. These details change frequently because of new requirements elsewhere or during internal refactorings. If you change a line of code somewhere, some distant unit test suddenly fails. This makes sense if you have touched shared types or shared logic, but it may just be a false alarm. You have to fix this failing test for technical reasons, not because something broke.

Integration tests provide a better tradeoff. These mid-level tests prescind from implementation details, cover a group of code units and provide more confidence. They are less likely to fail if you refactor code inside of the group.

That is why some experts deem integration tests more valuable and recommend that you spend most of your testing efforts on this level.

In Angular, the difference between unit and integration tests is sometimes subtle. A unit test typically focusses on a single Angular Component, Directive, Service, Pipe etc. Dependencies are replaced with fakes. An integration test spans one component together with its children and possibly connected Services as well. It is also possible to write a test that integrates all parts of an Angular Module.

<table class="testing-levels-table">
<caption>Comparison of software testing levels</caption>
<tr>
<th scope="col">Level</th>
<th scope="col">Coverage</th>
<th scope="col">Performance</th>
<th scope="col">Reliability</th>
<th scope="col">Isolate Failures</th>
<th scope="col">Simulate the Real User</th>
</tr>
<tr>
<th scope="row">End-to-End</th>
<td>full</td>
<td>bad</td>
<td>unreliable</td>
<td>hard</td>
<td>yes</td>
</tr>
<tr>
<th scope="row">Integration</th>
<td>large</td>
<td>fair</td>
<td>reliable</td>
<td>fair</td>
<td>no</td>
</tr>
<tr>
<th scope="row">Unit</th>
<td>small</td>
<td>best</td>
<td>most reliable</td>
<td>easy</td>
<td>no</td>
</tr>
</table>

<p><small>(Table adapted from <a href="https://testing.googleblog.com/2015/04/just-say-no-to-more-end-to-end-tests.html">Just Say No to More End-to-End Tests</a> by Mike Wacker.)</small></p>

### Black box vs. white box testing

Once you have identified a piece of code you would like to test, you have to decide how to test it properly. One important distinction is whether a test treats the implementation as a closed box (black box) or an opened box (white box). In this metaphor, the code under test is seen as a machine in a box with holes for inputs and outputs.

**Black box testing** does not assume anything about the internal structure. It puts certain values into the box and expects certain output values. The test talks to the publicly exposed, documented API consisting of classes, methods and functions. The inner state and workings are not examined.

<p>
<svg style="display: block; margin: auto; width: 100%; max-width: 15rem" viewbox="0 0 400 450">
  <text x="200" y="30" fill="currentColor" transform="rotate(15, 200, 30)" style="font-size: 30px; text-anchor: middle; dominant-baseline: middle">Input</text>
  <path d="
  M 0 100
  h 150
  l -50 -50
  h 200
  l -50 50
  h 150
  v 250
  h -150
  l 50 50
  h -200
  l 50 -50
  h -150
  Z"
  fill="#444"
  />
  <text x="200" y="225" fill="white" style="font-size: 40px; text-anchor: middle; dominant-baseline: middle; text-shadow: 0 1px 2px black">Black box</text>
  <text x="200" y="427" fill="currentColor" transform="rotate(-15, 200, 427)" style="font-size: 30px; text-anchor: middle; dominant-baseline: middle">Output</text>
</svg>
</p>

**White box testing** opens the box, sheds light on the internals and takes measurements by reaching into the box. For example, a white box test calls methods that are not necessarily part of the public API, but still technically tangible. Then it checks the internal state and expects that it has changed accordingly.

While both approaches have their value, this guide recommends to **write black box tests whenever possible**. You should check what the code does for the user and for other parts of the code. For this purpose, it is not relevant how the code looks internally. Tests that make assumptions about internals are likely to break in the future when the implementation slightly changes.

More importantly, white box tests run the risk of forgetting to check the real output. They reach into the box, spin some wheel, flip some switch and check a particular state. They just assume the output without actually checking it. So they fail to cover important code behavior.

For an Angular Component, Directive, Service, Pipe etc., a black box test passes a certain input and expects a proper output or measures side effects. The test only calls methods that are marked with `public` in the TypeScript code. Internal methods should be marked with `private`.

## Example applications

In this guide, we will explore the different aspects of testing Angular applications by looking at two examples.

### The Counter Component

- [Counter Component: Source code](https://github.com/9elements/angular-workshop)
- [Counter Component: Run the app](https://9elements.github.io/angular-workshop/)

<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-workshop/" class="responsive-iframe__iframe"></iframe>
</p>

The counter is a reusable Component that allows to increase, decrease and reset a number using buttons and input fields.

For advanced Angular developers, this might look trivial. That is intentional. This guide assumes that you know Angular basics and that you are able to build a counter Component, but still struggle testing the ins and outs.

The goals of this example are:

- **Simplicity**: Quickly grasp what the Component is supposed to do.
- **Covering core Angular features**: Reusable Components with state, Inputs, Outputs, templates, event handling.
- **Scalability**: Starting point for more complex application architectures.

The counter comes in three flavors with different state management solutions:

1. An independent, self-sufficient counter Component that holds its own state.
2. A counter that is connected to a Service using dependency injection. It shares its state with other counters and changes it by calling Service methods.
3. A counter that is connected to a central NgRx Store. (NgRx is a state management library we will introduce later.) The counter changes the state indirectly by dispatching NgRx Actions.

While this example seems trivial to implement, it already offers valuable challenges from a testing perspective.

### The Flickr photo search

- [Flickr search: Source code](https://github.com/9elements/angular-flickr-search)
- [Flickr search: Run the app](https://9elements.github.io/angular-flickr-search/)

<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-flickr-search/" class="responsive-iframe__iframe"></iframe>
</p>

This app that allows to search public photos on Flickr, the popular photo hosting site. First, the user enters a search term and starts the search. The Flickr search API is queried. Second, a list of search results with thumbnails is rendered. Third, the user might select a search result to see the photo details.

This application is straightforward and relatively simple to implement. Still it raises important questions:

- **App structure**: How to split responsibilities into Components and how to model dependencies.
- **API communication**: How to fetch data by making HTTP requests and update the user interface.
- **State management**: Where to hold the state, how to pass it down in the Component tree, how to alter it.

The Flickr Search comes in two flavors using different state management solutions:

1. The state is managed in the top-level Component, passed down in the Component tree and changed using Outputs.
2. The state is managed by an NgRx Store. Components are connected to the store to pull state and dispatch Actions. The state is changed in a Reducer. The side effects of an Action are handled by NgRx Effects.

Once you are able to write automatic tests for this example application, you will be able to test most features of a typical Angular application.

## Angular testing principles

### Testable application parts

In contrast to other popular front-end JavaScript libraries, Angular is a an opinionated, comprehensive framework that covers all important aspects of developing a JavaScript web application. Angular provides high-level structure, low-level building blocks and means to bundle everything together into a usable application.

The complexity of Angular cannot be understood without considering automated testing. Why is an Angular application structured into Components, Services, Modules etc.? Why are the parts intertwined the way they are? Why do all parts of an Angular application apply the same patterns?

An important reason is **testability**. Angular’s architecture guarantees that all application parts can be tested easily in a similar way.

We know from experience that code that is easy to test is also simpler, better structured, easier to read and easier to understand. The main technique of writing testable code is to break code into smaller chunks that “do one thing and do it well”. Then couple the chunk loosely.

### Dependency injection and fake objects

A major design pattern for loose coupling is **dependency injection** and the underlying **inversion of control**. Instead of creating a dependency itself, an application part merely declares the dependency. The tedious task of creating and providing the dependency is delegated to an _injector_ that sits on top.

This division of work decouples an application part from its dependencies: One part does not need to know how to set up a dependency, let alone the dependency’s dependencies and so forth.

Dependency injection turns tight coupling into loose coupling. A certain application part no longer depends on a specific class, function, object or other value. It rather depends on an abstract **token** that can be traded in for a concrete implementation. The injector takes the token and exchanges it for a real value.

This is of immense importance for automated testing. In our test, we can decide how to deal with a dependency:

- We can either provide an **original**, fully-functional implementation. In this case, we are writing an [integration test](#integration-tests) that includes direct and indirect dependencies.
- Or we provide a **fake** implementation, also called *mock*, that does not have side effects. In this case, we are writing a [unit test](#unit-tests) that tries to test the application part in _isolation_.

A large portion of the time spent while writing tests is spent on decoupling an application part from its dependencies. This guide will teach you how to set up the test environment, isolate an application part and reconnect it with equivalent fake objects.

### Angular’s testing tools

Angular provides solid testing tools out of the box. When you create an Angular project using the Angular command line interface, it comes with a fully-working testing setup for unit, integration and end-to-end tests.

So the Angular team already made important decisions for you: [Jasmine](https://jasmine.github.io/) as testing framework, [Karma](https://karma-runner.github.io/) as test runner as well as [Protractor](https://www.protractortest.org/) for running end-to-end tests. Implementation and test code are bundled with Webpack. Application parts are typically tested inside Angular’s `TestBed`.

This setup works well and covers most cases. It is a trade-off with strengths and weaknesses. Since it is merely one possible way to test Angular applications, you could compile your own testing toolchain. For example, some people use [Jest](https://jestjs.io/) instead of Jasmine and Karma. Some people swap Protractor with [Cypress](https://www.cypress.io/). Some people use [Spectator](https://github.com/ngneat/spectator) or the [Angular Testing Library](https://github.com/testing-library/angular-testing-library) as an abstraction instead of using `TestBed` directly.

Other testing tools are not simply better or worse, but make different trade-offs. This guide assumes you begin with the recommended setup. Later, once you have reached its limits, you should investigate whether alternatives make testing your specific application easier, faster and more reliable.

### Testing conventions

Angular offers some tools and conventions on testing, but you need to decide how to apply them. Because there are opposing testing methodologies, the tools are flexible enough to support different ways of testing.

This freedom of choice benefits experts, but confuses and paralyses beginners. In your project, there should be one preferrable way how to test a specific application part. You need to make choices and set up project-wide conventions and patterns.

The testing tools that ship with Angular are low-level. They merely provide the basic operations. If you use these tools directly, your tests become messy, repetitive and hard to maintain. You need to create high-level testing tools that cast your conventions into code in order to write short, readable and understandable tests.

This guide values strong conventions and introduces simple helper functions that follow essential testing conventions. Again, your mileage may vary. You should adapt these tools to your needs or build higher-level testing helpers.

## Test suites with Jasmine

Angular ships with two tools that enable you to write and execute unit and integration tests: Karma and Jasmine.

Jasmine is a testing framework consisting basically of three parts:

1. A library with classes and functions for constructing tests.
2. A test execution engine.
3. A reporting engine that outputs test results in different formats.

If you are new to Jasmine, I recommend reading the [official Jasmine tutorial](https://jasmine.github.io/tutorials/your_first_suite).

This guide does not provide a full introduction to Jasmine, but let us recap Jasmine’s basic structure and terminology that will be used throughout this guide.

### Creating a Jasmine suite

In terms of Jasmine, a test consists of one or more _suites_. A suite is declared with a `describe` block:

```typescript
describe('Suite description', () => {
  /* … */
});
```

Each suite _describes_ a piece of code, the _code under test_.

`describe` is a function that takes two parameters. The first parameter is a string with a human-readable name. Typically, contains the name of the class or function under test. For example, `describe('CounterComponent', /* … */)` if the suite is testing the `CounterComponent` class. The second parameter is a function containing the suite definition.

### Specifications

Each suit consists of one of more _specifications_, or shorter, _specs_. A spec is declared with an `it` block:

```typescript
describe('Suite description', () => {
  it('Spec description', () => {
    /* … */
  });
  /* … more specs …  */
});
```

Again, `it` is a function that takes two parameters. The first parameter is a string with a human-readable spec description. The second parameter is a function containing the spec code.

The pronoun `it` refers to the code under test. `it` should be the subject of a human-readable sentence that asserts the behavior of the code under test. The actual spec code then prove this assertion. This style of writing specs originates from the concept of Behavior-Driven Development (BDD).

One goal of BDD is to describe software behavior in a natural language – in this case, English. Every stakeholder should be able to read the `it` sentences and understand how the code is supposed to behave. Team members without JavaScript knowledge should be able to add more requirements by forming `it does something` sentences.

Ask yourself, what does the code under test do? For example, in case of a `CounterComponent`, _it_ increments the counter value. And _it_ resets the counter to a specific value. So you could write:

```typescript
it('increments the count', () => {
  /* … */
});
it('resets the count', () => {
  /* … */
});
```

After `it`, typically a verb follows, like `increments` and `resets` in the example.

Some people prefer to write `it('should increment the count', /* … */)`, but I see no value in the additional `should`. The nature of a spec is to state what the code under test _should_ do. So the word “should” is redundant and just makes the sentence longer. My recommendation is to simply state what the code does.

### Structure of a test

Inside the `it` block lies the actual testing code. Irrespective of the testing framework, the testing code typically consists of three phases: **Arrange, Act and Assert**.

1. **Arrange** is the preparation and setup phase. For example, the class under test is instantiated. Dependencies are set up. Spies and fakes are created.
2. **Act** is the phase where interaction with the code under test happens. For example, a method is called or an HTML element in the DOM is clicked.
3. **Assert** is the phase where the code behavior is checked and verified. For example, the actual output is compared to the expected output.

How could the structure of the spec `it('resets the count', /* … */)` for the `CounterComponent` look like?

1. <p><strong>Arrange:</strong></p>
  - Create an instance of `CounterComponent`.
  - Render the Component into the document.
2. <p><strong>Act:</strong></p>
  - Find and focus the reset input field.
  - Enter the text “5”.
  - Find and click the “Reset” button.
3. <p><strong>Assert:</strong></p>
  - Expect that the displayed count now reads “5”.

This structure makes it easier to come up with a test and also to implement it. Ask yourself:

- What is the necessary setup? Which dependencies do I need to provide? How do they behave? (Arrange)
- What is the user input or API call that triggers the behavior I would like to test? (Act)
- What is the expected behavior? How do I prove that the behavior is correct? (Assert)

In Behavior-Driven Development (BDD), the three phases of a test are fundamentally the same. But they are called **Given, When and Then**. These plain English words try to avoid technical jargon and allow a natural way to think of a test’s structure: “_Given_ these specific conditions, _when_ the user interacts with the application, _then_ it behaves in a certain way.”

### Expectations

In the _Assert_ phase, the test compares the actual output or return value to the expected output or return value. If they are the same, the test passes. If they differ, the test fails.

Let us examine a simple contrived example, an `add` function:

```javascript
const add = (a, b) => a + b;
```

A primitive test without any testing tools could look like this:

```javascript
const expectedValue = 5;
const actualValue = add(2, 3);
if (expectedValue !== actualValue) {
  throw new Error(
    `Wrong return value: ${actualValue}. Expected: ${expectedValue}`
  );
}
```

We could write that code in a Jasmine spec, but Jasmine allows to create expectations in an easier and more concise manner: The `expect` function together with a **Matcher**.

```javascript
const expectedValue = 5;
const actualValue = add(2, 3);
expect(actualValue).toBe(expectedValue);
```

First, we pass the actual value to the `expect()` function. It returns an expectation object with methods for checking the actual value. We would like to compare the actual value to the expected value, so we use the `toBe` matcher.

`toBe` is the simplest matcher that applies to all possible JavaScript values. Internally, it uses JavaScript’s strict equality operator `===`, also called identity operator. <code>expect(actualValue)&#x200b;.toBe(expectedValue)</code> essentially runs `actualValue === expectedValue`.

`toBe` is useful to compare primitive values like strings, numbers and booleans. For objects, `toBe` matches only if both objects are the identical. It fails if two objects are identical but happen to have the same properties and values.

For checking the deep equality of two objects, Jasmine offers the `toEqual` matcher. This example illustrates the difference:

```javascript
// Fails, objects not identical
expect({ name: 'Linda' }).toBe({ name: 'Linda' });
// Passes, objects not identical but deeply equal
expect({ name: 'Linda' }).toEqual({ name: 'Linda' });
```

Jasmine has numerous useful [matchers](https://jasmine.github.io/api/edge/matchers) built-in, `toBe` and `toEqual` being the most common. You can add [custom matchers](https://jasmine.github.io/tutorials/custom_matcher) to hide a complex check behind a short name.

The pattern `expect(actual).toEqual(expectedValue)` originates from Behavior-Driven Development (BDD) again. The code forms a human-readable sentence: “Expect the actual value to equal the expected value.” The `expect` function call and the matcher methods starting with `to` allow to form a readable sentence. The goal is to write a specification that is as readable as a plain text but can be verified automatically.

### Efficient test suites

When writing multiple specs in one suite, you quickly realize that the _Arrange_ phase is similar or even identical across these specs. For example, when testing the `CounterComponent`, the _Arrange_ phase always consists of creating an instance of the class and rendering the Component into the document.

This setup is repeated over and over, so it should be defined once at a central place. You could simply write a `setup` function and call it at the beginning of each spec. But Jasmine allows to declare code that is called before and after each spec, or before and after all specs. Fur this purpose, there are four functions: `beforeEach`, `afterEach`, `beforeAll` and `afterAll`. They are called inside of a `describe` block, just like `it`. They expect one parameter, a function that is called at the given stages.

```typescript
describe('Suite description', () => {
  beforeAll(() => {
    console.log('Called before all specs are run');
  });
  afterAll(() => {
    console.log('Called after all specs are run');
  });

  beforeEach(() => {
    console.log('Called before each spec is run');
  });
  afterEach(() => {
    console.log('Called after each spec is run');
  });

  it('Spec 1', () => {
    console.log('Spec 1');
  });
  it('Spec 2', () => {
    console.log('Spec 2');
  });
});
```

This suite has two specs and defines shared setup and teardown code. The output is:

```
Called before all specs are run
Called before each spec is run
Spec 1
Called after each spec is run
Called before each spec is run
Spec 2
Called after each spec is run
Called after all specs are run
```

## Faking dependencies

When testing a piece of code, you need to decide between an [integration test](#integration-tests) and a [unit test](#unit-tests). To recap, the integration test includes (“integrates”) the dependencies. In contrast, the unit test replaces the dependencies with fakes in order to isolate the code under test.

These replacements are also called _doubles_, _stubs_ or _mocks_. Replacing of a dependency is called _stubbing_ or _mocking_. Since these terms are used inconsistently and their difference is subtle, this guide simply uses the umbrella term “fake” and “faking” for any dependency substitution.

### Rules for faking dependencies

Unit tests isolates a piece of code to scrutinize all its details. Creating and injecting fake dependencies is essential for unit tests. This technique is double-edged – it is powerful and dangerous at the same time. We need to set up rules to apply the technique safely.

A fake implementation must have the same shape the original. If the dependency is a function, the fake must have the same signature, meaning the same parameters and the same return value. If the dependency is an object, the fake must have the same public API, meaning the same methods and properties.

The fake does not need to be complete, but sufficient enough to act as a replacement. Like a fake building on a movie set, the outer shape needs to be indistinguishable from an original. But behind the authentic facade, there is only a wooden scaffold.

The biggest danger of creating a fake is that it does not properly mimic the original. Even if the fake resembles the original at the time of writing the code, it might easily get of sync later when the original is changed.

When the original dependency changes its public API, dependent code needs to be adapted. Also, the fake needs to be aligned to the changed API. Otherwise the corresponding unit test produces a false positive. When a fake is outdated, the unit test is a dreamworld where everything works and all tests are green. In reality, the code under test is broken.

How can we ensure that the fake is up to date with the original? We can use TypeScript to enforce that the fake has a matching type. If the code involved is properly typed, TypeScript reminds us to update the implementation and the fake – the code simply does not compile if we forget to. We will see how to declare matching types in the upcoming examples.

### Faking function dependencies with Jasmine spies

Jasmine provides simple yet powerful patterns to create fake implementations. The most basic pattern is the **Jasmine spy** for replacing a function dependency.

In its simplest form, a spy is a function that records its calls. For each call, it records the function parameters. Using this record, we later assert that the spy has been called with particular input values. For example, we declare in a spec: “Expect that the spy has been called two times with the values `mickey` and `minnie`, respectively.”

Like every other function, a spy can have a meaningful return value. In the simple case, this may be a fixed value. The spy will always return the same value, regardless of the input parameters. In a more complex case, the return value may originate from an underlying fake function.

A standalone spy is created by calling `jasmine.createSpy`:

```typescript
const spy = jasmine.createSpy('name');
```

`createSpy` expects one parameter, an optional name. It is recommended to pass a name that describes the original. The name will be used in error messages when you make expectations against the spy.

Assuming we have class `TodoService` responsible for fetching a to-do list from the server. The class uses the [Fetch API](https://developer.mozilla.org/de/docs/Web/API/Fetch_API) to make an HTTP request. (This is a plain JavaScript example. It is uncommon to use `fetch` directly in an Angular app.)

```typescript
class TodoService {
  constructor(
    // Bind `fetch ` to `window` to ensure that `window` is the `this` context
    private fetch = window.fetch.bind(window)
  ) {}

  public async getTodos(): Promise<string[]> {
    const response = await this.fetch('/todos');
    if (!response.ok) {
      throw new Error(
        `HTTP error: ${response.status} ${response.statusText}`
      );
    }
    return await response.json();
  }
}
```

The `TodoService` uses a pattern called _constructor injection_, meaning the `fetch` dependency can be injected via an optional constructor parameter. In production code, this parameter is empty and defaults to the original `window.fetch`. In the test, a fake dependency is passed to the constructor. The `fetch` parameter, whether original or fake, is saved as an instance property `this.fetch`. Eventually, the public method `getTodos` uses it to make an HTTP request.

In our unit test, we do not want the service to make any HTTP requests. We pass in a Jasmine spy as replacement for `window.fetch`.

```typescript
// Fake todos and response object
const todos = [
  'shop groceries',
  'mow the lawn',
  'take the cat to the vet'
];
const okResponse = new Response(JSON.stringify(todos), {
  status: 200,
  statusText: 'OK',
});

describe('TodoService', () => {
  it('gets the to-dos', async () => {
    // Arrange
    const fetchSpy = jasmine.createSpy('fetch')
      .and.returnValue(okResponse);
    const todoService = new TodoService(fetchSpy);

    // Act
    const actualTodos = await todoService.getTodos();

    // Assert
    expect(actualTodos).toEqual(todos);
    expect(fetchSpy).toHaveBeenCalledWith('/todos');
  });
});
```

There is a lot to unpack in this example. First, we set up the fake data before the `describe` block:

```typescript
const todos = [
  'shop groceries',
  'mow the lawn',
  'take the cat to the vet'
];
const okResponse = new Response(JSON.stringify(todos), {
  status: 200,
  statusText: 'OK',
});
```

First, we define the fake data we want the `fetch` spy to return. Essentially, this is an array of strings.

The original `fetch` function returns a `Response` object. We create one using the built-in `Response` constructor. The original server response is a string before it is parsed as JSON. So we need to serialize the array into a string before passing it to the `Response` constructor. (You do not have to understand these `fetch` details to grasp the overall example.)

Then, we declare a test suite using `describe`:

```typescript
describe('TodoService', () => {
  /* … */
});
```

The suite contains one spec that tests the `getTodos` method:

```typescript
it('gets the to-dos', async () => {
    /* … */
});
```

The spec starts with *Arrange* code:

```typescript
// Arrange
const fetchSpy = jasmine.createSpy('fetch')
  .and.returnValue(okResponse);
const todoService = new TodoService(fetchSpy);
```

Here, we create a spy. With `.and.returnValue(…)`, we set a fixed return value: the successful response.

We also create an instance of `TodoService`, the class under test. We pass the spy into the constructor.

In the _Act_ phase, we call the method under test:

```typescript
// Act
const actualTodos = await todoService.getTodos();
```

`getTodos` returns a Promise We use an `async` function together with `await` to access the return value easily. Jasmine deals with async functions just fine and waits for them to complete.

In the _Assert_ phase, we make two expectations:

```typescript
// Assert
expect(actualTodos).toEqual(todos);
expect(fetchSpy).toHaveBeenCalledWith('/todos');
```

First, we verify the return value. We compare the actual data (`actualTodos`) with the fake data the spy has returned (`todos`). If they are equal, we have proven that `getTodos` parsed the response as JSON and returned the result. (Since there is no other way `getTodos` could access the fake data, we can also deduce that the spy has been called at all.)

Second, we verify that the `fetch` spy has been called with the correct parameter, the API endpoint URL. Jasmine offers several matchers for making expectations on spies. The example uses `toHaveBeenCalledWith` to assert that the spy has been called with the parameter `'/todos'`.

Both expectations are necessary to guarantee that `getTodos` works correctly.

After having written the first spec for `getTodos`, we need to ask ourselves: Did the test fully cover its behavior? We did test the success case, also called *happy path*, but the error case, also called `unhappy path`, is yet to be tested. In particular, this error handling code:

```typescript
if (!response.ok) {
  throw new Error(
    `HTTP error: ${response.status} ${response.statusText}`
  );
}
```

When the server response is not “ok”, we throw an error. “Ok” means the HTTP response status code is 200-299. Examples of “not ok” are 403 Forbidden, 404 Not Found and 500 Internal Server Error. Throwing an error rejects the Promise so the caller of `getTodos` knows that fetching the to-dos failed.

The fake `okResponse` mimics the success case. For the error case, we need to define another fake `Response`. Let us call it `errorResponse` with the notorious HTTP status 404 Not Found:

```typescript
const errorResponse = new Response('Not Found', {
  status: 404,
  statusText: 'Not Found',
});
```

Assuming the server does not return JSON in the error case, the response body is simply the string `'Not Found'`.

Now we add a second spec for the error case:

```typescript
describe('TodoService', () => {
  /* … */
  it('handles an HTTP error when getting the to-dos', async () => {
      // Arrange
      const fetchSpy = jasmine.createSpy('fetch')
        .and.returnValue(errorResponse);
      const todoService = new TodoService(fetchSpy);

      // Act
      let error;
      try {
        await todoService.getTodos();
      } catch (e) {
        error = e;
      }

      // Assert
      expect(error).toEqual(new Error('HTTP error: 404 Not Found'));
      expect(fetchSpy).toHaveBeenCalledWith('/todos');
    });
});
```

In the *Arrange* phase, we inject a spy that returns the new error response.

In the *Act* phase, we call the method under test but anticipate that it throws an error. In Jasmine, there are several ways to test whether a Promise has been rejected with an error. The example above wraps the `getTodos` call in a `try/catch` statement and saves the error. Most likely, this is how implementation code would handle the error.

In the *Assert* phase, we make two expectations again. Instead of verifying the return value, we make sure the caught error is an `Error` instance with a useful error message. Finally, we verify that the spy has been called with the right value, just like in the spec for the success case.

Again, this is a plain JavaScript example to illustrate the usage of spies. Usually, an Angular Service does not use `fetch` directly but uses [`HttpClient`](https://angular.io/guide/http) instead. The test typically uses [`HttpTestingController`](https://angular.io/guide/http#testing-http-requests). We will get to know this way of testing later.

### Spying on existing object methods

We have used `jasmine.createSpy('name')` to create a standalone spy and have injected it into the constructor. Explicit constructor injection is a straightforward and recommended way to provide a dependency. It is also the predominant dependency injection strategy in Angular.

Sometimes, there is already an object whose method we need to spy on. This is especially helpful if the code uses global methods from the browser environment, like `window.fetch` in the example above.

For this purpose, we can use the `spyOn()` method:

```typescript
spyOn(window, 'fetch');
```

This installs a spy on the global `fetch` method. Under the hood it saves the original `window.fetch` function for later and overwrites `window.fetch` with a spy. Once the spec is completed, Jasmine automatically restores the original function.

`spyOn` returns the created spy, allowing to set a return value, like we have learned above.

```typescript
spyOn(window, 'fetch');
  .and.returnValue(okResponse);
```

We can create a version of TodoService that does not rely on construction injection, but uses `fetch` directly:

```typescript
class TodoService {
  public async getTodos(): Promise<string[]> {
    const response = await fetch('/todos');
    if (!response.ok) {
      throw new Error(
        `HTTP error: ${response.status} ${response.statusText}`
      );
    }
    return await response.json();
  }
}
```

The test suite then uses `spyOn` to catch all calls to `window.fetch`:

```typescript
// Fake todos and response object
const todos = [
  'shop groceries',
  'mow the lawn',
  'take the cat to the vet'
];
const okResponse = new Response(JSON.stringify(todos), {
  status: 200,
  statusText: 'OK',
});

describe('TodoService', () => {
  it('gets the to-dos', async () => {
    // Arrange
    spyOn(window, 'fetch')
      .and.returnValue(okResponse);
    const todoService = new TodoService();

    // Act
    const actualTodos = await todoService.getTodos();

    // Assert
    expect(actualTodos).toEqual(todos);
    expect(window.fetch).toHaveBeenCalledWith('/todos');
  });
});
```

Not much has changed here. We spy on `fetch` and make it return `okResponse`. Since `window.fetch` is overwritten with a spy, we make the expectation against it to verify that it has been called.

Creating standalone spies and spying on existing methods are not mutually exclusive. Both will be used frequently when testing Angular applications, and both work well with dependencies injected into the constructor.

#### Faking object dependencies

We have learned to use spies to fake dependencies on individual functions or methods. But most of the time, dependencies are objects with methods. This includes instances of classes.

In the [counter example](https://9elements.github.io/angular-workshop/), the [`ServiceCounterComponent`](https://github.com/9elements/angular-workshop/blob/master/src/app/service-counter/service-counter.component.ts) depends on the [`CounterService`](https://github.com/9elements/angular-workshop/blob/master/src/app/services/counter.service.ts). In  `ServiceCounterComponent`’s unit test, we need to create and provide an appropriate fake `CounterService`. This is the outer shape of `CounterService`:

```typescript
class CounterService {
  public getCount(): Observable<number> { /* … */ }
  public increment(): void { /* … */ }
  public decrement(): void { /* … */ }
  public reset(newCount: number): void { /* … */ }
  private notify(): void { /* … */ }
}
```

How do we create a fake instance of `CounterService`? The simplest way is to use an object literal `{…}` with methods:

```typescript
const fakeCounterService = {
  getCount() {
    return of(count);
  },
  increment() {},
  decrement() {},
  reset() {},
};
```

This is far from perfect, but already a viable replacement for a `CounterService` instance. It walks like the original and talks like the original. The methods are empty or return fixed data.

The fake implementation happens to have the same shape as the original. As we have discussed, it is of utter importance that the fake remains up to date with the original. This is not yet enforced by TypeScript. We want TypeScript to check whether the fake properly replicates the original. The first attempt would be add a type declaration:

```typescript
const fakeCounterService: CounterService = {
  /* … */
};
```

Unfortunately, this does not work. TypeScript complains that the private method `notify` is missing.
That is correct, but we cannot add a private method to the object literal, nor should we. To fix this problem, we use a TypeScript trick. Using [Pick](https://www.typescriptlang.org/docs/handbook/utility-types.html#picktk) and [keyof](https://www.typescriptlang.org/docs/handbook/advanced-types.html#index-types), we create a derived type that only contains the public methods:

```typescript
const fakeCounterService: Pick<CounterService, keyof CounterService> = {
  /* … */
};
```

This type ensures that the fake looks exactly the same as the original. This prevents the fake and therefore the whole test to get out of sync with the original. When the original `CounterService` changes its public API, the dependents `ServiceCounterComponent` needs to be adapted. Likewise, `fakeCounterService`, the fake implementation of `CounterService`, needs to reflect the change. The type declaration reminds you to update the fake.

If the code under test does not use the full API, the fake does not need to provide the full API either. We can declare only those methods and properties that the code under test actually accesses.

For example, if the code under test only calls `getCount`, just provide this method. Make sure to add a type declaration that picks the method from the original type:

```typescript
const fakeCounterService: Pick<CounterService, 'getCount'> = {
  getCount() {
    return of(count);
  },
};
```

TypeScript’s [mapped types](https://www.typescriptlang.org/docs/handbook/advanced-types.html#mapped-types) allow to bind the fake object to the original type in a way that TypeScript can check whether they are equivalent.

A plain object literal with methods is an easy way to provide a fake instance. We should not forgot that the spec needs to verify that these methods have been called with the right parameters. Jasmine spies are the right tool for this job. We can combine the object literal with Jasmine spies. A first approach could look like this:

```typescript
const fakeCounterService: Pick<CounterService, keyof CounterService> = {
  getCount: jasmine.createSpy('getCount').and.returnValue(of(count)),
  increment: jasmine.createSpy('increment'),
  decrement: jasmine.createSpy('decrement'),
  reset: jasmine.createSpy('reset'),
};
```

This is fine, but overly verbose. Jasmine provides a helper function to create an object with multiple spy methods, `jasmine.createSpyObj()`. It expects a descriptive name and a list of methods:

```typescript
const fakeCounterService =
  jasmine.createSpyObj<CounterService>('CounterService', {
    getCount: of(count),
    increment: undefined,
    decrement: undefined,
    reset: undefined,
  });
```

The code above creates an object with four methods, all of them being spies. They return the values that are given. `getCount` returns an `Observable<number>`. The other methods return `undefined`.

`createSpyObj` accepts a type parameter to declare the type the object adheres to. We pass `CounterService` between angle brackets so TypeScript checks that the fake matches the original.

In the *Assert* phase, we can now make an expectation against the spies, for example:

```typescript
expect(fakeCounterService.getCount).toHaveBeenCalled();
```

## Karma

## Testing Components

Components are the power houses of an Angular application. Together, they compose the user interface.

A component deals with several concerns, among others:

- A component renders a certain HTML DOM using the template.
- It accepts data from parent components using Input properties.
- It emits data to parent components using Outputs.
- It reacts to user input using event handlers.
- It renders the content (`ng-content`) and templates (`ng-template`) that are passed.
- It binds data to form controls and allows to edit the data.
- It talks to services or other state managers.
- It uses routing information like the current URL and its parameters.

All these tasks need to be tested properly.

### Unit test for the Counter Component

As a first example, we are going to test the [IndependentCounterComponent](https://github.com/9elements/angular-workshop/tree/master/src/app/independent-counter). This is how it looks in action:

<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-workshop/" class="responsive-iframe__iframe"></iframe>
</p>

When designing a Component test, the guiding questions are: What does the Component do? What needs to be tested? How do I test this behavior?

First, we will focus on four features of the `IndependentCounterComponent`:

- It displays the current count. The initial value is set by the
- When the user activates the “+” button, the count increases.
- When the user activates the “-” button, the count decreases.
- When the user enters a number into the reset input field and activates the reset button, the count is set to the given value.

Writing down what the Component does already helps to structure the unit test: The four features above can roughly translate into four specs in a test suite.

### TestBed

Several chores are necessary to render a Component in Angular, even the simple Counter Component. If you look into the [main.ts](https://github.com/9elements/angular-workshop/blob/master/src/main.ts) and the [AppModule](https://github.com/9elements/angular-workshop/blob/master/src/app/app.module.ts) of a typical Angular application, you find that a “platform” is created, a Module is declared and this Module is bootstrapped.

Before rendering, the Angular compiler translates the templates into JavaScript code. Once this is set up, an instance of the Component is created, dependencies are resolved and injected, inputs are set. Finally, the template is rendered into the DOM. For testing, you could do all that manually, but you would need to dive deeply into Angular internals.

Instead, the Angular team provides the `TestBed` to ease unit testing. The `TestBed` creates and configures an Angular environment so you can test particular application parts like Components and Services safely and easily.

#### Configuring the testing Module

The `TestBed` comes with a testing Module that is configured like normal Modules in your application: You can declare Components, Directives and Pipes, provide Services and other Injectables as well as import other Modules. `TestBed` has a static method `configureTestingModule` which accepts a Module definition:

```typescript
TestBed.configureTestingModule({
  imports: [ /*… */ ],
  declarations: [ /*… */ ],
  providers: [ /*… */ ],
});
```

In a unit test, add those parts to the Module that are strictly necessary: the code under test, mandatory dependencies and fakes. For example, when writing a unit test for `IndependentCounterComponent`, we need to declare that Component class. Since the Component does not have dependencies, does not render other Components, Directives or Pipes, we are done.

```typescript
TestBed.configureTestingModule({
  declarations: [ IndependentCounterComponent ],
});
```

Our Component under test is now part of a Module. We are ready to render it, right? Not yet. First we need to compile all declared Components, Directives and Pipes:

```typescript
TestBed.compileComponents();
```

This instructs the Angular compiler to translate the template files into JavaScript code.

Since `configureTestingModule()` returns the `TestBed` class again, we can chain those two calls:

```typescript
TestBed.configureTestingModule({
  declarations: [ IndependentCounterComponent ],
}).compileComponents();
```

You will see this pattern in most Angular tests that rely on the `TestBed`.

#### Rendering the Component

Now we have a fully-configured testing Module with compiled components. Finally, we can render the Component under test using `createComponent()`:

```typescript
const fixture = TestBed.createComponent(IndependentCounterComponent);
```

`createComponent()` returns a `ComponentFixture`, essentially a wrapper around the Component with useful testing tools. We will learn more about the `ComponentFixture` later.

`createComponent()` renders the Component into a root element in the HTML DOM. Alas, something is missing. The Component is not fully rendered. All the static HTML is present, but the dynamic HTML is missing. The template bindings, like `{{ count }}` in the example, are not evaluated.

In our testing environment, there is no automatic change detection. Even with the default change detection strategy, a Component is not automatically rendered and re-rendered on updates. In testing code, we have to trigger the change detection manually. This might be a nuisance, but it is actually a feature. It allows to test asynchronous behavior in a synchronous manner, which is much simpler.

So the last thing we need to do is to trigger change detection:

```typescript
fixture.detectChanges();
```

#### TestBed + Jasmine

Now the code for rendering a component using the `TestBed` is complete. Let us wrap the code in a Jasmine test suite.

```typescript
describe('IndependentCounterComponent', () => {
  let fixture: ComponentFixture<IndependentCounterComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [IndependentCounterComponent],
    }).compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(IndependentCounterComponent);
    fixture.detectChanges();
  });

  it('…', () => {
    /* TODO */
  });
});
```

Using `describe`, we define a test suite for the `IndependentCounterComponent`. Inside, there are two `beforeEach` blocks. The first `beforeEach` block configures the `TestBed`. The second renders the component.

You might wonder why there are two `beforeEach` blocks. The slight difference is that the first is wrapped in a call to `async()` from `@angular/core/testing`. This function is a helper for dealing with asynchronous test code. (Do not confuse the `async()` testing helper with async functions, a ECMAScript language feature.)

Per default, Jasmine expects that your testing code is synchronous. The functions you pass to `it` but also `beforeEach`, `beforeAll`, `afterEach`, `afterAll` need to finish in a certain amount of time, also known as timeout. Jasmine also supports asynchronous specs, and `async()` helps to declare such specs.

`async()` returns a function that calls the wrapped function. In addition, it waits for all asynchronous tasks to finish and then gets back to Jasmine. Internally, it uses Zone.js to determine whether all tasks have finished.

We learn more about `async()` later. For now, the question is why we need to wrap the calls to `configureTestingModule` and `compileComponents`. The reason is that `compileComponents` is an asynchronous operation. For compiling the Component, Angular needs to read external files, namely the template and the stylesheet. If you are using the Angular CLI, which is most likely, these files are already included in the test bundle. So they are available instantly. If you are not using the CLI, the files have to be loaded asynchronously. Since this is an Angular implementation detail that might change in the future, the safe way is to assume that `compileComponents` is asynchronous.

Now we have built the scaffold for our test using the `TestBed`, we need to write the first spec. `createComponent` returns a fixture, an instance of `ComponentFixture`. What is the fixture and what does it provide?

TODO

### Fixture

The term fixture is borrowed from real-world testing of mechanical parts or electronic devices. A fixture is a standardized frame into which the test object is mounted. The fixture holds the device under test and


### Black box testing an Angular Component

We have talked about [black box vs. white box testing](TODO). Both are valid testing methods. As stated, this guide advises to use black box testing first and foremost.

When applied to Angular Components, black box testing is more intuitive and easier for beginners. When writing a black box test, ask what the Component does for the user and for the parent Components.

White box testing may be more efficient, but it is an advanced technique with severe drawbacks: A white box test might miss crucial Component behavior while giving the illusion that all code is tested.

A common technique to enforce black box testing is to mark internal methods as `private` so they cannot be called in the test. The test should only inspect the documented, public API.

In Angular Components, the difference between external and internal class members does not coincide with their TypeScript visibility (`public` vs. `private`). Properties and methods need to be `public` so that the template is able to access them. This makes sense for Input and Output properties. They need to be read and written from the outside, from your test. However, internal properties and methods exist that are `public` only for the template.

If you reach into the component to access `public` properties or methods that are neither Inputs nor Outputs, you are writing a white box test. This is not wrong, but it is commonly misused. You should test a Component from the DOM perspective and interact with the component primarily using Inputs, Outputs and the rendered DOM. Calling other methods or writing other properties directly runs the risk that you fail to cover important code behavior, most importantly template logic and event handling.

The test we wrote for the `IndependentCounterComponent` is a black box test. It interacts with the DOM by clicking the buttons and typing into form fields. To increase the count, the test simulate a click on the “+” button. It *does not* call the `increase` method although it is public.

```typescript
/* Caution! Not recommended! */
describe('IndependentCounterComponent', () => {
  /* … */
  it('increases the count', () => {
    component.increase();
    fixture.detectChanged();
    expectCount(1),
  });
});
```

TODO


The following table shows which properties and methods of an Angular Component you should access or not in a black box test.

<table>
<caption>Black box testing an Angular component</caption>
<tr>
<th scope="col">Class member</th>
<th scope="col">Access from test</th>
</tr>
<tr>
<th scope="row"><code>@Input</code> properties</th>
<td>Yes (write)</td>
</tr>
<tr>
<th scope="row"><code>@Output</code> properties</th>
<td>Yes (subscribe)</td>
</tr>
<tr>
<th scope="row">Lifecycle methods</th>
<td>Avoid except for <code>ngOnChanges</code></td>
</tr>
<tr>
<th scope="row">Other public methods</th>
<td>Avoid</td>
</tr>
<tr>
<th scope="row">Private properties<br>and methods</th>
<td>No access</td>
</tr>
</table>

---

<h2>Counter-Funktionalität</h2>

<ul>
  <li>Komponente hält aktuellen Count-Wert</li>
  <li>Anzeige des Count-Werts</li>
  <li>Button zum Erhöhen des Count-Wertes</li>
</ul>

<h2>Aufbau eines Unit Test</h2>

<ul>
  <li>Jasmine <code>describe()</code>, <code>beforeEach()</code>, <code>it()</code></li>
  <li><code>TestBed</code> konfigurieren</li>
  <li><code>configureTestingModule</code>, <code>createComponent</code></li>
  <li><code>fixture.detectChanges()</code></li>
</ul>

<h2>Funktionalität einer Komponente testen</h2>

<ul>
  <li>Wie testen wir die Funktionalität?</li>
  <li>HTML-DOM ansehen!</li>
  <li>Komponente rendern</li>
  <li>Elemente heraussuchen</li>
  <li>Inhalte prüfen</li>
</ul>

<h2>Komponente in einem Unit Test</h2>

<ul>
  <li>ComponentFixture, Komponenteninstanz, DebugElement</li>
  <li><code>fixture</code></li>
  <li><code>fixture.componentInstance</code></li>
  <li><code>fixture.nativeElement</code></li>
</ul>

<h2>Elemente heraussuchen</h2>

<ul>
  <li><code>fixture.debugElement.query(By.css('…'))</code></li>
  <li><code>fixture.debugElement.queryAll(By.css('…'))</code></li>
</ul>

<h2>Wie Elemente markieren und finden?</h2>

<ul>
  <li><del>IDs</del></li>
  <li>Klassen: <code>class="qa-count"</code></li>
  <li>data-Attribute: <code>data-testid="count"</code></li>
  <li>Empfehlung: <code>data-testid</code></li>
  <li><code>query(By.css('[data-testid="count"]'))</code></li>
</ul>

<h2>Textinhalte überprüfen (1)</h2>

<ul>
  <li><code>query()</code> liefert ein <code>DebugElement</code></li>
  <li>Wrapper um das echte DOM-Element</li>
  <li><code>debugElement.nativeElement</code> liefert den DOM-Knoten</li>
</ul>

<h2>Textinhalte überprüfen (2)</h2>

<ul>
  <li><code>const text =<br>debugElement.nativeElement.textContent;</code></li>
  <li><code>expect(text).toBe('…');</code></li>
  <li><code>expect(text).toContain('…');</code></li>
</ul>

<h2><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/independent-counter/independent-counter.component.spec.ts">Counter-Test</a></h2>

<ul>
  <li>✅ `it('renders the initial count', …)`</li>
  <li>❌ `it('increments', …)`</li>
</ul>

<h2>Ereignisse simulieren</h2>

<ul>
  <li>Element heraussuchen</li>
  <li><code>triggerEventHandler</code> aufrufen</li>
</ul>

```typescript
debugElement.triggerEventHandler(
  type: string,
  event: Event
)
```

<h2>Synthetisches Event-Objekt</h2>

```typescript
debugElement.triggerEventHandler("click", null);
debugElement.triggerEventHandler("click", {
  preventDefault() {},
  stopPropagation() {},
  target: debugElement.nativeElement,
  currentTarget: debugElement.nativeElement,
  pageX: 100,
  pageY: 200,
});
```

<h2>Interaktivität testen</h2>

  <ol>
  <li>Interaktives Element heraussuchen (Button)</li>
  <li>Ereignis simulieren</li>
  <li>Manuell neu rendern: <code>fixture.detectChanges()</code></li>
  <li>Ausgabe prüfen</li>
  </ol>

<h2><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/independent-counter/independent-counter.component.spec.ts">Counter-Test</a></h2>

<ul>
  <li>✅ it('renders the initial count', …)</li>
  <li>✅ it('increments', …)</li>
</ul>

<h2>Counter-Funktionalität erweitern</h2>

<ul>
  <li>Decrement</li>
  <li>Reset: Eingabefeld und Reset-Button</li>
</ul>

<h2>Counter-Reset testen</h2>

  <ol>
  <li>Eingabefeld heraussuchen und <code>value</code> setzen</li>
  <li>Klick auf Reset-Button simulieren</li>
  <li><code>detectChanges()</code></li>
  <li>Ausgabe prüfen</li>
  </ol>

<h2><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/spec-helpers/element.spec-helper.ts">Helferlein zum Testen von Komponenten</a></h2>

<ul>
  <li><code>findEl(fixture, testId): DebugElement</code></li>
  <li><code>findEls(fixture, testId): DebugElement[]</code></li>
  <li><code>getText(fixture, testId): string</code></li>
  <li><code>expectText(fixture, testId, text)</code></li>
  <li><code>setFieldValue(fixture, testId, text)</code></li>
  <li><code>click(fixture, testId)</code></li>
</ul>

<h2>Input und Outputs</h2>

<ul>
  <li>Counter bekommt einen Input: <code>startCount</code></li>
  <li>Counter bekommt einen Output: <code>countChange</code></li>
</ul>

```html
<app-counter [startCount]="5" (countChange)="logCount($event)"></app-counter>
```

<h2>Inputs im Test setzen</h2>

<p>Inputs sind Eigenschaften der Komponenteninstanz</p>

```typescript
component.startCount = startCount;
component.ngOnChanges();
fixture.detectChanges();
```

<h2>Output testen (1)</h2>

<ul>
  <li>Outputs sind EventEmitter</li>
  <li>EventEmitter sind Observables</li>
  <li><code>component.countChange.subscribe()</code></li>
</ul>

<h2>Output testen (2)</h2>

```typescript
let actualValue: number | undefined;
component.countChange.subscribe((value: number) => {
  actualValue = value;
});

click(fixture, "increment-button");
expect(actualValue).toBe(1);
```

<h2>Einfache Komponenten: ✅ getestet</h2>

<ul>
  <li>Ausgabe testen</li>
  <li>User-Eingaben simulieren</li>
  <li>Inputs &amp; Outputs</li>
  <li>Verwendet Helferlein!</li>
</ul>

<h2>Komponente als Black Box testen</h2>

<ul>
  <li>Nur ins DOM schauen und Ereignisse auslösen</li>
  <li>Nur über Inputs und Outputs mit der Komponente sprechen</li>
  <li><em>Keine</em> Methoden aufrufen</li>
  <li><em>Nicht</em> auf Eigenschaften zugreifen<br>(auch nicht wenn sie öffentlich sind)</li>
</ul>

<h2>Tests debuggen</h2>

<ul>
  <li>Chrome benutzen, Developer Tools öffnen</li>
  <li>Test-Focus setzen mit <code>fdescribe()</code> und <code>fit()</code></li>
  <li><code>console.log(…)</code> ist Gold wert</li>
  <li>Debug-Ausgaben in Lifecycle-Methoden, Handlern und im Template</li>
</ul>

<h2>Komplexe Komponenten</h2>

<ul>
  <li>Eigenständig vs. verbunden</li>
  <li>»Smart« vs. »dumb«</li>
  <li>
      Abhängigkeiten:
    <ul>
      <li>Verschachtelte Komponenten</li>
      <li>Services</li>
      <li>NgRx Store</li>
    </ul>
    </li>
</ul>

<h2>Verschachtelte Komponenten testen</h2>

<ul>
  <li>Unit Test – Shallow Rendering –<br>Kinder nicht rendern</li>
  <li>Integration Test – Deep Rendering –<br>Kinder mitrendern</li>
</ul>

<h2>Deep Rendering</h2>

<ul>

  <li>Beispiel: <a href="https://github.com/9elements/angular-workshop/blob/master/src/app/app.component.html">app.component.html</a> referenziert <code>&lt;app-counter></code></li>
  <li>Standardmäßig werden die Kinder mitgerendert</li>
  <li>Alle Komponenten müssen im Testmodul deklariert werden</li>

</ul>

<h2>Shallow Rendering (1)</h2>
<ul>
  <li>Beispiel <a href="https://github.com/9elements/angular-workshop/blob/master/src/app/app.component.spec.ts">AppComponent</a></li>
  <li>Kinder nicht mitrendern:<br><code>schemas: [ NO_ERRORS_SCHEMA ]</code></li>
  <li>Wrapper-Elemente bleiben leer, Kindkomponenten werden nicht instantiiert</li>
  <li><code>&lt;app-counter …>&lt;/app-counter></code></li>
</ul>

<h2>Shallow Rendering (2):<br>Was testen?</h2>

  <ol>
  <li>Kindkomponente wird gerendert<br>(Wrapper <code>app-counter</code> ist vorhanden)</li>
  <li>Input-Daten werden korrekt übergeben</li>
  <li>Auf Events (Outputs) wird korrekt reagiert</li>
  </ol>

<h2>Shallow Rendering (3):<br>Kindkomponente vorhanden?</h2>

```typescript
const el = fixture.debugElement.query(By.css("app-counter"));
expect(el).toBeTruthy();
```

<h2>Shallow Rendering (4):<br>Kindkomponente vorhanden?</h2>

```typescript
// Helferlein: Wirft einen Fehler, wenn nichts gefunden
const el = findComponent(fixture, "app-counter");
expect(el).toBeTruthy();
// Oder
expect().nothing();
```

<h2>Shallow Rendering (5):<br>Input testen</h2>

<p>DebugElement hat eine Eigenschaft <code>properties</code></p>

```typescript
<app-counter [startCount]="5"></app-counter>
```

```typescript
<app-counter [startCount]="5"></app-counter>
```

```typescript
const el = findComponent(fixture, "app-counter");
expect(el.properties.startCount).toBe(5);
```

<h2>Shallow Rendering (6):<br>Output testen</h2>

<ul>
  <li>Outputs sind aus Sicht der Elternkomponente Ereignisse</li>
  <li>Simulieren mit dem bekannten <code>triggerEventHandler</code></li>
</ul>

<h2>Shallow Rendering (7):<br>Output testen</h2>

<ul>
  <li><code>(countChange)="handleCountChange($event)"</code></li>
  <li><code>triggerEventHandler('countChange', 5)</code></li>
  <li>Auswirkung prüfen (z.B. mit Jasmine Spies)</li>
</ul>

<h2>Komponente mit Service-Abhängigkeit (1)</h2>

<p>Beispiel <a href="https://github.com/9elements/angular-workshop/blob/master/src/app/service-counter/service-counter.component.ts">ServiceCounterComponent</a></p>

```typescript
class ServiceCounterComponent {
  constructor(private counterService: CounterService) {
    this.count$ = this.counterService.getCount();
  }
}
```

<h2>Komponente mit Service-Abhängigkeit (2)</h2>

<ul>
  <li>Unit Test – Service wird gemockt</li>
  <li>Integration Test – Service wird mitgetestet</li>
</ul>

<h2>Service-Abhängigkeit mocken</h2>

<ul>
  <li><a href="https://codecraft.tv/courses/angular/unit-testing/mocks-and-spies/">Verschiedene Mocking-Strategien</a> 🤷‍♀️</li>
  <li>Testing with the real service</li>
  <li>Mocking with fake classes</li>
  <li>Mocking by overriding functions</li>
  <li>Mock by using a real instance with Spy</li>
</ul>

<h2>Anforderungen an Mocks</h2>

<ul>
  <li>Original darf nie aufgerufen werden (Nebenwirkungen!)</li>
  <li>⇒ Es darf nicht möglich sein, das Überschreiben einer Methode zu vergessen</li>
  <li>Mock und Original müssen auf dem gleichen Stand sein</li>
  <li>⇒ Mock muss eine Typableitung des Originals sein</li>
</ul>

<h2>Anforderungen erfüllt?</h2>

  <ul style="list-style-type: none">
  <li>⛈ Testing with the real service</li>
  <li>⛅️ Mocking with fake classes</li>
  <li>🌧 Mocking by overriding functions</li>
  <li>🌧 Mock by using a real instance with Spy</li>
</ul>

  <p style="font-size: 200%">🙍‍♀️🤦‍♀️</p>

<h2>Service-Abhängigkeit mocken</h2>

  <ul style="list-style-type: none">
  <li>👩‍💻 Basis: Mocking with fake classes</li>
  <li>👩‍🔬 Entweder eine Klasse oder Instanz</li>
  <li>👩‍🔧 Typableitung hinzufügen</li>
  <li>💆‍♀️ 🌈 ☀️</li>
</ul>

<h2>Typ vorbereiten</h2>

<p>Einzelne Methoden</p>

```typescript
type PartialCounterService = Pick<
  CounterService,
  "getCount" | "increment" | "decrement" | "reset"
>;
```

<h2>Typ vorbereiten (Alternative)</h2>

<p>Alle öffentlichen Methoden</p>

```typescript
type PartialCounterService = Pick<CounterService, keyof CounterService>;
```

<h2>☀️ Mock-Service als Klasse</h2>

```typescript
class MockCounterService implements PartialCounterService {
  getCount() {
    return of(count);
  }
  increment() {}
  decrement() {}
  reset() {}
}
```

<h2>☀️ Mock-Service als Objekt</h2>

```typescript
const mockCounterService: PartialCounterService = {
  getCount() {
    return of(count);
  },
  increment() {},
  decrement() {},
  reset() {},
};
```

<h2>Mock anstelle des Originals verwenden</h2>

<p>Im Testing Module:</p>

<h3>useClass</h3>

```typescript
providers: [{ provide: CounterService, useClass: MockCounterService }];
```

<h3>useValue</h3>

```typescript
providers: [{ provide: CounterService, useValue: mockCounterService }];
```

<h2>Interaktion mit dem Mock testen</h2>

<ul>
  <li>Mock liefert feste Rückgabewerte</li>
  <li>Mock erwartet gewisse Parameter</li>
  <li>Parameter-Übergabe testen mit Jasmine Spies</li>
</ul>

<h2>Jasmine Spy</h2>

<ul>
  <li>Funktion, die alle Aufrufe aufzeichnet</li>
  <li>Später ist Prüfung möglich</li>
  <li>Wurde der Spy aufgerufen? Wie oft?</li>
  <li>Wurde der Spy mit gewissen Parametern aufgerufen?</li>
</ul>

<h2>Unabhängigen Spy erzeugen</h2>

```typescript
const spy = jasmine.createSpy('name');
const spy = jasmine.createSpy('name').and.returnValue(…);
const spy = jasmine.createSpy('name').and.callFake((…) => {…});
```

<h2>Spy wrappt eine vorhandene Methode</h2>

```typescript
spyOn(object, "method");
spyOn(object, "method").and.callThrough();
spyOn(object, "method").and.returnValue(value);
```

<h2>Spies verifizieren</h2>

```typescript
expect(spy).toHaveBeenCalled();
expect(spy).not.toHaveBeenCalled();
expect(spy).toHaveBeenCalledTimes(5);
expect(spy).toHaveBeenCalledWith(param1 /* … */);
expect(object.method).toHaveBeenCalled();
expect(object.method).toHaveBeenCalledWith(param1 /* … */);
```

<h2>Spies am Mock-Service installieren</h2>

```typescript
spyOn(mockCounterService, "getCount").and.callThrough();
spyOn(mockCounterService, "increment");
spyOn(mockCounterService, "decrement");
spyOn(mockCounterService, "reset");
```

<h2>Mock-Service als Spy-Objekt</h2>

<p><a href="https://jasmine.github.io/api/edge/jasmine.html#.createSpyObj">jasmine.createSpyObj()</a></p>

```typescript
const mockCounterService = jasmine.createSpyObj<CounterService>(
  'CounterService',
  {
    getCount: of(count),
    increment: undefined,
    decrement: undefined,
    reset: undefined
  }
]);
```

<h2>Spies verifizieren</h2>

```typescript
expect(mockCounterService.getCount).toHaveBeenCalled();
expect(mockCounterService.increment).toHaveBeenCalled();
expect(mockCounterService.decrement).toHaveBeenCalled();
expect(mockCounterService.reset).toHaveBeenCalledWith(newCount);
```

<h2>Service-Mocking: Fazit</h2>

<ul>
  <li>Mocking ist aufwändig und erfordert Übung</li>
  <li>Services lassen sich gut mocken …</li>
  <li>… wenn das Interface übersichtlich und die Funktionalität klar sind</li>
  <li>Sinnvolle Testdaten (Stubs) sind nötig</li>
</ul>

<h2>Komponente mit NgRx-Store-Abhängigkeit</h2>

<p><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/ngrx-counter/ngrx-counter.component.ts">NgRxCounterComponent</a></p>

```typescript
class NgRxCounterComponent {
  constructor(private store: Store<AppState>) {
    this.count$ = store.pipe(select("counter"));
  }
}
```

<h2>Mock-Store bereitstellen (1)</h2>
<p><a href="https://ngrx.io/guide/store/testing">Offizielle Methode</a></p>

```typescript
provideMockStore({ initialState: {…}, selectors: {…} })
```

<h2>Mock-Store bereitstellen (2)</h2>

```typescript
TestBed.configureTestingModule({
  declarations: [NgRxCounterComponent],
  providers: [provideMockStore({ initialState: mockState })],
}).compileComponents();
```

<h2>Mock-State erzeugen</h2>

```typescript
const mockState: Partial<AppState> = {
  counter: 1,
};
```

<h2>Store-Abhängigkeit: Was testen?</h2>

<ul>
  <li>Komponente zieht sich Daten aus dem Store</li>
  <li>Komponente transformiert ggf. diese Daten</li>
  <li>Komponente rendert diese Daten</li>
  <li>Komponente dispatcht Actions</li>
</ul>

<h2>Dispatch von Actions testen (1)</h2>

<p>In <code>beforeEach</code> einen Spy auf <code>MockStore#dispatch</code> installieren</p>

```typescript
store = TestBed.get(Store);
spyOn(store, "dispatch");
```

<h2>Dispatch von Actions testen (2)</h2>

```typescript
it("resets the count", () => {
  const newCount = 15;
  findEl(fixture, "reset-input").nativeElement.value = newCount;
  click(fixture, "reset-button");
  expect(store.dispatch).toHaveBeenCalledWith(reset({ count: newCount }));
});
```

<h2>Verschiedene States testen</h2>

<ul>
  <li>Wenn der State komplex sein kann, müssen alle Fälle getestet werden</li>
  <li>Pro Spec ein anderer State</li>
  <li>Flexible <code>setup</code>-Funktion statt fester <code>beforeEach</code>-Logik</li>
</ul>

<h2>Setup-Funktion</h2>

```typescript
function setup(mockState: Partial<AppState>) {
  TestBed.configureTestingModule({
    declarations: [NgRxCounterComponent],
    providers: [provideMockStore({ initialState: mockState })],
  }).compileComponents();

  const store: Store<AppState> = TestBed.get(Store);
  spyOn(store, "dispatch");

  const fixture = TestBed.createComponent(NgRxCounterComponent);
  fixture.detectChanges();

  return { fixture, store };
}
```

<h2>Verschiedene States testen</h2>

```typescript
it("renders the data from the store", () => {
  const mockState: Partia<AppState> = { counter: 1 };
  const { fixture, store } = setup(mockState);
  expectText(fixture, "count", String(mockState.counter));
});
```

<p>Baut Helferlein, die komplexen Mock-State generieren</p>

<h2>Zusammenfassung Komponenten-Tests</h2>

  <ol>
  <li>Eigenständige Komponenten:<br>Ausgabe, Interaktivität, Inputs, Outputs</li>
  <li>Komponenten mit Service-Abhängigkeit:<br>DI, Mocking, Spies, Mock-Daten</li>
  <li>Komponenten mit Store-Abhängigkeit:<br>DI, Mock State + Store, Action-Dispatch</li>
  </ol>

<h2>Weitere Teile der Anwendung</h2>

<ul>
  <li>Services</li>
  <li>Effects</li>
  <li>Reducer</li>
  <li>(Pipes, Directives, Resolver…)</li>
</ul>

<h2>Services – Was testen?</h2>

<ul>
  <li>Methoden liefern Werte zurück</li>
  <li>
      Methodenaufrufe ändern privaten State<br>
      &rarr; Indirekt testen
    </li>
  <li>Interaktion mit Abhängigkeiten (z.B. <code>HttpClient</code>)</li>
</ul>

<h2>Services testen: <a href="https://github.com/9elements/angular-workshop/blob/master/src/app/services/counter.service.ts"><code>CounterService</code></a></h2>

<ul>
  <li>Standard-<code>TestBed</code></li>
  <li>
      Eine Spec für jede öffentliche Methode:<br>
      <code>getCount</code>, <code>increment</code>, <code>decrement</code>, <code>reset</code>
    </li>
  <li>Auswirkung testen durch <code>getCount</code>-Aufruf</li>
</ul>

<h2>Services mit Abhängigkeit testen:<br><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/services/counter-api.service.ts"><code>CounterApiService</code></a></h2>

<ul>
  <li>Unit Test – in Isolation testen</li>
  <li>Abhängigkeit auf <a href="https://angular.io/guide/http">HttpClient</a></li>
  <li>Einfach testbar mit dem <a href="https://angular.io/guide/http#testing-http-requests"><code>HttpClientTestingModule</code></a></li>
</ul>

```typescript
TestBed.configureTestingModule({
  imports: [HttpClientTestingModule],
  providers: [CounterApiService],
});
```

<h2>HttpClientTestingModule (1)</h2>

<p>HTTP-Requests finden</p>

```typescript
const httpMock: HttpTestingController = TestBed.get(HttpTestingController);

const request = httpMock.expectOne({
  method: "GET",
  url: expectedURL,
});

const predicate = (candidateRequest) => candidateRequest.method === "GET";
const request = httpMock.expectOne(predicate);
const requests = httpMock.match(predicate);
```

<h2>HttpClientTestingModule (2)</h2>

<p>Gefundene Requests beantworten</p>

```typescript
request.flush(serverResponse);
```

<p>Fehler simulieren</p>

```typescript
request.error(new ErrorEvent("API error"), {
  status: 404,
  statusText: "Not Found",
});
```

<h2>HttpClientTestingModule (3)</h2>

<p>Verfizieren, dass alle Requests gefunden und beantwortet wurden</p>

```typescript
httpMock.verify();
```

<h2>Fazit: Services testen</h2>

<ul>
  <li>Relativ einfach</li>
  <li>Nichts fundamental Neues</li>
  <li>Gleicher Aufwand wie beim Service-Mocking für Komponenten-Tests</li>
</ul>

<h2>NgRx Effects</h2>

<ul>
  <li>Die Redux-Architektur lässt es offen, wie Nebenwirkungen (Side Effects) umgesetzt werden</li>
  <li>Effects sind eine hervorragende Lösung</li>
  <li>Alle anderen Lösungen sind m.E. komplizierter oder schwerer zu testen</li>
</ul>

<h2>Grundschema eines Effects</h2>

<ul>
  <li>WENN eine gewisse Action eintritt</li>
  <li>DANN Nebenwirkung ausführen</li>
  <li>DANN Erfolgs-Action ausgeben</li>
  <li>ODER Fehler-Action ausgeben</li>
</ul>

<h2><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/effects/counter.effects.ts">CounterEffects saveOnChange$</a></h2>

<ul>
  <li>WENN Action <code>increment</code> eintritt</li>
  <li>DANN aktuellen Count aus dem Store auslesen</li>
  <li>DANN den Count an den Server senden</li>
  <li>DANN <code>saveSuccess</code> ausgeben</li>
  <li>ODER <code>saveError</code> ausgeben</li>
</ul>

<h2>Effects: Umsetzung</h2>

<ul>
  <li>Ein Effect ist ein Observable</li>
  <li>Bildet Actions auf Actions ab</li>
  <li>Input:
    <ul>
      <li>Actions: <code>Observable&lt;Action></code></li>
      <li>ggf. Store: <code>Observable&lt;AppState></code></li>
    </ul>
    </li>
  <li>Output: <code>Observable&lt;Action></code></li>
</ul>

<h2>Effect schematisch</h2>

  <ol class="flow-blocks">
    <li class="flow-block">Observable&lt;Action></li>
    <li class="flow-block">Filter mit <code>ofType()</code></li>
    <li class="flow-block">State holen mit <code>withLatestFrom(store)</code></li>
    <li class="flow-block side-effect">Nebenwirkung (Service-Call)</li>
    <li class="flow-block">Map auf Success-Action</li>
    <li class="flow-block"><code>catchError</code> mit Error-Action</li>
  </ol>

<h2>Effects aus Sicht von Angular</h2>

<ul>
  <li><a href="https://github.com/9elements/angular-workshop/blob/master/src/app/effects/counter.effects.ts"><code>CounterEffects</code></a> ist eine Klasse mit Eigenschaften vom Typ <code>Observable&lt;Action></code></li>
  <li>Die Klasse nimmt an der Dependency Injection Teil (<code>@Injectable</code>)</li>
  <li>Abhängigkeiten sind deklariert</li>
</ul>

<h2>Effects: Abhängigkeiten</h2>

```typescript
public constructor(
  private actions$: Actions,
  private store: Store<AppState>,
  private counterApiService: CounterApiService
) {}
```

<h2>Effects: Abhängigkeiten mocken</h2>

```typescript
TestBed.configureTestingModule({
  providers: [
    { provide: Actions, useValue: ??? },
    { provide: Store, useValue: ??? },
    { provide: CounterApiService, useValue: ??? },
    CounterEffects
  ]
});
```

<h2>Effects testen</h2>

  <ol>
  <li>Input-Observable mit Actions bereitstellen (<code>actions$</code>)</li>
  <li>ggf. Mock-Store bereitstellen (<code>store</code>)</li>
  <li>Service-Mock bereitstellen (<code>counterApiService</code>)</li>
  <li>Output-Observable abonnieren, Werte prüfen</li>
  <li>Service-Mock verifizieren</li>
  </ol>

<h2>Input-Observable mit Actions bereitstellen</h2>

```typescript
import { from, of } from "rxjs";
import { provideMockActions } from "@ngrx/effects/testing";

const action = reset({ count: 123 });
provideMockActions(of(action));

const actions = [reset({ count: 123 })];
provideMockActions(from(actions));
```

<h2>Mock-State erzeugen</h2>

```typescript
const mockState: Partial<AppState> = {
  counter: 1,
};
```

<h2>Mock-Store bereitstellen</h2>

<ul>
  <li><a href="#provide-mock-store"><code>provideMockStore()</code></a></li>
  <li>Es geht noch einfacher, wenn <code>dispatch</code> und <code>select</code> nicht aufgerufen werden</li>
  <li>Der Store ist ein Observable</li>
  <li><code>{ provide: Store, useValue: of(mockState) }</code></li>
</ul>

<h2>Service-Mock bereitstellen</h2>

<ul>
  <li>Siehe <a href="#service-mock">Service-Abhängigkeit mocken</a></li>
  <li>Mock-Klasse oder Mock-Objekt erzeugen</li>
  <li>Jasmine Spies installieren mit <code>spyOn()</code></li>
</ul>

<h2>Mock für <code>CounterApiService</code></h2>

```typescript
type PartialCounterApiService = Pick<CounterApiService, "saveCounter">;

const mockCounterApi: PartialCounterApiService = {
  saveCounter() {
    return of({});
  },
};

spyOn(mockCounterApi, "saveCounter").and.callThrough();
```

<h2>Mock für <code>CounterApiService</code> (Alternative)</h2>

```typescript
const mockCounterApi = jasmine.createSpyObj<CounterApiService>(
  "CounterApiService",
  ["saveCounter"]
);
mockCounterApi.saveCounter.and.returnValue(of({}));
```

<h2>Output-Observable prüfen</h2>

```typescript
counterEffects.saveOnChange$.subscribe((outputAction) => {
  expect(outputAction).toEqual(saveSuccess());
});

counterEffects.saveOnChange$.pipe(toArray()).subscribe((outputActions) => {
  expect(outputActions).toEqual([saveSuccess()]);
});
```

<h2>Output-Observable prüfen: Helferlein</h2>

```typescript
function expectActions(effect: Observable<Action>, actions: Action[]) {
  effect.pipe(toArray()).subscribe((actualActions) => {
    expect(actualActions).toEqual(actions);
  }, fail);
}

expectActions(counterEffects.saveOnChange$, [saveSuccess()]);
```

<h2>Service-Mock verifizieren</h2>

```typescript
expect(mockCounterApi.saveCounter).toHaveBeenCalledWith(mockState.counter);
```

<h2>Fehlerfall testen</h2>

<p>Zweiter Service-Mock, der einen Fehler wirft</p>

```typescript
const mockCounterApiError: PartialCounterApiService = {
  saveCounter() {
    return throwError(apiError);
  },
};
```

<p>Eine Error-Action erwarten</p>

```typescript
expectActions(counterEffects.saveOnChange$, [saveError({ error: apiError })]);
```

<h2>Komplexe Effects testen</h2>

<ul>
  <li>Die meisten Effects haben eine einfache RxJS-Logik</li>
  <li>Input Actions + Store + Nebenwirkung<br>&rarr; Output Action(s)</li>
  <li>Komplexen Effect in mehrere einfache zerlegen</li>
  <li><a href="https://ngrx.io/guide/effects/testing#marble-diagrams">Marble Testing</a></li>
</ul>

<h2>Effects testen: Zusammenfassung</h2>

<ul>
  <li>Setup erfordert tieferes Verständnis von RxJS und NgRx</li>
  <li>Mocking: Input-Actions, Store, Service(s)</li>
  <li>Helferlein sinnvoll</li>
  <li>Dann relativ wenig Arbeit</li>
</ul>

<h2>Reducer testen (1)</h2>

<ul>
  <li>Reducer sind Pure Functions</li>
  <li>Daher einfach zu testen</li>
  <li>Werte rein, Werte raus</li>
  <li>Nur Stubs, keine Mocks</li>
</ul>

<h2>Reducer testen (2)</h2>

```typescript
function partReducer(state: StatePart, action: Action): StatePart {}

const state: StatePart = {
  /* … */
};
const action = someAction();
const newState: StatePart = {
  /* … */
};
expect(partReducer(state, action)).toEqual(newState);
```

<h2>Reducer testen (3)</h2>

<ul>
  <li>Beispiel <a href="https://github.com/9elements/angular-workshop/blob/master/src/app/reducers/counter.reducer.ts">counterReducer</a></li>
  <li>Initialisierung: <code>state = initialState</code></li>
  <li>Default-Fall (<code>return state)</code></li>
  <li>State-Änderung bei den relevanten Actions</li>
</ul>

<h2>Immutability in Reducern</h2>

<ul>
  <li>Reducer dürfen den State nicht ändern</li>
  <li>Müssen einen neues Objekt (Kopie) erzeugen</li>
  <li><code>{ ...state, property: newValue }</code></li>
</ul>

<h2>Immutability-Helferlein</h2>

<ul>
  <li><a href="https://ngrx.io/guide/store/configuration/runtime-checks">strictStateImmutability</a><br>(ehemals <a href="https://github.com/brandonroberts/ngrx-store-freeze">ngrx-store-freeze</a>)</li>
  <li><a href="https://github.com/mweststrate/immer">immer.js</a></li>
  <li><a href="https://github.com/kolodny/immutability-helper">immutability helper</a></li>
  <li><a href="https://github.com/rtfeldman/seamless-immutable">seamless immutable</a></li>
</ul>

<h2>Code Coverage</h2>

<ul>
  <li>Welche Codezeilen wurden durch die Unit-Tests aufgerufen?</li>
  <li><a href="https://istanbul.js.org/">Istanbul test coverage tool</a></li>
  <li><code>ng test --code-coverage</code></li>
</ul>

<h2>100% Code Coverage</h2>

<ul>
  <li>100% Coverage ist möglich und sinnvoll</li>
  <li>Bei den letzten Prozent wird es erst interessant</li>
  <li>Edge Cases und schwer zu testbare Fälle</li>
</ul>

<h2>Wert der Code Coverage</h2>

<ul>
  <li>Jede Zeile wurde mindestens einmal ausgeführt</li>
  <li>Bedeutet nicht, dass alle Fälle sinnvoll getestet wurden</li>
</ul>

<h2>End-to-End Tests in Angular</h2>

<ul>
  <li><a href="https://www.w3.org/TR/webdriver1/">WebDriver-Protokoll</a>, Selenium</li>
  <li>Fernsteuern eines Browsers</li>
  <li>Auslesen von Inhalten</li>
  <li><a href="https://www.protractortest.org/">Protractor</a>, Jasmine</li>
</ul>

<h2>End-to-End Test</h2>

<ul>
  <li>Navigiert zu einer URL</li>
  <li>Sucht Elemente heraus</li>
  <li>Simuliert Maus- und Tastatur-Eingaben</li>
  <li>Testet Elementinhalte</li>
</ul>

<h2>End-to-End Tests starten</h2>

<ul>
  <li><code>ng e2e</code></li>
  <li><code>e2e/app.e2e-spec.ts</code></li>
</ul>

<h2>Protractor: Browser steuern</h2>

<ul>
  <li><a href="https://www.protractortest.org/#/api">Protractor-API</a></li>
  <li><code>browser.get('/')</code></li>
  <li><code>browser.refresh()</code></li>
  <li><code>browser.reset()</code></li>
</ul>

<h2>Protractor: Einzelne Elemente finden</h2>

```typescript
element(by.id("…"));
element(by.name("…"));
element(by.className("…"));
element(by.css("…"));
$("…");
element(by.css('[data-testid="count"]'));
findEl("count");
```

<p><a href="https://github.com/9elements/angular-workshop/blob/master/e2e/e2e.spec-helper.ts">Helferlein: <code>findEl</code></a></p>

<h2>Protractor: Viele Elemente finden</h2>

```typescript
element.all(by.id("…"));
element.all(by.name("…"));
element.all(by.className("…"));
element.all(by.css("…"));
$$("…");
element.all(by.css('[data-testid="count"]'));
findEls("count");
```

<p><a href="https://github.com/9elements/angular-workshop/blob/master/e2e/e2e.spec-helper.ts">Helferlein: <code>findEls</code></a></p>

<h2>Protractor: Textinhalt lesen</h2>

```typescript
// <h1 data-testid="count">Hello</h1>
const el = findEl("heading");
expect(heading.getText()).toBe("Hello");
```

<h2>Protractor: Klicks</h2>

```typescript
// <button data-testid="increment-button">+</button>
findEl("increment-button").click();
```

<h2>Protractor: Tastatureingaben</h2>

```typescript
// <input data-testid="reset-input">
findEl("reset-input").sendKeys("123");
```

<h2>Protractor: Page Objects</h2>

<ul>
  <li>Page Object ist eine einfache Klasse, die eine Seite repräsentiert</li>
  <li>Page Object: Low-level, Test: High-Level</li>
  <li>Ziel: Prägnanz und Lesbarkeit des Tests erhöhen</li>
  <li>Wenn sich das Markup ändert:<br>Page Object ändern, Test nicht</li>
</ul>

<h2>Protractor: Page Objects</h2>

<ul>
  <li><code>*.po.ts</code></li>
  <li>Einfache Klasse mit Methoden, meist Element-Getter</li>
  <li>Selektoren (<code>data-testid</code>-Namen)</li>
  <li><code>findEl</code>- und <code>findEls</code>-Aufrufe</li>
  <li>Komplexere Eingabesequenzen</li>
</ul>

<h2>Counter-App</h2>

<ul>
  <li><a href="https://github.com/9elements/angular-workshop/blob/master/e2e/app.e2e-spec.ts"><code>e2e/app.e2e-spec.ts</code></a></li>
  <li><a href="https://github.com/9elements/angular-workshop/blob/master/e2e/app.po.ts"><code>e2e/app.po.ts</code></a></li>
  <li><code>ng e2e</code> oder separat:</li>
  <li><code>ng serve</code></li>
  <li><code>ng e2e --configuration=noserve</code></li>
</ul>

<h2>End-to-End Tests: Fallstricke</h2>

<ul>
  <li>Alle WebDriver-Aktionen sind asynchron und geben Promises zurück</li>
  <li>jasminewd ermöglicht es Tests zu schreiben, als wären die Aktionen synchron</li>
  <li>E2E-Tests sehen Unit-Tests ähnlich, laufen aber fundamental anders</li>
</ul>

<h2>End-to-End Tests: Asynchronität</h2>

```typescript
const el = findEl(…);
el.click();
expect(el.getText()).toBe('Hello');
```

<p>Intern:</p>

```typescript
findEl(…)
  .then((el) => el.click())
  .then((el) => el.getText())
  .then((text) => expect(text).toBe('Hello');
```

<h2>End-to-End Tests: Fazit</h2>

<ul>
  <li>Äußerst effektiv, um ein Feature unter realen Bedingungen zu testen</li>
  <li>Hochkomplex, daher unzuverlässig und fehleranfällig</li>
  <li>Konventionen nötig</li>
  <li>Protractor stammt aus Angular-1-Zeiten</li>
  <li>Simulierte Synchronität ist schwarze Magie</li>
</ul>

<h2>Testen und Testbarkeit</h2>

<ul>
  <li>Testing lehrt testbaren Code zu schreiben</li>
  <li>Testbarer Code ist besserer Code</li>
  <li>Do one thing and do it well</li>
  <li>Logik in kleine, wohldefinierte Einheiten aufbrechen</li>
  <li>Einheiten einzeln und im Verbund testen</li>
</ul>

</main>
</div>

<script type="module">
const headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6');
const output = document.getElementById('generated-toc');
const fragment = document.createDocumentFragment();
Array.from(headings).forEach((heading) => {
  const li = document.createElement('li');
  const a = document.createElement('a');
  a.href = `#${heading.id}`;
  const tag = heading.tagName.toLowerCase();
  const level = parseInt(tag[1], 10);
  a.textContent = heading.textContent;
  li.classList.add(`toc-heading-level-${level}`);
  li.appendChild(a);
  fragment.appendChild(li);
});
output.appendChild(fragment);
</script>
