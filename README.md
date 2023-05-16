1 ho usato il ciclo foreach per stampare la lista degli hotel in pagina.

2 per il Bonus ho usato un form con un bottone con name "parking". l'attributo action e' impostato su index.php il  che significa che quando il form viene inviato, la pagina viene ricaricata. 

-L'attributo method del form è impostato su POST fa si che i dati del form vengono inviati come parte del corpo della richiesta HTTP, non nell'URL con con il metodo GET.

- Imposto la variabile $showParking su false per fare in modo che all'inizio si mostrino tutti gli hote.

-if (isset ($_POST['parking'])){ $showParking = true; } controlla se il pulsante "Mostra solo gli hotel con parcheggio" è stato premuto. Se è stato premuto, il valore di "$_POST['parking']" esiste e isset ($_POST['parking']) da il valore true. significa che vgolio filtrare gli hotel

- per stampare gli hotel con parcheggio ho aggiunto questa riga nel ciclo for each
      <?php if ($showParking && !$hotel['parking']) continue; ?>
      che dice che dato che voglio  mostrare solo gli hotel con parcheggio ($showParking è true) e questo hotel non ha parcheggio ($hotel['parking'] è false), allora salta questo hotel (utilizzando continue) e passa al prossimo.

      per stampare gli hotel con parcheggio ho usato continue che salta alla prossima iterazione del ciclo qualora l'hotel non abbia parcheggio.