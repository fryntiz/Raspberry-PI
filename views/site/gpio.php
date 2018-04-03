<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'GPIO';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="gpio">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

    <form action="funciones.php" method="post">
        <table class="tablatodos">
            <TR>
                <TH>TODO<BR/>ON</TH>
                <TH>TODO<BR/>OFF</TH>
                <TH>Parpadear<BR/>en orden</TH>
                <TH>Parpadear<BR/>aleatorio</TH>
                <TH>Parpadear<BR/>TODO</TH>
            </TR>
            <TR>
                <TD class="pulsador">
                    <INPUT class="activar" type="submit" name="todoON" value="todoON"/>
                </TD>
                <TD class="pulsador">
                    <INPUT class="desactivar" type="submit" name="todoOFF" value="todoOFF"/></TD>
                <TD class="pulsador">
                    <INPUT class="activar" type="submit" name="parpadeoORDEN" value="parpadeoORDEN"/>
                </TD>
                <TD class="pulsador">
                    <INPUT class="activar" type="submit" name="parpadeoALEATORIO" value="parpadeoALEATORIO"/>
                </TD>
                <TD class="pulsador">
                    <INPUT class="activar" type="submit" name="parpadeoTODO" value="parpadeoTODO"/>
                </TD>
            </TR>
        </table>

        <table class="tablaprincipal">
            <?php
                foreach (range(1,10) as $n) {
                    echo $n;
                }
            ?>
            <TR>
                <TH>PIN</TH>
                <TH>ACTIVAR</TH>
                <TH>DESACTIVAR</TH>
                <TH>1PARPADEO</TH>
                <TH>PARPADEAR</TH>
                <TH>ESTADO</TH>
            </TR>
            <TR>
                <TD>2</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar2" value="Activar2"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar2" value="Desactivar2"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo2" value="UNparpadeo2"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear2" value="Parpadear2"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>3</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar3" value="Activar3"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar3" value="Desactivar3"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo3" value="UNparpadeo3"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear3" value="Parpadear3"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>4</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar4" value="Activar4"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar4" value="Desactivar4"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo4" value="UNparpadeo4"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear4" value="Parpadear4"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>5</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar5" value="Activar5"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar5" value="Desactivar5"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo5" value="UNparpadeo5"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear5" value="Parpadear5"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>6</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar6" value="Activar6"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar6" value="Desactivar6"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo6" value="UNparpadeo6"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear6" value="Parpadear6"/></TD>
                <TD class="pulsador"></TD>
            </TR>
            <TR>
                <TD>7</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar7" value="Activar7"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar7" value="Desactivar7"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo7" value="UNparpadeo7"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear7" value="Parpadear7"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>8</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar8" value="Activar8"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar8" value="Desactivar8"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo8" value="UNparpadeo8"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear8" value="Parpadear8"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>9</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar9" value="Activar9"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar9" value="Desactivar9"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo9" value="UNparpadeo9"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear9" value="Parpadear9"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>10</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar10" value="Activar10"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar10" value="Desactivar10"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo10" value="UNparpadeo10"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear10" value="Parpadear10"/></TD>
                <TD></TD>
            </TR>
            <TR>
                <TD>11</TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Activar11" value="Activar11"/></TD>
                <TD class="pulsador"><INPUT class="desactivar" type="submit" name="Desactivar11" value="Desactivar11"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="UNparpadeo11" value="UNparpadeo11"/></TD>
                <TD class="pulsador"><INPUT class="activar" type="submit" name="Parpadear11" value="Parpadear11"/></TD>
                <TD></TD>
            </TR>
        </table>
    </form>
</div>
