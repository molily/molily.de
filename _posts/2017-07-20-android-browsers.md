---
layout: post
title: Comparing alternative Android browsers
description: Chrome alternatives with ad blocking, data saving and privacy features
keywords: Android, browser, Chrome, Opera, Opera Mini, UC browser, Firefox, Orfox, ad blocker, tracking, performance
lang: en
---

While Google Chrome is the standard browser on modern Android devices, there are several noteworthy alternatives I’d like to review in this post. I’ve tested a bunch of different browsers:

<ul class="compact-list">
<li><a href="#android-browsers-chrome">Chrome</a></li>
<li><a href="#android-browsers-opera-mini">Opera Mini</a></li>
<li><a href="#android-browsers-opera">Opera</a></li>
<li><a href="#android-browsers-firefox">Firefox</a></li>
<li><a href="#android-browsers-firefox-focus">Firefox Focus</a></li>
<li><a href="#android-browsers-orfox">Orfox and Orbot</a></li>
<li><a href="#android-browsers-uc-browser">UC Browser</a></li>
</ul>

These are the aspects I have examined:

<ul class="compact-list">
<li>General usability: user experience when browsing the web.</li>
<li>Nifty usability features: configurability, small but clever features that make life easier, settings for pro users.</li>
<li>Ad and tracker blocking</li>
<li>Data saving</li>
<li>Privacy features</li>
<li>Web technology support</li>
</ul>

My test devices:

<ul class="compact-list">
<li><a href="http://www.gsmarena.com/huawei_p9-7972.php">Huawei P9 (EVA-L09, released 2016)</a> with Android 7.0</li>
<li><a href="http://www.gsmarena.com/samsung_galaxy_s5_mini-6252.php">Samsung Galaxy S5 mini (SM-G800F, released 2014)</a> with Android 6.01</li>
</ul>

<h2 id="android-browsers-">Chrome (for reference)</h2>

Tested version: 59.0.3701.125<br>
<a href="http://html5test.com/">html5test</a> score: 518 / 555

Chrome is the browser that is pre-installed on all newer Android devices. There’s no full review here, I assume you roughly know what it does, how it looks and feels. Still I’d like to discuss a few things about Chrome for reference.

I consider Chrome to be the best Android browser in terms of browsing experience, performance and technical innovation. Chrome can be seen as a “simple” browser that is not particularly rich in features. But compared to other browsers, you’ll realize how sophisticated Chrome’s simplicity is in fact. I think Chrome’s product design has reached a point where “[there is nothing left to take away](https://uxmag.com/articles/when-theres-nothing-left-to-take-away)”. In several ways, Chrome is the standard I measure other browsers against.

Chrome has a built-in data saving feature, but no ad or tracking blocker yet. Google is one of the biggest players in online advertising. While they announced that Chrome will block some intrusive ads in the future, it’s obvious that Chrome is not going to block any Google ads or trackers.

That’s the main reason I’m looking for alternatives. And while I appreciate Chrome’s simplicity, I also like some additional features that Chrome lacks.

<h2 id="android-browsers-opera-mini">
  <a href="https://play.google.com/store/apps/details?id=com.opera.mini.native">Opera Mini</a>
</h2>

Tested version: 28.0.2254.119114<br>
Download size: 5.21 MB

Opera Mini has a long history as a special browser for low-end feature phones. On modern Android systems, there is little left of this legacy.

### General usability

The onboarding experience puts me off a bit: There’s a home screen named Speed Dial which contains important bookmarks but also random news with ads in between. The first thing I do is to disable the news and clean up the pre-defined bookmarks.

Per default, the main user interface has a top and a bottom bar. The top bar contains the current URL and a sharing/saving/bookmarking menu. The bottom bar contains back and forward, home, tabs and the main Opera menu. There are three possible fullscreen modes: Disabled, Enabled, Enabled with status bar. I’m using “fullscreen enabled” which means the top bar is visible all the time, the bottom bar disappears when you scroll down and reappears when you scroll up.

There is an alternative layouts for tablets with a large tab bar at the top and a combined bar below.

All necessary features are easy to reach. The horizontal tab overview is clear and easy to navigate.

### Nifty usability features

- Night mode for switching to a low brightness, tinted red display mode. This is useful in case your Android doesn’t support such a feature on the operating system level (my P9 does, my Galaxy S5 mini doesn’t).
- Copying and pasting URLs on the location bar is easier than in other browsers. No long tap to access the Android clipboard menu is necessary. The URL is automatically selected when tapping on the URL, and there’s a “Copy link” button beneath. If there’s a URL in the clipboard, there’s a button to navigate to it quickly.
- Ability to change the theme color of the bars and menus quickly

### Ad and tracker blocking

Opera Mini comes with a built-in ad blocker. It works well, I almost never see typical ads. The downside is that the ad blocking feature is bound to the data saving (see below), you can’t enable the one without the other.

Apparently there is no blocking of trackers.

### Data saving

Probably the most important feature is the built-in data saver. According to the in-app statistics, the compression saved me 50% of the transmitted data so far, so I guess it’s pretty effective.

The data saving has several modes: Automatic, Extreme, High, Off.

- “**High**” means Opera Mini uses a proxy-based solution to compress web pages (text-based formats like HTML, CSS and JavaScript), images and videos.
- Originally conceived for feature phones, the “**Extreme**” mode is radically different: Web pages are not downloaded normally and rendered on the device. They are pre-rendered on the server using the old [Opera Presto engine](https://en.wikipedia.org/wiki/Presto_(layout_engine)). Opera Mini then just downloads a compressed binary format, not individual resources. This mode works surprisingly well and indeed allows “extreme” data savings. But it does not work for highly interactive sites like JavaScript applications.
- I recommend the default setting “**Automatic**”, which uses the proxy-based solution in most cases. I guess there’s a small whitelist for sites that are rendered on the server with Presto.

There is an additional **image quality setting**: Low, Medium, High. When not browsing photo sites, it’s safe to set it to “Low” which means high compression.

If you’re on a good connection, browsing with data saving enabled might actually be slower. Also be aware that all proxy-based data saving feature sends your whole browsing history to the proxy, in this case a server operated by Opera.

### Privacy features

- Private tabs. Unfortunately, these tabs are not blank in the Android “Recent Apps”. Content of private tabs you have closed might still be seen in the application overview.
- Disable cookies. Most Chrome-based browsers allow to disable cookies, but that feature is not useful in my opinion. Disabling cookies alltogether renders most login-based sites unusable.
- Disable usage statistics
- Clear browsing data manually

### Web technology support

Opera Mini uses the system-wide Chrome browser component, which is the latest Chrome 59 both on my Huawei P9 and Galaxy S5 mini. This is why the app is just 5 MB – Mini does not ship with its own browser engine.

<a href="http://html5test.com/">html5test</a> score: 501 / 555<br>
Chrome 59 for reference: 518 / 555

Although Opera Mini is using the same engine as Chrome, some JavaScript APIs are not available. Mostly APIs related to “Progressive Web Apps”: No push notifications, web notifications, web payments. This explains the different html5test score.

### Conclusion

Opera Mini is one of my favorite mobile browsers. It’s up-to-date in terms of web technology, since it’s based on the latest Chrome. The user interface is clear. The bottom bar is not that useful, though. Fortunately Opera Mini allows to configure the app layout.

<h2 id="android-browsers-opera">
  <a href="https://play.google.com/store/apps/details?id=com.opera.browser">Opera</a>
</h2>

Tested version: 42.7.2246.114996<br>
Download size: 31.83 MB

The “full” Opera is basically the same as Opera Mini but with some changes:

- There is more importance attached to the news reading on the home screen.
- A slightly different user interface. Top and bottom bar are fixed. The icons are different. The menus are organized differently, having almost the same menu entries.

Opera ships with its own browser engine, which is why you need to download more than 30 MB. The Chrome engine inside of Opera 42 is based on Chrome version 55, which is half a year older than the system Chrome engine, version 59.

### Conclusion

Opera seems to be a more cluttered version of Opera Mini with an outdated engine. The user interface changes mostly make things more complex. Even worse, Opera hides some features that make me love Opera Mini.

Given that Opera Mini exists, I don’t see why the full Opera is needed. I see no benefit for my devices.

<h2 id="android-browsers-firefox">
  <a href="https://play.google.com/store/apps/details?id=org.mozilla.firefox">Firefox</a>
</h2>

Tested version: 54.0.1<br>
Download size: 33.24 MB

### General usability

In many ways, Firefox feels like the desktop browser brought to mobile devices. If you’re familiar with the desktop Firefox, you’ll get along in Firefox since the wording is the same.

When starting the app, you see a welcome screen with a short tutorial. Then you start with a home screen with three tabs: Top sites, bookmarks and history. This screen is also visible when opening a new tab. A clever solution in my opinion.

The **main user interface** consists of a top bar with the URL field, tab manager and main menu. Full screen browsing is enabled per default, so the top bar hides when you scroll down on a page.

The main menu has four icon buttons (back, forward, bookmark, reload), 11 textual menu entries with three sub-menus. Wow!

I like that Firefox has only one bar at the top. The drawback is that you need to open the main menu corner frequently. This menu in top-right orner is not easy to reach with your thumb when using your mobile phone with one hand.

All essential browser functions are easy to reach, but the user interface is cluttered and verbose. Especially the main menu is too large and confusing.

The **tab overview** is clear and easy to interact with. Per default, the tabs are listed in a two-column grid. It can be configured to be a single-column list.

The numerous **settings** are grouped and explained well. There are many useful features, probably too many to grasp them even for tech-savvy folks. Most of the time there’s no need to change these internal settings anyway.

### Nifty usability features

- There’s a reader mode that applies a style sheet with large, white-on-black text to long articles to improve the readability.
- Save pages as PDF files.

### Ad and tracker blocking

Firefox does not have a built-in ad blocker. It has a built-in tracking protection that can only be enabled in private tabs. Why so?

In contrast to most Chrome-based mobile browsers, Firefox Mobile supports the [same extensions](https://addons.mozilla.org/de/firefox/) that can be installed on Firefox Desktop. So we can use well-known extension like [uBlock Origin](https://addons.mozilla.org/de/firefox/addon/ublock-origin/), [Adblock Plus](https://addons.mozilla.org/de/firefox/addon/adblock-plus/) or [Ghostery](https://addons.mozilla.org/de/firefox/addon/ghostery/) on Android as well.

Unfortunately, the UI of these blockers might not work well on mobile devices. But if you’re familiar with a certain extension on Firefox desktop, you’ll be able to configure it on mobile as well.

### Data saving

Firefox does not have a generic data saving feature, but two fine-grained features:

<ul class="compact-list">
<li>Show images: Always / Only over Wi-Fi / Blocked</li>
<li>Show web fonts: On / Off</li>
</ul>

Disabling web fonts is a good performance booster that has little impact on a site’s usability.

Images are indeed the biggest cause of mobile internet traffic, so there’s big data saving potential. But disabling images completely is not that useful in my opinion. I prefer proxy-based solutions that re-compress images heavily.

### Privacy features

- Firefox kindly asks if you want to enable search suggestions when you type into the URL bar. In other browsers, this is enabled per default and sends all input to the default search engine, which is Google. Consent is cool!
- The “Do not track” HTTP header can be enabled, just like in Chrome.
- There’s a built-in tracking protection, but as I said, it only works in private browsing mode.
- “Data choices” allows you to choose which usage data is sent to Mozilla. Chrome has a similar feature but in my opinion, Mozilla makes it more transparent what data they are collecting and why.
- Cookies: Enabled / Enabled, exclude third party cookies / Disabled. Most Chrome-based browsers allow to disable cookies, but that feature is not useful. Gladly Firefox allows to disable third party cookies, which is a good tradeoff between privacy and, well, working web sites.
- Clear private data manually
- Clear private data automatically on exit

### Web technology support

<a href="http://html5test.com/">html5test</a> score: 477 / 555<br>
Chrome 59 for reference: 518 / 555

Firefox is the only Android browser not based on Chrome/Chromium/Blink or an older WebKit. Mozilla Firefox comes with its own engine, Gecko. Mozilla implements web platform featues with a different pace and different focus than Google. Even though Firefox seems to lag behind in the html5test score, Gecko is a great browser engine that supports all important modern web technologies. Also, Firefox is updated frequently with a six-to-eight week release cycle.

### Conclusion

Together with the uBlock Origin extension, Firefox is a usable mobile browser. Unfortunately, there is no generic data saving feature and the built-in data saving is rudimentary.

In my opinion, Firefox for Android has a bloated, substandard UI that carries on the legacy of its desktop version. The Firefox product designers did not accomplish to identify and focus on the core mobile browsing experience. The single-bar main interface is refreshing, but the cluttered main menu is a deal breaker. There are numerous settings but most of them are irrelevant.

Firefox is noticeably slow on my Galaxy S5 mini, way slower than Chrome-based browsers. This is a known drawback of the Gecko engine, it performs worse than Blink and WebKit especially on mobile devices with less computing power.

<h2 id="android-browsers-firefox-focus">
  <a href="https://play.google.com/store/apps/details?id=org.mozilla.focus">Firefox Focus</a>
  (<a href="https://play.google.com/store/apps/details?id=org.mozilla.klar">Firefox Klar</a> in German)
</h2>

Tested version: 1.0<br>
Download size: 2.08 MB

Firefox Focus is a completely new, simplistic concept browser for private browsing. It’s not based on Firefox mentioned above.

### General usability

When starting the app, a quick tutorial explains the main features.

Firefox Focus doesn’t have all the normal browser features you’d probably expect. It doesn’t have multiple tabs. There is just a single tab, a colorful URL bar and large floating button to close the page and clear all data. The motto is “Browse. Erase. Repeat.”

The URL bar has a short menu with navigate forward, reload, tracker blocking on/off, share and open with other browser.

The user interface is clear and simple, there is little to explain or complain about.

### Nifty usability features

Nope. Firefox Focus is reduced to the minimum, that’s the whole point.

### Ad and tracker blocking

Firefox Focus has a built-in ad *and* tracker blocking. The settings allow to configure the blocking of ads and different types of trackers.

### Data saving

No data saving feature.

### Privacy features

The whole purpose of the browser is privacy, so…

- No browsing history is recorded across sessions
- Erasing the browser history is simple, just press the big trash button or the button in the Android dropdown menu
- Blocks different types of trackers
- Stealth mode that disables screenshots and the preview in Android’s “Recent Apps”. I had to disable this mode to take screenshots!

### Web technology support

<a href="http://html5test.com/">html5test</a> score: 499 / 555<br>
Chrome 59 for reference: 518 / 555

Firefox Focus is a small two-megabyte shell around the system-wide, always up-to-date Chrome browser component (Chromium WebView). So it’s not a Gecko-based browser like the normal Firefox.

### Conclusion

Firefox Focus is a refreshing concept browser that reflects the core values of Mozilla. This is what I expect from Mozilla: To be the user’s advocate in a web that intrudes our privacy.

Firefox Focus cannot and does not want to be your full-featured default browser, but it offers a clear benefit. While the full-blown Firefox lacks direction, the product design of Focus is outstanding and simply on point. I wish Mozilla learns from this successful experiment and improves the main Firefox browser.

<h2 id="android-browsers-orfox">
  <a href="https://play.google.com/store/apps/details?id=info.guardianproject.orfox">Orfox</a> and
  <a href="https://play.google.com/store/apps/details?id=org.torproject.android">Orbot</a>
</h2>

Tested version: 1.2.1<br>
Download size: 30.48 MB

Orfox is a special version of Firefox that connects to Tor network to allow anonymous browsing. It requires a second app named Orbot, which is the actual Tor network client.

Apart from the onion browsing, Orfox is almost like the normal Firefox. There are slightly different default settings. The NoScript extension is installed per default since JavaScript is a great tool to fingerprint your device and to uncover your anonymity. You’re free to install more extensions like uBlock Origin.

The tested Orfox version is based on Firefox 45.5.1 Extended Support Release from December 2016. The major version 45 was released in March 2016. So it’s not the latest Firefox, but still a pretty recent one.

<h2 id="android-browsers-uc-browser">
  <a href="https://play.google.com/store/apps/details?id=com.UCMobile.intl">UC Browser</a>
</h2>

Tested version: 11.3.8.976<br>
Download size: 20.15 MB

Made in China, UC Browser is hugely popular browser in emerging markets like China, India and Indonesia. It’s packed with feature and add-ons.

### General usability

When starting the app, it first asks for the permission to “make and manage phone calls”. According to the welcome screen, this allows the app to the operator name in order to improve the data saving. I’m not sure about the technical details here, so in case of doubt I do not grant this permission. UC browser is still able to operate.

In a four-screen **tutorial**, UC browser quickly introduces its major features. On the four screen, you are able to opt of of the “UX Improvement Program”. There’s a quick link to their privacy policy with an explanation of the collected data. Transparency and asking for consent builds trust, nevertheless I’m opting out.

Next, UC Browser asks for the storage permission “to start saving data”. Again I’m not fully sure what that means, and it’s not explained well.

After having started UC Browser, it installs a Facebook bar in your system-wide Android quick settings dropdown menu. I’m not using Facebook, so the first thing I do is to disable this feature.

When navigating to the first web page, UC Browser shows a dialog that asks me to install a “Quick Search Shortcut”. That’s a Google search bar for the quick settings dropdown menu. No, thanks.

The **main interface** has a top bar with title/URL field, a search button and reload button. There is a bottom bar with back/forward, menu, tab overview and home page buttons. Per default, the top bar is hidden when scrolling down while the bottom bar is fixed. There’s a fullscreen mode that makes both bars disappear on scrolling.

Tapping on the **search** button shows a screen where you can choose what type of content to search for – e.g. web, videos, apps, images, news – and which search engine to use – e.g. Google, Bing, DuckDuckGo, YouTube and some UC-Browser-related sites.

The **start page** of a new tab features pre-defined bookmarks, random news headlines, “Hot Videos” and my most visited pages. When swiping right, there’s a Speed Dial bookmarks list the user manage themselves. By tapping the “Manage Cards” button, one can disable most of the hot news on the start page.

The **main menu** can be opened from the bottom bar. I think it’s one of the strength of UC browser. All important features are easily accessible and clear to understand thanks to the use of icons. When swiping right, there are settings for changing the display of the current page: change font size, color theme, fit to screen vs. zoom. These are vital tools to make web sites more readable.

After browsing some pages, a dialog pops up and asks me to rate the app on the Play Store or leave feedback on the UC Help Center.

The **tab overview** is done well. You can switch between horizontal card view (like in Android and Opera Mini) and vertical list view (like in Firefox).

When exiting UC Browser using the Android back button, I’m asked if I like to clear browsing history, add UC to home screen, and “do not ask again”. Guess my choice.

### Nifty usability features

<ul class="compact-list">
<li>Night mode for switching to a low brightness, low contrast display mode.</li>
<li>Quick font size adjustment, base font size setting</li>
<li>Color themes for web sites</li>
<li>Numerous browser themes to choose from, essentially wallpaper images for the translucent UI</li>
</ul>

### Ad and tracker blocking

Opera Mini comes with a built-in ad blocker that works well in my tests. In contrast to Opera Mini, it is not bound to the data saving feature.

Apparently there is no blocking of trackers, only ads.

### Data saving

UC Browser has a built-in data saving feature that is enabled when you’re on a mobile internet connection. It’s a proxy-based solution just like Opera Mini’s, compressing HTML/CSS/JavaScript, images and videos. There are detailed statistics about how much data were saved. Two settings allow adjust to handling of images:

<ul class="compact-list">
<li>Image quality: Text-only (i.e. no images ever) / Low / Medium / High</li>
<li>Text only mode: On / Off, i.e. images will only be loaded when on Wi-Fi</li>
</ul>

The feature works well. According to the statistics, the saved data on the tested sites – New York Times and the English Wikipedia – is enormous.

### Privacy features

- Incognito mode. Note that is is something different than private tabs. This switches the whole browser into a mode where the browsing history is not recorded. When leaving the mode, UC Browser asks to close all opened tabs. This is a refreshing take on private browsing, but I prefer the clarity of normal tabs vs. private tabs. Unfortunately, the preview window in the Android “Recent Apps” is not empty when incognito mode is switched on.
- Clear browsing history manually
- Clear browsing history on exit

### Web technology support

<a href="http://html5test.com/">html5test</a> score: 346 / 555<br>
Chrome 59 for reference: 518 / 555

UC Browser ships with a custom browser engine called “U3”. According to the user agent, the engine is based on [WebKit version 534.30](https://trac.webkit.org/browser/webkit/tags/Safari-534.30). This version was tagged *six years ago* and roughly corresponds to [Safari 5.1](https://en.wikipedia.org/wiki/Safari_version_history).

The fact that UC Browser seems to use an antediluvian browser engine explains the lousy html5test score. I’m wondering wheather the developers merged in any WebKit security and stability patches since 2011. There are numerous dreaded Android browsers based on outdated WebKits, and apparently UC Browser is yet another offender that hinders technical progress.

### Conclusion

UC Browser has outstanding user interface ideas and usability features. But all in all, this browser is bloated with features. I can only mention a fraction in this review. Most of the features I do not use. Most of the feature I simply do not understand. They’re not explained well. It seems UC Browser wants to manage your life instead of just serving as a browser.

I understand that the company behind UC Browser wants to promote their content to make money with the app. Still, all those pop-ups and notifications, the fixed bookmarks and the system-wide integration are obtrusive and annoying. This destroys the trust the product tries to earn with user-centric design in the core experience.

If my observation is correct that UC Browser is based on a six year old browser engine that hasn’t been updated since, that’s a strong reason against the product.
