# Exercicio 7Graus

Introdução
------------

Este exercício foi desenvolvido em php puro não contendo interface gráfica, baseado no conhecimento adquirido há 3 anos e sem continuidade no dia-a-dia. Nessa altura, fiz parte de equipas que desenvolveram rebrandings e foi utilizado wordpress, drupal e laravel na grande maioria dos projetos.

Classe shape
------------

Esta é classe base do exercício.
Tem um construtor que recebe 4 parâmetros:
- ``name`` - Parâmetro público, que tem como valor default ``Random Shape`` no caso de não ser introduzido.
- ``length`` - Parâmetro protegido, utilizado para calcular a área de um rectângulo.
- ``width`` - Parâmetro protegido, utilizado para calcular a área de um rectângulo.
- ``id`` - Parâmetro privado, utilizado para definir parte do id.

Esta classe tem também uma constante que define o objecto como tipo 1.

Tem um setter e getter de id. Este Id está dividido em 3 partes:
- Prefixo - ``SHP7G``.
- Módulo - Utiliza o Id previamente introduzido. No caso de este ser nulo, é utilizado o valor Dia/Mês/Ano sem as barras.
- Sufixo - que reflecte sempre o ano em que o programa corre.

Tem um método para clonar o objecto.
Tem um método público ``returnCircleArea`` que recebe um parâmetro ``radius`` que calcula a área de um rectângulo e retorna essa mesma área.

Classe rectangle
------------

Esta classe é uma extensão da shape.
Esta classe tem também uma constante que define o objecto como tipo 2.

Classe circle
------------

Esta classe é uma extensão da shape.
Tem um construtor que recebe 1 parâmetro:
- ``radius`` - Parâmetro protegido, utilizado para calcular a área de um círculo.

Este construtor, utiliza também o construtor da classe pai para inicializar as restantes propriedades do objecto pai.
Esta classe tem também uma constante que define o objecto como tipo 3.

À semelhança da classe shape, tem um método para clonar o objecto.
Tem também um método público ``returnCircleArea`` que recebe um parâmetro ``radius`` que calcula a área de um círculo e retorna essa mesma área.