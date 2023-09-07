const izq = document.querySelector('#izq')
const dere = document.querySelector('#dere')
const para = document.querySelector('.para')
const link = document.querySelector('#link')

const parrafos = [['AUTOCONCEPTO: El autoconcepto es la opinión que una persona tiene sobre sí misma, que lleva asociado un juicio de valor. Autoconcepto no es lo mismo que autoestima, sin embargo su relación es muy estrecha y no podría entenderse uno sin la presencia del otro.La manera en que nos vemos a nosotros mismos y a nuestras habilidades es lo que podríamos llamar el «autoconcepto». ', '/blog'], 
['AUTOESTIMA: La autoestima es el conjunto de percepciones, pensamientos, evaluaciones, sentimientos y tendencias de comportamientos dirigidos hacia uno mismo, hacia nuestra manera de ser, y hacia los rasgos de nuestro cuerpo y nuestro carácter. Se puede definir la autoestima como «la valoración positiva o negativa que el sujeto hace de su autoconcepto, valoración que se acompaña de sentimientos de valía personal y auto aceptación» Tipos de autoestima Autoestima alta y estable. Autoestima baja y estable. ', '/autoestima'],
['RELACIONES INTERPERSONALES: Las relaciones interpersonales son asociaciones entre dos o más personas. Estas asociaciones pueden basarse en emociones y sentimientos, como el amor y el gusto artístico, el interés por los negocios y por las actividades sociales, las interacciones y formas colaborativas en el hogar, entre otros. Tipos de relaciones interpersonales Relaciones íntimas o afectivas. Relaciones familiares. Relaciones superficiales. Relaciones circunstanciales. Relaciones de rivalidad. Evita el conflicto siempre que puedas. Aprende a aceptar las diferencias. Muéstrate abierto/abierta a las relaciones y a la interacción. ', '/relaciones-interpersonales',],
 ['GENERO: De acuerdo a la Organización Mundial de la Salud (OMS), El género se refiere a los conceptos sociales de las funciones, comportamientos, actividades y atributos que cada sociedad considera apropiados para los hombres y las mujeres. El género se refiere a la manera en que la sociedad cree que tenemos que vernos, pensar y actuar como niñas y mujeres, y niños y hombres. ', '/gen'], 
 ['ORIENTACION SEXUAL: Las orientaciones sexuales pueden ser: heterosexual (atracción a personas de distinto sexo), homosexual (atracción hacia personas del mismo sexo) y bisexual (atracción a personas de ambos sexos). Gays: Término político para identificar a hombres que asumen de manera abierta su orientación sexual por otros hombres. La orientación sexual es diferente al género y a la identidad de género. La orientación sexual se refiere a quién te atrae y hacia quién sientes atracción romántica, emocional y sexual. ', '/orenta'], 
 ['PREFERENCIA SEXUAL: Por lo tanto la orientación sexual es innata, la preferencia genérica es adquirida, es una consecuencia de la orientación sexual, y ambos términos caben en la misma persona pero en momentos diferentes. El término preferencia sexual se puede emplear para las actividades sexuales que más nos gusten o que prefiramos La identidad de género es cómo te sientes dentro y cómo lo expresas. ', '/preferenc']]
let num = 0

para.textContent = parrafos[num][0]

function cambiarParrafo(texto, p) {
  para.textContent = texto
  link.setAttribute('href', p)
}

izq.addEventListener('click', () => {
  if (num !== 0) {
    num--
  }
  else
  {
    num = parrafos.length - 1
  }
  cambiarParrafo(parrafos[num][0], parrafos[num][1])
})

dere.addEventListener('click', () => {
  num++
  if (num === parrafos.length) {
    num = 0
  }
  cambiarParrafo(parrafos[num][0], parrafos[num][1])
})