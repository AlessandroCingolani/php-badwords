# PHP Badwords

Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:

- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (\*\*\*) tutte le occorrenze della parola da censurare.

1. Creo Form post nel mio index html per mandare dati alla pagina Php di atterraggio.
2. Prendo i dati mandati dal form e stampo in pagina lunghezza e rimpiazzo con il metodo stringa replace la parola da censurare con '\*\*\*'
