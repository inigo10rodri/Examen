<html>
    <form method="post" action="acceder">
        {{ csrf_field()}}
        <input type="text" name="usuario">
        <button type="submit">Enviar</button>
    </form>
</html>