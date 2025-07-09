# Spotlight Notice Block

Un blocco Moodle leggero e personalizzabile per visualizzare avvisi o notifiche con sfondo colorato.

## Caratteristiche

* Titolo
* Messaggio completamente configurabile tramite editor WYSIWYG (Atto/TinyMCE).
* Scelta del colore di sfondo via campo di testo con help sui formati CSS.
* Template Mustache per separare logica e presentazione.
* Supporto agli standard di accessibilità (`<div>` con `aria-labelledby`).
* Configurazione semplice e intuitiva.

## Requisiti

* Moodle 3.9 o superiore
* PHP 7.2 o superiore

## Installazione

1. Copia la cartella `block_spotlight_notice` in `yourmoodle/blocks/`.
2. Accedi a Moodle come amministratore.
3. Vai su **Amministrazione del sito > Notifiche** per completare l'installazione.
4. Aggiungi il blocco in qualsiasi pagina tramite **Aggiungi un blocco > Spotlight Notice**.

## Configurazione

1. Nella pagina dove aggiungi il blocco, clicca sulla rotellina di configurazione.
2. Inserisci:

   * **Titolo dell'avviso**: testo da mostrare come intestazione.
   * **Messaggio**: contenuto HTML tramite editor (grassetto, corsivo, link).
   * **Colore di sfondo**: valore CSS (es. `#bbcdea`, `red`, `rgb(51,153,221)`).
3. Salva e visualizza il blocco con il design desiderato.

## Contributi

Se desideri contribuire, apri una pull request o segnala issue sul repository.

## Licenza

Licenza MIT © Marco Traina