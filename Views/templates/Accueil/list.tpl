<h2>Presentation du MVC</h2>
<p>{$vue.description}<p>
<div>
    Liste des dossiers de notre MVC:
    <ul>
{foreach $vue.mvc as $m}
        <li>{$m}</li>
{/foreach}
    </ul>
    <form action="index.php?page=analyse&action=check" method="post">
    <input type="url" name="site"  placeholder="https://example.com" pattern="https://.*" required>
    <input type="submit">
    </form>
</div>
