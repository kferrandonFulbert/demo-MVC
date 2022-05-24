<h2><a class="btn btn-primary" href="index.php?page=categorie&action=add">Ajouter</a></h2>
<p>{$vue.description}<p>    
<div>
    <table class="table"><thead><tr><td>Libelle</td><td>Action</td></tr></thead>
        <tbody>
{foreach $vue.categories as $cat}
    <tr><td>{$cat.libelle}<td>
        <td><a class="btn btn-primary" href="index.php?page=categorie&action=update&id={$cat.id}">modification</a>
            | <a class="btn btn-danger" href="#" onclick="sup({$cat.id});">Suppression</a>
        </td>
    </tr>
{/foreach}
    </tbody>
    </table>
</div>
    <script>
        function sup(id){
            if(window.confirm("Voulez vous vraiment supprimer l'élément?")){
                window.location.replace("index.php?page=categorie&action=delete&id="+id);
            }
        };
        
    </script>
