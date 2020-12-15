<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Nombre Completo:<br /><input type="text" name="Name" required="required" placeholder="Nombre completo (requisito)" title="El nombre es requerido" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Correo:<br /><input type="email" name="Email" required="required" placeholder="Correo (requisito)" title="Correo valido requerido" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        ¿Como supo de nosotros?<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Seleccione una opcion</option>
            <option value="Phone">Telefono</option>
            <option value="Web">En la Web</option>
            <option value="Magazine">Revista</option>
            <option value="A Friend">De un conocido</option>
            <option value="Other">Otra manera</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>¿Que tipo de servicios le interesa?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> Compra <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Venta <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Renta <br />
        <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Presupuestos <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>¿Le gustaria recibir notificaciones?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Si <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>
        Comentarios:<br /><textarea name="Comments" cols="36" rows="4" placeholder="¡Sus comentarios son muy importantes!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="Enviar" />
</div>
</form>
<!-- END HTML FORM -->

