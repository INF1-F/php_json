## TODO

`strpos()` wordt deze gebruikt om te controleren of er een **@** in de email zit? Regel: 6, 23 en 32

Er staan nog `echo`'s die niet meer van toepassing zijn, deze kunnen weg.

Onder `header()` moet nog `exit()` komen te staan, zodat het script niet verder gaat.

`$naam = GetName($email);` kan je het beste boven de **if statement** zetten, hierdoor staat er geen dubbele code in.  
De waarde van `$naam` is niet anders als het een docenten mail of studenten mail is.

### voorbeeld comentaar voor functies

```php
/**
 * beschrijving van functie
 *
 * @param string $name naam van gebruiker
 * @return boolean 
 */
 function  naamFuncite(){
     return true;
 }
```


