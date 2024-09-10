*Milestone 1*
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php.
In Allegato avete un esempio di form nel caso non aveste fantasia.

soluzione
1.creo un controllo per verificare se la variabile 'length' è stata passata tramite GET e se è numerica
2.creo un controllo dentro quello precedente che verificherà se il numero è maggiore di 8, in caso allora andro a generare la password tramite una funzione, altrimenti farò apparire un messaggio di errore "La password da generare deve essere di almeno 8 caratteri"
3.la funzione avrà come parametro length in cui poi vado a definire: la variabile che conterrà i caratteri per la password, la password stessa come stringa vuota; la lunghezza della stringa dei caratteri utlizzata per gli indici casuali.
4.infine creo un ciclo while in cui vado ad appendere caratteri casuali fino a che non raggiungo la lunghezza digitata dall'utente
*Milestone 2*
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale