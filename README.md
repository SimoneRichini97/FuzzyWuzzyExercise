# Fuzzy Wuzzy Kata
___


## ๐ Build
___

1. Da console eseguire il comando ``make build``
2. Completata la build dell'immagine eseguire il comando ``make run`` e successivamente eseguire ``composer install``


## ๐จ๐ปโ๐ซ Requisiti
___

Scrivere un algoritmo che dato in input un serie di numeri positivi (maggiori di 0):

1.  Ritornano una stringa `Fuzzy` se il numero รจ multiplo di `3`;
2.  Ritornano una stringa `Wuzzy` se il numero รจ multiplo di `5`;
3.  Ritornano una stringa `FuzzyWuzzy` se il numero รจ multiplo di `7`;

## ๐ป Come eseguire run

1. Avviare il comando ``make run``;
2. Dalla CLI lanciare il comando ``php vendor/bin/phpunit --filter <nomeMetodo>`` dove per nome del ``nomeMetodo``.


Esempio: 

```php
    php vendor/bin/phpunit --filter testShouldReturnString
```

