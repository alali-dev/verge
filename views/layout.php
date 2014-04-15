

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 <html>
     <head>
    <link href="<?php echo $this->make_route('/css/master.css') ?>" 
      rel="stylesheet" type="text/css" />
  </head>

     <body>
         <h1>Verge</h1>
         <?php
         include ($this->content);
         ?>
     </body>
 </html>