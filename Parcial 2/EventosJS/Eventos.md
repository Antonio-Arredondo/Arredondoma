# Eventos

Para entender el concepto de bubbling, hay que hablar antes de los eventos

Los eventos son la manera que tenemos de monitorizar el comportamiento de nuestros usuarios, por ejemplo al detectar cuando se hace click en un botón

Para capturar esos eventos se utilizan los listeners, con la siguiente estructura

```
el.addEventListener(event, () => {})
```

Donde para capturar el click en un botón, el event será del tipo click

```
const el = document.getElementById('mi_boton')
el.addEventListener('click', () => {
  console.log('elemento clicado!')
})
```

### Bubbling y Capturing

El bubbling es el hecho de tener eventos que traspasan el elemento primero y se propagan a sus elementos que los incluyan

Y lo contrario es el capturing, es decir, es lo mismo pero el evento va en la dirección opuesta, nace en el elemento más general y se va propagando hasta llegar al elemento original

Podemos conseguir este orden inverso en los listeners especificando la propiedad capture.

### Anular la propagación de los eventos

Lo más habitual es no querer que el evento se propague, algo que se resuelve de forma muy sencilla añadiendo un stopPropagation()

```
document.getElementById('mi_boton_1').addEventListener('click', e => {
  e.stopPropagation()
  console.log('boton 1 clicado!')
})
```
