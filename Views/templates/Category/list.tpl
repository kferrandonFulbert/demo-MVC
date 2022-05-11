<p>{$vue.description}<p>
<div>
    <ul>
{foreach $vue.categories as $cat}
        <li>{$cat.libelle}</li>
{/foreach}
    
    </ul>
</div>
