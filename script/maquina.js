const maquina=document.getElementById("maquina")



const maquinaEscribir = (text = '',tiempo = 200, etiqueta = '') => {
    let arrayCaracteres = text.split('')
    etiqueta.innerHTML = ''
    let i = 0
    let j = text.length
    let escribir = setInterval(function(){
      if (i === arrayCaracteres.length) {
        etiqueta.innerHTML = text.substring(0,j)
        j--
        if (j === 0) {
          etiqueta.innerHTML = ''
          i = 0
          j = text.length
        }
      } else {
        etiqueta.innerHTML += arrayCaracteres[i]
        i++
      }
    }, tiempo)
  }
  

  maquinaEscribir("Bienvenidos a nuestra tienda virtual de video juegos la cual tiene muchas variedades de consolas y juegos en tendencia.  ",100, maquina)