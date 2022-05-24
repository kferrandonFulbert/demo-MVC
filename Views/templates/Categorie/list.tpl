<h2><a href="index.php?page=categorie&action=add">Ajouter</a></h2>
<p>{$vue.description}<p>    
<div>
    <table><thead><tr><td>Libelle</td><td>Action</td></tr></thead>
        <tbody>
{foreach $vue.categories as $cat}
    <tr><td>{$cat.libelle}<td>
        <td><a href="index.php?page=categorie&action=update&id={$cat.id}">u</a>
            | <a href="index.php?page=categorie&action=delete&id={$cat.id}">-</a>
        </td>
    </tr>
{/foreach}
    </tbody>
    </table>
</div>
