<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST ['enviar'])) {
        $usuario = $_POST ["usuario"];
        $pass = $_POST["pass"];

        if ($usuario == "Admin"  && $pass == "admin"){
        echo 
        "<font color='Purple' face='Comic Sans MS,arial' size=3>
        <h1 align='center'><i>Principal</i></h1>
        </font>

        <div align=center width=100%>
        <table style='width:50%' border=1>
        <tr>
        <td style='text-align: center; width: 100%'> Menu </td>
        </tr>
    </table>
    </div>
    <div align=center width=100%>
          <table style='width:50%' border='1'>
            <thead> 
            <tr> <td style='text-align: center;  rowspan='1'' colspan='4' > Opcion 1 </td></tr>
            <tr> <td style='text-align: center;  rowspan='1'' > Opcion 2 </td></tr>
            <tr> <td style='text-align: center;  rowspan='1''> Opcion 3 </td></tr>
            </thead>
        </table>
        </div>
        </font>
        <font color='Purple' face='Comic Sans MS,arial' size=1 >
        <h1 align='center'><i>Pag. de Admin</i></h1>
         </font>";
        }    else if ($usuario == "Supervisor" && $pass == "super"){
        echo " <font color='Purple' face='Comic Sans MS,arial' size=3>
        <h1 align='center'><i>Principal</i></h1>
         </font>
         <div align=center width=100%>
         <font  face='Comic Sans MS,arial' size=3>
         <table style='width:30%' border='1'>
              <thead>
              <tr> <td > Usuario </td><td>Rol</td></tr>
              <tr> <td rowspan='1'> Pao </td><td> Admin</td> </tr>
              <tr> <td rowspan='1'> jonas </td><td> Superivisor</td></tr>
              <tr> <td rowspan='1'> kire </td><td>Usuario</td></tr>
               </thead>
          </table>
          </font>
          </div>"; 
        }   else if ($usuario == "usuario" && $pass == "usuario"){
        echo "<font color='Purple' face='Comic Sans MS,arial' size=3 >
        <h1 align='center'><i>Principio</i></h1>
         </font>
         <div  id='Layer1' style='width:90%; height:150px; overflow: scroll;' aling='center' >
         mensaje <br>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ab consequatur vel fugit est velit deleniti perspiciatis qui adipisci ipsam consectetur nihil, harum, quam quasi, commodi eveniet rem dolor reprehenderit.
         <br>
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate necessitatibus voluptatem magni quisquam? Enim adipisci aperiam velit, magni iste voluptatibus sequi at maiores harum praesentium ex illum itaque ipsam eaque!
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque inventore tempore adipisci, rem dolor iste sunt qui sequi cumque sapiente possimus molestiae soluta magnam suscipit veniam alias fugiat nulla nemo facere quisquam doloribus libero eligendi! Eaque, inventore laboriosam aperiam sint nobis voluptatibus culpa nostrum aspernatur incidunt. Mollitia provident dolores eos voluptates soluta doloribus, blanditiis exercitationem at praesentium amet. Aliquid consectetur aut possimus aperiam velit, nemo iste veniam repellat delectus molestiae inventore corporis dolorum sit. Repudiandae, accusantium odit corporis ipsam, non laborum corrupti placeat tenetur laudantium consectetur unde iste nisi at doloribus. Commodi at vitae eum nostrum dolores, est dolorem corporis ratione voluptatum veritatis sint fuga eius saepe dolorum facere enim magnam laborum provident? Debitis voluptas, veritatis pariatur voluptatum suscipit praesentium ullam sunt odio, eveniet sint asperiores architecto animi beatae expedita reprehenderit neque quidem, a omnis! Est sit fugiat atque inventore dolores molestias deserunt ex dolorem, sunt tenetur id esse fugit. Dolores commodi quisquam architecto saepe magnam hic, nemo aperiam non ipsa. Dolorem, est architecto repudiandae ab exercitationem nulla culpa tempore fugiat mollitia non! Laudantium, saepe odio autem error quod quis, fugiat sequi assumenda laborum tenetur animi ad quibusdam necessitatibus eligendi consectetur molestiae eum consequuntur suscipit amet velit? Enim, eum. Illum ratione doloribus voluptate veritatis nihil aliquid expedita consequatur accusantium deleniti aliquam quasi odit sequi deserunt molestiae, commodi saepe perspiciatis sit, veniam explicabo quia eligendi debitis officiis? Mollitia corporis labore voluptatem eius. Blanditiis expedita voluptates, minima magnam molestias ipsam dolor fugiat recusandae dignissimos, consequatur sed, debitis nihil iste impedit eius facere dicta! Veritatis reiciendis adipisci ex veniam reprehenderit accusamus mollitia assumenda doloribus illum, saepe eligendi dolores praesentium pariatur omnis! In, quibusdam ex voluptatem mollitia, eum qui animi perspiciatis et corrupti, iusto provident asperiores eveniet culpa ut adipisci vel praesentium ipsum illum facilis! Impedit necessitatibus fugit rem veritatis harum corrupti aperiam culpa modi, soluta voluptate ea molestias architecto commodi error aliquid saepe eius tempore ipsam veniam dolor deleniti perferendis? Error repellat sint delectus asperiores ex rem perferendis placeat nulla vel reprehenderit laudantium voluptate quaerat quam, dolore atque incidunt, quo molestias sunt iusto. Consequatur aspernatur impedit recusandae magni atque deserunt, ut incidunt quidem quod sapiente illum aliquid voluptatum obcaecati non cupiditate perferendis soluta, vel quibusdam. Illo molestias non est pariatur! Veniam eos cupiditate architecto totam consectetur hic nesciunt consequatur facilis deleniti placeat numquam dolores ullam sapiente quis libero quasi, illum accusamus ipsum. Architecto praesentium laudantium assumenda quo dignissimos debitis veniam dolore blanditiis illo ipsa doloribus recusandae earum id, a vitae aspernatur eaque quaerat doloremque libero rem impedit? Fugiat voluptate voluptatem odit at asperiores sit, perferendis totam, aliquam eveniet et nisi est. Adipisci perferendis perspiciatis maxime doloremque delectus ut at dolorum molestiae sequi nostrum voluptate distinctio repellendus, sunt earum esse suscipit iusto fuga, voluptatem animi. Ex quasi rem atque repellat, porro totam dolor in veritatis ipsam explicabo, perspiciatis itaque voluptatum voluptates hic consectetur, unde laudantium nam laborum beatae expedita quis asperiores voluptatem! Adipisci magnam, beatae eos in tenetur dolorem, veniam fuga cumque modi iure pariatur dolorum quasi nihil ut voluptas facere fugit amet.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis modi consequatur fuga inventore distinctio dolor, tenetur, atque voluptatem quo ullam incidunt, quia voluptate! Atque assumenda optio, tempore similique sint voluptates!
         </div> <br>";
    }
    
    echo "<font color= 'Fuchsia' face='Comic Sans MS,arial' size=3>
    El usuario es $usuario, La contraseña es $pass";
} else { 
    ?>
    <form action="#" method="post">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario"> <br>
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass"> <br>
    <input type="submit" value="Enviar" name="enviar"> <br>
    </form>
    <?php
}
?>
</body>
</html>