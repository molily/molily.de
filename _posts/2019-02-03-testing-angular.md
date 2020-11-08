---
layout: book
title: "Testing Angular – A Developer’s Guide"
description: ""
keywords: JavaScript, Angular, Testing, Automated Tests
lang: en
draft: true
robots: noindex, follow
---

<style>
#toc ol {
  margin-left: 0;
}
#toc li {
  list-style: none;
}
#toc-tree a {
  margin: 0 -1rem;
  padding: 0 1rem;
}
#toc .toc-heading-level-3 a {
  margin-left: calc(1 * 1rem);
}
#toc .toc-heading-level-4 a {
  margin-left: calc(2 * 1rem);
}
#toc .toc-heading-level-5 a {
  margin-left: calc(3 * 1rem);
}

.responsive-iframe {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  max-width: 1000px;
  height: 0;
  padding-top: 56.25%;
}
.responsive-iframe__iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 1px solid white;
}

.load-iframe {
  border: 2px solid #140a32;
  padding: 0 1rem;
  background-color: #22233d;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  color: inherit;
}
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
      <h1 id="toc-book-title">
        Testing Angular<br>
        A Developer’s Guide
      </h1>
      <!-- <p id="toc-epub-link"><strong><a href="/assets/.epub" download>Download this book as EPUB (724 KB)</a></strong></p> -->
      <h2 id="toc-heading">Table of Contents</h2>
      <!--
      <ol id="toc-tree">
        <li>
          <a href="#introduction">Introduction</a>
        </li>
      </ol>
      -->
      <ol id="toc-tree"></ol>
    </nav>
  </div>

<div id="main-container">
<main id="main" markdown="1">

<p id="cover">
<picture>
  <source type="image/avif" srcset="/img/robust-angular/flying-probe-800-30.avif, /img/robust-angular/flying-probe-1600-30.avif 2x">
  <source type="image/webp" srcset="/img/robust-angular/flying-probe-800.webp, /img/robust-angular/flying-probe-1600.webp 2x">
  <source type="image/jpeg" srcset="/img/robust-angular/flying-probe-800-85.jpg, /img/robust-js-1600-65.jpg 2x">
  <img id="cover-image-flying-probe" src="/img/robust-angular/flying-probe-800-85.jpg" srcset="/img/robust-angular/flying-probe-800-85.jpg, /img/robust-js-1600-65.jpg 2x" alt="Photo of a flying probe testing a printed circuit board.">
</picture>

<span id="cover-credits">Photo by genkur from iStock</span>

</p>

<h1 id="main-heading">
  Testing Angular<br>
  <span class="subheading">A Developer’s Guide</span>
</h1>

<p class="intro"><em class="intro-caps">The Angular framework</em> is a mature and comprehensive solution for building enterprise-ready applications based on web technologies. At Angular’s core lies the ability to test all application parts in an automated way. How do we take advantage of Angular’s testability?</p>

<svg class="separator" aria-hidden="true"><use xlink:href="#ornament" /></svg>

## Introduction

Most web developers come across automated tests in their career. They fancy the idea of writing code to scrutinize a web application and put it to an acid test. As web developers, as business people, we want to know whether the site works for the user, our customers.

Does the site allow the user to complete their tasks? Is the site still functional after new features have been introduced or internals have been refactored? How does the site react to user errors or system failure? Testing gives you answers to these questions.

I believe the benefits of automated testing are easy to grasp. Developers want to sleep well and be confident that their application works correctly. Moreover, testing helps developers to write better software. Software that is more robust, better to understand and easier to maintain.

In stark contrast, I have met only few web developers with a steady testing practice. Only few find it _easy_, let alone _enjoy_ writing tests. This task is seen as a chore or nuisance.

Often individual developers are blamed for the lack of tests. The claim that developers are just too ignorant or lazy to write tests is simplistic and downright toxic. If testing has an indisputable value, we need to examine why developers avoid it while being convinced of the benefits. Testing should be easy, straight-forward and commonplace.

If you are struggling with writing tests, it is not your fault or deficit. We are all struggling because testing software is inherently complicated and difficult.

Why is testing so difficult? First, writing automated tests requires a different mindset than writing the implementation code. Implementing a feature means building a structure – testing means trying to knock it over. You try to find weaknesses and loopholes in your own work. You think through all possible cases and pester your code with “What if?” questions. What seems frustrating at first sight is an invaluable strategy to improve your code.

Second, testing has a steep learning curve. If testing can be seen as a tool, it is not a like a screwdriver or power drill. Rather, it compares to a tractor or excavator. It takes training to operate these machines. And it takes experience to apply them accurately and safely.

This is meant to encourage you. Getting started with testing is hard, but it gets easier and easier with more practice. The goal of this guide is to empower you to write tests on a daily basis that cover the important features of your Angular application.

## Target audience

The target audience of this guide are intermediate Angular developers. You should be familiar with Angular’s core concepts.

This guide teaches you how to test Angular application parts like Modules, Components and Services. It assumes you know how to implement them, but not how to test them properly. If you have questions regarding Angular’s core concepts, please refer to the [official Angular documentation](https://angular.io/docs).

If you have not used individual concepts yet, like Directives, that is fine. You can simply skip the chapters that deal with testing those, and pick chapters you are interested in.

Furthermore, this guide is not an introduction to JavaScript or TypeScript. It assumes you have enough JavaScript and TypeScript knowledge to write the implementation and test code you need. Of course, this guide will explain special idioms commonly used for testing.

The official Angular documentation offers a comprehensive [guide on testing](https://angular.io/guide/testing). It is a recommended reading, but this guide does not assume you have read it.

## Terminology

Before we dive in, a quick note regarding the technical terms.

Some words have a special meaning in the context of Angular. In the broader JavaScript context, they have plenty other meanings. This guide tries to distinguish between these meanings by using a different letter case.

When referring to core Angular concepts, this guide uses **upper case**: _Module, Component, Service, Input, Output, Directive, Pipe_ etc.

When using these terms in the general sense, this guide uses **lower case**: _module, component, service, input, output_ etc.

## Testing principles

There is a gap between practical introductions – how to test a feature at all – and essential discussions on the core concepts – what does testing achieve, which type of tests are beneficial etc. Before we dive into the practical tutorial, we need to reflect on a few basics about testing.

### Why we test – what makes a good test

When you are writing tests, you need to keep in mind what the goals of testing are. You need to judge whether a test is valuable with regard to these goals.

Automated testing has several technical, economical and organizational benefits. Let us look pick a few that are useful to judge a test:

1. **Testing saves time and money.** Testing tries to nip software problems in a bud. Tests prevent bugs before they cause real damage, when they are still manageable and under control.

Of course, quality assurance takes time and costs money itself. But it takes less time and is cheaper then letting the bugs slip through into the software release. When a faulty application ships to the customer, when users run into a bug, when data is lost or corrupted, your whole business might be at stake. After an incident, it is expensive to analyze and fix the bug in order to regain the user’s trust.

**A valuable test is cost-effective.** The test prevents bugs that could ultimately render the application unusable. The test is cheap to write compared to the potential damage is prevents.

2. **Testing formalizes and documents the requirements.** A test suite is a formal, human- and machine-readable description of how the code should behave. It helps fellow developers to understand the requirements the original developers had to implement and the challenges they had to deal with.

   **A valuable test clearly describes how the implementation code should behave.** The test uses a proper language to talk to developers and convey the requirements. The test lists known cases the implementation has to deal with.

3. **Testing ensures that the code implements the requirements and does not exhibit bugs.** Testing taps every part of the code in order to find flaws.

   **A valuable test covers the important scenarios** – both correct and incorrect input, expected cases as well as exceptional cases.

4. **Testing makes change safe by preventing regressions.** Tests not only verify that the current implementation meets the requirements. They also verify that the code still works as expected after changes. With proper automated tests in place, accidentally breakage is less likely. Implementing new features and code refactoring is safer.

   **A valuable test fails when essential code is changed or deleted.** Design the test to fail if dependent behavior is changed. It should still pass if unrelated code is changed.

### What testing can achieve

Automated testing is a tool with a specific purpose and scope of application. A basic concept is that testing helps you to ship an application that functions according to its requirements. That is true, but there are certain subtleties.

The [International Software Testing Qualifications Board (ISTQB)](https://www.istqb.org) came up with **Seven
Testing Principles** (CTFL Syllabus 2018 V3.1) that shed light on what testing can achieve and what not. Without discussing every principle, let us consider the main ideas.

The purpose of a test is to discover bugs. If the test fails, it proves the presence of a bug (or the test is set up incorrectly). If the test passes, it proves that _this particular test setup_ did not trigger a bug. It does not prove that the code is correct and free of bugs.

So should you write automated tests for all possible cases to ensure correctness? No, say the ISTQB principles: “Exhaustive testing is impossible”. It is neither technically feasible nor worthwhile to write tests for all possible inputs and conditions. Instead, you should _assess the risks_ of a certain case and write tests for high-risk cases first.

Even if it was viable to cover all cases, it would give you a false sense of security. No software is without errors, and a fully tested software may still be a usability nightmare that does not satisfy its users.

Another core idea is that testing depends on its context and that it needs to be adapted again and again to provide meaning. The specific context in this guide are single-page web applications written in JavaScript, made with Angular. Such applications need specific testing methods and tools we will get to know.

Once you have learned and applied these tools, you should not stop. A fixed tool chain will only discover certain types of bugs. You need to try out different approaches to find new classes of bugs. Likewise, an existing test suite needs to be updated regularly so that it still finds regressions.

<div class="book-sources" markdown="1">
- [International Software Testing Qualifications Board: Certified Tester Foundation Level Syllabus, Version 2018 V3.1, Page 16: Seven Testing Principles](https://www.istqb.org/downloads/category/2-foundation-level-documents.html)
</div>

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
- Are tests well-integrated into your development workflow? For example, a continuous integration server automatically runs the test suite on every change set.

Once you have answered these questions, you should set up a testing goal and implements steps to achieve it. A good start is to think economically. What is the return on investment of writing a test? Pick the low-hanging fruits. Find business-critical features and make sure they are covered by tests. Write tests that are easy to write but cover large parts of the code.

Simultaneously, integrate testing into your team’s workflow. Make sure everyone shares the same basic expertise. Offer formal training workshops and pair experienced programmers with team members less familiar with testing. Appoint maintainers and contact persons for test quality and testing infrastructure. If applicable, hire dedicated software testers.

Writing automated tests should be easy and fun for your team members. Remove any obstacles that make testing difficult or inefficient.

### The right amount of testing

A fierce debate revolves around the right amount of testing. Too little testing is a problem: Features are not properly specified, bugs go unnoticed, regressions happen. But too much testing consumes development time, yields no additional profit and slows down development in the long run.

So we need to reach a sweet spot. If your testing practice deteriorates from this spot, you run into problems. If you add more tests, you observe little benefit.

Tests differ in their value and quality. Some tests are more meaningful than others. If they fail, your application is actually unusable. This means the quality of tests is more important than their quantity.

### Code coverage

A common metric of testing is **code coverage**. It counts the lines in your code that are called by your tests. It tells you which parts of your code (file, method/function, block, expression etc.) are executed at all. Code coverage is typically expressed as percent values, for example, 79% statements, 53% branches, 74% functions, 78% lines.

This metric on testing is useful but also deeply flawed because the value of a test cannot be quantified automatically. Code coverage tells you whether a piece of code was called, regardless of its importance. The coverage report may point to important behavior that is not yet covered by tests, but should be. It does not tell whether the existing tests are meaningful and make the right expectations. You can merely infer that the code does not throw exceptions under test conditions.

It is controversial whether one should strive for 100% code coverage. While it is feasible to cover 100% of certain business-critical code, it requires immense efforts to cover all parts of an application written in Angular and TypeScript. If you write tests for the main features of your app from a user’s perspective, you can easily achieve a code coverage of 60-70%. Every extra percent gain takes more and more time and leads to weird and twisted tests that do not reflect the actual usage of your application.

We are going to discuss the practical use of code coverage tools later.

TODO

<div class="book-sources" markdown="1">
- [Angular guide: Code Coverage](https://angular.io/guide/testing-code-coverage)
</div>

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

End-to-end tests are brittle, meaning they often fail even though the software is without fault. Sometimes they fail for now apparent reason – when you run the same tests again, they suddenly pass. Even if the test correctly fails, it is hard to find the root cause of the problem. You need to wander through the full stack to locate the bug.

End-to-end test are computationally expensive and run slow. Since they use a real, sometimes “headless” browser and run against the full software stack, the testing setup is immense. You need to deploy front-end, back-end, databases, caches etc. to testing machines and then have machines to run the end-to-end tests.

Several commercial tools try to make end-to-end tests easier, faster and more robust. Since end-to-end tests are unreliable because of their complexity, these tools try to reduce complexity at the expense of flexibility. For example, they remote-control one possible browser instead of all browsers that support a generic automation protocol like WebDriver.

In comparison, integration tests are simpler and unit tests even more so. Since they have less moving parts and fewer dependencies, they run faster and the results are reproducible. The setup is relatively simple. Integration and unit tests typically run on one machine with a build of the code under test.

The crucial question for dividing your testing efforts is: Which tests yield the most return on investment? How much work is it to maintain a test in relation to its benefit?

In theory, the benefit of end-to-end tests is the highest, since they indicate whether the application works for the user. In practice, they are flaky, imprecise, painful to write and debug. The business value of integration and unit tests is estimated higher.

For this reason, some experts argue you should write few end-to-end test, a fair amount of integration tests and many unit tests. If this distribution is visualized, it looks like a pyramid:

<p>
<svg style="display: block; margin: auto; width: 100%; max-width: 25rem" viewbox="0 0 500 350">
  <path d="M 250 10 L 490 340 H 10 Z" stroke="gray" stroke-width="2" fill="#d0d0d0" />
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

Unit tests run the risk of mirroring or even duplicating implementation details. These details change frequently because of new requirements elsewhere or during internal refactoring. If you change a line of code somewhere, some distant unit test suddenly fails. This makes sense if you have touched shared types or shared logic, but it may just be a false alarm. You have to fix this failing test for technical reasons, not because something broke.

Integration tests provide a better trade-off. These mid-level tests prescind from implementation details, cover a group of code units and provide more confidence. They are less likely to fail if you refactor code inside of the group.

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

<p><small>(Table adapted from a <a href="https://testing.googleblog.com/2015/04/just-say-no-to-more-end-to-end-tests.html">Google Testing Blog article</a> by Mike Wacker.)</small></p>

<div class="book-sources" markdown="1">
- [Google Testing Blog: Just Say No to More End-to-End Tests](https://testing.googleblog.com/2015/04/just-say-no-to-more-end-to-end-tests.html)
</div>

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
  stroke="#888"
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

### The counter Component

<div class="book-sources" markdown="1">
- [Counter Component: Source code](https://github.com/9elements/angular-workshop)
- [Counter Component: Run the app](https://9elements.github.io/angular-workshop/)
</div>

<button class="load-iframe">
See the counter Component app in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-workshop/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

The counter is a reusable Component that increments, decrements and resets a number using buttons and input fields.

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

<div class="book-sources" markdown="1">
- [Flickr photo search: Source code](https://github.com/9elements/angular-flickr-search)
- [Flickr photo search: Run the app](https://9elements.github.io/angular-flickr-search/)
</div>

<button class="load-iframe">
See the Flickr photo search in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-flickr-search/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

This app that enables the user to search for public photos on Flickr, the popular photo hosting site. First, the user enters a search term and starts the search. The Flickr search API is queried. Second, a list of search results with thumbnails is rendered. Third, the user might select a search result to see the photo details.

This application is straight-forward and relatively simple to implement. Still it raises important questions:

- **App structure**: How to split responsibilities into Components and how to model dependencies.
- **API communication**: How to fetch data by making HTTP requests and update the user interface.
- **State management**: Where to hold the state, how to pass it down in the Component tree, how to alter it.

The Flickr search comes in two flavors using different state management solutions:

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
- Or we provide a **fake** implementation, also called _mock_, that does not have side effects. In this case, we are writing a [unit test](#unit-tests) that tries to test the application part in _isolation_.

A large portion of the time spent while writing tests is spent on decoupling an application part from its dependencies. This guide will teach you how to set up the test environment, isolate an application part and reconnect it with equivalent fake objects.

<div class="book-sources" markdown="1">
- [Angular guide: Dependency injection](https://angular.io/guide/dependency-injection)
</div>

### Angular’s testing tools

Angular provides solid testing tools out of the box. When you create an Angular project using the Angular command line interface (CLI), it comes with a fully-working testing setup for unit, integration and end-to-end tests.

So the Angular team already made important decisions for you: [Jasmine](https://jasmine.github.io/) as testing framework, [Karma](https://karma-runner.github.io/) as test runner as well as [Protractor](https://www.protractortest.org/) for running end-to-end tests. Implementation and test code are bundled with [Webpack](https://webpack.js.org). Application parts are typically tested inside Angular’s [TestBed](https://angular.io/api/core/testing/TestBed).

This setup works well and covers most cases. It is a trade-off with strengths and weaknesses. Since it is merely one possible way to test Angular applications, you could compile your own testing tool chain. For example, some people use [Jest](https://jestjs.io/) instead of Jasmine and Karma. Some people swap Protractor with [Cypress](https://www.cypress.io/). Some people use [Spectator](https://github.com/ngneat/spectator) or the [Angular Testing Library](https://github.com/testing-library/angular-testing-library) as an abstraction instead of using `TestBed` directly.

These alternative tools are not simply better or worse than Angular’s standard tools. They simply make different trade-offs. This guide assumes you begin with the standard setup. Later, once you have reached its limits, you should investigate whether alternatives make testing your application easier, faster and more reliable.

### Running the unit and integration tests

The Angular CLI allows us to run the unit, integration and end-to-end tests. If you have not installed the CLI yet or need to update to the latest version, run this command on your console:

```
npm install -g @angular/cli
```

This installs Angular CLI globally so the `ng` command can be used everywhere. `ng` itself does nothing but exposing a couple of Angular-specific commands.

For example, `ng new` creates a new Angular project directory with a ready-to-use application scaffold. `ng serve` starts a development server, and `ng build` makes a build.

The command for starting the unit and integration tests is:

```
ng test
```

This command does several important things at once.

First, `ng test` uses Webpack to compile your code into a JavaScript bundle. The entry point for the bundle is `src/test.ts`. This file initializes the Angular testing environment (the `TestBed`) and then imports all files in the directory tree with the name pattern `.spec.ts`.

You might be familiar with the entry point for the application, `src/main.ts`. This file also initializes Angular, but then it bootstraps (loads and starts) a Module, typically named `AppModule`. The `AppModule` imports other Modules, Components, Services etc. This way, the bundler finds all parts of the application.

The test bundle works differently. It does not start with a Module and walks through all its dependencies. It merely imports all files whose name ends with `.spec.ts`.

The **`.spec.ts` files** represent the tests. Typically, one `.spec.ts` file contains at least one Jasmine test suite (more on that later). The files are co-located with the implementation code. In our example application, the `CounterService` is located in [src/app/components/counter/counter.component.ts](https://github.com/9elements/angular-workshop/blob/master/src/app/components/counter/counter.component.ts). The corresponding test file sits in [src/app/components/counter/counter.component.spec.ts](https://github.com/9elements/angular-workshop/blob/master/src/app/components/counter/counter.component.spec.ts). This is an Angular convention, not a technical necessity, and we are going to stick to it.

Second, `ng test` launches Karma, the test runner. Karma starts a development server at [http://localhost:9876/](http://localhost:9876/) that serves the JavaScript bundles compiled by Webpack.

Karma in turn launches one or more browsers. The idea of Karma is to run the tests in different browser to ensure cross-browser interoperability. Per default, Chrome is started. In Karma’s configuration file, `karma.conf.js`, you can add more browser launchers for your target browsers. All widely-used browsers are supported: Chrome, Internet Explorer, Edge, Firefox and Safari.

The launched browser opens `http://localhost:9876/`. As mentioned, this site serves the test runner and the test bundle. The tests start immediately. You can track the progress and reads the results in the browser and on the console.

When running the tests in the [counter project](https://github.com/9elements/angular-workshop), the browser output looks like this:

<img src="/img/robust-angular/karma-success.png" alt="46 specs, 0 failures" class="image-max-full">

This is the console output:

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

This feedback cycle allows you to work on the implementation and test code side-by-side. This is important for test-driven development. You change the implementation and expect the test to fail (the test is “red”). You adapt the test so it passes again (the test is “green”). Or you write a failing test first, then adapt the implementation until the test passes. Test-driven development means letting the red-green cycle guide your development.

### TODO Configuring Karma and Jasmine

karma.conf.js
Karma & Jasmine conf

src/test.ts
Karma > Browser > Jasmine

### Testing conventions

Angular offers some tools and conventions on testing, but you need to decide how to apply them. Because there are opposing testing methodologies, the tools are flexible enough to support different ways of testing.

This freedom of choice benefits experts, but confuses and paralyses beginners. In your project, there should be one preferable way how to test a specific application part. You need to make choices and set up project-wide conventions and patterns.

The testing tools that ship with Angular are low-level. They merely provide the basic operations. If you use these tools directly, your tests become messy, repetitive and hard to maintain. You need to create high-level testing tools that cast your conventions into code in order to write short, readable and understandable tests.

This guide values strong conventions and introduces simple helper functions that follow essential testing conventions. Again, your mileage may vary. You should adapt these tools to your needs or build higher-level testing helpers.

## Test suites with Jasmine

Angular ships with Jasmine, a tool that enables you to write and execute unit and integration tests. In particular, Jasmine is a testing framework consisting basically of three parts:

1. A library with classes and functions for constructing tests.
2. A test execution engine.
3. A reporting engine that outputs test results in different formats.

If you are new to Jasmine, I recommend reading the [official Jasmine tutorial](https://jasmine.github.io/tutorials/your_first_suite). This guide provides a short introduction to Jasmine, exploring the basic structure and terminology that will be used throughout this guide.

### Creating a test suite

In terms of Jasmine, a test consists of one or more _suites_. A suite is declared with a `describe` block:

```typescript
describe('Suite description', () => {
  /* … */
});
```

Each suite _describes_ a piece of code, the _code under test_.

`describe` is a function that takes two parameters. The first parameter is a string with a human-readable name. Typically, contains the name of the class or function under test. For example, `describe('CounterComponent', /* … */)` if the suite is testing the `CounterComponent` class. The second parameter is a function containing the suite definition.

TODO: organize the suite with describe

### Specifications

Each suit consists of one of more _specifications_, or short, _specs_. A spec is declared with an `it` block:

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

<div class="book-sources" markdown="1">
- [Jasmine tutorial: Your first suite](https://jasmine.github.io/tutorials/your_first_suite)
</div>

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

In Behavior-Driven Development (BDD), the three phases of a test are fundamentally the same. But they are called **Given, When and Then**. These plain English words try to avoid technical jargon and pose a natural way to think of a test’s structure: “_Given_ these specific conditions, _when_ the user interacts with the application, _then_ it behaves in a certain way.”

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

We could write that code in a Jasmine spec, but Jasmine allows us to create expectations in an easier and more concise manner: The `expect` function together with a **Matcher**.

```javascript
const expectedValue = 5;
const actualValue = add(2, 3);
expect(actualValue).toBe(expectedValue);
```

First, we pass the actual value to the `expect()` function. It returns an expectation object with methods for checking the actual value. We would like to compare the actual value to the expected value, so we use the `toBe` matcher.

`toBe` is the simplest matcher that applies to all possible JavaScript values. Internally, it uses JavaScript’s strict equality operator `===`, also called identity operator. <code>expect(actualValue)&#x200b;.toBe(expectedValue)</code> essentially runs `actualValue === expectedValue`.

`toBe` is useful to compare primitive values like strings, numbers and booleans. For objects, `toBe` matches only if both objects are the same. It fails if two objects are not identical, even if they happen to have the same properties and values.

For checking the deep equality of two objects, Jasmine offers the `toEqual` matcher. This example illustrates the difference:

```javascript
// Fails, objects are not identical
expect({ name: 'Linda' }).toBe({ name: 'Linda' });
// Passes, objects are not identical but deeply equal
expect({ name: 'Linda' }).toEqual({ name: 'Linda' });
```

Jasmine has numerous useful [matchers](https://jasmine.github.io/api/edge/matchers) built-in, `toBe` and `toEqual` being the most common. You can add [custom matchers](https://jasmine.github.io/tutorials/custom_matcher) to hide a complex check behind a short name.

The pattern `expect(actual).toEqual(expectedValue)` originates from Behavior-Driven Development (BDD) again. The code forms a human-readable sentence: “Expect the actual value to equal the expected value.” The `expect` function call and the matcher methods starting with `to` form a readable sentence. The goal is to write a specification that is as readable as a plain text but can be verified automatically.

### Efficient test suites

When writing multiple specs in one suite, you quickly realize that the _Arrange_ phase is similar or even identical across these specs. For example, when testing the `CounterComponent`, the _Arrange_ phase always consists of creating an instance of the class and rendering the Component into the document.

This setup is repeated over and over, so it should be defined once at a central place. You could simply write a `setup` function and call it at the beginning of each spec. But using Jasmine, you can declare code that is called before and after each spec, or before and after all specs.

For this purpose, there are four functions: `beforeEach`, `afterEach`, `beforeAll` and `afterAll`. They are called inside of a `describe` block, just like `it`. They expect one parameter, a function that is called at the given stages.

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

These replacements are also called _doubles_, _stubs_ or _mocks_. Replacing of a dependency is called _stubbing_ or _mocking_. Since these terms are used inconsistently and their difference is subtle, **this guide uses the umbrella term “fake” and “faking”** for any dependency substitution.

Creating and injecting fake dependencies is essential for unit tests. This technique is double-edged – powerful and dangerous at the same time. Since we will create many fakes throughout this guide, we need to set up **rules for faking dependencies** to apply the technique safely.

### Equivalence of fake and original

A fake implementation must have the same shape the original. If the dependency is a function, the fake must have the same signature, meaning the same parameters and the same return value. If the dependency is an object, the fake must have the same public API, meaning the same methods and properties.

The fake does not need to be complete, but sufficient enough to act as a replacement. The fake needs to be equivalent to the original as far as the code under test is concerned, not fully equal to the original.

Like a fake building on a movie set, the outer shape needs to be indistinguishable from an original. But behind the authentic facade, there is only a wooden scaffold.

The biggest danger of creating a fake is that it does not properly mimic the original. Even if the fake resembles the original at the time of writing the code, it might easily get of sync later when the original is changed.

When the original dependency changes its public API, dependent code needs to be adapted. Also, the fake needs to be aligned. When the fake is outdated, the unit test becomes a fantasy world where everything magically works. The test passes but in fact the code under test is broken.

How can we ensure that the fake is up-to-date with the original? How can we ensure the equivalence of original and fake in the long run and prevent any possible divergence?

We can use TypeScript to enforce that the fake has a matching type. The fake needs to be strictly typed. The fake’s type needs to be derived from the original’s type, forming a subset.

Then, TypeScript assures the equivalence. The compiler reminds us to update the implementation and the fake. The TypeScript code simply does not compile if we forget that. We will learn how to declare matching types in the several upcoming examples.

### Effective faking

The original dependency code has side effects that need to be suppressed during testing. The fake needs to _effectively_ prevent the original code from being executed. Strange errors may happen if a mix of fake and original code is executed.

In some faking approaches, the fake inherits from the original. Only those properties and methods are overwritten that are currently used by the code under test.

This is dangerous since we may forget to overwrite methods. When the code under test changes, the test may accidentally call original methods of the dependency.

This guide will present thorough faking techniques that do not allow a slip. They imitate the original code while shielding the original from calls.

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

After having written the first spec for `getTodos`, we need to ask ourselves: Does the test fully cover its behavior? We have tested the success case, also called _happy path_, but the error case, also called _unhappy path_, is yet to be tested. In particular, this error handling code:

```typescript
if (!response.ok) {
  throw new Error(
    `HTTP error: ${response.status} ${response.statusText}`
  );
}
```

When the server response is not “ok”, we throw an error. “Ok” means the HTTP response status code is 200-299. Examples of “not ok” are “403 Forbidden”, “404 Not Found” and “500 Internal Server Error”. Throwing an error rejects the Promise so the caller of `getTodos` knows that fetching the to-dos failed.

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

In the _Arrange_ phase, we inject a spy that returns the new error response.

In the _Act_ phase, we call the method under test but anticipate that it throws an error. In Jasmine, there are several ways to test whether a Promise has been rejected with an error. The example above wraps the `getTodos` call in a `try/catch` statement and saves the error. Most likely, this is how implementation code would handle the error.

In the _Assert_ phase, we make two expectations again. Instead of verifying the return value, we make sure the caught error is an `Error` instance with a useful error message. Finally, we verify that the spy has been called with the right value, just like in the spec for the success case.

Again, this is a plain JavaScript example to illustrate the usage of spies. Usually, an Angular Service does not use `fetch` directly but uses `HttpClient` instead. We will get to know testing this [later](#testing-a-service-that-makes-http-requests).

<div class="book-sources" markdown="1">
- [Jasmine reference: Spies](https://jasmine.github.io/api/edge/Spy.html)
</div>

### Spying on existing object methods

We have used `jasmine.createSpy('name')` to create a standalone spy and have injected it into the constructor. Explicit constructor injection is a straight-forward and recommended way to provide a dependency. It is also the predominant dependency injection strategy in Angular.

Sometimes, there is already an object whose method we need to spy on. This is especially helpful if the code uses global methods from the browser environment, like `window.fetch` in the example above.

For this purpose, we can use the `spyOn()` method:

```typescript
spyOn(window, 'fetch');
```

This installs a spy on the global `fetch` method. Under the hood it saves the original `window.fetch` function for later and overwrites `window.fetch` with a spy. Once the spec is completed, Jasmine automatically restores the original function.

`spyOn` returns the created spy, enabling us to set a return value, like we have learned above.

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

<div class="book-sources" markdown="1">
- [Jasmine reference: spyOn](https://jasmine.github.io/api/edge/global.html#spyOn)
</div>

## TODO Debugging tests

TODO

Test runner
Browser
How to read the output
Console
“Debug”

<!--
<ul>
  <li>Chrome benutzen, Developer Tools öffnen</li>
  <li>Test-Focus setzen mit <code>fdescribe()</code> und <code>fit()</code></li>
  <li><code>console.log(…)</code> ist Gold wert</li>
  <li>Debug-Ausgaben in Lifecycle-Methoden, Handlern und im Template</li>
</ul>
-->

## Testing Components

Components are the power houses of an Angular application. Together, they compose the user interface.

A component deals with several concerns, among others:

- A component renders a certain HTML DOM using the template.
- It accepts data from parent components using Input properties.
- It emits data to parent components using Outputs.
- It reacts to user input using event handlers.
- It renders the content (`ng-content`) and templates (`ng-template`) that are passed.
- It binds data to form controls and allows the user to edit the data.
- It talks to services or other state managers.
- It uses routing information like the current URL and its parameters.

All these tasks need to be tested properly.

### Unit test for the counter Component

As a first example, we are going to test the [CounterComponent](https://github.com/9elements/angular-workshop/tree/master/src/app/components/counter).

<button class="load-iframe">
See the CounterComponent in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-workshop/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

When designing a Component test, the guiding questions are: What does the Component do, what needs to be tested? How do I test this behavior?

We will test the following features of the `CounterComponent`:

- It displays the current count. The initial value is 0 and can be set by an Input.
- When the user activates the “+” button, the count increments.
- When the user activates the “-” button, the count decrements.
- When the user enters a number into the reset input field and activates the reset button, the count is set to the given value.
- When the user changes the count, an Output emits the new count.

Writing down what the Component does already helps to structure the unit test. The features above roughly translate into specs in a test suite.

<div class="book-sources" markdown="1">
- [Code for the CounterComponent](https://github.com/9elements/angular-workshop/tree/master/src/app/components/counter)
</div>

### TestBed

Several chores are necessary to render a Component in Angular, even the simple counter Component. If you look into the [main.ts](https://github.com/9elements/angular-workshop/blob/master/src/main.ts) and the [AppModule](https://github.com/9elements/angular-workshop/blob/master/src/app/app.module.ts) of a typical Angular application, you find that a “platform” is created, a Module is declared and this Module is bootstrapped.

The Angular compiler translates the templates into JavaScript code. To prepare the rendering, an instance of the Component is created, dependencies are resolved and injected, inputs are set. Finally, the template is rendered into the DOM. For testing, you could do all that manually, but you would need to dive deeply into Angular internals.

Instead, the Angular team provides the `TestBed` to ease unit testing. The `TestBed` creates and configures an Angular environment so you can test particular application parts like Components and Services safely and easily.

<div class="book-sources" markdown="1">
- [Angular reference: TestBed](https://angular.io/api/core/testing/TestBed)
- [Testing Utility APIs: TestBed](https://angular.io/guide/testing-utility-apis#testbed-class-summary)
</div>

### Configuring the testing Module

The `TestBed` comes with a testing Module that is configured like normal Modules in your application: You can declare Components, Directives and Pipes, provide Services and other Injectables as well as import other Modules. `TestBed` has a static method `configureTestingModule` which accepts a Module definition:

```typescript
TestBed.configureTestingModule({
  imports: [ /*… */ ],
  declarations: [ /*… */ ],
  providers: [ /*… */ ],
});
```

In a unit test, add those parts to the Module that are strictly necessary: the code under test, mandatory dependencies and fakes. For example, when writing a unit test for `CounterComponent`, we need to declare that Component class. Since the Component does not have dependencies, does not render other Components, Directives or Pipes, we are done.

```typescript
TestBed.configureTestingModule({
  declarations: [CounterComponent],
});
```

Our Component under test is now part of a Module. We are ready to render it, right? Not yet. First we need to compile all declared Components, Directives and Pipes:

```typescript
TestBed.compileComponents();
```

This instructs the Angular compiler to translate the template files into JavaScript code.

Since `configureTestingModule()` returns the `TestBed` class again, we can chain those two calls:

```typescript
TestBed
  .configureTestingModule({
  declarations: [CounterComponent],
  })
  .compileComponents();
```

You will see this pattern in most Angular tests that rely on the `TestBed`.

### Rendering the Component

Now we have a fully-configured testing Module with compiled components. Finally, we can render the Component under test using `createComponent()`:

```typescript
const fixture = TestBed.createComponent(CounterComponent);
```

`createComponent()` returns a `ComponentFixture`, essentially a wrapper around the Component with useful testing tools. We will learn more about the `ComponentFixture` later.

`createComponent()` renders the Component into a root element in the HTML DOM. Alas, something is missing. The Component is not fully rendered. All the static HTML is present, but the dynamic HTML is missing. The template bindings, like `{% raw %}{{ count }}{% endraw %}` in the example, are not evaluated.

In our testing environment, there is no automatic change detection. Even with the default change detection strategy, a Component is not automatically rendered and re-rendered on updates. In testing code, we have to trigger the change detection manually. This might be a nuisance, but it is actually a feature. It allows us to test asynchronous behavior in a synchronous manner, which is much simpler.

So the last thing we need to do is to trigger change detection:

```typescript
fixture.detectChanges();
```

### TestBed and Jasmine

Now the code for rendering a component using the `TestBed` is complete. Let us wrap the code in a Jasmine test suite.

```typescript
describe('CounterComponent', () => {
  let fixture: ComponentFixture<CounterComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CounterComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(CounterComponent);
    fixture.detectChanges();
  });

  it('…', () => {
    /* … */
  });
});
```

Using `describe`, we define a test suite for the `CounterComponent`. Inside, there are two `beforeEach` blocks. The first `beforeEach` block configures the `TestBed`. The second renders the component.

You might wonder why the function in the `beforeEach` block is marked as an `async` function. It is because `compileComponents` is an asynchronous operation. To compile the Components, Angular needs to fetch external the template files referenced by `templateUrl`.

If you are using the Angular CLI, which is most likely, the template files are already included in the test bundle. So they are available instantly. If you are not using the CLI, the files have to be loaded asynchronously. This is an implementation detail that might change in the future. The safe way is wait for `compileComponents` to complete.

Per default, Jasmine expects that your testing code is synchronous. The functions you pass to `it` but also `beforeEach`, `beforeAll`, `afterEach`, `afterAll` need to finish in a certain amount of time, also known as timeout. Jasmine also supports asynchronous specs. If you pass an `async` function, Jasmine waits for it to finish.

Now we have built the scaffold for our test using the `TestBed`, we need to write the first spec. `createComponent` returns a fixture, an instance of `ComponentFixture`. What is the fixture and what does it provide?

### ComponentFixture and DebugElement

The term fixture is borrowed from real-world testing of mechanical parts or electronic devices. A fixture is a standardized frame into which the test object is mounted. The fixture holds the device under test and connects to electrical contacts so measurements can be taken.

In the context of Angular, the `ComponentFixture` holds the component and provides a convenient interface to both the Component instance and the rendered DOM.

The fixture references the Component instance via the `componentInstance` property. In our example, it contains a `CounterComponent` instance.

```typescript
const component = fixture.componentInstance;
```

The Component instance is mainly used to set Inputs and subscribe to Outputs, for example:

```typescript
// This is a ComponentFixture<CounterComponent>
const component = fixture.componentInstance;
// Set Input
component.startCount = 10;
// Subscribe to Output
component.countChange.subscribe((count) => {
  /* … */
});
```

More on testing Inputs and Outputs later.

For accessing elements in the DOM, Angular has another abstraction: The `DebugElement` wraps the native DOM elements. The fixture’s `debugElement` property returns the host element of the component. For the `CounterComponent`, this is the `app-counter` element.

```typescript
const { debugElement } = fixture;
```

The `DebugElement` offers handy properties like `properties`, `attributes`, `classes` and `styles` to examine the node itself. The properties `parent`, `children` and `childNodes` help navigating in the DOM tree. They return `DebugElement`s as well.

Often it is necessary to unwrap the `DebugElement` to access the native DOM element inside. Every `DebugElement` has a `nativeElement` property:

```typescript
const { debugElement } = fixture;
const { nativeElement } = debugElement;
console.log(nativeElement.tagName);
console.log(nativeElement.textContent);
console.log(nativeElement.innerHTML);
```

`nativeElement` is typed as `any` because Angular does not know the exact type of the wrapped DOM element. Most of the time, it is a subclass of [`HTMLElement`](https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement). For example, a `button` element is represented as [`HTMLButtonElement`](https://developer.mozilla.org/en-US/docs/Web/API/) in the DOM. When you use `nativeElement`, you need to learn about the DOM interface of the specific element.

<div class="book-sources" markdown="1">
- [Angular reference: ComponentFixture](https://angular.io/api/core/testing/ComponentFixture)
- [Angular reference: DebugElement](https://angular.io/api/core/DebugElement)
</div>

### Writing the first Component spec

We have compiled a test suite that renders the `CounterComponent`. We have met Angular’s primary testing abstractions: `TestBed`, `ComponentFixture` and `DebugElement`.

Now let us roll up our sleeves and write the first spec! The main feature of our little counter is the ability to increment the count. Hence the spec:

```typescript
it('increments the count', () => {
  /* … */
});
```

The **Arrange, Act and Assert** structure helps us to structure the spec. We have already covered the _Arrange_ phase in the `beforeEach` blocks that render the Component. In the _Act_ phase, we click on the increment button. In the _Assert_ phase, we check that the displayed count has incremented.

```typescript
it('increments the count', () => {
  // Act: Click on the increment button
  // Assert: Expect that the displayed count now reads “1”.
});
```

To click on the increment button, two actions are necessary:

1. Find the increment button element in the DOM.
2. Fire a click event on it.

Let us learn about finding elements in the DOM first.

### Querying the DOM with test ids

Every `DebugElement` features the methods `query` and `queryAll` for finding descendant elements (children, grandchildren etc.). `query` returns the first descendant element that meets a condition while `queryAll` returns an array of all matching elements. Both methods expect a predicate, that is a function judging every element and returning `true` or `false`.

Angular ships with predefined predicate functions query the DOM using familiar CSS selectors. For this purpose, pass `By.css('…')` with a CSS selector to `query` and `queryAll`.

```typescript
const { debugElement } = fixture;
// Find the first h1 element
const h1 = debugElement.query(By.css('h1'));
// Find all elements with the class .user
const userElements = debugElement.query(By.css('.user'));
```

The return value of `query` is a `DebugElement` again, those of `queryAll` is an array of `DebugElement`s (`DebugElement[]` in TypeScript notation).

In the example above, we have used a type selector (`h1`) and a class selector (`.user`) to find elements in the DOM. For everyone familiar with CSS, this is familiar as well. While these selectors are fine when styling Components, using them in a test needs to be challenged.

Type and class selectors introduce a tight coupling between the test and the template. HTML elements are picked for semantic reasons and classes are picked mostly for visual styling. Both change frequently when the Component template is refactored. Should the test fail if the element type or class changes?

Sometimes the element type or the class are crucial for the feature under test. But most of the time, they are not relevant for the feature. Then, the test should better find the element by a feature that never changes and that bears no additional meaning: test ids.

A **test id** is an identifier given to an element just for the purpose of finding it in a test. The test will still find the element if unrelated features change.

The preferred way to mark an HTML element is a [data attribute](https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes). In contrast to element types, `class` or `id` attributes, data attributes do not come with any predefined meaning. Data attributes never clash with each other.

For the purpose of this guide, we use the **`data-testid`** attribute. For example, we mark the increment button in the `CounterComponent` with `data-testid="increment-button"`:

```html
<button (click)="increment()" data-testid="increment-button">+</button>
```

In the test, we use the corresponding attribute selector:

```typescript
const incrementButton = debugElement.query(
  By.css('[data-testid="increment-button"]')
);
```

There is a nuanced discussion around the best way to find elements during testing. Certainly, there are several valid and elaborate approaches. This guide will only present one possible approach that is simple and approachable.

The Angular testing tools are neutral when it comes to DOM querying: They tolerate different approaches and do not recommend a specific solution. After consideration, you should opt for way, document it as a [testing convention](#testing-conventions) and apply it consistently across all tests.

<div class="book-sources" markdown="1">
- [Angular reference: By.css](https://angular.io/api/platform-browser/By)
</div>

### Triggering event handlers

Now that we have marked and got hold of the increment button, we need to click on it.

It is a common task in tests to simulate user input like clicking, typing in text, moving pointers and pressing keys. From an Angular perspective, user input causes DOM events. The Component template registers event handlers using the schema `(event)="handler($event)"`. In the test, we need to simulate an event to call these handlers.

`DebugElement` has a useful method for firing events: `triggerEventHandler`. This method calls all event handlers for a given event type (like `click`). As a second parameter, it expects a fake event object that is passed to the handlers:

```typescript
incrementButton.triggerEventHandler('click', {
  /* … Event properties … */
});
```

This example fires a `click` event on the increment button. Since the template contains `(click)="increment()"`, the `increment` method of `CounterComponent` will be called.

The `increment` method does not access the event object. The call is simply `increment()`, not `increment($event)`. Therefore, we do not need to pass a fake event object, we can simply pass `null`:

```typescript
incrementButton.triggerEventHandler('click', null);
```

It is worth noting that `triggerEventHandler` does not dispatch a synthetic DOM event. The effect stays on the `DebugElement` abstraction level and does not touch the native DOM.

This is fine as long as the event handler is registered on the element itself. If the event handler is registered on a parent and relies on event bubbling, you need to call `triggerEventHandler` directly on that parent. `triggerEventHandler` does not simulate event bubbling or any other effect a real event might have.

### Expecting text output

We have completed the _Act_ phase in which the test clicks on the increment button. In the _Assert_ phase, we need to expect that the displayed count changes from “0” to “1”.

In the template, the count is rendered into a `strong` element:

```html
{% raw %}<strong>{{ count }}</strong>{% endraw %}
```

In our test, we need to find this element and read its text content. For this purpose, we add a test id:

```html
{% raw %}<strong data-testid="count">{{ count }}</strong>{% endraw %}
```

We can now find the element easily:

```typescript
const countOutput = debugElement.query(
  By.css('[data-testid="count"]')
);
```

The next step is to read the element’s content. In the DOM, the count is a text node that is a child of `strong`. Unfortunately, the `DebugElement` does not have a method or property for reading the text content. We need to access the native DOM element which has a convenient `textContent` property.

```typescript
countOutput.nativeElement.textContent
```

Finally, we expect that this string is `"1"` using Jasmine’s `expect()`:

```typescript
expect(countOutput.nativeElement.textContent).toBe("1");
```

The complete `counter.component.spec.ts` now looks like this:

```typescript
/* Incomplete! */
describe('CounterComponent', () => {
  let fixture: ComponentFixture<CounterComponent>;
  let debugElement: DebugElement;

  // Arrange
  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CounterComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(CounterComponent);
    fixture.detectChanges();
    debugElement = fixture.debugElement;
  });

  it('increments the count', () => {
    // Act
    const incrementButton = debugElement.query(
      By.css('[data-testid="increment-button"]')
    );
    incrementButton.triggerEventHandler('click', null);

    // Assert
    const countOutput = debugElement.query(
      By.css('[data-testid="count"]')
    );
    expect(countOutput.nativeElement.textContent).toBe("1");
  });
});
```

When we run that suite, the spec fails:

```
CounterComponent increments the count FAILED
  Error: Expected '0' to be '1'.
```

What is wrong here? Is the implementation faulty? No, the test just missed something important. We have mentioned that in the testing environment, Angular does not automatically detect changes and does not update the DOM. Clicking the increment button changes the `count` property of the Component instance. To update the template binding `{% raw %}{{ count }}{% endraw %}`, we need to trigger the change detection manually.

```typescript
fixture.detectChanges();
```

The full test suite now looks like this:

```typescript
describe('CounterComponent', () => {
  let fixture: ComponentFixture<CounterComponent>;
  let debugElement: DebugElement;

  // Arrange
  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CounterComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(CounterComponent);
    fixture.detectChanges();
    debugElement = fixture.debugElement;
  });

  it('increments the count', () => {
    // Act
    const incrementButton = debugElement.query(
      By.css('[data-testid="increment-button"]')
    );
    incrementButton.triggerEventHandler('click', null);
    // Re-render the Component
    fixture.detectChanges();

    // Assert
    const countOutput = debugElement.query(
      By.css('[data-testid="count"]')
    );
    expect(countOutput.nativeElement.textContent).toBe("1");
  });
});
```

Congratulations! We have written our first Component test. It is not complete yet, but it already features a typical workflow. We will make small improvements to the existing code with each spec we add.

### Testing helpers

The next `CounterComponent` feature we need to test is the decrement button. It is very similar to the increment button, so the spec looks almost the same.

First, we add a test id to the decrement button:

```html
<button (click)="decrement()" data-testid="decrement-button">-</button>
```

Then we write the spec:

```typescript
it('increments the count', () => {
  // Act
  const decrementButton = debugElement.query(
    By.css('[data-testid="decrement-button"]')
  );
  decrementButton.triggerEventHandler('click', null);
  // Re-render the Component
  fixture.detectChanges();

  // Assert
  const countOutput = debugElement.query(
    By.css('[data-testid="count"]')
  );
  expect(countOutput.nativeElement.textContent).toBe('-1');
});
```

There is nothing new here, only the test id, the variable names and the expected output changed.

Now we have two specs that are almost identical. The code is repetitive and the signal-to-noise ratio is low, meaning there is much code that does little. Let us identify the patterns repeated here:

1. Finding an element by test id
2. Clicking on an element (found by test id)
3. Expecting a given text content on an element (found by test id)

These tasks are highly generic and they will appear in almost every Component spec. It is worth writing testing helpers for them.

A **testing helper** is a piece of code that makes writing tests easier. It makes test code more concise and more meaningful. Since a spec should describe the implementation, a readable spec is better than an obscure, convoluted one.

Your testing helpers should cast your [testing conventions](#testing-conventions) into code. They not only improve the individual test, but make sure all tests use the same patterns and work the same.

A testing helper can be a simple function, but it can also be an abstraction class or a Jasmine extension. For the start, we extract common tasks into plain functions.

First, let us write a helper for finding an element by test id. We have used this pattern multiple times:

```typescript
const xyzElement = fixture.debugElement.query(
  By.css('[data-testid="xyz"]')
);
```

We move this code into a reusable function:

```typescript
function findEl<T>(
  fixture: ComponentFixture<T>,
  testId: string
): DebugElement {
  return fixture.debugElement.query(
    By.css(`[data-testid="${testId}"]`)
  );
}
```

This function is self-contained. The Component fixture needs to be passed in explicitly. Since `ComponentFixture<T>` requires a type parameter – the wrapped Component type –, `findEl` also has a type parameter called `T`. TypeScript will infer the Component type automatically when you pass a `ComponentFixture`.

Second, we write a testing helper that clicks on an element with a given test id. This helper builds on `findEl`.

```typescript
export function click<T>(fixture: ComponentFixture<T>, testId: string): void {
  const element = findEl(fixture, testId);
  const event = makeClickEvent(element.nativeElement);
  element.triggerEventHandler('click', event);
}
```

To create a fake click event object, `click` calls another function, `makeClickEvent`.

```typescript
export function makeClickEvent(target: EventTarget): Partial<MouseEvent> {
  return {
    preventDefault(): void {},
    stopPropagation(): void {},
    stopImmediatePropagation(): void {},
    type: 'click',
    target,
    currentTarget: target,
    bubbles: true,
    cancelable: true,
  };
}
```

This function returns on partial [MouseEvent](https://developer.mozilla.org/en-US/docs/Web/API/MouseEvent) fake object with the most important methods of properties of real click events. It is suitable for clicks on buttons, links etc. where the pointer position, the pressed mouse button and modifier keys do not matter.

The `click` testing helper can be used on every element that has a `(click)="…"` event handler. For accessibility, make sure the element can be focussed and activated. This is already the case for buttons (`button` element) and links (`a` elements).

Historically, the `click` event was specific to mouse input. Today, it is still triggered by a mouse click, but it transformed into a generic “activate” event. It is also triggered by touch input (“tap”), keyboard input or voice input.

So in your Component, you do not need to listen for touch or keyboard events separately. In the test, a generic `click` event usually suffices.

Third, we write a testing helper that expects a given text content on an element with a given test id.

```typescript
export function expectText<T>(
  fixture: ComponentFixture<T>,
  testId: string,
  text: string,
): void {
  const element = findEl(fixture, testId);
  const actualText = element.nativeElement.textContent;
  expect(actualText).toBe(text);
}
```

Again, this is a simple implementation that will be improved later.

Using these helpers, we are going to rewrite our spec:

```typescript
it('increments the count', () => {
  // Act
  click(fixture, 'decrement-button');
  // Re-render the Component
  fixture.detectChanges();

  // Assert
  expectText(fixture, 'count', '-1');
});
```

That is much better to read and less to write! You can tell what the spec is doing at first glance.

### Filling out forms

We have tested the increment and decrement button successfully. The remaining user-facing feature we need to test is the reset feature.

In the user interface, there is a reset input field and a reset button. The user enters a new number into to field, then clicks on the reset button. The Component should reset the count to the user-provided number.

We already know how to click a button, but how do we fill out a form field? Unfortunately, Angular’s testing tools do not provide a solution for filling out forms easily.

The answer depends on the field type and value. The generic answer is: Find the native DOM element and set the `value` property to the new value.

```typescript
const resetInput = debugElement.query(
  By.css('[data-testid="reset-input"]')
);
resetInput.nativeElement.value = '123';
```

With our testing helper:

```typescript
const resetInputEl = findEl(fixture, 'reset-input').nativeElement;
resetInputEl.value = '123';
```

This fills in the value programmatically.

In `CounterComponent`’s template, the reset input has a _template reference variable_, `#resetInput`:

```html
<input type="number" #resetInput data-testid="reset-input" />
<button (click)="reset(resetInput.value)" data-testid="reset-button">
  Reset
</button>
```

The click handler uses `resetInput` to access the `input` element, reads the `value` and passes it to the `reset` method.

The example already works because the form is very simple. Setting a field’s `value` is not a full simulation of user input and will not work with Template-driven or Reactive Forms yet.

Angular forms cannot observe `value` changes directly. Instead Angular listens for an `input` event that the browser fires when a field value changes. For compatibility with Template-driven and Reactive Forms, we need to dispatch a fake `input` event.

DOM elements have a `dispatchEvent` method for this purpose. In newer browsers, we can create a fake (so-called synthetic) `input` event with `new Event('input')`.

```typescript
const resetInputEl = findEl(fixture, 'reset-input').nativeElement;
resetInputEl.value = '123';
resetInputEl.dispatchEvent(new Event('input'));
```

If you need to run your tests in legacy Internet Explorer, a bit more code is necessary. Internet Explorer does not support `new Event('…')`, but the `document.createEvent` method:

```typescript
const event = document.createEvent('Event');
event.initEvent('input', true, false);
resetInputEl.dispatchEvent(event);
```

The full spec for the reset feature then looks like this:

```typescript
it('resets the count', () => {
  const newCount = '123';

  // Act
  const resetInputEl = findEl(fixture, 'reset-input').nativeElement;
  // Set field value
  resetInputEl.value = newCount;
  // Dispatch input event
  const event = document.createEvent('Event');
  event.initEvent('input', true, false);
  resetInputEl.dispatchEvent(event);

  // Click on reset button
  click(fixture, 'reset-button');
  // Re-render the Component
  fixture.detectChanges();

  // Assert
  expectText(fixture, 'count', newCount);
});
```

Filling out forms is a common task in tests, so it makes sense to extract the code and put it into a helper. The helper function takes a test id and a string value. It finds the corresponding element, sets the `value` and dispatches an `input` event.

```typescript
export function setFieldValue<T>(
  fixture: ComponentFixture<T>,
  testId: string,
  value: string,
): void {
  const element = findEl(fixture, testId).nativeElement;
  element.value = value;
  // Dispatch a fake input event so Angular form bindings
  // take notice of the change.
  const event = document.createEvent('Event');
  event.initEvent('input', true, false);
  element.dispatchEvent(event);
}
```

Using the newly created `setFieldValue` helper, we can simplify the spec:

```typescript
it('resets the count', () => {
  const newCount = '123';

  // Act
  setFieldValue(fixture, 'reset-input', newCount);
  click(fixture, 'reset-button');
  fixture.detectChanges();

  // Assert
  expectText(fixture, 'count', newCount);
});
```

That is it! While the reset feature is simple, this is how to test most form logic.

### Testing Inputs

`CounterComponent` has an Input `startCount` that sets the initial count. We need to test that the counter reacts to the Input properly. For example, if we set `startCount` to `123`, the rendered count should be `123` as well. If the Input is empty, the rendered count should be `0`, the default value.

Setting an Input during testing is rather easy: An Input is a special property of the Component instance. We can set this property in the _Arrange_ phase.

```typescript
const component = fixture.componentInstance;
component.startCount = 10;
```

It is a good practice not to change an Input value within a Component. An Input property should always reflect the data passed in by the parent Component. That is why `CounterComponent` has a public Input named `startCount` as well as an internal property named `count`. When the user clicks the increment or decrement buttons, `count` is changed, but `startCount` remains unchanged.

Whenever the `startCount` Input changes, `count` needs to be set to `startCount`. The safe place to do that is the `ngOnChanges` lifecycle function:

```typescript
public ngOnChanges(): void {
  this.count = this.startCount;
}
```

`ngOnChanges` is called whenever a “data-bound property” changes, including Inputs and Outputs.

Let us write a test for the `startCount` Input. We set the Input in the `beforeEach` block, before calling `detectChanges`. The spec `it`self checks that the correct count is rendered.

```typescript
/* Incomplete! */
beforeEach(() => {
  /* … */
  // Set the Input
  component.startCount = startCount;
  fixture.detectChanges();
});

it('shows the start count', () => {
  expectText(fixture, 'count', String(count));
});
```

When we run this spec, we find that it fails:

```
CounterComponent > shows the start count
  Expected '0' to be '123'.
```

What is wrong here? Did we forget to call `detectChanges` again? No, but we forgot to call `ngOnChanges`! In the testing environment, `ngOnChanges` is not called automatically. We have to call it manually after setting the Input.

Here is the full corrected example:

```typescript
describe('CounterComponent', () => {
  let component: CounterComponent;
  let fixture: ComponentFixture<CounterComponent>;

  const startCount = 123;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CounterComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(CounterComponent);
    component = fixture.componentInstance;
    component.startCount = startCount;
    // Call ngOnChanges, then re-render
    component.ngOnChanges();
    fixture.detectChanges();
  });

  /* … */

  it('shows the start count', () => {
    expectText(fixture, 'count', String(startCount));
  });
});
```

The `CounterComponent` expects a `number` Input and renders it into the DOM. When reading text from the DOM, we always deal with strings. What is why we pass in a number `123` but expect to find the string `'123'`.

In addition to primitive values, Components usually expect complex objects, arrays or even Observables. Sometimes they process the Input values before displaying them. Testing this behavior takes more effort. The test needs to define meaningful fake data first. Setting the Input properties is straight-forward. The Assert phase get more complex because the Input values are not directly rendered.

TODO

### Testing Outputs

While Inputs pass data from parent to child, Outputs send data from child to parent. In combination, a Component can perform a specific operation just with the required data. For example, a Component may render a form so the user can edit or review the data. Once completed, the Component emits the data as an Output.

Outputs are not a user-facing feature, but a vital part of the public Component API. Technically, Output are a Component instance properties. A unit test must inspect the Outputs thoroughly to proof that the Component plays well with other Components.

The `CounterComponent` has an output named `countChange`. Whenever the count changes, the `countChange` Output emits the new value.

```typescript
export class CounterComponent implements OnChanges {
  /* … */
  @Output()
  public countChange = new EventEmitter<number>();
  /* … */
}
```

The Output’s type `EventEmitter` is a subclass of RxJS `Subject`, which is itself extends RxJS `Observable`. The Component uses the `emit` method to publish new values. The parent Component uses the `subscribe` method to listen for emitted values. In the testing environment, we will do the same.

Let us write a spec for the `countChange` Output!

```typescript
it('emits countChange events', () => {
  /* … */
});
```

Within the spec, we access the Output via `fixture.componentInstance.countChange`. In the _Arrange_. phase, we subscribe to the `EventEmitter`.

```typescript
it('emits countChange events on increment', () => {
  // Arrange
  component.countChange.subscribe((count) => {
    /* … */
  });
});
```

We need to verify that the observer function is called with the right value when the increment button is clicked. In the _Act_ phase, we click on the button using our helper function:

```typescript
it('emits countChange events on increment', () => {
  // Arrange
  component.countChange.subscribe((count) => {
    /* … */
  });

  // Act
  click(fixture, 'increment-button');
});
```

In the _Assert_ phase, we expect that `count` has the correct value. The easiest way is to declare a variable in the spec scope. Let us name it `actualCount`. Initially, it is `undefined`. The observer function sets a value – or not, if it is never called.

```typescript
it('emits countChange events on increment', () => {
  // Arrange
  let actualCount: number | undefined;
  component.countChange.subscribe((count: number) => {
    actualCount = count;
  });

  // Act
  click(fixture, 'increment-button');

  // Assert
  expect(actualCount).toBe(1);
});
```

The click on the button emits the count and calls the observer function synchronously. That is why the next line of code can expect that `actualCount` has been changed.

You might wonder why we did not put the `expect` call in the observer function:

```typescript
/* Not recommended! */
it('emits countChange events on increment', () => {
  // Arrange
  component.countChange.subscribe((count: number) => {
    // Assert
    expect(count).toBe(1);
  });

  // Act
  click(fixture, 'increment-button');
});
```

This works as well. But if the feature under test is broken and the Output does not emit, `expect` is never called. Per default, Jasmine warns you that the spec has no expectations but treats the spec as successful. We want the spec to fail explicitly in this case, so we make sure the expectation is always run.

Now we have verified that `countChange` emits when the increment button is clicked. We also need to proof that the Output emits when using the decrement or reset features. We could do that by copying the code and adding two more specs:

```typescript
it('emits countChange events on decrement', () => {
  // Arrange
  let actualCount: number | undefined;
  component.countChange.subscribe((count: number) => {
    actualCount = count;
  });

  // Act
  click(fixture, 'decrement-button');

  // Assert
  expect(actualCount).toBe(-1);
});

it('emits countChange events on reset', () => {
  const newCount = '123';

  // Arrange
  let actualCount: number | undefined;
  component.countChange.subscribe((count: number) => {
    actualCount = count;
  });

  // Act
  setFieldValue(fixture, 'reset-input', newCount);
  click(fixture, 'reset-button');

  // Assert
  expect(actualCount).toBe(newCount);
});
```

### Repetitive Component specs

Testing the `countChange` Output with three specs works fine, but the code is highly repetitive. A testing helper could reduce the repetition. Experts disagree on whether repetitive testing code is a problem at all.

On the one hand, it is hard to grasp the essence of repetitive specs. Testing helpers form a custom language for expressing testing instructions clearly and briefly. For example, if your specs find DOM elements via test ids, a testing helper establishes the convention and hides the implementation details.

On the other hand, abstractions like helper functions make tests more complex and therefore harder to understand. A developer reading the specs needs to get familiar with the testing helpers first. After all, tests should be more readable than the implementation code.

There is a controversial debate in software development regarding “do not repeat yourself” and the value of abstractions. As Sandi Metz [famously stated](https://www.sandimetz.com/blog/2016/1/20/the-wrong-abstraction), “duplication is far cheaper than the wrong abstraction”.

This is especially true when writing specs. You should try to eliminate duplication and boilerplate code with `beforeEach`/`beforeAll`, simple helper functions and even testing libraries. But do not try to apply your optimization habits and skills to test code. A test is supposed to reproduce all relevant logical cases. Finding an proper abstraction for all these diverse, sometimes mutually exclusive cases is often futile.

Your mileage may vary on this question. For completeness, let us discuss how we could reduce the repetition in the `countChange` Output specs.

An Output is an `EventEmitter`, which is a fully-functional RxJS `Observable`. This allows us to transform the `Observable` as we please. Specifically, we can click all three buttons and then expect that the `countChange` Output has emitted three values.

```typescript
it('emits countChange events', () => {
  // Arrange
  const newCount = 123;

  // Capture all emitted values in an array
  let actualCounts: number[] | undefined;

  // Transform the Observable, then subscribe
  component.countChange.pipe(
      // Close the Observable after three values
      take(3),
      // Collect all values in an array
      toArray()
  ).subscribe((counts) => {
      actualCounts = counts;
    });

  // Act
  click(fixture, 'increment-button');
  click(fixture, 'decrement-button');
  setFieldValue(fixture, 'reset-input', String(newCount));
  click(fixture, 'reset-button');

  // Assert
  expect(actualCounts).toEqual([1, 0, newCount]);
});
```

This example requires some RxJS knowledge. We are going to encounter RxJS Observables again and again when testing Angular applications. If you do not understand the example above, that is totally fine. It is just optional way to merge three specs into one.

<div class="book-sources" markdown="1">
- [CounterComponent: test code](https://github.com/9elements/angular-workshop/blob/master/src/app/components/counter/counter.component.spec.ts)
</div>

### Black vs. white box Component testing

Component tests turn out to be most meaningful if they closely mimic how the user interacts with the Component. The tests we have written try to apply this principle. We have worked directly with the DOM to read text, click on buttons and fill out form fields because that is what the user does.

These tests are black box tests. We have already talked about [black box vs. white box testing](#black-box-vs-white-box-testing) in theory. Both are valid testing methods. As stated, this guide advises to use black box testing first and foremost.

A common technique to enforce black box testing is to mark internal methods as `private` so they cannot be called in the test. The test should only inspect the documented, public API.

In Angular Components, the difference between external and internal properties and methods does not coincide with their TypeScript visibility (`public` vs. `private`). Properties and methods need to be `public` so that the template is able to access them. This makes sense for Input and Output properties. They need to be read and written from the outside, from your test. However, internal properties and methods exist that are `public` only for the template.

For example, the `CounterComponent` has an Input `startCount` and an Output `countChange`. Both are `public`:

```typescript
@Input()
public startCount = 0;

@Output()
public countChange = new EventEmitter<number>();
```

They form the public API. However, there are several more properties and methods that are `public`:

```typescript
public count = 0;
public increment(): void { /* … */ }
public decrement(): void { /* … */ }
public reset(newCount: string): void { /* … */ }
```

These properties and methods are internal, they are used only within the Component. Yet they need to be `public` so the template may access them. Angular compiles templates into TypeScript code, and TypeScript ensures that the template code only accesses public properties and methods.

Many Angular testing tutorials conduct Component white box tests. How does such a test look like? In our `CounterComponent` black box test, we increment the count by simulating a click on the “+” button. A white box test would call the `increment` method directly:

```typescript
/* Not recommended! */
describe('CounterComponent', () => {
  /* … */
  it('increments the count', () => {
    component.increment();
    fixture.detectChanged();
    expectText(fixture, 'count', '1');
  });
});
```

This white box test reaches into the Component to access an internal, yet `public` method. This is not wrong and sometimes valuable, but it is mostly misused. As we have learned, a Component test is meaningful if it interacts with the Component using Inputs, Outputs and the rendered DOM. Calling internal methods or accessing internal properties runs the risk of failing to cover important behavior like template logic and event handling.

The spec above deals with the increment feature. It calls the `increment` method, but does not test the corresponding template code, the increment button:

```html
<button (click)="increment()" data-testid="increment-button">+</button>
```

If we remove the increment button from the template entirely, the feature is obviously broken. But the white box test does not fail.

When applied to Angular Components, black box testing is more intuitive and easier for beginners. When writing a black box test, ask what the Component does for the user and for the parent Components. Then imitate the real usage in your test.

A white box test that does not examine the Component from the DOM perspective runs the risk of missing crucial Component behavior. It gives the illusion that all code is tested.

That being said, white box testing is viable advanced technique. If you are a testing expert, you can write efficient Component specs this way that still test out all features and cover all code.

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

## Testing Components with children

So far we have tested an independent Component that renders plain HTML elements, but no child Components. Such low-level Components are the workhorses of an Angular application. They directly render what the user sees and interacts with. They are often highly generic and reusable. They are controlled primarily through Inputs and report back using Outputs. They have little to none dependencies. They are easy to reason about and therefore easy to test. The preferred way of testing them is a unit test.

These Components are called _presentational_ Components since they directly present a part of the user interface using HTML and CSS. Presentational Components need to be combined and wired to form a working user interface. This is the duty of _container_ Components. These high-level Components bring multiple low-level Components together. They pull data from different sources, like Services and state managers, and distribute it to their children.

Container Components have several types of dependencies. They depend on the nested child Components, but also injectables. These are classes, functions, objects etc. provided via dependency injection, like Services for example. These dependencies make testing container Components complicated.

There are two fundamental ways to test Components with children:

- A unit test using **shallow rendering**. The child Components are not rendered.
- An integration test using **deep rendering**. The child Components are rendered.

Again, both are valid approaches we are going to discuss.

### Shallow vs. deep rendering

In the counter example application, the [`HomeComponent`](https://github.com/9elements/angular-workshop/blob/master/src/app/components/home/home.component.ts) contains `CounterComponent`s, `ServiceCounterComponent`s and `NgRxCounterComponent`s. From the [template](https://github.com/9elements/angular-workshop/blob/master/src/app/components/home/home.component.html):

```html
<app-counter
  [startCount]="5"
  (countChange)="handleCountChange($event)"
></app-counter>
<!-- … -->
<app-service-counter></app-service-counter>
<!-- … -->
<app-ngrx-counter></app-ngrx-counter>
```

These custom `app-*` elements end up in the DOM tree. They become the host elements of the child Components.

A **unit test of `HomeComponent`** does not render these children. The host elements are rendered, but they remain empty. You might wonder, what is the point of such a test? What does it do after all?

From `HomeComponent`’s perspective, the inner workings of its children are not relevant. We need to test that the template contains the children. Also, we need to check that `HomeComponent` and its children are wired up correctly using Inputs and Outputs.

In particular, the `HomeComponent` unit test checks that an `app-counter` element is present, that the `startCount` Input is passed correctly and that `HomeComponent` handles the `countChange` event. The same is done for the other children, `app-service-counter` and `app-service-counter`.

An **integration test of `HomeComponent`** renders the child Components. The host elements are filled with the output of `CounterComponent`, `ServiceCounterComponent` and `NgRxCounterComponent`, respectively. This integration test is actually testing all four Components. We need to decide in what level of detail we test the nested Components. If separate unit tests for them exist, we do not need to click on each respective increment button. After all, the integration test needs to prove that the four Component work together, without going into the child Component details.

Let us write a unit test for `HomeComponent` first. The setup looks familiar to the `CounterComponent` test suite. We are using `TestBed` to configure a testing Module and to render the Component under test.

```typescript
describe('HomeComponent', () => {
  let fixture: ComponentFixture<HomeComponent>;
  let component: HomeComponent;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HomeComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(HomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create the app', () => {
    const app = fixture.debugElement.componentInstance;
    expect(app).toBeTruthy();
  });
});
```

This suite has one spec that acts as a _smoke test_. It checks the presence of a Component instance. It does assert anything specific about the Component behavior yet. It merely proves that the Component renders without errors. If this spec fails, you know that something is wrong with the testing setup.

From Angular 9 on, the spec passes but produces a bunch of warnings on the console:

<p>
  <code>
    app-counter' is not a known element:<br>
    1. If 'app-counter' is an Angular component, then verify that it is part of this module.<br>
    2. If 'app-counter' is a Web Component then add 'CUSTOM_ELEMENTS_SCHEMA' to the '@NgModule.schemas' of this component to suppress this message.
  </code>
</p>

We get the same warning regarding `app-service-counter` and `app-ngrx-counter`. Another warning reads:

`Can't bind to 'startCount' since it isn't a known property of 'app-counter'.`

What do these warnings mean? Angular does not recognize the custom elements `app-counter`, `app-service-counter` and `app-ngrx-counter` because we have not declared Components that match these selectors. The warning points at two solutions:

1. Either add the child Components to the testing Module. **This turns the test into an integration test.**
2. Or tell Angular to ignore the unknown elements. **This turns the test into a unit test.**

Since we plan to write a unit test, we opt for the second.

When configuring the testing Module, we can specify `schemas` to tell Angular how to deal with elements which are not handled by Directives or Components.

The warning suggests `CUSTOM_ELEMENTS_SCHEMA`, but `app-counter` etc. are not Web Components. We want Angular to simply ignore the elements. Therefore we use the `NO_ERRORS_SCHEMA`, “a schema that allows any property on any element”.

```typescript
TestBed.configureTestingModule({
  declarations: [HomeComponent],
  schemas: [NO_ERRORS_SCHEMA],
}).compileComponents();
```

With this addition, our smoke test passes. Now let us write a more meaningful spec! We start with the nested `app-counter`. This is the code we need to cover:

```html
<app-counter
  [startCount]="5"
  (countChange)="handleCountChange($event)"
></app-counter>
```

First of all, we need to test the presence of `app-counter`, the independent counter. We create a new spec for that purpose:

```typescript
it('renders an independent counter', () => {
  /* … */
});
```

To verify that an `app-counter` element exists in the DOM, we use the familiar `query` method of the topmost `DebugElement`.

```typescript
const { debugElement } = fixture;
const counter = debugElement.query(By.css('app-counter'));
```

This code uses the `app-counter` type selector to find the element. You might wonder, why not use a test id and the `findEl` helper?

In this exceptional case, we need to enforce the element `app-counter` because that is `CounterComponent`’s selector. Using a test id makes the element type arbitrary. This makes tests more robust in other case. When testing the existence of child Components though, it is the element type that invokes the child.

Our spec is almost ready. An expectation is missing. The query method returns a `DebugElement` or `null`. We simply assert that the return value is truthy:

```typescript
it('renders an independent counter', () => {
  const { debugElement } = fixture;
  const counter = debugElement.query(By.css('app-counter'));
  expect(counter).toBeTruthy();
});
```

Finding a child Component is a common task. Such repeating patterns are good candidates for testing helpers. Not because they consist of much code, but because the code has a specific meaning we would like to convey. `debugElement.query(By.css('app-counter'))` is not particularly descriptive. The reader has to think for a moment to realize that the code tries to find a nested Component.

So let us introduce a helper function named `findComponent`.

```typescript
export function findComponent<T>(
  fixture: ComponentFixture<T>,
  selector: string,
): DebugElement {
  return fixture.debugElement.query(By.css(selector));
}
```

Our spec now looks like this:

```typescript
it('renders an independent counter', () => {
  const counter = findComponent(fixture, 'app-counter');
  expect(counter).toBeTruthy();
});
```

The next feature we need to test is the `startCount` Input. In particular, the property binding `[startCount]="5"` in `HomeComponent`’s template. Let us create a new spec:

```typescript
it('passes a start count', () => {
  const counter = findComponent(fixture, 'app-counter');
  /* … */
  expect(el.properties.startCount).toBe(5);
});
```

How do we read the Input value? Each `DebugElement` has a `properties` object that contains DOM properties together with its values. In addition, it contains certain property bindings. (The type is `{ [key: string]: any }`).

In a unit test with shallow rendering, `properties` contains the Inputs of a child Component. First, we find `app-counter` to get the corresponding `DebugElement`. Then we check the Input value, `properties.startCount`.

```typescript
it('passes a start count', () => {
  const counter = findComponent(fixture, 'app-counter');
  expect(counter.properties.startCount).toBe(5);
});
```

That was quite easy! Last but not least, we need to test the Output.

From `HomeComponent`’s perspective, reacting to the Output is like handling an event on the `app-counter` element. The template uses the familiar `(event)="handler($event)"` syntax:

```html
<app-counter
  [startCount]="5"
  (countChange)="handleCountChange($event)"
></app-counter>
```

The `handleCountChange` method is defined in the Component class. It simply calls `console.log` to prove that the child-parent communication worked:

```typescript
export class HomeComponent {
  public handleCountChange(count: number): void {
    console.log('countChange event from CounterComponent', count);
  }
}
```

Let us add a new spec for testing the Output:

```typescript
it('listens for count changes', () => {
  /* … */
});
```

The spec needs to do two things:

1. _Act:_ Find the child Component and let the `countChange` Output emit a value.
2. _Assert:_ Check that `console.log` has been called.

As mentioned, from the parent’s viewpoint, `countChange` is simply an event. Shallow rendering means there is no `CounterComponent` instance and no `EventEmitter` named `countChange`. Angular only sees an element, `app-counter`, with an event handler, `(countChange)="handleCountChange($event)"`.

In this setup, we can simulate the Output using the well-known `triggerEventHandler` method.

```typescript
it('listens for count changes', () => {
  /* … */
  const counter = findComponent(fixture, 'app-counter');
  const count = 5;
  counter.triggerEventHandler('countChange', 5);
  /* … */
});
```

The spec finds the `app-counter` element and triggers the `countChange` event handler. The second `triggerEventHandler` parameter, `5`, is not an event object as we know from DOM events like `click`. It is a value that the Output would emit. The `countChange` Output has the type `EventEmitter<number>`, so we use the fixed number `5` for testing purposes.

Under the hood, `triggerEventHandler` runs `handleCountChange($event)` with `$event` being `5`. `handleCountChange` calls `console.log`, and that is the observable effect we need to test.

How do we verify that `console.log` has been called? We can [spy on existing object methods](#spying-on-existing-object-methods) with Jasmine’s `spyOn()`.

```typescript
spyOn(console, 'log');
```

This overwrites `console.log` with a spy for the duration of the test run. We need to set up the spy in the _Arrange_ phase, at the beginning of our spec.

```typescript
it('listens for count changes', () => {
  spyOn(console, 'log');
  const counter = findComponent(fixture, 'app-counter');
  const count = 5;
  counter.triggerEventHandler('countChange', count);
  /* … */
});
```

In the _Assert_ phase, we expect that the spy has been called with a certain text and the number the Output has emitted.

```typescript
it('listens for count changes', () => {
  spyOn(console, 'log');
  const counter = findComponent(fixture, 'app-counter');
  const count = 5;
  counter.triggerEventHandler('countChange', count);
  expect(console.log).toHaveBeenCalledWith(
    'countChange event from CounterComponent',
    count,
  );
});
```

So much for testing the `CounterComponent` child. The `HomeComponent` also renders a `ServiceCounterComponent` and an `NgRxCounterComponent` like this:

```html
<app-service-counter></app-service-counter>
<!-- … -->
<app-ngrx-counter></app-ngrx-counter>
```

Since they do not have Inputs or Outputs, we merely need to test whether they are mentioned in the template. We add two additional specs that check the presence of these `app-service-counter` and `app-ngrx-counter` elements, respectively.

```typescript
it('renders a service counter', () => {
  const serviceCounter = findComponent(fixture, 'app-service-counter');
  expect(serviceCounter).toBeTruthy();
});

it('renders a NgRx counter', () => {
  const ngrxCounter = findComponent(fixture, 'app-ngrx-counter');
  expect(ngrxCounter).toBeTruthy();
});
```

This is it! We have written a unit test with shallow rendering that proves that `HomeComponent` correctly embeds several child Components.

Note that this is one possible testing method. As always, it has pros and cons. Compared with a full integration test, there is little setup. The specs can use Angular’s `DebugElement` abstraction to test presence as well as Inputs and Outputs.

However, the unit test gives little confidence that `HomeComponent` works in production. We have instructed Angular to ignore the elements `app-counter`, `app-service-counter` and `app-ngrx-counter` instead. What if `HomeComponent` uses a wrong element name and the test copies that error? The test would pass incorrectly. We need to render the involved Components together to spot the error.

<div class="book-sources" markdown="1">
- [HomeComponent: test code](https://github.com/9elements/angular-workshop/blob/master/src/app/components/home/home.component.spec.ts)
</div>

### Faking a child Component

There is a middle ground between a naive unit test and an integration test. Instead of working with empty custom elements, we can render _fake_ child Components. These Components have the same selectors, Inputs and Outputs, but have zero dependencies and do not have to render anything. They are ideal for testing communication between parent and child Components.

Let us reduce the `CounterComponent` to an empty shell that offers the same public API:

```typescript
@Component({
  selector: 'app-counter',
  template: '',
})
class FakeCounterComponent implements Partial<CounterComponent> {
  @Input()
  public startCount = 0;

  @Output()
  public countChange = new EventEmitter<number>();
}
```

This fake Component lacks a template and any logic, but has the same selector, Input and Output.

Remember the [rules for faking dependencies](#faking-dependencies)? We need to make sure the fake resembles the original. `FakeCounterComponent implements Partial<CounterComponent>` requires the class to implement a subset of `CounterComponent`. TypeScript enforces that the given properties and methods have the same types as in the original class.

In our test suite, we may put the `FakeCounterComponent` before the `describe` block. The next step is to add the Component to the testing Module:

```typescript
TestBed.configureTestingModule({
  declarations: [HomeComponent, FakeCounterComponent],
  schemas: [NO_ERRORS_SCHEMA],
}).compileComponents();
```

When Angular encounters an `app-counter` element, it instantiates and mounts a `FakeCounterComponent`. The element stays empty since the fake template is empty as well. The `startCount` Input property is set and the parent `HomeComponent` subscribes to the `countChange` Output.

Our test suite needs to change to account for the child Component being rendered. Instead of searching for an `app-counter` element and inspecting its properties, we explicitly search for a `FakeCounterComponent` instance.

So far, we have used `DebugElement`’s `query` method to find nested elements. For example:

```typescript
const element = fixture.debugElement.query(By.css('…'));
```

Our helpers `findEl` and `findComponent` are using this pattern as well.

No we want to find a nested Component. We can use `query` together with the `By.directive()` predicate function:

```typescript
const counterEl = fixture.debugElement.query(
  By.directive(FakeCounterComponent)
);
```

`By.directive()` finds all kinds of Directives. A Component is a kind of Directive.

`query` returns a `DebugElement` or `null` in case no match was found. As we have learned, a `DebugElement` always wraps a native DOM element. When we query for `FakeCounterComponent`, we actually get a `DebugElement` wrapping the `app-counter` element – just like `By.css('app-counter')` would return.

The difference is that we can now access the rendered `FakeCounterComponent` via the `componentInstance` property:

```typescript
const counterEl = fixture.debugElement.query(
  By.directive(FakeCounterComponent)
);
const counter: CounterComponent = counterEl.componentInstance;
```

Angular does not know the type of the Component, `componentInstance` has the type `any`. So we add an explicit type annotation.

Having access to the child Component instance, we can make expectations against it. First of all, we verify the presence.

```typescript
it('renders an independent counter', () => {
  const counterEl = fixture.debugElement.query(
    By.directive(FakeCounterComponent)
  );
  const counter: CounterComponent = counterEl.componentInstance;

  expect(counter).toBeTruthy();
});
```

This is a smoke test that fails early if no instance of `FakeCounterComponent` was found. `query` would return `null` and `counterEl.componentInstance` would fail with a `TypeError: counterEl is null`.

The second spec checks the Input. An Input is a property of the Component instance, so `counter.startCount` gives us the value of the `startCount` Input.

```typescript
it('passes a start count', () => {
  const counterEl = fixture.debugElement.query(
    By.directive(FakeCounterComponent)
  );
  const counter: CounterComponent = counterEl.componentInstance;

  expect(counter.startCount).toBe(5);
});
```

The third spec checks the Output handling: If the counter emits a value, the `HomeComponent` passes it to `console.log`.

As mentioned earlier, an Output is an `EventEmitter` that is also a property of the Component instance. Previously, we have simulated an Output event using the `triggerEventHandler` abstraction. Now we can access the Output directly and call its `emit` method, just like the code in the child Component does.

```typescript
it('listens for count changes', () => {
  const counterEl = fixture.debugElement.query(
    By.directive(FakeCounterComponent)
  );
  const counter: CounterComponent = counterEl.componentInstance;

  spyOn(console, 'log');
  const count = 5;
  counter.countChange.emit(5);
  expect(console.log).toHaveBeenCalledWith(
    'countChange event from CounterComponent',
    count,
  );
});
```

We are done! Here is the `HomeComponent` test suite that vets the `CounterComponent` child. To minimize repetition and noise, we move the query part into the `beforeEach` block.

```typescript
@Component({
  selector: 'app-counter',
  template: '',
})
class FakeCounterComponent implements Partial<CounterComponent> {
  @Input()
  public startCount = 0;

  @Output()
  public countChange = new EventEmitter<number>();
}

describe('HomeComponent', () => {
  let fixture: ComponentFixture<HomeComponent>;
  let component: HomeComponent;
  let counter: FakeCounterComponent;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HomeComponent, FakeCounterComponent],
      schemas: [NO_ERRORS_SCHEMA],
    }).compileComponents();

    fixture = TestBed.createComponent(HomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();

    const counterEl = fixture.debugElement.query(
      By.directive(FakeCounterComponent)
    );
    counter = counterEl.componentInstance;
  });

  it('renders an independent counter', () => {
    expect(counter).toBeTruthy();
  });

  it('passes a start count', () => {
    expect(counter.startCount).toBe(5);
  });

  it('listens for count changes', () => {
    spyOn(console, 'log');
    const count = 5;
    counter.countChange.emit(count);
    expect(console.log).toHaveBeenCalledWith(
      'countChange event from CounterComponent',
      count,
    );
  });
});
```

TODO: findComponentInstance helper

Let us recap what we have gained with this type of testing the `HomeComponent`.

We have replaced a Component dependency with a fake that behaves the same, as far as `HomeComponent` is concerned. The fake child is rendered, but the template may be empty.

The original child Component, `CounterComponent`, is imported only to create the derived fake Component. Our test remains a fast and short unit test.

Instead of searching for an element named `app-counter`, we search for a Component instance. This is more robust. The presence of the host element is a good indicator, but it is more relevant that a Component has been rendered into this element.

Working with the Component instance is more intuitive than working with the `DebugElement` abstraction. We can read the Component class to learn about Inputs and Outputs. Basic JavaScript and Angular knowledge suffice to write specs against such an instance.

Our simple approach to faking a child Component has its flaws. We have created the fake manually. This is tedious and time-consuming, but also risky. The fake is only partly tied to the original.

For example, if the original changes its selector `app-counter`, the test should fail and remind us to adapt the template. Instead, it passes incorrectly since the Component metadata, `{ selector: 'app-counter', … }`, cannot be inherited and is therefore duplicated in the test.

We are going to address these shortcomings in the next chapter.

### Faking a child Component with ng-mocks

We have manually created a Component fake. This is an important exercise to understand how faking Components works, but it does not produce a robust, versatile fake. In this guide, we cannot discuss all necessary bits and pieces of creating airtight fake Components.

Instead, we will use a mature library: [ng-mocks](https://github.com/ike18t/ng-mocks) is a feature-rich helper for
testing Components with fake dependencies. (Remember, this guide uses the umbrella term “fake” while other articles and tools use terms like “mock” or “stub”.)

Among other things, ng-mocks helps creating fake Components to substitute children. ng-mocks’s `MockComponent` function expects the original Component and returns a fake that resembles the original. Instead of creating a `FakeCounterComponent`, we call `MockComponent(CounterComponent)` and add the fake to the testing Module.

```typescript
beforeEach(async () => {
  await TestBed.configureTestingModule({
    declarations: [HomeComponent, MockComponent(CounterComponent)],
    schemas: [NO_ERRORS_SCHEMA],
  }).compileComponents();
});
```

We can then query the rendered DOM for an instance of `CounterComponent`. The found instance is in fact a fake created by ng-mocks.
Still, we can declare the type `CounterComponent`.

```typescript
describe('HomeComponent', () => {
  let fixture: ComponentFixture<HomeComponent>;
  let component: HomeComponent;
  // Original type!
  let counter: CounterComponent;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HomeComponent, MockComponent(CounterComponent)],
      schemas: [NO_ERRORS_SCHEMA],
    }).compileComponents();

    fixture = TestBed.createComponent(HomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();

    const counterEl = fixture.debugElement.query(
      // Original class!
      By.directive(CounterComponent)
    );
    counter = counterEl.componentInstance;
  });

  /* … */
});
```

From a TypeScript viewpoint, the fake conforms to the `CounterComponent` type. TypeScript is a structural type system that checks if all type requirements are met. Every proposition that holds true for a `CounterComponent` holds true for the fake as well. The fake has all properties and methods that the original has. That is why we can safely replace the original with the fake and treat the fake the same in our test.

The full code:

```typescript
describe('HomeComponent', () => {
  let fixture: ComponentFixture<HomeComponent>;
  let component: HomeComponent;
  let counter: CounterComponent;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HomeComponent, Mock(CounterComponent)],
      schemas: [NO_ERRORS_SCHEMA],
    }).compileComponents();

    fixture = TestBed.createComponent(HomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();

    const counterEl = fixture.debugElement.query(
      By.directive(CounterComponent)
    );
    counter = counterEl.componentInstance;
  });

  it('renders an independent counter', () => {
    expect(counter).toBeTruthy();
  });

  it('passes a start count', () => {
    expect(counter.startCount).toBe(5);
  });

  it('listens for count changes', () => {
    spyOn(console, 'log');
    const count = 5;
    counter.countChange.emit(count);
    expect(console.log).toHaveBeenCalledWith(
      'countChange event from CounterComponent',
      count,
    );
  });
});
```

We have eliminated the manual `FakeCounterComponent`. We are using `MockComponent(CounterComponent)` to create the fake and the original class `CounterComponent`. The specs itself did not change.

This was only a glimpse of ng-mocks. The library not only helps with nested Components, but provides high-level helpers for setting up the Angular test environment. ng-mocks replaces the conventional setup with `TestBed.configureTestingModule` and helps faking Modules, Components, Directives, Pipes and Services.

<div class="book-sources" markdown="1">
- [ng-mocks](https://github.com/ike18t/ng-mocks)
</div>

## Testing Components depending on Services

We have successfully tested the independent `CounterComponent` as well as the container `HomeComponent`. The next Component on our list is the [ServiceCounterComponent](https://github.com/9elements/angular-workshop/tree/master/src/app/components/service-counter).

<button class="load-iframe">
See the ServiceCounterComponent in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-workshop/service-counter-component" class="responsive-iframe__iframe"></iframe>
</p>
</script>

As the name suggests, this Component depends on the `CounterService`. The counter state is not stored in the Component itself, but in the central Service. Angular’s dependency injection maintains only one app-wide instance of the Service, a so-called singleton. Therefore, multiple instances of `ServiceCounterComponent` share the same counter state. If the user increments the count with one instance, the count also changes in the other instance.

Again, there are two fundamental ways to test the Component:

- A unit test that replaces the `CounterService` dependency with a fake.
- An integration test that includes a real `CounterService`.

This guide will demonstrate both. For your Components, you need to make a decision on an individual basis. These questions may guide you: Which type of test is more beneficial, more meaningful? Which test is easier (less costly) to set up and to maintain in the long run?

### Service dependency integration test

For the `ServiceCounterComponent`, the integration test is much easier to set up than the unit test. The trivial `CounterService` has little logic and no further dependencies. It does not have side effects we need to suppress in the testing environment, like HTTP requests. It only changes its internal state.

The integration test looks almost identical to the `CounterComponent` test we have already written.

```typescript
describe('ServiceCounterComponent: integration test', () => {
  let component: ServiceCounterComponent;
  let fixture: ComponentFixture<ServiceCounterComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ServiceCounterComponent],
      providers: [CounterService],
    }).compileComponents();

    fixture = TestBed.createComponent(ServiceCounterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('shows the start count', () => {
    expectText(fixture, 'count', '0');
  });

  it('increments the count', () => {
    click(fixture, 'increment-button');
    fixture.detectChanges();
    expectText(fixture, 'count', '1');
  });

  it('decrements the count', () => {
    click(fixture, 'decrement-button');
    fixture.detectChanges();
    expectText(fixture, 'count', '-1');
  });

  it('resets the count', () => {
    const newCount = '123';
    setFieldValue(fixture, 'reset-input', newCount);
    click(fixture, 'reset-button');
    fixture.detectChanges();
    expectText(fixture, 'count', newCount);
  });
});
```

Compared to the `CounterComponent` test, there is nothing new here except for one line:

```typescript
providers: [CounterService],
```

This line adds the `CounterService` to the testing Module. Angular creates an instance of the Service and injects it into the Component under test. The test is shorter because the `ServiceCounterComponent` does not have Inputs or Outputs to test.

As the `CounterService` always starts with the count `0`, the test needs to take that for granted. Neither the Component nor the Service allow a different start count.

The integration test does not examine the Component’s inner workings. It only provides the Service but does not check how the Component and the Service interact. The Component might not talk to the Service at all.

If we want an integration test to verify that the Component stores the count in the Service, we would need a test with two `ServiceCounterComponent`s: When increasing the count using one Component, the displayed count in the other should change accordingly.

<div class="book-sources" markdown="1">
- [ServiceCounterComponent: integration test](https://github.com/9elements/angular-workshop/blob/master/src/app/components/service-counter/service-counter.component.spec.ts)
</div>

### Faking Service dependencies

Let us move on to the **unit test** for the `ServiceCounterComponent`. To tackle this challenge, we need to learn the art of faking Service dependencies.

There are several practical approaches with pros and cons. We have discussed two main [requirements on fake dependencies](#faking-dependencies):

1. Equivalence of fake and original
2. Effective faking

This guide will present one solution that implements these requirements. Note that other solutions might meet these requirements as well.

The dependency we need to fake, `CounterService`, is a simple class annotated with `@Injectable()`. This is the outer shape of `CounterService`:

```typescript
class CounterService {
  public getCount(): Observable<number> { /* … */ }
  public increment(): void { /* … */ }
  public decrement(): void { /* … */ }
  public reset(newCount: number): void { /* … */ }
  private notify(): void { /* … */ }
}
```

We need to build a fake that meets the mentioned needs.

The simplest way to create a fake is an object literal `{…}` with methods:

```typescript
const currentCount = 123;
const fakeCounterService = {
  getCount() {
    return of(currentCount);
  },
  increment() {},
  decrement() {},
  reset() {},
};
```

`getCount` returns a fixed value that saved in a constant named currentCount. We will use the constant later to check whether the Component uses the value correctly.

This fake is far from perfect, but already a viable replacement for a `CounterService` instance. It walks like the original and talks like the original. The methods are empty or return fixed data.

The fake implementation above happens to have the same shape as the original. As discussed, it is of utter importance that the fake remains up to date with the original.

The equivalence is not yet enforced by TypeScript. We want TypeScript to check whether the fake properly replicates the original. The first attempt would be add a type declaration:

<div class="erroneous" markdown="1">
```typescript
// Error!
const fakeCounterService: CounterService = {
  getCount() {
    return of(currentCount);
  },
  increment() {},
  decrement() {},
  reset() {},
};
```
</div>

Unfortunately, this does not work. TypeScript complains that private methods and properties are missing:

`Type '{ getCount(): Observable<number>; increment(): void; decrement(): void; reset(): void; }' is missing the following properties from type 'CounterService': count, subject, notify`

That is correct. But we cannot add a private members to an object literal, nor should we.

Luckily, we can use a TypeScript trick to fix this problem. Using [Pick](https://www.typescriptlang.org/docs/handbook/utility-types.html#picktk) and [keyof](https://www.typescriptlang.org/docs/handbook/advanced-types.html#index-types), we create a derived type that only contains the public members:

```typescript
const fakeCounterService:
  Pick<CounterService, keyof CounterService> = {
  getCount() {
    return of(currentCount);
  },
  increment() {},
  decrement() {},
  reset() {},
};
```

This type declaration ensures that the fake looks like the original. It prevents the fake to get out of sync with the original.

When the original `CounterService` changes its public API, the dependent `ServiceCounterComponent` needs to be adapted. Likewise, `fakeCounterService`, the fake implementation of `CounterService`, needs to reflect the change. The type declaration reminds you to update the fake.

`ServiceCounterComponent` calls all existing public `CounterService` methods, so we have added them to the fake. If the code under test does not use the full API, the fake does not need to replicate the full API either. Only declarer those methods and properties the code under test actually uses.

For example, if the code under test only calls `getCount`, just provide this method. Make sure to add a type declaration that picks the method from the original type:

```typescript
const fakeCounterService: Pick<CounterService, 'getCount'> = {
  getCount() {
    return of(currentCount);
  },
};
```

`Pick` and other [mapped types](https://www.typescriptlang.org/docs/handbook/advanced-types.html#mapped-types) help to bind the fake to the original type in a way that TypeScript can check the equivalence.

A plain object literal with methods is an easy way to provide a fake instance. We should not forgot that the spec needs to verify that the methods have been called with the right parameters.

Jasmine spies are the right tool for this job. We can fill the fake object with Jasmine spies. A first approach could look like this:

```typescript
const fakeCounterService:
  Pick<CounterService, keyof CounterService> = {
  getCount:
    jasmine.createSpy('getCount').and.returnValue(of(currentCount)),
  increment: jasmine.createSpy('increment'),
  decrement: jasmine.createSpy('decrement'),
  reset: jasmine.createSpy('reset'),
};
```

This is fine, but overly verbose. Jasmine provides a handy helper function for creating an object with multiple spy methods, `createSpyObj()`. It expects a descriptive name and a list of methods:

```typescript
const fakeCounterService =
  jasmine.createSpyObj<CounterService>('CounterService', {
    getCount: of(currentCount),
    increment: undefined,
    decrement: undefined,
    reset: undefined,
  });
```

The code above creates an object with four methods, all of them being spies. They return the given values: `getCount` returns an `Observable<number>`. The other methods return `undefined`.

`createSpyObj` accepts a [type variable](https://www.typescriptlang.org/docs/handbook/generics.html) to declare the type the object adheres to. We pass `CounterService` between angle brackets so TypeScript checks that the fake matches the original.

Let us put our fake to work. In the _Arrange_ phase, the fake is created and injected into the testing Module.

```typescript
const currentCount = 123;

describe('ServiceCounterComponent: unit test', () => {
  let component: ServiceCounterComponent;
  let fixture: ComponentFixture<ServiceCounterComponent>;
  // Declare shared variable
  let fakeCounterService: CounterService;

  beforeEach(async () => {
    // Create fake
    fakeCounterService =
      jasmine.createSpyObj<CounterService>('CounterService', {
        getCount: of(currentCount),
        increment: undefined,
        decrement: undefined,
        reset: undefined,
      });

    await TestBed.configureTestingModule({
      declarations: [ServiceCounterComponent],
      // Use fake instead of original
      providers: [
        { provide: CounterService, useValue: fakeCounterService }
      ],
    }).compileComponents();

    fixture = TestBed.createComponent(ServiceCounterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  /* … */
});
```

There is a new pattern in the `providers` sections of the testing Module:

```typescript
providers: [
  { provide: CounterService, useValue: fakeCounterService }
]
```

This is the crucial moment where we tell Angular: For the `CounterService` dependency, use the value `fakeCounterService` instead. This is how we replace the original with a fake.

In the integration test, we simply wrote `providers: [ CounterService ]`. In this setup, Angular creates and injects a `CounterService` instance whenever a Component, Service etc. asks for the `CounterService`.

Using `{ provide: /* … */, useValue: /* … */ }`, we override the standard instantiation behavior and directly provide the value to inject.

The _Arrange_ phase is complete now, let us write the actual specs.

The _Act_ phase is the same as in the other counter Component tests: We click on buttons and fill out form fields.

In the _Assert_ phase, we need to verify that the Service methods have been called. Thanks to `jasmine.createSpyObj`, all methods of `fakeCounterService` are spies. We use `expect` together with an appropriate matcher like `toHaveBeenCalled`, `toHaveBeenCalledWith` etc.

```typescript
expect(fakeCounterService.getCount).toHaveBeenCalled();
```

Applied to all specs, the test suite looks like this:

```typescript
const currentCount = 123;

describe('ServiceCounterComponent: unit test', () => {
  let component: ServiceCounterComponent;
  let fixture: ComponentFixture<ServiceCounterComponent>;
  // Declare shared variable
  let fakeCounterService: CounterService;

  beforeEach(async () => {
    // Create fake
    fakeCounterService =
      jasmine.createSpyObj<CounterService>('CounterService', {
        getCount: of(currentCount),
        increment: undefined,
        decrement: undefined,
        reset: undefined,
      });

    await TestBed.configureTestingModule({
      declarations: [ServiceCounterComponent],
      // Use fake instead of original
      providers: [
        { provide: CounterService, useValue: fakeCounterService }
      ],
    }).compileComponents();

    fixture = TestBed.createComponent(ServiceCounterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('shows the count', () => {
    expectText(fixture, 'count', String(currentCount));
    expect(fakeCounterService.getCount).toHaveBeenCalled();
  });

  it('increments the count', () => {
    click(fixture, 'increment-button');
    expect(fakeCounterService.increment).toHaveBeenCalled();
  });

  it('decrements the count', () => {
    click(fixture, 'decrement-button');
    expect(fakeCounterService.decrement).toHaveBeenCalled();
  });

  it('resets the count', () => {
    const newCount = 456;
    setFieldValue(fixture, 'reset-input', String(newCount));
    click(fixture, 'reset-button');
    expect(fakeCounterService.reset).toHaveBeenCalledWith(newCount);
  });
});
```

<div class="book-sources" markdown="1">
- [ServiceCounterComponent: Implementation and test code](https://github.com/9elements/angular-workshop/tree/master/src/app/components/service-counter)
</div>

### Fake Service with minimal logic

The specs above check whether user interaction calls the Service methods. They do not check whether the Component re-renders the new count after having called the Service.

The Component calls `ServiceCounter`’s `getCount` and receives an `Observable<number>`. The original Service pushes new values through the Observable. The spec `it('shows the count', …)` has already proven that the Component obtained the count from the Service and renders it.

In addition, we will check that the Component correctly subscribes to and processes updates from the Service. This is not strictly necessary in our simple `ServiceCounterComponent` and `CounterService` example. But it is useful in more complex interactions between a Component and a Service.

The fake `getCount` method returns `of(currentCount)`, an Observable with the fixed value 123. The Observable completes immediately and never pushes another value. We need to change that behavior in order to demonstrate the Component update.

The fake `CounterService`, devoid of logic so far, needs to gain some logic. `getCount` should return a Observable that emits new values when `increment`, `decrement` and `reset` are called.

Instead of a fixed Observable, we use a `BehaviorSubject`, just like in the original `CounterService` implementation. The `BehaviorSubject` has a `next` method for pushing new values.

We declare a variable `fakeCount$` in the scope of the test suite and assign a `BehaviorSubject` in the first `beforeEach` block:

```typescript
describe('ServiceCounterComponent: unit test', () => {
  /* … */
  let fakeCount$: BehaviorSubject<number>;

  beforeEach(async () => {
    fakeCount$ = new BehaviorSubject(0);
    /* … */
  });

  /* … */
});
```

Then we change the `fakeCounterService` so the methods push new values through `fakeCount$`.

```typescript
const newCount = 123;
/* … */
fakeCounterService = {
  getCount(): Observable<number> {
    return fakeCount$;
  },
  increment(): void {
    fakeCount$.next(1);
  },
  decrement(): void {
    fakeCount$.next(-1);
  },
  reset(): void {
    fakeCount$.next(Number(newCount));
  },
};
```

The fake above is an object with plain methods. We are not using `createSpyObj` any longer because it does not allow fake method implementations.

We have lost the Jasmine spies and need to bring them back. There are several ways to wrap the methods in spies. For simplicity, we install spies on all methods using `spyOn`:

```typescript
spyOn(fakeCounterService, 'getCount').and.callThrough();
spyOn(fakeCounterService, 'increment').and.callThrough();
spyOn(fakeCounterService, 'decrement').and.callThrough();
spyOn(fakeCounterService, 'reset').and.callThrough();
```

Remember to add `.and.callThrough()` so the underlying fake methods are called.

Now our fake Service sends new counts to the Component. We can reintroduce the checks for the Component output:

```typescript
fixture.detectChanges();
expectText(fixture, 'count', '…');
```

Assembling all parts, the full `ServiceCounterComponent` unit test:

```typescript
const newCount = '123';

describe('ServiceCounterComponent: unit test', () => {
  let component: ServiceCounterComponent;
  let fixture: ComponentFixture<ServiceCounterComponent>;

  let fakeCount$: BehaviorSubject<number>;
  let fakeCounterService: Pick<CounterService, keyof CounterService>;

  beforeEach(async () => {
    fakeCount$ = new BehaviorSubject(0);

    fakeCounterService = {
      getCount(): Observable<number> {
        return fakeCount$;
      },
      increment(): void {
        fakeCount$.next(1);
      },
      decrement(): void {
        fakeCount$.next(-1);
      },
      reset(): void {
        fakeCount$.next(Number(newCount));
      },
    };
    spyOn(fakeCounterService, 'getCount').and.callThrough();
    spyOn(fakeCounterService, 'increment').and.callThrough();
    spyOn(fakeCounterService, 'decrement').and.callThrough();
    spyOn(fakeCounterService, 'reset').and.callThrough();

    await TestBed.configureTestingModule({
      declarations: [ServiceCounterComponent],
      providers: [{ provide: CounterService, useValue: fakeCounterService }],
    }).compileComponents();

    fixture = TestBed.createComponent(ServiceCounterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('shows the start count', () => {
    expectText(fixture, 'count', '0');
    expect(fakeCounterService.getCount).toHaveBeenCalled();
  });

  it('increments the count', () => {
    click(fixture, 'increment-button');
    fakeCount$.next(1);
    fixture.detectChanges();

    expectText(fixture, 'count', '1');
    expect(fakeCounterService.increment).toHaveBeenCalled();
  });

  it('decrements the count', () => {
    click(fixture, 'decrement-button');
    fakeCount$.next(-1);
    fixture.detectChanges();

    expectText(fixture, 'count', '-1');
    expect(fakeCounterService.decrement).toHaveBeenCalled();
  });

  it('resets the count', () => {
    setFieldValue(fixture, 'reset-input', newCount);
    click(fixture, 'reset-button');
    fixture.detectChanges();

    expectText(fixture, 'count', newCount);
    expect(fakeCounterService.reset).toHaveBeenCalled();
  });
});
```

Again, this example is intentionally verbose. The fake re-implements a large part of the original logic. This is because the original `CounterService` has little logic itself.

In reality, Services are more complex and Components process the data they receive from the Services. Then, the effort of faking essential logic is worthwhile.

<div class="book-sources" markdown="1">
- [ServiceCounterComponent: unit test](https://github.com/9elements/angular-workshop/blob/master/src/app/components/service-counter/service-counter.component.spec.ts)
</div>

### Faking Services: Summary

Creating fake Service dependencies and verifying their usage is probably the most challenging problem when testing Angular applications. This guide can only catch a glimpse on the subject.

Faking Services requires effort and steady practice. The more unit tests you write, the more experience you gain. More importantly, the practice teaches you to write _simple Services that are easy to fake_: Services with a clear API and an obvious purpose.

Unfortunately, there are no best practices when it comes to faking Services. You will find plenty of approaches online that have their strengths and weaknesses. The associated unit tests have different degrees of accuracy and completeness.

Arguing about the “right” way of faking a Service is pointless. You need to decide on a faking method that suits the Service on a case-by-case basis.

There are two takeaways you should remember:

1. Ask yourself, is the test valuable? Does it cover the important interaction between Component and Service? Decide whether to test the interaction superficially or in-depth.
2. Whichever approach you choose, make sure to meet the [basic requirements](#rules-for-faking-dependencies):
   1. Equivalence of fake and original: The fake must have a type derived from the original.
   2. Effective faking: the original stays untouched.

## Testing Services

In an Angular application, Services are responsible for fetching, storing and processing data. Services are singletons, meaning there is only one instance of a Service during runtime. They are fit for central data storage, HTTP and WebSocket communication as well as data validation.

The single Service instance is shared among Components and other application parts. Therefore, a Service is used when Components that are not parent and child need to communicate with each other and exchange data.

“Service” is an umbrella term for any object that serves a specific purpose and is injected as a dependency. Technically, Services have little in common. There a no rules regarding the structure or behavior of a Service.

Typically, Services are classes, but not necessarily. While Modules, Components and Directives are marked with respective decorators – `@Module`, `@Component`, `@Directive` –, Services are marked with the generic `@Injectable`.

So how do we test a Service? What needs to be tested? Services are diverse, but some patterns are widespread.

- Services have public methods that return values.

  In the test, we check whether a method returns correct data.

- Services store data. That is, they have an internal state. We can get or set the state.

  In the test, we check whether the state is changed correctly. Since the state should be held in private properties, we cannot access the state directly. We test the state change by calling public methods. We should not peek into the [black box](#black-box-vs-white-box-testing).

- Services interact with dependencies. These are often other Services. For example, a Service might send HTTP requests via Angular’s `HttpClient`.

  In the unit test, we replace the dependency with a fake that returns canned responses. To fake the `HttpClient` dependency, we may use Angular’s `HttpClientTestingModule`.

### Testing a Service with internal state

Let us start with testing the [`CounterService`](https://github.com/9elements/angular-workshop/blob/master/src/app/services/counter.service.ts). By now, you should be familiar with the Service. As a reminder, here is the shape including private members:

```typescript
class CounterService {
  private count: number;
  private subject: BehaviorSubject<number>;
  public getCount(): Observable<number> { /* … */ }
  public increment(): void { /* … */ }
  public decrement(): void { /* … */ }
  public reset(newCount: number): void { /* … */ }
  private notify(): void { /* … */ }
}
```

We need to identify what the Service does, what we need test and how we test it.

- The Service holds an internal state, namely in the private `count` and `subject` properties. We cannot and should not access these properties in the test.
- The Service has a public method, `getCount`, for reading the state. It does not return a synchronous value, but an RxJS Observable. We will use `getCount` to get the current count and also to subscribe to changes.
- Last but not least, the Service has three public methods for changing the state: `increment`, `decrement` and `reset`. We will call these methods and then check whether the state has changed appropriately.

Let us write the test code! We create a file called `counter.service.spec.ts` and fill it with test suite boilerplate code:

```typescript
describe('CounterService', () => {
  /* … */
});
```

We already know what the Service does and what needs to be tested. So we add specs for all features:

```typescript
describe('CounterService', () => {
  it('returns the count', () => { /* … */ });
  it('increments the count', () => { /* … */ });
  it('decrements the count', () => { /* … */ });
  it('resets the count', () => { /* … */ });
});
```

In the _Arrange_ phase, each spec needs to create an instance of `CounterService`. The simplest way to do that is:

```typescript
const counterService = new CounterService();
```

This is fine for simple Services without dependencies. For testing Services with dependencies, we will use the `TestBed` later.

We create the fresh instance in a `beforeEach` block since every spec needs it:

```typescript
describe('CounterService', () => {
  let counterService: CounterService;

  beforeEach(() => {
    counterService = new CounterService();
  });

  it('returns the count', () => { /* … */ });
  it('increments the count', () => { /* … */ });
  it('decrements the count', () => { /* … */ });
  it('resets the count', () => { /* … */ });
});
```

Let us start with writing the spec `it('returns the count', /* … */)`. It tests tests the `getCount` method which returns an Observable.

For testing the Observable, we use the same pattern that we have used for [testing a Component Output](#testing-outputs). We declare a variable `actualCount` that is initially undefined. Then we subscribe and assign the value emitted by the Observable to the variable. Finally, outside of the subscriber function, we compare the actual to the expected value.

```typescript
it('returns the count', () => {
  let actualCount: number | undefined;
  counterService.getCount().subscribe((count) => {
    actualCount = count;
  });
  expect(actualCount).toBe(0);
});
```

This works because the Observable is backed by a BehaviorSubject that stores the latest value and sends it to new subscribers immediately.

The next spec, `it('increments the count', /* … */)`, tests the `increment` method. The spec calls the method and then verifies that the count state has changed. As mentioned before, we cannot access the private properties for this purpose. Just like in the spec above, we need to use the public `getCount` method to read the count.

```typescript
it('increments the count', () => {
  counterService.increment();

  let actualCount: number | undefined;
  counterService.getCount().subscribe((count) => {
    actualCount = count;
  });
  expect(actualCount).toBe(1);
});
```

The order here is important: First, we call `increment`, then we subscribe to the Observable to read and verify the changed value. Again, the BehaviorSubject emits the current value to new subscribers synchronously.

The two remaining specs work almost the same. We just call the respective methods.

```typescript
it('decrements the count', () => {
  counterService.increment();

  let actualCount: number | undefined;
  counterService.getCount().subscribe((count) => {
    actualCount = count;
  });
  expect(actualCount).toBe(-1);
});

it('resets the count',, () => {
  const newCount = 123;
  counterService.reset(newCount);

  let actualCount: number | undefined;
  counterService.getCount().subscribe((count) => {
    actualCount = count;
  });
  expect(actualCount).toBe(newCount);
});
```

We quickly notice that the specs are highly repetitive and noisy. In every spec’s _Assert_ phase, we are using this pattern to inspect the Service state:

```typescript
let actualCount: number | undefined;
counterService.getCount().subscribe((count) => {
  actualCount = count;
});
expect(actualCount).toBe(/* … */);
```

This is a good candidate for a helper function. Let us call it `expectCount`.

```typescript
function expectCount(count: number): void {
  let actualCount: number | undefined;
  counterService.getCount().subscribe((actualCount2) => {
    actualCount = actualCount2;
  });
  expect(actualCount).toBe(count);
}
```

The pattern has one variable bit, the expected count. That is why the helper function has one parameter.

Now that we have pulled out the code into a central helper function, there is one optimization we should add. The First Rule of RxJS Observables states: “Anyone who subscribes, must unsubscribe as well”.

In `expectCount`, we need to get the current count only once. We do not want to create a long-lasting subscription. We are not interested in future changes. If we call `expectCount` only once per spec, this is not a huge problem. If we wrote a more complex spec with several `expectCount` calls, we would create pointless subscriptions. This is likely to cause confusion for example when debugging the subscriber function.

In short, we want to fetch the count and than unsubscribe to reduce unwanted subscriptions.

One possible solution is to unsubscribe immediately after subscribing. The `subscribe` method returns a `Subscription` with the useful `unsubscribe` method.

```typescript
function expectCount(count: number): void {
  let actualCount: number | undefined;
  counterService
    .getCount()
    .subscribe((actualCount2) => {
      actualCount = actualCount2;
    })
    .unsubscribe();
  expect(actualCount).toBe(count);
}
```

A more idiomatic way is to use an RxJS operator that completes the Observable after the first value: [`first`](https://rxjs-dev.firebaseapp.com/api/operators/first).

```typescript
import { first } from 'rxjs/operators';

function expectCount(count: number): void {
  let actualCount: number | undefined;
  counterService
    .getCount()
    .pipe(first())
    .subscribe((actualCount2) => {
      actualCount = actualCount2;
    });
  expect(actualCount).toBe(count);
}
```

If you are not familiar with this arcane RxJS magic, do not worry. In the simple `CounterService` test, unsubscribing is not strictly necessary. But it is a good practice that avoids weird errors when testing more complex Services that make use of Observables.

The complete test suite now looks like this:

```typescript
describe('CounterService', () => {
  let counterService: CounterService;

  function expectCount(count: number): void {
    let actualCount: number | undefined;
    counterService
      .getCount()
      .pipe(first())
      .subscribe((actualCount2) => {
        actualCount = actualCount2;
      });
    expect(actualCount).toBe(count);
  }

  beforeEach(() => {
    counterService = new CounterService();
  });

  it('returns the count', () => {
    expectCount(0);
  });

  it('increments the count', () => {
    counterService.increment();
    expectCount(1);
  });

  it('decrements the count', () => {
    counterService.decrement();
    expectCount(-1);
  });

  it('resets the count', () => {
    const newCount = 123;
    counterService.reset(newCount);
    expectCount(newCount);
  });
});
```

<div class="book-sources" markdown="1">
- [CounterService: test code](https://github.com/9elements/angular-workshop/blob/master/src/app/services/counter.service.spec.ts)
</div>

### Testing a Service that sends HTTP requests

Services without dependencies, like `CounterService`, are relatively easy to test. Let us examine a more complex Service with a dependency.

In the [Flickr search example application](https://github.com/9elements/angular-flickr-search), the [FlickrService](https://github.com/9elements/angular-flickr-search/blob/master/src/app/services/flickr.service.ts) is responsible for searching photos via the Flickr API. It makes an HTTP GET request to www.flickr.com. The server responds with JSON. Here is the full code:

```typescript
@Injectable()
export class FlickrService {
  constructor(private http: HttpClient) {}

  public searchPublicPhotos(searchTerm: string): Observable<Photo[]> {
    return this.http
      .get<FlickrAPIResponse>('https://www.flickr.com/services/rest/', {
        params: {
          method: 'flickr.photos.search',
          format: 'json',
          nojsoncallback: '1',
          api_key: 'API key',
          tags: searchTerm,
          tag_mode: 'all',
          media: 'photos',
          per_page: '15',
          extras: 'tags,date_taken,owner_name,url_q,url_m',
        },
      })
      .pipe(map((response) => response.photos.photo));
  }
}
```

The Service is marked with `@Injectable()` so it takes part in Angular’s Dependency Injection. It depends on Angular’s standard HTTP library, _`HttpClient`_ from the `@angular/common/http` package. Most Angular applications use `HttpClient` to communicate with HTTP APIs.

There are two ways to test the `FlickrService`: an integration test or a unit test.

An integration test provides the real `HttpClient`. This will lead to HTTP requests to the Flickr API when the running the tests. These HTTP requests to the real API the whole test brittle and unreliable.

The network or the web service might be slow or unavailable. Also the Flickr API endpoint returns a different response for each request. It is hard to expect a certain `FlickrService` behavior if the input is unknown.

Requests to third-party production APIs make little sense in a testing environment. If you want to write an integration test for a Service that makes HTTP request, better use a dedicated testing API that returns fixed data. This API can run on the same machine or in the local network.

In the case of `FlickrService`, we better write a unit test. Angular has a powerful helper for testing code that depends on `HttpClient`: the [`HttpClientTestingModule`](https://angular.io/guide/http#testing-http-requests).

For testing a Service with dependencies, it would be tedious to instantiate the Service with `new`. Instead, we are using the `TestBed` to set up a testing Module. Instead of providing the `HttpClient`, we import the `HttpClientTestingModule`.

```typescript
TestBed.configureTestingModule({
  imports: [HttpClientTestingModule],
  providers: [FlickrService],
});
```

The `HttpClientTestingModule` provides a fake implementation of `HttpClient`. It does not actually send out HTTP requests. It merely intercepts them and records them internally. In the test, we inspect that log of HTTP requests. We respond to pending requests manually with fake data.

Our test will consist of the following steps:

1. Call the method under test that sends HTTP requests
2. Find pending requests
3. Respond to these requests with fake data
4. Check the result of the method call
5. Verify that all requests have been found and answered

<div class="book-sources" markdown="1">
- [Angular guide:  Communicating with backend services using HTTP ](https://angular.io/guide/http)
- [Angular reference: HttpClient](https://angular.io/api/common/http/HttpClient)
- [Angular guide: Testing HTTP requests](https://angular.io/guide/http#testing-http-requests)
- [Angular reference: HttpClientTestingModule](https://angular.io/api/common/http/testing/HttpClientTestingModule)
</div>

#### Call the method under test

In the first step, we call the method under test, `searchPublicPhotos`. The search term is simply a fixed string.

```typescript
const searchTerm = 'dragonfly';

describe('FlickrService', () => {
  let flickrService: FlickrService;

  beforeEach(() => {
    TestBed.configureTestingModule({
      imports: [HttpClientTestingModule],
      providers: [FlickrService],
    });
    flickrService = TestBed.inject(FlickrService);
  });

  it('searches for public photos', () => {
    flickrService.searchPublicPhotos(searchTerm).subscribe((actualPhotos) => {
      /* … */
    });
    /* … */
  });
});
```

By subscribing to the Observable returned by `searchPublicPhotos`, the (fake) HTTP request is sent. We will investigate the response, `actualPhotos`, later in step four.

#### Find pending requests

In the second step, we find the pending request using the [`HttpTestingController`](https://angular.io/api/common/http/testing/HttpTestingController). This class is part of the `HttpClientTestingModule`. We get hold of the instance by calling `TestBed.inject(HttpTestingController)`.

The controller has several methods to find requests by different criteria. The simplest is `expectOne` which finds a request matching the given criteria and expects that there is exactly one match. In our case, we search for a request with a given URL of the Flickr API.

```typescript
const searchTerm = 'dragonfly';
const expectedUrl = `https://www.flickr.com/services/rest/?method=flickr.photos.search&format=json&nojsoncallback=1&api_key=XYZ&tags=${searchTerm}&tag_mode=all&media=photos&per_page=15&extras=tags,date_taken,owner_name,url_q,url_m`;

describe('FlickrService', () => {
  let flickrService: FlickrService;
  let controller: HttpTestingController;

  beforeEach(() => {
    TestBed.configureTestingModule({
      imports: [HttpClientTestingModule],
      providers: [FlickrService],
    });
    flickrService = TestBed.inject(FlickrService);
    controller = TestBed.inject(HttpTestingController);
  });

  it('searches for public photos', () => {
    flickrService.searchPublicPhotos(searchTerm).subscribe((actualPhotos) => {
      /* … */
    });

    const request = controller.expectOne(expectedUrl);
    /* … */
  });
});
```

`expectOne` returns the found request, that is an instance of TestRequest. If there is no pending request that matches the URL, `expectOne` throws an exception, failing the spec.

<div class="book-sources" markdown="1">
- [Angular reference: HttpTestingController](https://angular.io/api/common/http/testing/HttpTestingController)
- [Angular reference: TestRequest](https://angular.io/api/common/http/testing/TestRequest)
</div>

#### Respond with fake data

Now that we have the pending request, we respond to it with an object that mimics the original API response. The Flickr API returns a complex object with an array of photos objects deep within. In the `FlickrService` test, we only care about the payload, the photos array.

The Flickr search repository contains [fake photo objects](https://github.com/9elements/angular-flickr-search/blob/master/src/app/spec-helpers/photo.spec-helper.ts) that are used throughout the tests. For the `FlickrService` test, we import the `photos` array with two fake photo objects.

We use the request’s `flush` method to respond with fake data. This simulates a successful “200 OK” server response.

```typescript
request.flush({ photos: { photo: photos } });
```

#### Check the result of the method call

The spec has proven that the method under test makes a request to the expected URL. It still needs to prove that the method passes through the desired part of the API response. In particular, it needs to prove that the Observable emits the `photos` array.

We have already subscribed to the Observable:

```typescript
flickrService.searchPublicPhotos(searchTerm).subscribe((actualPhotos) => {
  /* … */
});
```

We expect that the Observable emits a photos array that equals to the one from the API response:

```typescript
flickrService.searchPublicPhotos(searchTerm).subscribe((actualPhotos) => {
  expect(actualPhotos).toEqual(photos);
});
```

This leads to a problem that is known from [testing Outputs](#testing-outputs): If the code under test is broken, the Observable never emits. The `next` callback with `expect` will not be called. Despite the defect, Jasmine thinks that all is fine.

There are several ways to solve this problem. We have opted for a variable that is `undefined` initially and is assigned a value.

```typescript
let actualPhotos: Photo[] | undefined;
flickrService.searchPublicPhotos(searchTerm).subscribe((otherPhotos) => {
  actualPhotos = otherPhotos;
});

const request = controller.expectOne(expectedUrl);
// Answer the request so the Observable emits a value.
request.flush({ photos: { photo: photos } });

// Now verify emitted valued.
expect(actualPhotos).toEqual(photos);
```

The `expect` call is outside of the `next` callback function to ensure it is definitely called. If the Observable emits no value or a wrong value, the spec fails.

#### Verify that all requests have been found and answered

In the fifth and last step, we ensure that there are no pending requests left. We expect the method under test to make one request to a specific URL. We have found the request with `expectOne` and have answered it with `flush`.

Finally, we call:

```typescript
controller.verify();
```

This fails the test if there are any outstanding requests.

`verify` guarantees that the code under test is not making excess requests. But it also guarantees that your spec checks all requests, for example by inspecting their URLs.

Putting the parts together, the full test suite:

```typescript
const searchTerm = 'dragonfly';
const expectedUrl = `https://www.flickr.com/services/rest/?method=flickr.photos.search&format=json&nojsoncallback=1&api_key=XYZ&tags=${searchTerm}&tag_mode=all&media=photos&per_page=15&extras=tags,date_taken,owner_name,url_q,url_m`;

describe('FlickrService', () => {
  let flickrService: FlickrService;
  let controller: HttpTestingController;

  beforeEach(() => {
    TestBed.configureTestingModule({
      imports: [HttpClientTestingModule],
      providers: [FlickrService],
    });
    flickrService = TestBed.inject(FlickrService);
    controller = TestBed.inject(HttpTestingController);
  });

  it('searches for public photos', () => {
    let actualPhotos: Photo[] | undefined;
    flickrService.searchPublicPhotos(searchTerm).subscribe((otherPhotos) => {
      actualPhotos = otherPhotos;
    });

    const request = controller.expectOne(expectedUrl);
    request.flush({ photos: { photo: photos } });
    controller.verify();

    expect(actualPhotos).toEqual(photos);
  });
});
```

<div class="book-sources" markdown="1">
- [FlickrService: test code](
https://github.com/9elements/angular-flickr-search/blob/master/src/app/services/flickr.service.spec.ts)
</div>

#### Testing the error case

Are we done with testing `searchPublicPhotos`? We have tested the success case in which the server returns a `200 OK`. But we have not tested the error case yet!

`searchPublicPhotos` passes through the error from `HttpClient`. If the Observable returned by `this.http.get()` fails with an error, the Observable returned by `searchPublicPhotos` fails with the same error. Whether there is custom error handling in the Service or not, the _unhappy path_ should be tested.

Let us simulate a “500 Internal Server Error”. Instead of responding to the request with `flush`, we let it fail by calling `error`.

```typescript
const status = 500;
const statusText = 'Internal Server Error';
const errorEvent = new ErrorEvent('API error');
/* … */
const request = controller.expectOne(expectedUrl);
request.error(
  errorEvent,
  { status, statusText }
);
```

The `TestRequest`’s `error` method expects an `ErrorEvent`, and an optional options object.

[`ErrorEvent`](https://developer.mozilla.org/en-US/docs/Web/API/ErrorEvent) is a special `Error` that is provided by the browser. For testing purposes, we create an instance using `new ErrorEvent('…')`. The constructor parameter is an arbitrary message string. We can use any message that describes or error case well.

The second parameter, the options object, allows you to set the HTTP `status` (like `500`), the `statusText` (like `'Internal Server Error'`) and response headers. In the example above, we set `status` and `statusText`.

Now we check that the returned Observable behaves correctly. It must not emit a next value and must not complete. It must fail with an error.

We achieve that by subscribing to `next`, `error` and `complete` events:

```typescript
flickrService.searchPublicPhotos(searchTerm).subscribe(
  () => { /* next handler must not be called! */ },
  (error) => { /* error handler must be called! Also, we need to inspect the error. */ },
  () => { /* complete handler must not be called! */ },
);
```

When the `next` or `complete` handlers are called, the spec must fail immediately. There is a handy global Jasmine function for this purpose: `fail`. We directly pass `fail` as `next` and `complete` handler.

For inspecting the error, we use the same pattern as above, saving the error in a variable in the outer scope.

```typescript
let actualError: HttpErrorResponse | undefined;

flickrService.searchPublicPhotos(searchTerm).subscribe(
  () => {
    fail('next handler must not be called');
  },
  (error) => {
    actualError = error;
  },
  () => {
    fail('complete handler must not be called');
  },
);
```

After answering the request with a fake server error, we check that the error information is passed through. The `error` handler receives a `HttpErrorResponse` object that reflects the `ErrorEvent` as well es the status information.

```typescript
if (!actualError) {
  throw new Error('Error needs to be defined');
}
expect(actualError.error).toBe(errorEvent);
expect(actualError.status).toBe(status);
expect(actualError.statusText).toBe(statusText);
```

Since `actualError` is defined as `HttpErrorResponse | undefined`, we need to rule out the `undefined` case first before accessing the properties. `expect(actualError).toBeDefined()` would accomplish that. But the TypeScript compiler does not understand that `expect(…).toBeDefined()` rules out the `undefined` case. So we need to throw an exception manually.

This is the full spec for the error case:

```typescript
it('passes through search errors', () => {
  const status = 500;
  const statusText = 'Server error';
  const errorEvent = new ErrorEvent('API error');

  let actualError: HttpErrorResponse | undefined;

  flickrService.searchPublicPhotos(searchTerm).subscribe(
    () => {
      fail('next handler must not be called');
    },
    (error) => {
      actualError = error;
    },
    () => {
      fail('complete handler must not be called');
    },
  );

  controller.expectOne(expectedUrl).error(
    errorEvent,
    { status, statusText }
  );

  if (!actualError) {
    throw new Error('Error needs to be defined');
  }
  expect(actualError.error).toBe(errorEvent);
  expect(actualError.status).toBe(status);
  expect(actualError.statusText).toBe(statusText);
});
```

This example is deliberately verbose. It shows you how to test all details. It fails fast and provides helpful error messages.

This approach is recommended for Service methods that have a dedicated error handling. For example, a Service might distinguish between successful responses (like “200 OK”), client errors (like “404 Not Found”) and server errors (like “500 Server error”).

<div class="book-sources" markdown="1">
- [FlickrService: implementation and test](https://github.com/9elements/angular-flickr-search/blob/master/src/app/services/)
- [Angular reference: HttpErrorResponse](https://angular.io/api/common/http/HttpErrorResponse)
- [MDN reference: ErrorEvent](https://developer.mozilla.org/en-US/docs/Web/API/ErrorEvent)
</div>

#### Alternative ways to find pending requests

We have used `controller.expectOne` to find a request that matches the expected URL. Sometimes it is necessary to specify more criteria, like the method (`GET`, `POST` etc.), query parameters (`?tags=dragonfly`), headers or the request body.

`expectOne` has several signatures. We used the simplest, a string which is interpreted as URL:

```typescript
controller.expectOne('https://www.example.org')
```

To search for a request with a given method and url, pass an object with these properties:

```typescript
controller.expectOne({ method: 'GET', url: 'https://www.example.org' })
```

If you need to find one request by looking at its details, you can pass a function:

```typescript
controller.expectOne(
  (requestCandidate) =>
    requestCandidate.method === 'GET' &&
    requestCandidate.url === 'https://www.example.org' &&
    requestCandidate.headers.get('Accept') === 'application/json',
);
```

The function is a predicate. This means the function is called for each request, decides whether the candidate is a match and returns a boolean.

This lets you sift through all requests programmatically and check all criteria. The candidate is an [HttpRequest](https://angular.io/api/common/http/HttpRequest) instance with properties like `method`, `url`, `headers`, `body`, `params` etc.

There are two possible approaches: Either you use `expectOne` with many criteria, like in the predicate example. If some request detail does not match, `expectOne` throws an exception and fails the test.

Or you use `expectOne` with few criteria, passing `{ method: '…', url: '…' }`. To check the request details, you can still use Jasmine expectations.

`expectOne` returns a `TestRequest` instance. This object only has methods to answer the request, but no direct information about the request. Use the `request` property to access the underlying `HttpRequest`.

```typescript
// Get the TestRequest.
const request = controller.expectOne({
  method: 'GET',
  url: 'https://www.example.org'
});
// Get the underlying HttpRequest. Yes, this is confusing.
const httpRequest = request.request;
expect(httpRequest.headers.get('Accept')).toBe('application/json');
request.flush({ success: true });
```

This is equivalent to the predicate example, but gives a more specific error message if the header is incorrect.

In addition to `expectOne`, there is the `match` method for finding multiple requests that match certain criteria. It returns an array of requests. If there are no matches, the array is empty, but the spec does not fail. Hence, you need to add Jasmine expectations to check the array and the requests therein.

Assume there is a `CommentService` with a method `postTwoComments`. The code under test makes two requests to the same URL, but with a different body.

```typescript
@Injectable
class CommentService() {
  constructor(private http: HttpClient) {}
  public postTwoComments(firstComment: string, secondComment: string) {
    return combineLatest([
      this.http.post('/comments/new', { comment: firstComment }),
      this.http.post('/comments/new', { comment: secondComment }),
    ]);
  }
}
```

The spec could contain:

```typescript
const firstComment = 'First comment!';
const secondComment = 'Second comment!';
commentService
  .postTwoComments(firstComment, secondComment)
  .subscribe();

const requests = controller.match({
  method: 'POST',
  url: '/comments/new',
});
expect(requests.length).toBe(2);
expect(requests[0].request.body).toEqual({ comment: firstComment });
expect(requests[1].request.body).toEqual({ comment: secondComment });
requests[0].flush({ success: true });
requests[1].flush({ success: true });
```

We verify the number of requests and also the body of each request. If these checks pass, we answer each request.

<div class="book-sources" markdown="1">
- [Angular reference: HttpRequest](https://angular.io/api/common/http/HttpRequest)
- [Angular reference: TestRequest](https://angular.io/api/common/http/testing/TestRequest)
</div>

### Testing Services: Summary

In a nutshell, testing Services is easier than testing other Angular application parts. Most Services have a clear purpose and a well-defined public API.

If the Service under test depends on another Service, a unit test needs to the fake the dependency. This is probably the hardest part, but takes the same effort as faking Services that are Component dependencies.

Angular ships with numerous Services like `HttpClient` that are commonly used in your own Services. These can be replaced with fakes quite easily. For some central Services, Angular offers tools for intercepting and verifying calls. We have used the `HttpClientTestingModule` for testing a Service that depends on `HttpClient`. Similarly, there is the [`RouterTestingModule`](https://angular.io/api/router/testing/RouterTestingModule) for testing Services that depend on `Router` and `Location`, for example.

## Testing Directives

Angular beginners quickly encounter three core concepts: Modules, Components and Services. A less known core concept are Directives. Without knowing, even beginners are using Directives, because Directives are everywhere.

In Angular, there are three types of Directives:

1. A _Component_ is a Directive with a template. A Component typically uses an element type selector, like `app-counter`. Angular then looks for `app-counter` elements and renders the Component template into these host elements.
2. An _Attribute Directive_ adds logic to an existing host element in the DOM. Examples for built-in Attribute Directives are `NgClass` and `NgStyle`.
3. A _Structural Directive_ alters the structure of the DOM, meaning it adds and removes elements programmatically. Examples for built-in Structural Directives are `NgIf`, `NgFor` and `NgSwitch`.

We have already tested Components. We have yet to test the two other types of Directives.

### Testing Attribute Directives

The name Attribute Directive comes from the attribute selector, for example `[ngModel]`. An Attribute Directive does not have a template and cannot alter the DOM structure.

We have already mentioned the built-in Attribute Directives `NgClass` and `NgStyle`. In addition, both Template-driven and Reactive Forms rely heavily on Attribute Directives: `NgForm`, `NgModel`, `FormGroupDirective`, `FormControlName` etc.

Attributes Directives are often used for changing the style of an element, either directly with inline styles or indirectly with classes. Most styling logic can be implemented using CSS alone, no JavaScript code is necessary. But sometimes JavaScript is required to set inline styles or add classes programmatically.

Neither of our [example applications](#example-applications) contain an Attribute Directive, so we are introducing the **`ThresholdWarningDirective`**. This Directive applies to `<input type="number">` elements. It toggles a class if the picked number exceeds a given threshold. If the number is higher than the threshold, the field should be marked visually.

Note that numbers above the threshold are valid input. The `ThresholdWarningDirective` does not add an Angular validator. We merely want to warn the user so they check the input twice.

<button class="load-iframe">
See the ThresholdWarningDirective in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://molily.github.io/threshold-warning-directive/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

Enter a number greater than 10 to see the effect.

<div class="book-sources" markdown="1">
- [ThresholdWarningDirective: Source code](https://github.com/molily/threshold-warning-directive/blob/master/src/app/threshold-warning.directive.ts)
- [ThresholdWarningDirective: Run the app](https://molily.github.io/threshold-warning-directive/)
</div>

This is the Directive’s code:

```typescript
import {
  Directive, ElementRef, HostBinding, HostListener, Input
} from '@angular/core';

@Directive({
  selector: '[appThresholdWarning]',
})
export class ThresholdWarningDirective {
  @Input()
  public appThresholdWarning: number | null = null;

  @HostBinding('class.overThreshold')
  public overThreshold = false;

  @HostListener('input')
  public inputHandler(): void {
    this.overThreshold =
      this.appThresholdWarning !== null &&
      this.elementRef.nativeElement.valueAsNumber > this.appThresholdWarning;
  }

  constructor(private elementRef: ElementRef<HTMLInputElement>) {}
}
```

This is how we apply the Directive to an element:

```typescript
<input type="number" [appThresholdWarning]="10" />
```

This means: If the user enters a number that is greater than 10, mark the field with a visual warning.

One bit is missing: the styles for the visual warning.

```css
input[type='number'].overThreshold {
  background-color: #fe9;
}
```

Before we write the test for the Directive, let us walk through the implementation parts quickly.

The `ThresholdWarningDirective` is applied with an attribute binding `[appThresholdWarning]="…"`. It receives the attribute value as an Input of the same name. This is how the threshold is configured.

```typescript
@Input()
public appThresholdWarning: number | null = null;
```

Using `HostListener`, the Directive lists for `input` event on the host element. When the user changes the field value, the `inputHandler` method is called. This method gets the field value and checks whether it is over the threshold. The result is stored in the `overThreshold` boolean property.

```typescript
@HostListener('input')
public inputHandler(): void {
  this.overThreshold =
    this.appThresholdWarning !== null &&
    this.elementRef.nativeElement.valueAsNumber > this.appThresholdWarning;
}
```

To access the host element, we use the `ElementRef` dependency. `ElementRef` is a wrapper around the host element’s DOM node. `this.elementRef.nativeElement` yields the DOM node, and `this.elementRef.nativeElement.valueAsNumber` the actual value.

Last but not least, the `overThreshold` property is bound to a class of the same name using `HostBinding`. This is how the class is toggled.

```typescript
@HostBinding('class.overThreshold')
public overThreshold = false;
```

Now that we understand what is going on, we need to replicate the workflow in our test.

First of all, Attribute and Structural Directives need an existing host element they can be applied to. When testing these Directives, we use a **host Component** that renders the host element. For example, the `ThresholdWarningDirective` needs an `<input type="number">` host element.

```typescript
@Component({
  template: `
    <input type="number"
      [appThresholdWarning]="10" />
  `
})
class HostComponent {}
```

We are going to render this Component. We need a standard [Component test setup](#testing-components) using the `TestBed`.

```typescript
describe('ThresholdWarningDirective', () => {
  let fixture: ComponentFixture<HostComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ThresholdWarningDirective, HostComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(HostComponent);
    fixture.detectChanges();
  });

  /* … */
});
```

When configuring the testing Module, we declare both the Directive under test and the host Component. Just like in a Component test, we render the Component and obtain a `ComponentFixture`.

In the following specs, we need to access the input element. Again, we use the standard approach of setting a `data-testid` attribute. Then, we use the [testing helpers](#testing-helpers) to find the element (`findEl`).

For convenience, we pick the input element in the `beforeEach` block after rendering. We save it in a shared variable named `input`.

```typescript
@Component({
  template: `
    <input type="number"
      [appThresholdWarning]="10"
      data-testid="input" />
  `
})
class HostComponent {}

describe('ThresholdWarningDirective', () => {
  let fixture: ComponentFixture<HostComponent>;
  let input: HTMLInputElement;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ThresholdWarningDirective, HostComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(HostComponent);
    fixture.detectChanges();

    input = findEl(fixture, 'input').nativeElement;
  });

  /* … */
});
```

The first spec ensures that the Directive does nothing when the user has not touched the input. Using the element’s [classList](https://developer.mozilla.org/en-US/docs/Web/API/Element/classList), we expect the class `overThreshold` to be absent.

```typescript
it('does not set the class initially', () => {
  expect(input.classList.contains('overThreshold')).toBe(false);
});
```

The next spec expects the class to be present when the user enters a number over the threshold. To simulate the user input, we use our handy testing helper `setFieldValue`.

```typescript
it('adds the class if the number is over the threshold', () => {
  setFieldValue(fixture, 'input', '11');
  fixture.detectChanges();
  expect(input.classList.contains('overThreshold')).toBe(true);
});
```

`setFieldValue` triggers a fake `input` event. This triggers the Directive’s event handler. `11` is greater than the threshold `10`, so the class should be added. We still need to call `detectChanges` so the DOM is updated.

The last spec makes sure that the threshold is still considered as a safe value. No warning should be shown.

```typescript
it('removes the class if the number is at the threshold', () => {
    setFieldValue(fixture, 'input', '10');
  fixture.detectChanges();
    expect(input.classList.contains('overThreshold')).toBe(false);
});
```

This is it! Testing the `ThresholdWarningDirective` is like testing a Component. The difference is that the Component only exists in our test as a host for the Directive.

The full spec for the `ThresholdWarningDirective` looks like this:

```typescript
import { Component } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { findEl, setFieldValue } from './spec-helpers/element.spec-helper';
import { ThresholdWarningDirective } from './threshold-warning.directive';

@Component({
  template: `
    <input type="number"
      [appThresholdWarning]="10"
      data-testid="input" />
  `
})
class HostComponent {}

describe('ThresholdWarningDirective', () => {
  let fixture: ComponentFixture<HostComponent>;
  let input: HTMLInputElement;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ThresholdWarningDirective, HostComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(HostComponent);
    fixture.detectChanges();
    input = findEl(fixture, 'input').nativeElement;
  });

  it('does not set the class initially', () => {
    expect(input.classList.contains('overThreshold')).toBe(false);
  });

  it('adds the class if the number is over the threshold', () => {
    setFieldValue(fixture, 'input', '11');
    fixture.detectChanges();
    expect(input.classList.contains('overThreshold')).toBe(true);
  });

  it('removes the class if the number is at the threshold', () => {
    setFieldValue(fixture, 'input', '10');
    fixture.detectChanges();
    expect(input.classList.contains('overThreshold')).toBe(false);
  });
});
```

<div class="book-sources" markdown="1">
- [ThresholdWarningDirective: implementation code](https://github.com/molily/threshold-warning-directive/blob/master/src/app/threshold-warning.directive.ts )
- [ThresholdWarningDirective: test code](https://github.com/molily/threshold-warning-directive/blob/master/src/app/threshold-warning.directive.spec.ts)
</div>

### Testing Structural Directives

A Structural Directive does not have a template like a Component, but operates on an internal `ng-template`. The Directive renders the template into the DOM programmatically, passing context data to the template.

The prime examples `NgIf` demonstrate what Structural Directives are capable of: The `NgIf` Directive decides whether the template is rendered or not. The `NgFor` Directive walks over a list of items and renders the template repeatedly for each item.

A Structural Directive uses an attribute selector, like `[ngIf]`. The attribute is applied to a host element with the special asterisk syntax, for example `*ngIf`. Internally, this is translated to `<ng-template [ngIf]="…">…</ng-template>`.

This guide assumes that you roughly understand how Structural Directives work and how the microsyntax translates to Directive Inputs. Please refer to the [comprehensive official guide on Structural Directives](https://angular.io/guide/structural-directives).

#### PaginateDirective

We are introducing and testing the `PaginateDirective`, a complex Structural Directive.

`PaginateDirective` works similar to `NgFor`, but does not render all list items at once. It spreads the items over pages, usually called _pagination_. Per default, only 10 items are rendered. The user can turn the pages by clicking on “next” or “previous” buttons.

<button class="load-iframe">
See the PaginateDirective in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://molily.github.io/paginate-directive/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

<div class="book-sources" markdown="1">
- [PaginateDirective: Source code](https://github.com/molily/paginate-directive/blob/master/src/app/paginate.directive.ts)
- [PaginateDirective: Run the app](https://molily.github.io/paginate-directive/)
</div>

Before writing the test, we need to understand the outer structure of `PaginateDirective` first.

The simplest use of the Directive looks like this:

```html
<ul>
  <li *appPaginate="let item of items">
    {% raw %}{{ item }}{% endraw %}
  </li>
</ul>
```

This is similar to the `NgFor` directive. Assuming that `items` is an array of numbers (`[1, 2, 3, …]`), the example above renders the first 10 numbers in the array.

The asterisk syntax `*appPaginate` and the so-called microsyntax `let item of items` is _syntactic sugar_. That is a shorter and nicer way to write something complex. Internally, Angular translates the code to the following:

```html
<ng-template appPaginate let-item [appPaginateOf]="items">
  <li>
    {% raw %}{{ item }}{% endraw %}
  </li>
</ng-template>
```

There is an `ng-template` with an attribute `appPaginate` and an attribute binding `appPaginateOf`. Also there is a template input variable called `item`.

As mentioned, a Structural Directive does not have its own template, but operates on an `ng-template` and renders it programmatically. Above you see the template our `PaginateDirective` works with. The Directive renders the template for each item on the current page.

Now that we have seen Angular’s internal representation, we can understand the structure of the `PaginateDirective` class:

```typescript
@Directive({
  selector: '[appPaginate]',
})
export class PaginateDirective<T> implements OnChanges {
  @Input()
  public appPaginateOf: T[] = [];

  /* … */
}
```

The Directive uses the `[appPaginate]` attribute selector and has an Input called `appPaginateOf`. By writing the microsyntax `*appPaginate="let item **of items**"`, we actually set the `appPaginateOf` Input to the value `items`.

The `PaginateDirective` has a configuration option named `perPage`. It specifies how many items are visible per page. Per default, it is 10. To change it, we set `perPage: …` in the microsyntax:

```html
<ul>
  <li *appPaginate="let item of items; perPage: 5">
    {% raw %}{{ item }}{% endraw %}
  </li>
</ul>
```

This translates to:

```html
<ng-template
  appPaginate
  let-item
  [appPaginateOf]="items"
  [appPaginatePerPage]="5">
  <li>
    {% raw %}{{ item }}{% endraw %}
  </li>
</ng-template>
```

`perPage` translates to an Input named `appPaginatePerPage` in the Directive’s code:

```typescript
@Directive({
  selector: '[appPaginate]',
})
export class PaginateDirective<T> implements OnChanges {
  @Input()
  public appPaginateOf: T[] = [];

  @Input()
  public appPaginatePerPage = 10;

  /* … */
}
```

This is how built-in Structural Directives like `NgIf` and `NgFor` work as well. Now it gets more complicated. Since we want to paginate the items, we need user controls to turn the pages – in addition to rendering the items.

Again, a Structural Directive lacks a template. `PaginateDirective` cannot render the “next” and “previous” buttons itself. And to remain flexible, it should not render specific markup. The Component that uses the Directive should decide how the controls look.

Therefore we pass the controls as a template to the Directive. In particular, we pass a reference to a separate `ng-template`. This will be the second template the Directive operates on.

This is how the controls template could look like:

```html
<ng-template
  #controls
  let-previousPage="previousPage"
  let-page="page"
  let-pages="pages"
  let-nextPage="nextPage"
>
  <button (click)="previousPage()">
    Previous page
  </button>
  {% raw %}{{ page }} / {{ pages }}{% endraw %}
  <button (click)="nextPage()">
    Next page
  </button>
</ng-template>
```

`#controls` sets a [template reference variable](https://angular.io/guide/template-reference-variables). This means we can further reference the template by the name `controls`.

The Directive renders the template with a _context_ object consisting of these properties: `previousPage`, `nextPage`, `page` and `pages`. We can describe the context object with a TypeScript interface that is also part of the Directive’s code:

```typescript
interface ControlsContext {
  page: number;
  pages: number;
  previousPage(): void;
  nextPage(): void;
}
```

`page` is the current page the user seems, `pages` is the total number of pages. `previousPage` and `nextPage` are functions for turning the pages.

The `ng-template` takes these properties from the context and saves them in local variables of the same name:

```
let-previousPage="previousPage"
let-page="page"
let-pages="pages"
let-nextPage="nextPage"
```

This means: Take the context property `previousPage` and make it available in the template under the name `previousPage`. And so on.

The content of the template is rather simple. It renders two buttons for the page turning, using the functions as click handlers. It outputs the current page number and the number of total pages.

```html
<button (click)="previousPage()">
  Previous page
</button>
{% raw %}{{ page }} / {{ pages }}{% endraw %}
<button (click)="nextPage()">
  Next page
</button>
```

Last but not least, we pass the template to the `PaginateDirective` using the microsyntax:

```html
<ul>
  <li *appPaginate="let item of items; perPage: 5; controls: controls">
    {% raw %}{{ item }}{% endraw %}
  </li>
</ul>
```

This translates to:

```html
<ng-template
  appPaginate
  let-item
  [appPaginateOf]="items"
  [appPaginatePerPage]="5"
  [appPaginateControls]="controls">
  <li>
    {% raw %}{{ item }}{% endraw %}
  </li>
</ng-template>
```

`controls: …` in the microsyntax translates to an Input named `appPaginateControls`. This concludes the outer structure:

```typescript
@Directive({
  selector: '[appPaginate]',
})
export class PaginateDirective<T> implements OnChanges {
  @Input()
  public appPaginateOf: T[] = [];

  @Input()
  public appPaginatePerPage = 10;

  @Input()
  public appPaginateControls?: TemplateRef<ControlsContext>;

  /* … */
}
```

The inner workings of the `PaginateDirective` are not relevant for testing, so we will not discuss them in detail here. Please refer to the Angular guide [Write a structural directive](https://angular.io/guide/structural-directives#write-a-structural-directive) for a general explanation.

<div class="book-sources" markdown="1">
- [PaginateDirective: implementation code](https://github.com/molily/paginate-directive/blob/master/src/app/paginate.directive.ts)
</div>

#### PaginateDirective test

We have explored all features of `PaginateDirective` and are now ready to test them!

First, we need a host Component that applies the Structural Directive under test. We let it render a list of 10 numbers, 3 numbers on each page.

```typescript
const items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

@Component({
  template: `
    <ul>
      <li
        *appPaginate="let item of items; perPage: 3"
        data-testid="item"
      >
        {% raw %}{{ item }}{% endraw %}
      </li>
    </ul>
  `,
})
class HostComponent {
  public items = items;
}
```

Since we also want to test the custom controls feature, we need to pass a controls template. We will use the simple controls discussed above.

```typescript
const items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

@Component({
  template: `
    <ul>
      <li
        *appPaginate="let item of items; perPage: 3; controls: controls"
        data-testid="item"
      >
        {% raw %}{{ item }}{% endraw %}
      </li>
    </ul>
    <ng-template
      #controls
      let-previousPage="previousPage"
      let-page="page"
      let-pages="pages"
      let-nextPage="nextPage"
    >
      <button
        (click)="previousPage()"
        data-testid="previousPage">
        Previous page
      </button>
      <span data-testid="page">{% raw %}{{ page }}{% endraw %}</span>
      /
      <span data-testid="pages">{% raw %}{{ pages }}{% endraw %}</span>
      <button
        (click)="nextPage()"
        data-testid="nextPage">
        Next page
      </button>
    </ng-template>
  `,
})
class HostComponent {
  public items = items;
}
```

The template code already contains `data-testid` attributes. This is how we find and examine the elements in the test (see [Querying the DOM with test ids](#querying-the-dom-with-test-ids)).

This is quite a setup, but after all, we want to test the `PaginateDirective` under realistic conditions.

The test suite configures a testing Module, declares both the `HostComponent` and the `PaginateDirective` and renders the `HostComponent`:

```typescript
describe('PaginateDirective', () => {
  let fixture: ComponentFixture<HostComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HostComponent, PaginateDirective],
    }).compileComponents();

    fixture = TestBed.createComponent(HostComponent);
    fixture.detectChanges();
  });

  /* … */
});
```

This is a standard Component test setup – nothing special yet.

The first spec verifies that the Directive renders the items on the first page, in our case the numbers 1, 2 and 3.

We have marked the item element with `data-testid="item"`. We use the [`findEls` test helper](https://github.com/9elements/angular-workshop/blob/master/src/app/spec-helpers/element.spec-helper.ts) to find all elements with the said test id.

We expect to find three items. Then we examine the text content of each item and expect that it matches the item in the number list, respectively.

```typescript
it('renders the items of the first page', () => {
  const els = findEls(fixture, 'item');
  expect(els.length).toBe(3);

  expect(els[0].nativeElement.textContent.trim()).toBe('1');
  expect(els[1].nativeElement.textContent.trim()).toBe('2');
  expect(els[2].nativeElement.textContent.trim()).toBe('3');
});
```

Already, the expectations are repetitive and hard to read. So we introduce a little helper function.

```typescript
function expectItems(
  elements: DebugElement[],
  expectedItems: number[],
): void {
  elements.forEach((element, index) => {
    const actualText = element.nativeElement.textContent.trim();
    expect(actualText).toBe(String(expectedItems[index]));
  });
}
```

This lets us rewrite the spec so it is easier to grasp:

```typescript
it('renders the items of the first page', () => {
  const els = findEls(fixture, 'item');
  expect(els.length).toBe(3);
  expectItems(els, [1, 2, 3]);
});
```

The next spec proves that the controls template is rendered passing the current page and the total number of pages.

The elements have have a `data-testid="page"` and `data-testid="pages"`, respectively. We use the [`expectText` testing helper](#testing-helpers) to check their text content.

```typescript
it('renders the current page and total pages', () => {
  expectText(fixture, 'page', '1');
  expectText(fixture, 'pages', '4');
});
```

Three more specs deal with the controls for turning pages. Let us start with the “next” button.

```typescript
it('shows the next page', () => {
  click(fixture, 'nextPage');
  fixture.detectChanges();

  const els = findEls(fixture, 'item');
  expect(els.length).toBe(3);
  expectItems(els, [4, 5, 6]);
});
```

We simulate a click on the “next” button using the `click` testing helper. Then we start Angular’s change detection so the Component together with the Directive are re-rendered. Finally, we verify that the Directive has rendered the next three items, the numbers 4, 5 and 6.

The spec for the “previous” button looks similar. First, we jump to the second page, then back to the first page.

```typescript
it('shows the previous page', () => {
  click(fixture, 'nextPage');
  click(fixture, 'previousPage');
  fixture.detectChanges();

  const els = findEls(fixture, 'item');
  expect(els.length).toBe(3);
  expectItems(els, [1, 2, 3]);
});
```

We have now covered the Directive’s important behavior. Time for testing edge cases! Does the Directive behave correctly if we click on the “previous” button on the first page and the “next” button on the last page?

```typescript
it('checks the pages bounds', () => {
  click(fixture, 'nextPage'); // -> 2
  click(fixture, 'nextPage'); // -> 3
  click(fixture, 'nextPage'); // -> 4
  click(fixture, 'nextPage'); // -> 4
  click(fixture, 'previousPage'); // -> 3
  click(fixture, 'previousPage'); // -> 2
  click(fixture, 'previousPage'); // -> 1
  click(fixture, 'previousPage'); // -> 1
  fixture.detectChanges();

  // Expect that the first page is visible again
  const els = findEls(fixture, 'item');
  expect(els.length).toBe(3);
  expectItems(els, [1, 2, 3]);
});
```

We jump through all pages just to end up on the first page again.

This is it! Here is the full test code:

```typescript
import { Component, DebugElement } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import {
  findEls,
  expectText,
  click,
} from './spec-helpers/element.spec-helper';
import { PaginateDirective } from './paginate.directive';

const items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

@Component({
  template: `
    <ul>
      <li
        *appPaginate="let item of items; perPage: 3; controls: controls"
        data-testid="item"
      >
        {% raw %}{{ item }}{% endraw %}
      </li>
    </ul>
    <ng-template
      #controls
      let-previousPage="previousPage"
      let-page="page"
      let-pages="pages"
      let-nextPage="nextPage"
    >
      <button (click)="previousPage()" data-testid="previousPage">
        Previous page
      </button>
      <span data-testid="page">{% raw %}{{ page }}{% endraw %}</span>
      /
      <span data-testid="pages">{% raw %}{{ pages }}{% endraw %}</span>
      <button (click)="nextPage()" data-testid="nextPage">
        Next page
      </button>
    </ng-template>
  `,
})
class HostComponent {
  public items = items;
}

function expectItems(
  elements: DebugElement[],
  expectedItems: number[],
): void {
  elements.forEach((element, index) => {
    const actualText = element.nativeElement.textContent.trim();
    expect(actualText).toBe(String(expectedItems[index]));
  });
}

describe('PaginateDirective', () => {
  let fixture: ComponentFixture<HostComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [HostComponent, PaginateDirective],
    }).compileComponents();

    fixture = TestBed.createComponent(HostComponent);
    fixture.detectChanges();
  });

  it('renders the items of the first page', () => {
    const els = findEls(fixture, 'item');
    expect(els.length).toBe(3);
    expectItems(els, [1, 2, 3]);
  });

  it('renders the current page and total pages', () => {
    expectText(fixture, 'page', '1');
    expectText(fixture, 'pages', '4');
  });

  it('shows the next page', () => {
    click(fixture, 'nextPage');
    fixture.detectChanges();

    const els = findEls(fixture, 'item');
    expect(els.length).toBe(3);
    expectItems(els, [4, 5, 6]);
  });

  it('shows the previous page', () => {
    click(fixture, 'nextPage');
    click(fixture, 'previousPage');
    fixture.detectChanges();

    const els = findEls(fixture, 'item');
    expect(els.length).toBe(3);
    expectItems(els, [1, 2, 3]);
  });

  it('checks the pages bounds', () => {
    click(fixture, 'nextPage'); // -> 2
    click(fixture, 'nextPage'); // -> 3
    click(fixture, 'nextPage'); // -> 4
    click(fixture, 'previousPage'); // -> 3
    click(fixture, 'previousPage'); // -> 2
    click(fixture, 'previousPage'); // -> 1
    fixture.detectChanges();

    // Expect that the first page is visible again
    const els = findEls(fixture, 'item');
    expect(els.length).toBe(3);
    expectItems(els, [1, 2, 3]);
  });
});
```

`PaginateDirective` is a complex Structural Directive that requires a complex test setup. Once we have created a suitable host Component, we can test it using our familiar testing helpers. The fact that the logic resides in the Directive is not relevant for the specs.

<div class="book-sources" markdown="1">
- [PaginateDirective: implementation code](https://github.com/molily/paginate-directive/blob/master/src/app/paginate.directive.ts)
- [PaginateDirective: test code](https://github.com/molily/paginate-directive/blob/master/src/app/paginate.directive.spec.ts)
</div>

## Testing Pipes

An Angular Pipe is a special function that is called from a Component template. Its purpose is to transform a value: You pass a value to the Pipe, the Pipe computes a new value and returns it.

The name Pipe originates from the vertical bar “\|” that sits between the value and the Pipe name. The concept as well as the “\|” syntax originates from Unix pipes and Unix shells.

In this example, the value from `user.birthday` is transformed by the `date` Pipe:

```
{% raw %}{{ user.birthday | date }}{% endraw %}
```

Pipes are often used for internationalization, including translation of labels and messages, formatting of dates, times and various numbers. In these cases, the Pipe input value should not be shown to the user. The output value is user-readable.

Examples for built-in Pipes are `DatePipe`, `CurrencyPipe` and `DecimalPipe`. They format dates, amounts of money and numbers, respectively, according to the localization settings. Another well-known Pipe is the `AsyncPipe` which unwraps an Observable or Promise.

Most Pipes are _pure_, meaning they merely take a value and compute a new value. They do not have _side effects_: They do not change the input value, they do not hold any state and they do not change the state of other application parts. Like pure functions, pure Pipes are relatively easy to test.

### GreetPipe

Let us study the structure of a Pipe first to find ways to test it. In essence, a Pipe is class with a public `transform` method. Here is a simple Pipe that expects a name and greets the user.

```typescript
import { Pipe, PipeTransform } from '@angular/core';

@Pipe({ name: 'greet' })
export class GreetPipe implements PipeTransform {
  transform(name: string): string {
    return `Hello, ${name}!`;
  }
}
```

In a Component template, we transform a value using the Pipe:

```
{% raw %}{{ 'Julie' | greet }}{% endraw %}
```

The `GreetPipe` take the string `'Julie'` and computes a new string, `'Hello , Julie!'`.

There are two important ways to test a Pipe:

1. Create an instance of the Pipe class manually without the `TestBed`. Then call the `transform` method.
2. Set up a `TestBed`. Render a host Component that uses the Pipe. Then check the text content in the DOM.

The first way requires minimal setup, is fast and straight-forward. The second closely mimics how the Pipe is used in practice. It also tests the name of the Pipe, declared in the `@Pipe()` decorator.

Both ways allow to test Pipes that depend on Services. Either we provide the original dependencies, writing an integration test. Or we provide fake dependencies, writing a unit test.

### GreetPipe test

The `GreetPipe` does not have any dependencies. We opt for the first way and write a unit test which examines the single instance.

First, we create a Jasmine test suite. In a `beforeEach` block, we create an instance of `GreetPipe`. In the specs, we scrutinize the `transform` method.

```typescript
describe('GreetPipe', () => {
  let greetPipe: GreetPipe;

  beforeEach(() => {
    greetPipe = new GreetPipe();
  });

  it('says Hello', () => {
    expect(greetPipe.transform('Julie')).toBe('Hello , Julie!');
  });
});
```

We call the `transform` method with the string `'Julie'` and expect the output `'Hello, Julie!'`.

This is everything that needs to be tested in the `GreetPipe` example. If the `transform` method contains more logic that needs to be tested, we add more specs that call the method with different input.

### Testing Pipes with dependencies

Many Pipes depend on local settings, including the user interface language, date and number formatting rules, as well as the selected country, region or currency.

We are introducing and testing the `TranslatePipe`, a complex Pipe with a Service dependency.

<button class="load-iframe">
See the TranslatePipe in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://molily.github.io/translate-pipe/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

<div class="book-sources" markdown="1">
- [TranslatePipe: Run the app](https://molily.github.io/translate-pipe/)
- [TranslatePipe: Source code](https://github.com/molily/translate-pipe)
</div>

The example application lets you change the user interface language during runtime. A popular solution for this task is the [ngx-translate](https://github.com/ngx-translate/core) library. For the purpose of this guide, we will adopt ngx-translate’s proven approach but implement and test the code ourselves.

#### TranslateService

The current language is stored in the `TranslateService`. This Service also loads and holds the translations for the current language. The translations are a map of keys and translation strings. For example, the key `greeting` translates to the user-facing label “s ”.

The `TranslateService` looks like this:

```typescript
import { HttpClient } from '@angular/common/http';
import { EventEmitter, Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { map, take } from 'rxjs/operators';

export interface Translations {
  [key: string]: string;
}

@Injectable()
export class TranslateService {
  /** The current langage */
  private currentLang = 'en';

  /** Translations for the current language */
  private translations: Translations | null = null;

  /** Emits when the language change */
  public onTranslationChange = new EventEmitter<Translations>();

  constructor(private http: HttpClient) {
    this.loadTranslations(this.currentLang);
  }

  /** Changes the language */
  public use(language: string): void {
    this.currentLang = language;
    this.loadTranslations(language);
  }

  /** Translates a key asynchronously */
  public get(key: string): Observable<string> {
    if (this.translations) {
      return of(this.translations[key]);
    }
    return this.onTranslationChange.pipe(
      take(1),
      map((translations) => translations[key])
    );
  }

  /** Loads the translations for the given language */
  private loadTranslations(language: string): void {
    this.translations = null;
    this.http
      .get<Translations>(`assets/${language}.json`)
      .subscribe((translations) => {
        this.translations = translations;
        this.onTranslationChange.emit(translations);
      });
  }
}
```

This is what the Service provides:

1. `use` method: Set the current language and load the translations as JSON via HTTP.
2. `get` method: Get the translation for a key.
3. `onTranslationChange` `EventEmitter`: Observing changes on the translations as a result of `use`.

In the example project, the `AppComponent` depends on the `TranslateService`. On creation, the Service loads the English translations. The `AppComponent` renders a select field allowing the user to change the language.

<div class="book-sources" markdown="1">
- [TranslateService: implementation code](https://github.com/molily/translate-pipe/blob/master/src/app/translate.service.ts)
- [TranslateService: test code](https://github.com/molily/translate-pipe/blob/master/src/app/translate.service.spec.ts)
</div>

#### TranslatePipe

To show a translated label, a Component could call the Service’s `get` method manually for each translation key. Instead, we introduce the `TranslatePipe` to do the heavy lifting. It lets us write:

```
{% raw %}{{ 'greeting' | translate }}{% endraw %}
```

This translates the key `'greeting'`.

Here is the code:

```typescript
import {
  ChangeDetectorRef,
  OnDestroy,
  Pipe,
  PipeTransform,
} from '@angular/core';
import { Subscription } from 'rxjs';

import { TranslateService } from './translate.service';

@Pipe({
  name: 'translate',
  pure: false,
})
export class TranslatePipe implements PipeTransform, OnDestroy {
  private lastKey: string | null = null;
  private translation: string | null = null;

  private onTranslationChangeSubscription: Subscription;
  private getSubscription: Subscription | null = null;

  constructor(
    private changeDetectorRef: ChangeDetectorRef,
    private translateService: TranslateService
  ) {
    this.onTranslationChangeSubscription = this.translateService.onTranslationChange.subscribe(
      () => {
        if (this.lastKey) {
          this.getTranslation(this.lastKey);
        }
      }
    );
  }

  public transform(key: string): string | null {
    if (key !== this.lastKey) {
      this.lastKey = key;
      this.getTranslation(key);
    }
    return this.translation;
  }

  private getTranslation(key: string): void {
    this.getSubscription?.unsubscribe();
    this.getSubscription = this.translateService
      .get(key)
      .subscribe((translation) => {
        this.translation = translation;
        this.changeDetectorRef.markForCheck();
        this.getSubscription = null;
      });
  }

  ngOnDestroy(): void {
    this.onTranslationChangeSubscription.unsubscribe();
    if (this.getSubscription) {
      this.getSubscription.unsubscribe();
    }
  }
}
```

The `TranslatePipe` is _impure_ because the translations are loaded asynchronously. When called the first time, the `transform` method cannot return the correct translation synchronously. It calls the `TranslateService`’s `get` method which returns an Observable.

Once the translation is loaded, the `TranslatePipe` saves it and notifies the Angular change detector. In particular, it marks the corresponding view as changed by calling [`ChangeDetectorRef`’s `markForCheck`](https://angular.io/api/core/ChangeDetectorRef#markForCheck) method.

In turn, Angular re-evaluates the expression that uses the Pipe, for example `'greeting' | translate`, and calls the `transform` method again. Finally, `transform` returns the right translation synchronously.

The same process happens when the user changes the language and new translations are loaded. The Pipe subscribes to `TranslateService`’s `onTranslationChange` and calls the `TranslateService` again to get the new translation.

<div class="book-sources" markdown="1">
- [TranslatePipe: implementation code](https://github.com/molily/translate-pipe/blob/master/src/app/translate.pipe.ts)
- [Angular reference: ChangeDetectorRef ](https://angular.io/api/core/ChangeDetectorRef)
</div>

#### TranslatePipe test

Now let us test the `TranslatePipe`! We can either write a test that integrates the `TranslateService` dependency. Or we write a unit test that replaces the dependency with a fake.

`TranslateService` performs HTTP requests to load the translations. We should avoid these side effects when testing `TranslatePipe`. So let us fake the Service to write a unit test.

```typescript
class FakeTranslateService implements Partial<TranslateService> {
  public onTranslationChange = new EventEmitter<Translations>();
  public get(key: string): Observable<string> {
    return of(`Translation for ${key}`);
  }
}
```

The fake is a partial implementation of the original. The `TranslatePipe` under test only needs the `onTranslationChange` property and the `get` method. The latter returns a fake translation including the key so we can test that the key was passed correctly.

Now we need to decide whether to test the Pipe directly or within a host Component. Both ways are possible and no solution is signficantly easier or more robust. You will find both solutions in the example project. In this guide, we will discuss the solution with `TestBed` and host Component.

Let us start with the host Component:

```typescript
const key1 = 'key1';
const key2 = 'key2';

@Component({
  template: '{% raw %}{{ key | translate }}{% endraw %}',
})
class HostComponent {
  public key = key1;
}
```

This component uses the `TranslatePipe` to translate its `key` property. Per default, it is set to `key1`. There is also a second constant `key2` for testing the key change later.

Let us set up the test suite:

```typescript
describe('TranslatePipe: with TestBed and HostComponent', () => {
  let fixture: ComponentFixture<HostComponent>;
  let translateService: TranslateService;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [TranslatePipe, HostComponent],
      providers: [
        { provide: TranslateService, useClass: FakeTranslateService },
      ],
    }).compileComponents();

    translateService = TestBed.inject(TranslateService);
    fixture = TestBed.createComponent(HostComponent);
  });

  /* … */
});
```

In the testing module, we declare the Pipe under test and the `HostComponent`. For the `TranslateService`, we provide the `FakeTranslateService` instead. Just like in a Component test, we create the Component and examine the rendered DOM.

What needs to be tested? Obviously, we need to check that `{% raw %}{{ key | translate }}{% endraw %}` evaluates to `key1`. There are two cases that needs to be tested though:

As described above, `TranslatePipe`’s `transform` calls `TranslateService`’s `get`, which returns an Observable. If the translations are already loaded, the Observable completes immediately and `transform` is able to return the correct translation synchronously.

If the translations are pending, the Pipe returns `null` (or an outdated translation) and the Observable completes afterwards. A change detection cycle with a second call to `transform` is necessary to render to correct translation.

In the test, we write specs for both scenarios:

```typescript
it('translates the key, sync service response', /* … */);
it('translates the key, async service response', /* … */);
```

Let us start with the first case. The spec is straight-forward.

```typescript
it('translates the key, sync service response', () => {
  fixture.detectChanges();
  expectContent(fixture, 'Translation for key1');
});
```

Remember, the provided `FakeTranslateService` returns an Observable created with RxJS’ `of`.

```typescript
return of(`Translation for ${key}`);
```

This Observable emits one “next” value and completes immediately. This mimics the first case in which the Service has already loaded the translations.

We merely need to call `detectChanges`. Angular calls `TranslatePipe`’s `transform` method, which calls `FakeTranslateService`’s `get`. The Observable emits the translation right away and `transform` passes it through.

Then we use the [`expectContent` Component helper](https://github.com/molily/translate-pipe/blob/master/src/app/spec-helpers/element.spec-helper.ts) to test the DOM output.

To test the second case is trickier because we need to simulate that the Observable emits asynchronously. There are numerous ways to do this. We are using [RxJS’ `delay` operator](https://rxjs-dev.firebaseapp.com/api/operators/delay) for simplicity.

At the same time, we are writing an asynchronous spec. That is, Jasmine needs to wait for the Observable and the expectations before the spec is finished.

Again, there are several ways how to accomplish this. We opt for Angular’s `fakeAsync` and `tick` functions, an easy and powerful way to test asynchronous behavior.

`fakeAsync` freezes time. It prevents asynchronous tasks created by timers, Promises, Observables etc. from being executed. We then use the `tick` function to simulate the passage of time. All scheduled asynchronous tasks will be executed. We can then test their effect.

The great thing about `fakeAsync` and `tick` is that the passage of time is only virtual. Even if 10 seconds pass in the simulation, the spec may still complete in a few milliseconds.

`fakeAsync` wraps the function passed to `it`:

```typescript
it('translates the key, async service response', fakeAsync(() => {
  /* … */
});
```

Next, we need to change the behavior of `FakeTranslateService`’s `get` to make it asynchronous.

```typescript
it('translates the key, async service response', fakeAsync(() => {
  translateService.get = (key) =>
    of(`Async translation for ${key}`).pipe(delay(100));
  /* … */
});
```

We still use `of`, but we delay the output by 100 milliseconds. The exact number does not matter as long as there is _some_ delay greater or equal 1.

Now, we can call `detectChanges` for the first time.

```typescript
it('translates the key, async service response', fakeAsync(() => {
  translateService.get = (key) =>
    of(`Async translation for ${key}`).pipe(delay(100));
  fixture.detectChanges();
  /* … */
});
```

`TranslatePipe`’s `transform` is called for the first time and returns `null` since the Observable does not emit a value immediately. So we expect that the output is empty:

```typescript
it('translates the key, async service response', fakeAsync(() => {
  translateService.get = (key) =>
    of(`Async translation for ${key}`).pipe(delay(100));
  fixture.detectChanges();
  expectContent(fixture, '');
  /* … */
});
```

Here comes the interesting part. We want the Observable to emit the value now. We simulate the passage of 100 milliseconds with `tick(100)`.

```typescript
it('translates the key, async service response', fakeAsync(() => {
  translateService.get = (key) =>
    of(`Async translation for ${key}`).pipe(delay(100));
  fixture.detectChanges();
  expectContent(fixture, '');

  tick(100);
  /* … */
});
```

This causes the Observable to emit the translation and complete. The `TranslatePipe` receives the translation and saves it.

To see a change in the DOM, we need to start a change detection cycle. `transform` is called for the second time and returns the correct translation.

```typescript
it('translates the key, async service response', fakeAsync(() => {
  translateService.get = (key) =>
    of(`Async translation for ${key}`).pipe(delay(100));
  fixture.detectChanges();
  expectContent(fixture, '');

  tick(100);
  fixture.detectChanges();
  expectContent(fixture, 'Async translation for key1');
}));
```

Testing these details may seem pedantic at first. But the logic in `TranslatePipe` exists for a reason. Therefore we should test both cases.

There are two specs left to write:

```typescript
it('translates a changed key', /* … */);
it('updates on translation change', /* … */);
```

The `TranslatePipe` stores the last key and the last translation. This necessary because it receives the translation asynchronously. Also, Angular calls `transform` several times with the same key. Since `TranslatePipe` is _impure_, Angular cannot simply cache the result.

When `translate` is called with a different key, the `TranslatePipe` needs to fetch the new translation. We simulate this case by changing the `HostComponent`’s `key` property from `key1` to `key2`.

```typescript
it('translates a changed key', () => {
  fixture.detectChanges();
  fixture.componentInstance.key = key2;
  fixture.detectChanges();
  expectContent(fixture, 'Translation for key2');
});
```

After another change detection cycle, the DOM contains the updated translation for `key2`.

Last but no least, the Pipe needs to fetch a new translation when the user has changed the language and new translations have been loaded. For this purpose, the Pipe subscribes to the Service’s `onTranslationChange` emitter.

Our `FakeTranslateService` supports this `EventEmitter` as well, hence we call the `emit` method to simulate a translation change. Before, we let the Service return a different translation in order to see a change in the DOM.

```typescript
it('updates on translation change', () => {
  fixture.detectChanges();
  translateService.get = (key) => of(`New translation for ${key}`);
  translateService.onTranslationChange.emit({});
  fixture.detectChanges();
  expectContent(fixture, 'New translation for key1');
});
```

We made it! Writing these specs is challenging without doubt.

`TranslateService` and `TranslatePipe` are non-trivial examples with a proven API. The original classes from ngx-translate are more powerful. If you look for a robust and flexible solution, it is recommended to use the ngx-translate library directly.

<div class="book-sources" markdown="1">
- [TranslatePipe: test code](https://github.com/molily/translate-pipe/blob/master/src/app/translate.pipe.spec.ts)
- [Angular reference: fakeAsync](https://angular.io/api/core/testing/fakeAsync)
- [Angular reference: tick](https://angular.io/api/core/testing/tick)
- [RxJS: delay operator](https://rxjs-dev.firebaseapp.com/api/operators/delay)
</div>

## Testing Modules

Modules are central parts of Angular applications. Often they contain important setup code. Yet they are hard to test since there is no typical logic, only sophisticated configuration.

Angular Modules are classes, but most of the time, the class itself is empty. The essence lies in the metadata set with `@NgModule({ … })`.

We could sneak into the metadata and check whether certain Services are provided, third-party Modules are imported, and Components are exported. Such a test would simply mirror the implementation. This does not give you more confidence, it only increases the cost of change.

Should we write tests for Modules at all? If there is a reference error in the Module, the compilation step (`ng build`) fails before the automated tests scrutinize the build. “Failing fast” is good from a software quality perspective.

There are certain Module errors that surface not before runtime. These can be caught with a _smoke test_. Given this module:

```typescript
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ExampleComponent } from './example.component';

@NgModule({
  declarations: [ExampleComponent],
  imports: [CommonModule],
})
export class FeatureModule {}
```

We write this smoke test:

```typescript
import { TestBed } from '@angular/core/testing';
import { FeatureModule } from './example.module';

describe('FeatureModule', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      imports: [FeatureModule],
    });
  });

  it('initializes', () => {
    const module = TestBed.inject(FeatureModule);
    expect(module).toBeTruthy();
  });
});
```

The integration test uses the `TestBed` to import the Module under test. It verifies that no error occurs when importing the Module.

## End-to-end testing

We have successfully written unit and integration tests using Karma, Jasmine and Angular’s own testing tools. These precise tests give confidence that a single application part – like a Component or Service - or a group of connected parts work as intended.

Karma and Jamine tests take a technical perspective. They focus on the front-end JavaScript code alone and run it in a controlled and isolated test environment. What is really important though is whether the whole application works _for the user_.

The most effective and reliable way to ensure a working application is _manual testing_: A dedicated software tester walks through the application feature by feature, case by case according to a test plan.

Manual tests are slow, labor-intensive and cannot be repeated often. They are unspecific from a developer perspective: If the test fails, we cannot easily pin down what part of the application is responsible or what code change causes the regression.

We need automated tests that take the user’s perspective. This is what **end-to-end (E2E) tests** do.

### Strengths of end-to-end tests

As discussed in [distribution of testing efforts](#distribution-of-testing-efforts), all types of automated tests have pros and cons. Unit and integration tests are fast and reliable, but do not guarantee a working application. End-to-end test are slow and often fail incorrectly, but they assess the fitness of the application as a whole.

When all parts of the application come together, an new type of bugs arise. Often these bugs have to do with timing and order of events, like network latency and race conditions.

The unit and integration tests we wrote worked with a fake back-end. We send fake HTTP requests and respond with fake data. We made an effort to keep the originals and fakes on par.

It is much harder to keep the front-end code as well as the fakes in sync with the actual API endpoints and responses from the back-end. Even if the front-end and the back-end share type information about the transferred data, there will be mismatches.

It is the goal of end-to-end tests to catch these bugs that cannot be caught by other automated tests.

### Deploying the app for end-to-end test

Back-end frameworks typically support environment configurations for development, testing and production. End-to-end tests require a testing environment that closely resembles the production environment. You need to deploy the full application, including the front-end and the relevant back-end parts.

The database needs to be filled with pre-fabricated fake data. With each run of the end-to-end tests, you need to reset the database to a defined initial state.

The back-end services need to answer requests with deterministic, canned responses. Third-party dependencies need to be set up so they return realistic data but do not compromise production data.

Since this guide is not about DevOps, we will not go into details here and focus on writing end-to-end tests.

### How end-to-end tests work

An end-to-end test tries to mimic how a user interacts with the application. Typically, the test engine launches an ordinary browser and controls it remotely.

Once the browser is started, the end-to-end test navigates to the application’s URL, reads the page content and makes pointer and keyboard input. For example, the test fills out a form and clicks on the submit button.

Just like unit and integration tests, the end-to-end test then makes expectations: Does the page include a the right content? Did the URL change? This way, whole features and user interfaces are examined.

### End-to-end testing frameworks

Frameworks for end-to-end tests allow navigating to URLs, simulating user input and inspecting the page content. Apart from that, they have little in common. The test syntax and the way the tests are run differ widely.

There are two categories of end-to-end testing frameworks: Those that use WebDriver and those that do not.

The [WebDriver protocol](https://www.w3.org/TR/webdriver/) defines a way to control a browser remotely with a set of commands. It originates from the Selenium browser automation project and is now developed at the World Wide Web Consortium (W3C).

All common browsers support the WebDriver protocol and can be controlled remotely. The most important WebDriver commands are:

- Navigate to a given URL
- Find one or more elements in the DOM
- Get information about a found element:
  - Get an element attribute or property
  - Get the element’s text content
- Click on an element
- Send keyboard input to a form field
- Execute arbitrary JavaScript code

WebDriver is a key technology most end-to-end testing frameworks depend on. The main benefit of WebDriver is that tests can be run in different browsers, even simultaneously.

WebDriver is a high-level, generic, HTTP-based protocol. It connects the test running on one machine with a browser possibly running on another machine. The level of control over the browser is limited.

Not all frameworks build on WebDriver. Some frameworks integrate more directly into the browser. This makes them more reliable, less complex, but also less flexible since they only support few browsers.

In this guide, we will discuss two frameworks, one of each category: _Protractor_, which is based on WebDriver, and _Cypress_, which does not use WebDriver.

<div class="book-sources" markdown="1">
- [WebDriver protocol](https://www.w3.org/TR/webdriver/)
- [Protractor: Official web site](http://www.protractortest.org/)
- [Cypress: Official web site](https://www.cypress.io/)
</div>

### Protractor

Protractor is an end-to-end testing framework based on WebDriver, made for Angular applications.

Protractor is an official Angular project and also originates from Google. In a new project created with the Angular CLI, Protractor is already installed as the default end-to-end testing framework.

Just like the unit and integration test we have written, Protractor uses Jasmine for test suites and specs. If you are familiar with Jasmine, you quickly get into writing Protractor tests.

Protractor integrates well with an Angular app under test. Protractor waits for Angular to update the page before continuing with the next  WebDriver command. This feature seeks to make testing Angular applications more robust.

Despite all these benefits, **this guide does not recommend using Protractor for new projects**. Why so?

First of all, Protractor is practically unmaintained. The future of the project is unclear. It seems to have lost the Google backing.

Second, the project underwent fundamental changes that curtail its usability.

Protractor has a feature called _WebDriver control flow_. While WebDriver commands are in fact asynchronous, this feature allows you to write tests as if the code was synchronous.

The control flow implementation has lead to inconsistencies and bugs. The underlying WebDriverJS library removed the feature, so Protractor deprecated it as well. Today, Protractor recommends to embrace the asynchronous nature of end-to-end tests.

All Protractor commands return Promises. You are advised to use `async` / `await` to wait for a command to finish. But a lot of Protractor examples, tutorials and the default configuration still propagate the control flow.

Declaring this feature obsolete was inevitable, but also eliminated a useful feature. Protractor’s contenders, namely Cypress and Webdriver.io, still have such a feature.

If you disable the control flow as recommended, you practically need to disable the “wait for Angular” feature as well. This means both key Protractor features have lapsed.

Protractor is a great project, but today there is no compelling reason to choose Protractor over its competitors.

If you are looking for Protractor examples, you will find tests in different flavors for the Counter and Flickr search. They are not explained in this guide though.

<div class="book-sources" markdown="1">
- [Counter: End-to-end tests with Protractor](https://github.com/9elements/angular-workshop/tree/master/e2e)
- [Flickr search: End-to-end tests with Protractor](https://github.com/9elements/angular-flickr-search/tree/master/e2e)
- [Protractor: The WebDriver Control Flow](https://www.protractortest.org/#/control-flow)
- [Protractor: async/await](https://www.protractortest.org/#/async-await)
</div>

### Cypress

Cypress is an end-to-end testing framework that is not based on WebDriver. There are no Angular-specific features. Any web site can be tested with Cypress.

WebDriver-based testing solutions are flexible and powerful but turned out to be slow and unreliable. Cypress aims to improve both the developing experience and the reliability of end-to-end tests.

Cypress employs a fundamentally different architecture. A Node.js application starts the browser. The browser is not remotely-controlled, but the tests run directly in the browser, supported by a browser plugin. The test runner provides a powerful user interface for inspecting an debugging tests right in the browser.

Cypress is the product of one company, Cypress.io, Inc. The test runner we are going to use is open source and free of charge.

The company generates revenue with an additional paid service: The Cypress dashboard manages test runs recorded in a continuous integration environment. You do not have to subscribe to this service to write and run Cypress tests.

From our perspective, Cypress has several drawbacks.

First, Cypress requires some initial setup. While Cypress works well with Angular applications, it is not pre-installed like Protractor is.

Second, Cypress uses Mocha and Chai for writing tests, not Jasmine. While both serve the same purpose, you have to learn the subtle differences. If you use Jasmine for unit and integration tests, there will be an inconsistency in your tests.

Third, at the time of writing, Cypress only supports Firefox as well as Chromium-based browsers like Chrome and Microsoft Edge. It does not support Safari, legacy Edge or even Internet Explorer.

Cypress is not simply better than WebDriver-based frameworks. It tries to solve their problems by narrowing the scope and making trade-offs.

That being said, this guide recommends to use Cypress for testing Angular applications. Cypress is well-maintained and well-documented. With Cypress, you can write valueable end-to-end tests with little effort.

In case you do need a WebDriver-based framework, have a look at Webdriver.io instead.

<div class="book-sources" markdown="1">
- [Cypress: Trade-offs](https://docs.cypress.io/guides/references/trade-offs.html)
- [Cypress: Key differences](https://docs.cypress.io/guides/overview/key-differences.html)
</div>

### Installing Cypress

An easy way to add Cypress to an existing Angular CLI project is the [Cypress Angular Schematic](https://github.com/briebug/cypress-schematic).

In your Angular project directory, run this shell command::

```
ng add @briebug/cypress-schematic
```

This command does three important things:

1. Add Cypress and auxiliary npm packages to package.json.
2. Create a sub-directory named `cypress` with a scaffold for your tests.
3. Change the `angular.json` configuration file to add `ng run` commands.

The output looks like this:

```
Installing packages for tooling via npm.
Installed packages for tooling via npm.
? Would you like to remove Protractor from the project? No
CREATE cypress.json (48 bytes)
CREATE cypress/tsconfig.json (89 bytes)
CREATE cypress/integration/spec.ts (158 bytes)
CREATE cypress/plugins/cy-ts-preprocessor.js (425 bytes)
CREATE cypress/plugins/index.js (158 bytes)
CREATE cypress/support/commands.ts (1378 bytes)
CREATE cypress/support/index.ts (651 bytes)
UPDATE package.json (1396 bytes)
UPDATE angular.json (4378 bytes)
✔ Packages installed successfully.
```

The schematic asks if you would like to remove Protractor from the project. If you opt for “Yes”, the Protractor directory `e2e` is removed and the `ng e2e` command will start Cypress instead. If you opt for “No”, the `e2e` directory will remain untouched.

If you are unsure, just answer “No” so you can revive the Protractor tests at any time if you feel the need.

### Writing an end-to-end test with Cypress

In the project directory, you will find a sub-directory called `cypress`. It contains:

- A `tsconfig.json` TypeScript configuration file for all `.ts` files in the directory,
- a `support` directory for custom commands,
- a `plugin` directory for Cypress plugins and
- an `integration` directory for the actual end-to-end tests.

The test files in `integration` are TypeScript files with the extension `.ts`.

The tests itself are structured with the test framework Mocha. The assertions (also called expectations) are written using Chai. Mocha and Chai is a popular combination. They roughly do the same as Jasmine, but are much more flexible and rich in features.

If you have written unit tests with Jasmine before, the Mocha structure will be familiar to you. A test file contains one or more suites declared with `describe('…', () => { /* … */})`. Typically, one file contains one `describe` block, possible with nested `describe` blocks.

Inside `describe`, the blocks `beforeEach`, `afterEach`, `beforeAll`, `afterAll` and `it` can be used similar to Jasmine tests.

This brings us to the following end-to-end test structure:

```typescript
describe('… Feature description …', () => {
  beforeEach(() => {
    // Navigate to the page
  });

  it('… User interaction description …', () => {
    // Interact with the page
    // Assert something about the page content
  });
});
```

### Testing the Counter Component

Step by step, we are going to write end-to-end tests for the counter example application.

<div class="book-sources" markdown="1">
- [Counter Component: Source code](https://github.com/9elements/angular-workshop)
- [Counter Component: Run the app](https://9elements.github.io/angular-workshop/)
</div>

<button class="load-iframe">
See the counter Component app in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-workshop/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

As a start, let us write a minimal test that checks the document title. In the Counter repository, we create a file called `cypress/integration/counter.ts`. It looks like this:

```typescript
describe('Counter', () => {
  beforeEach(() => {
    cy.visit('http://localhost:4200');
  });

  it('has the correct title', () => {
    cy.title().should('equal', 'Angular Workshop: Counters');
  });
});
```

Cypress commands are methods of the `cy` namespace object. Here, we are using two commands, `visit` and `title`.

`cy.visit` orders the browser to visit the given URL. In this case, we use the full URL of the development server. Later, we are going to set a `baseUrl` in the Cypress configuration so we can use paths like `/`. Then, Cypress will append the path to the `baseUrl`.

`cy.title` returns the page title. To be specific, it returns a Cypress **Chainer**. that wraps a string. A Chainer is an asynchronous wrapper around values, mostly DOM elements but also other values.

The Chainer has a `should` method for creating an assertion. Cypress relays the call to the Chai library to verify the assertion. We pass two parameters, `'equal'` and the expected title string. `equal` creates an assertion that the subject value (the page title) equals to the given value (`'Angular Workshop: Counters'`). `equal` uses the familiar `===` comparison.

This `should` style of assertions is different from Jasmine expectations, like `expect(…).toBe(…)`. Confusingly, Chai supports three different assertion styles: `should`, `assert`, but also `expect`. In Cypress, you will typically use the `should` method on Chainers and `expect` on other values.

<div class="book-sources" markdown="1">
- [Cypress API reference: cy.visit](https://docs.cypress.io/api/commands/visit.html)
- [Cypress API reference: cy.title](https://docs.cypress.io/api/commands/title.html)
- [Cypress API reference: cy.visit](https://docs.cypress.io/guides/references/assertions.html)
- [Chai API reference: should style assertions](https://www.chaijs.com/api/bdd/)
- [Chai API reference: equal](https://www.chaijs.com/api/bdd/#method_equal)
</div>

### Running the Cypress tests

Save the example code above as `cypress/integration/counter.ts`

Cypress has two main ways to run the end-to-end tests:

1. `cypress run` – Non-interactive test runner. Runs the tests in a “headless” browser. This means the browser window is not visible. The tests are run once, then the browser is closed and the shell command finishes. You can see the test results in the shell output. This command is typically used in the continuous integration environment.

2. `cypress open` – Interactive test runner. Opens a window where you can select which tests to run and which browser to use. The browser window is visible and it remains visible after completion. You can see the test results the browser window. If you make changes on the test files, Cypress automatically re-runs the tests. This command is typically used in the development environment.

The Cypress schematic we have installed wrap these commands so they integrate with Angular.

- `ng run $project-name$:cypress-run` – Starts an Angular development server (`ng serve`), then calls `cypress run`.
- `ng run $project-name$:cypress-open` – Starts an Angular development server (`ng serve`), then calls `cypress open`.

`$project-name$` is a placeholder. Insert the name of the respective Angular project. This is typically the same as the directory name. If not, it can be found in `angular.json` in the `projects` object.

For example, the Counter example has the project name `angular-workshop`. Therefore, the commands are `ng run angular-workshop:cypress-run` and `ng run angular-workshop:cypress-open`.

To run our first Counter end-to-end test, run:

```
ng run angular-workshop:cypress-open
```

This will open the test runner:

<img src="/img/robust-angular/cypress-open.png" alt="Interactive Cypress test runner" class="image-max-full">

In the main window pane, all tests are listed. To run a single test, just click on it. To run all, click the “Run all specs”. On the top-right, you can select the browser. Chrome, Firefox and Edge will appear in the list given you have installed them on your machine.

This graphical user interface is an Electron application, a framework based on Chromium, the open source foundation of Chrome. RegardYou can always run your tests in Electron as well since it ships with Cypress.

Suppose you run the tests in Chrome, the in-browser test runner looks like this:

<img src="/img/robust-angular/cypress-browser.png" alt="Cypress test runner in the browser" class="image-max-full">

On the left side, the specs are listed. On the right side, the web page under test is seen.

By clicking on a spec name, you can see all commands and assertions in the spec.

<img src="/img/robust-angular/cypress-test-runner-tests.png" alt="Opened Cypress spec with commands" class="image-max-full">

You can watch Cypress running the specs command by command. This is especially useful when a spec fails. Let us break the spec on purpose to see Cypress’ output.

```typescript
cy.title().should('equal', 'Fluffy Golden Retrievers');
```

<img src="/img/robust-angular/cypress-spec-failed.png" alt="Failed spec in Cypress" class="image-max-full">

Cypress provides a helpful error message, pointing to the assertion that failed. You can click on “Open in IDE” to jump to the spec in your code editor.

A great feature of the in-browser test runner is the ability to see the state of the page at a certain point in time. Cypress creates DOM snapshot when a command is run or an assertion verified. By hovering over a command or assertion, you can travel back in time. The page on the right side then reflects the page when the command or assertion was processed.

<div class="book-sources" markdown="1">
- [Cypress documentation: The Test Runner](https://docs.cypress.io/guides/core-concepts/test-runner.html)
</div>

### Asynchronous tests

Every Cypress command takes some time to execute. But from the spec point of view, the execution happens instantly.

In fact, Cypress commands are merely declarative. The execution happens asynchronously. By calling `cy.visit` and `cy.title`, we add commands to a queue. The queue is processed later.

As a consequence, we do not need to wait for the result of `cy.visit`. Cypress automatically waits for the page to load before proceeding with the next command. For the same reason, `cy.title` does not immediately return a string, but a Chainer that allows more declarations.

In the Jasmine unit and integration tests we wrote, we had to manage time ourselves. When dealing with asynchronous commands and asynchronous values, we had to use `async` / `await`, `fakeAsync` and other means explicitly.

This is not necessary when writing Cypress tests. The Cypress API is designed for expressiveness and readability. Cypress hides the fact that all commands take time.

### Automatic retries and waiting

A key feature of Cypress is that it retries certain commands and assertions. For example, Cypress queries the document title and compares it with the expected title. If the title does not match instantly, Cypress will retry the `cy.title` command and the `should` assertion for four seconds. When the timeout is reached, the spec fails.

Other commands are not retried, but have a built-in waiting logic. For example, we will use Cypress’ `click` method to click on an element. Cypress automatically waits for four seconds for the element to be clickable. Cypress scrolls the element into view and checks if it is visible and not disabled. After several other checks, the Cypress performs the click.

The retry and waiting timeout of four seconds can be configured for all tests or individual commands. This feature makes end-to-end makes more reliable, but also easier to write. In other end-to-end testing frameworks, you have to wait manually manually and there is no automatic retry of commands and assertions.

TODO Retry tests

<div class="book-sources" markdown="1">
- [Cypress introduction: Commands are asynchronous](https://docs.cypress.io/guides/core-concepts/introduction-to-cypress.html#Commands-Are-Asynchronous)
- [Cypress documentation: Retry-ability](https://docs.cypress.io/guides/core-concepts/retry-ability.html)
- [Cypress API reference: click](https://docs.cypress.io/api/commands/click.html)
- [Cypress documentation: Interacting with Elements](https://docs.cypress.io/guides/core-concepts/interacting-with-elements.html)
</div>

### Testing the counter increment

In our first Cypress test, we have checked the title of the counter successfully. Let us test the counter’s increament feature.

The test needs to perform the following steps:

1. Navigate to /
2. Find the element with the current count and read its text content
3. Expect that the text is “5”, since this is the start count for the first counter
4. Find the increment button and click it
5. Find the element with the current count and read its text content (again)
6. Expect that the text now reads “6”

We already now how to navigate to an address with `cy.visit('http://localhost:4200')`.

For simplicity, let us set the `baseUrl` configuration option to `'http://localhost:4200'` so we can write `cy.visit('/')` instead. Once we write more and more tests, the `baseUrl` comes in handy to avoid repetition. More importantly, it allows you to run the tests against different versions of the application, for example development, staging and production.

Edit the Cypress configuration file `cypress.json` in the Angular project directory. Add a property `baseUrl` and set it to the Angular development server URL:

```javascript
{
  "baseUrl": "http://localhost:4200",
  /* … */
}
```

From now on, Cypress will expand the URL passed to `cy.visit` to a full URL using the `baseUrl`. The `baseUrl` configuration option can still be overriden on the command line if necessary.

### Finding elements

The next step is to find an element in the current page. Cypress provides several ways to find elements. We are going to use the `cy.get` method to find an element by CSS selector.

```typescript
cy.get('.example')
```

`cy.get` returns a chainer, an asynchronous wrapper around the found elements with useful methods.

Just like with unit and integration test, the immediate question is: Which way to find an element should we use? By id, name, class or by other means?

As discussed in [querying the DOM with test ids](#querying-the-dom-with-test-ids), this guide recommends to mark elements with a **test ids**. These are data attributes like `data-testid="example"`. In the test, we use a corresponding attribute selector like `[data-testid="example"]` to find the elements.

```typescript
cy.get('[data-testid="example"]')
```

This recommendation does not mean that other ways to find elements are forbidden. They are still useful in some cases. For example, you might want to check the presence and the content of an `h1` element. This element has a special meaning and you should not find it with by arbitrary test id.

The benefit of a test id is that it can be used on any element. Using a test id means ignoring the element type (like `h1`) and other attributes. The test does not fail if those change. But if there is a reason for this particular element type or attribute, your test should verify the usage.

<div class="book-sources" markdown="1">
- [Cypress API reference: cy.get](https://docs.cypress.io/api/commands/get.html)
- [Cypress Best Practices: Selecting Elements](https://docs.cypress.io/guides/references/best-practices.html#Selecting-Elements)
</div>

### Interacting with elements

To test the counter component, we want to verify that the start count for the first counter is “5”. The current count lives in an element with the test id `count`”`. So the element finder would be:

```typescript
cy.get('[data-testid="count"]')
```

The `cy.get` command already has an assertion built-in: It expects to find at least one element. Otherwise, the test fails.

Next, we need to check the element’s text content to verify that the start count is 5. Again, we use the `should` method to create an assertion.

```typescript
cy.get('[data-testid="count"]').should('have.text', '5');
```

The `have.text` assertion compares the text content with the given string.

Great! We have found an element and checked its content.

Now let us increment the count. We find and click on the increment button. The button has the test id `increment-button`. Cypress offers the `cy.click` method for this purpose.

```typescript
cy.get('[data-testid="increment-button"]').click();
```

The Angular code under test handles the click event. Finally, we verify that the visible count has increased by one. We repeat the `should('have.text', …)` command, but expect a higher number.

The test suite now looks like this:

```typescript
describe('Counter', () => {
  beforeEach(() => {
    cy.visit('/');
  });

  it.only('has the correct title', () => {
    cy.title().should('equal', 'Angular Workshop: Counters');
  });

  it('increments the count', () => {
    cy.get('[data-testid="count"]').should('have.text', '5');
    cy.get('[data-testid="increment-button"]').click();
    cy.get('[data-testid="count"]').should('have.text', '6');
  });
});

```

The next feature we need to test is the decrement button. The spec works similar to the increment spec. It clicks on the decrement button and checks that the count has decreased.

```typescript
it('decrements the count', () => {
  cy.get('[data-testid="decrement-button"]').click();
  cy.get('[data-testid="count"]').should('have.text', '4');
});
```

Last but not least, we test the reset feature. The user can enter a new count into a form field (test id `reset-input`) and click on the reset button (test id `reset-button`) to set the new count.

Cypress does not have a dedicated method to fill out a form field. A Cypress chainer has a generic method for sending keys to an element that is keyboard-interactable: `type`.

To enter text into the form field, we pass a string to the `type` method.

```typescript
cy.get('[data-testid="reset-input"]').type('123');
```

Next, we click on the reset button and finally expect the change.

```typescript
it('resets the count', () => {
  cy.get('[data-testid="reset-input"]').type('123');
  cy.get('[data-testid="reset-button"]').click();
  cy.get('[data-testid="count"]').should('have.text', '123');
});
```

This is full test suite:

```typescript
describe('Counter', () => {
  beforeEach(() => {
    cy.visit('/');
  });

  it('has the correct title', () => {
    cy.title().should('equal', 'Angular Workshop: Counters');
  });

  it('increments the count', () => {
    cy.get('[data-testid="count"]').should('have.text', '5');
    cy.get('[data-testid="increment-button"]').click();
    cy.get('[data-testid="count"]').should('have.text', '6');
  });

  it('decrements the count', () => {
    cy.get('[data-testid="decrement-button"]').click();
    cy.get('[data-testid="count"]').should('have.text', '4');
  });

  it('resets the count', () => {
    cy.get('[data-testid="reset-input"]').type('123');
    cy.get('[data-testid="reset-button"]').click();
    cy.get('[data-testid="count"]').should('have.text', '123');
  });
});
```

On the start page of the counter project, there are in fact nine counters instance. The `cy.get` commands therefore returns nine elements instead of one.

Commands like `type` and `click` can only operate on one element, so we need to reduce the element list to the first result. This is achieved by Cypress’ `first` command inserted in the chain.

```typescript
it('increments the count', () => {
  cy.get('[data-testid="count"]').first().should('have.text', '5');
  cy.get('[data-testid="increment-button"]').first().click();
  cy.get('[data-testid="count"]').first().should('have.text', '6');
});
```

This also applies to the other specs. If the element under test only appears once, the `first` command is not necessary, of course.

All counter features are now tested. In the next chapters, we will refactor the code to improve its readability and maintainability.

<div class="book-sources" markdown="1">
- [Full code: counter.ts](https://github.com/9elements/angular-workshop/blob/master/cypress/integration/counter.ts)
- [Cypress API reference: click](https://docs.cypress.io/api/commands/click.html
- [Cypress FAQ: How do I get an element’s text contents?](https://docs.cypress.io/faq/questions/using-cypress-faq.html#How-do-I-get-an-element%E2%80%99s-text-contents
- [Cypress API reference: type](https://docs.cypress.io/api/commands/type.html
</div>

### Custom Cypress commands

The test we wrote is quite repetitive. The pattern `cy.get('[data-testid="…"]')` is repeated over and over. Since we follow the convention to find elements by test id, the first improvement is to write a helper that hides this detail. We have already written two similar functions as [unit testing helpers](#testing-helpers), `findEl` and `findEls`.

The easiest way to create a Cypress helper for finding elements is a function.

```typescript
function findEl(testId: string): Cypress.Chainable<JQuery<HTMLElement>> {
  return cy.get(`[data-testid="${testId}"]`);
}
```

This would allow us to write `findEl('count')` instead of `cy.get('[data-testid="count"]')`.

This works fine, but we opt for a another way. Cypress supports adding custom commands to the `cy` namespace. We are going to add the command `byTestId` so we can write `cy.byTestId('count')`.

Custom commands are placed in `cypress/support/commands.ts` file created by the Angular schematic. Using `Cypress.Commands.add`, we can extend Cypress to add our own command as a method of `cy`. The first parameter is the command name, the second is the implementation as a function.

The simplest version could look like this:

```typescript
Cypress.Commands.add(
  'byTestId',
  (id: string) => cy.get(`[data-testid="${id}"]`)
);
```

Now we can write `cy.byTestId('count')`. We can still fall back to `cy.get` if necessary.

`cy.byTestId` should have the same flexibility as the generic `cy.get`. So we should add the second parameter, `options`, as well. We borrow the function signature from the official `cy.get` typings.

```typescript
Cypress.Commands.add(
  'byTestId',
  // Borrow the signature from cy.get
  <E extends Node = HTMLElement>(
    id: string,
    options?: Partial<
      Cypress.Loggable & Cypress.Timeoutable & Cypress.Withinable & Cypress.Shadow
    >,
  ): Cypress.Chainable<JQuery<E>> => cy.get(`[data-testid="${id}"]`, options),
);
```

Save `commands.ts`, then edit `cypress/support/index.ts` and activate the line that imports `command.ts`.

```typescript
import './commands';
```

For proper type checking, we need to tell the TypeScript compiler that we have extended the `cy` namespace. We create the file `cypress/support/index.d.ts` and paste the following type definition:

```typescript
// Types for custom commands
/// <reference types="cypress" />

declare namespace Cypress {
  interface Chainable {
    /**
     * Get one or more DOM elements by test id.
     *
     * @param id The test id
     * @param options The same options as cy.get
     */
    byTestId<E extends Node = HTMLElement>(
      id: string,
      options?: Partial<
        Cypress.Loggable & Cypress.Timeoutable & Cypress.Withinable & Cypress.Shadow
      >,
    ): Cypress.Chainable<JQuery<E>>;
  }
}
```

This is it! We now have a strictly typed command `cy.byTestId`. Using the command, we can declutter the test.

```typescript
describe('Counter (with helpers)', () => {
  beforeEach(() => {
    cy.visit('/');
  });

  it('has the correct title', () => {
    cy.title().should('equal', 'Angular Workshop: Counters');
  });

  it('increments the count', () => {
    cy.byTestId('count').first().should('have.text', '5');
    cy.byTestId('increment-button').first().click();
    cy.byTestId('count').first().should('have.text', '6');
  });

  it('decrements the count', () => {
    cy.byTestId('decrement-button').first().click();
    cy.byTestId('count').first().should('have.text', '4');
  });

  it('resets the count', () => {
    cy.byTestId('reset-input').first().type('123');
    cy.byTestId('reset-button').first().click();
    cy.byTestId('count').first().should('have.text', '123');
  });
});
```

<div class="book-sources" markdown="1">
- [Full code: commands.ts](https://github.com/9elements/angular-workshop/blob/master/cypress/support/commands.ts)
- [Full code: index.d.ts](https://github.com/9elements/angular-workshop/blob/master/cypress/support/index.d.ts)
- [Cypress documentation: Custom commands](https://docs.cypress.io/api/cypress-api/custom-commands.html)
- [Cypress documentation: Types for custom commands](https://docs.cypress.io/guides/tooling/typescript-support.html#Types-for-custom-commands)
</div>

### Testing the Flickr search

We have learned the basics of Cypress by testing the counter app. Let us delve into end-to-end testing with Cypress by testing a more complex app, the Flickr search.

<div class="book-sources" markdown="1">
- [Flickr photo search: Source code](https://github.com/9elements/angular-flickr-search)
- [Flickr photo search: Run the app](https://9elements.github.io/angular-flickr-search/)
</div>

<button class="load-iframe">
See the Flickr photo search in action
</button>

<script type="template">
<p class="responsive-iframe">
<iframe src="https://9elements.github.io/angular-flickr-search/" class="responsive-iframe__iframe"></iframe>
</p>
</script>

Before writing any code, let us make a plan what the end-to-end test needs to do:

1. Navigate to /
2. Find the search input field and enter a search term, e.g. “flower”
3. Find the submit button and click on it
4. Expect photo item links to flickr.com to appear
5. Click on a photo item
6. Expect the full photo details to appear

The application under test queries a third-party API with production data. The test searches for “flower” and Flickr returns different results with each test run.

There are two ways to deal with this dependency during testing:

- Test against the real Flickr API
- Fake the Flickr API and return a fixed response.

If we test against the real Flickr API, we cannot be specific in our expectations due to changing search results. We can only test the search results and the full photo superfically. We do not know the URL or title of the clicked photo. We do know that “flower” needs to be in the title or tags.

This has pros and cons. Testing against the live Flickr API makes the test realistic, but less reliable. If the Flickr API has a short hiccup, the test fails although there is no bug in our code.

Running the test against a fake API allows us to inspect the application deeply. Did the application render the photos the API returned? Are the photo details shown correctly?

Keep in mind that unit, integration and end-to-end tests complement each other. The Flickr search is also tested extensively using unit and integration tests. Each type of test should do what it does best. The unit tests already put the different photo Components through their paces. The end-to-end test does not need to achieve that level of detail.

With Cypress, both type of tests are possible. For a start, we will test against the real Flickr API and we will look into faking the API later.

#### Testing the search

We create a file called `cypress/integration/flickr-search.ts`. We start with a test suite.

```typescript
describe('Flickr search', () => {
  const SEARCH_TERM = 'flower';

  beforeEach(() => {
    cy.visit('/');
  });

  it('searches for a term', () => {
    /* … */
  });
});

---------------------------------
```

We instruct the browser to enter “flower” into the search field (test id `searchTermInput`). Then we click on the submit button (test id `submitSearch`).

```typescript
it('searches for a term', () => {
  const input = findEl('searchTermInput');
  input.clear();
  input.sendKeys('flower');
  findEl('submitSearch').click();
  /* … */
});
```

As described, `sendKeys` does not overwrite the form value with a new value, but sends keyboard input, key by key.

Before entering “flower”, we need to clear the field since it already has a pre-filled value. Otherwise we would append “flower” to the existing value. We use Protractor’s `clear` method for that purpose.

Clicking on the submit button starts the search. When the Flickr API has responded, we expect the search results to be appear.

A search result consists of a link (`a` element, test id `photo-item-link`) and an image (`img` element, test id `photo-item-image`).

We expect 15 links to appear since this is amount requested from Flickr. Each link needs to have an `href` which contains `https://www.flickr.com/photos/`. We cannot check an exact URL since results are the dynamic, but we know that all Flickr photo links start with `https://www.flickr.com/photos/`.

```typescript
const links = findEls('photo-item-link');
expect(links.count()).toBe(15);
links.each((link) => {
  if (!link) {
    throw new Error('link is not defined');
  }
  expect(link.getAttribute('href')).toContain('https://www.flickr.com/photos/');
});
```

Using Protractor’s `count` method, we retrieve the amount of elements with the `photo-item-link` test id. We expect it to be 15.

Then we need to check each link in the list individually. The list has an `each` method to call a function for each element. This works similar to JavaScript’s `forEach` array method.

Inside the function, we need to check first whether the `link` parameter is defined. This is just a necessary TypeScript guard because `link` is typed with `ElementFinder | undefined`. Using Protractor’s `getAttribute` method, we obtain the `href` attribute, that is the link URL. We expect it to contain `https://www.flickr.com/photos/`.

The full test now looks like this:

```typescript
import { browser } from 'protractor';
import { findEl, findEls } from '../e2e.spec-helper';

describe('Flickr search (starter)', () => {
  beforeEach(() => {
    browser.get('/');
  });

  it('searches for a term', () => {
    const input = findEl('searchTermInput');
    input.clear();
    input.sendKeys('flower');
    findEl('submitSearch').click();

    const links = findEls('photo-item-link');
    expect(links.count()).toBe(15);
    links.each((link) => {
      if (!link) {
        throw new Error('link is not defined');
      }
      expect(link.getAttribute('href')).toContain('https://www.flickr.com/photos/');
    });

    expect(findEls('photo-item-image').count()).toBe(15);
  });
});
```

If we run `ng e2e` now, the spec should be executed and pass.

<div class="book-sources" markdown="1">
- [Full code: flickr-search-starter.e2e-spec.ts](https://github.com/9elements/angular-flickr-search/blob/master/e2e/src/promise-manager/flickr-search.e2e-spec.ts)
- [Protractor API reference: clear](https://www.protractortest.org/#/api?view=webdriver.WebElement.prototype.clear
- [Protractor API reference: each](https://www.protractortest.org/#/api?view=ElementArrayFinder.prototype.each)
- [Protractor API reference: getAttribute](https://www.protractortest.org/#/api?view=webdriver.WebElement.prototype.getAttribute)
</div>

#### Testing the full photo

When the user clicks on a link in the result list, the click event is caught and the full photo details are shown next to the list. (If the user clicks with the control/command key pressed or right-clicks, they can follow the link to flickr.com.)

In the end-to-end test, we add a spec to verify this behavior.

```typescript
it('shows the full photo', () => {
  /* … */
});
```

First, it searches for “flower”, just like the spec before.

```typescript
const input = findEl('searchTermInput');
input.clear();
input.sendKeys('flower');
findEl('submitSearch').click();
```

Then we find all photo item links, but not to inspect them, but to click on the first on:

```typescript
findEls('photo-item-link').first().click();
```

The click lets the photo details appear. As mentioned above, we cannot check for a specific title, a specific photo URL or specific tags. The clicked photo might be a different one with each test run.

Since we searched for “flower”, we assert that the term is either in the photo title or tags. We check the text content of the wrapper element with the test id `full-photo`.

```typescript
expect(findEl('full-photo').getText()).toContain('flower');
```

Next, we check that a title and tags are present and not empty.

```typescript
expect(findEl('full-photo-title').getText()).not.toBe('');
expect(findEl('full-photo-tags').getText()).not.toBe('');
```

The image itself needs to be present, checked with Protractor’s `isPresent`.

```typescript
expect(findEl('full-photo-image').isPresent()).toBe(true);
```

The spec now looks like this:

```typescript
it('shows the full photo', async () => {
  const input = findEl('searchTermInput');
  input.clear();
  input.sendKeys('flower');
  findEl('submitSearch').click();

  findEls('photo-item-link').first().click();

  expect(findEl('full-photo').getText()).toContain('flower');
  expect(findEl('full-photo-title').getText()).not.toBe('');
  expect(findEl('full-photo-tags').getText()).not.toBe('');
  expect(findEl('full-photo-image').isPresent()).toBe(true);
});
```

<div class="book-sources" markdown="1">
- [Full code: flickr-search-starter.e2e-spec.ts](https://github.com/9elements/angular-flickr-search/blob/master/e2e/src/promise-manager/flickr-search.e2e-spec.ts)
- [Protractor API reference: isPresent](https://www.protractortest.org/#/api?view=ElementFinder.prototype.isPresent)
</div>

#### Manual waiting

If you run the tests above with `ng e2e`, you will find that the spec *fails*!

The error message reads: `Failed: element not interactable`. The error occurs when executing the `click` command.

<pre><code>
findEl('photo-item-link').first().<strong>click()</strong>;
</code></pre>

What is happening here? The code under test is correct, but we have encountered a Protractor quirk.

The first element with the test id `photo-item-link` does exist. But we cannot interact with it by clicking yet – hence “not interactable”.

According to the WebDriver specification, this error may happen when the clicked element is outside the viewport. This is only temporary since the click is supposed to scroll the element into view automatically.

The solution is pretty dull. We need to instruct the browser to wait until the element is clickable.

Protractor has a `wait` method that requires a condition. A condition can be expressed using methods of Protractor’s `ExpectedConditions`. In our case, we use `elementToBeClickable` and pass the element finder referencing the first link.

```typescript
const link = findEls('photo-item-link').first();
browser.wait(ExpectedConditions.elementToBeClickable(link));
link.click();
```

Protractor pauses the test and periodically checks whether the link is clickable. When it is, it continues with the `click` command. When the link is not clickable after 30 seconds, the test will fail. (This timeout can be changed in the Protractor configuration.)

The full suite:

```typescript
import { browser, ExpectedConditions } from 'protractor';
import { findEl, findEls } from '../e2e.spec-helper';

describe('Flickr search', () => {
  beforeEach(() => {
    browser.get('/');
  });

  it('searches for a term', () => {
    const input = findEl('searchTermInput');
    input.clear();
    input.sendKeys('flower');
    findEl('submitSearch').click();

    const links = findEls('photo-item-link');
    browser.wait(ExpectedConditions.elementToBeClickable(links.first()));
    expect(links.count()).toBe(15);
    links.each((link) => {
      if (!link) {
        throw new Error('link is not defined');
      }
      expect(link.getAttribute('href')).toContain('https://www.flickr.com/photos/');
    });

    expect(findEls('photo-item-image').count()).toBe(15);
  });

  it('shows the full photo', async () => {
    const input = findEl('searchTermInput');
    input.clear();
    input.sendKeys('flower');
    findEl('submitSearch').click();

    const link = findEls('photo-item-link').first();
    browser.wait(ExpectedConditions.elementToBeClickable(link));
    link.click();

    expect(findEl('full-photo').getText()).toContain('flower');
    expect(findEl('full-photo-title').getText()).not.toBe('');
    expect(findEl('full-photo-tags').getText()).not.toBe('');
    expect(findEl('full-photo-image').isPresent()).toBe(true);
  });
});
```

In both specs, we wait for the photo items to be clickable we proceed.

Congratulations, we have successfully tested the Flickr search! This example demonstrates several Protractor commands. We also caught a glimpse of end-to-end testing quirks.

You will find that end-to-end tests with Protractor often require a manual wait. Protractor waits for Angular automatically, but this is not a silver bullet. In addition to `waitForAngular` or as a replacement, you need to use `browser.wait` with a specific condition.

<div class="book-sources" markdown="1">
- [Full code: flickr-search-starter.e2e-spec.ts](https://github.com/9elements/angular-flickr-search/blob/master/e2e/src/promise-manager/flickr-search.e2e-spec.ts)
- [Protractor API reference: wait](https://www.protractortest.org/#/api?view=webdriver.WebDriver.prototype.wait)
- [Protractor API reference: ExpectedConditions](https://www.protractortest.org/#/api?view=ProtractorExpectedConditions)
- [Protractor API reference: elementToBeClickable](https://www.protractortest.org/#/api?view=ProtractorExpectedConditions.prototype.elementToBeClickable)
- [Protractor documentation: Timeouts](https://www.protractortest.org/#/timeouts)
- [Full code: flickr-search.po.ts](https://github.com/9elements/angular-flickr-search/blob/master/e2e/src/promise-manager/flickr-search.po.ts)
</div>

### Page objects


   The goal of this refactoring is not brevity. Moving the element finders to a central place does not necessarily lead to less code. In the test suite above, only `count` is reused across the specs, so the potential savings are small.

   Gathering all finders in a central place separates low-level details – finding elements via test ids – from the high-level code – simulating the user interaction with the page and expectations. This makes the specs easier to read and the easier to maintain.

The Flickr search end-to-end test we have written is fully functional. We can improve the code further to increase clarity and maintainability.

This time, we use a design pattern called *page object*. A design pattern is a way to your structure code, a best practice to solve a common problem.

A page object represents a web page that is scrutinized by end-to-end tests. The purpose of the page object is to provide a high-level interface for interacting with the page.

So far, we have written fairly low-level end-to-end tests. They find individual elements by hard-coded test id, check their content and click on them. This is fine for small tests.

But if the page logic is complex and there are diverse cases to test, the test becomes a unmanageable pile of low-level instructions. It is hard to find the gist of these tests, and they are hard to change.

A page object organizes numerous low-level instructions into a few high-level interactions. What are the high-level interactions in the Flickr search app?

1. Search photos using a search term
2. Read the photo list and interact with the items
3. Read the photo details

As far as possible, we group these interactions into methods of the page object.

A page object is an abstract pattern and the exact implementation is up to you. Typically, the page object is declared as a class which is instantiated when the test starts.

Let us call the class `FlickrSearch` and save it in a separate file, `flickr-search.po.ts`. The extension `.po` is short for page object.

```typescript
export class FlickrSearch {
  public navigateTo(): void {
    browser.get('/');
  }
}
```

The class has a `navigateTo` method that opens the page that the page object represents.

In the test, we import the class and create an instance in a `beforeEach` block.

```typescript
describe('Flickr search', () => {
  let page: FlickrSearch;

  beforeEach(() => {
    page = new FlickrSearch();
    page.navigateTo();
  });

  /* … */
});
```

The instance is stored in a variable declared in the `describe` scope. This way, all specs can access the page object.

Let us implement the first high-level interaction on the page object: searching for photos. We move the relevant code from the test into a method of the page object.

```typescript
public searchFor(term: string): void {
  const input = findEls('searchTermInput').first();
  input.clear();
  input.sendKeys(term);
  findEls('submitSearch').first().click();
  browser.wait(
    ExpectedConditions.elementToBeClickable(
      this.photoItemLinks().first()
    )
  );
}
```

The `searchFor` method expects a search term and performs all necessary steps.

The other mentioned high-level interactions, reading the photo list and the photo details, cannot be translated into page object methods. But we can relocate all element finders together with some commands. The page object now becomes the central place where all test ids and finders are located.

```typescript
public photoItemLinks(): ElementArrayFinder {
  return findEls('photo-item-link');
}

public photoItemImages(): ElementArrayFinder {
  return findEls('photo-item-image');
}

public fullPhotoText(): promise.Promise<string> {
  return findEl('full-photo').getText();
}

public fullPhotoTitle(): promise.Promise<string> {
  return findEl('full-photo-title').getText();
}

public fullPhotoTags(): promise.Promise<string> {
  return findEl('full-photo-tags').getText();
}

public fullPhotoImage(): ElementFinder {
  return findEl('full-photo-image');
}
```

These methods return element finders or the element’s text content, where applicable.

We can now rewrite the end-to-end test to use the page object methods.

```typescript
describe('Flickr search', () => {
  let page: FlickrSearch;

  beforeEach(() => {
    page = new FlickrSearch();
    page.navigateTo();
  });

  it('searches for a term', () => {
    page.searchFor(SEARCH_TERM);
    const links = page.photoItemLinks();
    expect(links.count()).toBe(15);
    links.each((link) => {
      if (!link) {
        throw new Error('link is not defined');
      }
      expect(link.getAttribute('href')).toContain('https://www.flickr.com/photos/');
    });
    expect(page.photoItemImages().count()).toBe(15);
  });

  it('shows the full photo', () => {
    page.searchFor(SEARCH_TERM);
    page.photoItemLinks().first().click();
    expect(page.fullPhotoText()).toContain(SEARCH_TERM);
    expect(page.fullPhotoTitle()).not.toBe('');
    expect(page.fullPhotoTags()).not.toBe('');
    expect(page.fullPhotoImage().isPresent()).toBe(true);
  });
});
```

For the Flickr search above, a page object is probably too much of a good thing. Still the example demonstrates the key ideas of page objects:

- Identify repetitive high-level interactions and map them to methods of the page object.
- Move the finding of elements into the page object. The test ids, tag names etc. you use for finding should live in a central place. When the markup of a page under test changes, the page object needs an update, but the test should remain unchanged.
- Place all expectations in the specs, not the page object code.

When you write end-to-end tests with Protractor, you get lost in technical details quickly: finding elements, clicking elements, waiting for conditions, filling out dozens of form fields. But end-to-end tests should describe a user journey on a high level.

You can use the page object pattern when you feel the need to tidy up complex, repetitive tests. Once you are familiar with the pattern, it also helps you to avoid writing such tests in the first place.

<div class="book-sources" markdown="1">
- [Full code: flickr-search.po.ts](https://github.com/9elements/angular-flickr-search/blob/master/e2e/src/promise-manager/flickr-search.po.ts)
- [Full code: flickr-search.e2e-spec.ts](https://github.com/9elements/angular-flickr-search/blob/master/e2e/src/promise-manager/flickr-search.e2e-spec.ts)
</div>

### The WebDriver control flow

After having written a few end-to-end tests, let us dive deeper into how Protractor works. Back to our first command and expectation:

```typescript
expect($('[data-testid="count"]').getText()).toBe('5');
```

So far, we have taken this code for granted. But there is more to it than meets the eye.

While this code looks synchronous, it is indeed asynchronous. Every WebDriver command is sent to the remotely-controlled browser. It takes some time for the browser to answer.

That is why all Protractor commands return Promises. `getText` for example does not return a string, but a Promise that is resolved with a string. The expectations `expect(…).toBe('5');` waits for the string result, then runs the comparison.

Protractor _hides_ the asynchronous nature of the code. The spec code is executed synchronously within milliseconds. This is possible because the code merely declares the commands and expectations. They are added to a queue and processed later.

The commands and expectations in the queue are processes one after another. Each command takes its time, only limited by a timeout. Once a command is executed, the next in the queue is processed, and so on.

This Protractor feature is called _WebDriver control flow_. It is based on the _Promise Manager_ of the underlying Selenium WebDriverJS library.

Under the hood, the code

```typescript
expect($('[data-testid="count"]').getText()).toBe('5');
```
is translated to

```typescript
$('[data-testid="count"]').getText().then((text) => {
  expect(text).toBe('5');
});
```

The benefit of the control flow is that tests are much easier to write. You do not have to think about Promises and waiting for a command result.

The downside is that the code is not working as you might expect. The code is in fact declarative, it adds commands to a queue. Consequently, you cannot use imperative programming idioms like `if`.

Since the WebDriver commands return Promises, you cannot work with them directly. You need to unwrap them manually using `promise.then((result) => { /* … */ })`.

The best is to avoid logic that works with raw values. Use Jasmine matchers to check the result of a command. As described, Protractor overwrites `expect` so that it accepts a Promise and waits for the result.

The main issue of the Promise Manager is that the underlying WebDriverJS library has deprecated the feature. It was created before `async`/`await` was standardized in ECMAScript 2017 and supported with Node.js 7.6.0. Today, both the Protractor and the WebDriverJS teams recommend to use deactivate the control flow and use `async` / `await` instead.

With `async` / `await`, the Flickr search example

The control flow implementation is complex and has lead to pitfalls, inconsistencies and bugs.



https://www.protractortest.org/#/control-flow
https://github.com/SeleniumHQ/selenium/wiki/WebDriverJs

###

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

---

<h2>Code Coverage</h2>

<ul>
  <li>Welche Codezeilen wurden durch die Unit-Tests aufgerufen?</li>
  <li><a href="https://istanbul.js.org/">Istanbul test coverage tool</a></li>
  <li><code>ng test --code-coverage</code></li>
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

<script src="/assets/testing-angular.js"></script>
