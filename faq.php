<?php

include "inc/functions.php";

$body = <<<EOT
<style>img{max-width:100%}</style>
<div class="ban">
<h2>Czym jest 8ch.pl?</h2>
<p>8ch.pl jest polskim klonem boardu 8ch.net (używamy ich silnika, infinity), sponsorowanym przez organizację <a href='http://chanowa.org/'>Chanowa.ORG</a>. 

<h2>Jakie są związki 8ch.pl z Chanowa.ORG?</h2>
<p>Chanowa.ORG zapewnia nam wsparcie techniczne, administracyjne, serwerowe oraz prawne.
 
<h2>Czym jest forum obrazkowe (ang. Imageboard)?</h2>

<p>Imageboard jest typem anonimowego forum internetowego z możliwością, jak sama nazwa wskazuje, postowanie tekstu i obrazu. W przeciwieństwie do typowej grupy dyskusyjnej, nie umożliwia archiwizacji zawartości, i stare wątki są usuwane po utworzeniu nowego (tzw. retencja danych)</p>
<p>Imageboard ma kilka atutów względem tradycyjnego forum:</p>
<li>Nie ma procesu rejestracji, co oznacza, że forum jest otwarte dla każdego, by coś napisać bez konieczności przechodzenia formalności.</li>
<li>Użytkownicy nie posiadają nazw, a tym samym nie ma potrzeby budowania tożsamości lub reputacji. Post są oceniane w oparciu o ich treść, a nie przez pryzmat osoby która je napisała.</li>
<li>udostępnianie obrazków i treści multimedialnych jest tak łatwe, jak obsługa serwisu</li>
</ul>

<h2>Jaki jest 8chan?</h2>
<p>to serwis obsługujący tzw. deski aby przeglądać. Deski te są prowadzonego przez ich właścicieli-założycieli, którzy nie są bezpośrednio powiązani z administracją 8chan. Administrator globalny jest odpowiedzialny za utrzymanie hostingu i ochrony przed spamem i treści niezgodnych z prawem. Administracja nie ponosi odpowiedzialności za egzekwowanie zasad poza globalną regułą. Reklamacje nt. zarządzania boardem należy kierować do właściciela z wybranego działu, chyba że narusza prawa Stanów Zjednoczonych Ameryki, lub globalnej polityki.</p>

<h2>Jak napisać nową wiadomość?</h2>
<p>Przejdź do wybranego działu, kiedy chcesz napisać post w, wypełnasz pole 'komentarz', i klikasz "nowy temat". Na większości desek, musisz także załadować obrazek, ale jeśli nie masz możesz również narysować, klikając" Oekaki". Nie jest konieczne wypełniania nazwy lub adresu e- mail.</p>
<img src="/static/faq/new-thread.png" alt="New thread FAQ">

<h2>Jak napisać komentarz w wątku?</h2>
<p>Na 8chan, wątki są sortowane od najnowszych do najstarszych i nie mają" wynik" jak na innych witryn. Brak tu także lajków i innych gadżetów. Pozwala to wyrażanie się na niepopularne tematy i opinie. Odpowiedzi w wątku są sortowane od najstarszych do najnowszych. Aby odpowiedzieć w wątku, kliknij przycisk [Odpowiedz] na wybranym temacie z indeksu.</p>
<img src="/static/faq/new-reply.png" alt="New thread FAQ">

<p>Tylko pole " Komentarz" jest wymagane do odpowiedzi na wszystkich deskach.</p>
<img src="/static/faq/new-reply2.png" alt="New thread FAQ">

<p>Twoja odpowiedź będzie podświetlona:</p>
<img src="/static/faq/new-reply3.png" alt="New thread FAQ">

<h2>Jak odpowiedziec na inny post?</h2>
<p>Kliknij na liczby znajdujące się pod postem. Pole odpowiedzi otworzy się automatycznie (tzw. 'szybka odpowoedź'). Podobnie, jest kiedy ludzie odpowiadają na twoje, możesz po liczbie rozpoznać swojego posta i traktować jako wskazówkę.</p>
<img src="/static/faq/new-reply4.png" alt="New thread FAQ">


<h2>Czy są jakieś zasady dotyczące zawartości strony?<h2>
<p>Tylko jeden:</p>
<ul>
<li>Nie należy zakładać, lub linkować do treści nielegalnych w Stanach Zjednoczonych Ameryki. Nie należy tworzyć boardów z
Jedynym celem opublikowania lub rozprzestrzeniania takich treści.</li>

<p>(w praktyce banujemy tylko za pornografię dziecięcą)</p>

<p>Poza tym, jesteś wolny, możesz wnieść jakiekolwiek zasady jakie chcesz na swoim boardzie.</p>
<h2>How do I add more volunteers?</h2>
<p>You may do this in your board settings, click on "Edit board volunteers".
<h2>Jak zarządzać forum?</h2>
<p>Zaloguj się i kliknij na link na stronie głównej "zarządzaj swoim boardem"</p>
<h2>Jak skontaktować się z adminem</h2>
<p>E-mail: Anon8@chanowa.org</p>

<h2>What's your privacy policy?</h2>
<p>Find it <a href="/privacy.pdf">here</a>.</p>

<h2>Pomocy! Moje Forum nie zostało usunięte!</h2>
<p>Na dzień 13 listopada, 2014, nie występuje wygaszanie desek. Jednak nadal możesz stracić dostęp do deski, jeśli nie zalogujesz się przez dwa tygodnie lub na desce jest brak postów przez tydzień. Zobacz tutaj listę desek, które można przejąć.</p>.

<h2>How do I post as a volunteer on my board?</h2>
<p>Make sure you are using the volunteer interface to view your board. The URL of your browser should be <a href="/mod.php?/yourboard"><tt>https://8ch.net/mod.php?/yourboard</tt></a>.</p>

<h2>Jak zamieścić post jako moderator na swojej desce?</h2>
<p>Upewnij się, że jesteś zalogowany. W tym celu wpisz adres https:// 8ch. netto/ mod. php?/ yourboard. Jeśli jesteś właścicielem boardu wpisz "## Board owner" w polu Nazwa. Jeśli ktoś inny jest właścicielem a ty jesteś tylko moderatorem, możesz umieścić "## Boards owners" w polu Nazwa. Dodaj swój post i kliknij" Odpowiedz". Pojawi się capcode. (modoznaczek)</p>
<h2>Pomoc! Właściciel X boardu robi coś czego nie chcesz!</h2>
<p>Jeśli nie jest to cokolwiek nielegalnego, nie możemy Ci pomóc. Nie dyktujemy jak właściciel boardu powinnem zarządzać deską. Jeśli natomoast robi coś nielegalngo, napisz do administratora seriwsu (kontakt kilka linijek wyżej).</p>

<h2>Czy możesz dać mi X forum?</h2>
<p>Jeśli właściciel z wybranego działu jest nieaktywny lub wybrany dział jest uszkodzony ze względu na zły CSS, Wyślij mi e- mail. Możesz wyświetlić <a href="/claim.html">listę desek</a>, które kwalifikują się do przejęcia.</p>
<h2>Can you add some new feature?</h2>
<p>Otwórz <a href="https://github.com/anon8/infinity">Githuba</a>. Jeszcze lepiej, napisz to sam i spróbuj wyciągnąć wniosek.</p>.
<h2>Co jest" sage"?</h2>
<p>Postujący może odpowiadać w wątkach bez podbijania ich w górę indeksu przez wprowadzenie"sage" w polu e- mail.</p>

<h2>Co to jest tripcode?</h2>
<p>Większość postów na 8chan jest wykonywana anonimowo, ale nie jest to jedyny sposób na postowanie. W polu 'Nazwa' można użyć czterech sposobów ujawniania tożsamości.</p>
<ul>
<li> Po prostu wpisać swój nick. Jest to niebezpieczne, ponieważ ktoś inny może podpisać skę pod tą samą nazwą.</li>
<li> Wpisując nick pod postacią login#hasło. Jest to dość rozsądna,opcja, ale wraz ze wzrostem CPU/GPU może zostać złamany w ciągu kilku dni.</li>
<li> Wpisując dwa krzyżyki czyli login##hasło.  Jest to bardzo bezpieczna metoda, polega na wprowadzeniu tajnego małego pliku na serwerze, więc kod nie będzie działał po za 8chan</li>
<li> admini i modeatorzy mają możliwość wyróżnienia się po wpisaniu ##board owner lub ## Board Volunteer. ##admin jest zarezerwowane wyłącznie dla właściciela serwera.</li>
</ul>
<p>Uwaga, większość boardów na 8chan może nie mieć pola 'Nazwa' po zaznaczeniu opcji o" Wymuszonej anonimowości". To dlatego, że wielu użytkowników(tym samym właściciele) nie lubią używania tripcode na anonimowym forum.</p>

<h2>How do I format my text?</h2>
<ul>
<li>**spoiler** or [spoiler]spoiler[/spoiler] -&gt; spoiler</li>
<li>''italics'' -&gt; <em>kursywa</em></li>
<li>'''bold''' -&gt; <strong>podgrubienie</strong></li>
<li>__underline__ -&gt; <u>podkreślenie</u></li>
<li>==heading== -&gt; <span class='heading'>heading</span> (must be on own line)</li>
<li>~~strikethrough~~ -&gt;<s>przekreślenie</s></li>
<li>[aa] tags for ASCII/JIS art (wyłącza formatowanie)</li>
<li>[code] jeśli zostanie włączony przez właściciela deski</li>
<li>$$ and \( \) tagi LaTeX jeśli zostanie włączony przez właściciela deski</li>
</ul>

<h2>How are featured boards chosen?</h2>
<p>Top twenty-five boards excluding /meta/, /b/, /operate/, /boards/ and /news+/.</p>

<h2>Kto kieruje deskami /b/ i /meta/?
<p>Nikt, więc kieruje nimi de facto administracja.</p>

<h2>Why does <a href="/banned">https://8ch.net/banned</a> say that I'm banned? I can still use the boards?</h2>
<p>8chan is centered around user created boards. That's a board with CSS that makes it look like the ban page, not an official page. You've been tricked. 8chan has no official ban check page.</p>

<h2>Czy istnieje mobilna aplikacja?</h2>
<p>Nie ma oficjalnej aplikacji mobilnej, jednak jest nieoficjalna aplikacja Android w wingy/Exldus.<p>
<p>Nie zapewniamy wsparcia technicznego dla tej aplikacji, zapytaj dewelopera, jeśli masz z nim problem.</p>

<p>I don't provide support for this app, ask the developer of it if you have a problem with it.</p>

<h2>Can I have a list of all API endpoints for getting raw data from 8chan?</h2>
<p>
Assuming the /b/ board, they are as follows:</p>
<ul>
	<li><a href="https://8ch.net/b/index.rss">https://8ch.net/b/index.rss</a> - RSS formatted index so that you can watch smaller boards and get updates when they get new posts using a feed reader like Thunderbird or Feedly.</li>
	<li><a href="https://8ch.net/b/0.json">https://8ch.net/b/0.json</a> - Index of all threads on page 0 of /b/.</li>
	<li><a href="https://8ch.net/b/res/1.json">https://8ch.net/b/res/1.json</a> - All replies of thread 1 on /b/.</li>
	<li><a href="https://8ch.net/b/threads.json">https://8ch.net/b/threads.json</a> - Thread index of all 15 pages of /b/.</li>
</ul>

<p>There are also endpoints for getting information about 8chan's boards:</p>

<ul>
	<li><a href="https://8ch.net/boards.json">https://8ch.net/boards.json</a> - Boards on 8chan (warning, 1MB+)</a></li>
	<li><a href="https://8ch.net/settings.php?board=b">https://8ch.net/settings.php?board=b</a> - Board settings of /b/ (JSON format)</li>
</ul>
<p>Just read the data to get an idea of what is exposed and under what attribute names. It should be self explanatory.</p>
<p><strong>Endpoints not listed here, like post.php, catalog.json or boards-top20.json are subject to change or removal at any time!</strong></p>

</div>

EOT;

echo Element("page.html", array("config" => $config, "body" => $body, "title" => "FAQ"));
