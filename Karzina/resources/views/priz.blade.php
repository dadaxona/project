
<!DOCTYPE html>
<html lang="ru"  x-data="data">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dovrug' - Furniture Group | Dovrug' Mebel</title>
    <meta name="description" content=" Dovrug' mebellar uyi - Xorazm bo'ylab barcha turdagi mebellar ishlab chiqaruvchidan!">

    <link rel="stylesheet" href="https://dovrug.uz/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/fonts/flaticon.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/css/nice-select.min.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/css/meanmenu.css" />

    <link rel="stylesheet" type="text/css" href="https://dovrug.uz/assets/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="https://dovrug.uz/assets/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="https://dovrug.uz/assets/css/navigation.css" />

    <link rel="stylesheet" href="https://dovrug.uz/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/css/modal-video.min.css" />

    <link rel="stylesheet" href="https://dovrug.uz/assets/css/style.css" />
    <link rel="stylesheet" href="https://dovrug.uz/assets/css/responsive.css" />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<link rel='stylesheet' type='text/css' property='stylesheet' href='//dovrug.uz/_debugbar/assets/stylesheets?v=1634813851&theme=auto'><script type='text/javascript' src='//dovrug.uz/_debugbar/assets/javascript?v=1634813851'></script><script type="text/javascript">jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement('style'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>
<body>
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="pre-load">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
        </div>
    </div>
</div>
<!-- Top header -->
    <div class="header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-7">
                <div class="left">
                    <ul>
                        <li>
                            <i class="flaticon-delivery-truck"></i>
                            <span>Бепул етказиб бериш*</span>
                        </li>
                        <li>
                            <i class="flaticon-quality"></i>
                            <span>Тасдикланган сифат</span>
                        </li>
                        <li>
                            <i class="flaticon-giftbox"></i>
                            <span>Чегирмалар ва акциялар</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-5">
                <div class="right">
                    <div class="inner">
                        <div class="call">
                            <i class="flaticon-email"></i>
                            <a href="mailto:devsobirov@gmail.com">devsobirov@gmail.com</a>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="call">
                            <i class="flaticon-phone-call"></i>
                            <a href="tel:+998934690797">+998-93-469-0797</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main header-->
    <div class="nav-top-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-2">
                <div class="left">
                    <a href="/">
                        <img src="https://dovrug.uz/assets/images/logo_dovrug.png" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="middle">
                    <form>
                        <div class="form-group">
                            <div class="inner">
                                <select>
                                    <option>Барча мебеллар</option>
                                                                            <option value="1">Юмшок Мебеллари</option>
                                                                            <option value="2">Офис Мебеллари</option>
                                                                            <option value="3">Йотокхона Мебеллари</option>
                                                                            <option value="4">Ошхона Мебеллари</option>
                                                                            <option value="5">Шкафлар</option>
                                                                            <option value="6">Мехмонхона Мебеллари</option>
                                                                            <option value="7">Компютер столлар</option>
                                                                            <option value="8">Мдф ешиклар</option>
                                                                            <option value="9">Прихожка</option>
                                                                            <option value="10">Стуллар</option>
                                                                            <option value="11">Кроватлар</option>
                                                                            <option value="12">Болалар Мебеллари</option>
                                                                            <option value="13">Богча Мебеллари</option>
                                                                            <option value="14">Лофт</option>
                                                                    </select>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Каталог буйича излаш"
                            />
                            <button type="submit" class="btn">
                                <i class="bx bx-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right">
                    <ul>
                        <li>
                            <button id="open-basket" type="button" class="btn wishlist cart-popup-btn" data-bs-toggle="modal" data-bs-target="#basketModal">
                                <i class="bx bxs-cart"></i>
                                <span x-text="basketItems.length"></span>
                            </button>
                        </li>
                        <li>
                            <div class="inner">
                                <i class="flaticon-pin"></i>
                                <a href="#">Манзил</a>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <i class="flaticon-question"></i>
                                <a href="#">Ёрдам</a>
                            </div>
                        </li>
                        <li>
                                                    <a class="join" href="https://dovrug.uz/login"><i class="flaticon-round-account-button-with-user-inside"></i>
                                Кириш
                            </a>
                                                </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
    <div class="navbar-area sticky-top">
    <div class="mobile-nav">
        <a href="#" class="logo">
            <img src="https://dovrug.uz/assets/images/logo.png" alt="Logo" />
        </a>
    </div>

    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <div
                    class="collapse navbar-collapse mean-menu"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                href="/"
                                class="nav-link dropdown-toggle active"
                            >Бош сахифа </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Каталог <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="scrollable-dropdown-menu position-relative">
                                    <ul>
                                        <li class="nav-item">
                                            <a href="https://dovrug.uz/catalog" class="nav-link">Барча мебеллар</a>
                                        </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Юмшок Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Офис Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Йотокхона Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Ошхона Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Шкафлар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Мехмонхона Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Компютер столлар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Мдф ешиклар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Прихожка</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Стуллар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Кроватлар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Болалар Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Богча Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Лофт</a>
                                            </li>
                                                                                                                            <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Юмшок Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Офис Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Йотокхона Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Ошхона Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Шкафлар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Мехмонхона Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Компютер столлар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Мдф ешиклар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Прихожка</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Стуллар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Кроватлар</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Болалар Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Богча Мебеллари</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="https://dovrug.uz/catalog" class="nav-link">Лофт</a>
                                            </li>
                                                                            </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="https://dovrug.uz/dovrug-haqida" class="nav-link">Биз хакимизда</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Мижозларга <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="https://dovrug.uz/hizmatlar" class="nav-link">Хизматлар</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://dovrug.uz/tolovlar" class="nav-link">Муддатли тулов</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://dovrug.uz/yetkazib-berish" class="nav-link">Етказиб бериш</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://dovrug.uz/mahfiylik-siyosati" class="nav-link"
                                    >Махфийлик сиёсати</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a href="https://dovrug.uz/kop-beriluvchi-savollar" class="nav-link"
                                    >Куп берилувчи саволлар</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="https://dovrug.uz/aloqa" class="nav-link">Алока</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <h4>
                            <a href="https://dovrug.uz/catalog">Харид килинг</a>
                            ва <span>40%</span> гача чегирмага эга булинг
                        </h4>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

    <!-- Слайдер -->
    <div class="banner-area">
        <div class="container-fluid">
            <div class="rev_slider_wrapper">
                <div
                    id="rev_slider_1"
                    class="rev_slider"
                    data-version="5.4.5"
                    style="display: none"
                >
                    <ul>
                        <li data-index="rs-1" data-transition="fade">
                            <img
                                src="https://dovrug.uz/assets/images/transparent.png"
                                alt="Nature"
                                class="rev-slidebg"
                            />

                            <div
                                class="tp-caption tp-resizeme banner-h1"
                                data-x="['left','left','center','center']"
                                data-hoffset=""
                                data-y="center"
                                data-voffset="['-60','-100','-300','-350']"
                                data-width="['900', '800', '700', '400']"
                                data-height="['auto', 'auto', 'auto', 'auto']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"power3.out"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-basealign="slide"
                                data-visibility="['on', 'on', 'on', 'on']"
                                data-whitespace="['normal', 'normal', 'normal', 'normal']"
                                style="z-index: 9; white-space: nowrap"
                            >
                                Сотиб олинг ва фоизсиз булиб туланг!
                            </div>

                            <div
                                class="tp-caption tp-resizeme banner-p"
                                data-x="['left','left','center','center']"
                                data-hoffset=""
                                data-y="center"
                                data-voffset="['75','40','-160','-170']"
                                data-width="['auto', '500', '500', '380']"
                                data-height="['auto', 'auto', 'auto', 'auto']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-basealign="slide"
                                data-visibility="['on', 'on', 'on', 'on']"
                                data-whitespace="['nowrap', 'normal', 'normal', 'normal']"
                                style="z-index: 9; white-space: nowrap"
                            >
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br />sed
                                diam nonumy eirmod tempor invidunt ut
                            </div>

                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['left','left','center','center']"
                                data-hoffset=""
                                data-y="center"
                                data-voffset="['160','150','-40','10']"
                                data-width="['auto']"
                                data-height="['auto']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-basealign="slide"
                                style="z-index: 9; white-space: nowrap"
                            >
                                <a class="common-btn banner-btn" href="https://dovrug.uz/tolovlar">
                                    Батафсил
                                </a>
                            </div>

                            <div
                                class="tp-caption tp-resizeme banner-img"
                                data-x="['right','right','center','center']"
                                data-hoffset=""
                                data-y="['top','top','bottom','bottom']"
                                data-voffset="['0','200','140','220']"
                                data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":600,"frame":"0","from":"x:right;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['right','right','center','center']"
                                data-basealign="slide"
                                style="z-index: 5; border-width: 0px"
                            >
                                <img
                                    src="https://dovrug.uz/assets/images/banner/banner1.png"
                                    alt="Banner"
                                    data-ww="['700px','300px','400px','350px']"
                                    data-hh="['700px','350px','350px','350px']"
                                    data-no-retina
                                />
                            </div>

                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left']"
                                data-hoffset="100"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="50"
                                data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":600,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['right','right','right','right']"
                                style="z-index: 5; border-width: 0px"
                            >
                                <img
                                    src="https://dovrug.uz/assets/images/banner/banner-shape1.png"
                                    alt="Banner"
                                    data-ww="50px"
                                    data-hh="50px"
                                    data-no-retina
                                />
                            </div>
                        </li>
                        <li data-index="rs-2" data-transition="fade">
                            <img
                                src="https://dovrug.uz/assets/images/transparent.png"
                                alt="Nature"
                                class="rev-slidebg"
                            />

                            <div
                                class="tp-caption tp-resizeme banner-h1"
                                data-x="['left','left','center','center']"
                                data-hoffset=""
                                data-y="center"
                                data-voffset="['-60','-100','-300','-350']"
                                data-width="['850', '800', '700', '400']"
                                data-height="['auto', 'auto', 'auto', 'auto']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"power3.out"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-basealign="slide"
                                data-visibility="['on', 'on', 'on', 'on']"
                                data-whitespace="['normal', 'normal', 'normal', 'normal']"
                                style="z-index: 9; white-space: nowrap"
                            >
                                Барча турдаги мебеллар бир жойда!
                            </div>

                            <div
                                class="tp-caption tp-resizeme banner-p"
                                data-x="['left','left','center','center']"
                                data-hoffset=""
                                data-y="center"
                                data-voffset="['75','40','-160','-170']"
                                data-width="['auto', '500', '500', '380']"
                                data-height="['auto', 'auto', 'auto', 'auto']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-basealign="slide"
                                data-visibility="['on', 'on', 'on', 'on']"
                                data-whitespace="['nowrap', 'normal', 'normal', 'normal']"
                                style="z-index: 9; white-space: nowrap"
                            >
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br />sed
                                diam nonumy eirmod tempor invidunt ut <br />
                                labore et dolore magna aliquyam erat.
                            </div>

                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['left','left','center','center']"
                                data-hoffset=""
                                data-y="center"
                                data-voffset="['160','150','-40','10']"
                                data-width="['auto']"
                                data-height="['auto']"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-basealign="slide"
                                style="z-index: 9; white-space: nowrap"
                            >
                                <a class="common-btn" href="https://dovrug.uz/catalog"> Каталог </a>
                            </div>

                            <div
                                class="tp-caption tp-resizeme banner-img"
                                data-x="['right','right','center','center']"
                                data-hoffset=""
                                data-y="['top','top','bottom','bottom']"
                                data-voffset="['0','200','140','220']"
                                data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":600,"frame":"0","from":"x:right;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['right','right','center','center']"
                                data-basealign="slide"
                                style="z-index: 5; border-width: 0px"
                            >
                                <img
                                    src="https://dovrug.uz/assets/images/banner/banner2.png"
                                    alt="Banner"
                                    data-ww="['600px','300px','400px','350px']"
                                    data-hh="['700px','350px','350px','350px']"
                                    data-no-retina
                                />
                            </div>

                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['left','left','left','left']"
                                data-hoffset="100"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="50"
                                data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":0,"speed":600,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['right','right','right','right']"
                                style="z-index: 5; border-width: 0px"
                            >
                                <img
                                    src="https://dovrug.uz/assets/images/banner/banner-shape1.png"
                                    alt="Banner"
                                    data-ww="50px"
                                    data-hh="50px"
                                    data-no-retina
                                />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Новинки -->
    <div class="products-area py-5">
        <div class="container">
            <div class="section-title d-flex justify-content-between">
                <h2>Янги товарлар</h2>
            </div>
            <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Лофт</a>
        <img src="https://dovrug.uz/assets/images/products/2022-06-16/1655358279_11173.750.jpg" alt="Стол Лофт"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/77-stol-loft">Стол Лофт</a>
            </h3>
                            <span><del>4750000 сум</del></span>
                        <span>4512500 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>1729791.7 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>977708.3 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:77,&quot;name&quot;:&quot;\u0421\u0442\u043e\u043b \u041b\u043e\u0444\u0442&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-06-16\/1655358279_11173.750.jpg&quot;,&quot;price&quot;:&quot;4750000&quot;,&quot;discount&quot;:&quot;5&quot;,&quot;category_id&quot;:14,&quot;category&quot;:{&quot;id&quot;:14,&quot;name&quot;:&quot;\u041b\u043e\u0444\u0442&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Шкафлар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-04-23/1650712608_photo_2021-03-24_13-54-18.jpg" alt="Мдф Cандик"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/76-mdf-candik">Мдф Cандик</a>
            </h3>
                        <span>500000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>191666.7 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>108333.3 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:76,&quot;name&quot;:&quot;\u041c\u0434\u0444 C\u0430\u043d\u0434\u0438\u043a&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-04-23\/1650712608_photo_2021-03-24_13-54-18.jpg&quot;,&quot;price&quot;:&quot;500000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:5,&quot;category&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;\u0428\u043a\u0430\u0444\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Стуллар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-04-22/1650613417_;;;;;o.jpg" alt="Turon"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/66-turon">Turon</a>
            </h3>
                        <span>200000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>76666.7 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>43333.3 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:66,&quot;name&quot;:&quot;Turon&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-04-22\/1650613417_;;;;;o.jpg&quot;,&quot;price&quot;:&quot;200000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:10,&quot;category&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-12/1647068189_photo5244918821431652012.jpg" alt="Мдф Эшик№35"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/64-mdf-esik35">Мдф Эшик№35</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:64,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a\u211635&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-12\/1647068189_photo5244918821431652012.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-12/1647067894_photo5244918821431652009.jpg" alt="Мдф Эшик№78"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/62-mdf-esik78">Мдф Эшик№78</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:62,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a\u211678&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-12\/1647067894_photo5244918821431652009.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-12/1647066835_photo5244918821431652013.jpg" alt="Мдф Эшик№55"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/61-mdf-esik55">Мдф Эшик№55</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:61,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a\u211655&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-12\/1647066835_photo5244918821431652013.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-12/1647066678_photo5244918821431652015.jpg" alt="Мдф Эшик№49"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/60-mdf-esik49">Мдф Эшик№49</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:60,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a\u211649&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-12\/1647066678_photo5244918821431652015.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-12/1647066536_photo5244918821431652018.jpg" alt="Мдф Эшик№59"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/58-mdf-esik59">Мдф Эшик№59</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:58,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a\u211659&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-12\/1647066536_photo5244918821431652018.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                            </div>
            <div class="text-center">
                <a class="common-btn" href="https://dovrug.uz/catalog">
                    Барчаси
                    <img src="https://dovrug.uz/assets/images/shape1.png" alt="Shape">
                    <img src="https://dovrug.uz/assets/images/shape2.png" alt="Shape">
                </a>
            </div>
        </div>
    </div>

    <!-- Предложения дня -->
    <div class="buy-area">
        <div class="buy-shape">
            <img src="https://dovrug.uz/assets/images/shape3.png" alt="Shape" />
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0 align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="buy-img">
                        <img src="assets/images/buy-main1.png" alt="Buy" />
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="buy-content ptb-100">
                        <h2>Кун таклифи</h2>
                        <p>Чарм ок диван ЧД-04</p>
                        <ul>
                            <li>1600000.00</li>
                            <li>
                                <del>2000000 сум</del>
                            </li>
                        </ul>
                        <a class="common-btn" href="https://dovrug.uz/product/58-mdf-esik59">
                            Батафсил
                            <img src="https://dovrug.uz/assets/images/shape1.png" alt="Shape" />
                            <img src="assets/images/shape2.png" alt="Shape" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Хит продаж -->
    <div class="products-area py-5">
        <div class="container">
            <div class="section-title d-flex justify-content-between">
                <h2>Энг оммабоп махсулотлар</h2>
            </div>
            <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Стуллар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-11/1646982189_photo5204041079349950709.jpg" alt="Стул Хуррам СХ-27"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/34-stul-xurram-sx-27">Стул Хуррам СХ-27</a>
            </h3>
                        <span>700000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>268333.3 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>151666.7 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:34,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b \u0425\u0443\u0440\u0440\u0430\u043c \u0421\u0425-27&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-11\/1646982189_photo5204041079349950709.jpg&quot;,&quot;price&quot;:&quot;700000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:10,&quot;category&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-11/1646980438_photo5235879070619775029 (2).jpg" alt="Мдф Эшик№13"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/28-mdf-esik13">Мдф Эшик№13</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:28,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a\u211613&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-11\/1646980438_photo5235879070619775029 (2).jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Прихожка</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-12/1647063618_photo5289859709949556706.jpg" alt="Прихожю НЕО ПН -02"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/52-prixozyu-neo-pn-02">Прихожю НЕО ПН -02</a>
            </h3>
                        <span>1700000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>651666.7 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>368333.3 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:52,&quot;name&quot;:&quot;\u041f\u0440\u0438\u0445\u043e\u0436\u044e \u041d\u0415\u041e \u041f\u041d -02&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-12\/1647063618_photo5289859709949556706.jpg&quot;,&quot;price&quot;:&quot;1700000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:9,&quot;category&quot;:{&quot;id&quot;:9,&quot;name&quot;:&quot;\u041f\u0440\u0438\u0445\u043e\u0436\u043a\u0430&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Компютер столлар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-09/1646805722_photo_2022-03-09_11-01-44.jpg" alt="Компьютерный стол КС-01"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/8-kompyuternyi-stol-ks-01">Компьютерный стол КС-01</a>
            </h3>
                            <span><del>750000 сум</del></span>
                        <span>675000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>258750 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>146250 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:8,&quot;name&quot;:&quot;\u041a\u043e\u043c\u043f\u044c\u044e\u0442\u0435\u0440\u043d\u044b\u0439 \u0441\u0442\u043e\u043b \u041a\u0421-01&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-09\/1646805722_photo_2022-03-09_11-01-44.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:&quot;10&quot;,&quot;category_id&quot;:7,&quot;category&quot;:{&quot;id&quot;:7,&quot;name&quot;:&quot;\u041a\u043e\u043c\u043f\u044e\u0442\u0435\u0440 \u0441\u0442\u043e\u043b\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Прихожка</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-09/1646804587_photo_2021-02-25_19-51-37.jpg" alt="Прихожки ПХ-05"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/1-prixozki-px-05">Прихожки ПХ-05</a>
            </h3>
                            <span><del>2500000 сум</del></span>
                        <span>2250000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>862500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>487500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:1,&quot;name&quot;:&quot;\u041f\u0440\u0438\u0445\u043e\u0436\u043a\u0438 \u041f\u0425-05&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-09\/1646804587_photo_2021-02-25_19-51-37.jpg&quot;,&quot;price&quot;:&quot;2500000&quot;,&quot;discount&quot;:&quot;10&quot;,&quot;category_id&quot;:9,&quot;category&quot;:{&quot;id&quot;:9,&quot;name&quot;:&quot;\u041f\u0440\u0438\u0445\u043e\u0436\u043a\u0430&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Мдф ешиклар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-11/1646978250_photo5328172347238231620.jpg" alt="Мдф Эшик №05"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/15-mdf-esik-05">Мдф Эшик №05</a>
            </h3>
                        <span>750000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>287500 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>162500 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:15,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u042d\u0448\u0438\u043a \u211605&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-11\/1646978250_photo5328172347238231620.jpg&quot;,&quot;price&quot;:&quot;750000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:8,&quot;category&quot;:{&quot;id&quot;:8,&quot;name&quot;:&quot;\u041c\u0434\u0444 \u0435\u0448\u0438\u043a\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Стуллар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-11/1646982344_photo5273819853934934639 (1).jpg" alt="Стул Нео СН-34"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/36-stul-neo-sn-34">Стул Нео СН-34</a>
            </h3>
                        <span>700000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>268333.3 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>151666.7 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:36,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b \u041d\u0435\u043e \u0421\u041d-34&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-11\/1646982344_photo5273819853934934639 (1).jpg&quot;,&quot;price&quot;:&quot;700000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:10,&quot;category&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                                    <div class="col-sm-6 col-lg-3">
                        <div class="products-item">
    <div class="top">
        <a class="product-category" href="#">Стуллар</a>
        <img src="https://dovrug.uz/assets/images/products/2022-03-11/1646982447_photo5264827609756317439.jpg" alt="Стул Парламет СП-29"/>
        <div class="inner">
            <h3>
                <a href="https://dovrug.uz/product/38-stul-parlamet-sp-29">Стул Парламет СП-29</a>
            </h3>
                        <span>700000 сум</span>
            <div class="dotted-content">
                <span>3 ойга</span>
                <span class="dotted"></span>
                <span>268333.3 сумдан</span>
            </div>
            <div class="dotted-content">
                <span>6 ойга</span>
                <span class="dotted"></span>
                <span>151666.7 сумдан</span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a class="cart-text" href="#" @click.prevent="addToBasket({&quot;id&quot;:38,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b \u041f\u0430\u0440\u043b\u0430\u043c\u0435\u0442 \u0421\u041f-29&quot;,&quot;image&quot;:&quot;assets\/images\/products\/2022-03-11\/1646982447_photo5264827609756317439.jpg&quot;,&quot;price&quot;:&quot;700000&quot;,&quot;discount&quot;:null,&quot;category_id&quot;:10,&quot;category&quot;:{&quot;id&quot;:10,&quot;name&quot;:&quot;\u0421\u0442\u0443\u043b\u043b\u0430\u0440&quot;}})">Саватга кушиш</a>
        <i class="bx bx-plus"></i>
    </div>
</div>
                    </div>
                            </div>
            <div class="text-center">
                <a class="common-btn" href="https://dovrug.uz/catalog">
                    Барчаси
                    <img src="https://dovrug.uz/assets/images/shape1.png" alt="Shape">
                    <img src="assets/images/shape2.png" alt="Shape">
                </a>
            </div>
        </div>
    </div>

    <!-- Партнёры -->
    <section class="brand-area py-5">
    <div class="container">
        <div class="section-title">
            <h2>Бизга ишонган брендлар</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand1.png" alt="Brand" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand2.png" alt="Brand" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand3.png" alt="Brand" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand4.png" alt="Brand" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand5.png" alt="Brand" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand6.png" alt="Brand" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="index-4.html#">
                        <img src="assets/images/brand/brand7.png" alt="Brand" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Приемущество -->
    <div class="support-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-free-delivery"></i>
                    <h3>25 йиллик тажриба</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape" />
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-free-delivery"></i>
                    <h3>Кенг ассортимент</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape" />
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-call-center"></i>
                    <h3>Буюртма асосида ишлаш</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape" />
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-giftbox"></i>
                    <h3>% сиз булиб тулаш</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape" />
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-free-delivery"></i>
                    <h3>Бепул етказиб бериш</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape" />
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-free-delivery"></i>
                    <h3>40% гача чегирма</h3>
                    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
                    <img src="assets/images/support-shape1.png" alt="Shape" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
    <footer class="footer-area pt-100 pb-70">
    <div class="footer-shape">
        <img src="assets/images/footer-right-shape.png" alt="Shape" />
        <img src="assets/images/shape5.png" alt="Shape" />
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo w-75" href="/">
                            <img src="assets/images/logo_dovrug.png" alt="Logo" />
                        </a>
                        <ul>
                            <li>
                                <i class="flaticon-pin"></i>
                                <a href="#">Янгиарик туман, Урганч к. № 1</a>
                                <a href="#">Хоразм, Узбекистон</a>
                            </li>
                            <li>
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:+998934690797">+998-93-469-07-97</a>
                                <a href="tel:+998934690797">+998-93-469-07-97</a>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <a href="mailto:devsobirov@gmail.com">
                                    <span class="__cf_email__">devsobirov@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="footer-item">
                    <div class="footer-services">
                        <h3>Dovrug' харитада</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4489.165267031638!2d60.55300134081764!3d41.32717024949584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41df97c09ed5f9f9%3A0x9b8943cbeafdd55d!2zWWFuZ2lhcmlxLCDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1646141260702!5m2!1sru!2s"
                                class="block w-100 px-4" height="250px" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-services">
                        <h3>Мижозларга</h3>
                        <ul>
                            <li>
                                <a href="https://dovrug.uz/dovrug-haqida">Биз хакимизда</a>
                            </li>
                            <li>
                                <a href="https://dovrug.uz/hizmatlar">Хизматлар</a>
                            </li>
                            <li>
                                <a href="https://dovrug.uz/yetkazib-berish">Етказиб бериш</a>
                            </li>
                            <li>
                                <a href="https://dovrug.uz/tolovlar">Тулов турлари</a>
                            </li>
                            <li>
                                <a href="https://dovrug.uz/mahfiylik-siyosati">Махфийлик сиёсати</a>
                            </li>
                            <li>
                                <a href="https://dovrug.uz/kop-beriluvchi-savollar">Куп берилувчи саволлар</a>
                            </li>
                            <li>
                                <a href="https://dovrug.uz/aloqa">Алока</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6 col-lg-6">
                    <div class="social-links text-start">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="payment-cards text-end">
                        <ul>
                            <li>
                                <a href="index-4.html#" target="_blank">
                                    <img src="assets/images/payment1.png" alt="Payment" />
                                </a>
                            </li>
                            <li>
                                <a href="index-4.html#" target="_blank">
                                    <img src="assets/images/payment2.png" alt="Payment" />
                                </a>
                            </li>
                            <li>
                                <a href="index-4.html#" target="_blank">
                                    <img src="assets/images/payment3.png" alt="Payment" />
                                </a>
                            </li>
                            <li>
                                <a href="index-4.html#" target="_blank">
                                    <img src="assets/images/payment4.png" alt="Payment" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright-area">
    <div class="container">
        <div class="copyright-item">
            <p>
                Copyright ©2022 Design & Developed by
                <a href="#" target="_blank">Breezesoft</a>
            </p>
        </div>
    </div>
</div>

<!-- Global Modals -->
    <!-- Корзинка -->
<div class="modal fade popup-modal" id="basketModal" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 585px">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Товарлар саватчаси <span x-text="'жами ' + calcTotalAmount() +'та'"></span></h2>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="cart-table">
                    <div x-show="!basketItems || !basketItems.length" class="text-center my-3">Саватча буш</div>
                    <table class="table" x-show="basketItems && basketItems.length">
                        <tbody>
                        <template x-for="product in basketItems">
                            <tr :key="product.id">
                                <th scope="row">
                                    <img :src="product.image" :alt="product.name" />
                                </th>
                                <td>
                                    <h3 x-text="product.name"></h3>
                                    <span class="rate" x-text="product.price + ' x ' + product.amount"></span>
                                </td>
                                <td>
                                    <ul class="number" style="min-width: 110px">
                                        <li>
                                            <span class="minus" @click="changeProductAmount(product, true)">-</span>
                                            <input type="number" x-model="product.amount"/>
                                            <span class="plus" @click="changeProductAmount(product)">+</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a class="close" href="#" @click.prevent="removeFromBasket(product.id)">
                                        <i class="bx bx-x"></i>
                                    </a>
                                </td>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                    <div class="total-amount">
                        <h3>Сумма: <span x-text="calcTotalCost()"></span></h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="https://dovrug.uz/order">
                    <button type="submit" class="btn common-btn">
                        Буюртма бериш
                        <img src="https://dovrug.uz/assets/images/shape1.png" alt="Shape" />
                        <img src="https://dovrug.uz/assets/images/shape2.png" alt="Shape" />
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Pop-up button-->
<div class="go-top">
    <i class="bx bxs-up-arrow-circle"></i>
    <i class="bx bxs-up-arrow-circle"></i>
</div>

<div class="position-fixed custom-backdrop" x-show="showLoader">
    <i class="bx bx-loader bx-spin text-white" style="font-size: 80px;"></i>
</div>
<script src="https://dovrug.uz/assets/js/jquery.min.js"></script>
<script src="https://dovrug.uz/assets/js/popper.min.js"></script>
<script src="https://dovrug.uz/assets/js/bootstrap.min.js"></script>

<script src="https://dovrug.uz/assets/js/jquery.nice-select.min.js"></script>
<script src="https://dovrug.uz/assets/js/jquery.meanmenu.js"></script>
<script src="https://dovrug.uz/assets/js/jquery.themepunch.tools.min.js"></script>
<script src="https://dovrug.uz/assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="https://dovrug.uz/assets/js/jquery.mixitup.min.js"></script>
<script src="https://dovrug.uz/assets/js/owl.carousel.min.js"></script>
<script src="https://dovrug.uz/assets/js/custom.js"></script>

<script>
    document.addEventListener('alpine:init', () => {
        function getBasketItems() {
            let products = localStorage.getItem('products');
            return (products === null || !products) ?  []
                : JSON.parse(products);
        }
        function defaultOrderData() {
            return {
                name: null, email: null, phone: null, extra_phone: null, region: null, address: null,
                description: null, payment_type: 'usual', is_organisation: null, price: null, products: null
            }
        }
        function getStoredOrderData() {
            let orderData = defaultOrderData();
            let stored = localStorage.getItem('orderData');
            if (stored) {
                stored = JSON.parse(stored);
                orderData.id = stored.id
                orderData.name = stored.name;
                orderData.email = stored.email;
                orderData.phone = stored.phone;
                orderData.extra_phone = stored.extra_phone;
                orderData.region = stored.region;
                orderData.address = stored.address;
                orderData.is_organisation = stored.is_organisation;
            }
            return orderData;
        }
        Alpine.data('data', () => ({
            basketItems : getBasketItems(),
            order: getStoredOrderData(),
            errors: {},
            defaultImage: 'https://dovrug.uz/no-image-product.png',
            showLoader: false,
            showOrderSucceed: false,
            addToBasket (product) {
                this.hideOrderSucceed()
                let p = {};
                p.id = product.id;
                p.image = product.image ? product.image : this.defaultImage;
                p.price = product.price;
                p.name = product.name;
                p.amount = 1;
                this.basketItems.push(p);
                this.refreshBasketData();
                document.getElementById('open-basket').click()
            },
            changeProductAmount(product, decrement = false) {
              if (decrement && product.amount > 1) product.amount--;
              if (!decrement) product.amount++;
              this.refreshBasketData();
            },
            removeFromBasket(id) {
                if (this.basketItems.length > 0) {
                    this.basketItems = this.basketItems.filter(product => product.id !== id)
                }
                this.refreshBasketData()
            },
            calcTotalAmount() {
                if (!this.basketItems.length) return 0;
                let total = 0;
                this.basketItems.forEach(p => total += p.amount);
                return total;
            },
            calcTotalCost() {
                if (this.basketItems.length < 1) return 0;
                let totalCost = 0;
                this.basketItems.forEach(product => {
                    totalCost += Math.round(product.amount * product.price);
                })
                return totalCost;
            },
            storeBasketItems(products) {
                localStorage.setItem('products', JSON.stringify(products));
            },
            refreshBasketData() {
                this.storeBasketItems(this.basketItems);
                this.basketItems = getBasketItems();
            },
            submitOrderForm() {
                if (!this.basketItems || !this.basketItems.length) return alert('Please fill form')
                //document.getElementById('submit-btn').click();
                this.showLoader = true;
                this.order.products = JSON.stringify(this.basketItems);
                this.order.price = this.calcTotalCost()

                axios.post('https://dovrug.uz/order', this.order)
                    .then(res => {
                        this.errors = {}
                        this.basketItems = [];
                        this.storeBasketItems([]);
                        this.storeOrderData(res.data.order_id);
                        this.order = getStoredOrderData();
                        this.showOrderSucceed = true;
                        this.showLoader = false
                    })
                    .catch(err => {
                        this.errors = err.response.data.errors;
                        this.storeOrderData();
                        this.order = getStoredOrderData();
                        this.showLoader = false;
                    });
            },
            storeOrderData(id = null) {
                let stored = {};
                stored.id = id
                stored.name = this.order.name
                stored.email = this.order.email
                stored.phone = this.order.phone
                stored.extra_phone = this.order.extra_phone
                stored.region = this.order.region
                stored.address = this.order.address
                stored.is_organisation = this.order.is_organisation
                localStorage.setItem('orderData', JSON.stringify(stored));
            },
            hideOrderSucceed() {
                this.showOrderSucceed = false;
            }
        }));
    });
</script>

<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"https:\/\/dovrug.uz\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"X20ed44be45af03d17891936d2b120209","datetime":"2022-08-09 14:33:09","utime":1660037589.2638580799102783203125,"method":"GET","uri":"\/","ip":"84.54.71.137"},"php":{"version":"8.1.3","interface":"apache2handler"},"messages":{"count":100,"messages":[{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258100032806396484375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2581539154052734375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2581939697265625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2582280635833740234375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2582719326019287109375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2583029270172119140625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258335113525390625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2583639621734619140625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2584021091461181640625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258431911468505859375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258469104766845703125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2584969997406005859375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258532047271728515625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2585608959197998046875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2585918903350830078125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2586200237274169921875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258655071258544921875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258686065673828125,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.258716106414794921875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2587449550628662109375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.25934600830078125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2593829631805419921875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.259416103363037109375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2594459056854248046875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.259478092193603515625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2595069408416748046875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2595369815826416015625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2595651149749755859375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.259601116180419921875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2596299648284912109375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2596600055694580078125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2596890926361083984375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.259725093841552734375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2597560882568359375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2597849369049072265625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2598140239715576171875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.259848117828369140625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2598769664764404296875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2599070072174072265625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.259934902191162109375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2606260776519775390625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2606639862060546875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26070690155029296875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2607390880584716796875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2607729434967041015625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2608029842376708984375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2608339786529541015625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2608640193939208984375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.260900020599365234375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26093006134033203125,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.260960102081298828125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2609899044036865234375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.261024951934814453125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26105594635009765625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.261086940765380859375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26111602783203125,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2611510753631591796875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26117992401123046875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.261210918426513671875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26123905181884765625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.261725902557373046875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2617609500885009765625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26179409027099609375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2618238925933837890625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2618620395660400390625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26189899444580078125,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.261931896209716796875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26196193695068359375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2619979381561279296875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2620279788970947265625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2620599269866943359375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2620899677276611328125,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2621250152587890625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.262155055999755859375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26218509674072265625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2622148990631103515625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26224994659423828125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.262279033660888671875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.262310028076171875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.262339115142822265625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2628290653228759765625,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26286411285400390625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.262897014617919921875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.262928009033203125,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26296901702880859375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2630031108856201171875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2630360126495361328125,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2630660533905029296875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.263103008270263671875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26313304901123046875,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.263164043426513671875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26319789886474609375,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26323604583740234375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.263266086578369140625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26329708099365234375,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.2633268833160400390625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26336193084716796875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.263391971588134765625,"collector":"log"},{"message":"[14:33:09] LOG.warning: substr(): Passing null to parameter #1 ($string) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.26342296600341796875,"collector":"log"},{"message":"[14:33:09] LOG.warning: preg_match(): Passing null to parameter #2 ($subject) of type string is deprecated in \/home\/b\/bsdovrug\/dovrug.uz\/public_html\/vendor\/barryvdh\/laravel-debugbar\/src\/JavascriptRenderer.php on line 150","message_html":null,"is_string":false,"label":"warning","time":1660037589.263452053070068359375,"collector":"log"}]},"time":{"start":1660037589.1839931011199951171875,"end":1660037589.2640221118927001953125,"duration":0.080029010772705078125,"duration_str":"80.03ms","measures":[{"label":"Booting","start":1660037589.1839931011199951171875,"relative_start":0,"end":1660037589.23023891448974609375,"relative_end":1660037589.23023891448974609375,"duration":0.0462458133697509765625,"duration_str":"46.25ms","params":[],"collector":null},{"label":"Application","start":1660037589.230578899383544921875,"relative_start":0.0465857982635498046875,"end":1660037589.2640240192413330078125,"relative_end":1.9073486328125e-6,"duration":0.0334451198577880859375,"duration_str":"33.45ms","params":[],"collector":null}]},"memory":{"peak_usage":2805336,"peak_usage_str":"3MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":25,"templates":[{"name":"site.homepage (resources\/views\/site\/homepage.blade.php)","param_count":2,"params":["latestProducts","recommendedProducts"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.product-item (resources\/views\/site\/partials\/product-item.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.trusted-brands (resources\/views\/site\/partials\/trusted-brands.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.partials.features (resources\/views\/site\/partials\/features.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.layouts.app (resources\/views\/site\/layouts\/app.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.layouts.top-header (resources\/views\/site\/layouts\/top-header.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.layouts.main-header (resources\/views\/site\/layouts\/main-header.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.layouts.navigation (resources\/views\/site\/layouts\/navigation.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.layouts.footer (resources\/views\/site\/layouts\/footer.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"},{"name":"site.layouts.global-modals (resources\/views\/site\/layouts\/global-modals.blade.php)","param_count":9,"params":["__env","app","g_categories","errors","latestProducts","recommendedProducts","__currentLoopData","product","loop"],"type":"blade"}]},"route":{"uri":"GET \/","middleware":"web, main-domain","controller":"App\\Http\\Controllers\\Site\\MainController@homepage","namespace":null,"prefix":"","where":[],"as":"home","file":"app\/Http\/Controllers\/Site\/MainController.php:11-20"},"queries":{"nb_statements":4,"nb_failed_statements":0,"accumulated_duration":0.00183000000000000002942091015256664832122623920440673828125,"accumulated_duration_str":"1.83ms","statements":[{"sql":"select `id`, `name`, `image`, `price`, `discount`, `category_id` from `products` where `category_id` is not null and `active` = 1 order by `id` desc limit 8","type":"query","params":[],"bindings":["1"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\/app\/Models\/Product\/Product.php","line":69},{"index":15,"namespace":null,"name":"\/app\/Http\/Controllers\/Site\/MainController.php","line":13},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php","line":54},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php","line":45},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php","line":262}],"duration":0.000619999999999999999895916591441391574335284531116485595703125,"duration_str":"620\u03bcs","stmt_id":"\/app\/Models\/Product\/Product.php:69","connection":"bsdovrug_prod","start_percent":0,"width_percent":33.88000000000000255795384873636066913604736328125},{"sql":"select `id`, `name` from `categories` where `categories`.`id` in (5, 8, 10, 14)","type":"query","params":[],"bindings":[],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\/app\/Models\/Product\/Product.php","line":69},{"index":20,"namespace":null,"name":"\/app\/Http\/Controllers\/Site\/MainController.php","line":13},{"index":21,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php","line":54},{"index":22,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php","line":45},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php","line":262}],"duration":0.0003499999999999999964438168742475454564555548131465911865234375,"duration_str":"350\u03bcs","stmt_id":"\/app\/Models\/Product\/Product.php:69","connection":"bsdovrug_prod","start_percent":33.88000000000000255795384873636066913604736328125,"width_percent":19.126000000000001222133505507372319698333740234375},{"sql":"select `id`, `name`, `image`, `price`, `discount`, `category_id` from `products` where `category_id` is not null and `active` = 1 and `id` not in (77, 76, 66, 64, 62, 61, 60, 58) order by RAND() limit 8","type":"query","params":[],"bindings":["1","77","76","66","64","62","61","60","58"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\/app\/Models\/Product\/Product.php","line":80},{"index":15,"namespace":null,"name":"\/app\/Http\/Controllers\/Site\/MainController.php","line":15},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php","line":54},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php","line":45},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php","line":262}],"duration":0.000540000000000000006904199434387692235759459435939788818359375,"duration_str":"540\u03bcs","stmt_id":"\/app\/Models\/Product\/Product.php:80","connection":"bsdovrug_prod","start_percent":53.00500000000000255795384873636066913604736328125,"width_percent":29.507999999999999118927007657475769519805908203125},{"sql":"select `id`, `name` from `categories` where `categories`.`id` in (7, 8, 9, 10)","type":"query","params":[],"bindings":[],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\/app\/Models\/Product\/Product.php","line":80},{"index":20,"namespace":null,"name":"\/app\/Http\/Controllers\/Site\/MainController.php","line":15},{"index":21,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php","line":54},{"index":22,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php","line":45},{"index":23,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php","line":262}],"duration":0.0003200000000000000261769772524900190546759404242038726806640625,"duration_str":"320\u03bcs","stmt_id":"\/app\/Models\/Product\/Product.php:80","connection":"bsdovrug_prod","start_percent":82.5139999999999957935870043002068996429443359375,"width_percent":17.486000000000000653699316899292171001434326171875}]},"models":{"data":{"App\\Models\\Product\\Category":8,"App\\Models\\Product\\Product":16},"count":24},"swiftmailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"IU7bdblEulTgxRs2ri8REnHPIhtyfbKE19k4qEJy","_previous":"array:1 [\n  \"url\" => \"https:\/\/dovrug.uz\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/","status_code":"<pre class=sf-dump id=sf-dump-667623237 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-667623237\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-120944213 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-120944213\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-1820301520 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1820301520\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-1319063169 data-indent-pad=\"  \"><span class=sf-dump-note>array:19<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">dovrug.uz<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>x-server-addr<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"12 characters\">45.130.41.60<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>x-forwarded-proto<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"5 characters\">https<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>x-real-ip<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"66 characters\">&quot;Chromium&quot;;v=&quot;104&quot;, &quot; Not A;Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;104&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"106 characters\">Mozilla\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/104.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">https:\/\/dovrug.uz\/order?<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"44 characters\">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7,uz;q=0.6<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"712 characters\">XSRF-TOKEN=eyJpdiI6Ii9yYUI3ZFVoMXFWN1h0dkpIenJodUE9PSIsInZhbHVlIjoiQWwwbTgxV3JBYWpROUlUanRPeTZjMVBjWk5xWGY0YkZ4QkNHK2pzTHVSZ09MMFlaU3VzN3ZBYU5IVUdCVkZWZU9qbWd0ZGxYRzM0OHBrcW9ZekY0aWE2RDJFQ3hiNVNrVUVBcmRyV1RPbGpPVHFNY2YzZVlQQkpsb3RLMkhtaFUiLCJtYWMiOiI3NzgwNTkwZWQ2OWUxNjdiNDFiY2IxY2MyYTdhOGU5ZjA0YzYwMGQ4ODg3ODg1MmFiMTcxZjg4MWE3MWEyZjE0IiwidGFnIjoiIn0%3D; dovrug_session=eyJpdiI6InlTa2hINkNyVHgzSERVMkQ1cVFDWFE9PSIsInZhbHVlIjoianRwam9nZXIySkV5YlFZVm9COXNWZmhjeWx4SGU4SVlBM0xCSkdoRkFrcWlhL3l4akFGOVR2ekpHekZDUjZzbTdmcENOOFpYNE00cW5zNHRDUG5iM3hNdXEvbHdJb29ibGlrOElWNnZUWC9kVVNSVHJDdWxaYWNTOVFIdzE2MjAiLCJtYWMiOiI4NGNkNTc3ZmUwY2FhZWY2ODA3MTljYzkwMTkxMGI3MGRkMjZkYTAwMjdlMWRjZTIyNzJjYzdmNGE2ODZmYWE1IiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1319063169\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-1160595353 data-indent-pad=\"  \"><span class=sf-dump-note>array:68<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>REDIRECT_UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">YvIp1TvJs8cdTFPLOqChNwAAAAM<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_MMDB_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_GEOIP_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_MMDB_INFO<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">result found<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_GEOIP_COUNTRY_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">Uzbekistan<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_GEOIP_LONGITUDE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">64.00000<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_GEOIP_CONTINENT_CODE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">AS<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_GEOIP_LATITUDE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">41.00000<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_GEOIP_COUNTRY_CODE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">UZ<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_HTTPS<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">on<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_PERL_USE_UNSAFE_INC<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_STATUS<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">200<\/span>\"\n  \"<span class=sf-dump-key>UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">YvIp1TvJs8cdTFPLOqChNwAAAAM<\/span>\"\n  \"<span class=sf-dump-key>MMDB_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  \"<span class=sf-dump-key>GEOIP_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  \"<span class=sf-dump-key>MMDB_INFO<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">result found<\/span>\"\n  \"<span class=sf-dump-key>GEOIP_COUNTRY_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">Uzbekistan<\/span>\"\n  \"<span class=sf-dump-key>GEOIP_LONGITUDE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">64.00000<\/span>\"\n  \"<span class=sf-dump-key>GEOIP_CONTINENT_CODE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">AS<\/span>\"\n  \"<span class=sf-dump-key>GEOIP_LATITUDE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">41.00000<\/span>\"\n  \"<span class=sf-dump-key>GEOIP_COUNTRY_CODE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">UZ<\/span>\"\n  \"<span class=sf-dump-key>HTTPS<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">on<\/span>\"\n  \"<span class=sf-dump-key>PERL_USE_UNSAFE_INC<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">dovrug.uz<\/span>\"\n  \"<span class=sf-dump-key>HTTP_X_SERVER_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">45.130.41.60<\/span>\"\n  \"<span class=sf-dump-key>HTTP_X_FORWARDED_PROTO<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">https<\/span>\"\n  \"<span class=sf-dump-key>HTTP_X_REAL_IP<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CACHE_CONTROL<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"66 characters\">&quot;Chromium&quot;;v=&quot;104&quot;, &quot; Not A;Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;104&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"106 characters\">Mozilla\/5.0 (Windows NT 10.0; WOW64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/104.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"24 characters\">https:\/\/dovrug.uz\/order?<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"44 characters\">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7,uz;q=0.6<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"712 characters\">XSRF-TOKEN=eyJpdiI6Ii9yYUI3ZFVoMXFWN1h0dkpIenJodUE9PSIsInZhbHVlIjoiQWwwbTgxV3JBYWpROUlUanRPeTZjMVBjWk5xWGY0YkZ4QkNHK2pzTHVSZ09MMFlaU3VzN3ZBYU5IVUdCVkZWZU9qbWd0ZGxYRzM0OHBrcW9ZekY0aWE2RDJFQ3hiNVNrVUVBcmRyV1RPbGpPVHFNY2YzZVlQQkpsb3RLMkhtaFUiLCJtYWMiOiI3NzgwNTkwZWQ2OWUxNjdiNDFiY2IxY2MyYTdhOGU5ZjA0YzYwMGQ4ODg3ODg1MmFiMTcxZjg4MWE3MWEyZjE0IiwidGFnIjoiIn0%3D; dovrug_session=eyJpdiI6InlTa2hINkNyVHgzSERVMkQ1cVFDWFE9PSIsInZhbHVlIjoianRwam9nZXIySkV5YlFZVm9COXNWZmhjeWx4SGU4SVlBM0xCSkdoRkFrcWlhL3l4akFGOVR2ekpHekZDUjZzbTdmcENOOFpYNE00cW5zNHRDUG5iM3hNdXEvbHdJb29ibGlrOElWNnZUWC9kVVNSVHJDdWxaYWNTOVFIdzE2MjAiLCJtYWMiOiI4NGNkNTc3ZmUwY2FhZWY2ODA3MTljYzkwMTkxMGI3MGRkMjZkYTAwMjdlMWRjZTIyNzJjYzdmNGE2ODZmYWE1IiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>PATH<\/span>\" => \"<span class=sf-dump-str title=\"60 characters\">\/usr\/local\/sbin:\/usr\/local\/bin:\/usr\/sbin:\/usr\/bin:\/sbin:\/bin<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SIGNATURE<\/span>\" => \"<span class=sf-dump-str title=\"68 characters\">&lt;address&gt;Apache\/2.4.51 (Unix) Server at dovrug.uz Port 80&lt;\/address&gt;<span class=\"sf-dump-default sf-dump-ns\">\\n<\/span><\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"20 characters\">Apache\/2.4.51 (Unix)<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">dovrug.uz<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">45.130.41.60<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">443<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_SCHEME<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">https<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"12 characters\">84.54.71.137<\/span>\"\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"38 characters\">\/home\/b\/bsdovrug\/dovrug.uz\/public_html<\/span>\"\n  \"<span class=sf-dump-key>CONTEXT_PREFIX<\/span>\" => \"\"\n  \"<span class=sf-dump-key>CONTEXT_DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"38 characters\">\/home\/b\/bsdovrug\/dovrug.uz\/public_html<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADMIN<\/span>\" => \"<span class=sf-dump-str title=\"19 characters\">webmaster@dovrug.uz<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"55 characters\">\/home\/b\/bsdovrug\/dovrug.uz\/public_html\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">22265<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_URL<\/span>\" => \"<span class=sf-dump-str>\/<\/span>\"\n  \"<span class=sf-dump-key>GATEWAY_INTERFACE<\/span>\" => \"<span class=sf-dump-str title=\"7 characters\">CGI\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>QUERY_STRING<\/span>\" => \"\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str>\/<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1660037589.184<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1660037589<\/span>\n  \"<span class=sf-dump-key>argv<\/span>\" => []\n  \"<span class=sf-dump-key>argc<\/span>\" => <span class=sf-dump-num>0<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1160595353\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1119893842 data-indent-pad=\"  \"><span class=sf-dump-note>array:2<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">IU7bdblEulTgxRs2ri8REnHPIhtyfbKE19k4qEJy<\/span>\"\n  \"<span class=sf-dump-key>dovrug_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">FcLuW2eMCMKFJFpUSbStVzrOmpTFIOQkB43pjqv8<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1119893842\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-1765450836 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Tue, 09 Aug 2022 09:33:09 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"447 characters\">XSRF-TOKEN=eyJpdiI6Im1CL3Y1Zy9oWk1sYzBsMG55NElFK1E9PSIsInZhbHVlIjoiU0Vlb3Y5SXM1czF5d0FBVFRnallzN2VtUk1rRnJnR2NaSGJjTGN4WVdXaEcvQklxVVdiWGh3YURiRTZRS1NxSkZIWXd5cmQ1NTdpeFU2MzRLcnAweWJHSFJ0Uyt2VzYrMnRVWUovTVhLVnBvbGNDRHJyWmdwWlhKdzMxY2RrbnQiLCJtYWMiOiJjMzljY2UwNTEyZThhNDBkMTU3MzQ5ODQ2ODFiNzI1Zjc3NzIyNDZjYzUxMDI4NzM0MzFmYzFiZmQ4NzFkMzhjIiwidGFnIjoiIn0%3D; expires=Tue, 09-Aug-2022 11:33:09 GMT; Max-Age=7200; path=\/; domain=.dovrug.uz; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"461 characters\">dovrug_session=eyJpdiI6IkYvNE1xYzE2SVF1V1FQQU9mYklHWUE9PSIsInZhbHVlIjoiUDk0UXY2aVFzRlB5YWt3cE52c0hEQzJQa1VMNU1HVVhSdFJ4UDdXeXphYnZmc25SWFIyU3ZZcXk0d0tOTjNYYmtRWmxGZE9jQUQ0OEtBaEVPSGMrL0JEeTdUTzlLL2xIQzhMbTJMdHJJa0tnMjB6VFpsR2NzdDRPbzFOdk43bloiLCJtYWMiOiI0YmM0YTdiNzYzNjJjNjVlZmNhN2Y1NDNjYjA0MzE4ZWI0ZjQxMTJlNDU2Y2NiYzM3NTNlNThjNWNlYzAxNDBmIiwidGFnIjoiIn0%3D; expires=Tue, 09-Aug-2022 11:33:09 GMT; Max-Age=7200; path=\/; domain=.dovrug.uz; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"419 characters\">XSRF-TOKEN=eyJpdiI6Im1CL3Y1Zy9oWk1sYzBsMG55NElFK1E9PSIsInZhbHVlIjoiU0Vlb3Y5SXM1czF5d0FBVFRnallzN2VtUk1rRnJnR2NaSGJjTGN4WVdXaEcvQklxVVdiWGh3YURiRTZRS1NxSkZIWXd5cmQ1NTdpeFU2MzRLcnAweWJHSFJ0Uyt2VzYrMnRVWUovTVhLVnBvbGNDRHJyWmdwWlhKdzMxY2RrbnQiLCJtYWMiOiJjMzljY2UwNTEyZThhNDBkMTU3MzQ5ODQ2ODFiNzI1Zjc3NzIyNDZjYzUxMDI4NzM0MzFmYzFiZmQ4NzFkMzhjIiwidGFnIjoiIn0%3D; expires=Tue, 09-Aug-2022 11:33:09 GMT; domain=.dovrug.uz; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"433 characters\">dovrug_session=eyJpdiI6IkYvNE1xYzE2SVF1V1FQQU9mYklHWUE9PSIsInZhbHVlIjoiUDk0UXY2aVFzRlB5YWt3cE52c0hEQzJQa1VMNU1HVVhSdFJ4UDdXeXphYnZmc25SWFIyU3ZZcXk0d0tOTjNYYmtRWmxGZE9jQUQ0OEtBaEVPSGMrL0JEeTdUTzlLL2xIQzhMbTJMdHJJa0tnMjB6VFpsR2NzdDRPbzFOdk43bloiLCJtYWMiOiI0YmM0YTdiNzYzNjJjNjVlZmNhN2Y1NDNjYjA0MzE4ZWI0ZjQxMTJlNDU2Y2NiYzM3NTNlNThjNWNlYzAxNDBmIiwidGFnIjoiIn0%3D; expires=Tue, 09-Aug-2022 11:33:09 GMT; domain=.dovrug.uz; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1765450836\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-769594536 data-indent-pad=\"  \"><span class=sf-dump-note>array:4<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">IU7bdblEulTgxRs2ri8REnHPIhtyfbKE19k4qEJy<\/span>\"\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">https:\/\/dovrug.uz<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-769594536\", {\"maxDepth\":0})<\/script>\n"}}, "X20ed44be45af03d17891936d2b120209");

</script>
</body>
</html>
