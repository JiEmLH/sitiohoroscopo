<?php
// Se comprueba si existe la cookie.
if (!isset($_COOKIE["idiomaUsuario"]))
{
   // Si no existe, se determina como página la destinada a elegir el idioma.
   $pagina = "pedirIdioma.html"; 
}
elseif ($_COOKIE["idiomaUsuario"] == "sp")
{
    // Si existe la cookie y el valor de la variable es "sp" se irá a la página en español.
    $pagina = "spanish.html";
}
else
{
    //Si el valor no es "sp" se irá a la página en inglés.
    $pagina = "english.html"
}
?>

<html>
    <head>
        <script language = "javacript" type = "text/javascript">
        // Se redirige a la página seleccionada.
            location.href = "<?php echo $pagina; ?>";
        </script>
    </head>
</html>