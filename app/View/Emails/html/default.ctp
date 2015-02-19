<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Emails.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<div class="content">
        <table>
            <tr>
                <td>
                	<a href="#" style="margin:10px 0 60px;display:block">
                		<img src="cid:my" />
                    	
                    </a>
                    <h3>O CLiente <?php echo $name; ?> com o email : <?php echo $email; ?> entrou em contacto.</h3>
                    <p>Esta foi a sua mensagem</p>
                    <p> <?php echo $price; ?></p>
                    
                </td>
            </tr>
        </table>
	</div>
</td>