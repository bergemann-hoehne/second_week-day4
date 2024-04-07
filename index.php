<?php
/*
 * Created on 01.03.2024
 * Task: Es sollen über die form daten eingetragen werden und das Submit im code bereich verarbietet werden.
 *       Ziel ist es, die die Classe so anzupassen, dass sie mit Mehreren Validierungen umgehen kann.
 *       Neben der Validierung der Größe soll nun das Gebrutsdatum ebenfalls Validiert werden.
 *       Ebenso kann eine Validierung der Krankenkassen nummer implementiert werden.
 *       Die Validierung kann ausgelagert werden über ein include in eine separate php datei
 * 
 * Author: Max Musterman
 */
session_start();
if( !isset( $_SESSION['START'] ) ){
    $_SESSION['START'] = date('d.m.Y H:i:s');
}
// ============================================================================================================ //
//  ||
//  ||
//  \/
// Start from here
// content belongs right here
// ============================================================================================================ //




// ============================================================================================================ //
// ============================================================================================================ //
?>

<html>
    <header>
    </header>
    <body>
        <form enctype="multipart/form-data" name="projectform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Personendaten</p>
            <input type="text" name="salutation" placeholder="Anrede" value="">
            <input type="text" name="prename" placeholder="Vorname" value="">
            <input type="text" name="name" placeholder="Nachname" value="">
            <input type="date" name="birthdate" placeholder="Geburtsdatum" value="">
            <p>Wie Groß sind Sie?</p>
            <input type="number" name="size" placeholder="Größe" value="">
            <p>Krankenkasse</p>
            <input type="text" name= "insurancenr" placeholder="Krankenkassennummer" value="">

	        <input style='display:none' name='CHECKSUM' type='hidden' value='<?php echo date('YmdHi');?>'>
            <br><br>
            <input type="submit" value="Daten übermitteln">
        
        </form>
    </body>
</html>
