Hastighet och användbarhet
==============================
Eftersom fokus på detta kursmoment handlar om bilder optimalisering så valde jag tre stycken webbsidor där båda delarna är viktiga. [Aftonbladet](https://www.aftonbladet.se/), [Expressen](https://www.expressen.se/) och [BLT](http://www.blt.se/).

För att analysera dessa sidor tog jag hjälp av Google Pagespeed och inspect network verktyget i firefox.

Alla tester genomfördes tre gånger. För att se alla värden klicka [här](https://1drv.ms/x/s!AmLxzo5XJf9w_VgI0SP0-nBvcAj9).

### Aftonbladet
![Aftonbladet](../htdocs/img/aftonb.jpg)

Google Pagespeed visade att sidan var lika "optimerade" för både telefoner och datorer med ett snitt betyg på 65/100. Då detta är ett hyfsat lågt värde så har de lyckats bra med all komprimera kod och prioriterar synligt innehåll.

Saker sidan inte allts har lyckats med är att optimera sina bilder, utnyttja cachelagring i webbläsare och ta bort sin JS + CSS kod som blockerar renderingen från sitt innehåll ovanför mitten.

Aftonbladet tog ca 5,4 sekunder att ladda alla 76 förfrågningar. Och storleken på dessa låg runt 3,5MB.
### Expressen
![Expressen](../htdocs/img/expres.jpg)

Här visade GP att expressens desktop version fick ett mycket sämre värde än sin mobila version på ynkliga 45 poäng mot motsvarande 62 poäng. Båda versionerna förminskade sin CSS och HTML kod men där tog det stopp för desktop versionen. På sin mobila plattform lyckades de bättre med att förminska sin JS kod samt att minska svarstiden till servern.

På min mobila version behöver expressen jobba på samma saker som aftonbladet. Däremot så behöver de även komprimera antalet byte som skickas via nätverket och förminska sin JS kod.

Expressen tog ca 2,9 sekunder att ladda alla 91 förfrågningar. Och storleken på dessa låg runt 2,1MB.

### BLT
![BLT](../htdocs/img/blt.jpg)

BLT fick det lägsta betyget av GB på båda sina versioner. Desktop versionen landade på 34 poäng medans den mobila motsvarigheten fick 32 poäng. Det ända som de lyckades med är att undvika omdirigeringar som de andra sidorna även gör.

Anledningen till BLTs låga poäng är att de måste jobba på allt. GP vill att sidan ska optimera sina bilder, minska svarstiden från servern, utnyttja cachelagring i webbläsare, ta bort JS och CSS kod, aktivera komprimering samt förminska sin CSS, JS och html kod.

Expressen tog ca 6,6 sekunder att ladda alla 135 förfrågningar. Och storleken på dessa låg runt 5,4MB.

### Sammanfattning
Alla sidorna har saker att jobba på och GP var inte riktigt nöjd med någon. Alla sidor hade en sak gemensamt och det var optimalisering av sina bilder. Ingen av dessa sidor hade särskild snabb laddningstid men den kan bero på all reklam, trafik och även på användarens internet.

Just i detta fallet så tycker jag inte att laddningstiden spelade någon större roll, eftersom man oftast läser igenom alla rubriker innan man scrollar ner till botten av sidan. Däremot är man på söksidor som Google vill jag inte ens att det skall ta 2-3 sekunder att hitta det jag letar efter. Så beroende på vilken webbsida jag är på har jag olika uppfattningar om laddningstiden. Men under en sekund så är jag nöjd.

#### Rangordning
BLT är nog den minsta sidan men ändå så tar den längst stund att ladda. Mycket av det beror nog på att de inte får i närheten av samma antal besökare som Aftonbladet eller Expressen, så den kommer på en solklar sista plats.

Skulle det inte vara för den tre sekunders längre laddningstiden så skulle Aftonbladet hamna på en första plats, men så blev inte fallet. Även om koden är mer optimerat här så skickar den för mycket information till användaren vilket drabbar laddningstiden.

Expressen för en förstaplats även om den är mer optimerad för telefoner än datorer. Laddningstiden är okej och sidan skickar inte mycket onödig information. 
