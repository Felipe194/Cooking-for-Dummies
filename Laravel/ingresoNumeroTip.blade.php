<HTML>

<HEAD>

<TITLE>Tips de cocina</TITLE>

</HEAD>

<BODY>
  <h1>TIPS DE COCINA</H1>
  <p>Ingresa el numero de tip que deseas</p>
  <form method="post" action="tips">
    {{csrf_field()}}
    <label>Numero: </label>
    <input type="text" name="numero"/>
    <input type="submit" value="VER TIP"/>
  </form>
</BODY>

</HTML>
