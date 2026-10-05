@extends('layouts.app')
@section('content')
@php $base = rtrim(url('/'), '/'); @endphp
<main id=page><header class=pagewidth><menu class=srm><a id=print-button class=hide href=javascript:window.print() role=button aria-label=Print><span class="t srt" role=tooltip>Print</span>
</a><a id=navigatorShare href=#share role=button aria-label=Share><span class="t srt" role=tooltip>Share</span>
</a><a id=copyPermalink class=hide href=javascript:navigator.clipboard.writeText(window.location.href) role=button aria-label="Copy URL"><span id=copy class="t srt" role=tooltip>Copy URL</span>
<span id=isCopying style=display:none>Copying...</span>
<span id=copyText style=display:none>Copy URL</span></a></menu><button id=back class=hide type=button onclick=history.back() aria-label="Go Back">
<span class="t srt" role=tooltip>Go Back</span></button><details class=presentation aria-expanded=true id=has-breadcrumb open><summary id=breadcrumb tabindex=-1><span>Breadcrumb</span></summary><nav aria-labelledby=breadcrumb><ul role=presentation class=breadcrumb><li><a href={{ $base }}/event/ aria-current=true>Events & Details</a></li><li><a href aria-current=page tabindex=-1>About</a></li></ul></nav></details></header><div id=top role=presentation></div><article id=main-article class="pagewidth rm" role=document aria-labelledby=title data-pagefind-body><header aria-labelledby=title><hgroup data-bionread-safe><h1 id=title data-pagefind-meta=title>About</h1><p class=subtitle role=doc-subtitle>Get to know more about TechConnect !</p></hgroup><div id=doc-author class="textsw author"></div><div class=date-has-label><time class=doc-publish-date datetime=2025-09-03T00:00:00+05:30 data-time-label="Published on">3 September 2025</time>
<time class=doc-lastmod-date datetime=2026-08-25T00:00:00+05:30 data-time-label="Modified on">25 August 2026</time></div></header><section aria-labelledby=title id=content data-bionread-safe><p><div id=aboutpage class="row align-items-center justify-content-evenly
g-4 p-1" tabindex=0><div class="col col-12
align-items-center justify-content-center"></p><h1 id=techconnect>TechConnect</h1><p>TechConnect, hosted by IIT Bombay, is a premier platform designed to bring
together the brightest minds from academia, industry, and the entrepreneurial
ecosystem. TechConnect is platform for showcasing the outcomes of the R&amp;D as
well as product development activities of IITB community. Through TechConnect,
IIT Bombay community reaches out to the industry and the society at large to
apprise them of multifarious research and development activites conducting by
our students and faculty members. The platform allows industry leaders and
academic champions to interact one-on-one and fosters further engagements
between the two. The platforms is show cases industry relevant technologies
that are available which may be taken on fast track for further development.
TechConnect provides the necessary short-path for expeditious absorption of
technologies developed at IITB. With a focus on innovation, technology, and
research, TechConnect serves as a catalyst for fostering collaboration,
facilitating knowledge exchange, and bridging the gap between research
advancements and real-world applications.</p><h1 id=our-mission>Our Mission</h1><p>At TechConnect, we aim to create a dynamic environment where cutting-edge
research meets industry expertise. Our mission is to drive innovation and
foster expeditious development and absorption of IITB technologies by
connecting thought leaders, researchers, and business visionaries to
collaboratively solve real-world challenges. By offering a platform for
showcasing technologies, indepth knowledge exchange, networking, and
partnerships, TechConnect aims plays a crucial role in shaping the future of
technology and academia-industry paternership.</p><h1 id=event-highlights>Event Highlights</h1><ul><li><strong>Keynote Speeches:</strong> by world-renowned experts in technology and
innovation.</li><li><strong>Panel Discussions:</strong> addressing the latest trends in Artificial
Intelligence, Cybersecurity, IoT, and Sustainable Technologies.</li><li><strong>Research Presentations:</strong> showcasing groundbreaking innovations from
leading scientists and researchers.</li><li><strong>Startup Showcases:</strong> where emerging companies demonstrate their unique
solutions to industry problems.</li></ul><h1 id=organizers-and-partners-2025>Organizers and Partners (2025)</h1><p>TechConnect is organized by IIT Bombay, under the leadership of the
Institute&rsquo;s Industrial Research and Consultancy Center (IRCC). TechConnect is
proudly supported by Research Park IIT Bombay. We work in collaboration with
industry partners, academic institutions, and government agencies to make this
event a success. Our strategic partnerships help us foster a multidomain
approach brings together the technology creators and translators which can
ensure sustained development,innovation and betterment of the society.</p><br><p><div class="row align-items-center justify-content-evenly
g-4 p-1" tabindex=0><style>#largecolscrollid-1791164205593710599{animation-duration:14s !important}@media(max-width:768px){#largecolscrollid-1791164205593710599{animation-duration:10s !important}}</style><div class="container largecolscroll
align-items-center justify-content-center
m-2 p-2 overflow-hidden"><div id=largecolscrollid-1791164205593710599 class="largecolscroll-container
d-flex
align-items-center
justify-content-evenly
g-4 p-4
animate"><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://marketingandbusinessdevelopment-iitbrp.s3.ap-south-1.amazonaws.com/aspire-website-revamp-media/public/brand-logo/aspire-logo.png alt="ASPIRE (Research Park)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=/media/images/logo/logo.drf.bg_transparent.png alt="Development & Relations Foundation (DRF)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://www.cep.iitb.ac.in/assets/img/eo_iitb.png alt="Educational Outreach (EO)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=/media/images/logo/logo.ircc.bg_light.fg_dark.png alt="Industrial Research and Consultancy Centre (IRCC)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://sineiitb.org/Header/logo.png alt=SINE></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://tihiitb.org/wp-content/uploads/2023/10/TIH-logo.png alt="TIH Foundation"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://marketingandbusinessdevelopment-iitbrp.s3.ap-south-1.amazonaws.com/aspire-website-revamp-media/public/brand-logo/aspire-logo.png alt="ASPIRE (Research Park)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=/media/images/logo/logo.drf.bg_transparent.png alt="Development & Relations Foundation (DRF)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://www.cep.iitb.ac.in/assets/img/eo_iitb.png alt="Educational Outreach (EO)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=/media/images/logo/logo.ircc.bg_light.fg_dark.png alt="Industrial Research and Consultancy Centre (IRCC)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://sineiitb.org/Header/logo.png alt=SINE></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://tihiitb.org/wp-content/uploads/2023/10/TIH-logo.png alt="TIH Foundation"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://marketingandbusinessdevelopment-iitbrp.s3.ap-south-1.amazonaws.com/aspire-website-revamp-media/public/brand-logo/aspire-logo.png alt="ASPIRE (Research Park)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=/media/images/logo/logo.drf.bg_transparent.png alt="Development & Relations Foundation (DRF)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=https://www.cep.iitb.ac.in/assets/img/eo_iitb.png alt="Educational Outreach (EO)"></div><div class="p-2 largecolscroll-col
align-items-center justify-content-center
colscroll-sponsors"><img class="col col-12 img-div img-fluid mx-auto d-block
colscroll-sponsors-div" src=/media/images/logo/logo.ircc.bg_light.fg_dark.png alt="Industrial Research and Consultancy Centre (IRCC)"></div></div></div></div></p><br><br><h1 id=who-attends>Who Attends</h1><ul><li>Industry leaders looking to explore cutting-edge technologies.</li><li>Researchers and scientists seeking collaboration opportunities.</li><li>Entrepreneurs and startups showcasing innovative solutions.</li><li>Students and academic professionals eager to learn from the best.</li></ul><h1 id=our-impact>Our Impact</h1><p>Over the years, TechConnect has become a vital link between research and
industry. Previous editions of the event have seen groundbreaking
collaborations, the launch of successful startups, and the development of
technologies that have a lasting impact on society. TechConnect continues to
inspire technological growth and innovation, contributing to a brighter, more
connected future.</p><h1 id=looking-ahead>Looking Ahead</h1><p>With each edition, TechConnect evolves, expanding its scope and impact. We are
committed to fostering an even stronger community of innovators and
collaborators in future events. Join us in our journey to drive the next wave
of technological advancements!</p><p></div></div></p></section><footer><nav id=keywords aria-label=Tags><span>Tag:&nbsp;</span><ul class=inline role=presentation><li><a href={{ $base }}/tags/about/>About</a></li></ul></nav></footer></article><hr class=hide style="margin:1in 0"><div id=contentinfo class=pagewidth role=contentinfo data-pagefind-ignore=all><div id=colophon style=display:none aria-live=polite><strong class=section-title>Colophon</strong><div><div id=qr role=img aria-label="QR code"></div><div class=verbose><div class=has-aria-label-top aria-label=About><span>{{ $base }}/event/about/</span></div><div><span>This page was accessed on: </span><time id=time-stamp></time></div></div></div></div><div id=has-timeline><strong class=section-title>Redaction History</strong><ol aria-label="Redaction History"><li><time datetime=2025-09-03T00:00:00+05:30>3 September 2025</time>
<span>(Published)</span></li><li><time datetime=2026-08-25T00:00:00+05:30>25 August 2026</time>
<span>(Modified)</span></li></ol><p>Some information might change over time, we'll keep redaction up to date.</p></div><details class=presentation aria-expanded=true id=has-share open><summary id=share tabindex=-1><span>Share</span></summary><nav aria-labelledby=share><ul role=presentation class="share srm"><li id=has-mastodon><form class=form id=mastodon action=//sharetomastodon.github.io/ target=_blank rel="noopener noreferrer"><input id=mastodonTitle type=hidden name=title value=About>
<input id=mastodonPermalink type=hidden name=url value={{ $base }}/event/about/>
<input id=mastodonText type=hidden name=text value="About {{ $base }}/event/about/" disabled>
<input id=mastodonInstance type=url class="ldots form__input" placeholder="Enter Mastodon instance (https://www.example.com)" aria-label="Mastodon instance URL">
<button class=form__button type=submit aria-label="Share on Mastodon">
<i class="icon mastodon sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Mastodon</span></button></form></li><li><a href="mailto:?subject=About&body=https%3a%2f%2frnd.iitb.ac.in%2ftechconnect%2fen%2fevent%2fabout%2f" role=button aria-label="Share on Email"><i class="email sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Email</span></a></li><li><a href="whatsapp://send?text=About%20https%3a%2f%2frnd.iitb.ac.in%2ftechconnect%2fen%2fevent%2fabout%2f" role=button aria-label="Share on Whatsapp"><i class="whatsapp sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Whatsapp</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://telegram.me/share/url?text=About&amp;url={{ $base }}/event/about/" role=button aria-label="Share on Telegram in new tab"><i class="telegram sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Telegram</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://bsky.app/intent/compose?text=About&amp;url={{ $base }}/event/about/" role=button aria-label="Share on Bluesky in new tab"><i class="bluesky sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Bluesky</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://facebook.com/sharer/sharer.php?u={{ $base }}/event/about/" role=button aria-label="Share on Facebook in new tab"><i class="facebook sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Facebook</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://news.ycombinator.com/submitlink?u={{ $base }}/event/about/&amp;t=About" role=button aria-label="Share on Hackernews in new tab"><i class="hackernews sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Hackernews</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ $base }}/event/about/&amp;title=About&amp;summary=About&amp;source={{ $base }}/event/about/" role=button aria-label="Share on Linkedin in new tab"><i class="linkedin sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Linkedin</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://pinterest.com/pin/create/button/?url={{ $base }}/event/about/&amp;media={{ $base }}/event/about/&amp;description=About" role=button aria-label="Share on Pinterest in new tab"><i class="pinterest sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Pinterest</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://reddit.com/submit/?url={{ $base }}/event/about/&amp;resubmit=true&amp;title=About" role=button aria-label="Share on Reddit in new tab"><i class="reddit sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Reddit</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=About&amp;caption=About&amp;content={{ $base }}/event/about/&amp;canonicalUrl={{ $base }}/event/about/" role=button aria-label="Share on Tumblr in new tab"><i class="tumblr sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Tumblr</span></a></li><li><a rel="noopener noreferrer" target=_blank href="http://vk.com/share.php?title=About&amp;url={{ $base }}/event/about/" role=button aria-label="Share on Vk in new tab"><i class="vk sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Vk</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://twitter.com/intent/tweet/?text=About&amp;url={{ $base }}/event/about/" role=button aria-label="Share on Twitter in new tab"><i class="twitter sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Twitter</span></a></li><li><a rel="noopener noreferrer" target=_blank href="https://www.xing.com/app/user?op=share;url={{ $base }}/event/about/;title=About" role=button aria-label="Share on Xing in new tab"><i class="xing sri" aria-hidden=true></i>
<span class="t srt" role=tooltip>Share on Xing</span></a></li></ul></nav></details></div><hr class=hide><footer id=main-footer><div class="column column--multicols pagewidth" style=--multicols:2><div id=main-footer-primary><p><strong>Address</strong></p><p>Office of Dean (R & D),<br>2nd floor, Rahul Bajaj Technology Innovation Centre (RBTIC),<br>Opp. VMCC, IIT Bombay,<br>Powai, Mumbai, Maharashtra - 400076<br><br></p></div><div id=main-footer-secondary class=column style=--col:10rem><div><p><strong>Quick Links</strong></p><ul><li><a href={{ $base }}/event/about/>About</a></li><li><a href={{ $base }}/>Home</a></li><li><a href={{ $base }}/#abouttechconnect>About TechConnect</a></li><li><a href=https://rnd.iitb.ac.in/techconnect/media/files/techconnect/handout/book.techconnect.2025.pdf>Event compendium - PDF (2025)</a></li><li><a href={{ $base }}/event/exhibition/>Exhibition</a></li><li><a href={{ $base }}/event/symposium/>Symposium</a></li><li><a href={{ $base }}/rescon/>ResCon</a></li><li><a href={{ $base }}/event/contact/>Contact</a></li><li><a href={{ $base }}/event/team/>Team</a></li><li><a href={{ $base }}/event/gallery/>Gallery</a></li><li><a href={{ $base }}/event/highlights/>2024 Highlights</a></li></ul></div><div><p><strong>Organizers</strong> (2025)</p><ul><li><a class=footer-img-link href=https://iitbresearchpark.com/ target=_blank><img src=https://marketingandbusinessdevelopment-iitbrp.s3.ap-south-1.amazonaws.com/aspire-website-revamp-media/public/brand-logo/aspire-logo.png alt=Aspire>
Aspire</a></li><li><a class=footer-img-link href=https://acr.iitbombay.org/ target=_blank><img src=/media/images/logo/logo.drf.bg_transparent.png alt="IITB DRF">
IITB DRF</a></li><li><a class=footer-img-link href=https://www.cep.iitb.ac.in/ target=_blank><img src=https://www.cep.iitb.ac.in/assets/img/eo_iitb.png alt="IITB EO">
IITB EO</a></li><li><a class=footer-img-link href=https://rnd.iitb.ac.in/ target=_blank><img src=/media/images/logo/logo.ircc.bg_light.fg_dark.png alt=IRCC>
IRCC</a></li><li><a class=footer-img-link href=https://sineiitb.org/ target=_blank><img src=https://sineiitb.org/Header/logo.png alt=SINE>
SINE</a></li><li><a class=footer-img-link href=https://tihiitb.org/ target=_blank><img src=https://tihiitb.org/wp-content/uploads/2023/10/TIH-logo.png alt=TIH>
TIH</a></li></ul></div></div></div><div id=unified-footer><p id=license style=text-transform:none>© IIT Bombay - TechConnect 2026 (IRCC)</p><nav id=menu-footer class=has-aria-label-top aria-label="Let's keep in touch!"><ul role=presentation><li><a href=mailto:techconnect2025@ircc.iitb.ac.in aria-label=email><i class=icon>email</i>
<span class=t role=tooltip>email</span></a></li></ul></nav></div></footer></main>
@endsection
