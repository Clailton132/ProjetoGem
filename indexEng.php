<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>KNOWLEDGE SYSTEMS LABORATORY</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/visual.css">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		a:link, a:visited, a:active {
			text-decoration: none;
		}
</style>
	
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#">.:: LSC ::.</img></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#atuacao">Research Areas</a></li>
				<li><a href="#pessoas">Staff</a></li>
				<li><a href="#projetos">Projects</a></li>
				<li><a href="#recursos">Resources</a></li>
				<li><a href="#publicacoes">Publications</a></li>
      			</li>
				<li><a href="#sobre">Sobre</a></li>
				<li><a href="index.php"><img src="img/eua.png"></span> Português</a></li> 
			</ul>
		</div>
	</div>
</nav>
  <?php 

  ?>
<div class="container-fluid"  style="margin-top: 50px;padding-left: 0px;padding-right: 0px;">
	<div class="row-fluid">
		<header>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #5cd65c;">
				<img style="height: auto; " class="img-responsive img-circle" src="img/bola.jpg">
				<h2>KNOWLEDGE SYSTEMS LABORATORY</h2>
			</div>
		</header>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="atuacao" >
			<div class="col-lg-12 text-center">
				 <h2>Research Areas</h2>   
				<hr class="star-light">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Multiagent Systems</h4>
						<p>Os Sistemas Multiagentes (SMA) formam uma sub-área da Inteligência artificial Distribuída e concentram-se no estudo de agentes autônomos em um universo multiagente. Para os SMA, o termo autônomo designa o fato de que os agentes têm uma existência própria, independente da existência de outros agentes.</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Natural Lnaguage Processing</h4>
						<p>é uma subárea da inteligência artificial e da linguística que estuda os problemas da geração e compreensão automática de línguas humanas naturais. Sistemas de geração de linguagem natural convertem informação de bancos de dados de computadores em linguagem normalmente compreensível ao ser humano, e sistemas de compreensão de linguagem natural convertem ocorrências de linguagem humana em representações mais formais, mais facilmente manipuláveis por programas de computador.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Realidade Virtual</h4>
						<p>Realidade virtual é uma tecnologia de interface avançada entre um usuário e um sistema operacional. O objetivo dessa tecnologia é recriar ao máximo a sensação de realidade para um indivíduo, levando-o a adotar essa interação como uma de suas realidades temporais</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Sistemas Orientados a Objetos</h4>
						<p>É um modelo de análise, projeto e programação de sistemas de software baseado na composição e interação entre diversas unidades de software chamadas de objetos.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Informática na Educação</h4>
						<p>Informática educativa refere -se ao uso do computador e suas ferramentas no âmbito escolar, enquanto recurso pedagógico a ser utilizado pelo profissional docente. Embora o termo informática não seja o mais atual (comum na década de 80), o termo informática educativa continua sendo utilizado pelos profissionais da educação.</p>
					</div>
				</div>
			</div>	
		</div>	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="pessoas" style="background: #5cd65c;">
			<div class="col-lg-12 text-center" id="pessoas" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
		            <h2>Pessoas</h2>
		            <hr class="star-light">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Professores</h4>
						<!-- Função php que lista a url e nome dos professores -->
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from professores");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
						<a href="<?= $produto['url']?>"><?= $produto['nome']?></a><br>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Bolsistas DTI</h4>
						<!--Função php que lista os bolsistas -->
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from bolsistas");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
							<p><?= $produto['nome']?></p>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Doutorandos</h4>
						<!-- Função php que lista os doutorandos -->
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from doutorandos");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
							<p><?= $produto['nome']?></p>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Mestrandos</h4>
						<p>Cristina Elisabeth Ricken </p>
						<p>Alvaro de Azevedo Diaz</p>
						<p>Richard G. Vieira </p>
						<p>Júlio Otuyama </p>
						<p>Sandro da Silva dos Santos</p>
						<p>Monica Carapeços Arriada</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Bolsistas ITI</h4>
						<p>Igor Heidrich </p>
						<p>Glauber Volkmer </p>
						<p>Fábio Petrúcio </p>
					</div>
		        </div>	
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="projetos" >
			<div class="col-lg-12 text-center">
		        <h2>Projetos</h2>
				<hr class="star-light">
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>Museu virtual</h4>
					<small>Ferramenta de Autoria para a Construção Colaborativa de Museus em Realidade Virtual</small><br></br>
					<p>O objetivo do projeto museuVirtual é o desenvolvimento de uma ferramenta de autoria para a construção colaborativa de museus em realidade virtual nos quais imagens e objetos 3D possam ser expostos. Tais objetos e imagens podem ser explorados diretamente, através do mouse e teclado (realidade virtual não imersiva) e também, havendo disponibilidade, através de dispositivos de realidade virtual como luva e capacete (realidade virtual imersiva). Os objetos podem também ser manipulados pelo visitante do museu através de comandos, ao espírito dos adventure games. Além disso, a ferramenta permite a criação de guias virtuais ou bots com conhecimento sobre os objetos em exposição e sobre os próprios visitantes. </p>
					<small><strong>Apoio:</strong><p> ProTeM-CC - CNPq</p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>AgroREDE</h4>
					<small>Projeto de articulação de atores rurais no estado de Santa Catarina </small><br></br>
					<p>O objetivo principal deste projeto é estruturar uma rede de serviços de telemática que articule os diversos atores rurais, sobretudo aqueles ligados à agricultura familiar de SC. A hipótese básica é a de que tais serviços devem promover a melhoria da qualidade de vida destas famílias a partir do desenvolvimento sustentável do seu potencial produtivo. Isto porque além da divulgação de informações técnicas de produção e de mercado, esta rede deve permitir que tais atores compartilhem seus problemas e soluções, estabelecendo estratégias conjuntas de produção e comercialização dos seus produtos.</p>
					<small><strong></strong><p></p></small>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>Mundo dos atores</h4>
					<small>Introdução à Programação Orientada a Objetos </small><br></br>
					<p>Este projeto busca desenvolver um ambiente que favoreça o processo de aprendizagem dos conceitos da programação Orientada a Objetos. </p>
					<small><strong></strong><p></p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>MuVISC</h4>
					<small>Museu Virtual da Ilha de Santa Catarina </small><br></br>
					<p>Este projeto propõe a criação de um museu virtual que reuna o acervo fotográfico produzido sobre a Ilha de Santa Catarina. O acervo será criado através de imagens produzidas por artistas e habitantes da ilha.  </p>
					<small><strong>Apoio:</strong><p> PAPED - CAPES</p></small>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
				<h4></h4>
				<small></small>
				<p></p>
				<small><strong></strong><p></p></small>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
				<h4></h4>
				<small></small>
				<p></p>
				<small><strong></strong><p></p></small>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="recursos" style="background: #5cd65c;">
			<div class="col-lg-12 text-center">
		        <h2>Recursos</h2>
		        <hr class="star-light">
		    </div>	
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h4>Equipamentos</h4>
				<ul>
					<li>02 Estações Power-PC 233  </li>
					<li>01 microcomputador PC-Pentium II - 400 </li>
					<li>01 microcomputador PC-Pentium II - 350</li>
					<li>06 microcomputadores PC-Pentium II - 300</li>
					<li>13 microcomputadores PC-Celeron - 300</li>
					<li>01 laptop PC-Pentium MMX-200  </li>
					<li>02 impressoras jato de tinta</li>
					<li>02 scanners de mesa </li>
					<li>02 câmeras de video-conferência </li>
					<li>01 luva de realidade virtual </li>
					<li>01 óculos 3D</li>
					<li>Drives para CD-ROM, DVD e ZIP-Drive </li>
					<li>Equipamentos conectados a 100Mbits </li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h4>Espaço Físico</h4>
				<p>110m2 alocados no prédio da direção do CTC</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="publicacoes" >
			<div class="col-lg-12 text-center">
		        <h2>Publicações</h2>
					<hr class="star-light">
		    </div>
			<div class="text-center">
				<h5>Referências sobre a produção científica do LSC podem ser encontradas nas páginas dos professores ligados ao laboratório:</h5>
				<ul>
					<li class="publicLI"><a href="http://http//www.inf.ufsc.br/~edla/">Edla Maria Faust Ramos</a></li>
					<li class="publicLI"><a href="http://www.inf.ufsc.br/~raul/">Raul Sidnei Wazlawick</a></li>
					<li class="publicLI"><a href="http://www.inf.ufsc.br/~mariani/">Antonio Carlos Mariani</a></li>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #5cd65c;">
			<div class="col-lg-12 text-center">
		        <h2>Veja Também</h2>
		        <hr class="star-light">
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="outrosGrupos">
				<h3 class="text-center"><u>Outros grupos/labs:</u></h3>
				<br>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Santa Fe Institute</a></h4>
					<p>The Santa Fe Institute is a private, non-profit, multidisciplinary research and education center, founded in 1984. Since its 
	founding SFI has devoted itself to creating a new kind of scientific research community, pursuing emerging science.  
	Operating as a small, visiting institution, SFI seeks to catalyze new collaborative, multidisciplinary projects that break down the barriers between the traditional disciplines, to spread its ideas and methodologies to other individuals and encourage the practical applications of its results. </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">The Agent Society</a> </h4>
					<p>The Agent Society is a new international industry and professional organization established to assist in the widespread 
	development and emergence of intelligent agent technologies and markets. It's members consist of leading companies and 
	institutions in the agent field, working together under a non-profit organization aegis.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">The MIT Artificial Intelligence Lab</a> </h4>
					<p>The MIT Artificial Intelligence Laboratory conducts research in many aspects of intelligence. Their aims are two-fold: to 
	understand human intelligence at all levels, including reasoning, perception, language, development, learning, and social levels, and to build useful artifacts based on intelligence.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">University of Maryland Baltimore County Agent Web</a> </h4>
					<p>Information and resources about intelligent information agents, intentional agents, software agents, softbots, knowbots,infobots, etc. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">CRESS - the centre for research on simulation in the social sciences</a>  </h4>
					<p>CRESS, the Centre for Research on Simulation in the Social Sciences, is supported by the Economic and Social Research Council in order to increase awareness and use of simulation by social scientists. It will draw together and promote current research on the application and benefits of simulation methods across the social sciences.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">The Multi-agent Systems Research Group of Washington University, St. Louis</a> </h4>
					<p>The Multiagent Systems Research Group is concerned with designing, analyzing and implementing sophisticated AI systems consisting of multiple agents. Special focus is on the coordination of self-interested agents in open systems.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Illinois Genetic Algorithm Laboratory</a>  </h4>
					<p>The research of the Illinois Genetic Algorithms Laboratory (IlliGAL) centers on the theory and application of genetic algorithms (GAs), search procedures based on the mechanics of natural genetics and natural selection. The Illinois Genetic Algorithms Laboratory's Director is David Goldberg.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Complexity On-line</a></h4>
					<p>Complexity On-line is a scientific information network about complex systems. You will find access to sites, publications (including the Complexity On-line Journal ) and other sources of interest. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">DESIRE Research Programme </a></h4>
					<p>The DESIRE research programme focusses on the study of compositional multi-agent systems for complex (and often 
distributed) tasks and development methods for these systems. Such systems model and support users in coordinating andperforming complex cooperative tasks (e.g., design projects, distributed process control). </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">UBWeb Computational Linguistics Research Group  </a></h4>
					<p>Research within the group centers around the developement of systems of automatic acquisition of linguistic knowledge. The recent goal shift in Computational Linguistics has meant the change of small inteligent systems by more basic linguistic tools. One basic concept is the development of automatic or semi-automatic systems of acquisition of linguistic knowledge that make our aims more easily and robustly reached. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Centria  </a></h4>
					<p>The Centro de Inteligência Artificial(CENTRIA) is an institutionalized research centre of the Universidade Nova de Lisboa (UNL). Its main areas of activity are: Knowledge Representation and Reasoning, Logic Programming,  Natural Language, Constraints, Soft Computing and Autonomous Agents, Cognitive Science. <a href="http://www-ssdi.di.fct.unl.pt/~glint/Forum-LP/">(Forum-LP) </a></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Catálogo da SINTEF  </a></h4>
					<p>Nesta página encontra-se um catálogo de recursos computacionais da língua portuguesa que se encontram mencionados, ou directamente acessíveis, na Internet. O objectivo que presidiu a esta "catalogação" foi o de tornar mais fácil, a todos quantos se dedicam à tarefa de processar computacionalmente o português, o acesso aos recursos e a comunicação entre os vários criadores/utilizadores desses mesmos recursos. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">IRCS</a></h4>
					<p>The Institute for Research in Cognitive Science at the University of Pennsylvania fosters the development of a science of the human mind through the interaction of investigators from the disciplines of Linguistics, Mathematical Logic, Philosophy, Psychology, Computer Science, and Neuroscience.  </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href=""></a></h4>
					<p></p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
			<div class="col-lg-12 text-center">
		            <h2>Sobre</h2>
								<hr class="star-light">
		        </div>	
		</div>
	</div>
</div>

</body>
<script type="text/javascript">
</script>
</html>
