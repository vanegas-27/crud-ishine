## manipulacion del dom

## - text()
- Devuelve o modifica el contenido de un nodo como una cadena.

## - html()
- Devuelve o modifica el HTML interno de un elemento.

## - val()
- Devuelve o modifica el valor de un input, select o textarea.

## - attr(name)
- Devuelve el atributo name del primer elemento en la selección actual.

## - attr(atributo,newValor)
- cambia el valor del atributo

## - prop(name)
- Devuelve el nombre de la propiedad del primer elemento en la selección actual.

## - data(key[, value])
- Devuelve el valor almacenado con el nombre key. Si se proporciona un valor, almacena el valor con el
nombre key.

## - removeAttr(attributeName)
- Elimina todos los atributos que tienen el nombre attributeName.

## - addClass(className)
- Agrega className a cada elemento en la selección actual.

## - hasClass(className)
- Comprueba si cualquier elemento en la selección actual tiene className.

## - removeClass([className])
- Quita className de todos los elementos en la selección actual. Si no se proporciona className, quita
todos los nombres de clase.

## - toggleClass(className[, state])
- Alterna entre agregar y eliminar className de todos los elementos en la selección actual.
Si se proporciona un estado booleano, fuerza el cambio a true o false.

## - empty()
- Remueve todos los hijos (nodos secundarios directos) de un elemento.

## - append(content, ...)
- Añade uno o más nodos al final de los hijos existentes de un elemento.

## - prepend(content, ...)
- Añade uno o más nodos al principio de los hijos existentes de un elemento.

## - after(content, ...)
- Inserta uno o más nodos después de los hijos existentes de un elemento.

## - before(content, ...)
- Inserta uno o más nodos antes de los hijos existentes de un elemento.

## - replaceWith(newContent, ...)
- Reemplaza los hijos existentes de un elemento con uno o varios nuevos nodos.



# eventos

# mouseEvents

## - click()
se activa al hacer clic en el elemento.

## - dblclick()
 se activa cuando doble clic en el elemento.

## - mousedown()
 se activa al presionar el boton del ratón sobre el elemento.

## - mouseup()
 se activa al soltar el botón del ratón sobre el elemento.

## - mouseover()
 se activa si el puntero entra a la región de un elemento.

## - mouseout()
 se activa si el puntero sale de la región de un elemento.

## - mousemove()
 se activa mientras el puntero se encuentra dentro del elemento.



## - contextmenu()
Se activa al abrir un menú contextual (clic derecho).


# keyEvents 


## - keydown()
Se activa al pulsar una tecla.

## - keypress()
Se activa al pulsar una tecla y soltarla, sin tener en cuenta las combinaciones de teclas.  

## - keyup()
Se activa al soltar una tecla.



# form Events

## - submit()
Se activa al enviar un formulario.

## - reset()
Se activa al reiniciar los valores de un formulario.

## - focus()
Se activa al poner foco en un input o textarea.

## - blur()
Se activa al quitar foco de un input o textarea.

## - change()
Se activa al cambiar el valor de un input o select.



# - document/window

## - ready()
Se activa cuando todo el DOM ha sido construido.

## - load()
Se activa cuando todos los recursos (imágenes, scripts) han terminado de cargarse.

## - resize()
Se activa al redimensionar la ventana del navegador.

## - scroll()
Se activa al hacer scroll por la ventana del navegador.

## - error()
Se activa cuando hay un error

## unload()
Se activa cuando se va a cerrar el navegador.



## sintaxis de jquery

es opcional el tiempo y el callback

<!-- $("#p1").mouseenter(function(){
  alert("You entered p1!");
}); -->

## post: la velocidad puede se lenta rapida o en milisengundos


## hide()
para esconder un elemento
<!-- $(selector).hide(speed,callback); -->

## - show()
para mostrar un elemento
<!-- $(selector).show(speed,callback); -->


## toggle()
muestra u oculta un elemento
<!-- $(selector).toggle(speed,callback); -->

();
("slow");
(3000);


## fadeIn()
Aumenta gradualmente la opacidad de un elemento.


## fadeOut()
Disminuye gradualmente la opacidad de un elemento.

## fadeToggle()
Alterna entre fadeIn y fadeOut.

## slideDown()
Mueve hacia abajo su contenido para mostrarlo.

## slideUp()
Mueve hacia arriba su contenido para ocultarlo.

## slideToggle()
Alterna entre slideDown y slideUp.

# animaciones

es opcional los dos ultimos mas no los estilos
# sintaxis 
<!-- $(.container).animate({propiedades css},speed,callback) -->

se  puede implementar varias funciones para que se ejecuten una despues de la otra ya que jquery funciona con el metodo de cola

<!-- $("button").click(function(){
  var div = $("div");
  div.animate({left: '100px'}, "slow");
  div.animate({fontSize: '3em'}, "slow");
});  -->




