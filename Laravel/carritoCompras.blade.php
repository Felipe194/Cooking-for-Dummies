<HTML>

<HEAD>

<TITLE>Compras</TITLE>

</HEAD>

<BODY>
  <h1>Carrito de Compras</H1>
  <p>Ingresa al resultado del carrito de compras</p>
  <form method="post" action="productos">
    {{csrf_field()}}

    <input type="submit" value="VER PRODUCTOS SELECCIONADOS Y TOTALES"/>
  </form>
</BODY>

</HTML>
