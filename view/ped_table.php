<table>
         <tr>
         <th>Ф.И.О. учителя</th>
         <th>Фото</th>
         <th>Классный руководитель</th>
         <th></th>
         <th></th>
         </tr>
         <?php foreach ($teachers as $t): ?>
         <tr>
         <td><?=$t['name']?></td>
         <td><a data-fancybox href="../img/teachers/<?=$t['photo']?>">
         <img class="photo_of_teacher" width="100%" src="../img/teachers/<?=$t['photo']?>"></a></td>
         <td><?=$t['class']?></td>
         <td> <a href="ped_team_panel.php?action=edit&id=<?=$t['id_teach']?>">Редактировать</a></td>
         <td> <a href="ped_team_panel.php?action=delete&id=<?=$t['id_teach']?>" onclick="return confirm_alert(this);">Удалить</a></td>
         </tr>
         <?php endforeach ?>
         </table>