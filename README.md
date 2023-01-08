<p dir="ltr" style="text-align:center"><strong>GRUPO INOVALE&nbsp;&nbsp;</strong></p>

<p dir="ltr" style="text-align:center"><strong>AVALIA&Ccedil;&Atilde;O T&Eacute;CNICA</strong></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

<table>
	<tbody>
		<tr>
			<td>
			<p dir="ltr" style="text-align:center"><strong>Candidato(a): jonathan de almeida&nbsp;&nbsp;</strong></p>
			</td>
			<td>
			<p dir="ltr" style="text-align:center"><strong>Data: 09/01/2023</strong></p>
			</td>
		</tr>
		<tr>
			<td>
			<p dir="ltr" style="text-align:center"><strong>Email: jonathanalmeidajua@gmail.com&nbsp;&nbsp;</strong></p>
			</td>
			<td>
			<p dir="ltr" style="text-align:center"><strong>Telefone: 74991188113&nbsp;</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p>Para a&nbsp;<strong>&nbsp;Se&ccedil;&atilde;o 1&nbsp;</strong> segue codigo com logica de funcionamente em PHP na pasta<strong>&nbsp; /Secao_1/process.php</strong></p>

<p>Para a&nbsp;<strong>&nbsp;Se&ccedil;&atilde;o 2&nbsp;</strong> segue codigo com logica de funcionamente em PHP na pasta<strong>&nbsp; /Secao_2/process.php</strong></p>

<p>Para a&nbsp;<strong>&nbsp;Se&ccedil;&atilde;o 3 </strong> segue codigo com logica de funcionamente em PHP na pasta<strong>&nbsp; /Secao_3/process.php</strong></p>

<p>&nbsp;</p>

<h2><strong>Complemento para a&nbsp;&nbsp;Se&ccedil;&atilde;o 3 </strong></h2>


<h3><strong>Sistema de pesagem:</strong></h3><br>


<li>Inicializar o microcontrolador dedicado.</li>
		<li>Iniciar a coleta de dados das pesagens atrav&eacute;s da interface serial.</li>
<li>Armazenar os dados das pesagens, incluindo o valor do peso em hexadecimal, a unidade de medida (quilograma ou grama) e a estabilidade da pesagem (est&aacute;vel ou inst&aacute;vel).</li>
<li>Aguardar o recebimento do caractere &#39;C&#39; via interface serial.</li>
<li>Quando o caractere &#39;C&#39; for recebido:
<ol>
<li>Verificar a estabilidade da pesagem.</li>
<li>Se a pesagem for est&aacute;vel:
<ol>
<li>Enviar os dados da pesagem para o microcontrolador principal atrav&eacute;s da interface de comunica&ccedil;&atilde;o.
</li>
</ol>
</li>
</ol>
</li>
</ol>
	</li>
	<li>Inicializar o microcontrolador principal.</li>
	<li>Iniciar a recep&ccedil;&atilde;o dos dados das pesagens enviados pelos microcontroladores dedicados.</li>
	<li>Processar os dados das pesagens, incluindo a convers&atilde;o do valor do peso de hexadecimal para decimal e a determina&ccedil;&atilde;o da unidade de medida.</li>
	<li>Enviar os dados processados para o computador via USB.</li>
	<li>Receber os dados no computador e exibir as informa&ccedil;&otilde;es das pesagens na tela.</li>
</ol>

<p>&nbsp;</p>

<h3>Protocolos para cada microcontrolador:</h3>

<p>&nbsp;
<p><strong>Microcontrolador dedicado:</strong></p>
</p>

<ul>
	<li>Coletar os dados das pesagens, incluindo o valor do peso em hexadecimal, a unidade de medida (quilograma ou grama) e a estabilidade da pesagem (est&aacute;vel ou inst&aacute;vel) atrav&eacute;s da interface serial.</li>
	<li>Armazenar os dados das pesagens em uma vari&aacute;vel.</li>
	<li>Aguardar o recebimento do caractere &#39;C&#39; via interface serial.</li>
	<li>Verificar a estabilidade da pesagem.</li>
	<li>Se a pesagem for est&aacute;vel, enviar os dados da pesagem para o microcontrolador principal atrav&eacute;s da interface de comunica&ccedil;&atilde;o. Se a pesagem for inst&aacute;vel, n&atilde;o enviar os dados.</li>
	<br />
	&nbsp;
</ul>

<p><strong>Microcontrolador principal:</strong></p>

<ul>
	<li>Iniciar a recep&ccedil;&atilde;o dos dados das pesagens enviados pelos microcontroladores dedicados atrav&eacute;s da interface de comunica&ccedil;&atilde;o </li>
	<li>Processar os dados das pesagens, incluindo a convers&atilde;o do valor do peso de hexadecimal para decimal e a determina&ccedil;&atilde;o da unidade de medida.</li>
	<li>Enviar os dados processados para o computador via USB.</li>
</ul>

<p>&nbsp;</p>

<h3><strong>considera&ccedil;&otilde;es adicionais&nbsp;</strong></h3>

<ul>
	<li>&Eacute; importante garantir a integridade dos dados coletados pelo microcontrolador dedicado, verificando se eles est&atilde;o completos e corretos antes de envi&aacute;-los para o microcontrolador principal.</li>
	<li>O microcontrolador principal deve ter um mecanismo de sincroniza&ccedil;&atilde;o para garantir que ele esteja pronto para receber os dados das pesagens antes que os microcontroladores dedicados os enviem.</li>
	<li>&Eacute; importante considerar as poss&iacute;veis falhas no sistema, como problemas na interface serial ou na conex&atilde;o USB, e implementar medidas de conting&ecirc;ncia para lidar com essas falhas.</li><br>
<p>Op&ccedil;&otilde;es&nbsp; para pesagem inst&aacute;vel:</p>
<li>Ignorar os dados da pesagem inst&aacute;vel: neste caso, o microcontrolador dedicado simplesmente n&atilde;o enviaria os dados para o microcontrolador principal. No entanto, isso pode levar a perda de informa&ccedil;&otilde;es &uacute;teis, especialmente se a pesagem inst&aacute;vel for tempor&aacute;ria e corrigida rapidamente.</li>
<li>Armazenar os dados da pesagem inst&aacute;vel para an&aacute;lise posterior: neste caso, o microcontrolador dedicado poderia armazenar os dados da pesagem inst&aacute;vel em uma mem&oacute;ria tempor&aacute;ria (como uma fila), de modo que eles pudessem ser analisados posteriormente. Isso poderia ser &uacute;til para identificar problemas no equipamento de pesagem ou para obter uma compreens&atilde;o mais completa da estabilidade do sistema.</li>
</ul>
