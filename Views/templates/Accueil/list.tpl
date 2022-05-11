<h2>Presentation du MVC</h2>
<p>{$vue.description}<p>
<div>
    Liste des dossiers de notre MVC:
    <ul>
{foreach $vue.mvc as $m}
        <li>{$m}</li>
{/foreach}
    
    </ul>
</div>
